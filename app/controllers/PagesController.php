<?php

class PagesController extends BaseController{

	public function home()
	{
		$name = 'Chauhan';
	    return View::make('hello')->with('name',$name);
	}

	public function about()
	{
		$name = 'Sonali';
		return View::make('about')->with('name',$name);
	}
}