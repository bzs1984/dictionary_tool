<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionsgroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('actions_group', function($table)
        {
            $table->increments('id');
            $table->string('group_name')->unique();
            //$table->string('actions_name');
            //$table->integer('actions_group')->default(0);
            $table->timestamps();
            $table->softDeletes();

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
