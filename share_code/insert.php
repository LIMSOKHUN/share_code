<?php
    include('conn_db.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $english = $_POST['english'];
        $email = $_POST['email'];
        $sex = $_POST['sex'];
        $birthday = $_POST['birthday'];
        $address = $_POST['address'];
        $position = $_POST['position'];
        $phone = $_POST['phone'];

        $query_insert = "INSERT INTO imployee (name,english,email,sex,birthday,address,position,phone)
        VALUES ('$name','$english','$email','$sex','$birthday','$address','$position','$phone')";

        if($conn->query($query_insert)==true){
         echo "<script>
         alert('Insert SuccessFull');
         document.location.href='index.php';
         </script>";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <link rel="stylesheet" href="styles.css">
    <title>insert data</title>
</head>

<body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
    <div class="card" style="width: 60rem;">
        <div class="card-body">
            <h5 class="card-title text-uppercase">Insert data</h5>
            <?php
            if(isset($_POST['status'])){
                ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Hey !</strong> <?= $_SESSION['status']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
            unset($_SESSION['status']);
            }
            
            ?>
            <form action="" method="post">
                <div class="form-group mb-2">
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="label-control" for="">គោត្តនាម និង​​នាម <span
                                    class="text-danger">:*</span></label>
                            <input class="form-control" type="text" name="name" id="">
                        </div>
                        <div class="col-sm-6">
                            <label class="label-control" for="">អក្សរឡាតាំង <span class="text-danger">:*</span></label>
                            <input class="form-control" type="text" name="english" id="">
                        </div>
                    </div>
                </div>




                <div class="form-group mb-2">
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="label-control" for="">អ៊ីម៉ែល <span class="text-danger">:*</span></label>
                            <input class="form-control" type="email" name="email" id="">
                        </div>
                        <div class="col-sm-6">
                            <label class="label-control" for="">ភេទ <span class="text-danger">:*</span></label>
                            <div class="d-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault1"
                                        value="ប្រុស">
                                    <span class="form-check-label" for="flexRadioDefault1">
                                        ប្រុស
                                    </span>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault1"
                                        value="ស្រី">
                                    <span class="form-check-label" for="flexRadioDefault1">
                                        ស្រី
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="label-control" for="">ថ្ងៃ ខែ ឆ្នាំ កំណើត <span
                                    class="text-danger">:*</span></label>
                            <input class="form-control" type="date" name="birthday" id="">
                        </div>
                        <div class="col-sm-6">
                            <label class="label-control" for="">ទីកន្លែងកំណើត <span
                                    class="text-danger">:*</span></label>
                            <input class="form-control" type="text" name="address" id="">
                        </div>
                    </div>

                </div>
                <div class="form-group mb-2">
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="label-control" for="">មុខតំណែង <span class="text-danger">:*</span></label>
                            <input class="form-control" type="text" name="position" id="">
                        </div>
                        <div class="col-sm-6">
                            <label class="label-control" for="">លេខទូរស័ព្ទ <span class="text-danger">:*</span></label>
                            <input class="form-control" type="text" name="phone" id="">
                        </div>
                    </div>

                </div>
                <div class="button-group d-flex">
                    <button class="btn btn-primary" name="submit" type="submit">Insert Data</button>
                    <a class="btn btn-danger mx-2" href="index.php">Go Back</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>