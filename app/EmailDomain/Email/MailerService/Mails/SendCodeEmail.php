<?php

namespace App\EmailDomain\Email\MailerService\Mails;

use Illuminate\Mail\Mailable;

class SendCodeEmail extends Mailable
{
    /**
     * @param string $email
     * @param string $code
     */
    public function __construct(
        public string $email,
        public string $code,
    ) {
    }

    /**
     * @return Mailable
     */
    public function build(): SendCodeEmail
    {
        return $this
            ->subject('Thank you for subscribing to our newsletter')
            ->markdown('emails.subscribers')
            ->view('subscribers');
    }
}
