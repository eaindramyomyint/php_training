<?php
include('phpqrcode/qrlib.php');

$userInput = filter_var($_POST["userInput"], FILTER_SANITIZE_STRING);
session_start();
$_SESSION["userInput"] = $userInput;
ob_start("callback");
$codeText = $userInput;
$debugLog = ob_get_contents();
ob_end_clean();

// save image as PNG
QRcode::png($codeText, "tutoqr.png", QR_ECLEVEL_H, 10);
header("location:index.php?status=1");