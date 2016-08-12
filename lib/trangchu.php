<?php
function sanphamtrangchu(){
	$qr = "SELECT * FROM sanpham ORDER BY id DESC LIMIT 1,8";
	return mysql_query($qr);
}

function danhmuc(){
	$qr = "SELECT * FROM danhmuc";
	return mysql_query($qr);
}

function hangsx($id){
	$qr = "SELECT * FROM hangsx WHERE iddm=$id";
	return mysql_query($qr);
}

function xemtintronghang($idhang){
	$qr = "SELECT * FROM sanpham WHERE idSP=$idhang";
	return mysql_query($qr);
}

function chitietsp($id){
	$qr = "SELECT * FROM sanpham WHERE id=$id";
	return mysql_query($qr);
}
function slide(){
	$qr = "SELECT * FROM slide";
	return mysql_query($qr);
}
?>