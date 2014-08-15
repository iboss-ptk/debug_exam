<?php
	$code = isset($_POST["card-code-input"]) ? trim($_POST["card-code-input"]) : "";
	if ($code == "") {
		echo "error_blank";
		exit();
	}

	$code = strtoupper($code);
	$code = str_replace("-", "", $code);

	if (strlen($code) != 13) {
		echo "error_len";
		exit();
	}
	if (ctype_alnum($code) == false) {
		echo "error_alphanum";
		exit();
	}

	$hash_md5 = md5($code);
	$hash_sha1 = sha1($code);
	
	include("db.php");
	$mysqli = connectDB();

	$query = "SELECT * FROM `tb_card_codes` WHERE `code_hash_1`='$hash_md5' AND `code_hash_2`='$hash_sha1'";
	$rquery = $mysqli->query($query);
	if ($rquery->num_rows == 1) {
		echo "Found $code (md5: $hash_md5, sha1: $hash_sha1)";
	} else {
		echo "Not found $code";
	}
?>