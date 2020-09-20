<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Donor;
/*use Auth;
*/use Illuminate\Support\Facades\Auth;


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
            "age"=>'required',
            "gender" =>'required',
            "blood_type" =>'required', 
            "phone" =>'required',
            "address" =>'required', 
            "photo" =>'required'

        ]);
/*         dd($request);
*/        //If include file,upload file
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/donorimg/'),$imageName);
        $path='backend/donorimg/'.$imageName;

        //Data insert
        $donor = new Donor;
        $donor->user_id =Auth::id();
        $donor->age =$request->age;
        $donor->gender =$request->gender;
        $donor->bloodgroup =$request->blood_type;
        $donor->phone =$request->phone;
        $donor->address =$request->address;
        $donor->photo =$path;
        $donor->save();

        //redirect
        return redirect()->route('donors.index');
    }

    public function donor_unavailable(Request $request){
        $id =$request->donor_id;
        $donor = Donor::find($id);
        $donor->status=0;
        $donor->save();
        return 'successfully';

    }

       public function donor_available(Request $request){
        $id =$request->donor_id;
        $donor = Donor::find($id);
        $donor->status=1;
        $donor->save();
        return 'successfully';

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
    /*public function edit(Donor $donor)
    {
      return view('backend.donors.edit',compact('donor'));
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function update(Request $request,Donor $donor)
    {
       

        //redirect
        return redirect()->route('donors.index');
    }
*/
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
