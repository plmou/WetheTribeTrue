#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: ped8_level
#------------------------------------------------------------

CREATE TABLE ped8_level(
        id    Int  Auto_increment  NOT NULL ,
        level Varchar (50) NOT NULL COMMENT "debutant  inter avancé master"
	,CONSTRAINT ped8_level_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: _ped8_UserCategory
#------------------------------------------------------------

CREATE TABLE _ped8_UserCategory(
        id       Int  Auto_increment  NOT NULL COMMENT "superadmin admin artists tribemember multimedia service"  ,
        userRole Varchar (50) NOT NULL
	,CONSTRAINT _ped8_UserCategory_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ped8_country
#------------------------------------------------------------

CREATE TABLE ped8_country(
        id      Int  Auto_increment  NOT NULL ,
        country Varchar (50) NOT NULL
	,CONSTRAINT ped8_country_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ped8_region
#------------------------------------------------------------

CREATE TABLE ped8_region(
        id              Int  Auto_increment  NOT NULL ,
        region          Varchar (50) NOT NULL ,
        id_ped8_country Int NOT NULL
	,CONSTRAINT ped8_region_PK PRIMARY KEY (id)

	,CONSTRAINT ped8_region_ped8_country_FK FOREIGN KEY (id_ped8_country) REFERENCES ped8_country(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ped8_city
#------------------------------------------------------------

CREATE TABLE ped8_city(
        id             Int  Auto_increment  NOT NULL ,
        city           Varchar (50) NOT NULL ,
        id_ped8_region Int NOT NULL
	,CONSTRAINT ped8_city_PK PRIMARY KEY (id)

	,CONSTRAINT ped8_city_ped8_region_FK FOREIGN KEY (id_ped8_region) REFERENCES ped8_region(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ped8_users
#------------------------------------------------------------

CREATE TABLE ped8_users(
        id        Int  Auto_increment  NOT NULL ,
        lastname  Varchar (50) NOT NULL ,
        firstname Varchar (50) NOT NULL ,
        pseudo    Varchar (50) NOT NULL ,
        birthdate Date NOT NULL COMMENT "toutes les informations \"unique\""  ,
        mail      Varchar (300) NOT NULL ,
        phone     Varchar (15) NOT NULL ,
        password  Varchar (50) NOT NULL ,
        gender    Varchar (50) NOT NULL
	,CONSTRAINT ped8_users_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ped8_dancer
#------------------------------------------------------------

CREATE TABLE ped8_dancer(
        id            Int  Auto_increment  NOT NULL ,
        id_ped8_level Int NOT NULL ,
        id_ped8_users Int NOT NULL
	,CONSTRAINT ped8_dancer_PK PRIMARY KEY (id)

	,CONSTRAINT ped8_dancer_ped8_level_FK FOREIGN KEY (id_ped8_level) REFERENCES ped8_level(id)
	,CONSTRAINT ped8_dancer_ped8_users0_FK FOREIGN KEY (id_ped8_users) REFERENCES ped8_users(id)
	,CONSTRAINT ped8_dancer_ped8_users_AK UNIQUE (id_ped8_users)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ped8_artist
#------------------------------------------------------------

CREATE TABLE ped8_artist(
        id            Int  Auto_increment  NOT NULL ,
        id_ped8_users Int NOT NULL
	,CONSTRAINT ped8_artist_PK PRIMARY KEY (id)

	,CONSTRAINT ped8_artist_ped8_users_FK FOREIGN KEY (id_ped8_users) REFERENCES ped8_users(id)
	,CONSTRAINT ped8_artist_ped8_users_AK UNIQUE (id_ped8_users)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: are
#------------------------------------------------------------

CREATE TABLE are(
        id                    Int NOT NULL ,
        id__ped8_UserCategory Int NOT NULL COMMENT "superadmin admin artists tribemember multimedia service"
	,CONSTRAINT are_PK PRIMARY KEY (id,id__ped8_UserCategory)

	,CONSTRAINT are_ped8_artist_FK FOREIGN KEY (id) REFERENCES ped8_artist(id)
	,CONSTRAINT are__ped8_UserCategory0_FK FOREIGN KEY (id__ped8_UserCategory) REFERENCES _ped8_UserCategory(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: livein
#------------------------------------------------------------

CREATE TABLE livein(
        id           Int NOT NULL ,
        id_ped8_city Int NOT NULL
	,CONSTRAINT livein_PK PRIMARY KEY (id,id_ped8_city)

	,CONSTRAINT livein_ped8_users_FK FOREIGN KEY (id) REFERENCES ped8_users(id)
	,CONSTRAINT livein_ped8_city0_FK FOREIGN KEY (id_ped8_city) REFERENCES ped8_city(id)
)ENGINE=InnoDB;
