* include("inc/navbar.php");
include("inc/navbar_bottom.php"); */ ?>


<head>
    <meta charset="UTF-8">
    <title> I will survey - Voting </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--
     <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="main.css">
    -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
</head>

<body>

<header class="container">
    <div id="row">
        <h1 class="col-sm-5 text-left">Voting.</h1>
        <nav class="col-sm-7">
            <p>Startseite</p>
            <p><a class="btn btn-primary" href="Mapper/logout.php">Logout</a> </p>
        </nav>
    </div>
</header>


<div>

    <div id="kopfleiste"> <!-- 2 -->
        <h1> I will survey. </h1>

        <h3> Kurzes Slogan mit Logo</h3>

    </div> <!-- 2 -->



    <div class="login"> <!-- 4 -->
        <form action="Mapper/login.php" method="post">
            <input type="email" value="E-Mail Adresse"> </br>
            <input type="password" value="Passwort"> </br>
            <input type="submit" value="LOGIN">
        </form>
        </br>
        </br>
        </br>

    </div> <!-- 4 -->

    <div class="seitenbeschreibung"> <!-- 5 -->
        <a href="seitenbeschreibung.php"> Was steckt hinter "I will survey"? </a>
        </br>
        </br>
    </div> <!-- 5 -->

</div> <!-- 1 -->

<footer class="container">
    <div class ="row">
        <p class="col-sm-4"> &copy; I will survey. </p>
        <ul class="col-sm-8">
            <li class="col-sm-4"> <a href="Mapper/Contact.php">Kontakt </a> </li>
            <li class="col-sm-2"> <a href="Mapper/Impressum.php">Impressum</a> </li>

        </ul>

    </div>
</footer>

</body>

</html>