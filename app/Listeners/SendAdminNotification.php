<?php

namespace App\Listeners;

use App\Events\SuratCreated;
use App\Models\User;
use App\Notifications\AdminNotification;
use Illuminate\Support\Facades\Notification;

class SendAdminNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SuratCreated $event)
    {
        $adminUsers = User::where('is_admin', true)->get();
        Notification::send($adminUsers, new AdminNotification($event->surat));
    }
}
