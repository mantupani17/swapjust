<?php
session_start();
unset($_SESSION['username']);
session_destroy();
?>
	<script language="javascript" type="text/javascript">
	window.location.href='../index.php?success';
	</script>
	<?php
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

