<?php
if (isset($_POST['update'])) {
    $update = htmlspecialchars(trim($_POST['update']));
        $pass = "new";
    $conn = mysqli_connect('localhost', 'root', '', 'test');
    // Read data dari database

    $query = "SELECT * FROM data WHERE id = $update";

    // Mengambil data dari database
    $result = $conn->query($query);

    // Mengecek jika ada data
    if ($result->num_rows > 0) {

        // Menjadikan data sebagai array
        $row = $result->fetch_assoc();
        list($id, $name, $class, $age, $password) = array_values($row);
    } else {
        $row = "0 results";
        echo $row;
    }
    $conn->close();




} else {
    $update = null;
    $pass = "";
    $id = "";
    $name = "";
    $class = "";
    $age = "";
    $password = "";
    
}
        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

    <!-- Title -->
    <title> Azira - Premium dashboard ui bootstrap rwd admin html5 template </title>

    <!--- Favicon --->
    <link rel="icon" href="../../../azira/assets/img/brand/favicon.png" type="image/x-icon" />

    <!-- Bootstrap css -->
    <link href="../../../azira/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style" />

    <!--- Icons css --->
    <link href="../../../azira/assets/css/icons.css" rel="stylesheet">

    <!--- Style css --->
    <link href="../../../azira/assets/css/style.css" rel="stylesheet">
    <link href="../../../azira/assets/css/plugins.css" rel="stylesheet">

    <!--- Animations css --->
    <link href="../../../azira/assets/css/animate.css" rel="stylesheet">
    
</head>

<body class="main-body bg-dark login-img">

    <!-- Loader -->
    <div id="global-loader">
        <img src="../../../azira/assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- page -->
    <div class="page">

        <!-- main-signin-wrapper -->
        <div class="my-auto page page-h">
            <div class="main-signin-wrapper">
                <div class="main-card-signin d-md-flex">
                    <div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white">
                        <div class="my-auto authentication-pages">
                            <div>

                                <h1>Digital Library</h1>
                                <img class=" m-0 mb-4 rounded-10" alt="logo" src="https://media.istockphoto.com/id/1184299091/vector/mouse-connected-to-a-book-icon-trendy-vector-thin-line-illustration-for-concepts-of-online.jpg?s=612x612&w=0&k=20&c=lm7d-y6L6tj35ETOedsG-hLL1tU9D1FzzRbZ-y3LmaM=" alt="">
                                <h5 class="mb-4">Welcome to digital library</h5>
                                <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
                                <a id="back-link" href="" class="btn btn-outline-light text-light">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="sign-up-body wd-md-50p">
                        <div class="main-signin-header">
                            <h2>Welcome!</h2>
                            <h4>Please Register with Digital Library</h4>
                            <form action="data.php" method="post">
                                <div class="form-group">
                                    <label>Username</label> <input value="<?= $name  ?>" name="username" class="form-control" placeholder="Enter your username" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>Class</label> <input value="<?= $class ?>" name="class" class="form-control" placeholder="Enter your class" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label> <input name="password" class="form-control" placeholder="Enter your <?php echo $pass?> password" type="password" required>
                                </div>
                                <div class="form-group">
                                    <label>Age</label> <input value="<?= $age ?>" name="age" class="form-control" placeholder="Enter your Age" type="number" required>
                                </div>
                                <button value="<?= $update ?>" name="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                        </div>
                        <div class="main-signup-footer mg-t-10">
                            <p>Already have an account? <a href="">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page closed -->
    <!-- /main-signin-wrapper -->

    <script src="../../../azira/assets/plugins/jquery/jquery.min.js"></script>
    <!--- JQuery min js --->

    <!--- Bootstrap Bundle js --->
    <script src="../../../azira/assets/plugins/bootstrap/popper.min.js"></script>
    <script src="../../../azira/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!--- Ionicons js --->
    <script src="../../../azira/assets/plugins/ionicons/ionicons.js"></script>

    <!--- Moment js --->
    <script src="../../../azira/assets/plugins/moment/moment.js"></script>

    <!--- Eva-icons js --->
    <script src="../../../azira/assets/js/eva-icons.min.js"></script>

    <!--themecolor js-->
    <script src="../../../azira/assets/js/themecolor.js"></script>

    <!--- Custom js --->
    <script src="../../../azira/assets/js/custom.js"></script>

    <!-- Main js -->
    <script src='../../Dashboard/main.js'></script>

</body>

</html>