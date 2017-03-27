drop table Country1;
drop table Country2;
drop table Country3;
drop table Continent;

CREATE TABLE Continent (
ContinentKey	integer primary key,
ContinentName	varchar(15)
);

INSERT INTO Continent Values(1,'North America');
INSERT INTO Continent Values(2,'South America');

CREATE TABLE Country1 (
CountryKey	integer primary key,
ContinentKey	integer,
Country1Name	varchar(15),
foreign key (ContinentKey) references Continent
);

INSERT INTO Country1 Values(1,1,'USA');
INSERT INTO Country1 Values(2,1,'Canada');
INSERT INTO Country1 VALUES(3,2,'Brazil');

CREATE TABLE Country2 (
CountryKey	integer primary key,
ContinentKey	integer,
Country2Name	varchar(15),
foreign key (ContinentKey) references Continent
);

INSERT INTO Country2 Values(1,1,'USA');
INSERT INTO Country2 Values(2,1,'Canada');
INSERT INTO Country2 VALUES(3,2,'Brazil');

CREATE TABLE Country3 (
CountryKey	integer,
ContinentKey	integer,
Country3Name	varchar(15),
foreign key (ContinentKey) references Continent
);

INSERT INTO Country3 Values(1,1,'USA');
INSERT INTO Country3 Values(2,1,'Canada');
INSERT INTO Country3 VALUES(3,2,'Brazil');