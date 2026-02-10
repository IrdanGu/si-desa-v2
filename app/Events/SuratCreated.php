<?php

namespace App\Events;

use App\Models\Surat;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SuratCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $surat;

    /**
     * Create a new event instance.
     */
    public function __construct(Surat $surat)
    {
        $this->surat = $surat;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('channel-name'),
        ];
    }
}
