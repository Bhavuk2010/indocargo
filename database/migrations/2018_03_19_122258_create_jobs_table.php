<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->char('id',36);
            $table->primary('id');
            $table->char('uid',36);
            $table->string('name',191)->unique();
            $table->char('truck_id',36);
            $table->timestamp('timestamp')->nullable(true);
            $table->string('expected_dilivery',191)->nullable(true);
            $table->string('job_description',191)->nullable(true);
            $table->enum('status',['available', 'bid', 'confirmed', 'progress', 'completed', 'expired']);
            $table->string('image',191);
            $table->timestamp('posted_date');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('jobscol',45);

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
