<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Create websites table.
 *
 * @author Alexandru Bugairn <alexandru.bugarin@gmail.com>
 */
class CreateWebsitesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('websites', function(Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name');
            $table->string('suffix');
            $table->bigInteger('checks')->unsigned()->default(0);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('websites');
    }
}
