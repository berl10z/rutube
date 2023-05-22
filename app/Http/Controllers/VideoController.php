<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Video\UploadRequest;

class VideoController extends Controller
{
    public function uploadShow()
    {
        $categories = Category::all();
        return view('upload',compact('categories'));
    }
    public function upload(UploadRequest $r)
    {
        $data = $r->validated();

        if ($r->hasFile('video'))
        {
            $path = $r->file('video')->store('videos', ['disk' => 'public']);
            $data['video'] = $path;
        }
        Video::create($data);

        return to_route('index');
    }
    public function delete($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();
        return to_route('index');
    }
}
