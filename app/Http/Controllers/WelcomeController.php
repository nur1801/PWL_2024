<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello(){
        return 'Hellow World';
    }
    public function greeting(){
        return view ('blog.hello')
                ->with('name','Nurhidayah')
                ->with('occupation','Astronaut');
    }
}