<?php $this->load->view('includes/header', array('active_page' => 'Clue'));?>
<div class="container component_contianer">
    <div class="col-xs-12 col-md-8 col-md-offset-2 search_container">
        <img class="widescroll-top" src="/assets/img/backdrop_765_top.gif">
        <h4>Search your next clue below:</h4>
        <div class="input-group">
            <div class="input-group-btn">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="clue_label">All Clues</span> <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Filters Coming soon</a></li>
                </ul>
            </div><!-- /btn-group -->
          <input id="autocomplete" type="text" class="form-control" aria-label="..." autofocus>
        </div><!-- /input-group -->

        <?php $this->load->view('types/5', $this); ?>
        
        <a id="home_button" class="btn btn-default btn-osrs" href="/">Back to homepage</a>
        <span class="links"><a href="/about">What is this?</a></span><br>
        <span class="links">Thanks to the <a href="http://2007.runescape.wikia.com/wiki/2007scape_Wiki">OSRS wikia</a> for the clue scroll data</span>
        <img class="widescroll-bottom" src="/assets/img/backdrop_765_top.gif">
    </div>
</div>
<?php $this->load->view('includes/footer');?>