<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Services\SettingService;
use Illuminate\Support\Arr;

class SettingController extends Controller
{
    private $settingService;

    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
        $this->middleware('auth');
    }

    public function index()
    {
        $settings = $this->settingService->all();
        return view('admin.settings.settings', compact('settings'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // remove token from setting parameters
        $req = Arr::except($request->all(),['_token']);
        foreach($req as $key => $value){
            // spaces in form names are replaced by underscore C;
            $key = str_replace('_', ' ', $key);
            $settings = Setting::where('key',$key)->first();
            $settings->key = $key;
            $settings->value= $value;
            $settings->save();
        }

        return redirect()->route('setting.index');
    }

    public function show($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
