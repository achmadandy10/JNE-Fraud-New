<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Regulation;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

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
                        <a href = "'.route('database-detail',$regulation->id).'">
                            <button type="button" class="btn btn-primary">
                                Check
                            </button>
                        </a>
                    ';
                })
            ->rawColumns(['action'])
            ->make();
        }

        return view('user.databases.index');
    }

    public function create()
    {
        $datenow = date('d-M-Y', strtotime(Carbon::now()));
        $dateNow = date('Y-m-d') . ' 00:00:00';
        $check_user = Regulation::select('*')
            ->whereDate('created_at', '>=', $dateNow)
            ->count();

        if ($check_user === 0) {
            $id = 'RG' . date('dmy') . '0001';
        } else {
            $item = $check_user + 1;
            if ($item < 10) {
                $id = 'RG' . date('dmy') . '000' . $item;
            } elseif ($item >= 10 && $item <= 99) {
                $id = 'RG' . date('dmy') . '00' . $item;
            } elseif ($item >= 100 && $item <= 999) {
                $id = 'RG' . date('dmy') . '0' . $item;
            } elseif ($item >= 1000 && $item <= 9999) {
                $id = 'RG' . date('dmy') . $item;
            }
        }

        return view('user.databases.create', [
            'id' => $id
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $filename = $request->file('file')->getClientOriginalName();

        $data['file'] = $request->file('file')->storeAs('public/regulation', $filename, 'public');

        Regulation::create($data);

        return redirect()->route('admin.dashboard');
    }

    public function detail($id)
    {
        $data = Regulation::findOrFail($id);

        return view('user.databases.detail', [
            'data' => $data
        ]);
    }
}
