<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['file'];

	protected $directory = '/images/';
	protected $post_directory = '/images/post/';

	public function getFileAttribute($photo){
		return $this->directory . $photo;
	}

	public function getPostFileAttribute($photo){
		return $this->post_directory . $photo;
	}    
}
