<?php

namespace Magan\Feedback\Tests\Integration;

use Illuminate\Support\Facades\Mail;
use Magan\Feedback\Mails\SendClientFeedback;
use Magan\Feedback\Tests\TestCase;

class MailTest extends TestCase
{
    /** @test */
    public function test_mailable_content()
    {
        $mailData = [
            'fullname' => 'John Doe',
            'email' => 'john@gmail.com',
            'subject' => 'Test Subject',
            'message' => 'Test Message',
        ];

        $mailable = new SendClientFeedback($mailData);

        $mailable->assertFrom(config('feedback.mail.from.address'));
        $mailable->assertHasTo(config('feedback.mail.to.address'));
        $mailable->assertHasSubject('Test Subject');

        $mailable->assertSeeInHtml($mailData['fullname']);
        $mailable->assertSeeInHtml($mailData['email']);
        $mailable->assertSeeInHtml($mailData['subject']);
        $mailable->assertSeeInHtml($mailData['message']);
    }

    public function test_email_sending()
    {
        Mail::fake();
        Mail::send(new SendClientFeedback(
            [
                'fullname' => 'John Doe',
                'email' => 'john@gmail.com',
                'subject' => 'Test Subject',
                'message' => 'Test Message',
            ])
        );
        Mail::assertSent(SendClientFeedback::class);
    }
}
