<?php


namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Hash;
use Session;
use  FlixtechsLabs\Bytepoint\Facades\Bytepoint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\UploadedFile;

class UploadController extends Controller
{
    //
    public function edit(UploadedFile $post){
   
return view ('uploade.edit',['post'=>$post]);

    }


    public function store(Request $request): RedirectResponse
    {
       
        $request->validate([
         
            'file_upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        if ($file = $request->file('file_upload')) {
            $filePath = 'images/';
            $posts = $request->posts;
            $fileName = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($filePath, $fileName);
            $input['file_upload'] = "$fileName";
        }


        // Store the file in storage\app\public folder
        //$file = $request->file('file_upload');
       // $fileName = $file->getClientOriginalName();
//$filePath = $request->file('file_upload')->store('images', 'public');

        // Store file information in the database
        $uploadedFile = new UploadedFile();
        $uploadedFile->filename = $file->getClientOriginalName();
        $uploadedFile->original_name = $fileName;
        $uploadedFile->file_path = $filePath;
        $uploadedFile->posts = $posts;
        $uploadedFile->save();

        // Redirect back to the index page with a success message
        return redirect()->route('uploade.imageshow')
            ->with('success', "File `{$uploadedFile->original_name}` uploaded successfully.");
    }
public function uploood(Request $request, $id)
{

  
    $item = UploadedFile::find($id);
    $item->filename = $request->tname;
    $item->original_name = $request->name;
    $item->file_path = $request->path;
    $item->posts = $request->posts;
    $item->save();
  // $post = Post::find($id);
    //$post->update($request->all());
    return redirect()->route('uploade.imageshow')
      ->with('success', 'Post updated successfully.');
}
    // shows the create form
    public function create()
    {
        return view ('uploade.create');
    }

    // shows the uploads index
    public function index()
    {
        $users = UploadedFile::all();
        
       return view('uploade.imageshow', compact('users'));
    }

public function destroy($id){

    $post = UploadedFile::find($id);
    $post->delete();
    return redirect()->route('uploade.imageshow')
      ->with('success', 'Post deleted successfully');



}

}
