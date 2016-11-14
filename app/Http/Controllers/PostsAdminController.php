<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Http\Requests\PostRequest;

class PostsAdminController extends Controller
{

	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	public function index()
	{
		$posts = $this->post->paginate(5);

		return view('admin.posts.index', compact('posts'));
	}

	public function create()
	{
		return view('admin.posts.create');
	}

	public function store(PostRequest $request)
	{
		// Cadastra Posts
		$post = $this->post->create($request->all());
		// Cadastra as Tags
		$post->tags()->sync($this->getTagsIds($request->tags));

		return redirect()->route('admin.posts.index');
	}

	public function edit($id)
	{
		$post = $this->post->find($id);

		return view('admin.posts.edit', compact('post'));
	}

	public function update($id, PostRequest $request)
	{
		// Atualiza o Post
		$this->post->find($id)->update($request->all());
		$post = $this->post->find($id);
		// Atualiza as Tags
		$post->tags()->sync($this->getTagsIds($request->tags));

		return redirect()->route('admin.posts.index');
	}

	public function destroy($id)
	{
		$this->post->find($id)->delete();
		return redirect()->route('admin.posts.index');
	}

	private function getTagsIds($tags)
	{
		$tagList = array_filter(array_map('trim', explode(',', $tags)));
		$tagsIDs = [];

		foreach($tagList as $tagName)
		{
			$tagsIDs[] = Tag::firstOrCreate(['name' => $tagName])->id;
		}

		return $tagsIDs;
	}
}
