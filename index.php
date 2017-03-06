 <?php 
include 'src/facebook.php';
$config['appId']='315311928871573';
$config['secret']='9aee1d455fa5ae87e96345ae51c28f3';
$config['fileUpload']=true;

$facebook=new Facebook($config);

$userid = $facebook->getUser();

if ($userid) {
  try {
  
    $user = $facebook->api('/me');
    echo "Thông tin cá nhân người chơi <br>";
    var_dump($user);
  } catch (FacebookApiException $e) {
    exit('Lỗi:'.$e->getMessage());
    $user = null;
  }
}
else
{
	$loginUrl = $facebook->getLoginUrl();
	exit("chưa đăng nhập vào ứng dụng, Click <a href='$loginUrl'>vào đây</a> để đăng nhập");
}
 ?>
