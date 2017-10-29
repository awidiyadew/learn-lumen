<?php

namespace App\Http\Controllers;

class KucingController extends Controller {

    public function __construct() {

    }

    public function show($id, $sound) {
        return "Kucing ".$id." sounds like ".$sound; 
    }

    public function showJson($id, $sound) {
        return response()
                    ->json([
                                'success' => true,
                                'data' => 'kucing '.$id.' sound like '.$sound
                            ], 200);
    }

}
