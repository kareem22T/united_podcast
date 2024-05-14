<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Traits\DataFormController;
use Illuminate\Support\Facades\Validator;
use App\Models\Article;
use App\Models\Author;
use App\Models\Channel;
use App\Models\Page;
use App\Models\Volunteering_destination;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    use DataFormController;


    public function index() {
        return view('admin.dashboard.article_prev');
    }
    public function getNewsIndex() {
        $articles = Article::where('type', 'post')->orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->paginate(10);
        $title = 'اخبار رسالة';
        $active_link = 'news_active';
        Carbon::setLocale('ar');
        return view('site.articles')->with(compact(['articles', 'title', 'active_link']));
    }

    public function getVideosIndex() {
        $articles = Article::where('type', 'vedio')->orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->paginate(10);
        $title = 'الفيديوهات';
        $active_link = 'videos_active';
        Carbon::setLocale('ar');
        return view('site.articles')->with(compact(['articles', 'title', 'active_link']));
    }

    public function getImagesIndex() {
        $articles = Article::where('type', 'photos')->orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->paginate(10);
        $title = 'صور';
        $active_link = 'images_active';
        Carbon::setLocale('ar');
        return view('site.articles')->with(compact(['articles', 'title', 'active_link']));
    }

    public function getArticles() {
        $Articles = Article::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->paginate(10);

        return $this->jsonData(true, '', [], $Articles);
    }

    public function search(Request $request) {
        $byTitles = Article::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->where('title', 'like', '%' . $request->search_words . '%')->paginate(10);

        $byTypes = Article::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->where('type', 'like', '%'.$request->search_words.'%')->paginate(10);

        $contents = Article::orderBy(\DB::raw('ABS(TIMESTAMPDIFF(SECOND, created_at, NOW()))'))->where('content', 'like', '%'.$request->search_words.'%')->paginate(10);

        return $this->jsonData(true, '', [], !$byTitles->isEmpty() ? $byTitles : (!$byTypes->isEmpty() ? $byTypes : $contents));

    }

    public function addIndex() {
        $authors = Author::all();
        $channels = Channel::all();
        return view('admin.dashboard.article_add')->with(compact(['authors', 'channels']));
    }


    public function put(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'intro' => ['required'],
            'content' => ['required'],
            'thumbnail_path' => ['required'],
            'type' => ['required'],
            'channel_id' => ['required'],
            'author_id' => ['required'],
        ], [
            'title.required' => 'عنوان المنشور مطلوب',
            'intro.required' => 'من فضلك اكتب مقدمة بسيطة',
            'content.required' => 'المحتوى مطلوب',
            'thumbnail_path.required' => 'قم باختيار صورة مصغرة',
            'type.required' => 'اختر نوع المنشور',
            'channel_id.required' => 'من فضلك قم باختيار البرنامج',
            'author_id.required' => 'من فضلك قم باختيار الناشر'
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'Add failed', [$validator->errors()->first()], []);
        }

        $createArticle = Article::create([
            'author_id' => Auth::guard('admin')->user()->id,
            'title' => $request->title,
            'intro' => $request->intro,
            'content' => $request->content,
            'thumbnail_path' => $request->thumbnail_path,
            'type' => $request->type,
            'author_id' => $request->author_id,
            'channel_id' => $request->channel_id,
            'created_at' => now(),
        ]);

        if ($createArticle)
            return $this->jsonData(true, 'تم اضافة المنشور بنجاح', [], []);
    }


    public function edit($id) {
        $article = Article::find($id);
        $authors = Author::all();
        $channels = Channel::all();
        return view('admin.dashboard.article_edit')->with(compact(['authors', 'channels', 'article']));
    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => ['required'],
            'intro' => ['required'],
            'content' => ['required'],
            'thumbnail_path' => ['required'],
            'type' => ['required'],
            'channel_id' => ['required'],
            'author_id' => ['required'],
        ], [
            'title.required' => 'عنوان المنشور مطلوب',
            'intro.required' => 'من فضلك اكتب مقدمة بسيطة',
            'content.required' => 'المحتوى مطلوب',
            'thumbnail_path.required' => 'قم باختيار صورة مصغرة',
            'type.required' => 'اختر نوع المنشور',
            'channel_id.required' => 'من فضلك قم باختيار البرنامج',
            'author_id.required' => 'من فضلك قم باختيار الناشر'
        ]);


        if ($validator->fails()) {
            return $this->jsondata(false, 'update failed', [$validator->errors()->first()], []);
        }

        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->intro = $request->intro;
        $article->content = $request->content;
        $article->thumbnail_path = $request->thumbnail_path;
        $article->type = $request->type;
        $article->author_id = $request->author_id;
        $article->channel_id = $request->channel_id;

        $article->save();

        if ($article)
            return $this->jsonData(true, 'تم تعديل المنشور بنجاح', [], []);
    }

    public function delete(Request $request) {
        $validator = Validator::make($request->all(), [
            'article_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->jsondata(false, 'delete failed', [$validator->errors()->first()], []);
        }

        $Article = Article::find($request->article_id);
        $Article->delete();

        if ($Article)
            return $this->jsonData(true, $request->file_name . 'تم حف المنشور بنجاح', [], []);
    }

    public function latest(Request $request) {
        $Articles = Article::where("type", $request->type)->with(["author", "channel"])->latest()->take($request->num ? $request->num : 10)->get();
        $podcasts = Article::where("type", "podcast")->with(["author", "channel"])->latest()->take($request->num ? $request->num : 10)->get();
        $latest_programs = Channel::where('type', 'podcast')->latest()->get();

        return $this->jsonData(true, '', [], ["articles" => $Articles, "poscasts" => $podcasts, "programs" => $latest_programs]);
    }

    public function channelArticles(Request $request) {
        $Articles = Article::where("channel_id", $request->id)->with(["author", "channel"])->latest()->take($request->num ? $request->num : 10)->get();
        if ($Articles)
            return $this->jsonData(true, '', [], ["articles" => $Articles, "isMore" => Article::all()->count() > ($request->num ? $request->num : 10)]);
    }

    public function authorArticles(Request $request) {
        $Articles = Article::where("author_id", $request->id)->with(["author", "channel"])->latest()->take($request->num ? $request->num : 10)->get();
        if ($Articles)
            return $this->jsonData(true, '', [], ["articles" => $Articles, "isMore" => Article::all()->count() > ($request->num ? $request->num : 10)]);
    }

    public function postIndex($id) {
        $article = Article::find($id);
        if ($article) {
            $article->views = (int) $article->views + 1;
            $article->save();
        }

        return view('site.pages.article')->with(compact('article'));
    }

}
