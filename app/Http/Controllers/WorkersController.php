<?php

namespace App\Http\Controllers;

use App\Models\Workers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workers = Workers::all();
        // $workers = Workers::withTrashed()->get();
        return view('workers.index', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('workers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $workers = Workers::create($request->all());
         return redirect()->route('workers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Workers $workers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workers $worker)
    {
        return view('workers.edit', compact('worker'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Workers $worker)
    {
        // $validate = $request->validate([
        //     'email' => 'required|email|unique:workers,email,'.$worker->id,
        //     'phone' => 'required|phone|unique:workers,phone,'.$worker->id,
        // ]);

        //     if ($validate) {
        //         return Redirect::back()->withErrors(['msg' => 'The Message']);
        //     } else {
                $worker->update($request->all());
                return redirect()->route('workers.index');
            // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $worker = Workers::findOrFail($request->id);
        $worker->delete();
        return redirect()->route('workers.index');
    }
}
