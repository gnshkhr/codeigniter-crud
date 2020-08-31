<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css';?>">
</head>
<body>
    
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand"> CRUD Application</a>
        </div>
    </div>
    <div class="container">
        <h3 class="mt-5 p-2 text-center">Create User</h3>
        <form method="POST" action="<?php echo base_url().'index.php/user/create' ?>">
            <div class=" form-group ">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" aria-describedby="emailHelp" placeholder="Enter email">
                <small class="text-danger"><?php echo form_error('email'); ?></small>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                <input type="text" name="name"  class="form-control" value="<?php echo set_value('name'); ?>" placeholder="Enter Name">
                <small class="text-danger"><?php echo form_error('name'); ?></small>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <a  class="btn btn-danger"  href="<?php echo base_url().'index.php/user/index';?>">Cancel</a>

        </form>
    </div>
    
</body>
</html>