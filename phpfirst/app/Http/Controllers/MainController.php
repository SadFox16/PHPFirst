<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class MainController extends Controller{

    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function review(){
        $reviews = new ContactModel();
        return view('review', ['reviews' => $reviews->all()]);
    }

    public function review_check(Request $request){
        $valid = $request->validate([
            'email' => 'required',
            'subject' => 'required|min:4|max:20',
            'message' => 'required|min:15'
        ]);

        $review= new ContactModel();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('review');
    }
}
