<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function create(Request $request) {
    	$this->validate($request, [
    		'body' =
    	]);
    }
}
