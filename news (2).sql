-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 01:53 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(11) NOT NULL,
  `headline` varchar(255) NOT NULL,
  `storyText` text NOT NULL,
  `type` enum('Headline','Trending','Politics','Sport') NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `author` text NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `headline`, `storyText`, `type`, `date`, `time`, `author`, `title`) VALUES
(1, 'McCabe to sue State over ''damage'' - source', 'Maurice McCabe intends to take a case against the State for "all the damage" done to him, according to a source close to the garda whistleblower.\r\n\r\nIt comes as Fianna Fáil''s Dara Calleary said Sergeant McCabe was failed by the State in the most fundamental and damaging way.\r\n\r\n', 'Headline', '2017-02-08', '14:21:06', 'John Montayne', 'Chief Editor'),
(2, 'Race to rescue whales as hundreds stranded on New Zealand beach', 'Rescuers are trying to saves cores of pilot whales in a remote bay in New Zealand, where some 300 carcasses littered the beach after one of the country''s largest recorded mass whale strandings.\r\n\r\nHundreds of volunteers flocked to Golden Bay, at the northwest tip of South Island, after dawn broke and surviving whales were refloated at high tide, but 90 quickly became stranded once again as the tide ebbed.', 'Politics', '2017-02-09', '17:24:59', 'Conor Gorman', 'Assistant Editor'),
(3, 'Leaving presidency early ''a mistake'', says Robinson', 'Former Irish president Mary Robinson has said her decision to move to the United Nations before her term as president ended was "a mistake".\r\n\r\nIn an interview for RTÉ''s Morning Ireland’s ''Hidden Gems'' series with Cian McCormack, Mrs Robinson said it was a difficult decision not to be president for a second term.\r\n\r\n', 'Trending', '2017-02-09', '10:39:11', 'A.J King', 'Political Correspondant'),
(4, '''Administrative error'' led to false McCabe sex abuse allegation', 'It has emerged that Tusla, the child and family agency, sent a file containing false allegations of sexual abuse against Garda whistleblower Sergeant Maurice McCabe to gardaí in 2013.\r\n\r\nIn April 2014, social workers in Tusla opened files in the names of each of Sgt McCabe’s children. All four files included the allegations of sexual abuse.', 'Sport', '2017-02-09', '16:21:02', 'Brian Joyce', 'Sports Reporter'),
(5, 'Report recommends use of medicinal cannabis', 'A major report to be published later today is to recommend that medicinal cannabis be made available to patients with specified medical conditions. It is among a number of recommendations contained in the Cannabis for Medical Use report, which is to be published by Minister for Health Simon Harris.\r\n\r\nThe report makes eight recommendations and was compiled by the Health Products Regulatory Authority.', 'Headline', '2017-02-08', '06:55:06', 'Chris Kemp', 'Editorial Assistant'),
(6, 'Donohoe rules out replacing Kenny as Fine Gael leader', 'Minister for Public Expenditure and Reform Paschal Donohoe has said that it is up to Taoiseach Enda Kenny to decide when he will stand down as Fine Gael leader.\r\n\r\nSpeaking on RTÉ''s Morning Ireland, Mr Donohoe ruled out putting his name forward if there is a leadership contest.\r\n\r\n', 'Trending', '2017-02-09', '13:18:43', 'Catherine Noonan', 'Associate Editor'),
(7, 'LA police investigate Bieber headbutt allegation', 'Police in Los Angeles are investigating an allegation that singer Justin Bieber headbutted a man in a restaurant after fighting with two bartenders.\r\n\r\nThe Los Angeles County Sheriff''s Department said it responded to a battery report at the Serafina Sunset restaurant on Sunset Boulevard at around 2am last Saturday morning. ', 'Politics', '2017-02-10', '17:08:39', 'Conor Brennan', 'Political Reporter'),
(8, 'Irish films to watch at the Dublin International Film Festival', 'Ireland’s premier film festival is due to kick off on February 16th with a rich and diverse selection for cinema fans to greedily consume.\r\n\r\nHere are a selection of program picks featuring the best of our home-grown talent.', 'Sport', '2017-02-10', '16:30:19', 'Damien Byrne ', 'Sports Reporter'),
(9, 'Ireland rugby star Sean O''Brien opens up about lucky escape from deadly slurry gas', 'The sports star shares the recent hazardous experience on his family farm when he suffered cramps in his arms and a pain in his head after accidentally inhaling fumes while scraping out a slurry tank.\r\n\r\n“Last year I was doing some agitating some slurry.\r\n\r\n“After the agitation I left it for an hour or so I had to scrape up and clean around the tank.\r\n\r\n“On my way back to Dublin that night I started having cramps in my arms and a bad pain in my head.\r\n\r\n"When I went to the doctor he said I probably got a whiff of gas and it made me very aware of the precautions around the use of slurry and agitating and making sure guards and covers are well in place," he said.\r\n\r\n“Stay away from slurry as much as possible when working with it,” he warned.\r\n\r\nO''Brien made the comments in an educational film, made by Roscommon CBS transition year students and their ag science teacher.', 'Trending', '2017-03-31', '16:00:00', 'Ciaran Moran', 'Editor'),
(10, 'Adrian Weckler: This giant loophole is making a joke of EU''s roaming law', 'We are all fools. We believed them when they said that EU roaming costs would be abolished on June 15. Now we discover that there''s a giant loophole.\r\nThree and Meteor say that the EU law ushering in a "roam like home" era this summer doesn''t apply if they jigger about with their terms and conditions.\r\nUnder the benign gaze of the telecoms regulator Comreg, two out of three of Ireland''s biggest mobile operators now openly say that their customers won''t get the same amount of data when travelling abroad in the EU as they will at home.\r\n\r\nThree is about to show how this can be achieved. It has new terms and conditions as part of its €5-a-month price rise. It will keep offering ''all you can eat'' data (up to 60GB according to its small print) at home. But Three now says that this is a "service benefit", not a "core" part of the contract. The "core" part will be a fraction of its actual 60GB limit, as low as 1GB (and up to 7GB). By "restructuring" it this way, it only has to honour the lower bit when its customers travel across the EU and try to "roam like home". Charges of €60 for every gigabyte will apply thereafter.\r\nIf allowed to stand, and Three is confident it will, it makes a mockery of the EU roaming abolition law.\r\n\r\nMeteor, incidentally, has the same idea and has itself put in place a two-tier data system for when the EU law passes. And now the smaller operators, such as Tesco Mobile and Virgin Media, are "reviewing their plans" around the issue. Only Vodafone is publicly saying that it will let customers use every bit of data abroad that they''re entitled to at home.\r\nWhat does Comreg say? "When the new rules come into force on June 15 2017, ComReg will monitor operators to ensure they are in compliance with the new rules". Except the new rules clearly only apply to calls and texts, not to the most important bit: data.\r\n\r\nWe''ve been lied to by the EU. We''ve been misled by our politicians. Our regulator appears not to be bothered.\r\nWhat a joke.', 'Trending', '2017-03-15', '12:34:00', 'Adrian Weckler', 'Word Smith');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
