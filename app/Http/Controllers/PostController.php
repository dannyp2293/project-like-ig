<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          $users = Auth::user();
    return view('post.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $user = Auth::user();
    $request->validate([

        'caption' => 'max:250',
        'image' => 'required|image|mimes:jpeg,jpg,png,gif,png'
    ]);

    $imageName = $user->image;
    if($request->image){
        $image_img = $request->image;
        $imageName = $user->username. '-' . time() . '-' . $image_img->getClientOriginalExtension();
        $image_img->move(public_path('images/post'), $imageName);
    }

    $user->posts()->update([
        'caption' => $request->caption,
        'image' =>$imageName

    ]);
    return redirect('/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
