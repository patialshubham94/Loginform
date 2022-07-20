<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\B2BLeadGeneration;
use Mail;

class B2BLeadGenerationController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request) {
        return view('B2BLeadGeneration.form');
      }

      // Store Contact Form data
      public function ContactUsForm(Request $request) {
          // Form validation
          $this->validate($request, [
              'First_Name' => 'required',
              'Last_Name' => 'required',
              'Email' => 'required|email|unique:b2bleadgenerationtable,Email',
              'Phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
              'Zip_Code' => 'nullable|regex:/^([0-9\s\-]*)$/|min:5|min:10',
              'Company_Name'=>'required',
              'Company_Email' => 'required|email|unique:b2bleadgenerationtable,Company_Email',
              'Company_Phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:15',
              'Company_ZipCode' => 'nullable|regex:/^([0-9\-]*)$/|min:5|max:10',
              'Company_Website' => ['required','regex:/\b(?:(?:https?|http):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i']

           ]);
          //  Store data in database
          B2BLeadGeneration::create($request->all());

          //  Send mail to admin
        // \Mail::send('mail', array(
        //     'name' => $request->get('name'),
        //     'email' => $request->get('email'),
        //     'phone' => $request->get('phone'),
        //     'subject' => $request->get('subject'),
        //     'user_query' => $request->get('message'),
        // ), function($message) use ($request){
        //     $message->from($request->email);
        //     $message->to('ajay@gmail.com', 'Admin')->subject($request->get('subject'));
        // });

          return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
      }
}



