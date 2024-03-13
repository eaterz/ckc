CREATE DATABASE ckc_ruslans_murasko;
USE ckc_ruslans_murasko;
CREATE TABLE notikumi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    datums_laiks DATETIME,
    notikums VARCHAR(255),
    vieta VARCHAR(255)
);

INSERT INTO notikumi (datums_laiks, notikums, vieta) VALUES 
('2024-03-31 13:00:00', 'Lieldienas Cēsīs', 'Rožu laukums'),
('2024-04-04 18:00:00', 'Leļļu teātra izrāde "Gangsteromīte"', 'Koncertzāle "Cēsis"'),
('2024-07-19 08:00:00', 'Cēsu pilsētas svētki 818', 'Cēsis');
CREATE TABLE kolektivi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(80) NOT NULL,
    description VARCHAR(500) NOT NULL
);
INSERT INTO kolektivi (name, description) VALUES 
('Cēsis','Pūtēju orķestris'),
('Raitais solis','Tautu deju ansamblis'),
('Vidzeme','Jauktais koris'),
('Dzieti','Tautas vērtes kopa');

SELECT * FROM kolektivi;
