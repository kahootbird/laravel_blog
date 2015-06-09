<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index()
	{
		return view('blog.Index');
		
		//$this->layout->content = View::make('blog.index');
	}
	//
	public function about()
	{
		$people = [
		'person dude', 'the otherguy', 'i donno'
		];
		return view('pages.About', compact('people'));
	}
	public function newPost()
	{
		$this->layout->content = View::make('blog.index');
		//$this->layout->content = View::make('blog.new');
	}
}
