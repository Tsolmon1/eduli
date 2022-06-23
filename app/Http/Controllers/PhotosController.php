<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Album;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class PhotosController extends Controller {

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $photos = Photo::latest('created_at')->paginate(10);
        return view('photos.index', compact('photos'));
    }
    
    public function create()
    {
        // dd(Album::find([26, 35])->pluck('name','id'));
        
        $albums = Album::find([ 24, 25, 26, 35])->pluck('name','id');
        $albums = $albums->reverse()->all();
        
        return view('photos.create', compact('albums'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'album_id' => 'required',
            'name' => 'required'
        ]);

        // $input = Input::all();\
        if ($request->hasFile('fileName')) {
            
            $file = $request->file('fileName');
            $extension = $file->guessClientExtension();
            // $path = public_path('images/articles');
            $path = '/home/eduliwfa/public_html/images/articles';
            $now = date('Y-m-d_H-i-s');
            
            $filename = $now .'.'.$extension;
            

            if ($file->isValid()) {
                $upload_success = $file->move($path, $filename);
                // dd($upload_success);
                $photo = new Photo;
                $photo->album_id = $request->input('album_id');
                $photo->path = $filename;
                $photo->name = $request->input('name');
                $photo->save();
            }
        }
        
        return Redirect('admin/photos');
    }
    
    public function move(UploadedFile $file)
    {
        $file->move($this->baseDir,$this->name);
        
        $this->makeThumbnail();
        
        return $this;
    }
    
    protected function makeThumbnail()
    {
        Image::make($this->path)
            ->fit(300)
            ->save($this->thumbnail_path);
    }

    public function show(Photo $photo)
    {
        return view('photos.show', compact('photo'));
    }

    public function thumbnail($id)
    {

    }

     public function edit($id)
     {
        $photo = Photo::findOrFail($id);

        return view('photos.edit', compact('photo' ));
     }

    public function destroy($id)
    {
        $fileName = Photo::findOrFail($id)->path;
        $path = public_path('images/articles/');

        File::delete($path.''.$fileName);
        Photo::findOrFail($id)->delete();

        return redirect('admin/photos');
    }

}