<?php

/**
 * Description of Index
 *
 * @author nzpetter
 */
use Tobscure\JsonApi\Resource;

class Controller_V1_Index extends Controller
{

	public function action_index()
	{
		$userSerializer = new UserSerializer();
		$user = new stdClass();
		$user->id = 1;
		$user->name = 'Piotr';
		$user->surname = 'Gołasz';
		$resource = new Resource($user, $userSerializer);

		echo json_encode($resource->toArray());
	}

}
