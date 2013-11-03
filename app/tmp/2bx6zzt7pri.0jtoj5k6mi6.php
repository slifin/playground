header{height:20px; border-bottom:1px solid #222;}
body{margin: 0 auto 100px;}
footer{position: absolute;left: 0;bottom: 0;height: 100px;width: 100%;}



<?php if (isset($test)): ?>
.test{height:<?php echo $height=222; ?>px;}

.test2{height:<?php echo $height; ?>px;}
<?php endif; ?>