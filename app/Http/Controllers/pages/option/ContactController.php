<?php

namespace App\Http\Controllers\pages\option;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public  function index(){
        return view('option.contact');
    }
}
