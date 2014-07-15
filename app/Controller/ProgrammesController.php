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
}