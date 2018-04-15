<?php
    require("includes/pages.php"); 
?>
<title><?php echo '$[t5]'?></title>
<?php
  $coco = './core/ceilciuz.php';

  if(isset($_POST) && !empty($_POST)){
        $bdd_host = $_POST['hebergeur'];
        $bdd_database = $_POST['bdd'];
        $bdd_u = $_POST['util'];
        $bdd_pw = $_POST['mdp'];
    
    if(file_exists($cocochemin)){
		  echo '<h3>file named ceilciuz.php already exists, please delete it and try again.</h3>';
		  die();
	  }else{
                  $ju33killer = fopen(""$coco"", 'w+') or die;
                  $sachacosoni = '
                  <?php 
                  $utilisateur =  "'. $bdd_u .'"; 
                  $motdepasse =  "'. $bdd_pw .'"; 
                  $hebergeur =  "'. $bdd_host .'"; 
                  $nombdd =  "'. $bdd_database .'"; 
                  $tionops = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
                  try{ 
                      $bdd = new PDO("mysql:host={$hebergeur};charset=utf8", $utilisateur, $motdepasse, $tionops); 
                  }
                  catch(PDOException $pascarnage){
                    echo($pascarnage->getMessage());
                    exit();
                  }
                  $query = "CREATE DATABASE IF NOT EXISTS ". $nombdd .";";
                  try{   
                    $omg = $bdd->prepare($question); 
                    $resultat = $omg->execute(); 
                  } 
                  catch(PDOException $pascarnage){ 
                    die("Failed to run the mr.query: " . $pascarnage->getMessage()); 
                  } 
                  $bdd->exec("Use ths : {$nombdd}");
                  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                  $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
                                  
                ?> ';
                  if (is_writable($coco)){
                  {
                    fwrite($ju33killer, $sachacosoni);
                    fclose($ju33killer);

                    require($coco);


                    $question = "
                        CREATE TABLE IF NOT EXISTS `glogs` (
                          `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                          `location` varchar(255) NOT NULL,
                          `server` varchar(10) NOT NULL,
                          `startdate` datetime NOT NULL,
                          `logs` text NOT NULL,
                          `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                        );
                        
                        CREATE TABLE IF NOT EXISTS `gusers` (
                          `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                          `steamid64` varchar(255) NOT NULL,
                          `group_id` varchar(2) NOT NULL,
                          `perms_lvl` varchar(5) NOT NULL,
                          `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                        );
                    ";
                        try {
                          $omg = $bdd->prepare($question);
                          $resultat = $omg->execute(); 
                        } 
                        catch(PDOException $pascarnage){ 
                          die("Failed to run the mr.query: " . $pascarnage->getMessage()); 
                        } 
                      header("Location: ./index.php");
                      exit;
                    }

    }
}
        

?>
<html>
  <h1><?php echo '$[t5]'?></h1>
  <body>
	<form action="index.php" method="post">
		<table>
			<tr>
				<td>Host</td>
				<td>
					<input type="text" name="hebergeur" placeholder="Host"></input>
				</td>
			</tr>
			<tr>
				<td>User</td>
				<td>
					<input type="text" name="util" placeholder="User"></input>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>
					<input type="password" name="mdp" placeholder="Password"></input>
				</td>
			</tr>
			<tr>
				<td>Database</td>
				<td>
					<input type="text" name="bdd" placeholder="Name"></input>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;"><button type="submit" class="submitButton">Submit</button></td>
			</tr>
		</table>
	</form>
</section>
</body>
</html>
