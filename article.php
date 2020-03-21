<?php 
	require_once "start.php";
	$article = getArticle($_GET["id"]);
	$id = $article["id"];
	$title = $article["title"];
	$full_text = $article["full_text"];
 ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
          <title><?php echo $title; ?></title>
          <meta http-equiv="Content-type" content="text/html; charset="utf-8" />
          <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
  <table id = "main">
	  <?php 
	  	require_once "blocks/top.php";
	  ?>
  	 <tr>
		 <td colspan="2">
			 <table cellpaddaing="0" cellspacing="0" id="content">
				 <tr>
				 	<td>

				 	<?php 
				 		require_once "blocks/full_article.php";
				 	?>
				 		 
				 	</td>
				 	<td id="banners_240">
					 	 <?php 
				 		require_once "blocks/banners_240.php";
				 	?>
				 	</td>
				 </tr>
			 </table>
		 </td>
	 </tr>
	  <?php 
				 		require_once "blocks/footer.php";
				 	?>
 </table>

 
</body>
</html>