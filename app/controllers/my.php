<?php
namespace controllers;
use libraries\Auth;
use micro\orm\DAO;
use Ajax\semantic\html\content\view\HtmlItem;
use models\Virtualhost;
use models\Server;

/**
* Controller My
**/
class My extends ControllerBase{


  /**
  * Mes services
  * Hosts et virtualhosts de l'utilisateur connect�
  */
  public function index(){
    if(Auth::isAuth()){          /** Si l'utilisateur est connecté */
    $user = Auth::getUser();     /**  Stocke les informations de l'utilisateur connecté dans la variable user */
    $hosts=DAO::getAll("models\Host","idUser=".$user->getId());     /** Récupère les données du model Host correspondant a l'Id */
    $virtualhosts=DAO::getAll("models\Virtualhost", "idServer!=".$user->getId());     /** Récupère les données du model Virtualhost correspondant a l'idServeur */
    $this->loadView("My/index.html",array("hosts"=>$hosts, "virtualhosts"=>$virtualhosts));       /** Envoi les differents tableaux de données dans la vue index.html du dossier My */


    }
    else {
        Auth::getInfoUser($this);
        $message=$this->semantic->htmlMessage("error","Merci de vous connecter pour tester.");
        $message->setIcon("announcement")->setError();
        $message->setDismissable();
        $message->addContent(Auth::getInfoUser($this,"-login"));
        echo $message;
        echo $this->jquery->compile($this->view);

    }

  }

}
