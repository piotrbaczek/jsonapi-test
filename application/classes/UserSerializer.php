<?php

/**
 * Description of TestSerializer
 *
 * @author nzpetter
 */
class UserSerializer implements \Tobscure\JsonApi\SerializerInterface
{

	public function getAttributes($model, array $fields = null)
	{
		foreach ($model as $key => $value)
		{
			if ($key === 'id')
			{
				continue;
			}
			$fields[$key] = $value;
		}

		return $fields;
	}

	public function getId($model): string
	{
		return $model->id;
	}

	public function getLinks($model): array
	{
		return [];
	}

	public function getMeta($model): array
	{
		return [
			'asdf' => 'asdf'
		];
	}

	public function getRelationship($model, $name)
	{
		return null;
	}

	public function getType($model): string
	{
		return 'user';
	}

}
