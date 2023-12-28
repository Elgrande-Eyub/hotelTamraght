<?php

namespace App\Http\Controllers;

use App\Models\newsletter;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class NewsletterController extends Controller
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
    public function store(Request $request)
    {
        try{
            DB::beginTransaction();

            $email = $request['email'];

            if(empty($email)){
                return response()->json(['message' => '✘ To join our exclusive subscriber community, enter your email address in the field above and click \'Subscribe. ✘'],200);
            }

            if(newsletter::where('email',$email)->exists()){
                return response()->json(['message' => '✘ You\'re already subscribed, Keep an eye on your inbox for deals. ✘'],200);
            }

            $newsletter = new newsletter();
            $newsletter->email = $request['email'];
            $newsletter->save();
            DB::commit();
            return response()->json(['message' => '✔ Awesome! As a subscriber, you\'ll be the first to know about our latest special offers ✔'],200);
        }catch(Exception $e){
            db::rollBack();

            return response()->json(['message' => '✘ We encountered an error. Please refresh the page and try subscribing again ✘'],400);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(newsletter $newsletter)
    {
        //
    }
}
