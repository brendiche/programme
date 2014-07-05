<?php
class UsersController extends AppController{
	public function home(){
	}
	public function index(){
		$users = $this->User->find('all');
		$this->set('users',$users);
	}
	public function add(){
		if($this->request->is('post') || $this->request->is('put')){
			$d = $this->request->data;
			if($this->User->save($d)) $this->redirect(array("action"=>"home"));
		}

	}
}