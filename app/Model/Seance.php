<?php 
class Seance extends AppModel{
	public $belongsTo = array("Programme");
	public $hasMany = array("ExerciceSeance");
}