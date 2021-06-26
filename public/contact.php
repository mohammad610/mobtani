<?php
include ('../include/setting.php');
include ('../include/functions.php') ;
$alerts = '';
if( isset( $_POST['submit'] ) ){

unset( $_POST['submit'] );

$db = new DB();
messages::add( $_POST );
unset( $db );

$alerts = alertTemplate('با موفقیت ثبت شد!', 'success');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            font-size: 2em;
            margin-top: 5%;
            margin-left: 5%;
            text-align: center;
            color: #e73535;
        }
        html{
             background:linear-gradient(
			90deg,
		  rgba(243, 241, 148, 0.897),
		  rgba(178, 217, 248, 0.9)
					);
                }
        form{
            width: 400px;
            margin: 40px auto;
        }
        label{
            width: 100px;
            direction: rtl;
            float: right;
        }
        input{
            width: 300px;
            float: right; 
        }
        button{
            float: right;
            text-align: center;
            width: 304px;
            margin: 15px 0;
            background-color: #98D0EE;
        }
        ::placeholder{
            text-align: right;
        }
</head>
<main>
	<?php
				if( isset($alerts) )
					echo $alerts;
			?> 
</main>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	
 </body>
</html>
