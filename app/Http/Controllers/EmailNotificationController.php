<?php

namespace App\Http\Controllers;

use App\Models\EmailNotification;
use App\Notifications\EmailNotification as EmailNotificationClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class EmailNotificationController extends Controller
{
    public function sendNotification(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        // Kirim email
        Notification::route('mail', $email)->notify(new EmailNotificationClass($subject, $message));

        // Simpan log notifikasi email
        EmailNotification::create([
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
        ]);

        return redirect()->back()->with('success', 'Email notification sent successfully.');
    }
}
