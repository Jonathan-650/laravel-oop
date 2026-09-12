<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AnimalInfo;

class AnimalInfoController extends Controller
{
    public function index() {
        $getExamNumber6 = AnimalInfo::getExamNumber6();

        return view('animal_info')
            ->with('getExamNumber6', $getExamNumber6);
    } 
}
