<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactFromMAil;

class ContactFormController extends Controller
{
      public function index(){
          return view('contactForm.index');
      }


      public function store(){
          $rules = [
                     'name' => 'required',
                      'email' => 'required|email',
                      'message' => 'required|max:999'
                    ];
          $data = request()->validate($rules);
            
          //Sen email
          Mail::to('bpunee.b@gmail.com')->send(new ContactFromMAil($data));

          return redirect('contact')->with('message','Details Submited Successfully');         
      }
}
