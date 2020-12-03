<?php

namespace App\Http\Controllers;

use Symfony\Component\Console\Output\ConsoleOutput;

class MyController extends Controller
{
    //
    public function hello($name, $year_of_birth) {
        $x=5;
        $out = new ConsoleOutput();
        $out->writeln($x);
        return "Hello " . $name . ", who was born in " . $year_of_birth;
    }

    public function goodbye($name, $year_of_birth) {
        return "Good Bye " . $name . ", who was born in " . $year_of_birth;
    }
}
