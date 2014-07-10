<?php
class SeancesController extends AppController{
	public function add($programme_id){
		$this->loadModel('Exercice');
		if($this->request->is('post')){
			debug($this->request->data);
			die;
		}else{
			$cardio = $this->Exercice->find("list",array("conditions"=>array("type"=>"c")));
			$etirement = $this->Exercice->find("list",array("conditions"=>array("type"=>"e")));
			$renfo_d = $this->Exercice->find("list",array("conditions"=>array("type"=>"r","muscles"=>"d")));
			$renfo_p = $this->Exercice->find("list",array("conditions"=>array("type"=>"r","muscles"=>"p")));
			$renfo_j = $this->Exercice->find("list",array("conditions"=>array("type"=>"r","muscles"=>"j")));
			$renfo_t = $this->Exercice->find("list",array("conditions"=>array("type"=>"r","muscles"=>"t")));
			$renfo_b = $this->Exercice->find("list",array("conditions"=>array("type"=>"r","muscles"=>"b")));
			$renfo_e = $this->Exercice->find("list",array("conditions"=>array("type"=>"r","muscles"=>"e")));
			$abdo = $this->Exercice->find("list",array("conditions"=>array("type"=>"a")));
			$this->set("cardio",$cardio);
			$this->set("etirement",$etirement);
			$this->set("renfo_d",$renfo_d);
			$this->set("renfo_p",$renfo_p);
			$this->set("renfo_j",$renfo_j);
			$this->set("renfo_t",$renfo_t);
			$this->set("renfo_b",$renfo_b);
			$this->set("renfo_e",$renfo_e);
			$this->set("abdo",$abdo);
		}
	}
}
