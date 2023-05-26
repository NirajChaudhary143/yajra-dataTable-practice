<?php

namespace App\Http\Controllers;
use Yajra\DataTables\DataTables;
use App\Models\Blog;
// use Datatables;
use App\Models\User;

use Illuminate\Http\Request;

class blogController extends Controller
 {
    public function setBlog(){
        return view('listing');
    }
    public function getBlog(Request $request){
        return Datatables::of(Blog::query())->make(true);
    }


    


/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Datatables::of(User::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('displaydata');
    }
}
