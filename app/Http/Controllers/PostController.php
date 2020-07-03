<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PostController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function home(){
		$latestvedio=Post::where('vedio', 'LIKE', '%http%')->first();
		$allvedio=Post::where('vedio', 'LIKE', '%http%')->get();
		$latestphoto=Post::where('photo', 'LIKE', '%img%')->first();
		$allphoto=Post::where('photo', 'LIKE', '%img%')->get();
		return view('welcome',compact('latestvedio','allvedio','latestphoto','allphoto'));
	}

	public function admin(){
		return view('login');
	}

	public function vedio($id){
		$post=Post::where('id',$id)->first();
		return view('viewpostv',compact('post'));
	}

	public function photo($id){
		$post=Post::where('id',$id)->first();
		return view('viewpostp',compact('post'));
	}

    public function allPost(){
    	$post=Post::all();
    	return view('admin.allPost',compact('post'));
    }

    public function createPost(Request $request){
    	$validatedData = $request->validate([
    	    'title' => ['required', 'unique:posts', 'max:255'],
    	    'body' => ['required'],
    	    'brief' => ['required'],
    	    'radio' => ['required'],
    	]);

    	if($request->vedio){

    		$post = Post::create([
    		    'title' => $request->title,
    		    'brief' => $request->brief,
    		    'body' => $request->body,
    		    'vedio' => $request->vedio
    		]);

    		return redirect('/admin/allPost');

    	} elseif($request->file('photo')) {
    			$img=$request->file('photo');
    		    $random = Str::random(20);
    		    $image_name = $random;
    		    $ext = strtolower($img->getClientOriginalExtension());
    		    $image_fname = $image_name . '.' . $ext;
    		    $upload_path = 'img/';
    		    $image_url = $upload_path . $image_fname;
    		    $success = $img->move($upload_path,$image_fname);

    		    $post = Post::create([
    		        'title' => $request->title,
    		        'brief' => $request->brief,
    		        'body' => $request->body,
    		        'photo' => $image_url
    		    ]);

    		    return redirect('/admin/allPost');
    		
    	} else {
    		return redirect('/admin/allPost');
    	}
    }

}
