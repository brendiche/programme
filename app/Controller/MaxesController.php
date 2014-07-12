<?php
class UsersController extends AppController{
	public function add(){
		if($this->request->is('post') || $this->request->is('put')){
			$d = $this->request->data;
			if($this->User->save($d)) {
				$new = $this->User->read();
				$this->redirect(array("action"=>"profil",$new['User']["id"]));
			}
		}
	}
}