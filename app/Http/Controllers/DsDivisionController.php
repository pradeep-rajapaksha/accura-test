<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DsDivision;

class DsDivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisions = DsDivision::all();
        return view('ds-divisions.index', compact('divisions'));
    }
}
