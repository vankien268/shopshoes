<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên
            $table->string('email')->unique(); // Email
            $table->string('username')->unique(); // Tài khoản
            $table->boolean('verified')->default(User::UNVERIFIED); // Mặc định chưa xác thực
            $table->string('password'); // Mật khẩu
            $table->text('avatar_path')->nullable(); // Địa chỉ ảnh đại diện
            $table->softDeletes(); // Xóa mềm
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
        Schema::dropIfExists('users');
    }
}
