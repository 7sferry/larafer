<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = [
            '0' => [
                'nama_depan' => 'ferry',
                'nama_blkg' => 'suhandri',
                'kota' => 'bandung'
            ],
            '1' => [
                'nama_depan' => 'ff',
                'nama_blkg' => 'ss',
                'kota' => 'solok'
            ]
        ];
        return $users;
    }
}
