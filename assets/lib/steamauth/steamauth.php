<?php
ob_start();
session_start();
require ('openid.php');

function logoutbutton() {
    echo "<form action=\"/assets/lib/steamauth/logout.php\" method=\"post\"><input value=\"Logout\" type=\"submit\" class=\"btn btn-default\" style=\"height:60px;\"/></form>"; //logout button
}

function steamlogin()
{
try {
	require("settings.php");
    $openid = new LightOpenID($domainname);
    
    $button['small'] = "small";
    $button['large_no'] = "large_noborder";
    $button['large'] = "large_border";
    $button = $button[$button_style];
    
    if(!$openid->mode) {
        if(isset($_GET['login'])) {
            $openid->identity = 'http://steamcommunity.com/openid';
            header('Location: ' . $openid->authUrl());
        }
    echo "<form action=\"?login\" method=\"post\"> <input type=\"image\" style=\"padding: 9px;\" src=\"http://cdn.steamcommunity.com/public/images/signinthroughsteam/sits_".$button.".png\"></form>";
}

     elseif($openid->mode == 'cancel') {
        echo 'User has canceled authentication!';
    } else {
        if($openid->validate()) { 
                $id = $openid->identity;
                $ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
                preg_match($ptn, $id, $matches);
              
                session_start();
                $_SESSION['steamid'] = $matches[1]; 
                
                 header('Location: '.$_SERVER['REQUEST_URI']);
                 
        } else {
                echo "User is not logged in.\n";
        }

    }
} catch(ErrorException $e) {
    echo $e->getMessage();
}
}

?>
