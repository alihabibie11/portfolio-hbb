<?php

namespace App\Http\Controllers\Admin;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $config = Config::all()->first();

        return view('admin.config.index', compact('config'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nameweb' => 'required',
            'about' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keywords' => 'required',
            'description' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'github' => 'required',
            'linkedin' => 'required',
            'google_maps' => 'required',

        ]);

        $config = Config::findOrFail($id);

        if ($request->hasFile('logo')) {
            $logo_name = time() . '-' . $request->file('logo')->getClientOriginalName();
            $img_logo = $request->file('logo')->storeAs('public', $logo_name);
        } else {
            $img_logo = $config->logo;
        }

        if ($request->hasFile('icon')) {
            $icon_name = time() . '-' . $request->file('icon')->getClientOriginalName();
            $img_icon = $request->file('icon')->storeAs('public', $icon_name);
        } else {
            $img_icon = $config->icon;
        }

        if ($request->hasFile('bg')) {
            $bg_name = time() . '-' . $request->file('bg')->getClientOriginalName();
            $img_bg = $request->file('bg')->storeAs('public', $bg_name);
        } else {
            $img_bg = $config->background_image;
        }

        $config->update([
            'nameweb' => $request->nameweb,
            'about' => $request->about,
            'keywords' => $request->keywords,
            'description' => $request->description,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'twitter' => $request->twitter,
            'github' => $request->github,
            'linkedin' => $request->linkedin,
            'google_maps' => $request->google_maps,
            'logo' => $img_logo,
            'icon' => $img_icon,
            'background_image' => $img_bg
        ]);

        Alert::toast('Update Configuration Success', 'success')->position('top');
        return redirect()->route('configuration.index');
    }

    public function deleteBg()
    {
        $config = Config::first();
        $update = $config->update([
            'background_image' => null
        ]);
        $res = [];
        if ($update) {
            $res = ['status' => 1];
        } else {
            $res = ['status' => 0];
        }
        // Alert::toast('Update Configuration Success', 'success')->position('top');
        return $res;
    }
}
