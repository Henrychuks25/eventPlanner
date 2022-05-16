<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        // language change
        $this->middleware('common');
    }

    public function view($page = null)
    {
        $page   = DB::table('pages')->where(['slug' => $page])->first();

        return Eventmie::view('eventmie::pages', compact('page'));
    }
}
