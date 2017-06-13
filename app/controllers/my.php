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
        if(Auth::isAuth()){
        	$user = Auth::getUser();
            $hosts=DAO::getAll("models\Host","idUser=".$user->getId());
            $virtualhosts=DAO::getAll("models\Virtualhost", "idServer!=".$user->getId());

            $this->loadView("My/index.html",array("hosts"=>$hosts, "virtualhosts"=>$virtualhosts));


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
