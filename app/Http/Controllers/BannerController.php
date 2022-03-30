<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        return view('user.banner.index');
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $filename = Str::random(40) . '-' . '.' . $extension;
        $file->move('banner', $filename);

        Banner::create([
            'file' => 'banner/'.$filename
        ]);

        return redirect()->route('dashboard');
    }
}
