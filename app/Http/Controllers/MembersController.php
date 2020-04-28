<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;

class MembersController extends Controller
{
    public function list()
    {
        // Example list used to Test return View for Blade
        // $members = [
        //     'Ross',
        //     'Ross2',
        // ];

        $members = Member::all();

        // dd($members);

        return view ('members',[
            'members' => $members,
        ]);
    }

    public function store()
    {
        // the validation prevents users sending insufficient data required by table contstraints causing SQL error
        $data = request() -> validate([
            'name' => 'required',
        ]);

        // commands needed to populate the Members Table from the Form
        $member = new Member();
        $member->name = request('name');
        $member->email = request('email');
        $member->password = request('password');
        $member->date_of_birth = request('date_of_birth');
        $member->gender = request('gender');
        $member->distance = request('distance');
        $member->location = request('location');
        $member->band_type = request('band_type');
        $member->gender_pref = request('gender_pref');
        $member->about_me = request('about_me');

        $member->save();
        return back();

        
        // dd(request('name'));
    }
}
