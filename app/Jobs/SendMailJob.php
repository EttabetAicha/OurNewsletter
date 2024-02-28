<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Mail as Mails;
use Illuminate\Support\Facades\Mail;


class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $details;
   

    /**
     * Create a new job instance.
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $mails = Mails::all();
        $input['title'] = $this->details['title'];
        $input['content'] = $this->details['content'];

        foreach ($mails as $mail) {
            $input['email'] = $mail->email;
            Mail::mailer('smtp')->send('mail.test_mail', ['input' => $input], function ($message) use ($input) {
                $message->to($input['email'])
                    ->subject($input['title']);
            });
        }
    }
}
