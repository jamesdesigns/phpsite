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
                    <source srcset="img/CC-Logo-SM.svg" media="(max-width:35em)">
                    <source srcset="img/CC-Logo-MD.svg" media="(max-width:48em)"> 
                    <source srcset="img/CC-Logo-LG.svg">
                    <img srcset="img/CC-Logo-LG.svg" width="339" height="97" alt="My Default image">
            </picture>
</a>
            <div id="userGreeting"></div>
            <div class="header-right"> 
                    <a class="telephone" href="tel:18665771000">1-866-577-1000</a>
                </div> 
        </div>
    </header>


    <nav id="myNav">
        <div class="topnav" id="myTopnav">
        <?php $page=$_REQUEST['page']; ?>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
                <a href="index.php?page=home"<?=($page=='home'?' class="active"':'');?>>Home</a>
                <a href="cruises.php?page=cruises"<?=($page=='cruises'?' class="active"':'');?>>Cruises</a>
                <a href="book.php?page=book"<?=($page=='book'?' class="active"':'');?>>Book</a>
                <div class="dropdown">
                        <button class="dropbtn">Agents 
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                          <a href="agentjay.php?page=agentjay"<?=($page=='agentjay'?' class="active"':'');?>>Jay Willardson</a>
                          <a href="agentlori.php?page=agentlori"<?=($page=='agentlori'?' class="active"':'');?>>Lori Reynolds</a>
                        </div>
                      </div> 
                <div class="search-container">
                  <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
</nav>