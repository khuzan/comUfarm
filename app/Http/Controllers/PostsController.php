<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Post;
use App\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::table('users')
                ->join('posts', 'users.id', '=', 'posts.account_number')
                ->join('images', 'posts.id', '=' , 'images.post_id')
                ->get();
       session(['active_dashboard' => 'active']);
       session(['active_profile' => '']);
       return view('/dashboard',['navbrand' => 'Dashboard'],compact('datas'));
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
        $post = new Post;
        $profile = Auth::user();
        if ($request->hasFile('img')) {
            $image_array = $request->file('img');

            $array_len = count($image_array);

            for ($i=0; $i <$array_len ; $i++) { 
                $image_size = $image_array[$i]->getClientSize();
                $image_ext  = $image_array[$i]->getClientOriginalExtension();

                $new_image_name = rand(123456,999999).".".$image_ext;

                $destination_path = public_path('/images');

                $image_array[$i]->move($destination_path,$new_image_name);

                $post = new Post;
                $image    = new Images;

                $post->account_number      = $profile->id;
                $post->post_desc           = request('description');
                $post->save();

                $image->post_id            = $post->id;
                $image->image              = $new_image_name;
                $image->save();
            }

                return redirect()->back()->with('msg','All image uploaded Successfully!');
        }else{

                $post->account_number      = $profile->id;
                $post->post_desc = request('description');
                $post->save();
                 return back()->with('msg','Please Choose any image file!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
