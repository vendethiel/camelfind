<?php
namespace Controller;
use Minima\Controller\Base;
use Model;
use Form;

class Place extends Base
{
    public function showAction($params)
    {
        $this->assert($place = Model\Place::find($params['id']));
        $this->assert($category = Model\Category::find($place['category_id']));
        return array('place' => $place, 'category' => $category);
    }

    public function searchAction()
    {
    	$form = new Form\Search($_POST);
        if ($this->method == 'POST' && $form->isValid()) {
            $category = Model\Category::find($form->getValues()['category']);
            return array('category' => $category,
                'places' => Model\Place::findAll(array('category_id' => $category->getPk()))
            );
        }
    	return array('form' => $form, 'categories' => Model\Category::findAll());
    }
}