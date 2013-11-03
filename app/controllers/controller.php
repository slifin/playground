<?php 
class controller{
	function __construct(){
		$f3=Base::instance();
		$f3->set('ng',function($input){
			return '{{'.$input.'}}';
		});
	}

	function minify($f3, $args){
		$f3->set('UI','views/'.$args['type'].'/');
		echo Web::instance()->minify($_GET['files']);
	}
}
?>