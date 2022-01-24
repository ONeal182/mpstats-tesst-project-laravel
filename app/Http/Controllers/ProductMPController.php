<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MPStatsController;

class ProductMPController extends Controller
{
    public function index(Request $request)
    {
       
        dd((new MPStatsController)->getProduct($request->get('name'),'item',$request->get('id')));
        
    }
}
