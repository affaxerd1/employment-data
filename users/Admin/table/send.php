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

$ch=curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL=> $url,
    CURLOPT_RETURNTRANSFER=> true,
    CURLOPT_POST=>true,
    CURLOPT_POSTFIELDS=> $postData

));

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    $response=curl_exec($ch);
    if($response==TRUE){
        $msg="message sent successfully!";
        header("Location:tables.php?success");
    }
    if(curl_errno($ch)){
        echo 'error:'.curl_error($ch);
    }
    
    curl_close($ch);


}

?>