<html>
<head>  
    <title> Generate QR Code </title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/validate.js"></script>
</head>
<body>
    <form method="post" name="frmQRGenerator" id="frm-qr"
        onSubmit="return validate();">
        <div class="form-row">
            Message: <input type="text" name="message"
                id="message" class="input-field" />
        </div>

        <div>
            <input type="submit" name="generate" class="submit-button"
                value="Generate QR Code" />
        </div>
    </form>  
    
    <div id="validation-info"></div>
    
</body>
</html>


<?php
if (! empty($_POST["message"])) {
    require ('vendor/autoload.php');
    $barcode = new \Com\Tecnick\Barcode\Barcode();
    $targetPath = "qr-code/";
    
    if (! is_dir($targetPath)) {
        mkdir($targetPath, 0777, true);
    }
    $bobj = $barcode->getBarcodeObj('QRCODE,H', $_POST["message"], - 16, - 16, 'black', array(
        - 2,
        - 2,
        - 2,
        - 2
    ))->setBackgroundColor('#f0f0f0');
    
    $imageData = $bobj->getPngData();
    $timestamp = time();
    
    file_put_contents($targetPath . $timestamp . '.png', $imageData);
    ?>
<div class="result-heading">Output:</div>
<img src="<?php echo $targetPath . $timestamp ; ?>.png" width="150px"
    height="150px">
<?php
}
?>
