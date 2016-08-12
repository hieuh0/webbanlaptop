<?php
function danhsachsp(){
	$qr = "SELECT * FROM sanpham ";
	return mysql_query($qr);

}
function danhmuc(){
	$qr = "SELECT * FROM danhmuc ";
	return mysql_query($qr);

}

function chitietdanhmuc($id){
		$qr = "SELECT * FROM danhmuc WHERE id='$id'";
		$row = mysql_query($qr);
		return mysql_fetch_array($row);
}

function hangsx(){
	$qr = "SELECT * FROM  danhmuc, hangsx WHERE danhmuc.id = hangsx.iddm";
	return mysql_query($qr);

}

function xemhang(){
$qr = "SELECT * FROM hangsx ";
	return mysql_query($qr);	
}
function chitiethangsx($id){
	$qr = "SELECT * FROM hangsx WHERE id='$id'";
	$chitiet = mysql_query($qr);
	return mysql_fetch_array($chitiet);

}
function admin(){
	$qr = "SELECT * FROM nguoidung ";
	return mysql_query($qr);

}

function xemhoadon(){
	$qr = "SELECT * FROM  sanpham, dathang WHERE sanpham.id = dathang.idsp";
	return mysql_query($qr);

}
function chitietad($id){
	$qr = "SELECT * FROM nguoidung WHERE id = '$id'";
	$ct = mysql_query($qr);
	return mysql_fetch_array($ct);
}
function chitiethd($id){
	$qr = "SELECT * FROM dathang WHERE id='$id'";
	$hd = mysql_query($qr);
	return mysql_fetch_array($hd);
}

?>