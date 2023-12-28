<?php

namespace App\Http\Controllers;

use App\Mail\booking as MailBooking;
use App\Mail\bookingSystem;
use App\Models\booking;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        try{
            DB::beginTransaction();

            // return  $request;

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'country' => 'required|string|max:255',
            'accommodation' => 'required|string|max:255',
            'rooms' => 'nullable|string|max:255',
            'dorms' => 'nullable|string|max:255',
            'checkin' => 'required|date|after:today|max:255',
            'checkout' => 'required|date|after:today|max:255',
        ]);

        if($request->accommodation != "Hostle Tamraght"){
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'email' => 'required|email|max:255',
                'country' => 'required|string|max:255',
                'accommodation' => 'required|string|max:255',
                'pack' => 'nullable|string|max:255',
                'rooms' => 'nullable|string|max:255',
                'dorms' => 'nullable|string|max:255',
                'checkin' => 'required|date|after:today|max:255',
                'checkout' => 'required|date|after:today|max:255',
            ]);
        }

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

        if($request->accommodation == "Hostle Tamraght"){

            if($request->input('pack') == "Stay Only"){
                $booking->pack =$request->input('pack');
                $booking->person =$request->input('person');
                $booking->dorms = $request->input('dorms');
                $booking->rooms = $request->input('rooms');
            }else{
                if(($request->input('buddiescoaching') || $request->input('solocoaching')) != ""){
                    if(($request->input('buddiesyoga') || $request->input('soloyoga')) != ""){
                        $booking->pack = "Premuim Surf & Yoga Pack & Popular Surf Coaching Pack";
                    }else{
                        $booking->pack = "Popular Surf Coaching Pack";
                    }
                    $booking->surfcoaching = true;
                    $booking->buddiescoaching = $request->input('buddiescoaching');
                    $booking->solocoaching = $request->input('solocoaching');
                }

                if(($request->input('buddiesyoga') || $request->input('soloyoga')) != ""){

                    if(($request->input('buddiescoaching') || $request->input('solocoaching')) != ""){
                        $booking->pack = "Premuim Surf & Yoga Pack & Popular Surf Coaching Pack";
                    }else{
                        $booking->pack = "Premuim Surf & Yoga Pack";
                    }

                    $booking->surfyoga = true;
                    $booking->buddiesyoga = $request->input('buddiesyoga');
                    $booking->soloyoga = $request->input('soloyoga');
                }
            }





        }else{
            $booking->pack =$request->input('pack');
            $booking->person =$request->input('person');
            // $booking->dorms = $request->input('dorms');
            // $booking->rooms = $request->input('rooms');
        }

        $booking->checkin = $request->input('checkin');
        $booking->checkout = $request->input('checkout');
        $booking->message = $request->input('message');
        $booking->status = "Pending";
        $booking->total = $request->input('total');
        $booking->save();


        Mail::to($booking->email)->send(new MailBooking($booking));
        Mail::to('info@salty-wave.com')->send(new bookingSystem($booking));

        DB::commit();
        if($lang == 'fr'){
                 return redirect()->back()->with('success', 'Merci '. $request->input('name') .'. Votre réservation ! Elle est actuellement en cours de traitement.')->withFragment('booking-form');;
             }
        return redirect()->back()->with('success', 'Thank you '. $request->input('name') .'. Your Booking! Its Currently Being Processed.')->withFragment('booking-form');

        }catch(Exception $e){
            DB::rollback();
            if($lang == 'fr'){
                Session::flash('error', 'Excusez-moi, il y a eu un problème pour envoyer votre message. Veuillez essayer de l’envoyer plus tard.');
            }

            Session::flash('error', 'Apologies, there was an issue sending your message. Please attempt to send it again later.');

            return redirect()->back()->withFragment('booking-form')->withInput($request->all());
        }
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
