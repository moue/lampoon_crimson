<?php

class ArticlesController extends BaseController {
	public function index()	{
		// fetch all tasks
		$articles = Article::all();
		
		return View::make('articles.index', ['articles'=>$articles]);

	}

	public function show($id) {
		// fetch single article
		$article = Article::findOrFail($id);

		// load a view to display it
		return View::make('articles.show', ['article'=>$article]);
	}
}