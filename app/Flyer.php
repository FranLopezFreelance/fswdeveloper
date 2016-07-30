<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model {

	/**
	 * Fillable fillable for a Flyer Form.
	 *
	 * @var array
	 */

	protected $fillable = [
		'street',
		'city',
		'state',
		'country',
		'zip',
		'price',
		'description'
	];

	/**
	 * Flyer has many Photos.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function photos() {
		return $this->hasMany(Photo::class );
	}
}
