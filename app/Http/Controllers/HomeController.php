<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function __invoke()
    {
	    Benchmark::dd(function (){
		    Str::random(16);
		    
		    $data = [];
		    for ($i = 0; $i < 1000; $i++) {
			    $data[] = [
				    'name' => Str::random(10),
				    'email' => Str::random(10) . '@example.com',
				    'created_at' => now(),
				    'updated_at' => now(),
			    ];
		    }
		    
		    json_encode($data);
		    
	    }, 10);
		
	    return view('home.index');
    }
}
