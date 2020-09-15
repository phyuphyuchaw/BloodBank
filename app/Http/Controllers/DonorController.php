<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donors =Donor::all();
        //dd($items);
        return view('backend.donors.index',compact('donors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         $donors = Donor::all();
         return view('backend.donors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            "name"=>'required',
            "age"=>'required',
            "gender" =>'required',
            "bloodgroup" =>'required', 
            "phone" =>'required',
            "email" =>'required',
            "address" =>'required', 
            "photo" =>'required',
            "postingdate" =>'required'

        ]);
        //If include file,upload file
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/donorimg'),$imageName);
        $path='backend/donorimg/'.$imageName;

        //Data insert
        $donor = new Donor;
        $donor->name =$request->name;
        $donor->age =$request->age;
        $donor->gender =$request->gender;
        $donor->bloodgroup =$request->bloodgroup;
        $donor->phone =$request->phone;
        $donor->email =$request->email;
        $donor->address =$request->address;
        $donor->photo =$path;
        $donor->postingdate =$request->postingdate;
        $donor->save();

        //redirect
        return redirect()->route('donors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.donors.edit',compact('donor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
      return view('backend.donors.edit',compact('donor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Donor $donor)
    {
        $request->validate([
            "name"=>'required',
            "age"=>'required',
            "gender" =>'required',
            "bloodgroup" =>'required', 
            "phone" =>'required',
            "email" =>'required',
            "address" =>'required', 
            "photo" =>'sometimes',
            "oldphoto" => 'required',
            "postingdate" =>'required'
    ]);

        if($request->hasFile('photo')){

        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/donorimg'),$imageName);

        $path='backend/donorimg/'.$imageName;


        }else{
            $path = $request->oldphoto;

        }
        //data update
        $donor->name =$request->name;
        $donor->age =$request->age;
        $donor->gender =$request->gender;
        $donor->bloodgroup =$request->bloodgroup;
        $donor->phone =$request->phone;
        $donor->email =$request->email;
        $donor->address =$request->address;
        $donor->photo =$path;
        $donor->postingdate =$request->postingdate;
        $donor->save();

        //redirect
        return redirect()->route('donors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donor $donor)
    {
        $donor->delete();
        return redirect()->route('donors.index');
    }
}
