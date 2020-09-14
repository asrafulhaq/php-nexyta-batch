<?php include_once "app/autoload.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

    <?php
        /**
         * Student add form isset
         */
        if (isset($_POST['add'])) {

            // get values
            $name = $_POST['name'];
            $cell = $_POST['cell'];
            $email = $_POST['email'];
            $uname = $_POST['uname'];

            if ( empty($name) || empty($email) || empty($cell) || empty($uname) ) {
                $mess = "<p class=\" alert alert-danger \">All fields are required !<button class=\" close \" data-dismiss=\"alert\">&times;</button></p>";
            }else {

              $mess =  insert('users' , [
                       'name'        => $name,
                       'email'       => $email,
                       'cell'        => $cell,
                       'uname'       => $uname,
               ]);

            }



        }

    ?>

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>
                <?php echo $mess ?? '' ; ?>
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname" class="form-control" type="text">
					</div>
                    <div class="form-group">
                        <label for="">photo</label>
                        <input name="photo" class="form-control-file" type="file">
                    </div>
					<div class="form-group">
						<input name="add" class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>