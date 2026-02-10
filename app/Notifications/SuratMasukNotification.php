<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Surat;
use App\Models\Surat_KeteranganUsaha;

class SuratMasukNotification extends Notification
{
    use Queueable;

    protected $surat;

    public function __construct(Surat $surat)
    {
        $this->surat = $surat;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Notifikasi Surat Masuk')
            ->line('Anda memiliki surat baru yang perlu dibaca.')
            ->action('Lihat Surat', url('/surat/' . $this->surat->id))
            ->line('Terima kasih telah menggunakan layanan kami!');
    }

    public function toArray($notifiable)
    {
        return [
            // Data yang ingin Anda sertakan dalam notifikasi lainnya
            'surat_id' => $this->surat->id,
            'link' => url('/surat/' . $this->surat->id),
        ];
    }
}
