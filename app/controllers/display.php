<?php
namespace controllers;
use libraries\Auth;
use micro\orm\DAO;
use Ajax\semantic\html\content\view\HtmlItem;


/**
 * Controller Display
 **/
class Display extends ControllerBase {

    public function index(){



    }
    public function host($idhost){
        $user = Auth::getUser();
        $hosts=DAO::getAll("models\Host","idUser=".$user->getId());
        $servers=DAO::getAll("models\Server","idhost=".$idhost);
        $virtualhosts=DAO::getAll("models\Virtualhost", "idServer=".$user->getId());


        $this->loadView("Display/host.html",array("hosts"=>$hosts, "servers"=>$servers, "virtualhosts"=>$virtualhosts));




    }


    public function virtualhost($idvirtualhost){
        $user = Auth::getUser();
        $hosts=DAO::getAll("models\Host","idUser=".$user->getId());

        $this->loadView("Display/virtualhost.html",array("hosts"=>$hosts));


    }
}