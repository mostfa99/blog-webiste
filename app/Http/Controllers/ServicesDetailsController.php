<?php

namespace App\Http\Controllers;

use App\Models\ServicesDetails;
use Illuminate\Http\Request;

class ServicesDetailsController extends Controller
{
    public function index()
    {
        $servicesdetails = ServicesDetails::all();
        return view('admin.servicesdetails.index', array('servicesdetails' => $servicesdetails));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $servicesdetails = new ServicesDetails;
        $servicesdetails->title = $request->title;
        $servicesdetails->content = $request->content;
        $servicesdetails->save();

        return redirect()->route('servicesdetails.index');
    }

    public function update(Request $request, $id)
    {
        $servicesdetails = ServicesDetails::findOrFail($id);
        $servicesdetails->title = $request->title;
        $servicesdetails->content = $request->content;
        $servicesdetails->update($request->all());
        return redirect()->route('servicesdetails.index')
            ->with('success', "services details($servicesdetails->title) Updated! ");
    }

    public function edit($id)
    {
        $servicesdetails = ServicesDetails::findOrFail($id);
        return view('admin.servicesdetails.edit', compact('servicesdetails'));
    }
}
