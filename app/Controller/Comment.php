<?php
namespace Controller;
use Minima\Controller\Base;
use Model;
use Form;

class Comment extends Base
{
    public function newAction($params)
    {
        $this->assert($place = Model\Place::find($params['place_id']));
        $this->assert($this->method == 'POST');

        $form = new Form\Comment($_POST);
        $this->assert($form->isValid());

        $comment = new Model\Comment($form->getValues());
        $comment['place_id'] = $place->getPk();
        $comment['user_id'] = $this->session->getUser()->getPk();
        $comment->save();
        $this->redirect('place/'.$place->getPk());
    }
}