<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testing extends Controller
{
    public function kitacoba()
    {
        return Response(["saya belajar JSON API", "Disini data baru"]);
    }
}
