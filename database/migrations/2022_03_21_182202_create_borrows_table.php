<?php

use App\Enums\BorrowStatus;
use App\Models\Book;
use App\Models\User;
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
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class,'reader_id')->index();
            $table->foreignIdFor(Book::class,'book_id')->index();
            $table->enum('status',BorrowStatus::toArray());
            $table->timestamp('request_processed_at')->nullable();
            $table->foreignIdFor(User::class,'request_managed_by')->nullable();
            $table->timestamp('deadline')->nullable();
            $table->timestamp('returned_at')->nullable();
            $table->foreignIdFor(User::class,'return_managed_by')->nullable();
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
        Schema::dropIfExists('borrows');
    }
};
