<?php
require_once './app/config/.env.php';
require_once './vendor/autoload.php';
//header
require getenv('APP_ROOT') . '/app/views/inc/header.php';

$companyName = $tva = $phone = $companyType = "";
$errcompanyName = $errtva = $errPhone = $errcompanyType = "";

//VAR
$companyName = $_POST["company_name"];
$tva = $_POST["company_tva"];
$phone = $_POST["company_phone"];
$companyType = $_POST["company_type"];

//FUNCTION
function sanitizeNames($field){
	$field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        return $field;
    } else{
        return FALSE;
    }
}
function sanitizePhone($field){
    $field= filter_var(trim($field), FILTER_SANITIZE_NUMBER_INT);

    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>'#^[0-9]{10}$#')))){
        return $field;
    } else{
        return FALSE;
    }
}

if (isset($_POST["submit"])){

    if(empty(trim($_POST['company_name']))){
        $errcompanyName = "- Company name is empty -";
    }else{
        $companyName = sanitizeNames($_POST['company_name']);
		    if ($companyName == FALSE){
		    	$errcompanyName = " Company name is not valid";
		    }
    }
    if(empty(trim($_POST['company_tva']))){
        $errtva = "- Company TVA is empty -";
    }else{
        $company_tva = sanitizeNames($_POST['company_tva']);
		    if ($tva == FALSE){
		    	$errtva = " Company TVA is not valid";
		    }
    }
    if(empty(trim($_POST['company_phone']))){
        $errPhone = "- phone number is empty -";
    } else {
        $phone = sanitizePhone($_POST['company_phone']);
        if ($phone == FALSE){
            $errPhone = "- phone number is not valid -";
        }
    }


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COGIP | New Company</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <span class="container">
        <span class="row">
            <span class="col-8 offset-2">
                <h1 class="text-center">Create New company</h1>
                <form class="mt-5 text-center" method="post" action="">
                    <div class="form-group">
                        <label for="companyName">Company name</label>
                        <input type="text" class="form-control" id="company_name" name="company_name" aria-describedby="NameHelp" placeholder="Enter your Company name">
                        <span class='text-danger'><?php echo $errcompanyName ?></span>
                    </div>
                    <div class="form-group">
                        <label for="tva">TVA number</label>
                        <input type="text" class="form-control" id="tva" name="company_tva" aria-describedby="tvaHelp" placeholder="Enter your TVA number">
                        <span class='text-danger'><?php echo $errtva?></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="company_phone" minlength="10" maxlength="10" class="form-control" id="phone" aria-describedby="phone" placeholder="Enter your phone number">
                        <span class='text-danger'><?php echo $errPhone?></span>
                    </div>
                    <div class="form-group">
                        <label for="companyType">Company type</label>
                            <select class="form-control" id="company_type" name="comapny_type">
                                <option disabled selected>Select your company type</option>
                                <option value="supplier">Supplier</option>
                                <option value="client">Client</option>
                            </select>
                            <span class='text-danger'><?php echo $errcompanyType ?></span>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mt-3">Add new company</button>
                </form>
            </span>
        </span>
    </span>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<!-- footer content -->
<?php require getenv('APP_ROOT') . '/app/views/inc/footer.php' ?>
</html> 