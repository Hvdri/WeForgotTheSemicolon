<html>

<head>
    <?php if ($active == 'home-page') { ?> <title>Home</title> <?php } ?>
    <?php if ($active == 'consum') { ?> <title>Istoric</title> <?php } ?>
    <?php if ($active == 'facturi') { ?> <title>Plati</title> <?php } ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="../css/login-signup.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    


</head>

<body>
    <div class="navbar">
        
        
        
        <a class="<?php if ($active == 'home-page') { ?>active <?php } ?>" href="<?php echo base_url() . 'home'; ?>">Home</a>
        <a class="<?php if ($active == 'facturi') { ?>active <?php } ?>" href="<?php echo base_url() . 'facturi'; ?>">Adaugare Plati</a>
        <a class="<?php if ($active == 'consum') { ?>active <?php } ?>" href="<?php echo base_url() . 'consum'; ?>">Istoric Facturi</a>
        
        <a class="right" href="<?php echo base_url() . 'login/logout' ?>">Log out</a>
        
        
    </div>

