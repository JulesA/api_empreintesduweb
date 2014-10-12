<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script language="javascript">
        window.onbeforeunload = temporaire_file_close;

        function temporaire_file_close()
        {
                
        }
 
    </script>
<?php
/***************************************************************************
 *
 *	API = "Application Programming Interface, une interface de programmation applicative, selon la liste des abréviations en informatique" - Wikipédia
 *  API de récupération du code http://code.empreintesduweb.com/
 *  Auteur : Jules
 *  Copyright : © 2014 Jules
 *  Cette API est en développement libre (open source) depuis https://github.com/
 *	Besoin d'aide ? Lisez le "readme" sur le github de l'API : https://github.com/JulesA/api_empreintesduweb
 *	
 ***************************************************************************/ $on_api = TRUE; /*/*/
 if(!isset($on_api)) { 
 echo '<strong><span style="color: red;">Erreur</span></strong> vous ne pouvez pas consulter ce fichier en accès direct.';
 return; 
 }
 
 if(isset($_GET['file_id']) AND (is_numeric($_GET['file_id']))) { 
/***************************************************************************/
/* 						PARTIE DE LA GESTION DE L'URL					   */
/***************************************************************************/
$base = "http://code.empreintesduweb.com/";
$id = $_GET['file_id'];
$fin = ".html";
$url = $base.$id.$fin;
$file_dir = "./temporaire_file_checking/";

/***************************************************************************/
/* 						PARTIE DU TRAITEMENT DU FICHIER					   */
/***************************************************************************/
$file = file_get_contents($url);
  if(file_exists(''.$file_dir.''.$_GET['file_id'].'.html')) {
	$temporaire_file = fopen(''.$file_dir.''.$_GET['file_id'].'.html', 'r+');
  }
  
  if(!file_exists(''.$file_dir.''.$_GET['file_id'].'.html')) {
	$temporaire_file = fopen(''.$file_dir.''.$id.'.html', 'w+');
	fputs($temporaire_file, $file);
  }
$temporaire_file_size = filesize(''.$file_dir.''.$_GET['file_id'].'.html');
$temporaire_file_checking2 = file_get_contents(''.$file_dir.''.$_GET['file_id'].'.html');
/***************************************************************************/
/* 						VÉRIFICATION DU FILE_ID (EXIST)					   */
/***************************************************************************/


/***************************************************************************/
/* 						PARTIE D'AFFICHAGE DU CODE						   */
/***************************************************************************/


/***************************************************************************/
/* 						PARTIE D'EFFACEMENT DU FICHIER					   */
/***************************************************************************/

// $temporaire_file_close = unlink(''.$file_dir.''.$_GET['file_id'].'.html');
 }
 else 
 {
	echo '<strong><span style="color: red;">Erreur</span></strong> vous ne pouvez avoir accès à cette page sans <u>ID de référencement</u> correct.';
 }