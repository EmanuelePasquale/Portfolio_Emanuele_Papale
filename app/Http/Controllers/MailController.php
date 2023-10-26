<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use app\Models\Mail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function send(Request $request)
    {
        //Valida i dati
        $request->validate([
            "name"=> "required",
            "email"=> "required|email",
            "subject"=> "required",
            "message"=> "required"]);


            //invia la mail
            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'subject' => $request->input('subject'),
                'message' => $request->input('message'),
            ];

            Mail::to('emanuelep.papale@gmail.com')->send(new ContactFormMail($data, $request->all()));

            return redirect()->route('index')->with('success', 'Mail inviata');
    }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
    }
}
