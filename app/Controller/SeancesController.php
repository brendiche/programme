<?php
class SeancesController extends AppController{
	public function add($programme_id){
		$this->loadModel('Exercice');
		$this->loadModel("Programme");
		if($this->request->is('post')){
			$d= $this->request->data;
			unset($d["Muscle"]);
			$exo = array();
			foreach ($d["Seance"] as $k => $v) {
				$exo[] = array("exercice_id" => $v);
			}
			unset($d["Seance"]);
			$d["Seance"]["programme_id"] = $programme_id;
			$d["ExerciceSeance"] = $exo;
			$user = $this->Programme->findById($programme_id);
			if($this->Seance->saveAssociated($d)) $this->redirect(array("controller"=>"programmes","action"=>"add",$user["Programme"]["user_id"]));
		}else{
			$cardio = $this->Exercice->find("list",array("conditions"=>array("type"=>"c")));
			$etirement = $this->Exercice->find("list",array("conditions"=>array("type"=>"e")));
			$abdo = $this->Exercice->find("list",array("conditions"=>array("type"=>"a")));
			$lombaires = $this->Exercice->find("list",array("conditions"=>array("muscles"=>"l")));
			$renfo = $this->Exercice->find("list",array("conditions"=>array("type"=>"r","muscles"=>"d")));
			$work_position = $this->Programme->findById($programme_id);
			$this->set("default_stretch",$work_position["User"]["work_position"]);
			$this->set("cardio",$cardio);
			$this->set("etirement",$etirement);
			$this->set("abdo",$abdo);
			$this->set("lombaires",$lombaires);
			$this->set("renfo",$renfo);
		}
	}
	public function get_exo(){
		$this->loadModel('Exercice');
		$renfo = $this->Exercice->find("list",array("conditions"=>array("type"=>"r","muscles"=>$this->params->query["muscle"])));
		return new CakeResponse(array('body' => json_encode($renfo),'type' => 'json'));
	}
	public function calcul_max(){
		if($this->request->is('ajax')){
			$seance = $this->Seance->find("first",array("conditions"=>array("id" => $this->params->query["seance_id"]),"contain"=>array("ExerciceSeance"=>"Exercice")));
		if(!empty($seance)) return new CakeResponse(array('body' => json_encode($seance),'type' => 'json'));  
        else return new CakeResponse(array('body' => "false",'type' => 'json'));  
		}

		if($this->request->is('post')){
			$this->loadModel("Programme");
			$d = $this->request->data;
			$to_save = $this->Seance->findById($d['seance']["seance_id"]);
			$user = $this->Programme->findById($to_save["Programme"]["id"]);
			foreach ($d['Exo'] as $k => $v) {
				$max = $this->getMax($v["max_charge"],$v["max_rep"]);
				$to_save["ExerciceSeance"][$k+4]["1rm"] = $max;
				$to_save["ExerciceSeance"][$k+4]["charge"] = $v["max_charge"];
				$to_save["ExerciceSeance"][$k+4]["nb_reps"] = $v["max_rep"];
			}
			if($this->Seance->saveAssociated($to_save)) $this->redirect(array("controller"=>"programmes","action"=>"add",$user["Programme"]["user_id"]));

		}
	}
	public function getMax($charge,$rep){
		$val = Configure::read("Max.brzycki");
		return $charge/($val['val1']-($val['val2']*$rep));
	}
}
