<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $phone;
    protected $address;
    protected $comment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $phone, $address, $comment)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.cart-mail')
            ->with([
                'name' => $this->name,
                'phone' => $this->phone,
                'address' => $this->address,
                'comment' => $this->comment,
            ])
            ->subject('Header');
    }
}
