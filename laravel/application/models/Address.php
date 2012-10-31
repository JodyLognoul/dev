<?php

class Address extends Eloquent {
	
	public function party()
	{
		return $this->has_one('Party');
	}
}