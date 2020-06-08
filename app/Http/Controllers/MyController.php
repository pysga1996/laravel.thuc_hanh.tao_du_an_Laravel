<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function hello($name, $yearOfBirth) {
        return "Hello " . $name . ", who was born in " . $yearOfBirth;
    }

    public function goodbye($name, $yearOfBirth) {
        return "Good Bye " . $name . ", who was born in " . $yearOfBirth;
    }
}
