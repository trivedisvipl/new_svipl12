<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Helpers\Common;


use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard');
    }

     public function getPassword(){


        return view('admin.changePassword');

    }

    public function storePassword(Request $request)
    {
       $data = $request->all();

    $request->validate([
        'password' => 'required|confirmed|min:6',
        'password_confirmation' => 'required'

        ],[

        ]);
        $data = $request->all();

        $profile = Admin::find(1);
            $data['password'] = Hash::make($data['password']);


          $profile->update($data);

         return redirect()->back()->with("success_message", "profile Updated Successfully.")->with('profile', $profile);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getProfile(){

        $profile = Admin::findOrFail(1);

        return view('admin.profile',compact('profile'));

    }

    public function storeProfile(Request $request)
    {

    $request->validate([
        'name' => ['required'],
        'email' => ['required','email'],
        'username' => ['required'],
        'image' => ['file', 'image', 'mimes:jpeg,jpg,png,webp'],

        ],[
        'name.required' => "The name field is required",
        'image.mimes' => "The image type must be jpeg,jpg,png and webp",
        'image.image' => "The image type must be jpeg,jpg,png and webp",
        ]);
        $data = $request->all();

        $profile = Admin::find(1);

        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {
                $filename = Common::uploadFile($request->file('image'),SETTING_IMAGE_PATH,$profile->image);
                $data['image'] = $filename;
            } else {
                $data['image'] = null;
                throw new \Exception("The image is not valid.");
            }

        }
          $profile->update($data);

         return redirect()->back()->with("success_message", "profile Updated Successfully.")->with('profile', $profile);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
