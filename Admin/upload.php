<?php
include '../SwapjustConfig/Swapjust_Connection.php';
$sjf = new Swapjust_Connection();
if(isset($_FILES['files'])){
	$datas = $_POST['prod_code'];
    $errors= array();
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$fname = $key.$_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];
                $file_name =  substr_replace($fname, $datas,0,5);
        if($file_size > 2097152){
			$errors[]='File size must be less than 2 MB';
        }		
        //$query="INSERT into offer_images (`product_code`,`image`) VALUES('$datas','$file_name'); ";
        
        $desired_dir="../Gallery";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
                
            }else{									// rename the file if another one exist
                $new_dir="$desired_dir/".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
		 //mysql_query($query);	
            //$sjf->execute($query);
        }else{
                print_r($errors);
        }
    }
	if(empty($error)){
		echo "Success".$datas;
	}
}
?>


<!--<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="files[]" multiple/>
	<input type="text" name="dat" />
	<input type="submit"/>
</form>-->
