<!DOCTYPE html>
<html>
<head>
    <title>CRUD </title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css';?>">
</head>
<body>
    
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand"> CRUD Application</a>
        </div>
    </div>
    <div class="container">
        <h3 class="mt-5 p-2 text-center">View User</h3></h3>
        
        <?php  $success = $this->session->userdata('success');
            if($success !="")  {?>
        <div class="message">
           <p class="alert alert-success"><?= $success ?></p>
            <?php } ?>
        <hr height:10%>
        <div class="text-right mb-2">
            <a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-outline-primary ">Add</a>
        </div>
        <table class="table table-striped table-hover">
            <tbody>
            <thead class="thead-dark">
            <th class="">ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>DATE</th>
            <th>Action</th>
            </thead>
            <?php  if(!empty($users)){ foreach($users as $user){?> 
                <tr>
                    <td> <?php echo $user['user_id'] ?></td>
                    <td> <?php echo $user['name'] ?></td>
                    <td> <?php echo $user['email'] ?></td>
                    <td> <?php echo $user['created_at'] ?></td>
                    <td colspan="2">
                        <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id'];?>" class="text-primary">Edit</a> 
                        <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id'] ?>" class="text-danger">Delete</a></td>
                </tr>
            <?php   }}  ?>

            </tbody>
       
        </table>
        
    </div>
    
</body>
</html>