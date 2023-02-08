CREATE DATABASE takalo;
USE takalo;

create table Users (
    idUser INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    email VARCHAR(50),
    mdp VARCHAR(20),
    typeUser INT NOT NULL 
);

create table Categorie (
    idCat INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nomCat VARCHAR(50)  
);

create table Objet (
    idObjet INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    descri TEXT,
    idCategorie INT,
    valeur DOUBLE,
    cover VARCHAR(255),
    Foreign Key (idCategorie) REFERENCES Categorie(idCat)
);

create table Photos (
    idPhoto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idObjet INT NOT NULL,
    chemin VARCHAR(255)
);

create table Proprio (
    idUser INT NOT NULL,
    idObj INT NOT NULL,
    datePossess DATETIME,
    Foreign Key (idUser) REFERENCES Users(idUser),
    Foreign Key (idObj) REFERENCES Objet(idObjet)
);

create table Proposition (
    idProp INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    idUser1 INT NOT NULL,
    idObjet1 INT NOT NULL,
    idUser2 INT NOT NULL,
    idObjet2 INT NOT NULL,
    dateProp datetime,
    Foreign Key (idUser1) REFERENCES Users(idUser),
    Foreign Key (idObjet1) REFERENCES Objet(idObjet),
    Foreign Key (idUser2) REFERENCES Users(idUser),
    Foreign Key (idObjet2) REFERENCES Objet(idObjet)
);

create table Transac (
    idProp INT NOT NULL PRIMARY KEY,
    dateTransac DATETIME,
    typeTransac INT NOT NULL,
    Foreign Key (idProp) REFERENCES Proposition(idProp)
);
CREATE OR REPLACE view maxProp as (SELECT idObj as obj, MAX(datePossess) as max FROM proprio GROUP BY idObj); 
create or replace view ObjetProp as (select u.idUser, u.nom as userName, o.*, c.nomCat from proprio p, maxprop m, users u, objet o, categorie c where p.idobj=m.obj and p.datepossess=m.max and u.idUser=p.idUser and o.idObjet=p.idObj and c.idCat=o.idCategorie);
create or replace view historiqueTransac as (select t.*, u1.nom as user1, o1.nom as objet1, o1.cover as sary1, u2.nom as user2, o2.nom as objet2, o2.cover as sary2 from transac t, proposition p, users u1, users u2, objet o1, objet o2 where t.idProp=p.idProp and u1.idUser=p.idUser1 and u2.idUser=p.idUser2 and o1.idObjet=p.idObjet1 and o2.idObjet=p.idObjet2);