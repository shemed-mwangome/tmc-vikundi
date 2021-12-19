<?php

namespace App\Http\Controllers;

use App\Models\Street;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class StreetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $wards = DB::table('wards')
            ->get();

        $data = DB::table('wards')
            ->join('streets', 'wards.id', '=', 'streets.ward_id')
            ->select('wards.id as ward_id', 'wards.name as ward_name', 'streets.id as street_id', 'streets.name as street_name')
            ->paginate(10);

        return view('setting.street')
            ->with('data', $data)
            ->with('wards', $wards);
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
        // dd($request);
        $request->validate([
            'ward' => 'required|integer',
            'street' => 'required|string'
        ]);

        Street::create([
            'name' => $request->input('street'),
            'ward_id' => $request->input('ward')
        ]);

        return redirect('/setting/streets');
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
        //
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
