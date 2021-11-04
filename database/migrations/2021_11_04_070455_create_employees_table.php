<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->integer('serial_number')->autoIncrement();
            $table->uuid('id');
            $table->string('name', 30)->comment('員工姓名');
            $table->string('id_number', 20)->comment('員工身分證字號');
            $table->date('birth')->comment('出生日期');
            $table->char('tele_nubmer', 11)->comment('住家電話');
            $table->char('mobile_number', 10)->comment('手機號碼');
            $table->string('position_id', 5)->comment('職位id');
            $table->tinyInteger('active', 5)->comment('是否在職(0:離職; 1:在職)');
            $table->timestamps($precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
