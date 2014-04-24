<?php
namespace Form;
use Minima\Form\Base;
use Model;

class Search extends Base
{
	protected $fields = array('address', 'category');

	protected $validations = array(
		'mandatory' => array('address', 'category'),
	);

	protected function validate()
	{
		$category = $this->values['category'];
		if (!Model\Category::find($category))
			$this->errors['category'][] = 'Categorie introuvable';
	}
}