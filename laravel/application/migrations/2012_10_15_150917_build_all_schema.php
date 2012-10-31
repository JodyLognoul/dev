<?php

class Build_All_Schema {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// ADDRESS
		Schema::create('addresses', function($table){

			// Options
			$table->engine = 'InnoDB';
			
			// Fields			
			$table->increments('id');			
			$table->string('country');						// country
			$table->string('str_name');						// str_name
			$table->string('str_no');						// str_no
			$table->string('cp');							// cp
			$table->string('city');							// city			
			$table->integer('party_id')->unsigned();		// party_id
			
			// Foreign Key
			// $table->foreign('party_id')->references('id')->on('parties');		

			// Other
			$table->timestamps();
		});

		// USER
		Schema::create('users', function($table){
			
			// Options
			$table->engine = 'InnoDB';

			// Fields
			$table->increments('id')->unsigned();			// id
			$table->string('name');							// name
			$table->string('surname');						// surname
			$table->date('birthday');						// birthday
			$table->string('username');						// username
			$table->string('password');						// password
			$table->timestamp('date_register');				// date_register
			$table->timestamp('date_last_con');				// date_last_con
			$table->string('email','60')->unique();		 		// email
			$table->string('url_confirmation');		 		// url_confirmation
			$table->boolean('confirmed')->default(false);	// confirmed
			
			// Other
			$table->timestamps();			
		});
		
		// PARTY
		Schema::create('parties', function($table){
			
			// Options
			$table->engine = 'InnoDB';
			
			// Fields
			$table->increments('id');						// id
			$table->string('description');					// description
			$table->timestamp('starting_date');				// starting_date
			$table->timestamp('ending_date');				// ending_date
			$table->integer('max_place'); 					// max_place
			$table->integer('user_id')->unsigned();			// user_id
			$table->integer('address_id')->unsigned();		// user_id

			// Foreign Key
			// $table->foreign('user_id')->references('id')->on('users');					
			// $table->foreign('address_id')->references('id')->on('addresses');					
			
			// Other
			$table->timestamps();
		});				
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parties');
		Schema::drop('users');
		Schema::drop('addresses');
	}
}