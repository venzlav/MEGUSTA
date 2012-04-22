<div id="block_search">
		<img src="http://<?=$_SERVER['HTTP_HOST']?>/application/views/themes/default/images/logo.png" alt="logo" height="50pt" style="float: left; margin: -8pt 0px 0px 0px; padding: 0px; border: 0px;"/>
	<?php
		echo form_open('file/search');
		echo form_input(array('name' => 'search', 'placeholder' => 'Wpisz nazwę poszukiwanego pliku ...'));
		echo form_button(array('name' => 'search_button','type'=>'submit'), 'Wyszukaj');
		echo form_close()
	?>
</div>