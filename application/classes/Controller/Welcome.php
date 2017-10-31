<?php

class Controller_Welcome extends Controller {

	public function action_index()
	{
		echo Route::url('apires', [
			'directory' => 'v1',
			'controller' => 'index',
			'action' => 'index',
			'id' => 1
		]);
	}

} // End Welcome
