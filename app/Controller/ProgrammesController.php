<?php
class ProgrammesController extends AppController{
	public function add($user_id){
		if($this->request->is('get')){			
			$d = $this->Programme->find('first',array("conditions"=>array("user_id"=>$user_id),
										"contain"=>array("Seance"=>array("ExerciceSeance"=>"Exercice"),"User")));
			if(empty($d)){
				$d = array("Programme"=>array("user_id"=>$user_id),"User"=>array("id"=>$user_id));
				$this->Programme->saveAssociated($d);
				$this->set('programme',$this->Programme->read());
			}else $this->set('programme',$d);
			
		}
	}

	public function create(){
		$this->loadModel("User");
		$d = $this->User->find("first",array("conditions"=>array("programme_id"=>$this->params->query["prog_id"])));
		if($d['User']['sex'] == "h" && $d['User']['morphotype'] == "m"){
			$methodes = array("endurance"=>Configure::read("Methode.endurance.h_m"),"volume"=>Configure::read("Methode.volume.h_m"),"pyramidal"=>Configure::read("Methode.pyramidal.h_m"),"force"=>Configure::read("Methode.force.h_m"),"excentrique"=>Configure::read("Methode.excentrique.h_m"),"bulgare"=>Configure::read("Methode.bulgare.h_m"),"sèche"=>Configure::read("Methode.seche.h_m"));
			//debug($methodes);

		}
		if($d['User']['sex'] == "h" && $d['User']['morphotype'] == "e"){
			$methodes = array("endurance"=>Configure::read("Methode.endurance.h_e"),"pyramidal"=>Configure::read("Methode.pyramidal.h_e"),"volume"=>Configure::read("Methode.volume.h_e"),"force"=>Configure::read("Methode.force.h_e"),"excentrique"=>Configure::read("Methode.excentrique.h_e"),"bulgare"=>Configure::read("Methode.bulgare.h_e"));
			//debug($methodes);	
		}
		if($d['User']['sex'] == "f" && $d['User']['morphotype'] == "m"){
			$methodes = array("rafermissement"=>Configure::read("Methode.rafermissement.f_m"),"affinement"=>Configure::read("Methode.affinement.f_m"),"profondeur"=>Configure::read("Methode.profondeur.f_m"));
			//debug($methodes);
		}
		if($d['User']['sex'] == "f" && $d['User']['morphotype'] == "e"){
			$methodes = array("endurance"=>Configure::read("Methode.endurance.h_e"),"pyramidal"=>Configure::read("Methode.pyramidal.h_e"),"volume"=>Configure::read("Methode.volume.h_e"),"force"=>Configure::read("Methode.force.h_e"),"excentrique"=>Configure::read("Methode.excentrique.h_e"),"bulgare"=>Configure::read("Methode.bulgare.h_e"));
			//debug($methodes);
		}
		return new CakeResponse(array('body' => json_encode($methodes),'type' => 'json'));

	}
}