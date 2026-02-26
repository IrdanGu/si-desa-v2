<?php

namespace App\Http\Controllers;

use App\Models\ChatbotFaq;
use App\Models\ChatbotConversation;
use Illuminate\Http\Request;

class ChatbotFaqController extends Controller
{
    /**
     * Display FAQ list
     */
    public function index()
    {
        $faqs = ChatbotFaq::orderBy('category')->orderBy('created_at', 'desc')->get();
        return view('chatbot.admin.faq_index', compact('faqs'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        return view('chatbot.admin.faq_create');
    }

    /**
     * Store new FAQ
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:50',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'keywords' => 'nullable|string',
        ]);

        $keywords = $request->input('keywords') 
            ? array_map('trim', explode(',', $request->input('keywords')))
            : [];

        ChatbotFaq::create([
            'category' => $request->input('category'),
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
            'keywords' => $keywords,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('chatbot.faq.index')
            ->with('success', 'FAQ berhasil ditambahkan.');
    }

    /**
     * Show edit form
     */
    public function edit($id)
    {
        $faq = ChatbotFaq::findOrFail($id);
        return view('chatbot.admin.faq_edit', compact('faq'));
    }

    /**
     * Update FAQ
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:50',
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'keywords' => 'nullable|string',
        ]);

        $faq = ChatbotFaq::findOrFail($id);

        $keywords = $request->input('keywords') 
            ? array_map('trim', explode(',', $request->input('keywords')))
            : [];

        $faq->update([
            'category' => $request->input('category'),
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
            'keywords' => $keywords,
            'is_active' => $request->boolean('is_active', true),
        ]);

        return redirect()->route('chatbot.faq.index')
            ->with('success', 'FAQ berhasil diupdate.');
    }

    /**
     * Delete FAQ
     */
    public function destroy($id)
    {
        $faq = ChatbotFaq::findOrFail($id);
        $faq->delete();

        return redirect()->route('chatbot.faq.index')
            ->with('success', 'FAQ berhasil dihapus.');
    }

    /**
     * Display conversation analytics
     */
    public function analytics()
    {
        $totalConversations = ChatbotConversation::count();
        $todayConversations = ChatbotConversation::whereDate('created_at', today())->count();
        
        $popularIntents = ChatbotConversation::select('intent_detected')
            ->selectRaw('COUNT(*) as count')
            ->groupBy('intent_detected')
            ->orderByDesc('count')
            ->limit(10)
            ->get();

        $recentConversations = ChatbotConversation::with('user')
            ->orderBy('created_at', 'desc')
            ->limit(50)
            ->get();

        return view('chatbot.admin.analytics', compact(
            'totalConversations',
            'todayConversations',
            'popularIntents',
            'recentConversations'
        ));
    }
}
