<? 
// --------------------------------config------------------------------- // 
 
$adminemail="contact@onemanband.digital";  // Your e-mail
 
 
$date=date("d.m.y"); 
 
$time=date("H:i"); 
 
$backurl="http://onemanband.digital";  // Where to go after send
 
//---------------------------------------------------------------------- // 
 
  
 

$name=$_POST['name']; 
 
$email=$_POST['email']; 
 
$msg=$_POST['message']; 
 
  
 
 
$msg=" 
 
 
Name: $name 
 
 
E-mail: $email
 
 
Message: $msg
 
 
"; 
 
  
 
 
mail("$adminemail", "$date $time Message 
from $name", "$msg"); 
 
  
 

$f = fopen("message.txt", "a+"); 
 
fwrite($f," \n $date $time Message 
from $name"); 
 
fwrite($f,"\n $msg "); 
 
fwrite($f,"\n ---------------"); 
 
fclose($f); 
 

 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 3000); 
//--></script> 
 
$msg 
 
<p>Message sent! Wait, now you will be redirected to the main page ...</p>";  
exit; 
 
  
 
?>