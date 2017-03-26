<?php if(!isset($_GET['id'])){ header("Location: /"); exit(); } ?>
<?php $active_page = 'Clue'; ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/header.php'); ?>
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
        <?php 
            $levels = array('Unknown', 'Easy', 'Medium', 'Hard', 'Elite', 'Master');
            $json_str = substr(substr(file_get_contents("http://rsclues.joegandy.co.uk/export.json"), 10), 0, -1);
            $clues = json_decode($json_str, true);
            $clue = $clues[$_GET['id']];
        ?>
        <div class="container-fluid">
            <div class="col-xs-12">
                <h1><?php echo $clue['clue_type_name'];?></h1><br>
                <?php if(isset($clue['clue_text']) && $clue['clue_text']){?>
                    <h4><b>Clue:</b><h4>
                    <p><?php echo $clue['clue_text']; ?></p>
                <?php }?>
                <?php if(isset($clue['clue_answer']) && $clue['clue_answer']){?>
                    <h4><b>Solution:</b><h4>
                    <p><?php echo $clue['clue_answer']; ?></p>
                <?php }?>
                <?php if(isset($clue['clue_image']) && $clue['clue_image']){?>
                    <h4><b>Image:</b><h4>
                    <p><?php echo urldecode($clue['clue_image']); ?></p>
                <?php }?>
                <?php /*
                    @TODO: Re add in this map feature
                    <?php if(isset($clue_map) && $clue_map){?>
                        <h4><b>Map:</b><h4>
                        <p><?php echo urldecode($clue_map); ?></p>
                    <?php }?>
                */?>
                <?php if(isset($clue['clue_level']) && $clue['clue_level']){?>
                    <h4><b>Clue Level:</b><h4>
                    <p><?php echo $levels[(int)$clue['clue_level']] ?></p>
                <?php }?>
        </div>
        
        <a id="home_button" class="btn btn-default btn-osrs" href="/">Back to homepage</a>
        <span class="links"><a href="/about">What is this?</a></span><br>
        <span class="links">Thanks to the <a href="http://2007.runescape.wikia.com/wiki/2007scape_Wiki">OSRS wikia</a> for the clue scroll data</span>
        <span class="links">Contribute to this project on <a href="https://github.com/JoeGandy/RSClues">Github</a></span>
        </div>
    <img class="widescroll-bottom" src="/assets/img/backdrop_765_top.gif">
</div>
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'); ?>