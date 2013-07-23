<!DOCTYPE html>
<html>

<head>
    <title>Swarlo</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/index.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/lib/animate.css" media="screen, projection">    
    <link rel="stylesheet" href="css/lib/flexslider.css" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/features.css">

    <link rel="stylesheet" href="css/about.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/contact.css" type="text/css" media="screen" />




    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="pull_top">
    <div <?=echoNavClass()?>>
      <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index-2.php">
                <strong>SWARLOCRAFT</strong>
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li><a href="index-2.php" <?=echoActiveClassIfRequestMatches("index-2")?>>HOME</a></li>
                    <li><a href="servers.php" <?=echoActiveClassIfRequestMatches("servers")?>>SERVERS</a></li>               
                    <li><a href="stats.php" <?=echoActiveClassIfRequestMatches("stats")?>>STATS</a></li>
                    <li><a href="forums.php" <?=echoActiveClassIfRequestMatches("forums")?>>FORUMS</a></li>
                    <li><a href="donate.php" <?=echoActiveClassIfRequestMatches("donate")?>>DONATE</a></li>
                    <li><a class="btn-header" href="sign-up.php"  <?=echoActiveClassIfRequestMatches("sign-up")?>>Sign up</a></li>
                    <li><a class="btn-header" href="sign-in.php" <?=echoActiveClassIfRequestMatches("sign-in")?>>Sign in</a></li>
                </ul>
            </div>
        </div>
      </div>
    </div>

    <?php 

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}

function echoNavClass()
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == "index-2")
        echo 'class="navbar transparent navbar-inverse navbar-fixed-top"';
    else 
        echo 'class="navbar navbar-inverse navbar-static-top"';
}

?>