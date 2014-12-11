<?php
	require 'load.php';
	require 'model.php';

	
	require 'request.php';
	require 'controller.php';
	class  Core{
		public static $controller;
		
		static function init(){
			self::$controller=new Controller();

		}
	}
	