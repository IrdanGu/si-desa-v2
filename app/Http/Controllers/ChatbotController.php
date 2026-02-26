<?php

namespace App\Http\Controllers;

use App\Services\ChatbotService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ChatbotController extends Controller
{
    protected $chatbotService;

    public function __construct(ChatbotService $chatbotService)
    {
        $this->chatbotService = $chatbotService;
    }

    /**
     * API endpoint untuk chatbot
     */
    public function chat(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:500',
            'session_id' => 'nullable|string',
        ]);

        // Generate atau gunakan session ID yang ada
        $sessionId = $request->input('session_id') ?? session('chatbot_session_id');
        if (!$sessionId) {
            $sessionId = Str::uuid()->toString();
            session(['chatbot_session_id' => $sessionId]);
        }

        $userId = Auth::check() ? Auth::id() : null;

        // Proses pesan
        $response = $this->chatbotService->processMessage(
            $request->input('message'),
            $sessionId,
            $userId
        );

        return response()->json([
            'success' => true,
            'data' => $response,
            'session_id' => $sessionId,
        ]);
    }

    /**
     * Get conversation history
     */
    public function history(Request $request)
    {
        $sessionId = $request->input('session_id') ?? session('chatbot_session_id');
        
        if (!$sessionId) {
            return response()->json([
                'success' => true,
                'data' => [],
            ]);
        }

        $history = $this->chatbotService->getHistory($sessionId);

        return response()->json([
            'success' => true,
            'data' => $history,
        ]);
    }

    /**
     * Clear conversation history
     */
    public function clear(Request $request)
    {
        session()->forget('chatbot_session_id');

        return response()->json([
            'success' => true,
            'message' => 'Percakapan telah direset.',
        ]);
    }

    /**
     * Widget view (untuk embed di frontend)
     */
    public function widget()
    {
        return view('chatbot.widget');
    }
}
