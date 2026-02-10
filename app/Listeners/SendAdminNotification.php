<?php

namespace App\Listeners;

use App\Events\SuratCreated;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AdminNotification;

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
