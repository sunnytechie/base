<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bases', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('description')->nullable();

            $table->integer('category_id');

            $table->string('event_name')->nullable();
            $table->date('event_date')->nullable();
            $table->time('event_time')->nullable();
            $table->text('event_location')->nullable();
            $table->text('event_description')->nullable();
            $table->string('event_image')->nullable();

            $table->string('website_name')->nullable();
            $table->text('website_url')->nullable();
            $table->text('website_image')->nullable();
            $table->text('website_description')->nullable();
            $table->string('website_username')->nullable();
            $table->string('website_passcode')->nullable();
            $table->string('website_email')->nullable();
            $table->text('website_cpanel_url')->nullable();
            $table->string('website_cpanel_username')->nullable();
            $table->string('website_cpanel_passcode')->nullable();
            $table->string('website_cpanel_email')->nullable();
            $table->string('website_cpanel_hostname')->nullable();
            $table->string('website_cpanel_hostpasscode')->nullable();
            $table->string('website_cpanel_hostemail')->nullable();
            $table->string('website_cpanel_hostusername')->nullable();
            
            $table->text('map_location')->nullable();
            $table->text('map_image')->nullable();
            $table->text('map_description')->nullable();

            $table->text('social_name')->nullable();
            $table->text('social_url')->nullable();
            $table->text('social_username')->nullable();
            $table->text('social_passcode')->nullable();
            $table->text('social_email')->nullable();

            $table->string('task_name')->nullable();
            $table->text('task_description')->nullable();
            $table->text('task_image')->nullable();
            $table->text('task_url')->nullable();

            $table->string('password_username')->nullable();
            $table->string('password_passcode')->nullable();
            $table->string('password_email')->nullable();
            $table->text('password_description')->nullable();

            $table->string('bank_name')->nullable();
            $table->text('bank_description')->nullable();
            $table->text('bank_acct_name')->nullable();
            $table->text('bank_acct_number')->nullable();
            $table->text('bank_acct_type')->nullable();
            $table->text('bank_acct_pin')->nullable();

            $table->string('resources_name')->nullable();
            $table->text('resources_description')->nullable();

            $table->string('report_name')->nullable();
            $table->text('report_description')->nullable();
            $table->text('report_image')->nullable();
            $table->text('report_url')->nullable();

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
        Schema::dropIfExists('bases');
    }
};
