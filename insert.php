<?php 
include("config.php");

if(isset($_POST['save_reg']))
{
	$name = mysqli_real_escape_string($db, $_POST['name']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
    $contact = mysqli_real_escape_string($db, $_POST['contact']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
	
    if($name == NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
	
    $query = "INSERT INTO db (name,dob,contact,address) VALUES('$name','$dob','$contact','$address')";
    $query_run = mysqli_query($db, $query);

       if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Details Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Details Not Updated'
        ];
        echo json_encode($res);
        return;
    }
	
}


if(isset($_POST['edit_details']))
{

    
   	$name = mysqli_real_escape_string($db, $_POST['name']);
    $mail = mysqli_real_escape_string($db, $_POST['mail']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $contact = mysqli_real_escape_string($db, $_POST['contact']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
    
    
    
    
    if($name== NULL || $dob==NULL || $contact==NULL || $address== NULL)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
    $query = "UPDATE db SET name='$name', dob='$dob',contact='$contact',address='$address' WHERE mail='$mail'";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Details Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Details Not Updated'
        ];
        echo json_encode($res);
        return;
    }
}

	  
?>