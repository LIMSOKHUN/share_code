<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <link rel="stylesheet" href="style.css">
    <title>edit data</title>
</head>

<body class="d-flex vw-100 vh-100 align-items-center justify-content-center">
    <div class="card" style="width: 60rem;">
        <div class="card-body">
            <h5 class="card-title text-uppercase">Edit data</h5>
            <form action="" method="post">
                <div class="form-group mb-2">
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="label-control" for="">គោត្តនាម និង​​នាម <span
                                    class="text-danger">:*</span></label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="col-sm-6">
                            <label class="label-control" for="">អក្សរឡាតាំង <span class="text-danger">:*</span></label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <div class="row">
                        <div class="col-sm-6">
                            <label class="label-control" for="">អ៊ីម៉ែល <span class="text-danger">:*</span></label>
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="col-sm-6">
                            <label class="label-control" for="">ភេទ <span class="text-danger">:*</span></label>
                            <div class="d-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <span class="form-check-label" for="flexRadioDefault1">
                                        ប្រុស
                                    </span>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
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
                            <input class="form-control" type="text" name="" id="">
                        </div>
                        <div class="col-sm-6">
                            <label class="label-control" for="">ទីកន្លែងកំណើត <span
                                    class="text-danger">:*</span></label>
                            <input class="form-control" type="text" name="placeborn" id="">
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
                <button class="btn btn-primary" type="submit" name="submit">Insert Data</button>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>