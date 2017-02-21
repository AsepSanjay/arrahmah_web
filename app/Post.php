<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    namespace Stidges;

	use Illuminate\Database\Eloquent\Model;

	class Post extends Model
	{
	    protected $table = 'posts';

	    // As a best practice, always set up the fillable property on your model!
	    protected $fillable = [ 'title', 'content' ];
	}
}
