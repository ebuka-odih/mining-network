<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Packages;
use Illuminate\Http\Request;

class PackagesController extends Controller
{

    public function index()
    {
        $packages = Packages::all();
        return view('admin.packages', compact('packages'));
    }

    public function create()
    {
        return view('admin.package-create');
    }

    public function store(Request $request)
    {
        $data = $this->getData($request);
        Packages::create($data);
        return redirect()->route('admin.packages.index');
    }

    public function edit($id)
    {
        $investment_plans = Packages::findOrFail($id);
        return view('admin.edit-package', compact('investment_plans'));

    }

    public function update(Request $request, $id)
    {
        $investment_plans = Packages::findOrFail($id);
        $data = $this->getData($request);
        $investment_plans->update($data);
        return redirect()->route('admin.packages.index');
    }

    public function destroy($id)
    {
        $packages = Packages::findOrFail($id);
        $packages->delete();
        return redirect()->back();
    }

    public function delete($id)
    {
        $packages = Packages::findOrFail($id);
        $packages->delete();
        return redirect()->back();
    }


    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'daily_interest' => 'required',
            'term_days' => 'required',
            'min_deposit' => 'required',
            'max_deposit' => 'required',
            'deposits_id' => 'nullable',
        ];

        return $request->validate($rules);
    }


}
