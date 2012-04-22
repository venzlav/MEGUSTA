<div id="block_login">
	<div id="info"><h1>Me Gusta</h1>
		<p>Nowa innowacyjna wyszukiwarka plików umieszczonyc na serwerach FTP. Celem powstania wyszukiwarki jest odciążenie sieci wewnętrznej.</p>
		<p>Produkt jest niekomercyjny. System przechowuje jedynie informacje o nazwach plików i ich położeniu w sieci lokalnej. </p>
		<h3>Logowanie do systemu</h3>
		<p>Logowanie do systemu, w chwili obecnej, dostępne jest tylko dla użytkowników zajmujących się administracją systemu.</p>
		
	</div>
	
	<?php
		echo form_open('user/login');
		echo "<h2>Zaloguj się</h3>";
		echo "<h3>Login:</h3>";
		echo form_input('login','');
		echo "<h3>Hasło:</h3>";
		echo form_password('password','');
		echo form_button(array('name' => 'login_button','type'=>'submit'),'Zaloguj');
		echo form_close()
	?>
</div>
