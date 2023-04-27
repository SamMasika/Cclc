<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    public function index()
    {
        $partner=Partner::all();
        return view('admin.partner.index',compact('partner'));
    }

    public function show($id)
    {
        $partner=Partner::find($id);
       return view('asset.partner.view',compact('partner'));
    }

    public function store(Request $request)
    {
        $partner = new Partner();
        if($request->hasFile('logo'))
        {
            $file = $request->file('logo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $fullPath = 'adm/assets/images/partner/'.$filename;
            
            $image = Image::make($file->path())->fit(120, 30);
            $image->save($fullPath);
            $partner->logo = $filename;
        }
        $partner->name = $request->name;
        $partner->save();
    
        return redirect()->back()->with('status', 'Partner added successfully!');
    }
   
    public function update(Request $request, $id)
    {
        $partner = Partner::find($id);
        if($request->hasFile('logo'))
        {
            $file = $request->file('logo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $fullPath = 'adm/assets/images/partner/'.$filename;
            $image = Image::make($file->path())->fit(120, 30);
            $image->save($fullPath);     
            $partner->logo = $filename;
        }
        $partner->name = $request->name;
        $partner->update();
    
        return redirect()->back()->with('status', 'Partner added successfully!');
    }

    public function destroy($id)
    {
        $partner=Partner::find($id);
        $partner->delete();
        return redirect()->back()->with('status','Partner deleted successfully!');
       
    }

    public function activate($id)
{
    $partner=Partner::find($id);
    if($partner->flug==0)
    {
        $partner->flug=1;
        $partner->save();
        return redirect()->back()->with('status','Partner is Activated');  
    }elseif($partner->flug==1)
    {
        $partner->flug=0;
        $partner->save();
        return redirect()->back()->with('status','Partner is inactive');
    }
}
}
