<?php
class SeancesController extends AppController{
	public function add($programme_id){
		$this->loadModel('Exercice');
		if($this->request->is('post')){
			$d= $this->request->data;
			if($this->Seance->save($d)) $this->redirect(array("controller"=>"programmes","action"=>"add",$programme_id));
		}else{
			$cardio = $this->Exercice->find("list",array("conditions"=>array("type"=>"c")));
			$etirement = $this->Exercice->find("list",array("conditions"=>array("type"=>"e")));
			$abdo = $this->Exercice->find("list",array("conditions"=>array("type"=>"a")));
			$renfo = $this->Exercice->find("list",array("conditions"=>array("type"=>"r","muscles"=>"d")));
			$this->set("cardio",$cardio);
			$this->set("etirement",$etirement);
			$this->set("abdo",$abdo);
			$this->set("renfo",$renfo);
		}
	}
	public function get_exo(){
		$this->loadModel('Exercice');
		$renfo = $this->Exercice->find("list",array("conditions"=>array("type"=>"r","muscles"=>$this->params->query["muscle"])));
		return new CakeResponse(array('body' => json_encode($renfo),'type' => 'json'));
	}
}
