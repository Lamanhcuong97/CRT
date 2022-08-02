<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Article extends Model
{
    protected $fillable = ['title', 'subtitle', 'body', 'published_at'];

    protected $dates = ['published_at'];

    public function setPubishedAtAttribute($date){
      $this->attributes['published_at'] = Carbon::parse($date)->subDay();
    }

    public function scopePublished($query){
      $query->where('published_at', '<=', Carbon::now());
    }
}
