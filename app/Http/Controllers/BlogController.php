<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $blogs =Blog::all();
        //dd($items);
        return view('backend.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blogs.create');

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
            "photo" =>'required',
            "headline" =>'required', 
            "post" =>'required'
        ]);
        //If include file,upload file
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/blogimg'),$imageName);
        $path='backend/blogimg/'.$imageName;

        //Data insert
        $blog = new Blog;
        $blog->photo =$path;
        $blog->headline =$request->headline;
        $blog->post =$request->post;
        $blog->save();

        //redirect
        return redirect()->route('blogs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('backend.blogs.edit',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
      return view('backend.blogs.edit',compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Blog $blog)
    {
        $request->validate([
        "photo" =>'sometimes',
        "oldphoto" => 'required',
        "headline"  => 'required', 
        "post" =>'required'
    ]);

        if($request->hasFile('photo')){

        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/blogimg'),$imageName);

        $path='backend/blogimg/'.$imageName;


        }else{
            $path = $request->oldphoto;

        }
        //data update
        $blog->headline =$request->headline;
        $blog->post =$request->post;

        $blog->photo =$path;
        
        $blog->save();

        //redirect
        return redirect()->route('blogs.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index');
    }
}
