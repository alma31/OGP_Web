<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller

{
    public function init()

    {
        $name_page = "Evenements";
        return view('event', ['name_page' => $name_page]);

    }
}
