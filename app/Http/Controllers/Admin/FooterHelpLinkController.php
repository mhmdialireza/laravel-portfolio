<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FooterHelpLinkDataTable;
use App\Http\Controllers\Controller;
use App\Models\FooterHelpLink;
use Illuminate\Http\Request;

class FooterHelpLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FooterHelpLinkDataTable $dataTable)
    {
        return $dataTable->render('admin.footer-help-link.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.footer-help-link.create');
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
            'name' => ['required', 'max:200'],
            'url' => ['required']
        ]);

        $link = new FooterHelpLink();
        $link->name = $request->name;
        $link->url = $request->url;
        $link->save();

        toastr('Created Successfully!', 'success');

        return redirect()->route('admin.footer-help-links.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $link = FooterHelpLink::findOrFail($id);
        return view('admin.footer-help-link.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'url' => ['required']
        ]);

        $link = FooterHelpLink::findOrFail($id);
        $link->name = $request->name;
        $link->url = $request->url;
        $link->save();

        toastr('Updated Successfully!', 'success');

        return redirect()->route('admin.footer-help-links.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = FooterHelpLink::findOrFail($id);
        $link->delete();
    }
}
