<?php
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Relations\Relation;

App::error(function(ModelNotFoundException $e)
{
    return Response::make('Not Found', 404);
});

class Painter extends Eloquent
{
	protected $table = 'painters';

	public function painting()
	{
		return $this->hasMany('Painting');
	}

	public static function fetchPainterData()
	{
		// $data = DB::table('painters')->get();
		// // //print_r($data); die;
		// return $data;
		$data = DB::table('painters')
        ->leftJoin('paintings', 'painters.id', '=', 'paintings.painter_id')
        ->get();
        return $data;
        //print_r($data); die;
	}
}