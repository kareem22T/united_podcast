<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Traits\DataFormController;
use Illuminate\Support\Facades\Validator;
use App\Models\Channel;
use App\Models\Page;
use App\Models\Volunteering_destination;
use Illuminate\Support\Facades\Auth;

class ChannelsController extends Controller
{
    use DataFormController;

    public function previewChannel($id) {
        $channel = Channel::with('articles')->find($id);
        return view('admin.dashboard.channel')->with(compact('channel'));
    }

    public function index() {
        return view('admin.dashboard.channel_prev');
    }
    public function getNewsIndex() {
        $Channels = Channel::where('type', 'post')->orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->paginate(10);
        $title = 'اخبار رسالة';
        $active_link = 'news_active';
        Carbon::setLocale('ar');
        return view('site.Channels')->with(compact(['Channels', 'title', 'active_link']));
    }

    public function getVideosIndex() {
        $Channels = Channel::where('type', 'vedio')->orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->paginate(10);
        $title = 'الفيديوهات';
        $active_link = 'videos_active';
        Carbon::setLocale('ar');
        return view('site.Channels')->with(compact(['Channels', 'title', 'active_link']));
    }

    public function getImagesIndex() {
        $Channels = Channel::where('type', 'photos')->orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->paginate(10);
        $title = 'صور';
        $active_link = 'images_active';
        Carbon::setLocale('ar');
        return view('site.Channels')->with(compact(['Channels', 'title', 'active_link']));
    }

    public function getChannels() {
        $Channels = Channel::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->paginate(10);
        
        return $this->jsonData(true, '', [], $Channels);
    }

    public function search(Request $request) {
        $byTitles = Channel::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->where('title', 'like', '%' . $request->search_words . '%')->paginate(10);

        $byTypes = Channel::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->where('type', 'like', '%'.$request->search_words.'%')->paginate(10);

        $descriptions = Channel::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->where('description', 'like', '%'.$request->search_words.'%')->paginate(10);
        
        return $this->jsonData(true, '', [], !$byTitles->isEmpty() ? $byTitles : (!$byTypes->isEmpty() ? $byTypes : $descriptions));

    }

    public function addIndex() {
        return view('admin.dashboard.channel_add');
    }


    public function put(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'description' => ['required'],
            'thumbnail_path' => ['required'],
            'type' => ['required'],
        ], [
            'title.required' => 'عنوان البرنامج مطلوب',
            'description.required' => 'الوصف مطلوب',
            'thumbnail_path.required' => 'قم باختيار صورة مصغرة',
            'type.required' => 'اختر نوع البرنامج',
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'Add failed', [$validator->errors()->first()], []);
        }

        $createChannel = Channel::create([
            'title' => $request->title,
            'description' => $request->description,
            'thumbnail_path' => $request->thumbnail_path,
            'type' => $request->type,
        ]);

        if ($createChannel)
            return $this->jsonData(true, 'تم اضافة البرنامج بنجاح', [], []);
    }


    public function edit($id) {
        $Channel = Channel::find($id);
        return view('admin.dashboard.channel_edit')->with(compact('Channel'));
    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'description' => ['required'],
            'thumbnail_path' => ['required'],
            'type' => ['required'],
        ], [
            'title.required' => 'عنوان البرنامج مطلوب',
            'description.required' => 'الوصف مطلوب',
            'thumbnail_path.required' => 'قم باختيار صورة مصغرة',
            'type.required' => 'اختر نوع البرنامج',
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'update failed', [$validator->errors()->first()], []);
        }

        $Channel = Channel::find($request->id); 
        $Channel->title = $request->title;
        $Channel->description = $request->description;
        $Channel->thumbnail_path = $request->thumbnail_path;
        $Channel->type = $request->type;
        $Channel->save();

        if ($Channel)
            return $this->jsonData(true, 'تم تعديل البرنامج بنجاح', [], []);
    }

    public function delete(Request $request) {
        $validator = Validator::make($request->all(), [
            'channel_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'delete failed', [$validator->errors()->first()], []);
        }

        $Channel = Channel::find($request->channel_id);
        $Channel->delete();

        if ($Channel)
            return $this->jsonData(true, $request->file_name . 'تم حف البرنامج بنجاح', [], []);
    }

}
