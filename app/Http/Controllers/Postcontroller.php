<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Post;
use App\Models\UploadedFile;
use Illuminate\Support\Str;
use Hash;
use Session;
use  FlixtechsLabs\Bytepoint\Facades\Bytepoint;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{


//send email
  public function   sendemail(){

    return view ('email.sendemail');
  }


  

  //send 

  //admin page
  public function admin() {
  
    return view('admin.admin');
    
    }
   

  public function showtable(){

    $users =  Post::all();
    
    return view ('admin.showtable',['posts'=>$users]);
  }
  //end admin page 
  // search fun 
 public function searchview(){

  return view ('posts.search');
 }
 public function  search (Request $request) {

  $search = $request->input('search');
  $results = Post::where('phone', 'like', "%$search%")->get();
  return view('posts.search', ['results' => $results]);

 }
  

  // search fun 


  public function dashboard(){


    if(Auth::check()){
      //$user =  User::find($id);,['user'=>$user]
     return view ('Auth.dashboard');
  }

  return redirect("posts.login")->withSuccess('You are not allowed to access');

    

  }
public function  createnews(){

  return view ('electro.createnews');


}
public function  createnewsstore(Request $request){
$file = $request->file('image');
return ($file);

}

  public function contact(){

    return view ('electro.contact');
  }

  public function Login(){

    return view ('Auth.login');
  }

  //login section 
 public function customLogin(  Request  $request){
  $validator =  $request->validate([
    'email' => 'required',
    'password' => 'required',
]);


$credentials = $request->only('email', 'password');

if (Auth::attempt($credentials)) {

    return view ('admin.admin',['email'=>$request->email]);
                
               
}else

return redirect('posts/login');

 }






 //admin page 

  public function signout() {
 Session::flush();
    Auth::logout();

   return Redirect('posts/login');

}
public function elindex() {
  /*   Session::flush();
     Auth::logout();
 
    return Redirect('posts.login');*/

    $users =  Post::all();
    $dataa = UploadedFile::all();
    return view('electro.index',['posts'=>$users,'users'=>$dataa]);
 }



// login section
  public function showstore(){
    $users =  User::all();

    return view('posts.showstore',['post'=>$users]);
  }

    public function regester( ){

       
return view ('regester');
    }  

    public function index()
    {
        //select * from posts;
     
         //collection object
   //id, title (Var char), description(TEXT), created_at, updated_at
$users =  Post::all();

return view('posts.index',['poo'=>$users]);
        
    }

    //convention over configuration
    public function show( $postid) //type hinting
    {

      $findpost = Post::find($postid);
       
        //select * from posts where id = $postId limit 1;
//        $singlePostFromDB = Post::find($postId); //model object
//        $singlePostFromDB = Post::findOrFail($postId); //model object

   if(is_null( $findpost)) {
      return to_route('posts.index');
     }
     

//        $singlePostFromDB = Post::where('id', $postId)->first(); //model object

//        $singlePostFromDB = Post::where('id', $postId)->get(); //collection object


//        Post::where('title', 'php')->first() //select * from posts where title = 'php' limit 1;
//        Post::where('title', 'php')->get() //select * from posts where title = 'php';


        return view('posts.show', ['post' => $findpost]);
    }

  

    public function create()

    {
        //select * from users;
        $findpost = Post::all();

return view('posts.create');
    }

    public function storee(){

      $data = request()->all();
      $id = request()->id;
      $name = request()->name;
      $password = request()->password;
      $email = request()->email;
      $post = new User;
      $post->name = $name;
      $post->password = $password;
      $post->email = $email;
    $post->save();// insert into posts ('t','d')
 return to_route('posts.showstore');


    }
    public function store()
    {
      

        //1- get the user data
        $data = request()->all();
        $id = request()->id;
        $image = request()->image;
        $job = request()->job;
        $phone = request()->phone;
        $post1 = request()->post1;
   
        //التحقق من الحقول html
       /* request()->validate([

          'name' => 'required |min:5 |max:15',
          'job' => 'required|min:5 |max:15',
          'phone' => 'required|min:10 |max:10',
          
          'title' => 'required |min:5 |max:15',
        ]);*/
  
      // Store file information in the databas
        //2- store the submitted data in database
        $post = new Post;
        $post->name = $image;
        $post->job = $job;
        $post->phone = $phone;
        $post->post1 = $post1;

      $post->save();// insert into posts ('t','d')
   return to_route('posts.index');
       /* Post::create([
            'title' => $title,
            'description' => $description,
            'xyz' => 'some value', //ignore,
            'user_id' => $postCreator,
        ]);*/

        //3- redirection to posts.index
     
    }

    public function edit(Post $post)
    {
     
                //select * from users;
             $findpost = Post::all();
 return view('posts.edit', ['users'=>$findpost,'post'=>$post]);
    }

    public function editestore(Post $post)
    {
                //select * from users;

                $findpost = User::all();
 return view('posts.editestore', ['users'=>$findpost,'post'=>$post]);
    }
   /* public function update($postId)
    {
        //1- get the user data

        $name = request()->name;
        $job = request()->job;
        $phone = request()->phone;
    }*/
   

      
public function updatee(Request $request, $id){


  $item = Post::find($id);
  $item->name = $request->input('name');
  $item->job = $request->input('job');
  $item->phone = $request->input('phone');
  $item->save();
// $post = Post::find($id);
  //$post->update($request->all());
  return redirect()->route('posts.index')
    ->with('success', 'Post updated successfully.');

}
    public function udpost($id)
    {

      return ($request);
      /*$student = Post::find($id);
      $student->name = $request->input('name');
      $student->job = $request->input('job');
      $student->phone = $request->input('phone');
      
      $student->update();
     //$post = Post::find($id);ss
      //$post->update($request->all());
      return redirect()->route('posts.index')
        ->with('success', 'Post updated successfully.');*/
    }
    public function destroy($id)
    {
        //1- delete the post from database
            //select or find the post
            //delete the post from database
            $post = Post::find($id);
            $post->delete();
            return redirect()->route('posts.index')
              ->with('success', 'Post deleted successfully');
    
    }
   /* public function destroy($id)
    {
      $post = Post::find($id);
      $post->delete();
      return redirect()->route('posts.index')
        ->with('success', 'Post deleted successfully');
    }*/
}
