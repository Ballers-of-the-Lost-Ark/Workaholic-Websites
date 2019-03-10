<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Purifier;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function contact(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:200',
            'text' => 'nullable|max:3000',
        ]);

        $name = Purifier::clean($request->name);
        $email = Purifier::clean($request->email);
        $date = Purifier::clean($request->date);

        $text = $request->text;
        if ($text != '') {
            $text = Purifier::clean($request->text);
        } else {
            $text = 'No message';
        }

        dd($date);
        
        
        Mail::to('workaholic.websites@gmail.com')->send(new SendMailable($name, $email, $text, $date));

        return redirect('/contact')->with(['title' => 'Contact', 'success' => 'Message sent, I look forward to working with you']);
    }
}
