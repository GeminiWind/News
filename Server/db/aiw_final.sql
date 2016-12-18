-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 08:31 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiw_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `url_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `short_intro`, `content`, `slug`, `category_id`, `url_image`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 'Griezmann knows winning the Ballon dOr is impossible', 'In the same area that every football pundit and historian has been agreeing, French winger Antoine Griezmann knows that despite having completed what could be considered the best season of his career, there is no chance for him to actually win the Ballon d Or as long as Leo Messi and Cristiano Ronaldo are still active. His name will remain in a secondary role like Frank Ribery, Manuel Neuer, Andres Iniesta or Xavi Hernandez have been in the past. ', 'In the same area that every football pundit and historian has been agreeing, French winger Antoine Griezmann knows that despite having completed what could be considered the best season of his career, there is no chance for him to actually win the Ballon d Or as long as Leo Messi and Cristiano Ronaldo are still active. His name will remain in a secondary role like Frank Ribery, Manuel Neuer, Andres Iniesta or Xavi Hernandez have been in the past. \n\nTalking to Telefoot, Griezmann said: "The Ballon d Or is one of my objectives, but it will be complicated so long as Ronaldo and Messi are around. Cristiano Ronaldo will be a legend of the game in 10 years time or so. It is up to me to keep working hard to reach that level. I work hard every day to improve. Ronaldo has enjoyed a great season. He won the Champions League and Euro 2016. It would be deserved if he wins the Ballon d Or. But there is always Messi to take into account. He is present every year when it comes to the Ballon d Or."\n\nWithout any room for doubt, Griezmann will accompany both Messi and Ronaldo in the podium for the FIFA The Best award and will be voted by many journalists in France Football to win the Ballon d Or. But there is no chance any player will take this award from Cristiano Ronaldo this year, Messi is the one who could surprise the world but it s highly unlikely. ', 'griezmann-knows-winning-the-ballon-dor-is-impossible', 2, 'images/articles/1.jpg', 1, '2016-11-28 00:00:00', '2016-11-28 00:00:00'),
(2, 'Nintendo New Console May Feed Your Nostalgia, if You Can Get One', 'When she heard that Nintendo was planning to reproduce its iconic Nintendo Entertainment System video game console for the holiday season, Emily Bradbury put a note on her calendar and set an alarm on her phone.', 'When she heard that Nintendo was planning to reproduce its iconic Nintendo Entertainment System video game console for the holiday season, Emily Bradbury put a note on her calendar and set an alarm on her phone.\n\nShe was not interested in buying it for her children. She wanted it for her husband.\n\n“He’s 40 years old and grew up with a Nintendo,” Ms. Bradbury said. “It’s a nostalgia thing.”\n\nSince its release on Nov. 11, the NES Classic Edition, a smaller version of the original console introduced to North America in 1985, has become one of the hottest gift items of the year. It has struck a chord especially among older millennials and younger members of Generation X, who may have found in it a video game system to share with their children — if they don’t just keep it for themselves.\n\nIt retails for $60, with one original controller, and comes preloaded with 30 classic games, including Super Mario Bros., Donkey Kong, The Legend of Zelda and Tecmo Bowl.\nBut this trip down memory lane has not been without headaches. Nintendo has been sluggish in responding to the demand, resulting in huge markups on the secondary market, including on sites like eBay, where the consoles were being resold for as much as $390. Those higher prices are sure to stand out even more on Monday, when many other brands and retailers cut prices for Cyber Monday, the online version of Black Friday.\nOn the release date, most retailers, including Amazon and GameStop, sold out almost immediately. (Pre-orders had sold out over the summer.) Walmart kept a very limited supply in stock that it trickled out in online flash sales over the last two weeks. The consoles sold out within two minutes each time. Heeding her calendar warnings and alarms, Ms. Bradbury tried to order the NES online through Amazon and Walmart but could not act quickly enough. She even enlisted friends to visit nearby Target and Best Buy stores in Wichita, Kan., the closest big city to her home. But they, too, returned empty-handed.\n“I thought it would be a bunch of us 40-something people going after it, but it won’t be much of a big deal,” said Ms. Bradbury, the member services director for the Kansas Press Association, a trade organization for Kansas newspapers. “I was shocked.” But Michael Pachter, a Wedbush Securities analyst, said he was not surprised by the intense demand or the low supply, which he considered an intentional move by Nintendo to garner attention, knowing that it could restock before the holiday shopping season was over.\n\n“The Classic is sold out for three reasons: It’s nostalgic, it’s cheap and Nintendo clearly didn’t ship enough of them,” Mr. Pachter said in an email, adding: “There is plenty of time to stock the channel. They may miss Black Friday, but they won’t miss Xmas.”\nIn a statement, Nintendo said that it was “working hard to keep up with consumer demand.”\n“There will be a steady flow of additional systems through the holiday shopping season and into the new year,” the statement read. The company declined to comment further.\nDavid Cole, the chief executive of DFC Intelligence, a market research firm, said there was a lot riding on Nintendo’s ability to satisfy demand in the next few weeks. The company is introducing a new product, Nintendo Switch, in 2017, which it hopes will make up for its lagging sales of the Wii U and its late entry into mobile gaming. Pokémon Go, which was released over the summer and is partially owned by Nintendo, was the company’s first major effort in mobile gaming, and it was a sensation. Mr. Cole said buyers were pursuing the NES Classic Edition mostly for nostalgia, but he thought the console could potentially make older customers interested in future Nintendo products. “They had really lost their brand identity the past two years,” Mr. Cole said. “This was the kind of thing that was perfect for bringing that back.”\nIndependent journalism. More essential than ever.\nSUBSCRIBE TO THE TIMES \nBut such a plan will work, Mr. Cole added, only if Nintendo manages to restock before the holidays are over. “If they don’t, they really miss out on an opportunity,” he said. “That demand might not carry over into 2017.” Jim Silver, editor of TTPM, a toy review website, says that nostalgic items have been big this year, and that retailers are recognizing that many of the children who grew up in the 1980s are starting families of their own. He noted that Stretch Armstrong figurines, and Strawberry Shortcake and Teddy Ruxpin dolls have all begun making comebacks. The NES is no different.\nThe Nintendo NES Classic Edition has struck a chord among older millennials and younger members of Generation X. Credit Nintendo\n“This is not 8-year-olds saying, ‘I need to have Zelda,’” Mr. Silver said. “This is adults saying, ‘These were my favorite games. I get to play them again.’”\nBut shopping for a hot holiday item, even online, is hardly simple today. And those who have managed to acquire the new NES at the retail price seem to have benefited from extensive planning, research and luck — even strategizing since July, when Nintendo announced its plans to release the NES. Michael Salazar, from Sacramento, Calif., managed to place a request to pre-order a console on July 22 through Amazon’s British website. When it arrived last week, shipped directly from Edinburgh, Mr. Salazar was elated. He then used a secondary site, which tracks inventory at Target stores, to monitor whether any consoles had arrived locally. When he saw that a nearby Target had received three, he rushed there at 7:30 a.m. on a Sunday to buy one as a present for his brother-in-law. Now, he is looking for a third to give as a gift. “I’m 38; that’s my childhood,” Mr. Salazar said. “Nintendo was always a very important piece of my life.” Amanda Schluer, of Rocklin, Calif., had the foresight in July to set an alert on Amazon for one minute before the release date. Then she watched the seconds tick down. “I’ve sat and waited for Garth Brooks tickets the same way,” Ms. Schluer said. “Just wait until the second they go on sale and push the button.” By acting quickly, Ms. Schluer, 38, managed to buy a console. She and her husband even took their NES to Los Angeles to play with family over Thanksgiving. “We have a Wii, and my kids never play it,” said Ms. Schluer of her two daughters, ages 6 and 10. “That’s the good thing about the old retro games,” Ms. Schluer added. “They are fun, they’re age-appropriate, and it’s something we can all play together.”', 'nintendo-new-console-may-feed-your-nostalgia-if-you-can-get-one', 1, 'images/articles/2.jpg', 2, '2016-11-27 00:00:00', '2016-11-27 00:00:00'),
(3, ' BBC Sound of 2017: Urban acts dominate longlist', 'Building on the success of grime acts Stormzy, Kano and Skepta - who won this years Mercury Prize - newcomers like Ray Blk and Nadia Rose are being tipped for success in the BBCs annual list.\nSoul singer Rag N Bone Man and rock provocateurs Cabbage also make the cut.\nThe list was compiled using tips from a panel of 170 DJs, critics and writers.\nIt aims to highlight 15 of the most promising rising musical acts for the coming year. Previous winners include Adele, 50 Cent, Ellie Goulding and Sam Smith.', 'Many of this years nominees have garnered attention by working outside the traditional music industry.\nClassically trained rapper Dave racked up more than two million YouTube plays for his self-released single Wanna Know, which was championed, and later remixed, by hip-hop star Drake.\n"I had labels playing deal or no deal like Im Noel Edmonds," the 18-year-old rapped on the single People Know. But he stuck to his guns and released his current EP, Six Paths, on his own label.\nSoul singer Jorja Smith is similarly self-sustaining, filming videos at her aunts house and creating her own artwork.\nThe longlist also highlights a resurgence in political songwriting, thanks to artists like Declan McKenna, whose recent single Isombard lampoons right-wing US news network Fox News.\nThe 17-year-old from Hertfordshire previously took aim at Fifa on the song Brazil, which laments the destruction of thousands of homes in preparation for the 2016 World Cup.\nPost-punk quartet Cabbage have written songs about Kim Jong Un and Donald Trump, while displaying a streak of dark humour that echoes fellow Mancunian John Cooper Clark.\nEllie GouldingImage copyrightREUTERS\nPrevious BBC Sound Of... winners\n2016 - Jack Garratt\n2015 - Years and Years\n2014 - Sam Smith\n2013 - Haim\n2012 - Michael Kiwanuka\n2011 - Jessie J\n2010 - Ellie Goulding (pictured)\n2009 - Little Boots\n2008 - Adele\n2007 - Mika\n2006 - Corinne Bailey Rae\n2005 - The Bravery\n2004 - Keane\n2003 - 50 Cent\nInternational artists on the list include hotly-tipped rapper Anderson .Paak, who shot to fame after featuring on Dr Dres Compton soundtrack last year ;and Maggie Rogers, who left Pharrell Williams speechless earlier this year.\nThe star producer was asked to critique one of her songs during a masterclass at NYUs Clive Davis Institute. But as the song progressed, the stunned look on his face gave way to quiet awe.\n"Wow," he said. "I have zero notes."\nA video of their encounter went viral; with the song, Alaska, streamed more than 21 million times. Rogers has since signed a deal with Polydor Records.\nPharrell Williams and Maggie RogersImage copyrightI AM OTHER / YOUTUBE\nImage caption\nPharrell Williams was taken aback by Maggie Rogers blend of folk and dance music\nGravel-voiced singer Rag N Bone Man hails from Brighton and sounds like a modern-day Joe Cocker. He may already be familiar to viewers of Later... With Jools Holland after performing a stunning acoustic version of his single Human in September.\nThe song is already a major hit outside the UK and is currently spending its ninth week at the top of the German singles chart.\nOther acts on the longlist include grime artist AJ Tracey, pop singer Raye and straight-talking MC Stefflon Don.\nThere are also spots for electro-pop enigma The Japanese House, Reading-based rock band The Amazons and singer-songwriter Tom Grennan, who recently appeared on the Chase & Status single When It All Goes Wrong.\nJack Garratt\nImage caption\nSound of 2016 winner Jack Garratt has a top three hit with his debut album Phase\nThe Sound of... list launched in 2003 and has a track record in championing new and innovative acts, many of whom have gone on to achieve global success.\nAccording to the rules, the acts should not already be well known to the UK general public - which excludes X Factor contestants and band members pursuing a solo career.\nThey must not have had a top 20 single or album before 30 October 2016 - although guest vocalists remain eligible.\nThe 15-act longlist will be whittled down to five in the new year, with the winner announced on 6 January.\nRadio 1 DJ Mistajam said the Sound of 2017 showed that the next 12 months would be "filled with amazing music from homegrown talent".\nHe said: "From the driving rock of The Amazons to Daves 18-year-old inner city street tales. The list shows the breadth and quality of what we can all expect next year."', 'bbc-sound-of-2017-urban-acts-dominate-longlist', 5, 'images/articles/3.jpg', 3, '2016-11-29 00:00:00', '2016-11-29 00:00:00'),
(4, ' In the future, will farming be fully automated?', 'In the not-too-distant future, our fields could be tilled, sown, tended and harvested entirely by fleets of co-operating autonomous machines by land and air.', 'In the not-too-distant future, our fields could be tilled, sown, tended and harvested entirely by fleets of co-operating autonomous machines by land and air.\nAnd they will be working both day and night.\nDriverless tractors that can follow pre-programmed routes are already being deployed at large farms around the world.\nDrones are buzzing over fields assessing crop health and soil conditions. Ground sensors are monitoring the amount of water and nutrients in the soil, triggering irrigation and fertiliser applications.\nAnd in Japan, the worlds first entirely automated lettuce farm is due for launch next year.\nThe future of farming is automated.\nFood shortages, big business\nThe World Bank says we will need to produce 50% more food by 2050 if the global population continues to rise at its current pace.\nBut the effects of climate change could see crop yields falling by more than a quarter.\nSo autonomous tractors, ground-based sensors, flying drones and enclosed hydroponic farms could all help farmers produce more food, more sustainably at lower cost.\nNo wonder the agricultural robotics sector is growing so fast.\nDriverless tractor tilling in fieldImage copyrightCNH INDUSTRIAL\nImage caption\nAutonomous tractors may become a common sight in our fields\nOne report, by US firm WinterGreen Research, forecasts that the market will grow from $817m (£655m) in 2013 to $16.3bn (£13bn) by 2020.\nBut investment bank Goldman Sachs is far more bullish, predicting a $240bn market over the next five years. Manufacturers including John Deere, CNH Industrial and AGCO are all fighting to corner the market in driverless tractors.\nAs well as big kit, small kit is giving farmers up-to-the-second data on the state of their fields and produce - what Dr Roland Leidenfrost of Deepfield Robotics calls the "internet of plants and fields".\nBosch start-up Deepfield, based in Germany, is working to automate the growing and testing of seed crops, tracking the susceptibility to weeds and drought of different genetic varieties.\nMeanwhile, engineers in Shropshire, England, are trying to show it is now possible to farm a field without a human setting foot in it at all.\nThe Hands Free Hectare project will use flying drones and automated tractors in the coming year to grow and harvest a cereal crop.\nAerial shot of field being ploughed by driverless tractorImage copyrightHARPER ADAMS UNIVERSITY\nImage caption\nThe Hands Free Hectare project aims to cultivate a field without humans setting foot on it\nEngineers from Harper Adams University - together with a North Yorkshire farming technology company called Precision Decisions - are testing prototype machines now, and aim to plant their crop in March for harvest in September.\nPrecision pruning\nIt is hard to imagine the most traditional of agricultural sectors - wine making - as needing more than natural sunshine and soil. But even here automation is encroaching.\nWine makers have used drones to inspect their vineyards for several years, with high-definition cameras and sensors assessing crop and soil health.\nBut in France is Burgundy region, a shortage of farm labour has led inventor Christophe Millot to develop a vine-pruning robot called Wall-Ye.\nVine pruning robot in vineyardImage copyrightWALL-YE\nImage caption\nThis automated vine pruner can make a cut every five seconds\nThe latest generation of this trundling four-wheeled robot can make a cut every five seconds. It has six cameras - some with infrared sensors - and two arms, and is controlled by a tablet computer inside.\nThe machine learns as it goes and can trim the grass around each vine. An onboard solar-powered battery gives 10-12 hours of charge, so with a change of battery, it can work day and night.\nVisual recognition is the biggest challenge, says Mr Millot - knowing where to make the cut. This is actually easier at night, because the robot is  lights can illuminate the plant, but not its background.\nNext year, he plans to go to California - another major wine-producing area - to market his range of winery robots there.\nRobo lettuce\nBut some people think farming land is old hat.\nJapanese firm Spread is automated vegetable factory in Kyoto, due to launch next year, could produce 30,000 lettuces a day, the company says.\nIt stretches up, instead of across undulating fields, because "in countries like Japan, where land is actually a very scarce resource, it makes more sense to stack your production, just like a skyscraper," says JJ Price, Spread is global marketing manager.\nEverything after seeding will be done by machines - watering, trimming, harvesting - on shelves stacked from floor to ceiling. It is a bit like the solitary drone farmers in the 1972 film Silent Running.\nYoung lettuces under LED lights on racksImage copyrightSPREAD\nImage caption\nSpread is fully automated lettuce factory is due to open next year\nAutomation has reduced labour costs by 50%, says Mr Price. And LED lighting developed specifically for plant cultivation reduces energy costs by 30%.\n"It doesnot matter what the weather or climate is outside," he says.\nAnd growing vegetables in vertical farms means you can recycle 98% of the water, says Mr Price, and produce food much closer to where people consume it, cutting down on transport costs and emissions.\nDrone monitors\nBack outside, drones are monitoring crop growth rates, spotting disease, and even spraying crops with pesticides and herbicides.\nNow researchers are also trying to make them co-operate and work in swarms.\nIf they are mapping weeds in a field, say, "the drones will recruit each other to converge on those areas where the weed presence is higher," says Dr Vito Trianni of the Institute of Cognitive Sciences and Technologies in Rome.\nCopter drone spraying fruit treesImage copyrightHSE\nImage caption\nDrones are being used for precision crop spraying\nAlthough GPS signals are generally strong in agricultural areas, one challenge for drones and other farmland robots is coping with patchy internet and mobile connectivity.\nSo Dr Trianni is team is using ultra-wideband radio for his drones to communicate without relying on rural 3G or 4G mobile connections.\nOf course, automation might promise more efficient food production, but it also threatens agricultural jobs.\nFrom 1950 to 2010, according to the International Labour Organization (ILO), agricultural labourers as a percentage of the workforce declined from 81% to 48.2% in developing countries, and from 35% to 4.2% in developed ones.\nRobots will surely accelerate this decline.', 'in-the-future-will-farming-be-fully-automated', 3, 'images/articles/4.jpg', 4, '2016-11-25 00:00:00', '2016-11-25 00:00:00'),
(5, ' Breitbart news site blocked by ad exchange', 'A leading ad exchange has blacklisted Breitbart News, which until recently was run by one of US President-elect Donald Trump closest advisers.', 'A leading ad exchange has blacklisted Breitbart News, which until recently was run by one of US President-elect Donald Trumps closest advisers.\nAppNexus said it would no longer allow Breitbart to sell ad space via its platform, after determining that the site had broken its code on hate speech and incitement to violence.\nBreitbart responded saying it "has always and continues to condemn racism and bigotry in any form".\nAppNexus has not given examples.\nBut a spokesman said a "human audit" of Breitbart had flagged several articles that had caused it concern because of the language they had featured.\n"We use a number of third-party standards to determine what is and isnt hate speech, and if we detect a pattern of speech that could incite violence or discrimination against a minority group, we determine that to be non-compliant and we simply wont serve ads against it," AppNexuss spokesman Joshua Zeitz told the BBC.\n"Im not going to put the examples out there because Im not going to engage in a tit-for-tat on what is compliant."\nThe Bloomberg news agency was first to report the development.\nAppNexusImage copyrightAPPNEXUS\nImage caption\nAppNexus says its tools can deliver billions of ad views every day\nIt noted that AppNexus investors included Microsoft, News Corp and Sir Martin Sorrells WPP.\nThe move follows an earlier ban by Twitter of one of Breitbarts most prominent writers, after claims he had incited abuse against an actress.\nContentious headlines\nBreitbart is a right-wing news network based in the US that also has outposts in the UK and Israel.\nIt is popular with readers from the "alt-right" - which it defines as being "younger people who are anti-globalists, very nationalist [and] terribly anti-establishment" - but does not recognise itself as being a part of the movement.\nAnd several of the sites headlines have been provocative, including:\nThe solution to online harassment is simple: Women should log off\nHoist it high and proud: The Confederate flag proclaims a glorious heritage\nData: Young Muslims in the West are a ticking time bomb, increasingly sympathising with radicals, terror\nSome critics have also condemned a headline containing the words "renegade Jew".\nHowever, the sites former executive chairman Steve Bannon recently noted that it had been written by a guest contributor rather than one of Breitbarts own staff.\nSteve BannonImage copyrightGETTY IMAGES\nImage caption\nSteve Bannon was an officer in the United States navy and worked at Goldman Sachs bank before joining Breitbart\nMr Bannon now serves as chief strategist to Donald Trump.\nThe appointment has been criticised by civil rights groups, including the Southern Poverty Law Center, the Anti-Defamation League and the Council on American Islamic Relations, because of Mr Bannons record at Breitbart.\nBut when the president-elect was asked by the New York Times what he made of those concerns, Mr Trump said: "Breitbart, first of all, is just a publication.\n"They cover stories like you cover stories.\n"Now, they are certainly a much more conservative paper, to put it mildly, than The New York Times.\n"But Breitbart really is a news organisation that has become quite successful.\n"Its got readers, and it does cover subjects that are on the right, but it covers subjects on the left also.\n"Its a pretty big thing."\nFor his part, Mr Bannon told the Wall Street Journal he accepted the alt-right had "some racial and anti-Semitic overtones", but added that he had zero tolerance for such views.\nProtestersImage copyrightGETTY IMAGES\nImage caption\nMr Bannons appointment has proved controversial\n"Breitbart is the most pro-Israel site in the United States of America," he added.\nOther ad platforms including those of Google, Amazon, RadiumOne, OpenX and Ghostery continue to operate via Breitbarts site.\n"We think that all ad tech companies should have rules governing hate speech," said Mr Zeitz.\n"We are not in a position to tell them how to make their decisions. But [the rules] should be consistently enforced."', 'breitbart-news-site-blocked-by-ad-exchange', 1, 'images/articles/5.jpg', 5, '2015-12-03 00:00:00', '2015-12-03 00:00:00'),
(6, 'Vietnam’s overseas investments reach 20.38 bln USD', 'In the first eight months of this year, Vietnamese businesses’ overseas investments reached 705.8 million USD with 71 newly licensed projects and 35 adjusted projects.', 'In the first eight months of this year, Vietnamese businesses’ overseas investments reached 705.8 million USD with 71 newly licensed projects and 35 adjusted projects.', 'vietnams-overseas-investments-reach-2038-bln-usd', 3, 'images/articles/6.jpg', 6, '2016-12-05 04:07:19', '2016-12-05 04:07:21'),
(7, 'Snake Robots: Can you watch this without squirming?', 'How about we put that in an innovative light? Today we Ever Widening Circles brings you the story of robots with the advantages of a snakes.', 'First, a quick look at where we are going today…', '7snake-robots-can-you-watch-this-without-squirming', 1, 'images/articles/7.jpg', 7, '2015-11-11 05:20:38', '2015-11-11 05:20:39'),
(8, 'Eight Hidden Gems Around the World', 'One of our favorite YouTube Channels, Great Big Story, has taken its followers around the world celebrating the remarkable people and places that make up Earth’s beautiful cultural and natural tapestry.', 'One of our favorite YouTube Channels, Great Big Story, has taken its followers around the world celebrating the remarkable people and places that make up Earth’s beautiful cultural and natural tapestry.', 'eight-hidden-gems-around-the-world', 1, 'images/articles/8.jpg', 7, '2016-12-18 05:25:00', '2016-12-18 05:25:00'),
(9, 'Life Lessons from Asia’s Forgotten Mountain', 'Every Saturday, we write about the amazing places around the globe and the remarkable people exploring them. If you want to see all the cool corners of the globe we have written about, check out our Saturdays Around the World category!', 'Sometimes it’s hard to believe adventure is still out there on this planet. Surely, there are very few places left to explore for the first time!', 'life-lessons-from-asias-forgotten-mountain', 8, 'images/articles/9.jpg', 7, '2016-10-15 05:32:07', '2016-10-15 05:32:15'),
(10, 'Building Futures with Half a House', 'What if we saw scarcity not as an obstacle but as a tool? How does not having “enough” change the way we solve problems? Can it make us better?', 'What if we saw scarcity not as an obstacle but as a tool?', 'building-futures-with-half-a-house', 10, 'images/articles/10.jpg', 7, '2016-10-14 05:40:03', '2016-10-14 04:40:07'),
(11, 'Saving the Rainforest with Old Cellphones', 'How do you go about saving the rainforest with old cell phones?', 'How do you go about saving the rainforest with old cell phones?\r\n\r\nAfter a visit to the rainforests of Borneo, physicist and engineer Topher White was struck by the sounds of the forest. In particular, he noises he couldn’t hear.\r\n\r\nWhile on a walk, White and others came across an illegal logger sawing down a tree just a few hundred meters away from a ranger station.\r\n\r\nThis incident set White thinking that perhaps the best way to save the Earth’s precious rainforest is to listen for its loggers and poachers. The innovation he came up with, Rainforest Connection, uses old cellphones to help to save the planet in a big way.\r\n\r\nHere is Topher White on the National Geographic Live stage…\r\n\r\n\r\n\r\nVia: National Geographic Live 1\r\nBecoming empowered to make a difference…\r\nIt’s hard to feel like our actions have an impact in solving a problem like deforestation. We can choose to change our spending habits to stop the economic support of deforestation, but this doesn’t necessarily have an impact at the root of the problem.\r\n\r\nWe can, though, choose to support projects like Rainforest Connection!\r\n\r\nIf you have an old cellphone you want to give a second life saving the rainforest, you can send it to Rainforest Connection, and if the device doesn’t work for their needs, the donation will still go to supporting the project. You can check out how you can get involved with this project over on the Rainforest Connection website.\r\n\r\nPerhaps it is time to change the narrative about saving the planet. We need to feel empowered and the more we understand how our small actions can have an enormous impact, the more we engage others to do the same.\r\n\r\nFor those that want to see an incredible example of our collective choices empowering us to make a difference, check out our article on SeaWorld’s decision to end its killer whale breeding programs and captivity!\r\n\r\nWANT TO SEE MORE POSITIVE NEWS, FUN, OR INSIGHTS?\r\n\r\nHead to our homepage to check out our latest articles, circles, and archives! Even better, subscribe below to receive the latest from EWC right to your inbox!\r\n\r\nOr just scroll down to the bottom of this page where you’ll find a few more incredible articles like this one!\r\n\r\nStay beautiful & keep laughing!\r\n', 'saving-the-rainforest-with-old-cellphones', 8, 'images/articles/11.jpg', 7, '2016-04-04 05:53:53', '2016-04-04 05:54:04'),
(12, 'Bucks ''entertainment block'' wins plan commission approval ', 'The Milwaukee Bucks plans for an ''entertainment block'' just east of the new downtown arena won approval Monday from the Milwaukee City Plan Commission.', 'The Milwaukee Bucks plans for an ''entertainment block'' just east of the new downtown arena won approval Monday from the Milwaukee City Plan Commission.\r\n\r\nCommissioners praised the design plans presented by Matt Rinka of Rinka Chung Architecture, Milwaukee. Commissioner Whitney Gould called the architectural drawings beautiful.\r\n\r\nRendering of a microbrewery that could be part of the entertainment block being developed near the Bucks'' new arena\r\nEnlarge\r\nRendering of a microbrewery that could be part of the entertainment block being developed… more\r\n\r\nMILWAUKEE BUCKS\r\n\r\n“I think it’s so honest and transparent and gritty,” Gould said.\r\n\r\nRinka said the design will convey Milwaukee’s industrial history while presenting contemporary qualities. Three buildings on the entertainment block would be developed by the Bucks owners and could include a restaurant in a two-story structure and a microbrewery in a four-story building.\r\n\r\nRinka said the plaza will be a “destination for really exciting tenants that aren’t finalized yet but are very unique to southeast Wisconsin.”\r\n\r\nGould questioned whether the landscaping for the public plaza on North Fourth Street between the arena and entertainment block will maintain the quality of the rest of the design.\r\n\r\nRinka said the drawings before the plan commission didn’t necessarily show the world-class work of the Bucks landscape architect The Office of James Burnett of Houston. He said the open areas are designed to be welcoming to people attending arena events as well as tourists and Milwaukee-area residents year-round.\r\n\r\nA pedestrian corridor linking the plaza and entertainment block with establishments on North Old World Third Street will be covered with a roof that can be closed during cold and inclement conditions, Rinka said. Another pedestrian corridor will run on an angle from the main plaza to West Highland Avenue.\r\n\r\nWhen Bucks president Peter Feigin discussed the Bucks plans for public art on the plaza and the arena, plan commissioner J. Allen Stokes made a couple points.\r\n\r\nStokes said the Bucks need to be aware that North Old World Third Street downtown and North Dr. Martin Luther King Jr. Drive — the continuation of Third Street — on the near north side “has always been the racial divide” in the city. He asked whether the Bucks will keep the African-American community in mind.\r\n\r\n“This gives an opportunity to have community togetherness at the plaza,” Stokes said.\r\n\r\nFeigin said the Bucks agree with Stokes’ sentiment.\r\n\r\n“Inclusiveness for all participants will be part of the strategy,” Feigin said.\r\n\r\nThe Bucks are in the late stages of hiring a curator for the public art, Feigin said. He said the public plaza will include two or three large public art pieces. The corners of the arena also may include public art, he said.\r\n\r\nFeigin said after the meeting the Bucks plan to start construction on the public plaza and entertainment block during the first half of 2017. Currently, a contractor is demolishing the old city-owned parking structure on Fourth Street to clear the site.\r\n\r\nThe entertainment block design heads to the Milwaukee Common Council’s Zoning, Neighborhoods and Development Committee in January. The public plaza proposal goes to the council’s public works committee in January as well.\r\n\r\nThe full Common Council is expected to vote in January on both the entertainment block and public plaza.\r\n', 'bucks-entertainment-block-wins-plan-commission-approval', 3, 'images/articles/12.jpg', 8, '2016-12-05 06:00:37', '2016-12-05 06:00:50'),
(13, 'Restaurant from Caribou Coffee and Einstein Bros. opening two locations in Milwaukee market', 'A newer restaurant concept from Caribou Coffee and Einstein Bros. Bagels is opening in the Milwaukee market.', 'A newer restaurant concept from Caribou Coffee and Einstein Bros. Bagels is opening in the Milwaukee market.', 'restaurant-from-caribou-coffee-and-einstein-bros-opening-two-locations-in-milwaukee-market', 12, 'images/articles/13.jpg', 9, '2016-12-01 06:04:30', '2016-12-01 06:04:40'),
(14, 'Penzeys says its sales spiked following CEO''s anti-Trump statements', 'The general consensus in the business community is that business and politics don''t mix, but one Wisconsin company is turning that logic on its head and profiting off strong, left-leaning statements sharply criticizing President-elect Donald Trump made by the company''s CEO.', 'The general consensus in the business community is that business and politics don''t mix, but one Wisconsin company is turning that logic on its head and profiting off strong, left-leaning statements sharply criticizing President-elect Donald Trump made by the company''s CEO.\r\n\r\nWauwatosa-based Penzeys Spices is apparently cashing in big time thanks to peppery anti-Trump comments Bill Penzey, the company''s CEO, made in November after the presidential election. The manufacturer and retailer of spices said in an email to customers Thursday that — in the two weeks since Bill Penzey said that all Trump voters "just committed the most racist act" since segregation— sales have skyrocketed regardless of the political firestorm that was wrought.\r\n\r\nAccording to a Dec. 1 email sent to customers, online sales for Penzeys Spices are up nearly 60 percent and gift box sales are up 135 percent since Bill Penzey''s anti-Trump remarks last  month.\r\nEnlarge\r\nAccording to a Dec. 1 email sent to customers, online sales for Penzeys Spices are up… more\r\n\r\nTODD BRAGSTAD\r\n\r\nAccording to that Dec. 1 email sent to customers, online sales are up 59.9 percent and gift box sales are up 135 percent since those remarks. Apparently, customer loss — even though there were promises of boycott on social media in protest of Penzey''s comments — wasn''t much of a problem for the spice maker.\r\n\r\n"Willing to take a hit for what is right, we did what we did," the company said in Thursday''s email. "In the two weeks since, online sales are up 59.9 percent, gift box sales up 135 percent. And we didn''t have a catalog arrive in this window this year, while last year we had 1.1 million!\r\n\r\n"Yes, maybe for the moment we have lost 3 percent of our customers because of the so-called ''right wing firestorm.'' And, yes, they send emails of rage, and ALL CAPS, and bad language with the hope of creating the perception that they are bigger than they really are. But what we learned is that, in terms of retail spending, Donald Trump simply has no one supporting his views for America. He has no constituency."\r\n\r\nIn one of his original emails, the very liberal Penzey — who has been known to make strong statements on his political views in the past — said "the open embrace of racism by the Republican Party in this election is now unleashing a wave of ugliness unseen in this country for decades."\r\n\r\nIn the Dec. 1 email — which was directed toward the country''s CEOs — the business urged the leaders of the country''s companies to "stand up for the values of America" as soon as possible.\r\n\r\n"If, as a company, you have values, now is the time to share them," the email read. "You may well lose a chunk of your AM radio-listening customers, but if you really are honest and sincere, don''t be surprised to see your promotions suddenly, finally, find active engagement with the Millennial generation."\r\n', 'penzeys-says-its-sales-spiked-following-ceos-anti-trump-statements', 13, 'images/articles/14.jpg', 9, '2016-12-02 06:09:41', '2016-12-02 06:09:47'),
(15, 'Carson Is New Sign Trump Plans to Govern From the Right ', 'WASHINGTON — President-elect Donald J. Trump is moving to repudiate vast parts of President Obama’s domestic agenda as he fills his cabinet with conservatives who have long records opposing the current administration on social programs, wages, public lands, veterans and the environment.', 'WASHINGTON — President-elect Donald J. Trump is moving to repudiate vast parts of President Obama’s domestic agenda as he fills his cabinet with conservatives who have long records opposing the current administration on social programs, wages, public lands, veterans and the environment.', 'carson-is-new-sign-trump-plans-to-govern-from-the-right', 13, 'images/articles/15.jpg', 10, '2016-12-05 06:20:15', '2016-12-05 06:20:21'),
(16, 'A doctor who forgot the basics they teach you in medical school', 'I just wish I hadn’t shared this story with the last person I spoke to at a job interview who asked me what I thought was wrong with health care in the U.S. In reflection, I think she may be this doctor’s wife. I may need to add another medication. Does anybody know of a good doctor?', 'I was spending time with friends and family over the holiday when I started to experience various vague symptoms without an obvious etiology. Having been treated for high blood pressure about ten years prior before successfully overcoming the issue with exercise, I immediately recognized the return of the condition. (As an aside, it should be stated that elevated blood pressure typically produces no symptoms at all.)', 'a-doctor-who-forgot-the-basics-they-teach-you-in-medical-school', 14, 'images/articles/16.jpg', 11, '2016-03-03 06:25:42', '2016-03-03 06:25:50'),
(17, 'Marouane Fellaini a convenient scapegoat in Man United''s collapse', ': "It is easy for you to ask this after the game. I have to make the decision before the game," he replied. Barcelona''s Luis Enrique has said similar this season when faced with outrage after his side had the audacity not to win a football match.', 'Following one game at Old Trafford last season, then-Manchester United manager Louis van Gaal was questioned about a team selection decision he had made.\r\n\r\n"It is easy for you to ask this after the game. I have to make the decision before the game," he replied. Barcelona''s Luis Enrique has said similar this season when faced with outrage after his side had the audacity not to win a football match.\r\n\r\nOnly victory quells the perennial online anger of the modern football fan. When Jose Mourinho named his side for the first Premier League game of the season at Bournemouth, it wasn''t to the liking of many. Then, United won comprehensively and nothing more was said. When he named his team at Swansea in the previous away league game before Sunday''s match at Everton, there was similar outrage. Fans knew better. Except they didn''t; United won 3-1 and the online invective receded.\r\n\r\nAfter Manchester United conceded yet another late goal to draw yet another game, this time at Everton, fans were incredulous. Why had Marouane Fellaini been brought on with five minutes to play? Why is he even at United? The old prejudices against him were revived after he had clumsily conceded a penalty at the ground where he had often impressed for Everton.\r\n\r\nEvertonEverton\r\nManchester UnitedManchester United\r\n1\r\n1\r\nFT\r\nGame Details\r\nLive football odds with bet365. Bet Now »\r\nGameCast\r\nLineups and Stats\r\nMourinho brought the Belgian giant on to deal with Everton''s aerial threat after the out-of-form side began to ask questions of his defence. He brought him on to protect United''s hard-fought lead in another game his team had dominated. It didn''t work.\r\n\r\nMost fans need a scapegoat and Fellaini has long been a favoured one. Associated with a grim period in United''s history, he spends his life receiving abuse. He got a dollop more from Everton fans; he''d been a success for them, including making them a £12 million profit, but had the cheek to move to a bigger, more successful club on a better contract.\r\n\r\nFellaini manages to quiet the critics who think he''s not good enough to wear the red shirt when he plays well, but takes more stick than any other players when he doesn''t. It won''t wash with his naysayers that several managers value him -- teammates too.\r\n\r\nThey trust Fellaini to do a job and follow instructions, though he failed dismally at Goodison on Sunday. The dropping of two points can''t be laid solely at his feet; United had started to ease off 15 minutes before he took the field, just as they did against Arsenal two weeks ago. And, similar to the match against the Gunners, they invited their opponents to attack and conceded a late equaliser.\r\n\r\nUnited have dropped seven points due to goals scored against them in the final 10 minutes of league games this season -- more than any other side. Their late goals under Sir Alex Ferguson used to win games. Opponents'' late goals under Mourinho mean the league season is slipping away after a succession of careless errors.\r\n\r\nUnited have drawn more league games than they''ve won and sit sixth. Mourinho has seven fewer points than Van Gaal at the same stage last season. His team are 13 points behind leaders Chelsea after 14 games in 15 weeks. They have failed to win successive away games since September and have won just twice in the 11 matches since August. United have yet to beat a side in the top half of the table and yet oddly, are closer to a Champions League place than a week ago.\r\n\r\nStill, it''s a big gap and a woeful record and the millions who despise Manchester United are rejoicing for a third successive season. Many United fans are also ultra-critical, yet what''s the alternative? Sack another manager? Or support the team and be patient that he''ll get it right.\r\n\r\n\r\nJose Mourinho (right) still enjoys significant support, while Marouane Fellaini (left) is often the subject of fan ire.\r\nThe fans at matches are doing just that and Mourinho still enjoys significant support. Of course fans are worried, they hoped for a lot better under someone who wins everywhere he manages, but on the flip side they''re seeing better performances -- if not results. The football is much more entertaining than last season; a year ago today, the mood among fans was that they just wanted to be entertained again, to see their team attack after a goalless draw against West Ham.\r\n\r\nVan Gaal sent his team out to do just that against Wolfsburg in a Champions League match. Fans loved it -- it reminded them of the old United -- until they lost the game by a score of 3-2.\r\n\r\nMourinho is adamant that he''s been happy with the performances and that his players are doing what is asked for him. He thinks that opponents all play defensive, counterattacking football against United, which is a compliment to his team''s superior talent. The boot was on the other foot when his Inter Milan side played exactly that style of football on the way to winning the Champions League in 2010.\r\n\r\nMourinho''s players are content with their boss, who is less intense than he was a month ago. The players genuinely think that things will get better and accentuate the positives, though they''re also pre-disposed to think that because they want it to happen. And week after week, United are playing well, though they''re nowhere near as clinical as the top teams. Zlatan Ibrahimovic scored a fine goal, his 12th of the season. Ander Herrera, another player enjoying a decent run, hit the post when he could have made it 2-0. David De Gea had his best game for months.\r\n\r\nThere are negatives. Marcos Rojo was fortunate to only receive a yellow card after his double-footed challenge on Idrissa Gueye. Paul Pogba isn''t yet the influence on games that he can be.\r\n\r\nMourinho seized on these bright spots, claiming style is more important than results, then appeared to contradict himself. Whatever, the league results are not coming but fortunes are much better in the EFL cup and the Europa League -- at least at home. The team fly to the Black Sea resort of Odessa for Thursday''s final Europa group game against Zorya Luhansk. United fans need some dark humour to deal with events this season, especially in Europe, where United have lost both away games at Feyenoord and Fenerbahce. But for once a draw will do, as it''ll confirm qualification for the final 32.\r\n', 'marouane-fellaini-a-convenient-scapegoat-in-man-uniteds-collapse', 2, 'images/articles/17.jpg', 12, '2016-12-06 06:32:16', '2016-12-06 06:32:21'),
(18, 'Man United legend Paul Scholes taking coaching badges – sources', 'Paul Scholes is taking his coaching badges as he takes his first steps into a possible move into management, sources close to the former Manchester United star have told ESPN FC.', 'England''s exit from Euro 2016 at the hands of Iceland was the UK''s most tweeted-about sporting moment of the year, figures released figures by Twitter''s "#ThisHappened" reveal.', 'man-united-legend-paul-scholes-taking-coaching-badges-sources', 2, 'images/articles/18.jpg', 13, '2016-12-18 06:37:25', '2016-12-18 06:37:26'),
(19, 'The Year That Culture Disappeared', 'Donald Trump drowned out nearly every cultural event in 2016. And it’s only going to get worse.', 'Politics is entertainment. It is drama and spectacle and performance. This has long been known, from the Lincoln-Douglas debates on down. We refer to campaign messages as “narratives,” and to the people involved as a “cast of characters.” We divide politicians into heroes and villains, heels and faces. We seek our reflection, no matter how imperfect, in the candidates we support, and they in turn seek our approval like actors grinning nervously at a darkened audience. The appeal of presidential politics, in particular, lies in being both heavily scripted and hastily improvised, both real and thoroughly fake, a postmodern house of mirrors in which the very nature of authenticity is in question.', 'the-year-that-culture-disappeared', 13, 'images/articles/19.jpg', 14, '2016-12-05 06:41:55', '2016-12-05 06:42:02'),
(20, 'The culture was seedy’: the boys club at the heart of north-east football abuse scandal', 'Montagu and North Fenham boys club has a proud history of developing players but has also been exposed as a place where two men later convicted of child sex abuse crimes were involved for years', 'The Montagu and North Fenham boys club has a proud status in the historic football heartland of Newcastle, formed in 1948, with 70 coaches today running 31 boys’ and girls’ teams, playing to a high standard which has nurtured several outstanding alumni. Yet as the enormous scale of past sexual abuse in the sport has begun to emerge over the last fortnight from years of suffering and silence, this home of football in the west end of Newcastle has been exposed as one of the clubs which was targeted for decades.', 'the-culture-was-seedy-the-boys-club-at-the-heart-of-north-east-football-abuse-scandal', 2, 'images/articles/20.jpg', 15, '2016-12-06 06:47:27', '2016-12-06 06:47:27');
INSERT INTO `articles` (`id`, `title`, `short_intro`, `content`, `slug`, `category_id`, `url_image`, `author_id`, `created_at`, `updated_at`) VALUES
(21, 'Watch Disney World Change Epcot’s Main Attraction Into The Death Star', 'When Disney purchased Lucasfilm we all knew it was only a matter of time before Star Wars became a bigger part of Disney''s theme park business. The next step in that transformation was almost literal, as the famous Spaceship Earth globe at Epcot Center was turned into the Death Star for a special event in advance of Rogue One: A Star Wars Story. Check it out', 'Disney World held a special event last night just over a week before the release of Rogue One: A Star Wars Story in theaters. Mads Mikkelsen was in attendance as were the all black Stormtroopers. Previously being referred to as Imperial Death Troopers, we now know they''re officially called Advanced Weapons Research Troopers, which is quite a mouthful, but ultimately, it just refers to the facility that they''re tasked with guarding. This is the location that the Rogue One team will be tasked with infiltrating in order to steal the Death Star plans. We have seen them called Death Troopers elsewhere officially, so we''re guessing that''s some sort of rebel nickname for them.', 'watch-disney-world-change-epcots-main-attraction-into-the-death-star', 15, 'images/articles/21.jpg', 16, '2016-12-07 06:52:14', '2016-12-07 06:52:20'),
(22, 'Stormtroopers Just Made It Into A Police Recruitment Video, And It’s Hilarious', 'There are few film franchises more iconic or universally accepted among mainstream audiences than Star Wars. Over the last 40 years, the saga from the galaxy far, far away has become a central part of countless lives, and many elements from the films have become part of our collective, everyday existence. In fact, Star Wars is so iconic that a police department in Fort Worth used Imperial stormtroopers for awesome comedic effect in its recruitment video. Check it out below to see for yourself!', 'There are few film franchises more iconic or universally accepted among mainstream audiences than Star Wars. Over the last 40 years, the saga from the galaxy far, far away has become a central part of countless lives, and many elements from the films have become part of our collective, everyday existence. In fact, Star Wars is so iconic that a police department in Fort Worth used Imperial stormtroopers for awesome comedic effect in its recruitment video. Check it out below to see for yourself!\r\n\r\n\r\nIf you''re even remotely familiar with the Star Wars mythos, this Facebook video should instantly make sense to you. The clip begins with a stormtrooper at a firing range, flanked by a police officer. He fires his blaster repeatedly down range, but can never seem to make any of his shots land on target. As this continues, the police officer becomes increasingly frustrated as he continuously tells the stormtrooper to stop "jerking the trigger." Eventually the stormtrooper challenges the cop to do better, at which point the Fort Worth police officer draws his sidearm and empties his clip into the bulls eye of the target.\r\n\r\nLosing his mind due to his inability to hit the target, the stormtrooper walks closer and closer, but he can never seem to hit the mark. Eventually he turns to face the police officer instructing him, and almost shoots him in the process. Luckily he misses (as stormtroopers are wont to do) and the video ends with information regarding how to sign up for the Fort Worth police academy.\r\n\r\nOverall, the response to his video has been fairly positive online. Most Facebook users who have commented on the clip saw the humor in it, and it''s generally become embraced for its lighthearted depiction of a profession not known for humor. In fact, some people have even chimed in and claimed that they want to sign up for the Fort Worth police academy after seeing the video. That''s Don Draper-level advertising, if you ask me.\r\n\r\nEmbracing elements of pop culture in order to create a stronger sense of unity with the community has become an increasingly popular method for police departments around the country -- particularly with regards to social media use. For example, earlier this year another police department similarly took to Facebook and advertised a brand new partnership with Batman in order to fight the creepy clowns that seemed to sweep over the nation. If nothing else, this definitely seems to show an increasing willingness by public organizations to utilize commonly accepted facets of pop culture in their advertisements.\r\n\r\nAs always, CinemaBlend will bring you all of the latest and greatest Star Wars news as more information becomes available to us. The terminally inaccurate stormtroopers will make their next appearance when Rogue One: A Star Wars Story blasts its way into theaters on December 16! Stay tuned for more cool details!\r\n', 'stormtroopers-just-made-it-into-a-police-recruitment-video-and-its-hilarious', 15, 'images/articles/22.jpg', 17, '2016-12-17 21:56:02', '2016-12-04 06:56:05'),
(23, 'Justin Bieber Says He''s Not Looking To Date Right Now', 'Justin Bieber may be flexing his muscles, but he''s not trying to impress the ladies. The superstar is now saying that he is going to remain single for the time being, which is a whole new mindset for the playboy singer.', 'Justin Bieber may be flexing his muscles, but he''s not trying to impress the ladies. The superstar is now saying that he is going to remain single for the time being, which is a whole new mindset for the playboy singer.', 'justin-bieber-says-hes-not-looking-to-date-right-now', 15, 'images/articles/23.jpg', 18, '2016-12-07 07:06:33', '2016-12-07 07:06:39'),
(24, 'The Man Who Knew', 'Winner of the Financial Times and McKinsey Business Book of the Year Award and a New York Times Notable Book of 2016', 'Former Chairman of the Federal Reserve Alan Greenspan was once hailed as the omnipotent “maestro” of the U.S. economy, but his reputation suffered in the aftermath of the 2008 financial crisis. In The Man Who Knew: The Life and Times of Alan Greenspan, a new biography based on five years of research and unmatched access to Greenspan, Sebastian Mallaby presents a nuanced assessment of one of the most influential economic statesmen of the twentieth century and issues a warning about the future of finance. The story of Greenspan, according to Mallaby, is the story of the making of modern finance, for good and for ill.', 'the-man-who-knew', 7, 'images/articles/24.jpg', 19, '2016-10-01 07:11:40', '2016-10-01 07:11:40'),
(25, '2017 Non-Obvious: How to Think Different, Curate Ideas & Predict the Future', 'Book Summary\r\nThe ALL NEW 2017 edition of the Wall Street Journal bestseller Non-Obvious. Featuring 15 NEW trends and a recap of more than 75 previously predicted trends!\r\nWhat unexpected insights can a holographic Holocaust survivor and a Japanese film about soy sauce offer us about career development?\r\nHow do self-repairing airplane wings, touch-enabled “skinterface” tattoos and smart locks predict the next trillion dollar industry?\r\nWhat can the surprising popularity of an odd Norwegian TV show and the rise of “quiet eating” in Spain teach us about buying behavior?\r\n', 'The ALL NEW 2017 edition of the Wall Street Journal bestseller Non-Obvious. Featuring 15 NEW trends and a recap of more than 75 previously predicted trends!\r\nWhat unexpected insights can a holographic Holocaust survivor and a Japanese film about soy sauce offer us about career development?\r\nHow do self-repairing airplane wings, touch-enabled “skinterface” tattoos and smart locks predict the next trillion dollar industry?\r\nWhat can the surprising popularity of an odd Norwegian TV show and the rise of “quiet eating” in Spain teach us about buying behavior?\r\nThe answers to these questions may not be all that obvious. And that’s exactly the point. For the past seven years, marketing and innovation expert Rohit Bhargava has curated 15 “non-obvious” trends every year, publishing over 100 actionable trends since 2011. In this annual edition, Bhargava shares his latest research into 15 new trends for 2017, his process of curation and five essential habits that can help anyone use the power of non-obvious thinking to see what others miss, grow their business and make a bigger impact in the world.\r\n', '2017-non-obvious-how-to-think-different-curate-ideas-predict-the-future', 7, 'images/articles/25.jpg', 20, '2016-10-10 07:17:18', '2016-10-10 07:17:25'),
(26, 'From Sand to Shimmer: A Casino Resort Rises in Maryland', 'OXON HILL, Md. — As MGM opens a new resort this week on a hillside overlooking the Potomac River, it will deliver a victory in a long effort to develop a shoreline carved from a sand and gravel pit.', 'OXON HILL, Md. — As MGM opens a new resort this week on a hillside overlooking the Potomac River, it will deliver a victory in a long effort to develop a shoreline carved from a sand and gravel pit.', 'from-sand-to-shimmer-a-casino-resort-rises-in-maryland', 3, 'images/articles/26.jpg', 21, '2016-12-05 07:21:33', '2016-12-05 07:21:33'),
(27, 'Weyerhaeuser Moves Out of the Woods and Into Urban Seattle', 'SEATTLE — The new headquarters of Weyerhaeuser seem an exception to other office buildings in this waterfront city. Instead of a tower on a busy street, this new corporate base is a horizontal structure with a front door that opens onto a public park.', 'Tucked inside a group of 19th-century buildings, the steel-and-glass home of Weyerhaeuser, a wood products and timberlands company, is almost hidden by a row of trees.', 'weyerhaeuser-moves-out-of-the-woods-and-into-urban-seattle', 3, 'images/articles/27.jpa', 22, '2016-11-29 07:24:26', '2016-11-29 07:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `article_tag`
--

CREATE TABLE `article_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article_tag`
--

INSERT INTO `article_tag` (`id`, `article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 6, 1, '2016-12-18 04:09:23', '2016-12-18 04:09:24'),
(2, 6, 2, '2016-12-18 04:09:36', '2016-12-18 04:09:37'),
(3, 6, 3, '2016-12-18 04:09:47', '2016-12-18 04:09:48'),
(4, 7, 5, '2016-12-18 05:22:15', '2016-12-18 05:22:16'),
(5, 7, 4, '2016-12-18 05:22:28', '2016-12-18 05:22:29'),
(6, 8, 7, '2016-12-18 05:27:02', '2016-12-18 05:27:03'),
(7, 8, 6, '2016-12-18 05:27:14', '2016-12-18 05:27:14'),
(8, 9, 8, '2016-12-18 05:34:18', '2016-12-18 05:34:18'),
(9, 10, 10, '2016-12-18 05:41:25', '2016-12-18 05:41:25'),
(10, 10, 9, '2016-12-18 05:41:44', '2016-12-18 05:41:44'),
(11, 11, 5, '2016-12-18 05:55:37', '2016-12-18 05:55:37'),
(12, 11, 7, '2016-12-18 05:56:05', '2016-12-18 05:56:05'),
(13, 12, 11, '2016-12-18 06:01:35', '2016-12-18 06:01:35'),
(14, 12, 1, '2016-12-18 06:01:44', '2016-12-18 06:01:44'),
(15, 13, 12, '2016-12-18 06:06:31', '2016-12-18 06:06:31'),
(16, 13, 13, '2016-12-18 06:06:40', '2016-12-18 06:06:41'),
(17, 14, 15, '2016-12-18 06:11:16', '2016-12-18 06:11:17'),
(18, 14, 14, '2016-12-18 06:11:27', '2016-12-18 06:11:27'),
(19, 15, 14, '2016-12-18 06:22:02', '2016-12-18 06:22:02'),
(20, 16, 15, '2016-12-18 06:26:59', '2016-12-18 06:27:00'),
(21, 16, 16, '2016-12-18 06:27:25', '2016-12-18 06:27:26'),
(22, 17, 17, '2016-12-18 06:32:57', '2016-12-18 06:32:57'),
(23, 17, 11, '2016-12-18 06:33:09', '2016-12-18 06:33:18'),
(24, 18, 17, '2016-12-18 06:38:03', '2016-12-18 06:38:03'),
(25, 18, 18, '2016-12-18 06:38:14', '2016-12-18 06:38:15'),
(26, 19, 14, '2016-12-18 06:42:27', '2016-12-18 06:42:28'),
(27, 19, 15, '2016-12-18 06:42:50', '2016-12-18 06:42:51'),
(28, 20, 17, '2016-12-18 06:48:35', '2016-12-18 06:48:36'),
(29, 20, 11, '2016-12-18 06:48:51', '2016-12-18 06:48:52'),
(30, 21, 19, '2016-12-18 06:53:23', '2016-12-18 06:53:24'),
(31, 22, 19, '2016-12-18 06:57:11', '2016-12-18 06:57:12'),
(32, 23, 19, '2016-12-18 07:07:00', '2016-12-18 07:07:00'),
(33, 24, 15, '2016-12-18 07:12:26', '2016-12-18 07:12:26'),
(34, 25, 20, '2016-12-18 07:18:05', '2016-12-18 07:18:06'),
(35, 26, 1, '2016-12-18 07:22:00', '2016-12-18 07:22:00'),
(36, 26, 14, '2016-12-18 07:22:11', '2016-12-18 07:22:12'),
(37, 27, 1, '2016-12-18 07:25:27', '2016-12-18 07:25:27'),
(38, 1, 17, '2016-12-18 07:26:09', '2016-12-18 07:26:10'),
(39, 1, 11, '2016-12-18 07:26:30', '2016-12-18 07:26:31'),
(40, 2, 5, '2016-12-18 07:26:54', '2016-12-18 07:26:54'),
(41, 3, 15, '2016-12-18 07:27:30', '2016-12-18 07:27:30'),
(42, 4, 1, '2016-12-18 07:27:54', '2016-12-18 07:27:54'),
(43, 5, 5, '2016-12-18 07:28:40', '2016-12-18 07:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `slug`, `img_url`, `created_at`, `updated_at`) VALUES
(1, 'Atletico Madrid', 'atletico-madrid', NULL, '2016-12-04 08:07:18', '2016-12-04 08:07:18'),
(2, 'ZACH SCHONBRUN', 'zach-schonbrun', NULL, '2016-12-04 08:07:18', '2016-12-04 08:07:18'),
(3, 'Mark Savage', 'mark-savage', NULL, '2016-12-04 08:07:18', '2016-12-04 08:07:18'),
(4, 'Leo Kelion', 'leo-kelion', NULL, '2016-12-04 08:07:18', '2016-12-04 08:07:18'),
(5, 'Padraig Belton', 'padraig-belton', NULL, '2016-12-04 08:07:18', '2016-12-04 08:07:18'),
(6, 'nvc', 'nvc', 'images/authors/author-nvc.jpg', '2016-12-18 04:02:00', '2016-12-18 04:02:02'),
(7, 'Liesl Ulrich-Verderbe', 'liesl-ulrich-verderber', 'images/authors/author-verderber.jpg', '2016-12-18 05:10:43', '2016-12-18 05:10:45'),
(8, 'Rich Kirchen', 'rich-kirchen', 'images/authors/author-kirchen.jpg', '2016-12-18 05:58:05', '2016-12-18 05:58:05'),
(9, 'Melanie Lawder', 'melanie-lawder', 'images/authors/author-lawder', '2016-12-18 06:02:34', '2016-12-18 06:02:34'),
(10, 'MICHAEL D. SHEAR', 'michael-d-shear', 'images/authors/author-shear', '2016-12-18 06:17:55', '2016-12-18 06:17:55'),
(11, 'CORY MICHAEL, MD', 'cory-michael-md', 'images/authors/author-cory', '2016-12-18 06:22:57', '2016-12-18 06:22:58'),
(12, 'ANDY MITTEN', 'andy-mitten', 'images/authors/author-mitten', '2016-12-18 06:29:10', '2016-12-18 06:29:10'),
(13, 'PETER O''ROURKE', 'peter-o-rourke', 'images/authors/author-rourke', '2016-12-18 06:36:00', '2016-12-18 06:36:00'),
(14, 'RYU SPAETH', 'ryu-spaeth', 'images/authors/author-spaeth', '2016-12-18 06:39:33', '2016-12-18 06:39:34'),
(15, 'David Conn and Nazia Parveen', 'david-conn-and-nazia-parveen', 'images/authors/author-conn', '2016-12-18 06:44:08', '2016-12-18 06:44:08'),
(16, 'DIRK LIBBEY', 'dirk-libbey', 'images/authors/author-liibey', '2016-12-18 06:50:10', '2016-12-18 06:50:10'),
(17, 'CONNER SCHWERDTFEGER', 'conner', 'images/authors/author-conner', '2016-12-18 06:54:21', '2016-12-18 06:54:21'),
(18, 'DYLAN KICKHAM', 'dylan-kickham', 'images/authors/author-kickham', '2016-12-18 07:04:27', '2016-12-18 07:04:28'),
(19, 'Sebastian Mallaby, Paul A', 'sebastian-mallaby', 'images/authors/author-mallaby', '2016-12-18 07:08:43', '2016-12-18 07:08:44'),
(20, 'Rohit Bhargava', 'rohit-bhargave', 'images/authors/author-bhargava.jpg', '2016-12-18 07:15:05', '2016-12-18 07:15:06'),
(21, 'EUGENE L. MEYER', 'eugene-l-meyer', 'images/authors/author-meyer', '2016-12-18 07:19:39', '2016-12-18 07:19:39'),
(22, 'MORRIS NEWMAN', 'morris-newman', 'images/authors/author-newman', '2016-12-18 07:22:54', '2016-12-18 07:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Technology', 'technology', '2016-12-04 08:07:19', '2016-12-04 08:07:19'),
(2, 'Sports', 'sports', '2016-12-04 08:07:19', '2016-12-04 08:07:19'),
(3, 'Bussiness', 'bussiness', '2016-12-04 08:07:19', '2016-12-04 08:07:19'),
(4, 'Movie', 'movie', '2016-12-04 08:07:19', '2016-12-04 08:07:19'),
(5, 'Entertainment', 'entertainment', '2016-12-04 08:07:19', '2016-12-04 08:07:19'),
(6, 'Culture', 'culture', '2016-12-04 08:07:19', '2016-12-04 08:07:19'),
(7, 'Book', 'book', '2016-12-04 08:07:19', '2016-12-04 08:07:19'),
(8, 'Nature', 'nature', '2016-12-18 05:32:51', '2016-12-18 05:32:51'),
(9, 'Design', 'design', '2016-12-18 05:36:10', '2016-12-18 05:36:11'),
(10, 'Education', 'education', '2016-12-18 05:36:29', '2016-12-18 05:36:29'),
(11, 'Animals', 'animals', '2016-12-18 05:42:16', '2016-12-18 05:42:16'),
(12, 'Food & LifeStyle', 'food-and-life-style', '2016-12-18 06:05:13', '2016-12-18 06:05:13'),
(13, 'Politics', 'politics', '2016-12-18 06:10:10', '2016-12-18 06:10:11'),
(14, 'Medical', 'medical', '2016-12-18 06:23:51', '2016-12-18 06:23:51'),
(15, 'Film', 'film', '2016-12-18 06:52:32', '2016-12-18 06:52:33'),
(16, 'United States', 'united-states', '2016-12-18 07:09:33', '2016-12-18 07:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2016_11_21_091648_create_categories_table', 1),
(12, '2016_11_21_091702_create_authors_table', 1),
(13, '2016_11_21_091711_create_tags_table', 1),
(14, '2016_11_21_091726_create_articles_table', 1),
(15, '2016_11_21_091741_create_comments_table', 1),
(16, '2016_11_21_092944_create_article_tag_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Business', 'business ', '2016-12-18 04:08:21', '2016-12-18 04:08:24'),
(2, 'Economy', 'economy', '2016-12-18 04:08:47', '2016-12-18 04:08:48'),
(3, 'Finance', 'finance', '2016-12-18 04:09:05', '2016-12-18 04:09:04'),
(4, 'Robot', 'robot', '2016-12-18 05:00:11', '2016-12-18 05:00:29'),
(5, 'Techonology', 'technology', '2016-12-18 05:00:43', '2016-12-18 05:00:44'),
(6, 'Great Big Story ', 'great-big-story ', '2016-12-18 05:26:28', '2016-12-18 05:26:29'),
(7, 'Wonders', 'wonders', '2016-12-18 05:26:50', '2016-12-18 05:26:50'),
(8, 'Travel', 'travel', '2016-12-18 05:33:29', '2016-12-18 05:33:29'),
(9, 'Design ', 'design', '2016-12-18 05:40:46', '2016-12-18 05:40:46'),
(10, 'Architecture', 'architecture', '2016-12-18 05:41:03', '2016-12-18 05:41:04'),
(11, 'Sports', 'sports', '2016-12-18 06:01:13', '2016-12-18 06:01:14'),
(12, 'Food', 'food', '2016-12-18 06:05:43', '2016-12-18 06:05:43'),
(13, 'Life Style', 'life-style', '2016-12-18 06:06:05', '2016-12-18 06:06:05'),
(14, 'Politics', 'politics', '2016-12-18 06:10:33', '2016-12-18 06:10:34'),
(15, 'Social Media', 'social-media', '2016-12-18 06:10:54', '2016-12-18 06:10:54'),
(16, 'Medical', 'medical', '2016-12-18 06:26:42', '2016-12-18 06:26:42'),
(17, 'Footbal', 'football', '2016-12-18 06:32:43', '2016-12-18 06:32:43'),
(18, 'MANCHESTER UNITED', 'manchester', '2016-12-18 06:37:48', '2016-12-18 06:37:48'),
(19, 'Film', 'film', '2016-12-18 06:52:57', '2016-12-18 06:52:58'),
(20, 'Book', 'book', '2016-12-18 07:13:51', '2016-12-18 07:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_category_id_foreign` (`category_id`),
  ADD KEY `articles_author_id_foreign` (`author_id`);

--
-- Indexes for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_tag_article_id_foreign` (`article_id`),
  ADD KEY `article_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_article_id_foreign` (`article_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `article_tag`
--
ALTER TABLE `article_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
