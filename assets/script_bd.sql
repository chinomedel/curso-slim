-- Crear tabla usuarios básica
create table usuarios(
id_usuario int primary key not null auto_increment,
nombre varchar(255),
apellido_uno varchar(255),
apellido_dos varchar(255),
email varchar(255),
telefono varchar(255),
clave varchar(255),
fecha_creacion datetime,
fecha_ult_modifi datetime
);

-- Insertando usuarios
Insert into usuarios(nombre, apellido_uno, apellido_dos, email,telefono,clave,fecha_creacion,fecha_ult_modifi) 
values ("Nelson", "Medel", "Bustamante", "nmedelb@gmail.com","+56951377757","123456",NOW(),Now());

Insert into usuarios(nombre, apellido_uno, apellido_dos, email,telefono,clave,fecha_creacion,fecha_ult_modifi) 
values ("Andrea", "Rivera", "Muñoz", "andrea@gmail.com","+56951377757","123456",NOW(),Now());