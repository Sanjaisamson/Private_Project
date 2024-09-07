<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $cvPath;

    /**
     * Create a new message instance.
     *
     * @param array $data
     * @param string|null $cvPath
     */
    public function __construct($data, $cvPath = null)
    {
        $this->data = $data;
        $this->cvPath = $cvPath;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->view('Email.application')
                      ->subject('New Job Application: ' . $this->data['position'])
                      ->from($this->data['email'], $this->data['name']);

        if ($this->cvPath) {
            $email->attach(storage_path('app/public/' . $this->cvPath), [
                'as' => 'CV_' . $this->data['name'] . '.pdf', // Change file extension if necessary
                'mime' => 'application/pdf', // Adjust MIME type based on file extension
            ]);
        }

        return $email;
    }
}
