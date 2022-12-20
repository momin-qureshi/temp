<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Your name', @$_POST['imObjectForm_51_1'], '', false);
	$form->setField('Your e-mail', @$_POST['imObjectForm_51_2'], '', false);
	$form->setField('Title', @$_POST['imObjectForm_51_3'], '', false);
	$form->setField('Your message', @$_POST['imObjectForm_51_4'], '', false);

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
// 		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'CBA6B66C0F1181D8DD721C2E21D7500D' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
// 			die(imPrintJsError());
		$form->mailToOwner('jackie@queenofthesweets.com', '', 'jackie@queenofthesweets.com', '', "", false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// if(!empty($_POST["send"])){
//     $userName = $_POST["name"];
//     $userEmail = $_POST["userEmail"];
//     $title = $_POST["title"];
//     $message = $_POST["message"];

//     $toemail = "shapito0786@gmail.com";

//     $mailHeaders = "Name : " . $userName . "\nEmail : " . $userEmail . "\nTitle : " . $userEmail
//     . "\nMessage : " . $message;

//     if(mail($toemail, $title, $mailHeaders)){
//         echo "Form is submitted succcessfully.";
//     }

// }
// // End of file