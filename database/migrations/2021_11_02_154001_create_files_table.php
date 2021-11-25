<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->String('folder_name')->unique()->nullable();
            $table->String('file_name')->nullable();
            $table->json('file_path')->nullable();
            $table->String('file_size')->nullable();
            $table->String('file_type')->nullable();
            $table->foreignId('parent_id')->nullable()
            ->constrained('files','id')
            ->CascadeOnDelete();
            $table->foreignId('user_id')->nullable()
            ->constrained('users','id')
            ->CascadeOnDelete();
            $table->unsignedInteger('type')->nullable();
            $table->unsignedInteger('trash')->default(0);
            $table->unsignedInteger('favarout')->default(0);
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
        Schema::dropIfExists('files');
    }
}
