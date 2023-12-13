<?php

namespace App\Http\Controllers;

use App\Mail\contactForm;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,$lang)
    {

        // $lang=  $request->segment(1);
        // if($lang == 'fr'){
        //     return 'ahahahah en';
        // }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            Session::flash('error', $validator->errors()->first());

            // redirect()->back()->withInput(Input::all()->withMessage('some validation error message'));

            return redirect()->back()->withFragment('contact')->withInput($request->all());
        }

        $Contact = new contact();
        $Contact->name = $request->input('name');
        $Contact->phone = $request->input('phone');
        $Contact->email = $request->input('email');
        $Contact->topic = $request->input('topic');
        $Contact->message = $request->input('message');
        $Contact->save();

        Mail::to('info@salty-wave.com')->send(new contactForm($Contact));

        if($lang == 'fr'){
                 return redirect()->back()->with('success', 'Merci '. $request->input('name') .'. Nous vous contacterons dès que possible.')->withFragment('contact');;
             }
        return redirect()->back()->with('success', 'Thank you '. $request->input('name') .'. We will contact you as soon as possible.')->withFragment('contact');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
