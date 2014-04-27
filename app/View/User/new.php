<h1>S'inscrire</h1>

<form class="aligned" action="" method="POST">
    <fieldset>
    	<legend>Informations de Connexion</legend>
	    <?php echo $form->input('email') ?><br/>
	    <?php echo $form->input('password', 'Mot de passe', 'password') ?><i>(taille : 8 a 16 caractères)</i><br/>
    </fieldset>
<br/>
	<fieldset>
		<legend>Informations Personnelles</legend>
		<?php echo $form->input('first_name', 'Prénom') ?><br/>
		<?php echo $form->input('last_name', 'Nom') ?><br/>
		<?php echo $form->input('birthday', 'Date de naissance') ?><i>(format : YYYY-MM-DD)</i><br/>
	</fieldset>

    <input type="submit"  class="btn btn-primary"/>
</form>