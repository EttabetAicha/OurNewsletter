<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Jobs\SendMailJob;
use App\Models\Newsletter;

class SendMailController extends Controller
{

    public function send_emails(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
        ]);

        $newsletters = Newsletter::all();

        foreach ($newsletters as $newsletter) {
            $details = [
                'title' => $newsletter->title,
                'content' => $newsletter->content,
            ];

            $job = new SendMailJob($details);
            dispatch($job);
        }

        return back()->with('status', 'Mails sent successefly');
    }
}
