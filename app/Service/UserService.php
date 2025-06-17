<?php

namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserService
{



    public function getUserData()
    {
        // $data = User::where('id', $id)->first(); // Or get() if expecting multiple
        $data = User::all();
    
        return $data;
    }
    
    
}