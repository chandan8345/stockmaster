<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;
use Input;

class purchaseController extends Controller
{
    public function index(){
        return view('purchase');
    }
}
