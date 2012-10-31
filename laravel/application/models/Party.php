<?php

class Party extends Eloquent {

	public function address()
	{
		return $this->has_one('Address');
	}
}