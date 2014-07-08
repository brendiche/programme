<?php
class SeancesController extends AppController{
	public function add($programme_id){
		$this->loadModel('Exercice');
		if($this->request->is('post')){
			
		}else{
			$cardio = $this->Exercice->find("list",array())
		}
	}
}