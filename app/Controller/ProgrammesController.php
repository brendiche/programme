<?php
class ProgrammesController extends AppController{
	public function add($user_id){
		if($this->request->is('get')){			
			$d = $this->Programme->find('all',array("conditions"=>array("Programme.user_id"=>$user_id)));
			debug($d);
			if(empty($d)){
				$d = array("Programme"=>array("test"=>"bite"),"User"=>array("id"=>$user_id));
				debug($d);
				debug($this->Programme->saveAssociated($d));
				$this->set('programme',$this->Programme->read());
			}else $this->set('programme',$d);
			die;
		}
	}
}