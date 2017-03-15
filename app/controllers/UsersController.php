<?php

class UsersController extends BaseController {

	public function getIndex()
	{
			// $users = User::all();

			return View::make('register');
	}

	public function anyDetails()
	{
		$user = new Painter;
		//$user->id = $id;
		$user->username = Input::get('username');
		$user->bio = Input::get('bio');
		$user->save();


		$painting = new Painting;
		$painting->title = Input::get('title');
		//print_r($painting); die;
		$painting->body = Input::get('body');
		$painting->painter_id = $user->id;
		$painting->save();
		//return "done";

		// $result['data'] = Painting::fetchPaintingData();
		//  $finalresult = json_decode(json_encode($result),true);
		// // return View::make('register',$finalresult);

		 $result['data'] = Painter::fetchPainterData();
		// // //print_r($result['data']);
		 $finalresult = json_decode(json_encode($result),true);
		// //return $finalresult;
		 return View::make('register',$finalresult);
		// 
		// $data = DB::table('painters')
  //       ->leftJoin('painting', 'painters.id', '=', 'paintings.painter_id')
  //       ->get();
  //       return $data;
		// $painter = Painter::where('id', '=', $id)->first();
		// $painters = Painting::where('painter_id', '=', $painter->id)->get();
	}

}



	// public function postDetails() 
	// {  
	// 	$user = new Painter;  
	// 	$user->username = isset(Input::get('username') ? Input::get('username') : '');   
	// 	$user->bio = Input::get('bio');  
	// 	$user->save();  //return $user; 
	// }

	// public function getShow($username)
	// {
	// 		$user = User::whereUsername($username)->first();

	// 		return View::make('users/show')->with('user', $user);
	// }
	// public function getCreate()
	// {

	// 		 return View::make('users/create');
	// 		// return Input::all();
	// }
	// public function postStore()
	// {
	// 		//echo 'hi'; die;

	// 		//$validation = Validator::make( Input::all(),['username' => 'required|unique:users', 'password' => 'required|min:4']);
	// 		if( ! User::isValid(Input::all()))
	// 			{
	// 			return Redirect::back()->withInput()->withErrors(User::$errors);
	// 		}

	// 		//$validation = Validator::make( Input::all(),User::$rules);// this will be removed because it is included as a isValid function in user.php 


	// 		//if($validator->fails())  return 'failed validation';
	// 		//if($validation->fails())
	// 		//{
	// 		//	return Redirect::back()->withInput()->withErrors($validation->messages());
	// 		//}

	// 		$user = new User;
	// 		$user->username = Input::get('username');
	// 		$user->email = Input::get('email');
	// 		$user->password = Hash::make(Input::get('password'));
	// 		$user->save();
	// 		return View::make('users/login');
	// 		//return Redirect::to('/users');
	// }
	// public function postLogincheck()
	// {
	// 	//echo 'hi'; die;
	// 	//return View::make('users/login');

	// 	$validator = Validator::make( Input::all(),['email' => 'required', 'password' => 'required']);
	// 	if($validator->fails())
	// 		{
	// 			return Redirect::back()->withInput()->withErrors($validator->messages());
	// 		}

	// 	$email = Input::get('email');
	// 	$password = Input::get('password');
	// 	if (Auth::attempt(array('email' => $email, 'password' => $password), true))
	// 	{
	// 	    echo Auth::user()->username;
	// 	     return Redirect::intended('/vishal');
	// 	}
	// }

	// public function getLogout()
	// {
	// 	Auth::logout();
	// 	return Redirect::to('vishal/login');
	// 	 //return View::make('users/login');
	// }
	// public function getLogin(){
	// 			return View::make('users/login');

		
	// }
