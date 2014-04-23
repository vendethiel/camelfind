<?php
namespace Controller;
use Minima\Controller\Base;
use \Model;

class Misc extends Base
{
	public function homeAction()
	{
		return array(
			'articles' => Model\Article::findAll(),
		    'random_places' => Model\Place::findAll(array(), array('limit' => 5, 'order' => 'RAND()'))
        );
	}
}