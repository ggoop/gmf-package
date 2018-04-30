<?php

namespace DummyRootNamespace\Models;
use Gmf\Sys\Traits\HasGuard;
use Gmf\Sys\Traits\Snapshotable;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model {
	use Snapshotable, HasGuard;
	protected $table = 'sample';
	public $incrementing = false;
	protected $fillable = ['id'];

}
