<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use App\Models\Surat_KeteranganDomisili;
use App\Models\Surat_KeteranganUsaha;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class Navbar_Controller extends Controller
{
    public function navbar()
    {
        $surat_ktm = Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();
        $notifications_sktm = Surat::where('is_read', false)->get();
        $notifications_ku = Surat_KeteranganUsaha::where('is_read', false)->get();
        $notifications_domisili = Surat_KeteranganDomisili::where('is_read', false)->get();
        $notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);

        return view('adminlte/partial/navbar', compact('surat_ktm', 'surat_ku', 'surat_domisili', 'notifications'));
    }

    // public function getSuratCount()$notifications = $notifications_sktm->merge($notifications_ku)->merge($notifications_domisili);
    // {
    //     return $this->hasMany(Surat_KeteranganUsaha::class);
    // }

    // Method untuk mendapatkan hitungan notifikasi yang belum dibaca secara dinamis
    public function getSuratCount()
    {
        $surat_ktm = Surat::where('is_read', false)->count();
        $surat_ku = Surat_KeteranganUsaha::where('is_read', false)->count();
        $surat_domisili = Surat_KeteranganDomisili::where('is_read', false)->count();

        return response()->json(['surat_ktm' => $surat_ktm], ['surat_ku' => $surat_ku], ['surat_domisili' => $surat_domisili]);
    }

    public function markNotificationAsRead(Request $request)
    {
        // Get the notification ID and type from the request
        $notificationId = $request->input('id');
        $pilihsurat = $request->input('pilihsurat'); // Tambahkan tipe surat (sktm atau sku)

        // Find the notification by ID and type
        if ($pilihsurat === 'Surat Keterangan Tidak Mampu') {
            $notification = Surat::find($notificationId);
        } elseif ($pilihsurat === 'Surat Keterangan Usaha') {
            $notification = Surat_KeteranganUsaha::find($notificationId);
        } elseif ($pilihsurat === 'Surat Keterangan Domisili') {
            $notification = Surat_KeteranganDomisili::find($notificationId);
        } else {
            return response()->json(['success' => false, 'message' => 'Invalid notification type'], 400);
        }

        // Check if the notification exists and belongs to the authenticated user
        if ($notification && $notification->user_id == Auth::id()) {
            // Mark the notification as read
            $notification->is_read = true;
            $notification->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Notification not found or does not belong to user'], 404);
    }
}
