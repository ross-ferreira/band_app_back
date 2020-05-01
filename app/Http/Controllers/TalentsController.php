<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Talent;
use App\Member;

class TalentsController extends Controller
{

    public function list()
    {
        $talents = Talent::all();
        // Ive added $members so that the return view can call the linked find the members name linked to skill
        $members = Member::all();

        // LONG hand writing
        // return view ('talents',[
        //     'talents' => $talents,
        //     'members' => $members,
        // ]);
        // SHORT hand writing
        return view ('talents',compact('talents','members'));

    }
    public function store()
    {
        $data = request() -> validate([
            'talent_name' => 'required',
            'skill_level' => 'required',
            'member_id' => 'required',
        ]);

        Talent::create($data);
        return back();

        
        // dd(request('name'));
    }
}

        // // commands needed to populate the Members Table from the Form
        // $talent = new Talent();
        // $talent->talent_name = request('talent_name');
        // $talent->skill_level = request('skill_level');
        // $talent->member_id = request('member_id');
        // $talent->save();