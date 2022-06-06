<? 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php"); 
?>
<?
// Set `true` to enable
if(true){
	// default admin uid is `1`
	$uid = (int)$_REQUEST['uid'];
	if($uid){
		global $USER;
		$authRes = $USER->Authorize($uid);
		echo 'Auth res: ' . $authRes;
		LocalRedirect("/bitrix/admin/");
	}else{
		echo 'uid not set!';
	}
}else{
	echo 'Emergency authorization disabled!';
}
?>
<? 
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); 
?>
