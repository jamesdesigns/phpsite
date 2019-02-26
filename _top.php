<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cabot Cruises</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
    <link rel="icon" href="favicon.ico" type="image/x.icon">
    <script src="main.js"></script>
</head>
<body>
    <header>
        <div class="header">
            <a href="index.php">
            <picture>
                  <source media="(max-width:37.5em)" srcset="img/CC-Logo-SM.png">
                  <source media="(max-width:48em)" srcset="img/CC-Logo-MD.png"> 
                  <img src="img/CC-Logo-LG.png" alt="Cabot Cruises Logo">
            </picture>
</a>
            <div id="userGreeting"></div>
            <div class="header-right"> 
                    <a class="telephone" href="tel:18665771000">1-866-577-1000</a>
                </div> 
        </div>
    </header>


    <!-- NAVIGATION -->
<div class="navwrap">
    <div class="topnav" id="myTopnav">

    <?php $page=$_REQUEST['page']; ?>

       <a href="index.php?page=home"<?=($page=='home'?' class="active"':'');?>>HOME</a>
       <a href="cruises.php?page=cruises"<?=($page=='cruises'?' class="active"':'');?>>CRUISES</a>
       <a href="book.php?page=book"<?=($page=='book'?' class="active"':'');?>>BOOK</a>
       <div class="dropdown">
          <button class="dropbtn">AGENTS
             &nbsp;&#9662;
          </button>
          <div class="dropdown-content">
             <a href="agentjay.php?page=agentjay"<?=($page=='agentjay'?' class="active"':'');?>>Jay Willardson</a>
             <a href="agentlori.php?page=agentlori"<?=($page=='agentlori'?' class="active"':'');?>>Lori Reynolds</a>
          </div>
       </div>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
       </a>
      <div class="search">
          <input type="search" name="search" id="search" placeholder="Search...">
          <button class="mySearch"><i class="fa fa-search fa-2x"></i></button>
       </div>
    </div>
 </div>


