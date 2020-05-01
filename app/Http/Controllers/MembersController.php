<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;
use App\Talent;

class MembersController extends Controller
{
    public function index()
    {
        // Example list used to Test return View for Blade
        // $members = [
        //     'Ross',
        //     'Ross2',
        // ];

        // using Scope
        // $bristolMembers= Member::where('location','bristol')->get(); ***OLD***
        $bristolMembers= Member::location()->get();
        $members = Member::all();
        $talents = Talent::all();

        // dd($members);

        return view ('members.index',compact('members','bristolMembers','talents'));
    }

    public function create()
    {
        $members = Member::all();
   
        return view ('members.create',compact('members'));
    }

    //we use Laravel Route Model Binding (see old code below)
    public function show(Member $member)
    {
        // show($member) this is thhe variable passed in form the URL eg:customer/1
        //  method above will bring back an error if the variable doesnt exsist in the DB so we use this
        return view('members.show',compact('member'));
    } 

    public function edit(Member $member)
    {
        return view('members.edit',compact('member'));
    }
    public function update(Member $member)
    {
        $member->update($this->validateRequest());

        $this->storeImage($member);

        return redirect('members/'.$member->id);
    }

    public function store()
    {
        // the validation prevents users sending insufficient data required by table contstraints causing SQL error
        // https://laravel.com/docs/master/validation#available-validation-rules

        // This is mass assignment
        $member= Member::create($this->validateRequest());
        //storeImage to place uploaded image in a public storage
        $this->storeImage($member);


        // Using redirect to return back to viewing members
        return redirect('members');
        // return back();

        
        // dd(request('name'));
    }

    public function destroy(Member $member)
    {
        $member-> delete();
        return redirect('members');

    }

    private function validateRequest()
    {
        $validatedData = request() -> validate([
            'account_type' => 'required',
            'name' => 'required|min:3',
            'email' => 'required|email',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'distance' => 'required',
            'location' => 'required',
            'band_type' => 'required',
            'gender_pref' => 'required',
            'about_me' => 'required|min:3',
        ]);
        //if statement has been added to make it optional for IMAGE
        if(request()->hasFile('image')){
            request()-> validate([
                'image' => 'file|image|max:5000',
            ]);
        }

        return $validatedData;
    }

    private function storeImage()
    {
        if(request()->has('image')){
            $member->update([
                'image' => request()->image->store('uploads','public'),
            ]);
        }

    }
}




//we replace with route model Binding
// public function show($member)
// {
//     // show($member) this is thhe variable passed in form the URL eg:customer/1
//     //  $member= Member::find($member);

//     //  method above will bring back an error if the variable doesnt exsist in the DB so we use this
//     $member= Member::where('id',$member)-> firstOrFail();
//     return view('members.show',compact('member'));
// }

        // // You can use the shortway :: Create using the $data above
        // // commands needed to populate the Members Table from the Form
        // $member = new Member();
        // $member->name = request('name');
        // $member->email = request('email');
        // $member->password = request('password');
        // $member->date_of_birth = request('date_of_birth');
        // $member->gender = request('gender');
        // $member->distance = request('distance');
        // $member->location = request('location');
        // $member->band_type = request('band_type');
        // $member->gender_pref = request('gender_pref');
        // $member->about_me = request('about_me');

        // $member->save();