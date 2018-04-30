<?php

namespace DummyRootNamespace\Http\Resources;
use Gmf\Sys\Http\Resources\Common as CommonRes;
use Illuminate\Http\Resources\Json\Resource;

class Sample extends Resource {
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request
	 * @return array
	 */
	public function toArray($request) {
		if (empty($this->id)) {
			return false;
		}
		$rtn = [];
		CommonRes::toField($this, $rtn, ['id', 'code']);
		return $rtn;
	}
}
