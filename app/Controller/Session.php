<?php
namespace Controller;
use Minima\Controller\Base;
use Form;

class Session extends Base
{
    public function newAction()
    {
        $form = new Form\Login($_POST);
        if ($this->method == 'POST' && $form->isValid()) {
            $_SESSION['user_id'] = $form->getValues()['user_id'];
            $this->redirect('');
        }
        return array('form' => $form);
    }

    public function deleteAction()
    {
        $this->assert($this->session->getUser());
        $_SESSION['user_id'] = null;
        $this->redirect('');
    }
} 