<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function index()
    {
        $team=Team::all();
        return view('admin.team.index',compact('team'));
    }

    public function show($id)
    {
        $team=Team::find($id);
       return view('asset.section.view',compact('team'));
    }

    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'image' => 'dimensions:max_width=270,max_height=280',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput()
            ->with('status', 'Sorry, the image dimensions must be no more than 270px width and 280px height.');
    }

    $team = new Team();
    if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $ext=$file->getClientOriginalExtension();
                $filename=time().'.'.$ext;
                $file->move('adm/assets/images/team/',$filename);
                $team->image=$filename;
            }
    $team->name = $request->name;
    $team->title = $request->title;
    $team->save();
    return redirect()->back()->with('status', 'Team Member added successfully!');
}

   
    public function update(Request $request, $id)
    {
        // $validator = Validator::make($request->all(), [
        //     'image' => 'dimensions:max_width=270,max_height=280',
        // ]);
    
        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator) $team->image = $filename;
    
        $team = Team::find($id);
        if($request->hasFile('image'))
        {
            $path='adm/assets/images/team/'.$team->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename=time().'.'.$ext;
            $file->move('adm/assets/images/team/', $filename);
            $team->image=$filename;
        }
        $team->name = $request->name;
        $team->title = $request->title;
        $team->update();
        return redirect()->back()->with('status','Team Member updated successfully!');
    }

    public function destroy($id)
    {
        $team=Team::find($id);
        $team->delete();
        return redirect()->back()->with('status','Team Member deleted successfully!');
       
    }

    public function activate($id)
    {
        $team=Team::find($id);
        if($team->flug==0)
        {
            $team->flug=1;
            $team->save();
            return redirect()->back()->with('status','Team is Activated');  
        }elseif($team->flug==1)
        {
            $team->flug=0;
            $team->save();
            return redirect()->back()->with('status','Team is inactive');
        }
    }
}
