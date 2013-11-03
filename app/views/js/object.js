function object_definers($scope){
	$scope.things = [{text:'loop 1'},{text:'loop 2'}];
	
	$scope.addAttribute = function(){
		$scope.things.push({text:'test loop'});
	}
}