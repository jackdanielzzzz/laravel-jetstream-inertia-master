<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'title','slug','image','description', 'sort_description', 'is_featured'];

    protected $appends = ['image_url', 'created_at_as_human_format'];

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return Storage::url($this->image);
        }else{
            return 'https://picsum.photos/200/200?grayscale';
        }
    }

    public function getCreatedAtAsHumanFormatAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function Category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}
