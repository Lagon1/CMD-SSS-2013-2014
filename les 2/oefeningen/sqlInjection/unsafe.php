<?php
// Test SQL injection
require('inc/config.inc.php');
require('inc/template.inc.php');


if(get_magic_quotes_gpc()){
	# DON'T EVER USE THIS IN PRODUCTION, UNDERMINES SAFE MODE!!
	foreach($_POST as $key=>$value){ $_POST[$key] = stripslashes($value); }
	# /DON'T EVER USE THIS IN PRODUCTION, UNDERMINES SAFE MODE!!	
}

# geef de HTML code voor het openen van de pagina weer
htmlOpenen('Script Injection');


if(isset($_POST['submit']))
{
	mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS) or die('DB Conn error');
	mysql_select_db(MYSQL_DB);

	echo $query = "select * from gebruikers where username =  '".$_POST['username']."' AND password = '".$_POST['password']."'";
	echo '<hr>';

	$res = mysql_query($query) ;

	if ($res AND mysql_num_rows($res) != 0) {

		if($row = mysql_fetch_assoc($res)) {
			//print_r($row);
			echo 'Welkom '.$row['username'] . '<br>' ;
		}
	}
	else if (!$res) {
		echo 'Error in query' . mysql_error();
	}
	else if (mysql_num_rows($res) == 0)  {

		echo 'No match.';

	}
} else {
?>
<form method="post" action="">
Username: <input type=text name="username">
<br />
Password: <input type=text name="password">
<input type="submit" name="submit">
</form>
<?
}

# geef de HTML code voor het sluiten van de pagina weer
htmlSluiten();
?>