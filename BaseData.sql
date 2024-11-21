DROP DATABASE IF EXISTS tienda_pc;

CREATE DATABASE tienda_pc;

USE tienda_pc;

CREATE TABLE categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nombre_categoria VARCHAR(250) NOT NULL
);

CREATE TABLE productos (
    id_producto INT AUTO_INCREMENT PRIMARY KEY,
    nombre_producto VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10 , 2 ) NOT NULL,
    stock INT DEFAULT 0,
    id_categoria INT,
    nombre_categoria text,
    url_imagen VARCHAR(255)
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

-- Inserción de productos

INSERT INTO productos (nombre_producto, descripcion, precio, id_categoria, nombre_categoria, url_imagen) VALUES
-- Motherboards
('ASUS ROG Crosshair X670E Hero', 'Motherboard premium para procesadores AMD Ryzen serie 7000.', 600.00, '01', 'Motherboards', 'https://dlcdnwebimgs.asus.com/gain/F17834FA-586C-40FA-A2AD-24D07A3431A0/h300/w300'),
('MSI MAG B550 TOMAHAWK WIFI', 'Motherboard versátil para Ryzen con Wi-Fi y PCIe 4.0.', 150.00, '01', 'Motherboards', 'https://asset.msi.com/resize/image/global/product/product_16492305296ff2084c3e2e35c03546e01e5e2bf0c9.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png'),
('Gigabyte Z690 AORUS ELITE DDR4', 'Motherboard potente para procesadores Intel Alder Lake.', 250.00, '01', 'Motherboards', 'https://static.gigabyte.com/StaticFile/Image/Global/aa552f0fa095306d8c46f84350ec3bfc/Product/29915/png/500'),

-- Tarjetas Gráficas
('NVIDIA GeForce RTX 4090', 'Tarjeta gráfica de alta gama para juegos en 4K.', 1600.00, '03', 'Tarjetas Gráficas', 'https://www.computershopping.com.ar/Images/Productos/Descripciones/GV-N408SWF3V2-16GD_heroimg_900w.png'),
('AMD Radeon RX 7900 XTX', 'Potente tarjeta gráfica para juegos y creación en 4K.', 1000.00, '03', 'Tarjetas Gráficas', 'https://www.biostar.com.tw/picture/Review/525/RX7900XT_45_3_s.png'),
('NVIDIA GeForce RTX 3080', 'Tarjeta gráfica ideal para juegos en 4K y 1440p.', 700.00, '03', 'Tarjetas Gráficas', 'https://storage-asset.msi.com/global/picture/image/feature/vga/NVIDIA/RTX3080Ti-gaming/images/3080ti-vga-body.png'),
('AMD Radeon RX 6800 XT', 'Tarjeta gráfica eficiente para juegos a 1440p y 4K.', 650.00, '03', 'Tarjetas Gráficas', 'https://pg.asrock.com/Graphics-Card/photo/Radeon%20RX%206800%20XT%20Phantom%20Gaming%20D%2016G%20OC(L4).png'),

-- Memorias RAM
('Corsair Vengeance RGB Pro 16GB DDR4', 'Memoria RAM con iluminación RGB dinámica.', 80.00, '04', 'Memorias RAM', 'https://assets.corsair.com/image/upload/f_auto,q_auto/v1/akamai/pdp/vengeance-rgb-pro/tuff/Vengeance_RGB_PRO_TUF_01_2UP.png'),
('Kingston Fury Beast 16GB DDR5', 'RAM DDR5 para alto rendimiento y velocidad.', 110.00, '04', 'Memorias RAM', 'https://wiztech.com.ar/assets/images/products/ram/hyperx_fury_beast_64gb_5600_a.png'),
('G.Skill Trident Z RGB 32GB DDR4', 'Memoria RAM RGB para gaming avanzado.', 160.00, '04', 'Memorias RAM', 'https://www.hardsoft.hr/slike/velike/gskill-trident-z-rgb-32gb-kit-2x16gb-ddr4-3200mhz-cl16-135v-23745-gskme-32gb_ddr4_32_2.webp'),

-- Coolers
('Cooler Master Hyper 212 Black Edition', 'Refrigeración eficiente para CPUs de alto rendimiento.', 50.00, '07', 'Coolers', 'https://a.storyblok.com/f/281110/72f38aa0b0/hyper-212-rgb-black-gallery-1.png/m/960x0/smart'),
('NZXT Kraken X63 RGB', 'Refrigeración líquida con iluminación RGB.', 160.00, '07', 'Coolers', 'https://i.ebayimg.com/images/g/zsYAAOSw3SdeRV4q/s-l1200.png'),
('Noctua NH-D15', 'Disipador silencioso de alta eficiencia térmica.', 100.00, '07', 'Coolers', 'https://techgaming.nl/wp-content/uploads/2024/07/Noctua-NH-D-15-G2-779x768.png'),

-- Gabinetes
('NZXT H510 Elite', 'Gabinete compacto con diseño moderno y RGB.', 150.00, '09', 'Gabinetes', 'https://i0.wp.com/www.aslanstoreuy.com/wp-content/uploads/2024/05/NZXT-H510-Elite-1.png?resize=1200%2C900&ssl=1'),
('Cooler Master MasterBox Q300L', 'Gabinete pequeño con excelente flujo de aire.', 60.00, '09', 'Gabinetes', 'https://www.coolermaster.com/wp-content/uploads/2019/06/q300l-11.jpg'),
('Fractal Design Meshify C', 'Gabinete ATX con panel frontal de malla para una mejor refrigeración.', 100.00, '09', 'Gabinetes', 'https://www.fractal-design.com/wp-content/uploads/2021/02/Meshify-C-front-web.png'),

-- Fuentes de Poder
('Corsair RM850x', 'Fuente de poder de 850W, modular y eficiente.', 120.00, '06', 'Fuentes de Poder', 'https://www.corsair.com/corsairmedia/sys_master/productcontent/corsair-psu-rm850x-0030.png'),
('EVGA SuperNOVA 1000 G5', 'Fuente de poder de 1000W, 80+ Gold.', 180.00, '06', 'Fuentes de Poder', 'https://www.evga.com/evga/power-supplies/g5/1000G5_hero.png'),
('Seasonic FOCUS GX-750', 'Fuente de poder de 750W, modular y certificación 80+ Gold.', 110.00, '06', 'Fuentes de Poder', 'https://www.seasonic.com/media/products/focusgx-750.png');



select nombre_producto from productos; 