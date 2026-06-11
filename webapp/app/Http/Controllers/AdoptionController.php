<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdoptionController extends Controller
{
    public function showApplyForm($cat_id)
    {
        return view('adoptions.apply');
    }
}
