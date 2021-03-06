<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="OSRS Clue Solver and Helper">
    <meta name="keywords" content="OSRS,clues,runescape,oldschool,solver,helper,rsclues,osrsclues">
    <meta name="author" content="Joe Gandy">
    <title>OldSchool Clue Solver - <?php echo $active_page; ?></title>
    <link rel="stylesheet" type="text/css" href="/assets/css/reset.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="/export.json"></script>
    <script type="text/javascript" src="/assets/js/bootstrap3-typeahead.min.js"></script>
    <script type="text/javascript" src="/assets/js/main.js"></script>
  </head>
  <body>
    <div class="container-fluid main_container">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">RSClues</a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li <?php if($active_page == "Home"){ echo 'class="active"';}?>><a href="/">Clue Solver</a></li>
              <li <?php if($active_page == "About"){ echo 'class="active"';}?>><a href="/about">What is this?</a></li>
              <li <?php if($active_page == "Changelog"){ echo 'class="active"';}?>><a href="/changelog">Changelog</a></li>
            </ul>           
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>