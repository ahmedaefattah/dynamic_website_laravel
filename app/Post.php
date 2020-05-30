<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    protected $primaryKey = 'postID';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','content','created_at','featured_image'];

    public $timestamps = false;

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment','postID','postID');
    }

   
}
