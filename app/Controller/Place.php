<?php
namespace Controller;
use Minima\Controller\Base;
use Model;
use Form;

function calcul($a, $c, $b, $d)
{
    return (6371 * acos(sin(deg2rad($a))*sin(deg2rad($b)) + cos(deg2rad($a))*cos(deg2rad($b))*cos(deg2rad($c)-deg2rad($d))));
}

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
        return array('category' => $category, 'form' => $form,
            'places' => Model\Place::findAll(array('category_id' => $category->getPk()))
            );
    }
    return array('form' => $form, 'categories' => Model\Category::findAll());
}

public function jsonAction($params)
{
    $this->assert($category = Model\Category::find($params['category_id']));
    $values = array();
    $notre_Dame = array("48.852948", "2.349839");
    foreach (Model\Place::findAll(array('category_id' => $category->getPk())) as $place){
        $res = calcul($place['k'], $place['a'], $notre_Dame[0], $notre_Dame[1]);
        if ($res < 2)
            $values[] = $place['address']; 
    }

    exit(json_encode($values));
}

}