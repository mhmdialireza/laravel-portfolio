<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = GeneralSetting::first();
        return view('admin.setting.general-setting.index', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
            'logo' => ['required', 'max:5000', 'image'],
            'footer_logo' => ['required', 'max:5000', 'image'],
            'favicon' => ['required', 'max:5000', 'image'],
        ]);

        $setting = GeneralSetting::first();
        $logo = handleUpload('logo', $setting);
        $footer_logo = handleUpload('footer_logo', $setting);
        $favicon = handleUpload('favicon', $setting);

        $generalSetting = new GeneralSetting();
        $generalSetting->logo = (!empty($logo)) ? $logo : $setting->logo;
        $generalSetting->footer_logo = (!empty($footer_logo)) ? $footer_logo : $setting->footer_logo;
        $generalSetting->favicon = (!empty($favicon)) ? $favicon : $setting->favicon;
        $generalSetting->save();

        toastr('Update Successfully', 'success');

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
