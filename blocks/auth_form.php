<?php 
	if($_SESSION["error_auth"]){
		unset($_SESSION["error_auth"]);
		$alert = "Неверный имейл и/или пароль";
		include "alert.php";
	}
 ?>

<form name="auth" action="auth.php" method="post">
			 <table>
			 	<tr>
			 		<td>Email:</td>
			 		<td>
			 			<input type="text" name="email" />
			 		</td>
			 		<td> Пароль:</td>
			 		<td>
		 				<input type="password" name="password"></input>
			 		</td>
			 	</tr>
			 	<tr>
				 	<td colspan="4">
				 		<input type="submit" name="button_auth" value="Войти" />
				 	</td>
			 	</tr>
			 </table>
		 </form>