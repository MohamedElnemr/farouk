<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }

    public function pagetwo()
    {
        return view('home.pagetwo');
    }

    public function pagethree()
    {
        return view('home.pagethree');
    }

    public function pagefour()
    {
        return view('home.pagefour');
    }

    public function pagefive()
    {
        return view('home.pagefive');
    }

    public function pagesix()
    {
        return view('home.pagesix');
    }

    public function pageseven()
    {
        return view('home.pageseven');
    }

    public function addpage1(Request $request)
    {

        return view('home.pagetwo',['parameters'=> $request->all()]);
    }

    public function addpage2(Request $request)
    {

        return view('home.pagethree',['parameters'=> $request->all()]);
    }

    public function addpage3(Request $request)
    {

        return view('home.pagefour',['parameters'=> $request->all()]);
    }

    public function addpage4(Request $request)
    {

        return view('home.pagefive',['parameters'=> $request->all()]);
    }

    public function addpage5(Request $request)
    {

        return view('home.pagesix',['parameters'=> $request->all()]);
    }

    public function addpage6(Request $request)
    {
        // dd($request->all());
        return view('home.pageseven',['parameters'=> $request->all()]);
    }

    public function data1()
    {
        // dd($request->all());
        return view('home.data1');
    }

    public function data2()
    {
        // dd($request->all());
        return view('home.data2');
    }

    public function data3()
    {
        // dd($request->all());
        return view('home.data3');
    }

    public function data4()
    {
        // dd($request->all());
        return view('home.data4');
    }

    public function data5()
    {
        // dd($request->all());
        return view('home.data5');
    }


}
