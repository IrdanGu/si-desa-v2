<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Http\Requests\BeritaRequest;
use App\Models\Surat;
use App\Models\Surat_KeteranganDomisili;
use App\Models\Surat_KeteranganUsaha;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $surat_ktm =Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);

    $berita = Berita::orderBy('created_at', 'desc')->paginate(7);
    $cari = $request->get('keyword');
    if ($cari) {
        $berita = Berita::where('judul', 'LIKE', "%$cari%")->paginate(7);
    }
    return view('berita.index', compact('berita', 'surat_ktm', 'surat_ku','surat_domisili', 'notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {

        $surat_ktm =Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);

        return view('berita.create', compact('surat_ktm', 'surat_ku','surat_domisili','notifications'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $judul = $request->get('judul');
        $berita = new Berita;
        $berita->judul = $judul;
        $berita->slug = str::slug($judul, '-');
        $berita->content = ($request->get('content'));
        $berita->user_id = Auth::user()->id;
        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('gambar', 'public');
            $berita->gambar = $file;
        }
        $berita->save();

        return redirect()->route('beritaindex');
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $surat_ktm =Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);
        $berita = Berita::where('slug', $slug)->first();
        return view('berita.edit', compact('berita','surat_ktm','surat_domisili','surat_ku', 'notifications'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $judul = $request->get('judul');
        $berita = Berita::where('slug', $slug)->first();
        $berita->judul = $judul;
        $berita->slug = str::slug($judul);
        $berita->content = ($request->get('content'));
        if ($request->file('gambar')) {
            if ($berita->gambar && file_exists(storage_path('app/public/' . $berita->gambar))) {
                Storage::delete('public/' . $berita->gambar);
            }
            $file = $request->file('gambar')->store('gambar', 'public');
            $berita->gambar = $file;
        }
        $berita->save();
        return redirect()->route('beritaindex');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        Storage::delete('public/' . $berita->gambar);
        $berita->delete();
        return redirect()->route('beritaindex');
    }
}
