<?     php
$filepath = realpath(dirname(_FILE_));
include_once($filepath . '/clases/user.php');
$usr = new user();
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $nama = $_post['email'];
 $password =md5($_post['password']);
 $userlogin = $usr->Userlogin($nama, $password);
 }
 