<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class StatusesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:140'
        ]);

        Auth::user()->statuses()->create([
            'content' => $request->get('content')
        ]);

        session()->flash('success', '发布成功！');
        return redirect()->back();
    }

    public function destroy()
    {

    }
}
