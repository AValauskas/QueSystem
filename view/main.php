<body>

<?php

if(file_exists($actionFile)) {
    include $actionFile;
}else if($person=='' && $action==''){
    include 'view/clientRegister_page.php';
}
?>
</body>
