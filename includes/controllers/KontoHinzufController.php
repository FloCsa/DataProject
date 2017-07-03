<?php

class KontoHinzufController extends Controller
{
	protected $viewFileName = "kontoHinzufuegen"; //this will be the View that gets the data...
	protected $loginRequired = true;


	public function run()
	{

		$this->view->title = "Konto hinzufuegen";
		$this->view->username = $this->user->username;


        if (!empty($_POST)) {


            $this->view->neuesKonto = array("kontoname"=>$_POST['kontoname'],"straße"=>$_POST['straße'],"nummer"=>$_POST['nummer'],
                "plz"=>$_POST['plz'], "ort"=>$_POST['ort'], "email"=>$_POST['email'], "stnummer"=>$_POST['stnummer']);

            AccountModel::createAccount($this->view->neuesKonto);

            exit();
        }
	}

}