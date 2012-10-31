<?php

class Party_Controller extends Base_Controller {

	public $restful = true;

	public function get_index()
	{		
		$parties = Party::all();
		if ( ! $parties ) {
			return json_encode('no party');
		}
		return eloquent_to_json($parties);	
	}

	public function post_create()
	{		
		
	}

	public function get_new()
	{
		return View::make('party.new');
	}

	public function get_show($id)
	{		
		$party = Party::find($id);
		if ( ! $party ){
			return json_encode('no party for this id');
		}
		return eloquent_to_json($party);	
	}
	
	public function get_edit($id)
	{
		$party = Party::find($id);
		if ( ! $party ){
			return json_encode('no party for this id');
		}
		return View::make('party.edit');
	}

}