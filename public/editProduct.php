<?php
include ('../include/setting.php');
include ('../include/functions.php');

if( isset( $_GET['id'] ) ) {
		
		
		if( isset( $_POST['submit'] ) ){

			$parameters = $_POST;
			unset( $parameters['submit'] );
            $parameters['imgsrc']='assets/images/mobile1.jpeg';
			$parameters['id'] = $_GET['id'];
			$db = new DB();
			$table = Product::update( $parameters );
			unset( $db );			
		}
		
		$db = new DB();
		$table = Product::find("id = {$_GET['id']}");
		$row = $table[0];
		
		unset( $db );
		
	}

else
{
alerts('شناسه محصول نامشخص!','error');
}
	$alerts = alerts();
	echo $alerts;
    
include ('../include/views/templates/editProduct.php');
