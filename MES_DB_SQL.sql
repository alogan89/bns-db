CREATE TABLE Member
(
	MesNum varchar(10) NOT NULL PRIMARY KEY,
	LastName varchar(25) NOT NULL,
	FirstName varchar(25),
	MC int
);

CREATE TABLE MasqCharacterSheet
(
	MasqID int NOT NULL AUTOINCREMENT,
	CharacterName varchar(50) NOT NULL,
	Archetype varchar(10) NOT NULL,
	Clan varchar(10) NOT NULL,
	Setting varchar(10) NOT NULL,
	PhysicalAttribute int NOT NULL,
	PhysicalType varchar(25) NOT NULL,
	SocialAttribute int NOT NULL,
	SocialType varchar(25) NOT NULL,
	MentalAttribute int NOT NULL,
	MentalType varchar(25) NOT NULL,
);