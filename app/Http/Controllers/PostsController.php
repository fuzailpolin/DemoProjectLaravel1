<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PostsController extends Controller
{
    public $timestamps = true;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.postindex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = DB::table('posts')->get();
        return view('Pages.postView')->with('posts', $posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $temp = new Posts();
        $temp->title = $request->titleInput;
        $temp->body = $request->bodyInput;

        if($temp->save()){
            return "Input taken";
        }
        else{
            return "Input not taken";
        }
        
        /*DB::table('posts')->insert([ 
            'title' => $request->titleInput,
            'body' => $request->bodyInput

        ]);*/
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = DB::table('posts')
            ->where('id', $id)
            ->get();
        return view('Pages.vlogPost')->with('posts', $posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = DB::table('posts')
                ->where('id', $id)
                ->get();
        return view('Pages.editVlog')->with('posts', $posts);
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
        $title = $request->txtTitleEdit;
        $body = $request->txtBodyEdit;
        DB::table('posts')->where('id', $id)
                        ->update(['body' => $body, 'title' => $title, 'updated_at'=> date('Y-m-d g:i:s')]);
        //return "Doing Update $title and $body";
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
