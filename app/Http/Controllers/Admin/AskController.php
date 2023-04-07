<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AskRequest;
use App\Models\Ask;
use Illuminate\Http\Request;

class AskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asks = Ask::all();
        return view('admin.pertanyaan.index', compact('asks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pertanyaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AskRequest $request)
    {
        $data = $request->all();
        Ask::create($data);

        return redirect()->route('pertanyaan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ask = Ask::findOrFail($id);
        return view('admin.pertanyaan.edit', compact('ask'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AskRequest $request, string $id)
    {
        $ask = Ask::findOrFail($id);
        $data = $request->all();

        $ask->update($data);

        return redirect()->route('pertanyaan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
