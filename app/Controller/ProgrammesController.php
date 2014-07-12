<?php
class ProgrammesController extends AppController{
	public function add($user_id){
		if($this->request->is('get')){
			$d = $this->Programme->find('first',array("conditions"=>array("user_id"=>$user_id)));
			if(empty($d)){
				$d = array("Programme"=>array("user_id"=>$user_id));
				$this->Programme->save($d);
				$this->set('programme',$this->Programme->read());
			}else $this->set('programme',$d);
		}
	}
}