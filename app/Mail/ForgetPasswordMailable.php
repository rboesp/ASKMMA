<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetPasswordMailable extends Mailable
{
    use Queueable, SerializesModels;
    private $name;
    private $link;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $link
     */
    public function __construct($name, $link)
    {
        //
        $this->name = $name;
        $this->link = $link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.users.reset-email')
            ->subject('Reset Your MMA Password')
            ->with([
                'name' => $this->name,
                'link' => $this->link,
            ]);
    }
}
