CREATE DATABASE citizen;
use Citizen;

CREATE TABLE ciudad(
cod_ciudad int(255) not null,
nombre_ciudad varchar(40) not null,
pais          varchar(40) not null,
CONSTRAINT pk_ciudad PRIMARY KEY (cod_ciudad)
);
 
CREATE TABLE usuarios(
cod_usuario         int (255) auto_increment not null,
correo     varchar(255) not null,
nombre     varchar(100) not null,
apellidos  varchar(255),
password   varchar(255) not null,
cedula     varchar(20) not null,
cod_ciudad     int (255) not null,
CONSTRAINT pk_usuario PRIMARY KEY(cod_usuario),
CONSTRAINT uq_email UNIQUE(correo),
CONSTRAINT fk_ciudad foreign key (cod_ciudad) references ciudad(cod_ciudad)
);

CREATE TABLE Servidor_Publico(
cod_ServidorPublico int (255) auto_increment not null,
cod_usuario         int (255) not null,
CONSTRAINT pk_Servidor_Publico PRIMARY KEY(cod_ServidorPublico),
CONSTRAINT fk_usuarios foreign key (cod_usuario) references usuarios(cod_usuario)
);

CREATE TABLE Supervisor(
cod_Supervisor int (255) auto_increment not null,
cod_usuario         int (255) not null,
CONSTRAINT pk_Supervisor PRIMARY KEY(cod_Supervisor),
CONSTRAINT fk_usuarios foreign key (cod_usuario) references usuarios(cod_usuario)
);

CREATE TABLE Ciudadano(
cod_Ciudadano int (255) auto_increment not null,
cod_usuario         int (255) not null,
CONSTRAINT pk_Ciudadano PRIMARY KEY(cod_Ciudadano),
CONSTRAINT fk_usuarios foreign key (cod_usuario) references usuarios(cod_usuario)
);


CREATE TABLE Problema(
cod_Problema int (255) auto_increment not null,
direccion    varchar(255) not null,
descripcion  varchar(255) not null,
prioridad    varchar(255) not null,
EstadoProblema varchar(255) not null,
cod_Supervisor int (255) not null,
cod_ServidorPublico int (255) not null,
cod_Ciudad int (255) not null,
CONSTRAINT pk_Problema PRIMARY KEY(cod_Problema),
CONSTRAINT fk_Supervisor foreign key (cod_Supervisor) references Supervisor(cod_Supervisor),
CONSTRAINT fk_ServidorPublico foreign key (cod_ServidorPublico) references Servidor_Publico(cod_ServidorPublico),
CONSTRAINT fk_Ciudad foreign key (cod_Ciudad) references Ciudad(cod_Ciudad)
);


CREATE TABLE Reporte(
cod_Reporte int (255) auto_increment not null,
cod_Ciudadano int (255) not null,
cod_Problema int (255) not null,
fecha_Reporte date,
CONSTRAINT pk_Reporte PRIMARY KEY (cod_Reporte),
CONSTRAINT fk_Ciudadano FOREIGN KEY (cod_Ciudadano) references Ciudadano(cod_Ciudadano),
CONSTRAINT fk_Problema FOREIGN  KEY (cod_Problema)  references Problema(cod_Problema)
);
