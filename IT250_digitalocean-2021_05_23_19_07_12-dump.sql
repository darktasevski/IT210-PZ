-- MySQL dump 10.13  Distrib 8.0.25, for macos10.15 (x86_64)
--
-- Host: db-mysql-fra1-it250-do-user-2992259-0.b.db.ondigitalocean.com    Database: store
-- ------------------------------------------------------
-- Server version	8.0.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ 'f0e87a15-ba74-11eb-9f33-7a2640a5d043:1-85';

--
-- Table structure for table `artists`
--

DROP TABLE IF EXISTS `artists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artists` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `country` varchar(30) NOT NULL,
  `seller_rank` varchar(16) DEFAULT 'Bronze',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artists`
--

LOCK TABLES `artists` WRITE;
/*!40000 ALTER TABLE `artists` DISABLE KEYS */;
/*!40000 ALTER TABLE `artists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `name` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` varchar(30) DEFAULT NULL,
  `is_employee` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(600) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'user@user.com','Darko','Tasevski','Java Street 42','',0,'ee11cbb19052e40b07aac0ca060c23ee'),(2,'admin@admin.com','Admin','Admin','PHP Street 42','',1,'21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jewelry`
--

DROP TABLE IF EXISTS `jewelry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jewelry` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `description` varchar(1250) DEFAULT (_utf8mb4'Description missing'),
  `image_uri` varchar(400) NOT NULL,
  `artist_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jewelry`
--

LOCK TABLES `jewelry` WRITE;
/*!40000 ALTER TABLE `jewelry` DISABLE KEYS */;
INSERT INTO `jewelry` VALUES (1,' Kings Chain with Wolf Heads ',99,'This Kings Chain with Wolf Heads features a smart ring feature that allows you to take on and off pendants will ease.\r\n\r\nThe whole necklace is made out of 100% stainless steel. This means the metal will never wear or tarnish and last forever. \r\n\r\n60 cm long and 7mm x 7mm thick. The smart ring has a diameter of about 1 inch.\r\n\r\nThe Kings chain was worn by Viking kings as a status symbol as the name applies. This is 100% handmade with is a very time consuming processes put together link by link. Connects together with a lobster clamp.\r\n\r\nPlease be aware of how wide the hole on your Thor hammer is. Most Thor hammers and pendants can fit on this necklace as long as they are not too wide for the ring. If you have any questions about which items will fit on this chain, please email us for assistance.\r\n\r\nEdited...','https://cdn.shopify.com/s/files/1/0806/0421/products/kings-chain-with-wolf-heads-necklace_695x695.jpg?v=1581032613',0),(2,'Warding Veles Print Bear Paw Necklace Pendant',30,'*Pendant only* Chain not included, if you want a chain please checkout our chain/necklace collection right here: http://vikingjewelry.net/collections/chains-1 We recommend the Kings Chain (C007). Or the Kings Chain with Wolf Heads. Or the Cubed Chain (C002) if you want an thinner chain for this pendant.\r\n\r\nThe Veles Print pendant is a symbol honoring the pagan deity Veles, one of the main gods of the ancient world, who has the power to bestow  great blessings of good luck in travel, trade, and the law.\r\nAnyone who wears this amulet becomes a son or daughter of a great Veles.\r\nFor such people, all roads are open, and all risky activities gravitate to a successful outcome. ','https://cdn.shopify.com/s/files/1/0806/0421/products/warding-veles-print-bear-paw-necklace-pendant-vn085-necklace_695x695.jpg?v=1581037405',0),(3,'Mammen Thor Hammer Viking Mjolnir Pendant ',30,'Edit...','https://cdn.shopify.com/s/files/1/0806/0421/products/mammen-thor-hammer-viking-mjolnir-pendant-th050-necklace_695x695.jpg?v=1581037409',0),(4,'Helm of Vegvisir Raven Pendant',25,'This raven\'s skull has been engraved upon its head with the Vegvisir symbol, also know as the Runic Compass  ','https://cdn.shopify.com/s/files/1/0806/0421/products/helm-of-vegvisir-raven-pendant-vn050-necklace_695x695.jpg?v=1581033770',0),(5,'Vegvisir Amulet Necklace',52,'This silver amulet has the Vegvísir symbol in the center, surrounded the entire Elder Futhark runic alphabet.\r\n\r\nThe Vegvísir is an Icelandic magical symbol of navigation, also known as the...','https://cdn.shopify.com/s/files/1/0806/0421/products/vegvisir-amulet-necklace-vn077-necklace_695x695.jpeg?v=1581037350',0),(6,'The Nature Guardian Wolf',36,'The Nature Guardian Wolf necklace. Pure silver.','https://cdn.shopify.com/s/files/1/0806/0421/products/the-nature-guardian-wolf-vn038-necklace_695x695.jpg?v=1581031236',0),(7,' Viking Drinking Horn Mug ',150,'Feast like a Viking with this drinking horn mug made from real cattle horn. It holds at least 1 pint/16oz. of water, wine, mead, ale, beer, or other drink. It is advised to not use this tankard with hot liquids or it may effect the integrity of the seal that connects the base to the body of the tankard.\r\n\r\nThe exterior is polished to a smooth shiny surface. And the inside is coated with a food safe lacquer. \r\n\r\nSince these are made from natural materials, the color shades and sizes made vary from piece to piece.','https://cdn.shopify.com/s/files/1/0806/0421/products/viking-drinking-horn-mug-tankard-4_695x695.jpg?v=1602024320',0),(10,'Blue Eye Dragon Hammer',25,'','https://cdn.shopify.com/s/files/1/0806/0421/products/blue-eye-dragon-hammer-th049-necklace_695x695.jpg?v=1581033854',0),(11,'Silver Runic Weave Ring',30,'This ring is made out of the highest quality stainless steel that will never wear or tarnish.','https://cdn.shopify.com/s/files/1/0806/0421/products/5d78a125-fb86-4444-aaed-a04fa13b87d8_695x695.jpg?v=1617992706',0),(12,'Gold and Silver Vegvisir Ring',39,'This ring is made out of the highest quality stainless steel that will never wear or tarnish.','https://cdn.shopify.com/s/files/1/0806/0421/products/IMG_4419_695x695.jpg?v=1615499597',0),(13,' Bronze Valknut Odin\'s Spear Gungnir',40,'For a Viking warrior, the ultimate reward was to die bravely in battle.\r\n\r\nVikings that fell in this way would be taken to Valhalla, the hall of Odin, king of the Norse gods and the god of war.\r\n\r\nThere the warriors would feast and fight until Ragnarok, when they would be called on to fight in Odin\'s army in the final battle.\r\n\r\nThe Valknut, \"knot of warriors\", was the symbol of Valhalla.\r\n\r\nThis symbol of three interlocking triangles has shown up at Norse archaeological sites across Europe.\r\n\r\nThe symbol of Odin himself was the spear, which was also the most common weapon used by Viking warriors.\r\n\r\nOdin has a special spear, Gungnir, made for him by the dwarves, that would never miss its mark. \r\n\r\nSometimes Viking warriors would throw their swords over the heads of their enemies before battle.\r\n\r\nThis probably scared the opposing forces, and called on Odin\'s help in the battle to come.\r\n\r\nThis bronze amulet combines these symbols of Odin\'s Viking warriors in an unmistakably Viking design.\r\n\r\nThe spearhead, with the face of Odin at its base is imprinted on the front with the Valknut, and on the back with the name of Odin in runes. Ideal for the modern Viking warrior.','https://cdn.shopify.com/s/files/1/0007/6935/9938/products/CopiedeRefonteimageproduit800x800_7_-min_2048x2048.png?v=1598704948',0),(14,' Bronze Vegvisir Amulet',36,'With this amulet around your neck, you will absorb these qualities as you take on challenges outdoors, in your workplace, or at home.\r\n\r\nThe Vegversir is an Icelandic magical symbol of navigation, also known as the \"Runic Compass.\r\n\r\nThe coin is struck with an incuse design in which the letters are lowered rather than raised with the Vegvisir symbol in the center.\r\n\r\nAn old manuscript declares that \"If this sign is carried, one will never lose his way in storms or bad weather even when the way is not known.\"\r\n\r\nMake this ornament a part of your collection.','https://cdn.shopify.com/s/files/1/0007/6935/9938/products/BronzeVegvisirAmulet_67d87f07-2e35-4ee0-87ae-da46ec24d2ef_800x.jpg?v=1621334582',0),(15,'Freki & Geri Armring, Silver',160,'A twisted Viking armring in solid Sterling Silver 925 ending in the heads of Geri and Freki (Old Norse both meaning &#34;the ravenous&#34; or &#34;greedy one&#34;) - the two wolves which accompanied the Norse god Odin. Wear it around your wrist and push it up your arm if you need to get it out of the way.','https://cdn.shopify.com/s/files/1/1565/1123/products/2325_537x537.jpg?v=1587453113',0),(16,'Vegvisir Amulet, Silver',40,'This silver amulet has the Vegvísir symbol in the center, surrounded the entire Elder Futhark runic alphabet.\r\n\r\nThe Vegvísir is an Icelandic magical symbol of navigation, also known as the &#34;Runic Compass&#34;. The old Norse word translates to &#39;guidepost&#39; or &#39;direction sign&#39;. An old manuscript declares that &#34;if this sign is carried, one will never lose one&#39;s way in storms or bad weather, even when the way is not known&#34;. ','https://cdn.shopify.com/s/files/1/1565/1123/products/2267_537x537.jpg?v=1579589636',0),(17,'Bornholm Thor&#39;s Hammer, Bronze',160,'A reproduction in bronze of Thor’s Hammer found in Denmark.\r\n\r\nMjölnir (English: Crusher), is the hammer of Thor, the Norse God of Thunder. An amulet depicting Mjölnir is known as a “Thor’s Hammer” and it was worn by the Vikings as an amulet of protection and power. ','https://cdn.shopify.com/s/files/1/1565/1123/products/2070_537x537.jpg?v=1583821301',0),(18,'Troll Cross, Hand-forged',15,'Hand-forged troll cross in twisted iron.','https://cdn.shopify.com/s/files/1/1565/1123/products/2476_fdc85241-1e6c-49a5-bf88-2829168de562_537x537.jpg?v=1580194923',0),(19,'Yggdrasil Amulet, Silver',36,'Yggdrasil is an immense ash tree with branches that extend far into the heavens. It is central and very holy in Viking mythology, and the gods hold their courts there on daily basis. Warden trees linked to Yggdrasil were kept as late as the 19th century in venerated areas of Scandinavia. Offerings were made to the trees, that were considered to be guardians and bringers of luck. ','https://cdn.shopify.com/s/files/1/1565/1123/products/1003_c00e1bb4-79fc-43a3-96cb-49e9508972ce_537x537.jpg?v=1603202144',0);
/*!40000 ALTER TABLE `jewelry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` mediumint NOT NULL AUTO_INCREMENT,
  `total` int NOT NULL,
  `ordered_by` int NOT NULL,
  `item_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ordered_by` (`ordered_by`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`ordered_by`) REFERENCES `clients` (`id`),
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `jewelry` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reclamations`
--

DROP TABLE IF EXISTS `reclamations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reclamations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reclamations`
--

LOCK TABLES `reclamations` WRITE;
/*!40000 ALTER TABLE `reclamations` DISABLE KEYS */;
/*!40000 ALTER TABLE `reclamations` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-23 19:07:17
