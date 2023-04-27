<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members=Member::where('flug',1)->get();
        return view('member.index',compact('members'));
    }

    public function show($id)
    {
        $members=Member::find($id);
       return view('member.view',compact('members'));
    }

    public function store(Request $request)
    {
        $members = Member::create($request->all());
         return redirect()->back()->with('status','Member added successfully!');

    }
   
    public function update(Request $request, $id)
    {
        $members=Member::find($id)->update($request->all());
        return redirect()->back()->with('status','Member updated successfully!');
    }

    public function destroy($id)
    {
        $members=Member::find($id);
        $members->flug=0;
        $members->update();
        return redirect()->back()->with('status','Member deleted successfully!');
       
    }
}
