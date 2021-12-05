<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        try {
            return view('profile.profile');
        } catch (\Throwable $th) {
            return view('Error.custom_error', array('error_message' => $th->getMessage()));
        }
    }

    public function edit_content_one_frm()
    {
        try {
            return view('profile.content_one_frm');
        } catch (\Throwable $th) {
            return view('Error.custom_error', array('error_message' => $th->getMessage()));
        }
    }

    public function edit_content_two_frm()
    {
        try {
            return view('profile.content_two_frm');
        } catch (\Throwable $th) {
            return view('Error.custom_error', array('error_message' => $th->getMessage()));
        }
    }
}
