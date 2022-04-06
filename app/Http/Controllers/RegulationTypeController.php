<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegulationType;
use Yajra\DataTables\Facades\DataTables;

class RegulationTypeController extends Controller
{
    public function index()
    {
        if (request()->ajax())
        {
            $query = RegulationType::all();
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

        return view('user.regulation_type.index');
    }

    public function create()
    {
        return view('user.regulation_type.create');
    }

    public function store(Request $request)
    {
        RegulationType::create([
            'name' => $request->name,
            'type' => $request->type,
        ]);

        return redirect()->route('dashboard');
    }
}
