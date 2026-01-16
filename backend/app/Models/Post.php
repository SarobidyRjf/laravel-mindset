<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class Post extends Model
{

     protected $fillable = ['title', 'content', 'user_id'];

     public function user()
     {
        return $this->belongsTo(User::class);
     }

     public function comments()
     {
        return $this->belongsTo(Comment::class);
     }



    //
 public function createTable(){
       Schema::create('posts', function (Blueprint $table) {
        $table->id();

        $table->foreignId('user_id')->constraint()->onDelete('cascade');
        $table->string('title');
        $table->text('content');
        $table->timestampts();
    });
 }
}
