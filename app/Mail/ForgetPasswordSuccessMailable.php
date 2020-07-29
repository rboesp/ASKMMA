<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetPasswordSuccessMailable extends Mailable
{
    use Queueable, SerializesModels;
    private $name;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $link
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('auth.passwords.users.successful-reset-email')
            ->subject('Your MMA Password Reset Confirmation')
            ->with([
                'name' => $this->name,
            ]);
    }
}
