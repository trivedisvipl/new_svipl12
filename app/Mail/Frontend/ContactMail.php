<?php

namespace App\Mail\Frontend;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The Enquiry instance.
     *
     * @var Enquiry
     */
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data){
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){

        $subject = 'Svipl Contact';

        return $this->view('frontend.email.Contact')->subject($subject)->from(config('settings.fromEmail'));

    }
}
