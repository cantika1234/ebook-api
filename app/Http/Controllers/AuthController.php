<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'Nis' => 3103120167,
            'Name' => 'Nourma Islam Dewi Cantika',
            'Phone' => '08895794284',
            'Class' => 'XII RPL 5',
    
        ];
    }
}
