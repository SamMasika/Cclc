<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service=Service::all();
        return view('admin.service.index',compact('service'));
    }

    public function show($id)
    {
        $service=Service::find($id);
       return view('asset.section.view',compact('service'));
    }

    public function store(Request $request)
    {
        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->save();
        return redirect()->back()->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Service Added successfully!'
            ]
        ]);
    }
   
    public function update(Request $request, $id)
    {
        $service=Service::find($id)->update($request->all());
        return redirect()->back()->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Service Updated successfully!'
            ]
        ]);
    }

    public function destroy($id)
    {
        $service=Service::find($id);
        $service->delete();
        return redirect()->back()->with([
            'alert' => [
                'type' => 'success',
                'message' => 'Service Deleted successfully!'
            ]
        ]);
       
    }
    public function activate($id)
    {
        $service=Service::find($id);
        if($service->flug==0)
        {
            $service->flug=1;
            $service->update();
            return redirect()->back()->with([
                'alert' => [
                    'type' => 'success',
                    'message' => 'Service Activated successfully!'
                ]
            ]);
        }elseif($service->flug==1)
        {
            $service->flug=0;
            $service->update();
            return redirect()->back()->with([
                'alert' => [
                    'type' => 'success',
                    'message' => 'Service Deactivated successfully!'
                ]
            ]);
        }
    }
}
