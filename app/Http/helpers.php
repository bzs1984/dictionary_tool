<?php namespace App\Http;



class Helper {

	static function getControllerName($route)
	{
		$name = substr(class_basename($route), 0, (strpos(class_basename($route), '@') -0) );
		return $name;
	}

	static function getActionName($route)
	{
		$name = substr(class_basename($route), (strpos(class_basename($route), '@') + 1));
		return $name;
	}

	static function getCtrAct($route)
	{
		$name = class_basename($route);
		return $name;
	}



}
