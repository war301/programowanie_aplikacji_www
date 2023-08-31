-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Sty 2022, 15:27
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `moja_strona`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id` int(11) NOT NULL,
  `matka` int(11) NOT NULL DEFAULT 0,
  `nazwa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id`, `matka`, `nazwa`) VALUES
(2, 1, 'kableeeeeeeee');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obiekty_do_sklepu`
--

CREATE TABLE `obiekty_do_sklepu` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(255) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `cena` double NOT NULL,
  `ilosc` int(11) NOT NULL,
  `dostepnosc` int(11) NOT NULL,
  `kategoria` int(11) NOT NULL,
  `zdjecie` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `obiekty_do_sklepu`
--

INSERT INTO `obiekty_do_sklepu` (`id`, `nazwa`, `opis`, `cena`, `ilosc`, `dostepnosc`, `kategoria`, `zdjecie`) VALUES
(34, '123', '123', 123, 23, 1, 1, 0x31),
(35, '123', '123', 123, 23, 1, 1, 0x31),
(36, '123', '123', 123, 23, 1, 1, 0x31),
(39, 'patyk', 'dobra jakość', 12, 2, 1, 1, ''),
(40, 'kabelki', 'długie', 12, 1, 1, 1, ''),
(43, 'kabelki', '123123', 123, 1, 1, 1, ''),
(44, 'kabelki', '12123123', 123, 1, 1, 1, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `page_list`
--

CREATE TABLE `page_list` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_content` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `aliad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `page_list`
--

INSERT INTO `page_list` (`id`, `page_title`, `page_content`, `status`, `aliad`) VALUES
(1, 'glowna.html', '<h2 style=\"position: relative; top: 50px;\" id=\"animacjaTestowa2\">Największe budynki świata <-- najedź</h2>\r\n<div id=\"container\" >\r\n    <div class=\"box\">\r\n        <img src=\"../stronahtml/img/nr1.jpg\" alt=\"nr1\" width=\"200\" height=\"200\" align=\"right\">\r\n        <h2>\r\n            1. Burj Khalifa – 828 m –Zjednoczone Emiraty Arabskie - najwyższy budynek na świecie\r\n        </h2>\r\n        <p>Przez niemal dekadę (budowę tego wieżowca rozpoczęto w 2004 r., a zakończono w 2009 r.) najwyższy budynek na świecie. Wysokość 829 m konstrukcja osiągnęła 17 stycznia 2009 r.  Dubajski wieżowiec, którego budowa kosztowała 1,5 mld USD, ma 163 piętra użytkowe. Burj Khalifa (Burdż Chalifa) zaprojektowany został przez buiro architektoniczne Skidmore, Owings and Merrill, które zaprojektowało także budynki Willis Tower oraz One World Trade Center. Centralny rdzeń oraz trzy ramiona nawiązywać mają do kwiatu pustyni.   \r\n        </p>\r\n        <a href=\"index.php?page=miejsce1\">więcej informacji</a>\r\n    </div>\r\n    <div class=\"box\">\r\n        <img src=\"..\\stronahtml\\img\\nr2.jpg\" alt=\"nr2\" width=\"200\" height=\"200\" align=\"right\">\r\n        <h2>\r\n            2. Shanghai Tower –  632 m – Chiny - najwyższy budynek na świecie i w Chinach\r\n        </h2>\r\n        <p>\r\n            2,4 mld USD kosztowała budowa najwyższego budynku w Chinach, tj. Shanghai Tower. Inwestorem oraz wykonawcą jest Shanghai Tower Construction & Development Co., Ltd. reprezentująca trzy firmy: Shanghai Chengtou Corp., Luijiazui Finance & Trade Zone Development Co., Ltd., oraz Shanghai Construction Group. Wieżowiec zaprojektowało biuro architektoniczne Gensler. Budowa trwała siedem lat, od 2008 r., ale ostatecznie obiekt oddano do użytku w 2017 r.\r\n        </p>\r\n        <a href=\"index.php?page=miejsce2\">więcej informacji</a>\r\n    </div>\r\n    <div class=\"box\">\r\n        <img src=\"..\\stronahtml\\img\\nr3.jpg\" alt=\"nr3\" width=\"200\" height=\"200\" align=\"right\">\r\n        <h2>\r\n            3. Abradż al-Bajt – 601 m – Arabia Saudyjska\r\n        </h2>\r\n        <p>\r\n            Podium zamyka postmodernistyczny kompleks hotelowy w Arabii Saudyjskiej, a konkretnie w świętej dla islamu Mekce. Powstawał w latach 2004-2011, według projektu biura architektonicznego SL Rasch. Spora część gości gości hotelowych to zapewne pielgrzymi, gdyż obiekt znajduje się w bezpośrednim sąsiedztwie meczetu Al-Masdżid al-Haram.\r\n        </p>\r\n        <a href=\"index.php?page=miejsce3\">więcej informacji</a>\r\n    </div>\r\n    <div class=\"box\">\r\n        <img src=\"..\\stronahtml\\img\\nr4.jpg\" alt=\"nr4\" width=\"200\" height=\"200\" align=\"right\">\r\n        <h2>\r\n            4. Ping An Finance Center – 599,3 m – Chiny\r\n        </h2>\r\n        <p> \r\n            Na miejscu czwartym najwyższy biurowiec na świecie, o 115 kondygnacjach. Ta chińska konstrukcja do dachu mierzy jednak jedynie 562 m. Zaprojektowany przez Kohn Pedersen Fox Associates\r\n        </p>\r\n        <a href=\"index.php?page=miejsce4\">więcej informacji</a>\r\n    </div>\r\n    <div class=\"box\">\r\n        <img src=\"..\\stronahtml\\img\\nr5.jpg\" alt=\"nr5\" width=\"200\" height=\"200\" align=\"right\">\r\n        <h2>\r\n            5. Lotto World Tower – 554,8 m – Korea Południowa\r\n        </h2>\r\n        <p>\r\n            Najwyższy budynek w Korei Południowej powstawał przez bez mała 30 lat. Wiele czasu zajęły przygotowania: aż 13 lat. Po otrzymaniu zgody władz na budowę (2010 r.) konstrukcję budowano kilka lat; choć już rok 2016 fetowany był hucznie również w obrębie wieżowca (na fasadzie budynku pojawił się świetlny napis 2016), oficjalne otwarcie wieżowca, w którym znajdują się pokoje hotelowe i apartamenty mieszkalne, nastąpiło w 2017 r. Warto dodać, że budynek ma 123 piętra naziemne i aż sześć podziemnych.\r\n        </p>\r\n        <a href=\"index.php?page=miejsce5\">więcej informacji</a>\r\n    </div>\r\n</div>\r\n<script>\r\n    $(\"#animacjaTestowa2\").on({\r\n        \"mouseover\": function() {\r\n            $(this).animate({\r\n                width: 300\r\n            }, 800);\r\n        },\r\n        \"mouseout\": function() {\r\n            $(this).animate({\r\n                width: 200\r\n            }, 800);\r\n        }\r\n    });\r\n</script>', 1, NULL),
(2, 'miejsce1.html', '<div >\r\n    <h1 >1. Burj Khalifa – 828 m –Zjednoczone Emiraty Arabskie</h1>\r\n    <div style=\" top: 80px;\">\r\n    <table style=\"width: 1325px; height: 1000px;\">\r\n        <tr>\r\n            <td>\r\n                <h2>Wygląd i wystrój</h2>\r\n                \r\n                <img  id=\"animacjaTestowa3\" src=\"..\\stronahtml\\img\\nr1.jpg\" alt=\"nr1\" width=\"200\" height=\"200\" class=\"wrap\">\r\n        \r\n            \r\n                Wieżowiec Burdż Chalifa zaprojektowany został przez przedsiębiorstwo architektoniczne Skidmore, Owings and Merrill, które projektowało także budynki Willis Tower oraz 1 World Trade Center. Ogólny jego wygląd nawiązuje do kwiatu pustyni z rodzaju Hymenocallis[8] oraz architektury islamu (różne ornamenty). Budowla składa się z centralnego rdzenia oraz trzech „ramion”, które w miarę zwiększania się wysokości są coraz mniejsze, co nadaje jej smukłość. Na samym szczycie centralny rdzeń przechodzi w iglicę. Najniższe piętra przeznaczono na hotel, którego wystrojem zajął się Giorgio Armani.\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n        <td><h2>Rozmiary</h2><img  src=\"..\\stronahtml\\img\\nr1_2.jpg\" alt=\"nr1\" width=\"200\" height=\"200\" class=\"wrap\" >Początkowo konstrukcja miała mieć wysokość około 100 metrów i wykorzystywała projekt niewybudowanej nigdy wieży Grollo Tower w Melbourne w Australii. Niedługo potem przedsiębiorstwo Skidmore, Owings and Merrill nadało budynkowi obecny kształt i wygląd, podnosząc jego wysokość najpierw do 650, a później do 705 metrów. Główny architekt, Adrian Smith, uznał jednak, że górne partie budynku nie wyglądają odpowiednio i postanowił jeszcze bardziej zwiększyć wysokość konstrukcji, by nadać wieżowcowi smuklejszy wygląd. Szczytowe partie budynku, od piętra 154 wzwyż, są zbudowane tylko na lekkiej stalowej konstrukcji (a nie na żelbetowym szkielecie, jak niższe piętra). Inwestor (przedsiębiorstwo Emaar) uważał, że w ten sposób szczyt wieży będzie mógł być podwyższony, by pobić ewentualnych konkurentów do tytułu najwyższego budynku świata – jednak gdy budowę ukończono, nie jest to możliwe.\r\n            17 stycznia 2009 wieżowiec osiągnął docelową wysokość 828 m.</td>\r\n        </tr>\r\n        <tr>\r\n            <td><h2>Rekordy</h2>Burdż Chalifa:\r\n\r\n                20 maja 2008 stał się najwyższą lądową konstrukcją budowlaną, jaką kiedykolwiek zbudowano (tytuł ten odebrał polskiemu masztowi radiowemu w Konstantynowie, który miał 646 metrów wysokości; uległ on zniszczeniu 8 sierpnia 1991).\r\n                13 września 2007 stał się najwyższą budowlą wolno stojącą (tytuł ten odebrał kanadyjskiej CN Tower, mającej 553 metry wysokości).\r\n                21 lipca 2007 stał się najwyższym wieżowcem na świecie[9] (tytuł ten odebrał Taipei 101, w Republice Chińskiej, mającemu 509 metrów wysokości).\r\n                W wyniku problemów spowodowanych bankructwem przedsiębiorstwa odpowiedzialnego za elewację pierwsze jej elementy pojawiły się na budynku dopiero w połowie 2007. Do czasu jej montażu Burdż Chalifa był więc najwyższym betonowym szkieletem nieukończonego budynku, wyższym niż hotel Rjugjong w Korei Północnej, mający 105 pięter i 330 metrów wysokości, który miał ten tytuł do 2006.</td>\r\n        </tr>\r\n    </table>\r\n    <script>\r\n        $(\"#animacjaTestowa3\").on(\"click\", function() {\r\n            if (!$(this).is(\":animated\")) {\r\n                $(this).animate({\r\n                    width: \"+=\" + 50,\r\n                    height: \"+=\" + 10,\r\n                    duration: 3000,\r\n                });\r\n            }\r\n        });\r\n    </script>\r\n    </div>\r\n</div>\r\n', 1, NULL),
(3, 'miejsce2.html', '\r\n<div style=\"height: 50px;\">\r\n    <h1>2. Shanghai Tower –  632 m – Chiny</h1>\r\n</div>\r\n\r\n<table style=\"width: 1325px; height: 700px;\">\r\n    <tr>\r\n        <td><h2>Charakterystyka</h2><img  id=\"animacjaTestowa3\" src=\"..\\stronahtml\\img\\nr2_1.jpg\" alt=\"nr1\" width=\"200\" height=\"200\" class=\"wrap\" >Bryła budynku składa się z 9 nałożonych na siebie, walcowatych budynków otoczonych podwójną fasadą. Pierwsza warstwa fasady otacza te budynki bezpośrednio się z nimi stykając, druga stanowi zewnętrzną fasadę całej budowli. Przestrzeń pomiędzy nimi wypełniona zostanie przez dziewięć atriów[2].\r\n\r\n            Budynek został tak skonstruowany, aby zmniejszyć nacisk wywierany przez wiatr, umożliwić zbieranie deszczówki celem wykorzystania jej w systemach HVAC oraz umożliwić generowanie energii przez turbiny wiatrowe. Właściciele budynku ubiegają się o certyfikację China Green Building Committee oraz U.S. Green Building Council[2].\r\n            \r\n            Powierzchnia budynku ma ponad 220 tysięcy metrów kwadratowych powierzchni użytkowej. Dla porównania, łączna powierzchnia biur w Szczecinie na koniec 2016 roku wynosiła 156 tysięcy metrów kwadratowych[1].\r\n            \r\n            Pomieszczenia są wykorzystywane przede wszystkim przez biura, a poza nimi obiekty handlowe, rozrywkowe oraz konferencyjne. W obiekcie znajdzie się również jeden z najwyżej położonych hoteli na świecie – Shanghai Tower J Hotel firmy Jin Jiang Hotels. W jego ofercie znajdzie się 258 pokoi zlokalizowanych na piętrach 84-110. W podziemnych kondygnacjach znajduje się 3-poziomowy parking podziemny, powierzchnie handlowe oraz połączenie z metrem[3]. Na jednym z najwyższych pięter znajduje się taras widokowy[2].\r\n            <img src=\"..\\stronahtml\\img\\nr2_2.jpg\" alt=\"nr1\" width=\"200\" height=\"200\" class=\"wrap\" >\r\n        </td>\r\n\r\n    </tr>\r\n  </table>\r\n  <script>\r\n    $(\"#animacjaTestowa3\").on(\"click\", function() {\r\n        if (!$(this).is(\":animated\")) {\r\n            $(this).animate({\r\n                width: \"+=\" + 50,\r\n                height: \"+=\" + 10,\r\n                duration: 3000,\r\n            });\r\n        }\r\n    });\r\n</script>\r\n', 1, NULL),
(4, 'miejsce3.html', '\r\n<div style=\"height: 50px;\">\r\n    <h1>3. Abradż al-Bajt – 601 m – Arabia Saudyjska</h1>\r\n</div>\r\n\r\n<table style=\"width: 1325px; height: 500px;\">\r\n    <tr>\r\n        <td><h2>Charakterystyka</h2><img  id=\"animacjaTestowa3\" src=\"..\\stronahtml\\img\\nr3_1.jpg\" alt=\"nr1\" width=\"200\" height=\"200\" class=\"wrap\" >Abradż al-Bajt (arab. أبراج البيت, Abrāǧ al-Bayt) – kompleks hotelowy w Mekce, w Arabii Saudyjskiej, postmodernistyczny, wzniesiony w latach 2004–2011 według projektu zespołu architektów biura architektonicznego SL Rasch; znajduje się w bezpośrednim sąsiedztwie Świętego Meczetu.\r\n\r\n            Abradż al-Bajt znajduje się w pobliżu największego na świecie meczetu i najświętszego miejsca islamu, Al-Masdżid al-Haram.\r\n            \r\n            Kompleks posiada kilka światowych rekordów, w tym najwyższy hotel na świecie, najwyższy zegar wieżowy na świecie, największa na świecie tarcza zegara[1], i największy na świecie budynek pod względem powierzchni.\r\n            \r\n            Kompleks stał się drugim pod względem wysokości budynkiem na świecie w 2011 roku, ustępował tylko Burdż Chalifa w Dubaju. Od 2015 roku zajmuje 3. miejsce. Projektantem i wykonawcą obiektu jest Saudi Binladin Group, największa firma budowlana królestwa[2].\r\n            <img src=\"..\\stronahtml\\img\\nr3_2.jpg\" alt=\"nr1\" width=\"200\" height=\"200\" class=\"wrap\" >\r\n        </td>\r\n\r\n    </tr>\r\n  </table>\r\n  <script>\r\n    $(\"#animacjaTestowa3\").on(\"click\", function() {\r\n        if (!$(this).is(\":animated\")) {\r\n            $(this).animate({\r\n                width: \"+=\" + 50,\r\n                height: \"+=\" + 10,\r\n                duration: 3000,\r\n            });\r\n        }\r\n    });\r\n</script>\r\n', 1, NULL),
(5, 'miejsce4.html', '<div style=\" top: 50px;\">\r\n<div style=\"height: 50px;\">\r\n    <h1> 4. Ping An Finance Center – 599,3 m – Chiny</h1>\r\n</div>\r\n\r\n<table style=\"width: 1325px; height: 500px;\">\r\n    <tr>\r\n        <td><h2>Charakterystyka</h2><img  id=\"animacjaTestowa3\" src=\"..\\stronahtml\\img\\nr4_1.jpg\" alt=\"nr1\" width=\"200\" height=\"200\" class=\"wrap\" >Ping An Finance Center (chiń.: 平安金融中心; pinyin: Píng’ān jīnróng zhōngxīn) – wieżowiec w Shenzhen, w prowincji Guangdong, w Chińskiej Republice Ludowej. Wysokość całkowita budynku wynosi 599 m co czyni go najwyższym wieżowcem w Shenzhen i drugim co do wielkości w Chinach[1], został otwarty w 2017 roku. Stał się najwyższym wieżowcem biurowym na świecie.[2]\r\n\r\n            Koszt budynku to ok. 5,49 miliarda złotych ($ 1,5 miliarda) co przy 385 918 metrach kwadratowych powierzchni użytkowej daje ok. 14225,81 złotych za metr kwadratowy. [3]\r\n            <img src=\"..\\stronahtml\\img\\nr4_2.jpg\" alt=\"nr1\" width=\"200\" height=\"200\" class=\"wrap\" >\r\n        </td>\r\n\r\n    </tr>\r\n  </table>\r\n  <script>\r\n    $(\"#animacjaTestowa3\").on(\"click\", function() {\r\n        if (!$(this).is(\":animated\")) {\r\n            $(this).animate({\r\n                width: \"+=\" + 50,\r\n                height: \"+=\" + 10,\r\n                duration: 3000,\r\n            });\r\n        }\r\n    });\r\n</script>\r\n</div>', 1, NULL),
(6, 'miejsce5.html', '\r\n<div style=\"height: 50px;\">\r\n    <h1>5. Lotto World Tower – 554,8 m – Korea Południowa</h1>\r\n</div>\r\n\r\n<table style=\"width: 1325px; height: 500px;\">\r\n    <tr>\r\n        <td><h2>Charakterystyka</h2><img  id=\"animacjaTestowa3\" src=\"..\\stronahtml\\img\\nr5_1.jpg\" alt=\"nr1\" width=\"200\" height=\"200\" class=\"wrap\" >Lotte World Tower (kor. 롯데월드타워) – wieżowiec w Seulu, w Korei Południowej o wysokości 555 m[1]. Został otwarty 3 kwietnia 2017 i jest najwyższym budynkiem w kraju[2]. Jest obecnie najwyższym budynkiem w Korei Południowej i 5. najwyższym budynkiem na świecie.\r\n            <img src=\"..\\stronahtml\\img\\nr5_2.jpg\" alt=\"nr1\" width=\"200\" height=\"200\" class=\"wrap\" >\r\n        </td>\r\n\r\n    </tr>\r\n  </table>\r\n  <script>\r\n    $(\"#animacjaTestowa3\").on(\"click\", function() {\r\n        if (!$(this).is(\":animated\")) {\r\n            $(this).animate({\r\n                width: \"+=\" + 50,\r\n                height: \"+=\" + 10,\r\n                duration: 3000,\r\n            });\r\n        }\r\n    });\r\n</script>', 1, NULL),
(7, 'stronakontaktowa.html', '<div style=\"position: relative; top: 100px;\">    \r\n<h2>Kontakt</h2>\r\n<form action=\'contact.php\' method=\'POST\'>\r\n             <input type=\'submit\' name=\'przyciskDodawania\' value=\'Wyślij wiadomość\' />\r\n</form> \r\n \r\n<p><b>Dziękujemy</b> za wysłanie informacji.<i>MIŁEGO DNIA.</i></p>\r\n\r\n<div style=\" top: 500px;\">\r\n    <p><u>Postaramy się odpowiedzieć jak najszybciej.</u></p>\r\n</div>\r\n<img id=\"animacjatestowa1\" style=\" top: 600px;\" src=\"..\\stronahtml\\img\\dziekuje.jpg\" alt=\"nr1\" width=\"200\" height=\"200\" class=\"wrap\">\r\n\r\n<script>\r\n	$(\"#animacjatestowa1\").on(\"click\",function(){\r\n		$(this).animate({\r\n		width: \"500px\",\r\n		opacity: 0.4,\r\n		frontSize: \"3em\",\r\n		borderwidth: \"10px\"\r\n		},1500);\r\n	});\r\n</script>\r\n</div>', 1, NULL),
(8, 'filmy.html', '<div id=\"container_my\" style=\"position: relative; top: 100px; padding: 5px;\">\r\n    <table cellpadding=\"0px\" cellspacing=\"0px\" >\r\n        <tr>\r\n            <td>\r\n                <h>Najwyższe budynki świata (niektóre sięgają kosmosu!)</h>\r\n                <iframe class=\"wrap\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ebD_Szbxnq4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n            </td>\r\n            <td>\r\n                <h>10 Najwyższych budynków świata</h>\r\n        <iframe class=\"wrap\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/r9omqwqHNiE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n            </td>\r\n            <td>\r\n                <h>Zestawienie najwyższych budynków na świecie</h>\r\n        <iframe class=\"wrap\" width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/cZp8d0r4bjA\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n            </td>\r\n        </tr>\r\n    </table>\r\n</div>', 1, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'FinePix Pro2 3D Camera', '3DcAM01', 'product-images/camera.jpg', 1500.00),
(2, 'EXP Portable Hard Drive', 'USB02', 'product-images/external-hard-drive.jpg', 800.00),
(3, 'Luxury Ultra thin Wrist Watch', 'wristWear03', 'product-images/watch.jpg', 300.00),
(4, 'XP 1155 Intel Core Laptop', 'LPN45', 'product-images/laptop.jpg', 800.00);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(6, 'admin', '$2y$10$lUrGi0FPxKSCgyEsLrho/ua0xHh0azOBzwf5UiB4awcuyWTvsqyXW', '2021-12-09 17:46:51'),
(7, 'arek', '$2y$10$VjDPm2ro8oQ6zcBZRJXZ5O7Gc5QUB7PGlRy27UbIGf2mFt9.b0fzi', '2022-01-26 20:29:45'),
(8, 'war301', '$2y$10$wNjuEZrQO0phBHLJ81qRTuKjVPK9zaOp6S8dgcS3d2fJiqqJT2DHK', '2022-01-26 20:29:58'),
(9, '98110401277', '$2y$10$QrQvukyBznjh2SEMAYqExeVWZJNKFYqQGVw5GlcijgXghz40BUKTa', '2022-01-26 20:37:12'),
(10, 'admin1', '$2y$10$./Ntatc.NH0JPXyp.HS1uuwBnFq0ASWUzdyiuIG4Jn6T7nHNCVKLa', '2022-01-26 20:50:06');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `obiekty_do_sklepu`
--
ALTER TABLE `obiekty_do_sklepu`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `page_list`
--
ALTER TABLE `page_list`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `obiekty_do_sklepu`
--
ALTER TABLE `obiekty_do_sklepu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT dla tabeli `page_list`
--
ALTER TABLE `page_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
