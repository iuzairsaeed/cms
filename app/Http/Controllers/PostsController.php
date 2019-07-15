<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use App\Http\Requests;
use App\Http\Requests\CreatePostRequest;   

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//         dd($posts = Post::all());
//
//         $posts = Post::all();
//         echo $posts;

//         $posts = Post::scopeLatest()->get();
         $posts = Post::orderBy('id' , 'asc')->get();

//        $posts = Post::latest();
//            echo $posts->title();
        return view('posts.index', compact('posts') );

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    #you can use this directly request or you can import up there here is an example 
    #// public function store(Request\CreatePostRequest $request)
    public function store(CreatePostRequest $request)
    {



        //
        //  return $request->all();
        //  return $request->get('title');
        //  return $request->title;

        
        // $input = $request->all();
        // $input['title'] = $request->title;
        // Post::create($request->all());
        
        // $post = new Post;
        // $post->title = $request->title;
        // $post->save();

        # BAsic VALIDATION
//         $this->validate($request , [
//             'title' => 'required'
//         ]);



//        #File receiving
//        $file = $request->file('file');
//        echo "<br>";
//        echo $file->getClientOriginalName();
//        echo "<br>";
//        echo $file->getSize();

          #save file into db
          $input = $request->all();
          if($file = $request->file('file')){
              $name = $file->getClientOriginalName();
              $file->move('images' , $name);
              $input['path'] = $name;
          }

          Post::create($input);

//        Post::create($request->all());
//        return redirect('/posts');
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
        $post = Post::find($id);
        return view('posts.show' ,  compact('post'));
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
        $post = Post::findOrFail($id);
        return  view('posts.edit' , compact('post'));
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
        $post = Post::findOrFail($id);
        $post->update($request->all());

        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::whereId($id)->delete();   
        //  $post = Post::whereId($id)->delete();
        //$post->delete();
        return redirect('/posts');
    }

    public function contact(){

        //$people = ['uzair' , 'saeed' , 'faraz' , 'qumber' , 'murtuza'];
            $people = [];
        return view('contact' , compact('people') );
    
    }

    public function show_post($id,$name,$password){
        //return view('post')->with('id',$id);
        
        return view('posts' , compact('id','name','password') );
        
    }

}
