<?php
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Relations\Relation;

App::error(function(ModelNotFoundException $e)
{
    return Response::make('Not Found', 404);
});

class Painting extends Eloquent
{
	protected $table = 'paintings';

	public function painter()
	{
		return $this->belongsTo('Painter');
	}

	public static function fetchPaintingData()
	{
		$datas = DB::table('paintings')->get();
		//print_r($datas); die;
		return $datas;
	}
}

