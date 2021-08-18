<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('admin.video.video',compact('videos'));
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
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'image' => 'sometimes',
            'video_url' => 'required',
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);

        // image work
        $req = Arr::except($request->all(),['image']);
        // image
        if($request->image){
            $image = $request->image;
            $imageName = Str::random(10).'.' . $image->getClientOriginalExtension();
            \Storage::disk('public_videos')->put($imageName, \File::get($image));
            $req['image'] = $imageName;
        }

        // create article
        $video = new Video();
        $video->video_link =$req['video_url'];
        $video->thumbnil =$req['image'];
        $video->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        return Video::findOrFail($request->id);
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
        $id = $request->hidden;
        $video = Video::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'video_url' => 'sometimes',
            'image' => 'sometimes',
        ]);

        if($validator->fails())
            return response()->json($validator->errors()->toArray(), 400);
        // image work
        $req = Arr::except($request->all(),['image']);
        // image
        if($request->image){
            \Storage::disk('public_videos')->delete($video->image);
            $image = $request->image;
            $imageName = Str::random(10).'.' . $image->getClientOriginalExtension();
            \Storage::disk('public_videos')->put($imageName, \File::get($image));
            $req['image'] = $imageName;
        }
        $article = Video::find($req['hidden']);
        $article->video_link =$req['video_url'];
        $article->thumbnil =$imageName;
        $article->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $id = $request->hidden;
        $deleteData = Video::find($id);
        $deleteData->delete();
        return redirect()->back();
    }
}
