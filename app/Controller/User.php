<?php
namespace Controller;
use Minima\Controller\Base;
use Form;
use Model;

class User extends Base
{
    public function newAction()
    {
        $form = new Form\Register($_POST, array('db' => $this->db));
        if ($this->method == 'POST' && $form->isValid()) {
            $user = new Model\User($form->getValues());
            $user->save();
            $_SESSION['user_id'] = $user->getPk();
            $this->redirect('');
        }
        return array('form' => $form);
    }
} 