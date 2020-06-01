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
    protected $fillable = ['title','content','featured_image','post_type','userID'];

    public $timestamps = true;

    /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment','postID','postID');
    }

   /**
     * Get the user that owns the post.
    */
    public function user()
    {
        return $this->belongsTo('App\User','userID', 'id');
    }
}
