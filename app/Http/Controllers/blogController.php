<?php

namespace App\Http\Controllers;
use Yajra\DataTables\DataTables;
use App\Models\Blog;
// use Datatables;
use App\Models\User;

use Illuminate\Http\Request;

class blogController extends Controller
 {
//     public function index(){
//         return view('listing');
//     }
//     public function getBlog(Request $request){
//         if($request->ajax()){
//             $data = Blog::latest()->get();
//             return Datatables::of($data)
//             ->addIndexColumn()
//             ->addColumn('action',function($row){
//                 $actionBtn = '<a href="javascript:void(0);" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0);" class="edit btn btn-danger btn-sm">Delete</a>';
//                 return $actionBtn;
//             })
//             ->rowColumns(['action'])
//             ->make(true);
//         }
//     }


    


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
