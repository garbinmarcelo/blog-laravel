<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
	public function index(){
		// Title
		$title = 'The Laravel 5.3 Blog';

		// Posts
		$posts = [
					0 => [
						'titulo' => 'Título 01',
						'data'   => date("d/m/Y H:i:s"),
						'autor'  => 'Marcelo Garbin',
						'texto'  => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae incidunt doloribus, veritatis maxime omnis culpa quisquam! Ab neque doloremque alias, incidunt corporis, dolor rerum. Sequi ipsum, sint expedita dolorem explicabo blanditiis non doloribus deleniti enim eos eaque impedit, maiores, eum molestias ipsa minima? Dolorum dolores laboriosam soluta maiores, debitis quod.</p>",
						],
					1 => [
						'titulo' => 'Título 02',
						'data'   => date("d/m/Y H:i:s"),
						'autor'  => 'Marcelo Garbin',
						'texto'  => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae incidunt doloribus, veritatis maxime omnis culpa quisquam! Ab neque doloremque alias, incidunt corporis, dolor rerum. Sequi ipsum, sint expedita dolorem explicabo blanditiis non doloribus deleniti enim eos eaque impedit, maiores, eum molestias ipsa minima? Dolorum dolores laboriosam soluta maiores, debitis quod.</p>",
						],
					2 => [
						'titulo' => 'Título 03',
						'data'   => date("d/m/Y H:i:s"),
						'autor'  => 'Marcelo Garbin',
						'texto'  => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae incidunt doloribus, veritatis maxime omnis culpa quisquam! Ab neque doloremque alias, incidunt corporis, dolor rerum. Sequi ipsum, sint expedita dolorem explicabo blanditiis non doloribus deleniti enim eos eaque impedit, maiores, eum molestias ipsa minima? Dolorum dolores laboriosam soluta maiores, debitis quod.</p>",
						],
				];

		return view('blog.index', ['posts' => $posts, 'title' => $title]);
	}
}
