<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserUpdated extends Mailable
{
    use Queueable, SerializesModels;

    public $password;

    /**
     * Create a new message instance.
     *
     * @param null $password
     */
    public function __construct($password = null)
    {
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('no-reply@auther.ryangurnick.com')
            ->subject('[auther] updated account information!')
            ->markdown('emails.user-updated', ['password' => $this->password]);
    }
}
