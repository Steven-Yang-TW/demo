<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position_name', 15)->comment('職稱');
            $table->string('work_time', 20)->comment('工作時間');
            $table->text('work_content')->comment('工作內容');
            $table->tinyInteger('require_amount', 3)->comment('工作內容');
            $table->tinyInteger('real_amount', 3)->comment('實際人數');
            $table->tinyInteger('vacancy', 3)->comment('實際人數');
            $table->tinyInteger('flexible', 3);
            $table->tinyInteger('active', 3);
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
        Schema::dropIfExists('positions');
    }
}
