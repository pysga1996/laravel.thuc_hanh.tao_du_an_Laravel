<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function hello($name, $year_of_birth) {
        return "Hello " . $name . ", who was born in " . $year_of_birth;
    }

    public function goodbye($name, $year_of_birth) {
        return "Good Bye " . $name . ", who was born in " . $year_of_birth;
    }
}
