<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteImageIdToSubmissionImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('submission_images', function (Blueprint $table) {
            $table->dropColumn('image_id');
            $table->dropColumn('image_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('submission_images', function (Blueprint $table) {
            $table->integer('image_id');
            $table->string('image_path');
        });
    }
}
