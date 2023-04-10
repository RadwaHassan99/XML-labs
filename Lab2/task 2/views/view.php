<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div class="container py-4 border my-5 mx-auto">
        <form method="post" action="index.php" class="w-75 mx-auto">
            <div class="mb-3">
                <label for="name" class="form-label" hidden>ID</label>
                <input type="text" class="form-control" name="id" id="id" hidden value="<?php echo $id?>">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $name?>">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $email?>">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $phone?>">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" value="<?php echo $address?>">
            </div>


            <div class="mb-3 text-center mt-5">
                <input type="submit" class="btn btn-primary me-1 rounded-1" name="action" value="prev">
                <input type="submit" class="btn btn-primary me-1 rounded-1" name="action" value="next">
                <button name="add" class="btn btn-primary"  type="button" class="btn btn-primary me-2 ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal">ِAdd</button>
                <input type="submit" class="btn btn-primary me-1 rounded-1" name="action" value="update">
            </div>
        </form>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <center><h4 class="modal-title" id="myModalLabel">Add</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                <form method="POST" action="index.php">
                    <div class="row form-group m-2">
                        <div class="col-sm-2">
                            <label class="control-label" style="position:relative; top:7px;">Name:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="row form-group  m-2">
                        <div class="col-sm-2">
                            <label class="control-label" style="position:relative; top:7px;">Phone:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="row form-group  m-2">
                        <div class="col-sm-2">
                            <label class="control-label" style="position:relative; top:7px;">Address:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="address">
                        </div>
                    </div>
                    <div class="row form-group  m-2">
                        <div class="col-sm-2">
                            <label class="control-label" style="position:relative; top:7px;">Email:</label>
                        </div>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="email">
                        </div>
                    </div>
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="add" class="btn btn-primary" >ِAdd</button>
                </div>
                </form>

    
            </div>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>