CREATE TABLE IF NOT EXISTS `#__tradotimpalvelut` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`laji` text NOT NULL,
	`kuvaus` text NOT NULL,

  PRIMARY KEY (`id`)
) ENGINE= INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO `#__tradotimpalvelut` (`laji`,`kuvaus`) VALUES ('renkaat','yli 500 rengasmallia ja satoja sisärengaskokoja luotettavilta brändeiltä!');
INSERT INTO `#__tradotimpalvelut` (`laji`,`kuvaus`) VALUES ('apuvalineet','Laaja valikoima apuvälineiden tarvikkeita ja varaosia');
INSERT INTO `#__tradotimpalvelut` (`laji`,`kuvaus`) VALUES ('flexel','Sastamalassa valmistetut Flexel -umpikumirenkaat ja pyörät ovat markkinoiden varmin ratkaisu korvaamaan pienlaitteiden ilmakumipyörät.');
