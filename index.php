<?php

    require_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- page title -->
        <title></title>

        <!-- meta data -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="Content-Language" content="en"/>
        <meta name="description" content=""/>
        <meta name="keywords" content="movie, artist, cast, genre"/>
        <meta name="rating" content="general"/>
        <meta http-equiv="Pragma" content="no-cache"/>
        <meta http-equiv="Expires" content="0"/>
        <meta http-equiv="Cache-Control" content="max-age=0"/>
        <meta name="robots" content="NOODP,index,follow"/>
        <meta name="revisit-after" content="1 Days"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="harun.yardimci@gmail.com">

        <!-- styles -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="assets/css/docs.css" rel="stylesheet">
        <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
        <!-- fav and touch icons -->
        <link rel="shortcut icon" href="assets/img/favicon.ico">

        <link rel="canonical" href="http://www.mmm.com/"/>

        <!-- IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <script type="text/javascript" src="assets/js/jquery-1.7.2.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="assets/js/request.js"></script>

	</head>

	<body>
        <div class="container">
            <div class="page-header">
                <h1>Movie Search</h1>
            </div>

            <form class="well form-search">
                <div class="row">
                    <div class="span10 offset2">
                        <input id="txtSearch" name="txtSearch" type="text" class="input-xxlarge search-query" style="height: 27px;" value="batm">&nbsp;
                        <a class="btn btn-info btn-large" href="#">Search</a>
                        <p class="help-block">You can search a movie by name or title.</p>
                    </div>
                </div>
            </form>

            <div class="clear"><!-- --></div>

            <div class="searchResult"></div>

        </div>
	</body>
</html>
