<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FooterSocialLinkDataTable;
use App\Http\Controllers\Controller;
use App\Models\FooterSocialLink;
use Illuminate\Http\Request;

class FooterSocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FooterSocialLinkDataTable $dataTable)
    {
        return $dataTable->render('admin.footer-social-link.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.footer-social-link.create');
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
            'icon' => ['required'],
            'url' => ['required', 'url']
        ]);

        $social = new FooterSocialLink();
        $social->icon = $request->icon;
        $social->url = $request->url;
        $social->save();

        toastr('Created Successfully!', 'success');

        return redirect()->route('admin.footer-social.index');
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
        $social = FooterSocialLink::findOrFail($id);
        return view('admin.footer-social-link.edit', compact('social'));
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
            'icon' => ['required'],
            'url' => ['required', 'url']
        ]);

        $social = FooterSocialLink::findOrFail($id);
        $social->icon = $request->icon;
        $social->url = $request->url;
        $social->save();

        toastr('Update Successfully!', 'success');

        return redirect()->route('admin.footer-social.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $social = FooterSocialLink::findOrFail($id);
        $social->delete();
    }
}
