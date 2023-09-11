<?php
    include("session.php");
?>
<?php 
        include("config.php");
        $sel="SELECT * FROM db where mail = '$s'";
        $query=mysqli_query($db,$sel);
        $resul=mysqli_fetch_assoc($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css”>
</head>
<body>
    <!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
    <img src="img.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Guvi
  </a>
</nav>
<div id="ref">
<!-- Image Modal -->


<div class="container-xl px-4 mt-4 centre">
    <!-- Account page navigation-->
<div class="row">
<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button class="modal-title editbtn" type="submit" id="exampleModalLabel" value="<?= $resul['mail'];?>">Edit Profile</button>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="editdetails">

      <div class="modal-body">
            <div class="mb-3">
                <label >Name</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo $resul['name'];?>"/>
            </div>

            <div class="mb-3">
                <input type="hidden" name="mail" id="mail" class="form-control" value="<?php echo $resul['mail'];?>"/>
            </div>

            <div class="mb-3">
                <label >Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $resul['address'];?>" />
            </div>

            <div class="mb-3">
                <label>Phone Number</label>
                <input type="text" name="contact" class="form-control" value="<?php echo $resul['contact'];?>" />
            </div>

            <div class="mb-3">
                <label>Date Of Birth</label>
                <input type="date" name="dob" class="form-control" value="<?php echo $resul['dob'];?>" />
            </div>
      </div>


      <div class="modal-footer">
      <button type="submit" class="btn btn-dark">Save changes</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

        
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                        <!-- Form Group (username)-->
    
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1">First name</label>
                                <table>
                                <tr>
                                    <td><?php echo $resul['name'];?></td>
                                </tr>
                                </table>
                            </div>
                            <!-- Form Group (last name)-->
    
                        </div>
                        <!-- Form Row        -->
            
                        <!-- Form Group (email address)-->
                        <div class="row gx-3 mb-3">
                          <div class="col-md-6">
                        <div class="mb-3">
                            <label class="small mb-1">Email address</label>
                            <table>
                                <tr>
                                    <td><?php echo $resul['mail'];?></td>
                                </tr>
                            </table>
                        </div>
                            </div>
                            <div class="col-md-6">
                        <div class="mb-3">
                            <label class="small mb-1">Address</label>
                            <table>
                                <tr>
                                    <td><?php echo $resul['address'];?></td>
                                </tr>
                            </table>
                        </div>
                            </div>
                            </div>

 
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1">Phone number</label>
                                <table>
                                <tr>
                                    <td><?php echo $resul['contact'];?></td>
                                </tr>
                                </table>
                            </div>
                            <!-- Form Group (birthday)-->
                            <div class="col-md-6">
                                <label class="small mb-1">Birthday</label>
                                <table>
                                <tr>
                                    <td><?php echo $resul['dob'];?></td>
                                </tr>
                            </table>
                            </div>
                        </div>
                                <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#editmodal">Edit Profile</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script>
$(document).on('submit', '#editdetails', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("edit_details", true);
            console.log(formData);
            $.ajax({
                type: "POST",
                url: "insert.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorparentsMessage').removeClass('d-none');
                        $('#errorparentsMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorparentsMessage').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
                        
                        //$('#editmodal').modal('hide');
                        $('#editdetails')[0].reset();
                        location.reload();

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

</script>


</body>
</html>