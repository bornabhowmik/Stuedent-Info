<?php

include 'connection.php';

if (isset($_POST['submit'])) {
    $s_id = $_POST['s_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];


    $sql = "INSERT INTO tbl_student (s_id, s_name, s_mail, s_mobile, s_address)
        VALUES ($s_id, $name, $email, $mobile, $address)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Student Info</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center py-5">
        <form class="w-25">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" placeholder="John Doe" class="form-control" id="name" aria-describedby="nameHelp">
                <div id="nameHelp" class="form-text">Enter your name</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" placeholder="john@example.com" class="form-control" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Enter your email id</div>
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="tel" placeholder="+00817******01" class="form-control" id="mobile" aria-describedby="mobileHelp">
                <div id="mobileHelp" class="form-text">Enter your mobile number</div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text-area" placeholder="Nayasharak, Sylhet" class="form-control" id="address" aria-describedby="addressHelp">
                <div id="addressHelp" class="form-text">Enter your address</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>