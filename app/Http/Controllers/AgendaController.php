<?php

namespace ProjectLumen\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class AgendaController extends BaseController
{
    public function index()
    {
        return view('agenda');
    }
}
