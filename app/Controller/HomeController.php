<?php 
	class HomeController extends AppController{

		public $name = 'Home';
		public $helpers= array('Html' , 'Form');
		public $components = array('RequestHandler');

		public function index() {

		}
	}
?>