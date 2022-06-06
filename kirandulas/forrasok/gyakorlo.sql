﻿SET NAMES 'utf8';

USE kirandulohelyek;

DROP TABLE IF EXISTS utazasicelok;

USE kirandulohelyek;

CREATE TABLE IF NOT EXISTS utazasicelok (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nev VARCHAR(255) DEFAULT NULL,
  megye VARCHAR(255) DEFAULT NULL,
  kep VARCHAR(255) DEFAULT NULL,
  tavolsag DOUBLE DEFAULT NULL,
  leiras TEXT DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_hungarian_ci;




CREATE TABLE IF NOT EXISTS users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(80) NOT NULL,
  email VARCHAR(80) NOT NULL,
  username VARCHAR(45) NOT NULL,
  password TEXT NOT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
CHARACTER SET utf8,
COLLATE utf8_hungarian_ci;



INSERT INTO utazasicelok VALUES
(1, 'Tihany', 'Veszprém', 'tihany.jpg', 362.25, 'Tihany község Veszprém megyében, a Balatonfüredi járásban. Magyarország egyik legszebb fekvésű települése, látványos táji és természeti adottságokban bővelkedő község a Balatonba nyúló Tihanyi-félszigeten.'),
(2, 'Eger', 'Heves', 'eger.jpg', 159.56, 'Eger megyei jogú város az Észak-Magyarország-régióban, az Eger-patak völgyében, a Bükk-vidék délnyugati szélén; Heves megye és az Egri járás székhelye. A 2011-es népszámlálás adatai szerint Észak-Magyarország második legnépesebb városa'),
(3, 'Aggtelek', 'Borsod-Abaúj-Zemplén', 'aggtelek.jpg', 164, 'Aggtelek község Borsod-Abaúj-Zemplén megyében, a Putnoki járásban. Itt van az ország egyik leghíresebb cseppkőbarlangjának, a Baradla–Domica-barlangrendszernek néhány bejárata.'),
(4, 'Hortobagy', 'Hajdú-Bihar', 'hortobagy.jpg', 38.3, 'Hortobágy Hajdú-Bihar megyei község Debrecentől 36 kilométerre nyugatra a Balmazújvárosi járásban. Hortobágy Magyarország legnagyobb területű községe.'),
(5, 'Kőszeg', 'Vas', 'koszeg.jpg', 469.1, 'Kőszeg város Vas megye nyugati szélén, az osztrák határ közelében. A Kőszegi járás központja. Városrésze: Kőszegfalva. Gazdag múltja révén sokszor jelentős szerepet töltött be Magyarország és Ausztria történelmében.'),
(6, 'Szeged', 'Csongrád', 'szeged.jpg', 228.5, 'Szeged megyei jogú város, Magyarország harmadik legnépesebb városa, a Dél-Alföld legnagyobb városa, Csongrád megye és a Szegedi járás székhelye a Tisza és a Maros találkozásánál. A terület az újkőkor óta lakott. A várost először 1183-ban említik.'),
(7, 'Budapest', 'Pest', 'budapest.jpg', 225.87, 'Magyarország fővárosát, Budapestet a Duna folyó szeli ketté. A XIX. században épült Lánchíd a dimbes-dombos budai oldalt köti össze a sík Pesttel. A Várdomb oldalában futó siklóval juthatunk fel a budai Óvárosba, ahol a Budapesti Történeti Múzeum egészen a római időkig visszavezetve mutatja be a városi életet. A Szentháromság tér ad otthont a XIII. századi Mátyás-templomnak és a Halászbástya lőtornyainak, amelyekből messzire ellátva gyönyörködhetünk a városban.'),
(8, 'Zirc', 'Veszprém', 'zirc.jpg', 297, 'Zirc város Veszprém megyében, a Zirci járás egyetlen városa, és egyben központja, „a Bakony fővárosa&quot;.');

INSERT INTO users VALUES
(1, 'Teszt Elek', 'tesztelek@gmail.com', 'tesztelek', '$2y$10$H3/NVsAiUfvagKK4tr7Kp.j5HUcY6XiGWA/BQELjWkfTlSNZoJnta');

