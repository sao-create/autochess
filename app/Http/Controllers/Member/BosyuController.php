<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BosyuController extends Controller
{
    //
    public function add()
    {
        return view('member.bosyu.create');
    }
    
    public function create()
    {
        return redirect('member/bosyu/create');
    }

    public function edit()
    {
        return view('member.bosyu.edit');
    }

    public function update()
    {
        return redirect('member/bosyu/edit');
    }
  
}
