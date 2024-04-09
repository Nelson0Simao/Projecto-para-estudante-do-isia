<?php


namespace App\Controllers\Admin;

use MF\Controller\Action;
use MF\Model\Container;


class AdminPeopleController extends Action
{


    public function availableSex()
    {

        $People = Container::getModel('People\\People');
        echo json_encode($People->availableSex());
    }


    public function pcd()
    {

        $People = Container::getModel('People\\People');
        echo json_encode($People->pcd());
    }


    public function bloodType()
    {

        $People = Container::getModel('People\\People');
        echo json_encode($People->availablebloodType());
    }


    public function checkCpf()
    {

        $People = Container::getModel('People\\People');

        $bi = preg_replace('/[^0-9]/', '', $_GET['bi']);

        $People->__set('bi', $bi);

        echo json_encode($People->checkCpf()); 
    }
}
