<?php
    include "database.php";
    $obj = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 p-5">
                <form action="save.php" method="POST">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="ename" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Age:</label>
                        <input type="number" name="eage" placeholder="Age" class="form-control">
                    </div>

                    <!-- <div class="form-group">
                        <select name="ecity">
                            <?php
                                // $obj->select("citytb");
                                // $result = $obj->getResult();

                                // foreach($result as list("cid"=>$cid,"cname"=>$cname)){
                                //     echo "<option value='$cid'>$cname</option>";
                                // }
                            ?>
                            
                        </select>
                    </div> -->

                    <div class="form-group">
                        <label>City:</label>
                        <input type="text" name="ecity" placeholder="City" class="form-control">
                    </div>
                    <input type="submit" value="Save" name="save" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

</body>
</html>