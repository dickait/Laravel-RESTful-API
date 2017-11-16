<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
