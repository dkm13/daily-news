<?php 
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con, 'daily-news');
  $sql = "SELECT * FROM `articles` ORDER BY id DESC LIMIT 1";
  $latest_news = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/styles.css"/>
    <script src="https://kit.fontawesome.com/049c2c6974.js" crossorigin="anonymous"></script>
    <title>Daily - News</title>
</head>
<body>
    <nav>
        <a href="#"><img src="./images/logo-nobg.png" alt="logo"/></a>
        <p><?php echo date("d/m/Y"); ?></p>
        <a id="sign-in" href="signin.php">Sign in</a>
    </nav>
  
    <div class="categories">
       <ul>
          <li><a class="active" href="#">Lajme</a></li>
          <li><a href="category.php?category=bote">Bote</a></li>
          <li><a href="category.php?category=politike">Politike</a></li>
          <li><a href="category.php?category=ekonomi">Ekonomi</a></li>
          <li><a href="category.php?category=sport">Sport</a></li>
          <li><a href="category.php?category=shendetesi">Shendetesi</a></li>
          <li><a href="category.php?category=teknologji">Teknologji</a></li>
          <li><a href="#">Tjera</a></li>
       </ul>
    </div>
    <hr/>

    <!-- deal with it later -->
    <div class="search-form">
        <form method="GET" action="search.php">
            <input type="text" placeholder="Search.." name="search" />
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <hr/>

    <!-- ./news-img/ -->

    <section class="latest">
        <h3>Lajmet e fundit:</h3>
        <div class="latest-con">
            <div class="large-bn">
                <?php 
                    while($article_latest = mysqli_fetch_assoc($latest_news)):
                ?>
                <a href="article.php?id=<?= $article_latest['id'] ?>">
                    <img src="<?= $article_latest['image'];?>" alt="<?= $article_latest['title']; ?>" width='200px' height='200px'/>
                    <h4><?= $article_latest['title'];?></h4>
                    <p><b><?=$article_latest['category']; ?></b></p>
                    <!-- <a href="details.php?id=<?= $article_latest['id'] ?>"> -->
                <?php endwhile; ?>
                </a>
            </div>
            <div class="ribbon-bns">
                <?php 
                    $sqli = "SELECT * FROM `articles` ORDER BY id DESC LIMIT 1,3";
                    $latest_ribbon = $con->query($sqli);
                    while($ribbon_latest = mysqli_fetch_assoc($latest_ribbon)):
                ?>
                    <div class="rib-arc">
                      <a href="article.php?id=<?= $ribbon_latest['id']?>">
                        <img src="<?= $ribbon_latest['image'];?>" alt="<?= $ribbon_latest['title']; ?>" width='200px' height='200px'/>
                        <div id="break">
                            <h4><?= $ribbon_latest['title'];?></h4>
                            <p><b><?=$ribbon_latest['category']; ?></b></p>
                        </div>  
                    </a>
                    </div>
                    <?php endwhile; ?>
            </div>
        </div>
    </section>

    <section class="politike a">
        <h3>Politikë:</h3>
        <div class="pol-con b">
             <?php 
                    $sql_pol = "SELECT * FROM `articles` WHERE `category` LIKE 'politike' ORDER BY id DESC LIMIT 3 ";
                    $pol_latest = $con->query($sql_pol);
                    while($politics = mysqli_fetch_assoc($pol_latest)):
                ?>
                  <div class="pol-arc c">
                      <a href="article.php?id=<?= $politics['id']?>">
                        <img src="<?= $politics['image'];?>" alt="<?= $politics['title']; ?>" width='200px' height='200px'/>
                        <div id="break">
                            <h4 id="pol-h"><?= $politics['title'];?></h4>
                            <p><b><?=$politics['category']; ?></b></p>
                        </div>  
                    </a>
                    </div>
                    <?php endwhile; ?>
        </div>
    </section>


    <section class="ekonomi a">
        <h3>Ekonomi:</h3>
        <div class="eko-con b">
             <?php 
                    $sql_eko = "SELECT * FROM `articles` WHERE `category` LIKE 'ekonomi' ORDER BY id DESC LIMIT 3 ";
                    $eko_latest = $con->query($sql_eko);
                    while($economics = mysqli_fetch_assoc($eko_latest)):
                ?>
                  <div class="eko-arc c">
                      <a href="article.php?id=<?= $economics['id']?>">
                        <img src="<?= $economics['image'];?>" alt="<?= $economics['title']; ?>" width='200px' height='200px'/>
                        <div id="break">
                            <h4 id="pol-h"><?= $economics['title'];?></h4>
                            <p><b><?=$economics['category']; ?></b></p>
                        </div>  
                    </a>
                    </div>
                    <?php endwhile; ?>
        </div>
    </section>

    
    <section class="sport a">
        <h3>Sport:</h3>
        <div class="spo-con b">
             <?php 
                    $sql_sp = "SELECT * FROM `articles` WHERE `category` LIKE 'sport' ORDER BY id DESC LIMIT 3 ";
                    $sp_latest = $con->query($sql_sp);
                    while($sports = mysqli_fetch_assoc($sp_latest)):
                ?>
                  <div class="sp-arc c">
                      <a href="article.php?id=<?= $sports['id']?>">
                        <img src="<?= $sports['image'];?>" alt="<?= $sports['title']; ?>" width='200px' height='200px'/>
                        <div id="break">
                            <h4 id="pol-h"><?= $sports['title'];?></h4>
                            <p><b><?=$sports['category']; ?></b></p>
                        </div>  
                    </a>
                    </div>
                    <?php endwhile; ?>
        </div>
    </section>

    <section class="footer">
        <div class="footer-container">
            <div class="logo">
                <a href="#"><img src="./images/logo-nobg.png" alt="logo"/></a>
            </div>
            <div class="ul-pri">
                <ul>
                    <li><a href="#">Lajme</a></li>
                    <li><a href="category.php?category=bote">Bote</a></li>
                    <li><a href="category.php?category=politike">Politike</a></li>
                    <li><a href="category.php?category=ekonomi">Ekonomi</a></li>
                    <li><a href="category.php?category=sport">Sport</a></li>
                    <li><a href="category.php?category=shendetesi">Shendetesi</a></li>
                    <li><a href="category.php?category=teknologji">Teknologji</a></li>
                    <li><a href="#">Tjera</a></li>
                </ul>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; Copyright 2021 - <?php echo date("Y") ?></p>
    </footer>
</body>
</html>