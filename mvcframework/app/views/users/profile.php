<html lang="en">
    
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/profile.css">
<?php  
require APPROOT . '/views/includes/navigation.php';
?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="container">
        <div class="picture">
            <br>
            <br>
            <br>
            <div class="user-avatar">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin" class="pic">
            </div>
            <div class="form-group">
            <input type="file" id="profile_Picture" name="profile_Picture"></div>
        </div>
        <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3 class="mb-50 text-default">Personal Details</h6>
                    </div>
                    <form action="<?php echo URLROOT;?>/users/profile" method='POST'> 
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="firstName" class="col-form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="Fname" value="<?php echo $_SESSION['First_Name'] ;?>">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="lastname" class="col-form-label">Last Name</label>
                            <input type="text" class="form-control"  id="lastname" name="Lname" value="<?php echo $_SESSION['Last_Name']; ?>">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="phone" class="col-form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="Number" value="<?php echo $_SESSION['User_Number']; ?>">
                        </div>
                    </div>
                    
                </div>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="companyName" class="col-form-label">Company Name</label>
                            <input type="name" class="form-control" id="companyName" name="Bname" value="<?php echo $_SESSION['Brand_Name']; ?>">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6  col-12">
                        <div class="form-group">
                            <label for="Email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="Email" name="Email" value="<?php echo $_SESSION['User_Email']; ?>">
                        </div>
                    </div>
                    
                
                    </div>
                </div>
                <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="text-right">
                            
                            <button type="submit" id="submit" name="Password" class="btn btn-primary">Update</button>


                        </form>
<form action = "<?php echo URLROOT;?>/users/delete" method = 'POST' >
<button type="submit" id="submit" name="Delete" class="btn btn-primary">Delete</button>

</form>
                        </div>
                    </div>
                </div>
            </div>

            
        
        </div>
        </div>
        </div>

