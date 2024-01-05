<?php
include ('conn_db.php');
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

    <title>Select Data</title>
</head>

<body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
    <div class="cotainer">
        <div class="card" style="width: 90rem;">
            <div class="card-body">
                <div class="section-header d-flex justify-content-between">
                    <h5 class="card-title text-uppercase">Select Data</h5>
                    <a class="btn btn-primary btn-small" href="insert.php">Add Data</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">គោត្តនាម </th>
                            <th scope="col">អក្សរឡាតាំង</th>
                            <th scope="col">អ៊ីម៉ែល</th>
                            <th scope="col">ភេទ</th>
                            <th scope="col">ថ្ងៃ ខែ ឆ្នាំ</th>
                            <th scope="col">ទីកន្លែងកំណើត</th>
                            <th scope="col">តំណែង</th>
                            <th scope="col">លេខទូរស័ព្ទ</th>
                            <th scope="col">Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    $select = "SELECT * FROM imployee";
                    $result = $conn->query($select);
                    if($result->num_rows>0){
                        $cnt = 1;
                        while($row = $result->fetch_assoc()){
                            ?>
                        <tr>
                            <td><?php echo $cnt?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['english']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['sex']?></td>
                            <td><?php echo $row['birthday']?></td>
                            <td><?php echo $row['address']?></td>
                            <td><?php echo $row['position']?></td>
                            <td><?php echo $row['phone']?></td>
                            <td>
                                <a href="edit.php">Edit</a>
                                <a href="">Delete</a>
                            </td>
                        </tr>
                        <?php
                        $cnt=$cnt+1;

                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>