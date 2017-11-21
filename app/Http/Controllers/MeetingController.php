<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meeting;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetings = Meeting::all();
        foreach($meetings as $meeting){
            $meeting->view_meeting = [
                'href' => 'api/v1/meeting'. $meeting->id
            ];
        }
        
        $response = [
            'msg' => 'List of all meeting',
            'meetings' => $meetings
        ];

        return response()->json($response, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
        'title' => 'required',
        'description' => 'required',
        'time' => 'required',
        'user_id' => 'required'
       ]);

       $title = $request->input('title');
       $description = $request->input('description');
       $time = $request->input('time');
       $user_id = $request->input('user_id');

       $meeting = [
           'title' => $title,
           'description' => $description,
           'time' => $time,
           'user_id' => $user_id,
           'view_meeting' => [
                'href' => 'api/v1/meeting/1',
                'method' => 'GET'
           ]
       ];

       $response = [
            'msg' => 'Meeting Created',
            'data' => $meeting
       ];

       return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
