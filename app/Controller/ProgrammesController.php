<?php
class ProgrammesController extends AppController{
	public function add($user_id){
		$d = array("Programme"=>array("user_id"=>$user_id));
		$this->Programme->save($d);
		$this->set('programme',$this->Programme->read());
	}
}