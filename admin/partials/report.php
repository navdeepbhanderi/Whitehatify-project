<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $filenameee =  $_FILES['file']['name'];
    $fileName = $_FILES['file']['tmp_name']; 
    $email = $_POST['email'];
    $pid = $_POST['pid'];
    
    $message ="WhiteHatify - Project Reports"; 
    
    $subject ="Project Report";
    $fromname ="WhiteHatify";
    $fromemail = 'whitehatifyservices@gmail.com';  //if u dont have an email create one on your cpanel
    $mailto = $email;  //the email which u want to recv this email
    $content = file_get_contents($fileName);
    $content = chunk_split(base64_encode($content));
    // a random hash will be necessary to send mixed content
    $separator = md5(time());
    // carriage return type (RFC)
    $eol = "\r\n";
    // main header (multipart mandatory)
    $headers = "From: ".$fromname." <".$fromemail.">" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;
    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;
    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";
    // SEND Mail
    if (mail($mailto, $subject, $body, $headers)) {
       if(move_uploaded_file($fileName,"../reports/".$filenameee)){
            include 'dbconnect.php';
            $sql = "INSERT INTO `report`(`pid`, `email`, `filename`) VALUES ('$pid','$email','$filenameee')";
            $result = mysqli_query($con,$sql);
            if($result){
                header('location:../project_docs.php?pid='.$pid.'');
            }
       }
    } else {
        header('location:../project_docs.php?pid='.$pid.'');
        print_r( error_get_last() );
    }
}else{
    header('location:../project_docs.php?pid='.$pid.'');
}

?>