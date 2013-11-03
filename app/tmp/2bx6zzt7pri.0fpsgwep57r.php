<!DOCTYPE html>
<html lang="en" ng-app>
<head>
	<base href="<?php echo $SCHEME.'://'.$HOST.$BASE.'/'.$UI; ?>" />
	<meta charset="<?php echo $ENCODING; ?>" />
	<title><?php echo $title; ?></title>
	<?php if ($head) echo $this->render($head,$this->mime,get_defined_vars()); ?>
</head>
<body>
	<?php if ($nav) echo $this->render($nav,$this->mime,get_defined_vars()); ?>
	<?php if ($body) echo $this->render($body,$this->mime,get_defined_vars()); ?>
	<?php if ($foot) echo $this->render($foot,$this->mime,get_defined_vars()); ?>
</body>
</html>
