<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Upload;
use Image;
use Storage;
use Response;

class AizUploadController extends Controller
{
    public function index(Request $request){

        $all_uploads = Upload::query();
        $search = null;
        $sort_by = null;

        if ($request->search != null) {
            $search = $request->search;
            $all_uploads->where('file_original_name', 'like', '%'.$request->search.'%');
        }

        $sort_by = $request->sort;
        switch ($request->sort) {
            case 'newest':
                $all_uploads->orderBy('created_at', 'desc');
                break;
            case 'oldest':
                $all_uploads->orderBy('created_at', 'asc');
                break;
            case 'smallest':
                $all_uploads->orderBy('file_size', 'asc');
                break;
            case 'largest':
                $all_uploads->orderBy('file_size', 'desc');
                break;
            default:
                $all_uploads->orderBy('created_at', 'desc');
                break;
        }

        $all_uploads = $all_uploads->paginate(60)->appends(request()->query());

        return view('backend.uploaded_files.index', compact('all_uploads', 'search', 'sort_by') );
    }

    public function create(){
        return view('file_manager.file_manager_dialog');
    }


    public function show_uploader(Request $request){
        return view('uploader.xem-uploader');
    }
    public function upload(Request $request){
        $type = array(
            "jpg"=>"image",
            "jpeg"=>"image",
            "png"=>"image",
            "svg"=>"image",
            "webp"=>"image",
            "gif"=>"image",
            "mp4"=>"video",
            "mpg"=>"video",
            "mpeg"=>"video",
            "webm"=>"video",
            "ogg"=>"video",
            "avi"=>"video",
            "mov"=>"video",
            "flv"=>"video",
            "swf"=>"video",
            "mkv"=>"video",
            "wmv"=>"video",
            "wma"=>"audio",
            "aac"=>"audio",
            "wav"=>"audio",
            "mp3"=>"audio",
            "zip"=>"archive",
            "rar"=>"archive",
            "7z"=>"archive",
            "doc"=>"document",
            "txt"=>"document",
            "docx"=>"document",
            "pdf"=>"document",
            "csv"=>"document",
            "xml"=>"document",
            "ods"=>"document",
            "xlr"=>"document",
            "xls"=>"document",
            "xlsx"=>"document"
        );

        if($request->hasFile('xem_file')){
            $upload = new Upload;
            $extension = strtolower($request->file('xem_file')->getClientOriginalExtension());

            if(isset($type[$extension])){
                $upload->file_original_name = null;
                $arr = explode('.', $request->file('xem_file')->getClientOriginalName());
                for($i=0; $i < count($arr)-1; $i++){
                    if($i == 0){
                        $upload->file_original_name .= $arr[$i];
                    }
                    else{
                        $upload->file_original_name .= ".".$arr[$i];
                    }
                }

                $path = $request->file('xem_file')->store('uploads/all', 'local');
                $size = $request->file('xem_file')->getSize();

                if($type[$extension] == 'image'){
                    try {
                        $img = Image::make($request->file('xem_file')->getRealPath())->encode();
                        $height = $img->height();
                        $width = $img->width();
                        if($width > $height && $width > 1500){
                            $img->resize(1500, null, function ($constraint) {
                                $constraint->aspectRatio();
                            });
                        }elseif ($height > 1500) {
                            $img->resize(null, 800, function ($constraint) {
                                $constraint->aspectRatio();
                            });
                        }
                        $img->save(base_path('public/').$path);
                        clearstatcache();
                        $size = $img->filesize();

                    } catch (\Exception $e) {
                        //dd($e);
                    }
                }

                if (env('FILESYSTEM_DRIVER') == 's3') {
                    Storage::disk('s3')->put($path, file_get_contents(base_path('public/').$path));
                    unlink(base_path('public/').$path);
                }

                $upload->extension = $extension;
                $upload->file_name = $path;
                $upload->user_id = auth()->user()->id;
                $upload->type = $type[$upload->extension];
                $upload->file_size = $size;
                $upload->save();
            }
            return '{}';
        }
    }

    public function get_uploaded_files(Request $request)
    {
        $uploads = Upload::where('user_id', auth()->user()->id);
        if ($request->search != null) {
            $uploads->where('file_original_name', 'like', '%'.$request->search.'%');
        }
        if ($request->sort != null) {
            switch ($request->sort) {
                case 'newest':
                    $uploads->orderBy('created_at', 'desc');
                    break;
                case 'oldest':
                    $uploads->orderBy('created_at', 'asc');
                    break;
                case 'smallest':
                    $uploads->orderBy('file_size', 'asc');
                    break;
                case 'largest':
                    $uploads->orderBy('file_size', 'desc');
                    break;
                default:
                    $uploads->orderBy('created_at', 'desc');
                    break;
            }
        }
        return $uploads->paginate(60)->appends(request()->query());
    }

    public function destroy(Request $request,$id)
    {
        try{
            if(env('FILESYSTEM_DRIVER') == 's3'){
                Storage::disk('s3')->delete(Upload::where('id', $id)->first()->file_name);
            }
            else{
                unlink(public_path().'/'.Upload::where('id', $id)->first()->file_name);
            }
            Upload::destroy($id);
            flash(translate('File deleted successfully'))->success();
        }
        catch(\Exception $e){
            Upload::destroy($id);
            flash(translate('File deleted successfully'))->success();
        }
        return back();
    }

    public function get_preview_files(Request $request){
        $ids = explode(',', $request->ids);
        $files = Upload::whereIn('id', $ids)->get();
        return $files;
    }

    //Download project attachment
    public function attachment_download($id)
    {
        $project_attachment = Upload::find($id);
        try{
            $file_path = public_path($project_attachment->file_name);
            return Response::download($file_path);
        }catch(\Exception $e){
            flash(translate('File does not exist!'))->error();
            return back();
        }

    }
    //Download project attachment
    public function file_info(Request $request)
    {
        $file = Upload::findOrFail($request['id']);
        return view('backend.uploaded_files.info',compact('file'));
    }

    public function get_image_content($file_name)
    {
        dd('sss');
    }
}
