<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class BookingController extends Controller
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


        // return $request;
        // $lang=  $request->segment(1);
        // if($lang == 'fr'){
        //     return 'ahahahah en';
        // }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'country' => 'required|string|max:255',
            'accommodation' => 'required|string|max:255',
            'activity' => 'required|string|max:20',
            'person' => 'required|string|max:255',
            'checkin' => 'required|date|after:today|max:255',
        ]);

        if ($validator->fails()) {
            Session::flash('error', $validator->errors()->first());

            return redirect()->back()->withFragment('booking-form')->withInput($request->all());
        }

        $booking = new booking();
        $booking->name = $request->input('name');
        $booking->phone = $request->input('phone');
        $booking->email = $request->input('email');
        $booking->country = $request->input('country');
        $booking->accommodation = $request->input('accommodation');
        $booking->activity = $request->input('activity');
        $booking->person = $request->input('person');
        $booking->checkin = $request->input('checkin');
        $booking->message = $request->input('message');
        $booking->total = $request->input('total');
        $booking->save();

        // Mail::to('info@salty-wave.com')->send(new contactForm($Contact));

        if($lang == 'fr'){
                 return redirect()->back()->with('success', 'Merci '. $request->input('name') .'. Votre réservation ! Elle est actuellement en cours de traitement.')->withFragment('contact');;
             }
        return redirect()->back()->with('success', 'Thank you '. $request->input('name') .'. Your Booking! Its Currently Being Processed.')->withFragment('contact');

    }

    /**
     * Display the specified resource.
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(booking $booking)
    {
        //
    }
}
