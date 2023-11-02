<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; // Create this mail class in the next step

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        // Send the email
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ];

        try {
            // Attempt to send the email
            Mail::to('prashant.koirala.official@gmail.com')->send(new ContactFormMail($data));
    
            // If the email is sent successfully, set a success message
            return redirect()->back()->with('success', 'Your message has been sent. Thank you!');
        } catch (\Exception $e) {
            // If there's an error, set an error message
            return redirect()->back()->with('error', 'An error occurred while sending your message. Please try again later.');
        }
    }
}