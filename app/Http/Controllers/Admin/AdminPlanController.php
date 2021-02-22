<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PlanManagment;


class AdminPlanController extends Controller
{
    public function index()
    {
        $plans = PlanManagment::all();
        return view('plan.index', compact('plans'));
    }

    public function edit($id)
    {
        $plan = PlanManagment::find($id);
        return view('plan.index',compact('plan'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'validity' => 'required',

        ]);

        $plans = PlanManagment::find($id);
        $plans->name = $request->truck_number;
        $plans->company_name = $request->name;
        $plans->desc = $request->desc;
        $plans->price = $request->price;
        $plans->validity = $request->validity;
        $plans->save();

        Session::flash('success', 'Truck updated successfully!');
        $plans = PlanManagment::all();
        return redirect()->route('plan.index');
    }
}
