<header id="topo">
	<?php echo $this->Html->link(
			$this->Html->image('logo.png', array('alt' => '', 'border' => '0')),
			'',
			array('target' => '_blank', 'escape' => false)
		);
	?>
    <nav>
        <ul>
            <li id="home">
			<?php echo $this->Html->link('HOME', array('controller' => 'home') ); ?>
			</li>
            <li id="assistencia"><?php echo $this->Html->link('SOBRE O EVENTO', array('controller' => 'sobre-o-evento') ); ?></li>
			<li id="portfolio"><?php echo $this->Html->link('COMO CHEGAR', array('controller' => 'como-chegar-no-evento') ); ?></li>
            <li id="fale-conosco"><?php echo $this->Html->link('CONTATE-NOS', array('controller' => 'contatenos') ); ?></li>
        </ul>
    </nav>
</header>