-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 22, 2020 alle 19:49
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beertime`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `bottiglia`
--

CREATE TABLE `bottiglia` (
  `Id` int(20) NOT NULL,
  `Nome` varchar(20) NOT NULL,
  `Descrizione` varchar(200) NOT NULL,
  `Gradazione_Alcolica` varchar(10) NOT NULL,
  `Formato` varchar(10) NOT NULL,
  `Prezzo` float NOT NULL,
  `Stile` varchar(32) NOT NULL,
  `Produttore` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `bottiglia`
--

INSERT INTO `bottiglia` (`Id`, `Nome`, `Descrizione`, `Gradazione_Alcolica`, `Formato`, `Prezzo`, `Stile`, `Produttore`) VALUES
(1, 'Bruton 10', 'La 10 è un Barley Wine dal colore ambrato carico, tendente al marrone. Al naso presenta forti sapori di malto e crosta di formaggio.', '10%', '33cl', 5.75, 'Barley Wine', 'Alkibia2010'),
(2, 'Toccalmatto Dudes', 'Molto complessa con profumi di frutta secca, rabarbaro, sentori vinosi, la Dides nasconde molto bene i suoi 12 gradi rendendola comunque facile da bere.', '12%', '37cl', 10.8, 'Barley Wine', 'Caberbeer2003'),
(3, 'Fullers ESB', 'La caratteristica Fuller\'s ESB (Extra Special Bitter) è una Bitter molto forte, con colore più intenso, sapore più maltato e più fruttato. Il luppolo rende l\'ESB meno amara di una IPA.', '5,9%', '50cl', 4.85, 'Bitter Ale', 'Crocedimalto2000'),
(4, 'XX Bitter', 'Si presenta chiara con un\'abbondante schiuma. Al naso le note erbacee date dal luppolo predominano su un leggero agrumato. Al palato l\'amaro è diretto ma compensato dal dolce del malto. Finale secco.', '6,2%', '75cl', 7.8, 'Bitter Ale', 'Hammerbeer2015'),
(5, 'Lambrate Porpora', 'Al naso note di caramello seguito da note erbacee dei luppoli. Al palato è dolce con un perfetto bilanciamendo con il luppolo rendendo la birra equilibrata nascondendo l\'alto grado alcolico.', '8%', '33cl', 4.25, 'Bock', 'Alkibia2010'),
(6, 'La Trappe Bockbier', 'Unica Bock Trappista, con un aroma caratterizzato dal malto caramellato accompagnato dal sentori canditi chiusi da un finale di luppolo che compensa il dolce. Birra calda ed autunnale. ', '7%', '75cl', 7.8, 'Bock', 'Caberbeer2003'),
(7, 'Greens Amber Ale', 'Rifermentata in bottiglia dalla schiuma persistente e notevolmente aderente. Sentori olfattivi fruttati dolci. Sentori gustativi orientati sui frutti, sul cioccolato e sui fiori freschi.  ', '5%', '33cl', 3.95, 'Brown Ale', 'Crocedimalto2000'),
(8, 'Geco Ambra', 'Si presenta ambrata e velata con un’abbondante schiuma compatta e persistente. Al naso le note dolci e caramellate del malto. L’amaro compare discretamente ad accompagnare un finale lungo e caldo.', '6%', '33cl', 3.8, 'Brown Ale', 'Hammerbeer2015'),
(9, 'Furstenberg Export', 'Colore dorato carico, brillante, schiuma cremosa e persistente, al naso emergono note maltate e di cereale. In bocca è rotonda, con un gusto morbido, con le note di malto e crosta di pane.', '5,3%', '33cl', 4.2, 'Export', 'Iduemastri2009 '),
(10, 'Thurn und Taxis ', 'Schiuma fine e compatta, con un corpo gustoso in cui il grado alcolico esalta i profumi di malto leggermente fruttati e di lievito e i ricchi sapori maltati, che terminano leggermenti luppolati. ', '5.5%', '75cl', 5.4, 'Export', 'Montegioco2006'),
(11, 'Ducato Chrysopolis', 'Prodotta con un invecchiameto di almeno un anno in botte, è una birra dal color giallo dorato opaco. Gusto tagliente dato dall\'acidità lattica accompagnata discretamente dai sentori di legno.', '5%', '33cl', 9.5, 'Gueuze-Lambic', 'Pontino1998'),
(12, 'Cantillon Fou Foune', 'Birra acida dal colore giallo torbido con aromi di albicocca e citrici. Lambic speciale con albicocche prodotto con lambic di due anni.', '5%', '75cl', 19.5, 'Gueuze-Lambic', 'SanGiovanni2013'),
(13, 'O Haras Double IPA', 'Una birra con un\'ottima bilanciatura tra la dolcezza del malto e l\'amaro da luppolo. Birra dai profumi fruttati data dai luppoli, dalla leggera carbonazione ed dall\'elevato tenore alcolico.', '7,5%', '50cl', 6.25, 'India Pale Ale', 'Iduemastri2009 '),
(14, 'Brewdog Punk IPA', 'Una birra con sentore complesso di gusti tropicali, agrumi e luppolo. Al palato è penetrante con note di agrumi, biscotti ed un finale aggressivo di luppolo amaro.', '6%', '66cl', 6.75, 'India Pale Ale', 'Montegioco2006'),
(15, 'De Ranke Kriek', 'Birra a fermentazione spontante con l\'agguinta di ciliegie. Dal gusto leggermente acido, il finale è secco e dissetante.', '7%', '75cl', 9.95, 'Kriek-Lambic', 'Pontino1998'),
(16, 'Girardin Kriek', 'Viene prodotta con l\'aggiunta di ciliegie intere che ne caratterizzano il colore, il profumo ed il sapore. Il tutto viene accompagnato da sentori di legno e mele, da una moderata acidità.', '5%', '37cl', 5.75, 'Kriek-Lambic', 'SanGiovanni2013'),
(17, 'Anchor California', 'Una birra dissetante con profumi di malto, cereali e note di agrumi. In bocca l\'attacco dolce del malto viene compensato dai sentori aromatici del luppolo.', '4,9%', '33cl', 3.8, 'Pilsener', 'Alkibia2010'),
(18, 'Brewdog KingPin', 'Birra a bassa fermentazione. Si lascia bere con notevole facilità accompagnata con una bella luppolatura erbacea.', '4,7%', '33cl', 3, 'Pilsener', 'Iduemastri2009 '),
(19, 'Kostritzer ', 'Si presenta con un colore marrone scuro e con una schiuma color nocciola. Al naso si percepisce una nota di cioccolato, di malto tostato, con una nota di caffé amaro.', '4,80%', '75cl', 10.2, 'Schwarzbier', 'SanGiovanni2013'),
(20, 'Memminger  Schwarz', 'Possiede un buon sapore tostato, ci accoglie con un tocco amaro ed un forte sentore di caramello. Il corpo è leggero, acquoso, dona una buona capacità dissetante. ', '5%', '33cl', 5.6, 'Schwarzbier', 'Hammerbeer2015');

-- --------------------------------------------------------

--
-- Struttura della tabella `categoria`
--

CREATE TABLE `categoria` (
  `Nome` varchar(32) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Descrizione` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `categoria`
--

INSERT INTO `categoria` (`Nome`, `Tipo`, `Descrizione`) VALUES
('Ale', 'Barley Wine', 'Definito anche come il “vino d’orzo” è uno stile molto complesso. Ha una gradazione molo alta con un gusto vinoso. Si presenta piatta, molto scura e quasi senza schiuma.'),
('Ale', 'Bitter Ale', 'Le Bitter Ale sono birre dal color ambrato con aromi fruttati ed un basso grado alcolico. La caratteristica principale è l’amaro, dato dal luppolo inglese.'),
('Lager', 'Bock', 'Lo stile Bock presenta birre forti e dense con aromi di malto, anche tostato, con note di miele. Solitamente è poco luppolata e con una alta gradazione 6%/7%.'),
('Ale', 'Brown Ale', 'Ale dal colore marrone con un corpo ed una alcolicità media. Stile dal sentore dolce con note di caramello e nocciola ed un finale poco luppolato.'),
('Lager', 'Export', 'Caratterizzata da un colore chiaro e dorato, moderatamente amara per via del luppolo nobile. Contiene anche più carbonato di calcio della media, il quale tende a marcare l\'aroma del luppolo.'),
('Lambic', 'Gueuze-Lambic', 'Lo stile Gueuze è prodotto miscelando lambic vecchio (da due a tre anni) con del lambic giovane (un anno). Quest’ultimo garantisce la frizzantezza allo stile.'),
('Ale', 'India Pale Ale', 'Birra ad alta fermentazione piuttosto alcolica e luppolata, prodotta con malti, luppoli e lieviti inglesi. Un\'amarezza decisa ma bilanciata dal dolce dei malti caramellati.'),
('Lambic', 'Kriek-Lambic', 'Le Kriek vengono prodotte facendo fermentare assieme alla birra delle ciliegie. Il risultato viene miscelato al lambic giovane rendendo lo stile frizzante, con note di legno ed aromi di cherry.'),
('Lager', 'Pilsener', 'Stile di birra nato a Plzen caratterizzato dal luppolo Saaz, da una limpidezza cristallina e dalla schiuma compatta. Le Pils si distinguono principalmente per l’amaro persistente ed il gusto secco.'),
('Lager', 'Schwarzbier', 'La Schwarzbier è una birra tedesca scura. Ha un colore opaco, tendente al nero, e un sapore pieno di cioccolato o di caffè.');

-- --------------------------------------------------------

--
-- Struttura della tabella `consumatore`
--

CREATE TABLE `consumatore` (
  `Nome` varchar(32) NOT NULL,
  `Username` varchar(64) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `Email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `ordine`
--

CREATE TABLE `ordine` (
  `Id` int(20) NOT NULL,
  `Data` date NOT NULL,
  `Pagato` tinyint(1) NOT NULL,
  `Indirizzo` varchar(200) NOT NULL,
  `Totale` float NOT NULL,
  `Utente_ID` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `ordine_item`
--

CREATE TABLE `ordine_item` (
  `Quantità` int(6) NOT NULL,
  `Bottiglia_ID` int(20) NOT NULL,
  `Ordine_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `produttore`
--

CREATE TABLE `produttore` (
  `Nome` varchar(100) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Indirizzo` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `produttore`
--

INSERT INTO `produttore` (`Nome`, `Username`, `Password`, `Email`, `Indirizzo`) VALUES
('Birrificio Alkibia', 'Alkibia2010', 'Aquila10', 'info@birraalkibia.it', 'Via San Lorenzo, 21-67020 Fossa(AQ)'),
('Birrificio Caber Beer', 'Caberbeer2003', 'Perugini03', 'info@caberbeer.it', 'Via Delle Industrie, 12, 06049 Spoleto(PG)'),
('Birrificio Croce Di Malto', 'Crocedimalto2000', 'Trecate20', 'info@crocedimalto.it', 'Corso Roma, 51A, 28069 Trecate(NO)'),
('Birrificio Hammer Beer', 'Hammerbeer2015', 'Hammer15', 'info@hammer-beer.it', 'Via Chioso 3/A Villa Di Adda(BG)'),
('Birrificio I Due Mastri', 'Iduemastri2009 ', 'Mastri09', 'info@iduemastri.it', 'Via Per Iolo, 34/A 59100 Prato'),
('Birrificio Montegioco', 'Montegioco2006', 'Franzosi06', 'birraio@birrificiomontegioco.com', 'Frazione Fabbrica, 1, 15050-Montegioco(AL)'),
('Birrificio Pontino', 'Pontino1998', 'Latino98', 'info@birrificiopontino.com', 'Via Monti Lepini Km 51600-04100 Latina'),
('Birrificio San Giovanni', 'SanGiovanni2013', 'Amodomio13', 'info@birrificiosangiovanni.it', 'Via Santa Lucia, 79 Roseto Degli Abruzzi(TE)');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `bottiglia`
--
ALTER TABLE `bottiglia`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FKStile` (`Stile`),
  ADD KEY `FkProd` (`Produttore`);

--
-- Indici per le tabelle `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Tipo`);

--
-- Indici per le tabelle `consumatore`
--
ALTER TABLE `consumatore`
  ADD PRIMARY KEY (`Username`);

--
-- Indici per le tabelle `ordine`
--
ALTER TABLE `ordine`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FKUtente` (`Utente_ID`);

--
-- Indici per le tabelle `ordine_item`
--
ALTER TABLE `ordine_item`
  ADD KEY `FKBott` (`Bottiglia_ID`),
  ADD KEY `FKOrdine` (`Ordine_ID`);

--
-- Indici per le tabelle `produttore`
--
ALTER TABLE `produttore`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `bottiglia`
--
ALTER TABLE `bottiglia`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `bottiglia`
--
ALTER TABLE `bottiglia`
  ADD CONSTRAINT `Produttore_ID` FOREIGN KEY (`Produttore`) REFERENCES `produttore` (`Username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Stile` FOREIGN KEY (`Stile`) REFERENCES `categoria` (`Tipo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limiti per la tabella `ordine`
--
ALTER TABLE `ordine`
  ADD CONSTRAINT `UtenteFK` FOREIGN KEY (`Utente_ID`) REFERENCES `consumatore` (`Username`);

--
-- Limiti per la tabella `ordine_item`
--
ALTER TABLE `ordine_item`
  ADD CONSTRAINT `FKBottiglia_ID` FOREIGN KEY (`Bottiglia_ID`) REFERENCES `bottiglia` (`Id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FKOrdine_ID` FOREIGN KEY (`Ordine_ID`) REFERENCES `ordine` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
