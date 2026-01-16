<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Comment extends Model
{

    protected $fillable = ['content', 'post_id', 'user_id'];

     public function user()
     {
        return $this->belongsTo(User::class);
     }

     public function comments()
     {
        return $this->belongsTo(Comment::class);
     }
    //
    public function createTable() {
       Schema::create('comments', function (Blueprint $table){
        $table->id();

        $table->foreignId('post_id')->constrained()->onDelete('cascade');
        $table->text('content');
        $table->timestamp();

       }); 
    }
}
