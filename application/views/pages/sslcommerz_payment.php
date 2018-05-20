<?php
//session_start();

define("STORE_ID","testbox");

define("STORE_PASSWORD","qwerty");

define("SSLCZ_REDIRECT_URL"," https://sandbox.sslcommerz.com/gwprocess/v3/api.php");

define("SSLCZ_VALIDATION_API"," https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php");
?>
<?php

//if (isset($_POST['donate_now_please'])){
    /* communicate necessary info */
    /*
    $post_data=array();

    $post_data['store_id']=STORE_ID;
    $post_data['store_passwd']=STORE_PASSWORD;
    $post_data['currency']=$_POST['currency'];
    $post_data['total_amount']=str_replace(',','',$_POST['amount']);
    $_SESSION['SSLCZ_TRX_ID']=$post_data['tran_id']="SSLCZ_TEST_".uniqid();
    $post_data['success_url']="http://localhost/hysawa/?page_id=847";
    $post_data['fail_url']="http://localhost/hysawa/?page_id=847";
    $post_data['cancel_url']="http://localhost/hysawa/?page_id=847";

    $_SESSION['CUS_HISTORY']['CUS_NAME']=$post_data['cus_name']=$_POST['cus_name1'];
    $_SESSION['CUS_HISTORY']['CUS_NAME2']=$post_data['cus_name2']=$_POST['cus_name2'];
    $_SESSION['CUS_HISTORY']['CUS_EMAIL']=$post_data['cus_email']=$_POST['cus_email'];
    $_SESSION['CUS_HISTORY']['CUS_ADD']=$post_data['cus_add1']=$_POST['cus_add1'];
    $_SESSION['CUS_HISTORY']['CUS_COUNTRY']=$post_data['cus_country']=$_POST['cus_country'];

    $handle=curl_init();
    curl_setopt($handle, CURLOPT_URL,SSLCZ_REDIRECT_URL);
    curl_setopt($handle, CURLOPT_POST);
    curl_setopt($handle, CURLOPT_POSTFIELDS,$post_data);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER,true);
    */
    /*---------------------------bellow two line for localhost-----*/
    /*
    curl_setopt($handle,CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($handle,CURLOPT_SSL_VERIFYPEER,0);

    $content=curl_exec($handle);
    $code=curl_getinfo($handle,CURLINFO_HTTP_CODE);

    if ($code==200 && !(curl_errno($handle))){
        curl_close($handle);

        $sslcommerzResponse=$content;
        #PARSE THE JSON RESPONSE
        $sslcz=json_decode($sslcommerzResponse,true);
        if (isset($sslcz['status']) && $sslcz['status']=='SUCCESS'){
            if (isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL']!=''){
                echo '<meta http-equiv="refresh" content="0;url='.$sslcz['GatewayPageURL'];
                #header("Location:".$sslcz['GatewayPageURL']);
                exit();
            }
            else{
                echo "No Redirect URL Found";
            }
        }
        else{
            echo "Invalid Credential";
        }

    }
    else{
        curl_close($handle);
        echo "Failed To Connect With SSLCOMMERZ API";
        exit();
    }
}
    */

?>
<fieldset style="border: 5px blue">
<form action="<?php echo base_url('ssl-payment')?>" method="post">
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</fieldset>