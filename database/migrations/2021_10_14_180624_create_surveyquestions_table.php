<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyquestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveyquestions', function (Blueprint $table) {
            $table->id();
            $table->text('question_category');
            $table->text('question_type');
            $table->text('question');
            $table->string('response1');
            $table->string('response2');
            $table->text('question_category_ar');
            $table->text('question_ar');
            $table->string('response1_ar');
            $table->string('response2_ar');
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
        Schema::dropIfExists('surveyquestions');
    }
}
