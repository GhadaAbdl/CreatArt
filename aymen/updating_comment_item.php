<?php 
 
  $host="localhost";
$username="root";
 
$conn=mysql_connect($host,$username,$pwd) or die("could not connect");
$db=mysql_select_db("creart_bd",$conn);
 
 
$name_membre=$_POST['user_name'];
$comment_content=$_POST['comment'];
$id_article=$_POST['id_article'];
$type_article=$_POST['type_article'];
$Date= $_POST['date'];
 
if($type_article=='cinema') 
{
	mysql_query("update  commentaires_cinema set corps_commentaire='".$comment_content."' where   id_article='".$id_article."' and membre_commentaire='".$name_membre."' and date_commentaire='".$Date."' ") ; 

	 }
else if ($type_article=='literature') 
{
	mysql_query("update  commentaires_literature  set corps_commentaire='".$comment_content."' where   id_article='".$id_article."' and membre_commentaire='".$name_membre."' and date_commentaire='".$Date."' ") ; 

	}
else if ($type_article=='music') 
{
	mysql_query("update  commentaires_music set corps_commentaire='".$comment_content."' where   id_article='".$id_article."' and membre_commentaire='".$name_membre."' and date_commentaire='".$Date."' ") ; 

	}
else if ($type_article=='photography') 
{
	mysql_query("update  commentaires_photography  set corps_commentaire='".$comment_content."' where   id_article='".$id_article."' and membre_commentaire='".$name_membre."' and date_commentaire='".$Date."' ") ; 

	}
  
 
 header ("location: ../".$type_article."_affich.php?id_item=$id_article" );
 ?> 