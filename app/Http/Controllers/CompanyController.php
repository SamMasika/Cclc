<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Company;
use App\Models\Service;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CompanyController extends Controller
{
    
    public function index()
    {
       $company=Company::where('flug',1)->first();
       $service=Service::where('flug',1)->get();
       $team=Team::where('flug',1)->get();
       return view('admin.company.profile',compact('company','service','team'));
    }

   
    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $fullPath = 'adm/assets/images/company/'.$filename;
            $image = Image::make($file->path())->fit(512, 399);
            $image->save($fullPath);     
            $company->image = $filename;
        }
        $company->name = $request->name;
        $company->email = $request->email;
        $company->phone1 = $request->phone1;
        $company->phone2 = $request->phone2;
        $company->location = $request->location;
        $company->postal_address = $request->postal_address;
        $company->motto = $request->motto;
        $company->about_us = $request->about_us;
        $company->mission = $request->mission;
        $company->vision = $request->vision;
        $company->update();
        return redirect()->back()->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Company Updated successfully!'
            ]
        ]);
    }

}
