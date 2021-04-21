<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    //
    public function send(Request $request)
    {
        if ($request->session()->has('user')) {
        $contact = new Feedback();
        $contact->user_id = $request->session()->get('user')['id'];
        $contact->name = $request->input('name');
        $contact->lastname = $request->input('lastname');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        $this->validate($request, [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        );
        Mail::to('tinchobayka@gmail.com')->send(new SendMail($data));
        return back();
        } else {
            return redirect('login');
        }
        
    }
}
