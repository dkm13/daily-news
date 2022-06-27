<?php

session_start();

$mysqli = new mysqli("localhost", "root", "", "daily-news");

     //cookies
if(isset($_COOKIE['is_logged_in'])){
    if(isset($_COOKIE['user_email'])) {
        // echo "Welcome " . $_COOKIE['user_email'] . " " . '<a href="?action=logout">Logout</a>';
        // echo "<br/> You are the administartor";
    }
}else{
    header("location: signin.php");
}

if(isset($_GET['action'])){
    if($_GET['action'] === "logout"){
        unset($_SESSION['user_email']);
        unset($_SESSION['is_logged_in']);
        session_destroy();

        setcookie("user_email", null, time()-1);
        setcookie("is_logged_in", null, time()-1);

        header("location: signin.php");
    }
}


//db
//create
if(isset($_POST['add_btn'])){
    $title = $_POST['title'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    // if(isset($fullname) && !empty($fullname) && isset($diagnose) && !empty($diagnose) && isset($location) && !empty($location) && isset($number) && !empty($number) && isset($date) && !empty($date) && isset($price) && !empty($price)) {
        $sql = "INSERT INTO `articles` (`title`, `description`, `image`, `category`) VALUES ('$title', '$description', '$image', '$category')";
        if($mysqli->query($sql)) {
           header("location: dashboard.php");
        }else{
            echo "something went wrong";
        }
    // }else{
    //     echo "please fill all the fields";
    // }
}


//delete

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/dashboardd.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Daily-news</title>
</head>
<body class="text-center">
    

<!-- 
navbar
-->

    <nav>
        <a href="#"><img src="./images/logo-nobg.png" alt="logo"/></a>
        <p><?php echo date("d/m/Y"); ?></p>
        <a id="sign-in" href="?action=logout">Log out</a>
    </nav>
    <hr/>

    <a href="dashboard.php">Back to dashboard</a>

    <hr/>

    <main class="form-signin w-100 m-auto">
    <form method="POST" class="log">
        <h1 class="h3 mb-3 fw-normal">Please Fill all the fields</h1>

        <div class="form-floating">
            <input name="title" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Title</label>
        </div>
        <div class="form-floating">
            <textarea style="margin-left: 10px" class="form-control" name="description" id="floatingPassword" required></textarea>
            <label for="floatingPassword">Description</label>
        </div>
        <div class="form-floating">
            <input name="image" type="text" class="form-control" id="floatingPassword" placeholder="Image/path" required>
            <label for="floatingPassword">Image</label>
        </div>
        <!-- <div class="form-floating"> -->
            <label>Select category: </label>
            <select style="margin-left: 10px" name="category" class="form-select" required>
                <option selected></option>
                <option value="lajme">Lajme</option>
                <option value="bote">Botë</option>
                <option value="politike">Politikë</option>
                <option value="ekonomi">Ekonomi</option>
                <option value="sport">Sport</option>
                <option value="shendetesi">Shendetesi</option>
                <option value="teknologji">Teknologji</option>
            </select>
        <!-- </div> -->
        <br/>
            <button style="margin-left: 10px" class="w-100 btn btn-lg btn-primary" name="add_btn" type="submit">Add</button>
    </form>
    </main>

</body>
</html>