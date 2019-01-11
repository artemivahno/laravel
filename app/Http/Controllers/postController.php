<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
	public function index()
	{
		echo index;
	       return view('post.index');
	}
}
