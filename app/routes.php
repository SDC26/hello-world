

<?php

Route::Controller('users', 'UsersController');


Route::get('/', function(){
	return View::make('register');

	//this will show which methods can be used in painter model
	// $reflection = new ReflectionClass('Painter');
	// print_r($reflection->getMethods());

	//retrieving all models
	// $user = Painter::all();
	// return  $user;

	//retrieving by primary key
	// $user = Painter::find(1);
	// var_dump($user);

	//throw an exception
	// $user = Painter::findOrFail(1);
	// $user = Painter::where('id', '>', 2)->firstOrFail();
	// echo $user;

	//Count query
	// $count = Painter::where('id', '>', 1)->count();
	// echo $count;

	//inserting user
	// $user = new Painter;
	// $user->username = 'vinci';
	// $user->bio = 'expert in painting';
	// $user->save();

	//select query for information 
	// $user = Painter::all()->first();
	// echo $user->username.'</br>';
	// echo $user->bio;

	//for updating
	// $user = Painter::all()->first();
	// $user->username = 'SONALI';
	// $user->save();
	// echo $user->username;
	//$affectedRows = Painter::where('id', '>', 1)->update(array('username' => 'da'));
	// $user = Painter::find(2);
	// $user->username = 'Da vinci';
	// $user->save();

	//for Deleting
	// $user = Painter::where('id', '=', 4)->delete();
	// echo $user;
	// echo "deleted";

	//inserting using relationship between two models
	//$user = Painter::find(1);

	// $painting = new Painting;
	// $painting->title = 'The Storm on the Sea of Galilee';
	// $painting->body = 'The Storm on the Sea of Galilee is a painting from 1633 by the Dutch';	
	// $painting->painter_id = $user->id;
	// $painting->save();

	//using relationship and models
	// $user = Painter::whereUsername('Vincent Van Gogh')->first();
	// foreach ($user->painting as $painting) {
	// 	# code...
	// 	echo $painting->title.'<br/>';
	// 	echo $painting->body.'<br/>';

	// }

	// getting painting's painter
	// $user = Painting::whereTitle('The potato')->first();
	// echo $user->painter->username.'<br>';
	// echo $user->painter->bio;


	//getting all painters of different paintings
	// $paintings = Painting::all();
 	// foreach($paintings as $painting){
	// 	echo $painting->painter->username;
	// 	echo ' painted the ';
	// 	echo $painting->title;
	// }

	//eager loading
	// $user = Painting::with('painter')->get();

	// foreach ($user as $painters) {
	// 	# code...
	// 	echo $painters->painter->username;
	// 	echo "painted";
	// 	echo $painters->title;
	// }
});
