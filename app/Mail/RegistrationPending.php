<?php

namespace App\Mail;

use App\OnsiteRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistrationPending extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * On-Site contest Registration Model
     *
     * @var OnsiteRegistration
     */
    public $registration;

    /**
     * Create a new message instance.
     *
     * @param OnsiteRegistration $registration
     */
    public function __construct(OnsiteRegistration $registration)
    {
        $this->registration = $registration;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contest.on-site.pending');
    }
}
