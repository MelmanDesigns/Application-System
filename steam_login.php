<?php
require 'inc/backend/user/lightopenid/openid.php';
include_once("db.php"
$_STEAMAPI = "16AEAE1B73B6A51EE7608E0835C04F49";
try 
{
    $openid = new LightOpenID('https://melmancad.000webhostapp.com/index.php');
    if(!$openid->mode) 
    {
        if(isset($_GET['login'])) 
        {
            $openid->identity = 'http://steamcommunity.com/openid/?l=english';    // This is forcing english because it has a weird habit of selecting a random language otherwise
            header('Location: ' . $openid->authUrl());
		} else {
			echo "<h2>Connect to Steam</h2>";
			echo "<form action='?login' method='post'";
			echo "<input type='image' src='https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_01.png'>";
			echo "<form"
        }
?>
<form action="?login" method="post">
    <input type="image" src="http://cdn.steamcommunity.com/public/images/signinthroughsteam/sits_small.png">
</form>
<?php
    } 
    elseif($openid->mode == 'cancel') 
    {
        echo 'User has canceled authentication!';
    } 
    else 
    {
        if($openid->validate()) 
        {
                $id = $openid->identity;
                // identity is something like: http://steamcommunity.com/openid/id/76561197960435530
                // we only care about the unique account ID at the end of the URL.
                $ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
                preg_match($ptn, $id, $matches);
                echo "User is logged in (steamID: $matches[1])\n";

                $url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$_STEAMAPI&steamids=$matches[1]";
                $json_object= file_get_contents($url);
                $json_decoded = json_decode($json_object);

                foreach ($json_decoded->response->players as $player)
                {
                    $sql_fetch_id = "SELECT * FROM users WHERE steamid = $player->steamid";
					$query_id - mysqli_query($db, $sql_fetch_id);
					
					if(mysqli_num_rows($query_id) == 0) {
						$sql_steam = "INSERT INTO users (name, steamid, avatar) VALUES ('$player->personaname', '$player->steamid', '$player->avatar')";
						mysqli_query($db, $sql_steam);

                }

        } 
        else 
        {
                echo "User is not logged in.\n";
        }
    }
} 
catch(ErrorException $e) 
{
    echo $e->getMessage();
}
?>