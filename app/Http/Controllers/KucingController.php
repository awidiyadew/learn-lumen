<?php

namespace App\Http\Controllers;

class KucingController extends Controller {

    public function __construct() {

    }

    public function show($id, $sound) {
        return "Kucing ".$id." sounds like ".$sound; 
    }

}
