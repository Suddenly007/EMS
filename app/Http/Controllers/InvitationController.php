<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invitation;
use Auth;
use DB;

class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('User.invitation');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Vendor.invitation2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = array();
            $data['user_name'] = $request->user_name;
            $data['user_id'] = Auth::user()->id; 
           $data['pickup'] = $request->pickup;
           $data['drop_off'] = $request->drop_off;
            $data['number'] = $request->number;
            $data['event_name'] = $request->event_name;
            $data['food'] = $request->food;
            $data['drink'] = $request->drink;
            $product = DB::table('invitations')->insert($data);
            return redirect('invitation show')->with('status','your data is successful stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $invitations = Invitation::all();
        return view('User.show')->with('invitations',$invitations);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request)
    {
         $data = array();
            $data['user_name'] = $request->user_name;
            $data['user_id'] = Auth::user()->id;
           $data['pickup'] = $request->pickup;
           $data['drop_off'] = $request->drop_off;
            $data['number'] = $request->number;
            $data['event_name'] = $request->event_name;
            $data['food'] = $request->food;
            $data['drink'] = $request->drink;
            $product = DB::table('invitations')->insert($data);
            return redirect('payment2')->with('status','your data is successful stored'); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
