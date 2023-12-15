<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Traits\DataFormController;
use Illuminate\Support\Facades\Validator;
use App\Models\Author;
use App\Models\Page;
use App\Models\Volunteering_destination;
use Illuminate\Support\Facades\Auth;

class AuthorsController extends Controller
{
    use DataFormController;


    public function index() {
        return view('admin.dashboard.author_prev');
    }
    public function getNewsIndex() {
        $Authors = Author::where('type', 'post')->orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->paginate(10);
        $title = 'اخبار رسالة';
        $active_link = 'news_active';
        Carbon::setLocale('ar');
        return view('site.Authors')->with(compact(['Authors', 'title', 'active_link']));
    }

    public function getVideosIndex() {
        $Authors = Author::where('type', 'vedio')->orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->paginate(10);
        $title = 'الفيديوهات';
        $active_link = 'videos_active';
        Carbon::setLocale('ar');
        return view('site.Authors')->with(compact(['Authors', 'title', 'active_link']));
    }

    public function getImagesIndex() {
        $Authors = Author::where('type', 'photos')->orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->paginate(10);
        $title = 'صور';
        $active_link = 'images_active';
        Carbon::setLocale('ar');
        return view('site.Authors')->with(compact(['Authors', 'title', 'active_link']));
    }

    public function getAuthors() {
        $Authors = Author::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->paginate(10);
        
        return $this->jsonData(true, '', [], $Authors);
    }

    public function search(Request $request) {
        $byTitles = Author::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->where('title', 'like', '%' . $request->search_words . '%')->paginate(10);

        $byTypes = Author::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->where('type', 'like', '%'.$request->search_words.'%')->paginate(10);

        $descriptions = Author::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->where('description', 'like', '%'.$request->search_words.'%')->paginate(10);
        
        return $this->jsonData(true, '', [], !$byTitles->isEmpty() ? $byTitles : (!$byTypes->isEmpty() ? $byTypes : $descriptions));

    }

    public function addIndex() {
        return view('admin.dashboard.author_add');
    }


    public function put(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
        ], [
            'name.required' => 'اسم الناشر مطلوب',
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'Add failed', [$validator->errors()->first()], []);
        }

        $createAuthor = Author::create([
            'name' => $request->name,
            'brief' => $request->brief,
            'profile_path' => $request->profile_path,
        ]);

        if ($createAuthor)
            return $this->jsonData(true, 'تم اضافة الناشر بنجاح', [], []);
    }


    public function edit($id) {
        $Author = Author::find($id);
        return view('admin.dashboard.author_edit')->with(compact('Author'));
    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
        ], [
            'name.required' => 'اسم الناشر مطلوب',
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'update failed', [$validator->errors()->first()], []);
        }

        $Author = Author::find($request->id); 
        $Author->name = $request->name;
        $Author->brief = $request->brief;
        $Author->profile_path = $request->profile_path;
        $Author->save();

        if ($Author)
            return $this->jsonData(true, 'تم تعديل بيانات الناشر بنجاح', [], []);
    }

    public function delete(Request $request) {
        $validator = Validator::make($request->all(), [
            'author_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'delete failed', [$validator->errors()->first()], []);
        }

        $Author = Author::find($request->author_id);
        $Author->delete();

        if ($Author)
            return $this->jsonData(true, $request->file_name . 'تم حف الناشر بنجاح', [], []);
    }

}
