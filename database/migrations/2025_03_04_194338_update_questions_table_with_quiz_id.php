<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            // Видаляємо старий foreign key на topic_id
            $table->dropForeign(['topic_id']); // Якщо topic_id вже був зовнішнім ключем
            $table->dropColumn('topic_id');    // Видаляємо саму колонку topic_id

            // Додаємо новий foreign key на quiz_id
            $table->foreignId('quiz_id')->constrained('quizzes')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            // Якщо потрібно, можемо відновити старі зміни
            $table->dropForeign(['quiz_id']); // Видалити новий зовнішній ключ

            // Додаємо назад старий зовнішній ключ на topic_id
            $table->foreignId('topic_id')->constrained('topic_quizzes');
        });
    }
};
