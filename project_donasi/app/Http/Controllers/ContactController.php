<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('front.contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $data = [
            'name' => $request->name ?? 'No Name Provided',
            'email' => $request->email ?? 'no-email@example.com',
            'subject' => $request->subject ?? 'No Subject',
            'messages' => $request->message ?? 'No Message Provided',
        ];

        \Log::info('Contact Form Data:', $data);

        Mail::send('front.emails.contact', $data, function($message) use ($data) {
            $message->to('anggi.alfian55@gmail.com');

            // Ensure subject is not null before setting it
            $subject = $data['subject'] ?? 'No Subject';
            $message->subject($subject);
        });

        return redirect()->back()->with('success', 'Pesan Anda telah terkirim!');
    }
}
