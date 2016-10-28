<?php
/**
 * Created by PhpStorm.
 * User: Jerry
 * Date: 2016/10/28
 * Time: 下午5:44
 */
require_once("config.php");
//function Submit(){
/*$db_address = $GLOBALS['db_address'];
$db_user = $GLOBALS['db_user'];
$db_password = $GLOBALS['db_password'];
$db_database = $GLOBALS['db_database'];
$db_table = $GLOBALS['db_table'];
$site_url = $GLOBALS['site_url'];*/
$isSuccess = true;
if (isset($_POST['teamType']) && isset($_POST['teamName']) && isset($_POST['teamNum']) &&
    isset($_POST['capName']) && isset($_POST['school']) && isset($_POST['stuID']) &&
    isset($_POST['phone']) && isset($_POST['QQ']) && isset($_POST['wechat'])
) {


    $db = mysql_connect($db_address, $db_user, $db_password) or die("Could not connect to database!");
    mysql_select_db($db_database, $db) or die("Could not select the database!");

    $teamType = filter_var($_POST['teamType']);
    $teamName = filter_var($_POST['teamName']);
    $teamNum = filter_var($_POST['teamNum']);
    $capName = filter_var($_POST['capName']);
    $school = filter_var($_POST['school']);
    $stuID = filter_var($_POST['stuID']);
    $phone = filter_var($_POST['phone']);
    $QQ = filter_var($_POST['QQ']);
    $wechat = filter_var($_POST['wechat']);
    $time = date("Y-m-d H:i:s");

    if ($teamType == 1 && $teamNum != 1) {
        $isSuccess = false;
    }
    if ($teamNum < 1 || $teamNum > 6) {
        $isSuccess = false;
    }

    if ($isSuccess) {
        $query = "insert into $db_table (teamType, teamName, teamNum, capName, school, studentId, phoneNum, QQNum, wechat, registTime) 
              values($teamType, '$teamName', $teamNum, '$capName', '$school', '$stuID', $phone, $QQ, '$wechat', '$time')";
        //echo $query;
        $que = mysql_query($query, $db);
        $isSuccess = $que;
        if (!$que) die("Failed to sign up");
    }
} else {
    $isSuccess = false;
}
if ($isSuccess) {
    $msg = "报名成功!";
    echo json_encode(array("status" => true, "msg" => $msg));
} else {
    $msg = "发生错误!";
    echo json_encode(array("status" => false, "msg" => $msg));
}
//}

?>