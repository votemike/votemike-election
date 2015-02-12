<?php namespace Election;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model {
	public $timestamps = false;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name'];

	public function policies()
    {
        return $this->hasMany('Election\Policy');
    }
}
