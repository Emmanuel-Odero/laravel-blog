<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $files = File::files(resource_path("posts"));
    $posts = [];
    foreach($files as $file){
        $document[] = YamlFrontMatter::parseFile($file);

        $posts[] = new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body()
        );
    }
    ddd($posts);
    // return view('posts', ['posts'=>$document])
    // $posts = Post::all();
    // ddd($posts);
    // $posts = Post::all();
    // dd($post[2]->get_contents());
    // return view('posts',[
    // 'posts'=>Post::all()
    // ]);
});
Route::get('/posts/{post}', function($slug){
    return view('post',[
        'post'=> Post::find($slug)
    ]);
}); //->where('post','A-z_\-]+');