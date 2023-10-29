<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function send(Request $request)
    {
        //Validare i dati
        $request->validate([
            "name" => "required",
            "email" => "required|email",
            "subject" => "required|min:3",
            "message" => "required|min:10"]);


        // Mappatura dei dati del modulo
        $data = [
            'name'=> $request->name,
            'email'=> $request->input('email'),
            'subject'=> $request->subject,
            'message'=> $request->message,
        ];

        // Invia l'email
        Mail::to($request->email)->send(new ContactFormMail($data));

        return redirect()->route('homepage')->with('success', 'Email inviata con successo');
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
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
    public function destroy($id)
    {
        //
    }
}
