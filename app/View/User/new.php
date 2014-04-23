<h1>S'inscrire</h1>

<form class="aligned" action="" method="POST">
    <?php echo $form->input('email') ?><br/>
    <?php echo $form->input('password', 'Mot de passe', 'password') ?><i>(taille : 8 a 16 caractères)</i><br/>
    <input type="submit"/>
</form>