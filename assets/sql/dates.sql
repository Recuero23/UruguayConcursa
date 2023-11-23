CREATE TABLE  usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR (50) NOT NULL,
    contraseña VARCHAR (30) NOT NULL, 
    email VARCHAR (50) NOT NULL,
    tel VARCHAR (9) NOT NULL,
    recidencia VARCHAR (100) NOT NULL,
    fecha DATE NOT NULL,
    archivo VARCHAR (100),
    opcion1 VARCHAR (30) NOT NULL,
    comentario VARCHAR (300),
    terminos BOOLEAN NOT NULL,
)