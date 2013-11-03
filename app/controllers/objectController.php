<?php
class objectController extends controller{
	function create($f3){
		$f3->set('body','object/create.htm');
	}
	function afterroute(){
		echo Template::instance()->render('layout.htm');
	}

}?>