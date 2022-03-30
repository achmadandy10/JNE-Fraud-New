<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class InformationController extends Controller
{
    public function index()
    {
        if (request()->ajax())
        {
            $query = Information::all();
            return DataTables::of($query)
            ->addIndexColumn()
                ->addColumn('action',function($regulation){
                    return '
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Aksi
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="'.route('database-detail',$regulation->id).'">Check</a></li>
                                <li><a class="dropdown-item" href="'.route('database-edit',$regulation->id).'">Edit</a></li>
                                <li><a class="dropdown-item" href="'.route('database-destroy',$regulation->id).'">Delete</a></li>
                            </ul>
                        </div>
                    ';
                })
            ->rawColumns(['action'])
            ->make();
        }

        return view('user.law.index');
    }

    public function create()
    {
        return view('user.law.create');
    }

    public function store(Request $request)
    {
        Information::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('dashboard');
    }
}
