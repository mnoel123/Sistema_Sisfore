<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $role1= Role::create(['name'=>'Administrador']);
        $role2= Role::create(['name'=>'Comisionado']);
        $role3= Role::create(['name'=>'Directivo']);

        $user=User::find(7);
        $user->assignRole(role1);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
