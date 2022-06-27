<?php 
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'daily-news');
$search_query = $_GET['search'];

if(isset($search_query)){
}else{
    header("location: 404.php");
}
$sql = "SELECT * FROM `articles` WHERE `title` LIKE '%$search_query%' ORDER BY id DESC";
$results = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/category.css"/>
    <title>Daily news </title>
</head>
<body>
   <nav>
        <a href="index.php"><img src="./images/logo-nobg.png" alt="logo"/></a>
        <p><?php echo date("d/m/Y"); ?></p>
        <a id="sign-in" href="signin.php">Sign in</a>
    </nav>
    <div class="categories">
       <ul>
          <li><a class="active" href="#">Lajme</a></li>
          <li><a  href="category.php?category=bote">Bote</a></li>
          <li><a  href="category.php?category=politike">Politike</a></li>
          <li><a href="category.php?category=ekonomi">Ekonomi</a></li>
          <li><a  href="category.php?category=sport">Sport</a></li>
          <li><a  href="category.php?category=shendetesi">Shendetesi</a></li>
          <li><a  href="category.php?category=teknologji">Teknologji</a></li>
          <li><a href="#">Tjera</a></li>
       </ul>
    </div>
    <hr/>

    <!-- up STATIC -->
    <a href="index.php">Return to homepage</a>
<br/>

    <section class=" a">
        <h3>Search results for: <?php echo $search_query ?>:</h3>
        <div class=" b">
             <?php 
                    while($article = mysqli_fetch_assoc($results)):
                ?>
                  <div class=" c">
                      <a href="article.php?id=<?= $article['id']?>">
                        <img src="<?= $article['image'];?>" alt="<?= $article['title']; ?>" width='200px' height='200px'/>
                        <div id="break">
                            <h4 id="pol-h"><?= $article['title'];?></h4>
                            <p><b><?=$article['category']; ?></b></p>
                        </div>  
                    </a>
                    </div>
                    <?php endwhile; ?>
        </div>
    </section>

</body>
</html>