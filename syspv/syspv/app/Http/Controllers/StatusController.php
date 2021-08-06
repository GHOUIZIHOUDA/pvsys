<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;


class StatusController extends Controller
{
    public function create(Request $request) {
        return ;
        
    }
    
    public function index()
    {
        $statuses = Status::all()->toArray();
        return array_reverse($statuses);      
    }

    public function store(Request $request)
    {
        $statuses = Status::create([
            'status' => $request->status ?? 'n',
        ]);

        return response()->json($statuses);
    }

    public function show($id)
    {
        $status = Status::find($id);
        return response()->json(['status'=>$status], 200);
    }

    public function edit() {
        return ;
    }
    public function update($id, Request $request)
    {
        $status = Status::find($id);
        $status->update($request->all());

        return response()->json('status updated!');
    }

    public function destroy($id)
    {
        $status = Status::find($id);
        $status->delete();

        return response()->json('Status deleted!');
    }
}
