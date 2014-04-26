<html>
<head>
    <title>Camel Find</title>
   <link rel="stylesheet" type="text/css" href="<?php echo BASEPATH ?>vendor/bower/bootstrap/dist/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo BASEPATH ?>vendor/jumbotron.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo BASEPATH ?>app/Stylesheet/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo BASEPATH ?>app/Stylesheet/home.css" />
  <meta charset="utf-8" />
</head>
<body class="truc">
    <div class="container">
        <div class="header">
            <ul class="nav nav-pills pull-right">
                <li class="btn btn-default color"><a  href="<?php echo url('') ?>">Home</a></li>
                <?php if ($session->getUser()): ?> 
                <li><a href="<?php echo url('logout') ?>">Déconnexion</a></li>
            <?php else: ?>  
            <li><a href="<?php echo url('login') ?>">Connexion</a></li>
            <li><a href="<?php echo url('register') ?>">Inscription</a></li>
            <li><a href="<?php echo url('place/search')?>">Recherche</a></li>
        <?php endif ?>
    </ul>
    <h3 class="text-muted"><img src="<?php echo BASEPATH ?>public/Logo.png" label="logo"></img></h3>
    <?php if ($session->getUser()): ?>
    Connecté en tant que <b><?php echo $session->getUser()['email'] ?></b>.
<?php endif ?>
</div>
<div class="row marketing">
    <?php echo $data ?>
</div>
<div class="footer">
    <p>&copy; Camel Team</p>
    <p></p>
</div>
</div>
<script src="<?php echo BASEPATH ?>app/Script/index.js"></script>
</body>
</html>