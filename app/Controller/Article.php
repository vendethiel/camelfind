<?php
namespace Controller;
use Minima\Controller\Base;
use Model;
use Form;

class Article extends Base
{
	public function showAction($params)
	{
		$this->assert($article = Model\Article::find($params['id']));
		return array('article' => $article);
	}

	public function newAction()
	{
		$form = new Form\Article($_POST);
		if ($this->method == 'POST' && $form->isValid()) {
			$article = new Model\Article($form->getValues());
			$article['created_at'] = time();
			$article->save();
			$this->redirect('');
		}
		return array('form' => $form);
	}
}