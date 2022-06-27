-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: daily-news
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'Nuk miratohet Projektligji që lejon tërheqjen e kursimeve pensionale nga Trusti','Deputetët e Kuvendit të Kosovës nuk kanë miratuar në parim Projektligjin që lejon tërheqjen e kursimeve nga Fondi Pensional (Trusti).\r\n\r\nKundër kësaj kanë votuar deputetët Lëvizjes Vetëvendosje\r\n\r\nNga 102 deputetë në sallë, 44 votuan për, 57 kundër dhe 1 abstenim.','./news-img/projektligji-trusti.jpg','politike'),(4,'Kosovës i thellohet deficiti tregtar, brenda një viti rritet rreth 20 për qind','Deficiti tregtar i Kosovës gjatë muajit maj krahasuar me periudhën e njëjtë të vitit të kaluar është thelluar për 20 për qind.\r\n\r\nKështu thuhet në raportin “Statistikat e tregtisë së jashtme të mallrave, maj 2022”, prezantuar nga Agjencia e Statistikave të Kosovës (ASK)\r\nASK shton se eksporti mbulon importin për 17.1 për qind.','./news-img/deficiti.jpg','ekonomi'),(5,'Martial rikthehet te Man Utd nga huazimi, por Djajtë e Kuq e nxjerrin në shitje','Anthony Martial ka pasur një huazim gjashtë mujor te Sevilla, por pa sukses.\r\n\r\nSulmuesi francez iu bashkua skuadrës së madhe spanjolle për të pasur më shumë hapësira dhe për të luajtur më shumë, por pa arritur të lë gjurmë në elitën e futbollit spanjoll.\r\n\r\n','./news-img/martial.jpg','sport'),(7,'NATO pritet të bie dakord për ‘rinovimin më të madh të mbrojtjes që nga Lufta e Ftohtë’ – katër hapa që pritet t’u jepet drita jeshile','NATO duket se do të bjerë dakord javën e ardhshme për “rinovimin” më të madh të mbrojtjes së saj që nga Lufta e Ftohtë, duke përfshirë një zgjerim të madh të një force prej 40,000 trupash në gatishmëri për t’iu përgjigjur në një krizë.\r\n','./news-img/nato.jpg','bote'),(9,'Bordi i Twitterit këshillon aksionarët të votojnë pro shitjes së rrjetit social te Musk','Bordi i drejtorëve të Twitterit u ka rekomanduar njëzëri aksionarëve të kompanisë së medias sociale të votojnë për të miratuar shitjen e saj te Elon Musk.\r\n\r\nTwitter (TWTR) planifikon të mbajë një mbledhje speciale të aksionarëve rreth një votimi mbi blerjen, një nga hapat përfundimtarë të nevojshëm për mbylljen e marrëveshjes, në një datë të pazbuluar në muajt e ardhshëm, raporton cnn.','./news-img/twitter-musk.png','teknologji'),(12,'Samiti që nuk solli asgjë të re: Ballkani “rebelohet” ndaj BE-së','BE-ja u dha një tjetër zhgënjim vendeve të Ballkanit Perëndimor. Teksa i hapi rrugë Ukrainës për anëtarësim, ajo mbajti në vendnumëro Shqipërinë e Maqedoninë e Veriut të bllokuara nga Bullgaria.\r\n\r\nNdryshe nga ç’paralajmëruan pak ditë më parë, drejtuesit politikë të Shqipërisë, Maqedonisë së Veriut dhe Serbisë nuk e anuluan pjesëmarrjen e tyre në samitin mes Bashkimit Evropian dhe vendeve të Ballkanit Perëndimor, i cili u zhvillua në Bruksel më 23 qershor.\r\n\r\n','./news-img/samiti-eu.png','politike'),(13,'Ministri gjerman i Ekonomisë shpall gjendjen e emergjencës','Gjermania hyn në fazën 2 të planit të saj emergjent të gazit pasi Rusia ngadalëson furnizimin. Gjermania kërkon të reduktojë kërkesën për gaz për të shmangur mungesat afatgjata, ndërsa Rusia po ngadalëson furnizimin me gaz. Si rezultat, çmimi i gazit për konsumatorët mund të rritet edhe më shumë.\r\n\r\nMinistri gjerman i Ekonomisë, Robert Habeck njoftoi të enjten se vendi do të hyjë në fazën 2 të planit të tij të emergjencës me tre faza të gazit.','./news-img/ministri-gjerman.jpg','ekonomi'),(15,'Bayern Munich i thotë ‘Jo’ transferimit të Ronaldos','Bayern Munich e ka përjashtuar veten nga gara për nënshkrimin e Cristiano Ronaldos pasi e ardhmja e tij në Manchester United është vënë në dyshim.\r\n\r\nGjigantët gjermanë nuk po kërkojnë ta sjellin portugezin në Mynih, sipas BILD, me thashethemet që po qarkullojnë vetëm disa ditë pasi Bayern transferoi Sadio Manen nga Liverpooli.','./news-img/bayern-ronaldo.png','sport'),(16,'Real Madridi synon të bëjë ‘çmenduri’ për të transferuar Sonin nga Tottenhami','Real Madrid thuhet se e ka identifikuar Heung-min Sonin si një objektiv kyç këtë verë, ndërsa ata kërkojnë të forcojnë opsionet e tyre sulmuese.\r\n\r\nKoreano-jugori shijoi një vit të spikatur në Ligën Premier për Tottenhamin – duke shënuar 23 gola në rrugën e tij drejt këpucës së artë, e cila u nda me sulmuesin e Liverpoolit, Mohamed Salah.','./news-img/real-son.jpg','sport'),(17,'Manchester City arrin marrëveshje me Leeds për transferimin e Kalvin Phillips','Kalvin Phillips ka qenë objektivi kryesor i Manchester Cityt për repartin e mesfushës.\r\n\r\nMesfushori anglez pëlqehet shumë nga trajneri Pep Guardiola i cili ka kërkuar nga drejtuesit e klubit transferimin e tij.\r\nE kampionët në fuqi të Anglisë kanë bërë hapa para për transferimin e anglezit, pasi tanimë kanë bërë një ofertë zyrtare në drejtim të Leeds United, ofertë që është pranuar nga klubi aktual i Phillips.','./news-img/philips-city.jpg','sport'),(23,'Çfarë është samiti ekonomik G7 dhe kush merr pjesë aty?','Samiti i G7-së zhvillohet nga 26-28 qershor nën presidencën gjermane, si kryesuese e radhës. Po me çfarë merret ky forum jozyrtar por me kaq peshë? “Grupi Shtatë” përfshin Gjermaninë, Francën, Britaninë e Madhe, Italinë, Japoninë, Kanadanë dhe Shtetet e Bashkuar të Amerikës. Rusia ka qenë pjesë e këtij grupi nga viti 1998 deri më 2014 dhe ky grup asokohe quhej G8-ta. Por Rusia u përjashtua për shkak të aneksimit të Krimesë.','./news-img/g7.jpg','ekonomi'),(25,'Me rikthimin e Lukakut, ndryshon edhe stili i lojës së Interit – si mund të rreshtohen Nerazzurët','Interi duket si një makinë e përsosur, por edhe Ferrari më i mirë mund të ketë probleme me motorin kur trupi rëndohet shumë. Rikthimi i Romelu Lukakut te Nerazzurët ka ridizenjuar strukturën taktike të skuadrës duke rikthyer në qendër të planit teknik të Simone Inzaghit një qendërsulmues me fizikun e Christian Vierit, sulmuesit më të mirë të 30 viteve të fundit.','./news-img/lukaku-inter.jpg','sport'),(26,'NASA lëshon raketën e parë nga porti hapësinor komercial australian','NASA ka lëshuar me sukses një raketë nga Territori Verior i largët i Australisë, duke bërë lëshimin e komercial të agjencisë jashtë Shteteve të Bashkuara.\r\n\r\nSipas Equatorial Launch Australia (ELA), zhvilluesi, pronari dhe operatori i qendrës, raketa shpërtheu në mesnatën e kaluar të së hënës nga Qendra Hapësinore e Arnhem në Rrafshnaltën Dhupuma, pranë qytezës Nhulunbuy.\r\n\r\nNgjarja e së hënës gjithashtu bëri histori për Australinë si nisja e parë komerciale në hapësirë në vend.\r\n\r\nAi ishte i pari nga tre lëshimet, me dy të tjera të planifikuara për 4 korrik dhe 12 korrik.','./news-img/nasa.jpg','bote');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-27 13:29:30
