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
      if(Auth::isAuth()){        /** Si l'utilisateur est connecté */
          $user = Auth::getUser();      /**  Stocke les informations de l'utilisateur connecté dans la variable user */
          $hosts = DAO::getAll("models\Host", "idUser=" . $user->getId());      /** Récupère les données du model Host correspondant a l'Id */
          $servers = DAO::getAll("models\Server", "idhost=" . $idhost);     /** Récupère les données du model Server correspondant a l'Idhost */
          $virtualhosts = DAO::getAll("models\Virtualhost", "idServer=" . $user->getId());      /** Récupère les données du model Virtualhost correspondant a l'ddServer */

                 /** Envoi les differents tableaux de données dans la vue index.html du dossier My */
          $this->loadView("Display/host.html", array("hosts" => $hosts, "servers" => $servers, "virtualhosts" => $virtualhosts));


      } else {
          Auth::getInfoUser($this);
          $message = $this->semantic->htmlMessage("error", "Merci de vous connecter pour tester.");
          $message->setIcon("announcement")->setError();
          $message->setDismissable();
          $message->addContent(Auth::getInfoUser($this, "-login"));
          echo $message;
          echo $this->jquery->compile($this->view);

      }
  }


  public function virtualhost($idvirtualhost){
    $user = Auth::getUser();
    $hosts=DAO::getAll("models\Host","idUser=".$user->getId());

    $this->loadView("Display/virtualhost.html",array("hosts"=>$hosts));


  }
}
