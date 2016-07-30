<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	protected $table = 'flyer_photos';

	protected $fillable = ['photo'];

	/**
	 * Photo belongs to Flyer.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function flyer() {
		// belongsTo(RelatedModel, foreignKey = flyer_id, keyOnRelatedModel = id)
		return $this->belongsTo(Flyer::class );
	}
}
