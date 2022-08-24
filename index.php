<?php
	/*
	sss
		VDO 1 
	*/
	class firstClass{

		public $name = 'sunthon1';
		public $surname = 'chaiwongton';
		public function sayHi(){
			/*
				self::$name; = $this->name;
			*/
			 $nickname = '(k)';
			echo "Hi ".$this->name.' '.$this->surname.' '.$nickname.$this->sayBye();
		}

		public function sayBye(){
			return "<br>GoodBye";
		}

		public function sayHello(){
			echo 'Hello<br>';
		}
		
		public function seyHi(){
			echo 'Hi !';
		}
	}
	

	$obj= new firstClass;
	$obj->surname = 'chaiwongton2';
	$obj->name = 'sunthon';
	$obj->sayHi();

	
	

?>
