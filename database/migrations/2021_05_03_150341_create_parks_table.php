<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parks', function (Blueprint $table) {
            $table->id();
            $table->integer('national_local_government_code')->comment('全国地方公共団体コード');
            $table->string('type_value')->comment('識別値');
            $table->string('type')->comment('種別');
            $table->string('name')->comment('名称');
            $table->string('address')->comment('住所');
            $table->string('postal_code')->comment('郵便番号');
            $table->double('longitude', 7, 5)->comment('緯度');
            $table->double('latitude', 7, 4)->comment('経度');
            $table->double('area')->comment('面積');
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
        Schema::dropIfExists('parks');
    }
}
