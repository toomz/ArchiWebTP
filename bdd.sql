SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS Pokemon;
DROP TABLE IF EXISTS User;
DROP TABLE IF EXISTS Command;


CREATE TABLE Type_Pokemon
(
	type_poke_id INTEGER NOT NULL AUTO_INCREMENT,
	type_poke_libelle VARCHAR(20) NOT NULL,
	PRIMARY KEY (type_poke_id)
) ENGINE=InnoDB COMMENT='Types of Pokemon Table';

CREATE TABLE Pokemon
(
    poke_id INTEGER NOT NULL AUTO_INCREMENT COMMENT 'Identifiant du pokemon',
    poke_nom VARCHAR(255) NOT NULL COMMENT 'Nom du pokémon',
    poke_prix FLOAT NOT NULL COMMENT 'Prix du pokémon',
    poke_type INTEGER NOT NULL,
    PRIMARY KEY (poke_id),
    FOREIGN KEY (poke_type) REFERENCES Type_Pokemon(type_poke_id)
) ENGINE=InnoDB COMMENT='Pokemon Table';

CREATE TABLE User
(
	user_id INTEGER NOT NULL AUTO_INCREMENT,
	user_name VARCHAR(50) NOT NULL,
	user_prenom VARCHAR(50) NOT NULL,
	user_telephone VARCHAR(10),
	user_mail VARCHAR(50),
	user_pwd VARCHAR(50),
	user_shipping_adress VARCHAR(100) NOT NULL,
	user_billing_adress VARCHAR(100) NOT NULL,
	PRIMARY KEY (user_id)
) ENGINE=InnoDB COMMENT='User Table';

CREATE TABLE Command
(
	command_id INTEGER NOT NULL AUTO_INCREMENT,
	command_user_id INTEGER NOT NULL,
	command_poke_id INTEGER NOT NULL,
	PRIMARY KEY (command_id),
	FOREIGN KEY (command_user_id) REFERENCES User(user_id),
	FOREIGN KEY (command_poke_id) REFERENCES Pokemon(poke_id)
) ENGINE=InnoDB COMMENT='Command table';