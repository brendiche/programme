<?php 
class Programme extends AppModel{
	public $hasOne = array('User');
	public $hasMany = array('Seance');
}