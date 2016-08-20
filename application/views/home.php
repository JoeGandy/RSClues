<?php $this->load->view('includes/header', array('active_page' => 'Home'));?>
<div class="container component_contianer">
    <div class="col-xs-12 col-md-8 col-md-offset-2 search_container">
        <img class="widescroll-top" src="/assets/img/backdrop_765_top.gif">
        <h3>Start typing your clue below:</h3><br>
        <div class="input-group">
            <div class="input-group-btn">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="clue_label">All Clues</span> <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Filters Coming soon</a></li>
                    
                    <!--<li><a href="#">Emote Clues</a></li>
                    <li><a href="#">Cryptic Clues</a></li>
                    <li><a href="#">Anagram Clues</a></li>
                    <li><a href="#">Challenge Clues</a></li>-->
                </ul>
            </div><!-- /btn-group -->
          <input id="autocomplete" type="text" class="form-control" aria-label="...">
        </div><!-- /input-group -->
        <div class="container-fluid">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="alert alert-success" role="alert" style="margin-top:30px;">
                    <b>Latest Update:</b>: 
                    <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                    <br>
                    I've re-wrote most of the backend and clue scrolling (should be easier in the future)<br>
                    Master clues are here! (All clue data is from wiki)<br>
                    I've moved the project to github, report bugs/add yourself!<!-- <a href="/changelog">Changelog</a>-->
                </div>    
            </div>
        </div>
        <span class="links"><a href="/about">What is this?</a> <a href="http://www.reddit.com/r/2007scape/comments/37a8mg/clue_solver_i_made_in_my_free_time_let_me_know/">Main Reddit Post</a></span>
        <span class="links">Thanks to the <a href="http://2007.runescape.wikia.com/wiki/2007scape_Wiki">OSRS wikia</a> for the clue scroll data</span>
        <span class="links">Contribute to this project on <a href="https://github.com/JoeGandy/RSClues">Github</a></span>
        <img class="widescroll-bottom" src="/assets/img/backdrop_765_top.gif">
    </div>
</div>
<?php $this->load->view('includes/footer');?>