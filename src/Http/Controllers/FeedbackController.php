<?php

namespace Magan\Feedback\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Magan\Feedback\Http\Requests\FeedbackRequest;
use Magan\Feedback\Mails\SendClientFeedback;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback::index');
    }

    public function sendEmail(FeedbackRequest $request)
    {
        Mail::send(new SendClientFeedback($request->input()));

        return redirect()->back()->with('message', 'Email sent successfully!');
    }
}
