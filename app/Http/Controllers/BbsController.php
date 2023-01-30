<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index() {
        return response('Here will be advert\'s list.')->header('Content-Type', 'text/plain');
    }
}
