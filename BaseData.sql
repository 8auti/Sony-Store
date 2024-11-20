CREATE DATABASE tienda_pc;
USE tienda_pc;

CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    correo VARCHAR(100) UNIQUE NOT NULL,
    contraseña VARCHAR(255) NOT NULL,
    direccion VARCHAR(255),
    telefono VARCHAR(20)
);

CREATE TABLE categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nombre_categoria VARCHAR(50) NOT NULL
);


CREATE TABLE productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre_producto VARCHAR(100) NOT NULL,
    descripcion text,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT DEFAULT 0,
    id_categoria INT,
    nombre_imagen VARCHAR(255)
    );

INSERT INTO categorias (id_categoria, nombre_categoria) VALUES
('01','Motherboards'),
('02','Procesadores'),
('03','Tarjetas Gráficas'),
('04','Memorias RAM'),
('05','Almacenamiento'),
('06','Monitores'),
('07','Coolers'),
('08','Refrigeracion'),
('09','Gabinetes'),
('10','Fuentes'),
('11','Perifericos');

INSERT INTO productos (nombre_producto, descripcion, precio, stock, id_categoria, nombre_imagen) VALUES
-- Graficas
('NVIDIA GeForce RTX 4090','Tarjeta gráfica de alta gama para juegos en 4K.',1600.00,20,'03','nvidia_geforce_rtx_4090.jpg'),
('AMD Radeon RX 7900 XTX','Potente tarjeta gráfica para juegos y creación en 4K.',1000.00,25,'03','amd_radeon_rx_7900_xtx.jpg'),
('NVIDIA GeForce RTX 3080','Tarjeta gráfica ideal para juegos en 4K y 1440p.',700.00,50,'03','nvidia_geforce_rtx_3080.jpg'),
('AMD Radeon RX 6800 XT','Tarjeta gráfica eficiente para juegos a 1440p y 4K.',650.00,40,'03','amd_radeon_rx_6800_xt.jpg'),
('NVIDIA GeForce GTX 1660 Super','Tarjeta gráfica accesible para juegos en 1080p y 1440p.', 250.00, 60,'03','nvidia_geforce_gtx_1660_super.jpg'),
-- Mothers
('ASUS ROG Crosshair X670E Hero','Motherboard premium para procesadores AMD Ryzen serie 7000.',600.00, 15,'01', 'asus_rog_crosshair_x670e_hero.jpg'),
('MSI MAG B550 TOMAHAWK WIFI','Motherboard versátil para Ryzen con Wi-Fi y PCIe 4.0.',150.00, 30, '01','msi_mag_b550_tomahawk_wifi.jpg'),
('Gigabyte Z690 AORUS ELITE DDR4','Motherboard potente para procesadores Intel Alder Lake.', 250.00, 20, '01', 'gigabyte_z690_aorus_elite_ddr4.jpg'),
-- rams
('Corsair Vengeance LPX 16GB DDR4 3200MHz','Memoria RAM DDR4 de alto rendimiento con disipador.',65.00, 50,'04','corsair_vengeance_lpx_16gb_ddr4_3200mhz.jpg'),
('G.Skill Ripjaws V 32GB DDR4 3600MHz','RAM DDR4 de 32GB, ideal para gaming y multitarea.', 120.00,40,'04','gskill_ripjaws_v_32gb_ddr4_3600mhz.jpg'),
('Kingston Fury Beast 16GB DDR5 5200MHz','RAM DDR5 rápida y eficiente para plataformas modernas.',110.00,30,'04','kingston_fury_beast_16gb_ddr5_5200mhz.jpg');



