<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Pasien;
use App\Models\Sensor;
use Illuminate\Http\Request;

class BaseController extends Controller
{

    public function index()
    {

        return view('pasien/index');
    }

    public function sensor()
    {

        return view('/sensor');
    }

    public function sensorr()
    {

        return view('/sensorr');
    }

    public function sensorrr()
    {

        return view('/sensorrr');
    }

    public function chat()
    {

        $sensor = Sensor::all();
        return view('/pasien/chat', compact(['sensor']));
    }

    public function indexx()
    {

        return view('admin/index');
    }

    public function addadmin()
    {

        $admin = Admin::all();
        return view('/admin/addadmin', compact(['admin']));
    }

    public function addadminn()
    {

        return view('admin/addadminn');
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('/admin/adminedit', compact(['admin']));
    }

    public function update($id, Request $request)
    {
        $admin = Admin::find($id);
        $admin->update($request->except(['_token', 'submit']));
        return redirect('/addadmin');
    }

    public function store(Request $request)
    {
        Admin::create($request->except(['_token', 'submit']));
        return redirect('/addadmin');
    }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('/addadmin');
    }

    public function doctor()
    {

        $doctor = Doctor::all();
        return view('/admin/doctor', compact(['doctor']));
    }

    public function doctorr()
    {

        return view('admin/doctorr');
    }

    public function editt($id)
    {
        $doctor = Doctor::find($id);
        return view('/admin/doctoredit', compact(['doctor']));
    }

    public function updatee($id, Request $request)
    {
        $doctor = Doctor::find($id);
        $doctor->update($request->except(['_token', 'submit']));
        return redirect('/doctor');
    }

    public function storee(Request $request)
    {
        Doctor::create($request->except(['_token', 'submit']));
        return redirect('/doctor');
    }

    public function destroyy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect('/doctor');
    }

    public function pasien()
    {

        $pasien = Pasien::all();
        return view('/admin/pasien', compact(['pasien']));
    }

    public function pasienn()
    {

        return view('admin/pasienn');
    }

    public function edittt($id)
    {
        $pasien = Pasien::find($id);
        return view('/admin/pasienedit', compact(['pasien']));
    }

    public function updateee($id, Request $request)
    {
        $pasien = Pasien::find($id);
        $pasien->update($request->except(['_token', 'submit']));
        return redirect('/pasien');
    }

    public function storeee(Request $request)
    {
        Pasien::create($request->except(['_token', 'submit']));
        return redirect('/pasien');
    }

    public function destroyyy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect('/pasien');
    }
    
}
