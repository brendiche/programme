<?php
class ExercicesController extends AppController{
	public function index(){
		$erxercices = $this->Exercice->find('all');
		$this->set('exercices',$exercices);
	}
	public function add(){
		if($this->request->is('post') || $this->request->is('put')){
			$d = $this->request->data;
			if($this->Exercice->save($d)) $this->redirect(array("action"=>"index"));
		}

	}
}