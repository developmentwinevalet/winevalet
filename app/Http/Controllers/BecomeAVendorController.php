<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BecomeAVendorController extends Controller
{
    //

    public function save_vendor (Request $request) {

    }

    public function become_a_vendor () {
        return view("auth.vendor_register");
    }
}
