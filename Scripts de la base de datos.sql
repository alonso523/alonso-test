--Scripts de la base datos, sigue con los estándares de cakephp

--1) Tabla que contiene información sobre los usuarios
CREATE TABLE users (
id INT(10) NOT NULL AUTO_INCREMENT,
rol_id INT(10) NOT NULL,
cedula INT(10),
name VARCHAR(150),
username VARCHAR(150),
password VARCHAR(150),
phone VARCHAR(150),
PRIMARY KEY(id));

--2) Tabla que contiene informacion sobre noticias
CREATE TABLE news (
id INT(10) NOT NULL AUTO_INCREMENT,
name VARCHAR(150),
description VARCHAR(150),
PRIMARY KEY(id));

--3) Tabla que contiene informacion sobre roles
CREATE TABLE rols (
id INT(10) NOT NULL AUTO_INCREMENT,
name VARCHAR(150),
description VARCHAR(150),
PRIMARY KEY(id));

--4) Tabla que contiene informacion sobre las matriculas realizadas
CREATE TABLE courses_users (
id INT(10) NOT NULL AUTO_INCREMENT,
course_id INT(10) NOT NULL,
user_id INT(10) NOT NULL,
PRIMARY KEY(id));

--5) Tabla que contiene informacion sobre cursos
CREATE TABLE courses (
id INT(10) NOT NULL AUTO_INCREMENT,
area_id INT(10) NOT NULL,
name VARCHAR(150),
PRIMARY KEY(id));

--6) Tabla que contiene informacion sobre las áreas que están en las áreas
CREATE TABLE areas (
id INT(10) NOT NULL AUTO_INCREMENT,
name VARCHAR(150),
description VARCHAR(150),
PRIMARY KEY(id));

--7) Tabla que contiene informacion sobre las informaciones, las cuales pueden ser archivos, enlaces o fotos.
CREATE TABLE information (
id INT(10) NOT NULL AUTO_INCREMENT,
name VARCHAR(150),
type VARCHAR(150),
created DATETIME,
description VARCHAR(150),
PRIMARY KEY(id));

--8) Tabla intermedia que contiene informacion sobre cursos y las informaciones
CREATE TABLE courses_informations (
id INT(10) NOT NULL AUTO_INCREMENT,
course_id INT(10) NOT NULL,
information_id INT(10) NOT NULL,
PRIMARY KEY(id));

--9) Tabla intermedia que contiene informacion sobre cursos y las noticias
CREATE TABLE courses_news (
id INT(10) NOT NULL AUTO_INCREMENT,
course_id INT(10) NOT NULL,
news_id INT(10) NOT NULL,
PRIMARY KEY(id));

--10) Tabla intermedia que contiene informacion sobre cursos y las asignaciones
CREATE TABLE assignments (
id INT(10) NOT NULL AUTO_INCREMENT,
course_id INT(10) NOT NULL,
description VARCHAR(150),
PRIMARY KEY(id));

--11) Tabla palabras que contiene todas las palabras es una tabla independiente.
CREATE TABLE words (
id INT(10) NOT NULL AUTO_INCREMENT,
word VARCHAR(150),
meaning VARCHAR(150) NOT NULL,
PRIMARY KEY(id));


