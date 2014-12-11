<?php
	
	class Controller{
		public $load;
		public $model;
		
		public $route;

		function __construct(){
			$this->load= new Load();
			$this->model= new Model();
			
			$this->route=Request::getCont();
			
			
			if ($this->route==""){
				$this->route='Inicio';
			}
			if (is_readable('views/'.$this->route.'.php')){
				call_user_func(array($this,$this->route));
			}
			else {
				call_user_func(array($this,'error'));
			}
		}

		function Inicio(){
			
			$data=$this->model->user_info();
			
			$this->load->view('Inicio.php',$data);
		}
		function Acerca_de(){
			
			$data=$this->model->user_info();
			
			$this->load->view('Acerca_de.php',$data);
		}
		function Contacto(){
			
			$data=$this->model->user_info();
			
			$this->load->view('Contacto.php',$data);
		}
		function error(){
			
			$data=$this->model->user_info();
			
			$this->load->view('error.php',$data);
		}
	}