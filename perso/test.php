<?php
 
//Upload a blank cookie.txt to the same directory as this file with a CHMOD/Permission to 777
function login($url,$data){
    $fp = fopen("cookie.txt", "w");
    fclose($fp);
    $login = curl_init();
    curl_setopt($login, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($login, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 40000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $url);
    curl_setopt($login, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($login, CURLOPT_POST, TRUE);
    curl_setopt($login, CURLOPT_POSTFIELDS, $data);
    ob_start();
    return curl_exec ($login);
    ob_end_clean();
    curl_close ($login);
    unset($login);    
}                  
 
function grab_page($site){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);    
    curl_setopt($ch, CURLOPT_TIMEOUT, 40);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($ch, CURLOPT_URL, $site);
    ob_start();
    return curl_exec ($ch);
    ob_end_clean();
    curl_close ($ch);
}
 
function post_data($site,$data){
    $datapost = curl_init();
        $headers = array("Expect:");
    curl_setopt($datapost, CURLOPT_URL, $site);
        curl_setopt($datapost, CURLOPT_TIMEOUT, 40000);
    curl_setopt($datapost, CURLOPT_HEADER, TRUE);
        curl_setopt($datapost, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($datapost, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($datapost, CURLOPT_POST, TRUE);
    curl_setopt($datapost, CURLOPT_POSTFIELDS, $data);
        curl_setopt($datapost, CURLOPT_COOKIEFILE, "cookie.txt");
    ob_start();
    return curl_exec ($datapost);
    ob_end_clean();
    curl_close ($datapost);
    unset($datapost);    
}
 
?>

<?php 
    /*
	//echo grab_page("http://trophymanager.com/fr/");
    login("http://trophymanager.com/ajax/login.ajax.php","user=pianbin96%40gmail.com&password=asnlhenry14&remember=0");
    //echo grab_page("http://trophymanager.com/players/109533009/Joeri_De%20Meyer/#/page/history/");

    $page =  grab_page("http://trophymanager.com/players/");
    
    $t = explode(' ',$page);
    //var_dump($t);
    $i=0;
    $found = false;

    while ($found == false) {
        if ($t[$i] == 'players_ar') {
            $found = true;
            $startLine = $i+2;
        }else{
            $i++;
        }
    }
    $found = false;
    while ($found == false){
        if (preg_match('.}];.', $t[$i])) {
            $found = true;
            $endLine = $i;
        }else{
            $i++;
        }
    }
    
    $players = null;
    $i=0;
    while ( $startLine <= $endLine ) {
        $players[$i] = $t[$startLine];
        $startLine++;
        $i++;
    }

    $stringPlayers=null;
    $i=0;
    foreach ($players as $row) {
        if ($i == sizeof($players)-1) {            
            $stringPlayers = $stringPlayers." ".substr($row, 0, strlen($row)-10);        
        }else{
            $stringPlayers = $stringPlayers." ".$row;    
        }
        
        $i++;
    }

    foreach (json_decode($stringPlayers, true) as $row) {
        
    }

    echo grab_page("http://trophymanager.com/tactics/");
*/

echo "get".strtoupper(substr('bump',0,1)).strtolower(substr('bump',1))."()<br>";
echo "get".strtoupper(substr('id',0,1)).strtolower(substr('id',1))."()<br>";
echo "get".strtoupper(substr('clubName',0,1)).strtolower(substr('clubName',1))."()<br>";
echo "get".strtoupper(substr('clubId',0,1)).strtolower(substr('clubId',1))."()<br>";
echo "get".strtoupper(substr('shortlisted',0,1)).strtolower(substr('shortlisted',1))."()<br>";
echo "get".strtoupper(substr('clubLink',0,1)).strtolower(substr('clubLink',1))."()<br>";
echo "get".strtoupper(substr('name',0,1)).strtolower(substr('name',1))."()<br>";
echo "get".strtoupper(substr('nameJs',0,1)).strtolower(substr('nameJs',1))."()<br>";
echo "get".strtoupper(substr('playerLink',0,1)).strtolower(substr('playerLink',1))."()<br>";
echo "get".strtoupper(substr('routine',0,1)).strtolower(substr('routine',1))."()<br>";
echo "get".strtoupper(substr('nat',0,1)).strtolower(substr('nat',1))."()<br>";
echo "get".strtoupper(substr('age',0,1)).strtolower(substr('age',1))."()<br>";
echo "get".strtoupper(substr('fp',0,1)).strtolower(substr('fp',1))."()<br>";
echo "get".strtoupper(substr('fpFormat',0,1)).strtolower(substr('fpFormat',1))."()<br>";
echo "get".strtoupper(substr('asi',0,1)).strtolower(substr('asi',1))."()<br>";
echo "get".strtoupper(substr('asiString',0,1)).strtolower(substr('asiString',1))."()<br>";
echo "get".strtoupper(substr('str',0,1)).strtolower(substr('str',1))."()<br>";
echo "get".strtoupper(substr('sta',0,1)).strtolower(substr('sta',1))."()<br>";
echo "get".strtoupper(substr('pac',0,1)).strtolower(substr('pac',1))."()<br>";
echo "get".strtoupper(substr('mar',0,1)).strtolower(substr('mar',1))."()<br>";
echo "get".strtoupper(substr('tac',0,1)).strtolower(substr('tac',1))."()<br>";
echo "get".strtoupper(substr('wor',0,1)).strtolower(substr('wor',1))."()<br>";
echo "get".strtoupper(substr('cro',0,1)).strtolower(substr('cro',1))."()<br>";
echo "get".strtoupper(substr('pos',0,1)).strtolower(substr('pos',1))."()<br>";
echo "get".strtoupper(substr('pas',0,1)).strtolower(substr('pas',1))."()<br>";
echo "get".strtoupper(substr('tec',0,1)).strtolower(substr('tec',1))."()<br>";
echo "get".strtoupper(substr('hea',0,1)).strtolower(substr('hea',1))."()<br>";
echo "get".strtoupper(substr('fin',0,1)).strtolower(substr('fin',1))."()<br>";
echo "get".strtoupper(substr('lon',0,1)).strtolower(substr('lon',1))."()<br>";
echo "get".strtoupper(substr('set',0,1)).strtolower(substr('set',1))."()<br>";
echo "get".strtoupper(substr('han',0,1)).strtolower(substr('han',1))."()<br>";
echo "get".strtoupper(substr('one',0,1)).strtolower(substr('one',1))."()<br>";
echo "get".strtoupper(substr('ari',0,1)).strtolower(substr('ari',1))."()<br>";
echo "get".strtoupper(substr('ref',0,1)).strtolower(substr('ref',1))."()<br>";
echo "get".strtoupper(substr('jum',0,1)).strtolower(substr('jum',1))."()<br>";
echo "get".strtoupper(substr('com',0,1)).strtolower(substr('com',1))."()<br>";
echo "get".strtoupper(substr('kic',0,1)).strtolower(substr('kic',1))."()<br>";
echo "get".strtoupper(substr('thr',0,1)).strtolower(substr('thr',1))."()<br>";
echo "get".strtoupper(substr('rec',0,1)).strtolower(substr('rec',1))."()<br>";
echo "get".strtoupper(substr('time',0,1)).strtolower(substr('time',1))."()<br>";
echo "get".strtoupper(substr('timeString',0,1)).strtolower(substr('timeString',1))."()<br>";
echo "get".strtoupper(substr('txt',0,1)).strtolower(substr('txt',1))."()<br>";
echo "get".strtoupper(substr('bid',0,1)).strtolower(substr('bid',1))."()<br>";
echo "get".strtoupper(substr('nextBid',0,1)).strtolower(substr('nextBid',1))."()<br>";
echo "get".strtoupper(substr('bidString',0,1)).strtolower(substr('bidString',1))."()<br>";
echo "get".strtoupper(substr('bidderId',0,1)).strtolower(substr('bidderId',1))."()<br>";
echo "get".strtoupper(substr('userIsBuyer',0,1)).strtolower(substr('userIsBuyer',1))."()<br>";
echo "get".strtoupper(substr('bidderName',0,1)).strtolower(substr('bidderName',1))."()<br>";
echo "get".strtoupper(substr('bidderLink',0,1)).strtolower(substr('bidderLink',1))."()<br>";
echo "get".strtoupper(substr('pimp',0,1)).strtolower(substr('pimp',1))."()<br>";
echo "get".strtoupper(substr('flag',0,1)).strtolower(substr('flag',1))."()<br>";
echo "get".strtoupper(substr('country',0,1)).strtolower(substr('country',1))."()<br>";
echo "get".strtoupper(substr('scoutButton',0,1)).strtolower(substr('scoutButton',1))."()<br>";
echo "get".strtoupper(substr('pro',0,1)).strtolower(substr('pro',1))."()<br>";

?>