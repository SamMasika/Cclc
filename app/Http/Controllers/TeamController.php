<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function index()
    {
        $team=Team::all();
        return view('admin.team.index',compact('team'));
    }

 
    public function store(Request $request)
{
    $team = new Team();
    if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $fullPath = 'adm/assets/images/team/'.$filename;
            
            $image = Image::make($file->path())->fit(270, 280);
            $image->save($fullPath);
            $team->image = $filename;
        }
        $team->name = $request->name;
        $team->title = $request->title;
        $team->save();
    return redirect()->back()->with('status', 'Team Member added successfully!');
}

   
    public function update(Request $request, $id)
    {
    
        $team = Team::find($id);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $fullPath = 'adm/assets/images/team/'.$filename;
            $image = Image::make($file->path())->fit(270, 280);
            $image->save($fullPath);     
            $team->image = $filename;
        }
        $team->name = $request->name;
        $team->title = $request->title;
        $team->update();
    
        return redirect()->back()->with('status', 'Team Member added successfully!');
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
