<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mat_id')->unique();
            $table->string('email', 50)->unique();
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->dateTime('date_of_birth');
            $table->string('occupation');
            $table->enum('gender', ['m', 'f']);
            $table->string('original_image');
            $table->string('blurred_image');

            $table->string('religion');
            $table->string('state_of_origin');
            $table->string('genotype');
            $table->integer('height');
            $table->longText('address');
            $table->string('city');
            $table->string('state');
            $table->string('phone_number');



            //EDUCATIONAL FIELDS;
            $table->string('education_level');
            $table->string('educational_institution');
            $table->double('personal_income', 15, 8);
            $table->text('social');

            $table->longText('description');
            $table->longText('embarrassing_traits');
            $table->text('positive_traits');

            $table->string('plan')->nullable();
            $table->string('profile_for');
            $table->string('relationship_status');
            $table->string('find_out')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
