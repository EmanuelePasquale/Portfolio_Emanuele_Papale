<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class Mail extends Model
{
    use HasFactory;

    protected $data;
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];

}
