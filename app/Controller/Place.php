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
        return array('place' => $place, 'category' => $category,
            'comment_form' => new Form\Comment(array()),
            'comments' => Model\Comment::findAll(array('place_id' => $params['id'])),
            'users' => Model\User::findAll(),
        );
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

    public function jsonAction($params)
    {
        $this->assert($category = Model\Category::find($params['category_id']));
        $values = array();

        foreach (Model\Place::findAll(array('category_id' => $category->getPk())) as $place)
            $values[] = $place['address'];
        exit(json_encode($values));
    }
}