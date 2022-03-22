<?php

namespace App\Http\Controllers;

use App\Models\FileRegulation;
use Carbon\Carbon;
use App\Models\Regulation;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class DatabaseController extends Controller
{
    public function index()
    {
        if (request()->ajax())
        {
            $query = Regulation::all();
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

        return view('user.databases.index');
    }

    public function create()
    {
        // $datenow = date('d-M-Y', strtotime(Carbon::now()));
        // $dateNow = date('Y-m-d') . ' 00:00:00';
        // $check_user = Regulation::select('*')
        //     ->whereDate('created_at', '>=', $dateNow)
        //     ->count();

        // if ($check_user === 0) {
        //     $id = 'RG' . date('my') . '0001';
        // } else {
        //     $item = $check_user + 1;
        //     if ($item < 10) {
        //         $id = 'RG' . date('my') . '000' . $item;
        //     } elseif ($item >= 10 && $item <= 99) {
        //         $id = 'RG' . date('my') . '00' . $item;
        //     } elseif ($item >= 100 && $item <= 999) {
        //         $id = 'RG' . date('my') . '0' . $item;
        //     } elseif ($item >= 1000 && $item <= 9999) {
        //         $id = 'RG' . date('my') . $item;
        //     }
        // }

        return view('user.databases.create');
    }

    public function store(Request $request)
    {   
        $regulation = Regulation::create([
            'name' => $request->name,
            'type' => $request->type,
            'entity' => $request->entity,
            'number' => $request->number,
            'year' => $request->year,
            'title' => $request->title,
            'set_date' => $request->set_date,
            'promulgated_date' => $request->promulgated_date,
            'valid_date' => $request->valid_date,
            'source' => $request->source,
            'status' => $request->status,
        ]);
    
        $files = $request->file('file');

        foreach ($files as $file) {
            $extension = $file->getClientOriginalExtension();
            $filename = Str::random(40) . '-' . '.' . $extension;
            $file->move('regulation', $filename);

            FileRegulation::create([
                'regulation_id' => $regulation->id,
                'file' => 'regulation/'.$filename
            ]);
        }

        return redirect()->route('dashboard');
    }

    public function detail($id)
    {
        $data = Regulation::where('id', $id)->with('files')->first();

        return view('user.databases.detail', [
            'data' => $data
        ]);
    }

    public function dashboard()
    {
        $regulationcount = Regulation::count();
        $recentdoc = Regulation::take(5)->get();

        return view('user.index', [
            'regulationcount' => $regulationcount,
            'recentdoc' => $recentdoc
        ]);
    }

    public function edit($id)
    {
        $data = Regulation::findOrFail($id);

        return view('user.databases.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Regulation::findOrFail($id);

        if($request->file('file'))
        $filename = $request->file('file')->getClientOriginalName();
        $data['file'] = $request->file('file')->storeAs('public/regulation',$filename,'public');

        $item->update($data);

        return redirect()->route('database-index');
    }

    public function destroy($id)
    {
        $item = Regulation::findOrFail($id);
        $item->delete();

        return redirect()->route('dashboard');
    }
}
