<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail as Email;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controller as BaseController;

class EmailController extends BaseController
{
    public function index(){

        $details = [
        'title' => 'Mail from websitepercobaan.com',
        'body' => 'This is for testing email using smtp'
        ];
       
        Mail::to('emailpenerima@gmail.com')->send(new Email($details));
       
        dd("Email sudah terkirim.");
    
        }
}
