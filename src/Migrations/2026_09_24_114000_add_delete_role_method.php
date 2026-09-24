<?php

use BehinUserRoles\Models\Method;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Method::firstOrCreate(
            ['name' => 'Delete Role'],
            ['category' => 'User Roles', 'disable' => 0]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Method::where('name', 'Delete Role')->delete();
    }
};
