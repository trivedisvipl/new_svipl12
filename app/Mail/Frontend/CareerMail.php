<?php

namespace App\Mail\Frontend;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class CareerMail extends Mailable
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

        $subject = $this->data->position.' - Resume';

        $attachment = CAREER_PDF_PATH.$this->data->resume;

        return $this->view('frontend.email.Career')->subject($subject)->from(config('settings.fromEmail'))->attach($attachment);

    }
}
