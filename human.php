<?php

	class Human{
		public $name = 'sunthon';
		public $surname = 'chaiwongton';
		private $age;

		protected $salary = '40000';

		public function say(){
			return 'Hi';
		}

		public function walk(){
			return 'Walk';
		}
	}
?>