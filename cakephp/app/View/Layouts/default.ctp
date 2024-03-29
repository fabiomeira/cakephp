<?php
/**
 *
 * PHP 5
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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->Html->css('estilo');
		echo $this->fetch('script');
		
        
		echo $this->Html->script('http://maps.google.com/maps?file=api&amp;v=3&amp;key=AIzaSyCYZTdyP10ZYYAlTETwC09fjIYAFlNmBGE');
		echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
        echo $this->Html->script('jquery.gmap-1.1.0-min');
		echo $this->Html->scriptBlock("
			$(function() {
			
				$(\"#mapa\").gMap({ markers: [{ latitude: -23.616030440285886,
						longitude: -46.495966757934525,
						html: \"Empresa\",
						popup: false }],
						zoom: 17 });
				});
			");
	?>
</head>
<body>
	<?php echo $this->element('topo'); ?>
	<div id="corpo-int">
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>
	</div>
    <?php echo $this->element('rodape', array(
		'dataEvento' => 'Evento de 28 Nov. a 1 Dez.'
	)); ?>    
</body>
</html>