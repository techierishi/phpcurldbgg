<?php

if(isset($_POST['message'])){
	
	$fo = fopen($_POST['filename'],$_POST['mode']);
	
	fwrite($fo,'[================[ '. date('d/m/Y H:m:s').' { '.$_POST['tag']. ' } ]================]');
	fwrite($fo,$_POST['message']);

	fclose($fo);
}

