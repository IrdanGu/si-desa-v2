<?php

namespace App\Http\Controllers;

use App\Models\User; // Ganti dengan model yang sesuai jika perlu
use App\Notifications\NewSuratNotification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendEmailNotification(Request $request)
    {
        $user = User::find(1); // Ganti dengan cara menemukan user yang sesuai
        $count = $request->input('count');

        // Kirim notifikasi email
        $user->notify(new NewSuratNotification($count));

        return response()->json(['message' => 'Email notification sent.']);
    }
}
