<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanic;
use App\Models\Workshops;
use DB;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        
        $workshops = match($request->sort) {
            'workshop-asc' => DB::table('workshops')
                                    ->join('mechanics', 'mechanics.worshop', '=', 'workshops.title')
                                    ->select('workshops.*', 'mechanics.*')
                                    ->orderBy('workshops.title', 'asc')
                                    ->get(),
                    'workshop-desc' => DB::table('workshops')
                                    ->join('mechanics', 'mechanics.worshop', '=', 'workshops.title')
                                    ->select('workshops.*', 'mechanics.*')
                                    ->orderBy('workshops.title', 'desc')
                                    ->get(),
                                    default => Workshops::all()
       
    };

    return view('front.index', ['workshops' => $workshops]);
}
    // public function index(Request $request) 
    // {


        //         $workshops = match($request->sort) {
        //             'workshop-asc' => DB::table('mechanics')
        //                             ->join('workshops', 'workshops.title', '=', 'mechanics.worshop')
        //                             ->select('workshops.*', 'mechanics.*')
        //                             ->orderBy('workshops.title', 'asc')
        //                             ->get(),
        //             'workshop-desc' => DB::table('mechanics')
        //                             ->join('workshops', 'workshops.title', '=', 'mechanics.worshop')
        //                             ->select('workshops.*', 'mechanics.*')
        //                             ->orderBy('workshops.title', 'desc')
        //                             ->get(),

        //             'mechanic-asc' => DB::table('mechanics')
        //                             ->join('workshops', 'workshops.title', '=', 'mechanics.worshop')
        //                             ->select('workshops.*', 'mechanics.*')
        //                             ->orderBy('mechanics.rating', 'asc')
                                    
        //                             ->get(),
        //             'mechanic-desc' => DB::table('mechanics')
        //                             ->join('workshops', 'workshops.title', '=', 'mechanics.worshop')
        //                             ->select('workshops.*', 'mechanics.*')
        //                             ->orderBy('mechanics.rating', 'desc')
                                    
        //                             ->get(),
                    
        //             default => DB::table('mechanics')
        //                             ->join('workshops', 'workshops.title', '=', 'mechanics.worshop')
        //                             ->select('mechanics.*', 'workshops.*')
        //                             ->get(),
        //         };
           
        

    
        //  return view('front.index',
        //  [
        //     'workshops' => $workshops,
           
        // ]);
    // }
}
