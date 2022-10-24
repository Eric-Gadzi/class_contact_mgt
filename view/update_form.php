<?php 
    $pid = $_GET['pid'];
    $name = $_GET['pname'];
    $phone = $_GET['pphoned'];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        form{
            margin-left: 30%;
            margin-right: 30%;
        }

        h1{
            text-align: center;
        }
    </style>

    <title>Contact Form</title>
</head>

<body>
    <h1>ADD A CONTACT</h1>
    <form class="form-floating" action="../actions/update.php" method = "GET">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name = 'name' id="floatingInput" value = '<?php echo $name ?>' placeholder="eg: John Doe">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name = "phone" id="floatingPassword" value = '<?php echo $phone ?>' placeholder="Password">
            <label for="floatingPassword">Phone Number</label>
        </div>
        <div class="form-floating">
            <input type="hidden" class="form-control" name = "pid" id="floatingPassword" value = '<?php echo $pid ?>' placeholder="Password">
            <label for="floatingPassword">Phone Number</label>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Submit</button>
    </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>