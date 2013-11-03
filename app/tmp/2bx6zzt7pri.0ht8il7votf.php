Create a new Object
<form>

	<div class="object-title">Title <input type="text"></div> 
	<div class="object-attributes" ng-controller="object_definers">
		<ul>
			<li ng-repeat="thing in things"><?php echo $ng('thing.text'); ?></li>
		</ul>
		<input type="button" value="add attribute" ng-click="addAttribute()"> 
	</div>

	<input type="submit" value="submit">
</form>