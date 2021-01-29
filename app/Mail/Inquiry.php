<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Inquiry extends Mailable
{
    use Queueable, SerializesModels;

    protected $reqData;

   /**
    * Create a new message instance.
    *
    * @return void
    */
   public function __construct($request)
   {
       $this->reqData = $request->only('full_name', 'email');
   }

   /**
    * Build the message.
    *
    * @return $this
    */
   public function build()
   {
       return $this->text('emails.inquiry')
           ->subject("お問い合わせがありました")
           ->with(['reqData' => $this->reqData]);
   }
}
