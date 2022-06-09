<?php
include_once 'database.php';
if (isset($_POST['send'])){

$field=$_POST['field'];
$message=$_POST['message'];

$sql="SELECT phone FROM register WHERE skill='$field' ";
$result=mysqli_query($conn, $sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0){
    $row=mysqli_fetch_assoc($result);
}


$encodemessage=urlencode($message);
$mobilenumbers=implode('',$row);
$arr=str_split($mobilenumbers,'10');
$numbers=implode(',', $arr);
$authkey="dccd95a8cfc21478facb15f7ec079984700980f6";
$senderid="https://smsportal.hostpinnacle.co.ke/SMSApi/senderid/create?userid=ralph&password=xxxxx&senderid=KIPKELION+EAST+EMPLOYMENT+PROGRAMME&output=text";
$route="54.247.191.102";
$postData=array(
'authkey'=>$authkey,
'mobiles'=>$numbers,
'message'=>$encodemessage,
'sender'=>$senderid,
'route'=>$route
);
$url="https://smsportal.hostpinnacle.co.ke/SMSApi/apikey/read?userid=ralph&password=xxxxx&output=text";

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://smsportal.hostpinnacle.co.ke/SMSApi/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "$encodemessage",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "userid=ralph&password=xxxxx&mobile=$row&msg=$message&senderid=SENDER&msgType=text&duplicatecheck=true&output=json&sendMethod=quick",
  CURLOPT_HTTPHEADER => array(
    "apikey: dccd95a8cfc21478facb15f7ec079984700980f6",
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

}
?>