<html>
	<head>
		<title>Camel Find</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASEPATH ?>vendor/bower/bootstrap/dist/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASEPATH ?>vendor/jumbotron.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASEPATH ?>app/Stylesheet/style.css" />
		<meta charset="utf-8" />
	</head>
	<body>
		<div class="container">
            <div class="header">
                <ul class="nav nav-pills pull-right">
                    <li class="active"><a href="<?php echo url('') ?>">Home</a></li>
                    <?php if ($session->getUser()): ?>
                        <li><?php echo link_to('profile/'.$session->getUser()->getPk(), 'Mon profil') ?></li>
                        <li><a href="<?php echo url('logout') ?>">Déconnexion</a></li>
                    <?php else: ?>
                        <li><a href="<?php echo url('login') ?>">Se connecter</a></li>
                        <li><a href="<?php echo url('register') ?>">S'inscrire</a></li>
                    <?php endif ?>
                    <li><a href="#">Welcome</a></li>
                </ul>
                <h3 class="text-muted">Camel Find</h3>
                <?php if ($session->getUser()): ?>
                    Connecté en tant que <b><?php echo $session->getUser()['email'] ?></b>.
                <?php endif ?>
            </div>
			<div class="row marketing">
                <?php echo $data ?>
            </div>
            <div class="footer">
                <p>&copy; Minima 2014</p>
            </div>
		</div>
		<script src="<?php echo BASEPATH ?>app/Script/index.js"></script>
	</body>
</html>