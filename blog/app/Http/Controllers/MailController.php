<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        Mail::send(['text'=>'mail'], ['name' => 'Max new laravel'], function ($message){
            $message->to('meison98@bk.ru', "To test Max")->subject('Test');
            $message->from('meison98@bk.ru','Test2');
        });
    }
}
