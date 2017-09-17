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
            $table->string('password')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->dateTime('date_of_birth')->nullable();
            $table->string('occupation')->nullable();
            $table->enum('gender', ['m', 'f'])->nullable();
            $table->string('original_image')->nullable();
            $table->string('blurred_image')->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();

            $table->string('religion')->nullable();
            $table->string('state_of_origin')->nullable();
            $table->string('genotype')->nullable();
            $table->integer('height')->nullable();
            $table->longText('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('phone_number')->nullable();



            //EDUCATIONAL FIELDS;
            $table->string('education_level')->nullable();
            $table->string('educational_institution')->nullable();
            $table->double('personal_income', 15, 8)->nullable();
            $table->text('social')->nullable();

            $table->longText('description')->nullable();
            $table->longText('embarrassing_traits')->nullable();
            $table->text('positive_traits')->nullable();

            $table->string('plan')->nullable();
            $table->string('profile_for')->nullable();
            $table->string('relationship_status')->nullable();
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
