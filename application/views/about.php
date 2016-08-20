<?php $this->load->view('includes/header', array('active_page' => 'About'));?>
<div class="container component_contianer">
    <div class="col-xs-12 col-md-8 col-md-offset-2 search_container">
        <img class="widescroll-top" src="/assets/img/backdrop_765_top.gif">
        <h2>What is this?</h2>
        <p>This website is a simple clue solver for Old School Runescape, it negates the need to be consistantly typing your clues into google! I developed this for fun in one day, so please don't rip it apart too much :) The data is taken from the <a class="osrs_link" href="http://2007.runescape.wikia.com/wiki/2007scape_Wiki">OSRS wikia</a>, I will try keep all the clue information/relevant, but if you need more up to date information check out the <a class="osrs_link" href="http://2007.runescape.wikia.com/wiki/2007scape_Wiki">OSRS wikia</a>.
        <h2>Who am I?</h2>
        <p>I started this as a student whilst at The University of Nottingham, I play Old School Runescape in my free time (IGN is 'Jofo'). I made this website for free and at the request of nobody, using information supplied by the Old School Runescape wikia, I'll leave a donation link here just incase you're crazy. :) I've recently opened this project up so this is no longer a solo project, feel free to contribute on github.</p>
        <br>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="SBPGRKZRX72VW">
			<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
		</form>
		<br>
        <h2>Planned Features</h2>
        <div class="container-fluid">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                <ul>
                    <li>Requirements to be listed on each clue</li>
                    <li>Allow abbreviations for coordinate clues</li>
                </ul>
            </div>
        </div>


        <a id="home_button" class="btn btn-default btn-osrs" href="/">Back to homepage</a>
        <span class="links">Thanks to the <a href="http://2007.runescape.wikia.com/wiki/2007scape_Wiki">OSRS wikia</a> for the clue scroll data</span>
        <img class="widescroll-bottom" src="/assets/img/backdrop_765_top.gif">
    </div>
</div>
<?php $this->load->view('includes/footer');?>