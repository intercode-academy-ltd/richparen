<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['news_content','news_title','image', 'lesson', 'project','created_at', 'updated_at'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function admin(){
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')
            ->latest()
            ->whereNull('parent_id');
    }
}
