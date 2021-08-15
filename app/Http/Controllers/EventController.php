<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Auth;
use DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('Events.index')->with('events',$events);
    }

    public function index2()
    {
        $events = Event::all();
        return view('vendor.dashboard')->with('events',$events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
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
            $data['event_name'] = $request->event_name;
            $data['event_date'] = $request->event_date;
             $data['user_id'] = Auth::user()->id; 
           $data['event_time'] = $request->event_time;
           $data['event_location'] = $request->event_location;
            $data['organizer_name'] =$request->organizer_name;
            $data['organizer_email'] = $request->organizer_email;
            $data['organizer_phone'] = $request->organizer_phone;
            $data['event_description'] = $request->event_description;

             $image = $request->file('image_path');
            if ('image') {
                $image_name = date('dmy_H_s_i');
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'public/media/';
                $image_url = $upload_path.$image_full_name;
                $success = $image->move($upload_path, $image_full_name);
            $data['image_path'] = $image_url;}
            

            $product = DB::table('events')->insert($data);
            return redirect('event index')->with('status','your data is successful stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $events = Event::findOrFail($id);
        return view('Events.show')->with('events',$events);
    }

    public function show2(Request $request, $id)
    {
        $events = Event::findOrFail($id);
        return view('vendor.show')->with('events',$events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $events = Event::findOrFail($id);
        return view('Events.edit')->with('events',$events);
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
       $events = Event::find($id);
        $events->event_name=$request->input('event_name');
        $events->event_date=$request->input('event_date');
        $events->event_time=$request->input('event_time');
        $events->event_description=$request->input('event_description');
        $events->event_location=$request->input('event_location');
        $events->organizer_name=$request->input('organizer_name');
        $events->organizer_phone=$request->input('organizer_phone');
        $events->organizer_email=$request->input('organizer_email');
        $events->update();
        return redirect('event index')->with('status','Your Data is Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
       $events = Event::findOrFail($id);
        $events->delete();
        return redirect('event index')->with('status','your data is delete');
    }
}
