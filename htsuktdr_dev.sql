-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2025 at 11:26 AM
-- Server version: 8.0.41
-- PHP Version: 8.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htsuktdr_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `bal`
--

CREATE TABLE `bal` (
  `uid` int NOT NULL,
  `bal` decimal(60,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bal`
--

INSERT INTO `bal` (`uid`, `bal`) VALUES
(9, 0.00),
(0, 0.00),
(14, 5000000.00),
(13, 0.00),
(15, 20000.00),
(16, 0.00),
(17, 4255000.00),
(18, 3000000.00),
(19, 6000000.00),
(20, 999412.00),
(21, 901982.00),
(23, 1000000.00),
(24, 5000000.00),
(25, 13000.00),
(8, 0.00),
(26, 2000000.00),
(27, 0.00),
(28, 461000.00),
(29, 10000000.00),
(30, 3000000.00),
(31, 25000.00),
(32, 5000000.00),
(33, 10000883.00),
(34, 700000.00),
(36, 0.00),
(37, 0.00),
(38, 2561791126.00),
(39, 50000000.00),
(40, 1117079.00),
(41, 248000.00),
(42, 25000000.00),
(43, 0.00),
(44, -440208873.97),
(45, 0.00),
(46, 15000000.00),
(47, 200121999992.00),
(48, 0.00),
(49, 0.00),
(50, 32322613.00),
(51, 500.00),
(52, 51919057.00),
(53, 498000.00),
(54, 0.00),
(55, 0.00),
(56, 50000000.00),
(57, 850000.00),
(59, 0.00),
(60, 19923456.00),
(61, 2000000.00),
(62, 160420.00),
(63, 0.00),
(64, 10000.00),
(65, 0.00),
(66, 1999995.00),
(67, 6000000.00),
(68, 0.00),
(69, 0.00),
(70, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `seed_phrase`
--

CREATE TABLE `seed_phrase` (
  `uid` int NOT NULL,
  `uname` varchar(60) NOT NULL,
  `phrase` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `seed_phrase`
--

INSERT INTO `seed_phrase` (`uid`, `uname`, `phrase`) VALUES
(14, 'Mike', 'Bebe ,Hebeb,Bdndn,Hsbeb,Ndndn, S s ,Bsbsb,Bbsb,Bsbsb,Bsbsb,Bsbe, Sns'),
(18, 'Welcome', 'Syrup,Heart,Item,Home,Family,End,Vibrant,Jacket,Drive,Type,Chalk,Focus'),
(19, 'Enock Ekwam ', 'banner ,party ,energy ,matrix ,cricket ,result ,fix,vibrant,balance ,survey ,save,text'),
(19, 'Enock Ekwam ', 'banner ,party ,energy ,matrix ,cricket ,result ,fix,vibrant,balance ,survey ,save,text'),
(20, 'Joebat', 'beef,prosper,shrimp,setup,void,clock,multiply,hero,great,forum,rough,orient'),
(20, 'Joebat', 'beef,prosper,shrimp,setup,void,clock,multiply,hero,great,forum,rough,orient'),
(21, 'Foefad', 'hero,keep,cinnamon ,two,post,unlock,unusual,boil,rifle,power,seed,goat'),
(23, 'Shingi ', 'diamond ,cheese ,senior ,leave ,drive ,throw ,traffic ,find ,air ,damage ,estate ,uphold '),
(24, 'nihan5508', 'visit,volcano,reward,orbit,lamp,zebra,twelve,giggle,tomorrow,pipe,idle,leader'),
(24, 'nihan5508', 'visit,volcano,reward,orbit,lamp,zebra,twelve,giggle,tomorrow,pipe,idle,leader'),
(24, 'nihan5508', 'visit,volcano,reward,orbit,lamp,zebra,twelve,giggle,tomorrow,pipe,idle,leader'),
(26, 'Gabri1967', 'mouse,person,behind,matter,roast,floor,dawn,educate,crew,oyster,fluid,shoulder'),
(26, 'Gabri1967', 'mouse,person,behind,matter,roast,floor,dawn,educate,crew,oyster,fluid,shoulder'),
(26, 'Gabri1967', 'mouse,person,behind,matter,roast,floor,dawn,educate,crew,oyster,fluid,shoulder'),
(28, 'korkeng', 'Call ,Chronic ,Vibrant ,Castle ,Fragile ,Float,Filter ,Casual ,Lizard ,Smart ,Hour,Oak'),
(28, 'korkeng', 'Call ,Chronic ,Vibrant ,Castle ,Fragile ,Float ,Filter ,Casual ,Lizard ,Smart ,Hour,Oak'),
(29, 'tommy163', 'multiply,lunar,recipe,umbrella,admit,march,evoke,admin,invest,Copy,outfit,Umbrella'),
(29, 'tommy163', 'multiply,lunar,recipe,umbrella,admit,march,evoke,admin,invest,Copy,outfit,Umbrella'),
(29, 'tommy163', 'multiply,lunar,recipe,umbrella,admit,march,evoke,artwork,invest,copy,option,Midnight'),
(29, 'tommy163', 'multiply,lunar,recipe,umbrella,admit,march,evoke,artwork,invest,copy,option,Midnight'),
(29, 'tommy163', 'multiply,lunar,recipe,umbrella,admit,march,evoke,admin,invest,Copy,outfit,Umbrella'),
(30, 'DamRob', 'combine,bring,wink,mom,century,patch,vital,enjoy,upset,health ,exhibit,clarify'),
(31, 'Adam', 'raven,best,mansion,profit,label,print,clean ,dry,fiction,soda,afraid,employ '),
(32, 'Alessio notaio', 'Ranch,Life,Hire,Nothing,Fuel,Impose,Adult,Allow,Clip,Clip,Cancel,Able'),
(33, 'Cedrington', 'Giraffe,Damage,Drip,Divert,Pole,Seat,Pottery,Net,Excite,Similar ,Arch ,Green '),
(34, 'Frank', 'melt,denial,pyramid,liquid,around,leopard,swallow,double,rack,trim,squeeze,enemy'),
(34, 'Frank', 'melt,denial,pyramid,liquid,around,leopard,swallow,double,rack,trim,squeeze,enemy'),
(37, 'Rabiou ', 'rain,repair,inch,design,tissue,wash,desk,order,maze,ten,strike,time'),
(38, 'Josemoe21', 'edit ,bus,left,hold,before,ramp,orphan,shine,assist ,roast,spy,vehicle '),
(39, 'Evez45', 'Lemon,Loan,Frog,Curious,Embrace,Nose,Wheel,Able,Autumn,Start,Hollow,Hurry'),
(39, 'Evez45', 'Lemon,Loan,Frog,Curious,Embrace,Nose,Wheel,Able,Autumn,Start,Hollow,Hurry'),
(40, 'mmbbnnoo', 'eyebrow,million,orchard,about,chair,essence,all,tray,wool,room,Panel,vast'),
(40, 'mmbbnnoo', 'eyebrow,million,orchard,about,chair,essence,all,tray,wool,room,Panel,vast'),
(40, 'mmbbnnoo', 'type,sniff,derive,dawn,food,act,wrestle,sick,Panel,girl ,zoo,artist'),
(41, 'dilmann', 'Exotic,Answer,Decide,Gallery,Tell,Hotel,Target,Domain,Grunt,Warm,Arm,Saddle'),
(41, 'dilmann', 'Exotic,Answer,Decide,Gallery,Tell,Hotel,Target,Domain,Grunt,Warm,Arm,Saddle'),
(43, 'saratsuaro', 'sock,salmon,poem,apart,beef,shoulder,fog,sadness,load,drip,such,bounce'),
(44, 'Josemoe21', 'panther ,aerobic,cash,dynamic ,moment,tag,perfect ,kiwi,dial,myself ,access ,clinic'),
(44, 'Josemoe21', 'devote ,cricket ,ticket ,exclude,repair,physical ,exhaust ,real,monkey ,term,stand,typical '),
(42, 'KnightofMalta1288812', 'Spell ,Oxygen ,Hire ,Mirror ,Train ,Tobacco ,Drum ,Pink ,Draw ,Chunk ,Torch ,Mirror'),
(47, 'Aung Hein ', 'ginger,viable,bunker,layer,tonight,erosion,fence,claw ,lake,staff,snow,chimney'),
(47, 'Aung Hein ', 'ginger,viable,bunker,layer,tonight,erosion,fence,claw ,lake,staff,snow,chimney'),
(47, 'Aung Hein ', 'ginger ,viable,bunker,layer,tonight ,erosion ,fence ,claw,lake ,staff,snow,chimney'),
(47, 'Aung Hein ', 'trick,wait,wagon,indoor,mask,physical,humble,rubber,ripple,announce,primary,ceilling'),
(50, 'Hifk78', 'Core,Elite,Couch,Use,Start,Swamp,Sponsor,Library,Coffee,Gauge,Yellow,Govern'),
(50, 'Hifk78', 'Recipe,Purity,Plug,Dog,Uncle,Keen,Olympic,End,Mistake,Meat,Honey,Buzz'),
(46, 'Alexsapp', 'Minor,Flash ,Weather ,Gym,Coast,Reason,Walnut ,Bargain ,Thunder ,Trigger ,Pull,Exercise '),
(52, 'Ttiiggaa ', 'slam,shift,that,nature,lady,oxygen,rebel,pave,great,indoor,vague,middle'),
(53, 'Eli12', 'Hi,Boy,Boy,Come,Come,Stop,Real,Is,Stop,Me,Work,Man'),
(56, 'Hoho35 ', 'Série ,Mother ,Gloom ,October ,Épisode ,Fiscal ,Câble ,Sing ,Valid ,Heiht ,Consider ,Basic '),
(57, 'veer1122', 'exactly,fall,stems,Where,Thus,Kind,series,Stick,heading,complex,second ,question'),
(60, 'GeovannaCL26', 'job,attack,bone,coconut,idle,pet,suffer,expand,problem,base,scare,unlock'),
(61, 'Gowsika ', 'eyebrow ,replace ,forward ,fiscal ,tired ,ameture ,measure ,hub ,usual ,client ,repeat ,tumble '),
(61, 'Gowsika ', 'hurry ,motion ,shift ,daring ,shy ,enhance ,roast ,impact ,need ,prevent ,sunny ,mountain '),
(51, 'Aung H', 'habit,rally,tank,primary,comfort,shallow ,remind,away,sunny,artefact,random,empty '),
(51, 'Aung H', 'habit,rally,tank,primary,comfort,shallow ,remind,away,sunny,artefact,random,empty '),
(51, 'Aung H', 'habit,rally,tank,primary,comfort,swallow,remind,away,sunny,artefact,random,empty'),
(51, 'Aung H', 'habit,rally,tank,primary,comfort,swallow,remind,away,sunny,artefact,random,empty'),
(62, 'Mehadi ', 'reduce,wild ,state ,age,secret ,truck ,always,second ,walnut ,bracket ,fan ,aerobic'),
(57, 'veer1122', 'elevator,narrow,feed,giraffe,key,kit,allow,found,armor,park,snack,ball'),
(57, 'veer1122', 'Climb,robot,apology,current,front,keep,galaxy,chimney,junk,race,narrow,canal'),
(63, 'Gonddal111', 'climb,robot,apology,current,front,keep,galaxy,chimney,junk,race,narrow,canal'),
(65, 'pastorgk', 'Swear,Proud,Nephew,Interest,business ,logic,sibling,vacant,raise,during,fragile,inspire'),
(66, 'Mikeyy', 'real,forest,join,Chimney ,venture,comfort,sponsor ,size,gentle ,next,Chalk ,lift'),
(49, 'htincholai', 'Born,Burma,Pathein,South,East,Asia,Growth,Live,United ,State ,America ,Present'),
(49, 'htincholai', 'Live,United,State,America,20years,Longterm,Born,Burma,Pathein,South,East,Asia'),
(60, 'GeovannaCL26', 'inherit,steak,time,buyer,genius,lens,immense,canal,donkey,carry,relief,plastic'),
(67, 'nisujan', 'protect,knee,virtual,other,dutch,donate,rescue,ladder,someone,crunch,frozen,uniform'),
(67, 'nisujan', 'protect,knee,virtual,other,dutch,donate,rescue,ladder,someone,crunch,frozen,uniform'),
(67, 'nisujan', 'protect,knee,virtual,other,dutch,donate,rescue,ladder,someone,crunch,frozen,uniform'),
(68, 'Dendi', 'diamond,benefit,ship,purse,brief,custom,dizzy,priority,vapor,grief,battle,luggage'),
(68, 'Dendi', 'diamond,benefit,ship,purse,brief,custom,dizzy,priority,vapor,grief,battle,luggage'),
(68, 'Dendi', 'diamond,benefit,ship,purse,brief,custom,dizzy,priority,vapor,grief,battle,luggage'),
(68, 'Dendi', 'diamond,benefit,ship,purse,brief,custom,dizzy,priority,vapor,grief,battle,luggage'),
(69, 'Harou Abdelaziz ', 'neutral ,trust ,popular ,enough ,crazy ,beef ,extend ,dinner,match,settle,sauce,asset '),
(69, 'Harou Abdelaziz ', 'neutral ,trust ,popular ,enough ,crazy ,beef ,extend ,dinner,match,settle,sauce,asset '),
(69, 'Harou Abdelaziz ', 'neutral ,trust ,popular ,enough ,crazy ,beef ,extend ,dinner,match,settle,sauce,asset '),
(69, 'Harou Abdelaziz ', 'neutral ,trust ,popular ,enough ,crazy ,beef ,extend ,dinner,match,settle,sauce,asset '),
(69, 'Harou Abdelaziz ', 'boss,inherit ,level ,primary, huge,fetch,edge,sample ,raise,sustain,crime ,marble'),
(64, 'Carlos Andres Mogrovejo Alvarado', 'family,donor,brief,main,blouse,deer,flag,cry,column,pilot,feel,table');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `uid` int NOT NULL,
  `uname` varchar(60) NOT NULL,
  `uemail` varchar(60) NOT NULL,
  `upwd` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`uid`, `uname`, `uemail`, `upwd`) VALUES
(13, 'Test01', 'testtt@gmail.com', 'test0101'),
(15, 'ErnestoJ', 'ernestojenny156@gmail.com', 'GoodGod147'),
(16, 'Zerober', 'zeroberto32500@gmail.com', 'kennedy21'),
(17, 'Kidi Boy', 'kidij1234@gmail.com', 'vumqA9-fupved-gidnaw'),
(18, 'Welcome', 'oupamacozomo@gmail.com', 'oupa@731013'),
(20, 'Joebat', 'joebat99@gmail.com', 'Beautymakoni_01'),
(21, 'Foefad', 'fadel_elfandi@yahoo.com', 'FadelElfandi!@2025'),
(22, '📝 + 1.921001 BTC.GET - https://graph.org/Binance-04-06-6?hs=', 'ajvazovaskijo@gomigoofficial.com', 'Ik8t1!jpRBLU'),
(24, 'nihan5508', 'nihan5508@gmail.com', '@tiger786Mn'),
(25, 'Gab', 'gabrieludo5247@gmail.com', 'KIDIboy@1'),
(26, 'Gabri1967', 'radunatalia922@gmail.com', 'Scorpion1026@'),
(28, 'korkeng', 'iamkeng@me.com', 'iamKeng69'),
(29, 'tommy163', 'artileschavez@gmail.com', 'cancun77'),
(30, 'DamRob', 'damianrobinson388@gmail.com', 'Abigail#1wife'),
(33, 'Cedrington', 'cedrington36@gmail.com', 'Laici@1021'),
(34, 'Frank', 'pay.radda@gmail.com', 'WiNBiG7898108$@'),
(35, 'Pobifii3 ', 'cedricalexander258@gmail.com', '05974619'),
(36, 'maxwell33@121', 'maxwellpobi121@gmail.com', '05974619'),
(37, 'Rabiou ', 'mamane1126@gmail.com', '112601Ra/'),
(41, 'dilmann', 'dilson.wdf@gmail.com', 'Arthur2013!'),
(43, 'saratsuaro', 'sarat.suaro@gmail.com', 'Sarat@1984'),
(45, 'Tom.njeru', 'onsetech@gmail.com', 'tomdigital@2013'),
(46, 'Alexsapp', 'sapp1111@proton.me', 'Biggbird3175'),
(48, 'Andretyrone77@gmail.com', 'ANDRETYRONE77@gmail.com', 'Dreyster555'),
(50, 'Hifk78', 'vesa.bergqvist@gmail.com', 'Mercedes78@'),
(51, 'Aung H', 'aheinshop@gmail.com', 'Kaung@123123'),
(52, 'Ttiiggaa ', 't.buchta0@gmail.com', 'Bb2020ta'),
(53, 'Eli12', 'ayahelijah385@gmail.com', 'Betking12$'),
(54, 'DRYFTHYF', '9pxaxuuxii@vafyxh.com', 'John1234&amp;'),
(55, 'Faith ', 'markykuwait@gmail.com', 'Mark@1433'),
(56, 'Hoho35 ', 'hocineidjga48@gmail.com', '20050962'),
(57, 'veer1122', 'veergondal112@gmail.com', 'Veer@gondal1'),
(59, 'Hugo Cardona', 'intercallhc@gmail.com', 'BMWX62025'),
(60, 'GeovannaCL26', 'geovannacl26@gmail.com', 'Nabiha-1126'),
(61, 'Gowsika ', 'mugowsika@gmail.com', 'mugunth@1968'),
(62, 'Mehadi ', 'mahdishemsu@gmail.com', 'Worker12$'),
(63, 'Gonddal111', 'bibiakhter1122@gmail.com', 'Veer@gondal1'),
(66, 'Mikeyy', 'redmoonlionz@gmail.com', 'qwerty123'),
(68, 'Dendi', 'boxpo662@gmail.com', 'Babang4231'),
(69, 'Harou Abdelaziz ', 'harouabdelaziz5@gmail.com', 'xxxx1991');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `uid` int NOT NULL,
  `txn_id` int NOT NULL,
  `uname` varchar(60) NOT NULL,
  `btc_wallet` varchar(90) NOT NULL,
  `amt` decimal(11,2) NOT NULL,
  `tm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `stat` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Processing'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`uid`, `txn_id`, `uname`, `btc_wallet`, `amt`, `tm`, `stat`) VALUES
(13, 1, 'Test01', 'Gszc', 200.00, '2025-04-11 11:10:39', 'Declined'),
(14, 2, 'Mike', 'bc1qmll3fcxy28gq97svl3chh93addgwwz3jnvkj7p', 5000000.00, '2025-04-11 11:15:40', 'Declined'),
(17, 3, 'Kidi Boy', 'bc1qmll3fcxy28gq97svl3chh93addgwwz3jnvkj7p', 5000000.00, '2025-04-11 14:12:11', 'Declined'),
(20, 4, 'Joebat', 'bc1q26yh3nzyrydj7ewq24xx5suwgp3s3x7vu8tn30', 900000.00, '2025-04-12 07:08:33', 'Declined'),
(20, 5, 'Joebat', 'bc1q26yh3nzyrydj7ewq24xx5suwgp3s3x7vu8tn30', 900000.00, '2025-04-12 07:09:23', 'Declined'),
(20, 6, 'Joebat', 'bc1q26yh3nzyrydj7ewq24xx5suwgp3s3x7vu8tn30', 999412.00, '2025-04-12 07:12:37', 'Declined'),
(21, 7, 'Foefad', 'bc1qgd3p3h22qutz02ejrkm9akgadje96x03tv0fr0', 450991.00, '2025-04-12 08:36:06', 'Declined'),
(21, 8, 'Foefad', 'bc1qgd3p3h22qutz02ejrkm9akgadje96x03tv0fr0', 450991.00, '2025-04-12 08:36:44', 'Declined'),
(21, 9, 'Foefad', 'bc1qgd3p3h22qutz02ejrkm9akgadje96x03tv0fr0', 450991.00, '2025-04-12 08:38:29', 'Declined'),
(17, 10, 'Kidi Boy', '17efDd7CwBg6PTL8HpS9ueLiLTQYqrZrtw', 5000000.00, '2025-04-12 09:58:54', 'Declined'),
(17, 11, 'Kidi Boy', '17efDd7CwBg6PTL8HpS9ueLiLTQYqrZrtw', 100.00, '2025-04-12 12:41:05', 'Declined'),
(23, 12, 'Shingi ', 'bc1q9ek3nx2u05nr8wrlmejsamwp7wr0aafh2feck6', 1000000.00, '2025-04-12 15:21:06', 'Declined'),
(23, 13, 'Shingi ', 'bc1q9ek3nx2u05nr8wrlmejsamwp7wr0aafh2feck6', 1000000.00, '2025-04-12 15:21:45', 'Declined'),
(23, 14, 'Shingi ', 'bc1q9ek3nx2u05nr8wrlmejsamwp7wr0aafh2feck6', 1000000.00, '2025-04-12 15:23:21', 'Declined'),
(17, 15, 'Kidi Boy', '17efDd7CwBg6PTL8HpS9ueLiLTQYqrZrtw', 500000.00, '2025-04-13 09:59:59', 'Approved'),
(17, 16, 'Kidi Boy', '17efDd7CwBg6PTL8HpS9ueLiLTQYqrZrtw', 200000.00, '2025-04-13 10:00:11', 'Approved'),
(17, 17, 'Kidi Boy', '17efDd7CwBg6PTL8HpS9ueLiLTQYqrZrtw', 40000.00, '2025-04-13 10:01:24', 'Approved'),
(17, 18, 'Kidi Boy', '17efDd7CwBg6PTL8HpS9ueLiLTQYqrZrtw', 5000.00, '2025-04-13 10:01:33', 'Approved'),
(26, 19, 'Gabri1967', 'bc1qn947zm2wlgqtx4nkasuve732q4qhdx4vfqlnxe', 700000.00, '2025-04-13 10:47:42', 'Declined'),
(26, 20, 'Gabri1967', 'bc1qn947zm2wlgqtx4nkasuve732q4qhdx4vfqlnxe', 700000.00, '2025-04-13 10:47:59', 'Declined'),
(26, 21, 'Gabri1967', 'bc1qn947zm2wlgqtx4nkasuve732q4qhdx4vfqlnxe', 700000.00, '2025-04-13 10:48:42', 'Declined'),
(26, 22, 'Gabri1967', 'bc1qn947zm2wlgqtx4nkasuve732q4qhdx4vfqlnxe', 700000.00, '2025-04-13 10:54:07', 'Declined'),
(26, 23, 'Gabri1967', 'bc1qn947zm2wlgqtx4nkasuve732q4qhdx4vfqlnxe', 7.00, '2025-04-13 10:58:06', 'Declined'),
(26, 24, 'Gabri1967', 'bc1qn947zm2wlgqtx4nkasuve732q4qhdx4vfqlnxe', 700000.00, '2025-04-13 10:58:46', 'Declined'),
(26, 25, 'Gabri1967', 'bc1q0zqfv0ah27m0dmrxdaudz2f2rxkp3mnddm0ln8', 10000.00, '2025-04-13 11:44:57', 'Declined'),
(26, 26, 'Gabri1967', 'bc1qmll3fcxy28gq97svl3chh93addgwwz3jnvkj7p', 10000.00, '2025-04-13 11:48:52', 'Declined'),
(28, 27, 'korkeng', '1PtkS8UJkG3nZXTDNnfzinjv6XyrxyM7wZ', 491000.00, '2025-04-13 13:37:51', 'Declined'),
(28, 28, 'korkeng', '1PtkS8UJkG3nZXTDNnfzinjv6XyrxyM7wZ', 491000.00, '2025-04-13 13:38:54', 'Declined'),
(26, 29, 'Gabri1967', '1Lz28sPwPuetkfjiuAs6uCVUstawrRcvqT', 10000.00, '2025-04-13 14:02:39', 'Declined'),
(29, 30, 'tommy163', 'bc1qqme2a4lldvecf0q5c2xcqz2yz72n77nepx39cg', 118.00, '2025-04-13 18:58:35', 'Declined'),
(30, 31, 'DamRob', 'bc1qynydy8xvfyz78m4934rvasmstsjp8z08auhja0', 1000000.00, '2025-04-13 20:22:53', 'Declined'),
(31, 32, 'Adam', 'bc1qhzy3q6snuhkgrsv765vpe289nqhszjqr9sw52j', 25000.00, '2025-04-14 02:42:22', 'Declined'),
(31, 33, 'Adam', 'bc1qhzy3q6snuhkgrsv765vpe289nqhszjqr9sw52j', 25000.00, '2025-04-14 02:43:29', 'Declined'),
(25, 34, 'Gab', '1NHSjaxadACTxXPbKiDw3afWUMnTcToiLG', 1500.00, '2025-04-14 07:24:07', 'Approved'),
(25, 35, 'Gab', '1NHSjaxadACTxXPbKiDw3afWUMnTcToiLG', 800.00, '2025-04-14 07:24:48', 'Declined'),
(25, 36, 'Gab', '1NHSjaxadACTxXPbKiDw3afWUMnTcToiLG', 500.00, '2025-04-14 07:25:58', 'Approved'),
(32, 37, 'Alessio notaio', 'bc1qn6f86hdrdmqqealw3xzw8x0gd5t9gjfqvj9a9m', 5000000.00, '2025-04-15 21:49:11', 'Declined'),
(33, 38, 'Cedrington', 'bc1qf3lz9rrf4wdhlq3f87rptjxw2vr4qcnun3wmru', 5000000.00, '2025-04-16 08:05:39', 'Declined'),
(34, 39, 'Frank', 'bc1qyfn0t5342m86ysdm8pcr7k5r7syukvx0457gf3', 300000.00, '2025-04-16 08:54:27', 'Declined'),
(34, 40, 'Frank', 'bc1qyfn0t5342m86ysdm8pcr7k5r7syukvx0457gf3', 300000.00, '2025-04-16 08:55:15', 'Declined'),
(38, 41, 'Josemoe21', 'bc1qz2pvyl8dttjedgq2qd5c9su4khmef8xle03ra9', 999999999.99, '2025-04-17 05:47:56', 'Declined'),
(25, 42, 'Gab', 'bc1qyly8cftyx7a9fpt7hlkmhm3vvu908hsqrrzwur', 2000.00, '2025-04-17 06:00:49', 'Approved'),
(25, 43, 'Gab', 'bc1qyly8cftyx7a9fpt7hlkmhm3vvu908hsqrrzwur', 1500.00, '2025-04-17 06:02:17', 'Approved'),
(39, 44, 'Evez45', 'bc1quedr4c3tjk54nu05x0z5pt4ffsq705upkc5q29', 100000.00, '2025-04-17 12:06:40', 'Declined'),
(40, 45, 'mmbbnnoo', 'bc1qp4nxruhhzsaaa6smefzz2lu7pn7zqmctt7v098', 1117079.00, '2025-04-17 12:13:37', 'Declined'),
(39, 46, 'Evez45', 'bc1quedr4c3tjk54nu05x0z5pt4ffsq705upkc5q29', 1500.00, '2025-04-17 12:14:11', 'Declined'),
(40, 47, 'mmbbnnoo', 'bc1pg7etdk9k7kyjxmg5zlg5ag5t85chcftkm5qvp2l4xwpm95w9gvfqzl8jqg', 1117079.00, '2025-04-17 12:27:38', 'Declined'),
(40, 48, 'mmbbnnoo', 'bc1qnq2t0ehxkwlw34c6lhf7lt3dcs2r809k90tvgu', 1117079.00, '2025-04-17 13:54:16', 'Declined'),
(41, 49, 'dilmann', 'bc1qrdh5x9lv389g24dte56gkf4r4h450v7d338c63', 248000.00, '2025-04-17 15:58:03', 'Declined'),
(41, 50, 'dilmann', 'bc1q0l8hcrt09wv8nem8w0aum75halfl8fm6ml9r35', 248000.00, '2025-04-17 16:01:06', 'Declined'),
(41, 51, 'dilmann', 'bc1qrdh5x9lv389g24dte56gkf4r4h450v7d338c63', 1.00, '2025-04-17 16:14:04', 'Declined'),
(41, 52, 'dilmann', 'bc1q0l8hcrt09wv8nem8w0aum75halfl8fm6ml9r35', 5000.00, '2025-04-17 17:31:38', 'Declined'),
(28, 53, 'korkeng', '1PtkS8UJkG3nZXTDNnfzinjv6XyrxyM7wZ', 10000.00, '2025-04-17 18:08:07', 'Approved'),
(41, 54, 'dilmann', 'bc1q0l8hcrt09wv8nem8w0aum75halfl8fm6ml9r35', 10000.00, '2025-04-17 20:18:40', 'Declined'),
(41, 55, 'dilmann', 'bc1q0l8hcrt09wv8nem8w0aum75halfl8fm6ml9r35', 1000.00, '2025-04-17 20:28:33', 'Declined'),
(39, 56, 'Evez45', '0x57fFD95761E8c7a18301C25e6204Ae67E0fB51af0x57fFD95761E8c7a18301C25e6204Ae67E0fB51af0x57fF', 100000.00, '2025-04-18 00:03:32', 'Declined'),
(44, 57, 'Josemoe21', 'bc1q57a7vkw2a8cz37fzfhj8vteeakxfg8jae4re7m', 500000.00, '2025-04-18 03:04:07', 'Approved'),
(41, 58, 'dilmann', 'bc1q0l8hcrt09wv8nem8w0aum75halfl8fm6ml9r35', 10000.00, '2025-04-18 14:51:05', 'Declined'),
(44, 59, 'Josemoe21', 'bc1qudusv3gvgd4edqzhyy9vmfzaz7a3tcj88r6puw', 999999999.99, '2025-04-19 06:20:33', 'Declined'),
(44, 60, 'Josemoe21', 'bc1qpwwnqytft23j6tacafn7rzutwqr60j0cyq686l', 999999999.99, '2025-04-19 06:27:00', 'Approved'),
(44, 61, 'Josemoe21', 'bc1qpwwnqytft23j6tacafn7rzutwqr60j0cyq686l', 999999999.99, '2025-04-19 06:34:55', 'Approved'),
(42, 62, 'KnightofMalta1288812', 'bc1qgzxjnufadccwq9yd4n8ht98sm44phfvrfurru7', 25000000.00, '2025-04-19 08:38:14', 'Approved'),
(20, 63, 'Joebat', 'bc1q26yh3nzyrydj7ewq24xx5suwgp3s3x7vu8tn30', 100000.00, '2025-04-19 15:17:14', 'Declined'),
(28, 64, 'korkeng', '1MXV3GobVdzoyuvXb5C8PpoWdDPMqGg3EQ', 100000.00, '2025-04-19 19:27:20', 'Declined'),
(28, 65, 'korkeng', '1MXV3GobVdzoyuvXb5C8PpoWdDPMqGg3EQ', 5000.00, '2025-04-19 19:28:07', 'Declined'),
(47, 66, 'Aung Hein ', 'bc1q5fxkkgpk0gwd0588shupc58ymu7nh0pnqq9hhd', 500000.00, '2025-04-19 19:40:03', 'Declined'),
(47, 67, 'Aung Hein ', 'bc1q5fxkkgpk0gwd0588shupc58ymu7nh0pnqq9hhd', 500000.00, '2025-04-19 20:53:16', 'Approved'),
(47, 68, 'Aung Hein ', 'bc1qwdfdvfv3me8e0ujj5hm0ql0gt74nlxdhac6eef', 500.00, '2025-04-19 23:40:20', 'Approved'),
(47, 69, 'Aung Hein ', 'bc1qwdfdvfv3me8e0ujj5hm0ql0gt74nlxdhac6eef', 500000.00, '2025-04-20 03:34:25', 'Approved'),
(25, 70, 'Gab', '1NHSjaxadACTxXPbKiDw3afWUMnTcToiLG', 40000.00, '2025-04-20 14:51:44', 'Declined'),
(25, 71, 'Gab', '1NHSjaxadACTxXPbKiDw3afWUMnTcToiLG', 10000.00, '2025-04-20 14:52:09', 'Approved'),
(25, 72, 'Gab', '1NHSjaxadACTxXPbKiDw3afWUMnTcToiLG', 5000.00, '2025-04-20 14:52:15', 'Approved'),
(25, 73, 'Gab', '1NHSjaxadACTxXPbKiDw3afWUMnTcToiLG', 10000.00, '2025-04-20 14:52:22', 'Approved'),
(25, 74, 'Gab', '1NHSjaxadACTxXPbKiDw3afWUMnTcToiLG', 10000.00, '2025-04-20 14:52:31', 'Approved'),
(25, 75, 'Gab', '1NHSjaxadACTxXPbKiDw3afWUMnTcToiLG', 5000.00, '2025-04-20 14:52:37', 'Declined'),
(41, 76, 'dilmann', '1DdZ4YeszNFxyvAQ5wxzH6G6yAMs5QnbC9', 248000.00, '2025-04-20 22:29:39', 'Declined'),
(42, 77, 'KnightofMalta1288812', 'bc1qf8kw87jjuvjeaqtwpa0ww38ufqh26ssnwzajzw', 5000.00, '2025-04-21 08:56:41', 'Declined'),
(50, 78, 'Hifk78', 'bc1q5qxsmafcrlc2hfewnq8hux45mpfh96vny3lxru', 500000.00, '2025-04-21 14:24:23', 'Declined'),
(50, 79, 'Hifk78', 'bc1q5qxsmafcrlc2hfewnq8hux45mpfh96vny3lxru', 500.00, '2025-04-21 14:41:00', 'Declined'),
(52, 80, 'Ttiiggaa ', 'bc1qwd3ky2kqrhmpwsnzfaq7jdxqytm8lwdurcqj2r', 51919057.00, '2025-04-22 07:18:55', 'Declined'),
(46, 81, 'Alexsapp', 'bc1qefrcnshzdggr7ny0p9dur6ltg76fplvn7pma5d', 125000.00, '2025-04-22 15:30:40', 'Declined'),
(53, 82, 'Eli12', 'bc1qskf6d5kxjvwzugz7vjn9lsytycjws7t0ltmd7m', 2000.00, '2025-04-22 15:35:59', 'Approved'),
(42, 83, 'KnightofMalta1288812', 'bc1qf8kw87jjuvjeaqtwpa0ww38ufqh26ssnwzajzw', 10000.00, '2025-04-22 21:05:14', 'Declined'),
(56, 84, 'Hoho35 ', 'bc1q6936u2y2facz85t5tmjdpla84pk6evupelhurl', 50000000.00, '2025-04-23 17:42:57', 'Declined'),
(60, 85, 'GeovannaCL26', 'bc1qxm6dgvlhmndcsxzyfmflmu6fu32u0dd0cp42vv', 19923456.00, '2025-04-24 01:58:36', 'Declined'),
(60, 86, 'GeovannaCL26', 'bc1qxm6dgvlhmndcsxzyfmflmu6fu32u0dd0cp42vv', 19923156.00, '2025-04-24 03:18:54', 'Declined'),
(60, 87, 'GeovannaCL26', 'bc1qxm6dgvlhmndcsxzyfmflmu6fu32u0dd0cp42vv', 456.00, '2025-04-24 07:36:10', 'Declined'),
(60, 88, 'GeovannaCL26', 'bc1qxm6dgvlhmndcsxzyfmflmu6fu32u0dd0cp42vv', 300.00, '2025-04-24 07:42:50', 'Declined'),
(61, 89, 'Gowsika ', 'bc1q4ue2wrrr34wxwt0j67jlma2nu6kmp7wplkr0vx', 1000000.00, '2025-04-24 15:51:56', 'Declined'),
(57, 90, 'veer1122', 'bc1qt2fst73gtcsvswxue3wn2xfyfe5lcxjngpsssr', 2000.00, '2025-04-24 18:06:08', 'Declined'),
(57, 91, 'veer1122', '19nh2GyUe9fYvuSNyXvkZD34VNLHTM2V7Q', 10000.00, '2025-04-24 18:15:16', 'Declined'),
(57, 92, 'veer1122', 'bc1qln987y324r6l6vz4wvlc5ncmj3at0u2rw59ct8', 500.00, '2025-04-24 18:21:42', 'Declined'),
(57, 93, 'veer1122', '15N1mxQLxqbVz47fzmFDi8odT3KG3LeBUx', 5000.00, '2025-04-24 18:38:35', 'Declined'),
(62, 94, 'Mehadi ', 'bc1q5td585lwdj88gycyf2j8r8sggnrq4f52crkeg8', 160420.00, '2025-04-24 19:28:31', 'Declined'),
(62, 95, 'Mehadi ', 'bc1q5td585lwdj88gycyf2j8r8sggnrq4f52crkeg8', 160420.00, '2025-04-24 19:30:58', 'Declined'),
(62, 96, 'Mehadi ', 'TYnz2gpk26RYA8iygZdwqh7eUrBZbBEX5Q', 160420.00, '2025-04-24 20:01:32', 'Declined'),
(60, 97, 'GeovannaCL26', 'bc1qxm6dgvlhmndcsxzyfmflmu6fu32u0dd0cp42vv', 19923156.00, '2025-04-24 22:28:40', 'Declined'),
(61, 98, 'Gowsika ', 'bc1qy6v9gc6z8cmvasj8mpfruw6l0xp2pea4ugvuta', 10000.00, '2025-04-25 03:07:55', 'Declined'),
(61, 99, 'Gowsika ', '1Dox2KVL9jAnapieAyhHsEQx2F6TfDpA8Y', 10000.00, '2025-04-25 06:39:23', 'Declined'),
(66, 100, 'Mikeyy', 'bc1qnjh77yxps7ufkv0lxyk5ruryuky38l2lzkwd4l', 1999995.00, '2025-04-25 09:17:24', 'Declined'),
(66, 101, 'Mikeyy', 'bc1qnjh77yxps7ufkv0lxyk5ruryuky38l2lzkwd4l', 1999995.00, '2025-04-25 09:22:14', 'Declined'),
(25, 102, 'Gab', '1DdZ4YeszNFxyvAQ5wxzH6G6yAMs5QnbC9', 2000.00, '2025-04-25 14:28:42', 'Declined'),
(67, 103, 'nisujan', 'bc1q826vfkrzelmtqr3k5fm4wf2ycm0exuxwjdwdnt', 6000000.00, '2025-04-26 07:42:09', 'Declined'),
(67, 104, 'nisujan', 'bc1q826vfkrzelmtqr3k5fm4wf2ycm0exuxwjdwdnt', 6000000.00, '2025-04-26 07:42:41', 'Declined'),
(67, 105, 'nisujan', 'bc1q826vfkrzelmtqr3k5fm4wf2ycm0exuxwjdwdnt', 6000000.00, '2025-04-26 07:42:47', 'Declined'),
(67, 106, 'nisujan', 'bc1q826vfkrzelmtqr3k5fm4wf2ycm0exuxwjdwdnt', 6000000.00, '2025-04-26 07:48:28', 'Declined'),
(67, 107, 'nisujan', 'bc1qq8e6ur4jd8xwvv68ssl9kl8ak6pmduwncfu80u', 6000000.00, '2025-04-26 07:53:11', 'Declined'),
(26, 108, 'Gabri1967', 'bc1q0zqfv0ah27m0dmrxdaudz2f2rxkp3mnddm0ln8', 2000.00, '2025-04-27 18:49:34', 'Processing'),
(26, 109, 'Gabri1967', 'bc1q0zqfv0ah27m0dmrxdaudz2f2rxkp3mnddm0ln8', 20000.00, '2025-04-27 19:00:42', 'Processing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`txn_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `txn_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
