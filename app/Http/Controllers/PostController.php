<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')
            ->where('user_id', auth()->user()->id)
            ->paginate();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', 'ASC')->get();

        return view('posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->all());

        /* Image
        if($request->hasFile('file')){
            $path = $request->file('file');
            $name = time().$path->getClientOriginalName();
            $path->move(public_path().'/images/', $name);
            $post->fill(['file' => asset($path)])->save();
        }*/

        // IMAGES
        if($request->file('file')){
            $path = Storage::disk('public')->put('images', $request->file('file'));
            $post->fill(['file' => asset($path)])->save();
        }

        // Tags
        $post->tags()->attach($request->get('tags'));

        alert('Operación exitosa','Se ha guardado correctamente', 'success')->showConfirmButton();

        return redirect()->route('posts.edit', $post->id); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $this->authorize('pass', $post);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $this->authorize('pass', $post);
        
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', 'ASC')->get();

        return view('posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $post = Post::find($id);
        $this->authorize('pass', $post);
        $post->fill($request->all())->save();

        /* Image
        if($request->hasFile('file')){
            $path = $request->file('file');
            $name = time().$path->getClientOriginalName();
            $path->move(public_path().'/images/', $name);
            $post->fill(['file' => asset($path)])->save();
        }*/

        // IMAGES
        if($request->file('file')){
            $path = Storage::disk('public')->put('images', $request->file('file'));
            $post->fill(['file' => asset($path)])->save();
        }

        // Tags
        $post->tags()->sync($request->get('tags'));

        alert('Operación exitosa','Se ha actualizado correctamente', 'success')->showConfirmButton();

        return redirect()->route('posts.edit', $post->id); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $this->authorize('pass', $post);
        $post->delete();

        alert('Operación exitosa','Se ha eliminado correctamente', 'success')->showConfirmButton();

        return back();
    }
}
