<?php

namespace App\Http\Controllers;
use App\Models\Posture;
use Illuminate\Http\Request;

class PostureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Posture::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $posture = Posture::create($request->all());
        return response()->json($posture, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Posture::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $posture = Posture::findOrFail($id);
        $posture->update($request->all());
        return response()->json($posture, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Posture::destroy($id);
        return response()->json(null, 204);
    }
}
