<?php
namespace Controller;
use Minima\Controller\Base;
use Model;

class Place extends Base
{
    public function showAction($params)
    {
        $this->assert($place = Model\Place::find($params['id']));
        return array('place' => $place);
    }
} 