<!DOCTYPE html>
<x-navbar/>
<html>
    <body style="background-color: #000; padding: 20px;">
        <div style=" padding: 30px 30px;background-color:#3e4247;height: 100%; border-radius: 15px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
<h5 style="color: #27a776; font-size:24px;">Mail inviata da:</h5> <p style="color: #fff; font-size:18px;">{{{$content['name']}}}</p>
<h5 style="color: #27a776; font-size:24px;">eMail:</h5> <p style="color: #fff; font-size:18px;">{{{$content['email']}}}</p>
<h5 style="color: #27a776; font-size:24px;">Motivo del contatto:</h5><p style="color: #fff; font-size:18px;">{{{$content['subject']}}}</p>

<h5 style="color: #27a776; font-size:24px;">Messaggio:</h5>

<p style="color: #fff; font-size:18px;">{{{$content['message']}}}</p>

        </div>
        <x-footer/>
    </body>

