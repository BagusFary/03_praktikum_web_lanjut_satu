<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function profile($id = null)
    {
        if ($id == null) {
            return view('nousers');
        } else {


            $users = [
                "1" => [
                    "nama" => "User 1",
                    "kelas" => "PPLS-1A"
                ],

                "2" => [
                    "nama" => "User 2",
                    "kelas" => "TI-1A"
                ]
            ];
            if (isset($users[$id])) {
                return view('profile', ["users" => $users[$id]]);
            } else {
                return view('nousers');
            }
        }
    }

    public function pengalaman()
    {
        return view('pengalaman');
    }
}
