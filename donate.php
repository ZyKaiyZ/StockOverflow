<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once('./TCPDF/tcpdf_import.php');
require_once('./TCPDF/tcpdf_barcodes_2d.php');
require('./PHPMailer/src/Exception.php');
require('./PHPMailer/src/PHPMailer.php');
require('./PHPMailer/src/SMTP.php');
/*---------------- Sent Mail Start -----------------*/
$_name=$_POST['name'];
$_phone=$_POST['phone'];
$_money=$_POST['money'];
$_email=$_POST['email'];
$_message=$_POST['message'];

$mail= new PHPMailer();                      //建立新物件
$mail->IsSMTP();                             //設定使用SMTP方式寄信
$mail->SMTPAuth = true;                      //設定SMTP需要驗證
$mail->SMTPSecure = "STARTTLS";              //outlook的SMTP主機需要使用SSL連線
$mail->Host = "smtp.office365.com";          //outlook的SMTP主機
$mail->Port = 587;                           //outlook的SMTP主機的埠號(Gmail為465)。
$mail->CharSet = "utf-8";                    //郵件編碼
$mail->Username = "s1093335@mail.yzu.edu.tw";//outlook帳號
$mail->Password = "";     		  	 		 //outlook密碼
$mail->From = "s1093335@mail.yzu.edu.tw";    //寄件者信箱
$mail->FromName = "StockOverflow";           //寄件者姓名
$mail->Subject ="感謝".$_name."的贊助 !";     //郵件標題
$mail->Body ="捐款資料 -<br> 
			姓名: ".$_name."<br>
			信箱: ".$_email."<br>
			電話: ".$_phone."<br>
			金額: NT$".$_money."<br>
			留言: ".$_message;
$mail->IsHTML(true);                         //郵件內容為html
$mail->AddAddress("$_email");                //收件者郵件及名稱
/*---------------- Sent Mail End -------------------*/

/*---------------- Print PDF Start -----------------*/
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->setPrintHeader(false);//不要頁首
$pdf->setPrintFooter(false);//不要頁尾
$pdf->SetFont('cid0jp','', 18); //設定字型
$pdf->AddPage(); //新增頁面
$pdf->SetTitle('匯款單'); //標題

$html = <<<EOF
<table width: 540px height: 250px style="font-family: taipeisanstcbeta;">
	<tr>
		<td colspan="4" style=" font-size: 23px; text-align: center; background-color: #30a1c3; color: #ffffff;">匯款人資訊</td>
	</tr>
	<tr>
		<td style="border: 1px solid white; background-color: #30a1c3; color: #ffffff;">姓名: </td>
		<td style="border: 1px solid white; background-color:#afafaf;">$_name</td>
		<td style="border: 1px solid white; background-color: #30a1c3; color: #ffffff;">電話: </td>
		<td style="border: 1px solid white; background-color:#afafaf;">$_phone</td>
	</tr>
	<tr>
		<td style="border: 1px solid white; background-color: #30a1c3; color: #ffffff;">E-mail:</td>
		<td colspan="3" style="border: 1px solid white; background-color:#afafaf;">$_email</td>
	</tr>
	<tr>
		<td style="border: 1px solid white; background-color: #30a1c3; color: #ffffff;">應繳金額: </td>
		<td colspan="3" style="border: 1px solid white; background-color:#afafaf;">NT$ $_money</td>
	</tr>
	<tr>
		<td colspan="4" style="border: 1px solid white; background-color: #30a1c3; color: #ffffff; text-align: center;">留言:</td>
	</tr>
	<tr>
		<td colspan="4" style="border: 1px solid white; background-color:#afafaf;"> $_message</td>
	</tr>
	<tr>
		<td colspan="4" style="font-size: 23px; text-align: center;  background-color: #30a1c3; color: #ffffff;">匯款條碼</td>
	</tr>
</table>
<p style="font-size:5px"></p>
<div style="border: 2px solid white; width: 540px; height: auto;">
	<img src="assets/imgs/barcode.png" style="width: 200px; height: 90px; text-align:center"></img>
</div>
<p style="border: 1px solid white; font-size: 23px; text-align: center;  background-color: #30a1c3; color: #ffffff;">感謝贊助</p>
EOF;
/*---------------- Print PDF End -------------------*/
$pdf->writeHTML($html);
$pdf->lastPage();

ob_clean();
$attachment=$pdf->Output(dirname(__FILE__).'/匯款單.pdf', 'FI');//I: 在瀏覽器中呈現 (預設), E: 以郵件附件方式傳回文件,  S: 以文字方式傳回文件
$mail->AddAttachment(dirname(__FILE__).'/匯款單.pdf');

$link = mysqli_connect('127.0.0.1','root','','stockoverflow')or die("無法開啟MySQL資料庫連接!<br/>");
$sql = "INSERT INTO donation ( name , phone , money , email , message ) VALUES ('$_name','$_phone','$_money','$_email','$_message')";
mysqli_query($link, 'SET NAMES utf8'); 
mysqli_query($link, $sql);

if(!$mail->Send()){
	echo "Error: " . $mail->ErrorInfo;
}else{
	//header("Location: http://localhost:8080/stockoverflow/index.php#");
}
?>