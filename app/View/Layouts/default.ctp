<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
//$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
$css_files = array("bootstrap.min","fancybox/jquery.fancybox","jcarousel", "flexslider","style","/skins/default","calendar");
$js_files =array('jquery.js','jquery.easing.1.3.js','bootstrap.min.js','jquery.fancybox.pack.js','jquery.fancybox-media.js','google-code-prettify/prettify.js','portfolio/jquery.quicksand.js','portfolio/setting.js','jquery.flexslider.js','animate.js','custom.js','custom2','calendar');
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->request->params['controller']; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css($css_files);
		echo $this->Html->script($js_files);


		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="wrapper">
		<?php echo $this->element('header'); ?>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<?php echo $this->element('footer'); ?>
		<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
