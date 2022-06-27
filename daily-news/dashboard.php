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

if($mysqli->connect_errno == 0) {
    // READ
    $sql = "SELECT * FROM `articles` ORDER BY id DESC";
    $result = $mysqli->query($sql);
    $results = [];
    
    if($result->num_rows) {
        while($row = $result->fetch_assoc()) {
            $results[] = $row;
        }
    } else {
        echo "Table is empty!";
    }

    // search form
}


//delete
if(isset($_GET['action']) && isset($_GET['id'])) {
    if($_GET['action'] == "delete") {
        $ids = $_GET['id'];
        $sql = "DELETE FROM `articles` WHERE `id`=?";
        $stmt = $mysqli->prepare($sql);
        $stmt->execute([$ids]);
        
        if($stmt->execute([$ids])) {
            header("Location: ?action=delete&status=1");
        } else {
            header("Location: ?action=delete&status=0");
        }
    }
}

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
<body>
    

<!-- 
navbar
-->

    <nav>
        <a href="#"><img src="./images/logo-nobg.png" alt="logo"/></a>
        <p><?php echo date("d/m/Y"); ?></p>
        <a id="sign-in" href="?action=logout">Log out</a>
    </nav>
   <div class="btn-c">
    <a class="btn btn-success" href="add.php">Add article</a> 
   </div>
<hr>
<h3 style="text-align: center">Dashboard</h3>

<hr/>
<h1>News table:</h1>
    <hr/>
    <?php if(count($results )): ?>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>image</th>
            <th>description</th>
            <th>category</th>
            <th></th>
        </tr>
        <?php foreach($results as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['title'] ?></td>
            <td><?= $row['image'] ?></td>
            <td><?= $row['description'] ?></td>
            <td><?= $row['category'] ?></td>
            <td><a href="?action=delete&id=<?= $row['id'] ?>" class="btn btn-sm btn-link">
               Delete
             </a></td> 
        </tr>
         <?php endforeach; ?>
    </table>
</div>
<?php endif; ?>

</body>
</html>