<?php

namespace DummyRootNamespace\Http\Controllers;
use DummyRootNamespace\Http\Resources;
use DummyRootNamespace\Models;
use Gmf\Sys\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleController extends Controller {
	public function index(Request $request) {
		$input = $request->all();
		$size = $request->input('size', 10);
		$query = Models\Sample::where($input)->where('is_revoked', 0);
		$query->orderBy('created_at', 'desc');
		return $this->toJson(Resources\Comment::collection($query->paginate($size)));
	}
	public function store(Request $request) {
		$model = Models\Sample::create($request->all());
		return $this->toJson(new Resources\Comment($model));
	}
	public function destroy(Request $request, $id) {
		Models\Sample::where('id', $id)->delete();
		return $this->toJson(true);
	}
}