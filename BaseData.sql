DROP DATABASE IF EXISTS tienda_pc;

CREATE DATABASE tienda_pc;

USE tienda_pc;

CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY, 
    nombre_usuario VARCHAR(250) NOT NULL,
    password_usuario VARCHAR(250) NOT NULL,
    email_usuario VARCHAR(250) NOT NULL,
    rol_usuario VARCHAR(100) NOT NULL,
    imagen_perfil VARCHAR(500) DEFAULT 'https://res.cloudinary.com/dtnk8oggj/image/upload/v1721083530/boom-recorder/placeholders/v3der7jjr4ljprscr9dj.png'
);

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

INSERT INTO usuarios(nombre_usuario, password_usuario, email_usuario, rol_usuario) VALUES
('pedro sanchez', 'contraseña123', 'pedro.sanchez@email.com', 'admin'),
('bautista carloni', 'contraseña789', 'bautista.carloni@email.com', 'admin'),
('analia martin', 'pass123', 'ana.martin@email.com', 'user'),
('sandra fernandez', 'securepass567', 'sandra.fernandez@email.com', 'user');

INSERT INTO usuarios (nombre_usuario, password_usuario, email_usuario, rol_usuario, imagen_perfil) 
VALUES ('Momo Admin', 'pass123', 'momo@admin.com', 'admin', 'https://media.0221.com.ar/adjuntos/357/migration/0221/032019/1553553111207.jpg');

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
('ASRock B550 Phantom Gaming 4', 'Motherboard para procesadores AMD Ryzen con soporte PCIe 4.0.', 120.00, '01', 'Motherboards', 'https://pg.asrock.com/mb/photo/B550%20Phantom%20Gaming%204(L1).png'),
('Gigabyte B450 AORUS M', 'Motherboard económica para procesadores AMD Ryzen.', 90.00, '01', 'Motherboards', 'https://static.gigabyte.com/StaticFile/Image/Global/e995b3c26d32fe644b1d5766b6d37d9c/Product/24135'),

-- Tarjetas Gráficas
('NVIDIA GeForce RTX 4090', 'Tarjeta gráfica de alta gama para juegos en 4K.', 1600.00, '03', 'Tarjetas Gráficas', 'https://www.computershopping.com.ar/Images/Productos/Descripciones/GV-N408SWF3V2-16GD_heroimg_900w.png'),
('AMD Radeon RX 7900 XTX', 'Potente tarjeta gráfica para juegos y creación en 4K.', 1000.00, '03', 'Tarjetas Gráficas', 'https://www.biostar.com.tw/picture/Review/525/RX7900XT_45_3_s.png'),
('NVIDIA GeForce RTX 3080', 'Tarjeta gráfica ideal para juegos en 4K y 1440p.', 700.00, '03', 'Tarjetas Gráficas', 'https://storage-asset.msi.com/global/picture/image/feature/vga/NVIDIA/RTX3080Ti-gaming/images/3080ti-vga-body.png'),
('AMD Radeon RX 6800 XT', 'Tarjeta gráfica eficiente para juegos a 1440p y 4K.', 650.00, '03', 'Tarjetas Gráficas', 'https://pg.asrock.com/Graphics-Card/photo/Radeon%20RX%206800%20XT%20Phantom%20Gaming%20D%2016G%20OC(L4).png'),
('NVIDIA GeForce RTX 3070', 'Tarjeta gráfica de gama media ideal para juegos en 1440p y 4K.', 500.00, '03', 'Tarjetas Gráficas', 'https://www.nvidia.com/content/dam/en-zz/Solutions/geforce/ampere/rtx-3070/geforce-rtx-3070-shop-630-d.png'),
('AMD Radeon RX 6700 XT', 'Tarjeta gráfica para juegos en 1440p con excelente relación calidad-precio.', 480.00, '03', 'Tarjetas Gráficas', 'https://pg.asrock.com/Graphics-Card/photo/Radeon%20RX%206700%20XT%20Phantom%20Gaming%20D%2012GB%20OC(L1).png'),
-- Memorias RAM
('Corsair Vengeance RGB Pro 16GB DDR4', 'Memoria RAM con iluminación RGB dinámica.', 80.00, '04', 'Memorias RAM', 'https://assets.corsair.com/image/upload/f_auto,q_auto/v1/akamai/pdp/vengeance-rgb-pro/tuff/Vengeance_RGB_PRO_TUF_01_2UP.png'),
('Kingston Fury Beast 16GB DDR5', 'RAM DDR5 para alto rendimiento y velocidad.', 110.00, '04', 'Memorias RAM', 'https://www.scphardstore.com/wp-content/uploads/Memoria-RAM-DDR5-KINGSTON-32GB-6400-MHZ-FURY-BEAST-BLACK-RGB.png'),
('G.Skill Trident Z RGB 32GB DDR4', 'Memoria RAM RGB para gaming avanzado.', 160.00, '04', 'Memorias RAM', 'https://www.hardsoft.hr/slike/velike/gskill-trident-z-rgb-32gb-kit-2x16gb-ddr4-3200mhz-cl16-135v-23745-gskme-32gb_ddr4_32_2.webp'),

-- Coolers
('Cooler Master Hyper 212 Black Edition', 'Refrigeración eficiente para CPUs de alto rendimiento.', 50.00, '07', 'Coolers', 'https://a.storyblok.com/f/281110/72f38aa0b0/hyper-212-rgb-black-gallery-1.png/m/960x0/smart'),
('NZXT Kraken X63 RGB', 'Refrigeración líquida con iluminación RGB.', 160.00, '07', 'Coolers', 'https://i.ebayimg.com/images/g/zsYAAOSw3SdeRV4q/s-l1200.png'),
('Noctua NH-D15', 'Disipador silencioso de alta eficiencia térmica.', 100.00, '07', 'Coolers', 'https://techgaming.nl/wp-content/uploads/2024/07/Noctua-NH-D-15-G2-779x768.png'),

-- Gabinetes
('NZXT H510 Elite', 'Gabinete compacto con diseño moderno y RGB.', 150.00, '09', 'Gabinetes', 'https://mcegamer.com/wp-content/uploads/2019/08/h510-2-1-600x600.png'),
('Cooler Master MasterBox Q300L', 'Gabinete pequeño con excelente flujo de aire.', 60.00, '09', 'Gabinetes', 'https://a.storyblok.com/f/281110/922x589/56093c0cd4/q300l-sec9-1.png'),
('Fractal Design Meshify C', 'Gabinete ATX con panel frontal de malla para una mejor refrigeración.', 100.00, '09', 'Gabinetes', 'https://logg.api.cygnus.market/static/logg/Global/Gabinete%20Cooler%20Master%20TD300%20Mesh%20Negro%20Mini%20Tower/1866ab90c26f44578707148cad7d0daf.png'),

-- Fuentes de Poder
('Corsair RM850x', 'Fuente de poder de 850W, modular y eficiente.', 120.00, '10', 'Fuentes', 'https://cwsmgmt.corsair.com/landing/PSU-Family-Page/images/psu-with-badge-cx750f-rgb.png'),
('EVGA SuperNOVA 1000 G5', 'Fuente de poder de 1000W, 80+ Gold.', 180.00, '10', 'Fuentes', 'https://images.evga.com/products/gallery/png/535-5G-1000-K1_LG_1.png'),
('Seasonic FOCUS GX-750', 'Fuente de poder de 750W, modular y certificación 80+ Gold.', 110.00, '10', 'Fuentes', 'https://nzxt.com/assets/cms/34299/1673299642-c1200-gold-psu-hero-black.png?auto=format&fit=crop&h=1000&w=1000'),

-- Monitores
('LG UltraGear 27GN950-B 4K','Monitor 4K IPS con tasa de refresco de 144Hz y G-Sync.',800.00,'06','Monitores','https://i0.wp.com/www.aslanstoreuy.com/wp-content/uploads/2023/06/Monitor-Gamer-LG-UltraGear-27-1ms-240Hz-Aslan-Store-1.png?fit=900%2C900&ssl=1'),
('Samsung Odyssey G7 32"','Monitor curvo 240Hz con tecnología QLED para gamers.',550.00,'06','Monitores','https://images.samsung.com/is/image/samsung/levant-ar-odyssey-g7-lc32g75tqsmxzn-frontblack-255149820?$650_519_PNG$'),

-- Periféricos
('Logitech G Pro X Superlight','Ratón gaming ultraligero con sensor HERO 25K.',150.00,'11','Perifericos','https://www.stec.com.ar/cdn/shop/files/Mouse-Inalambrico-Logitech-G-PRO-X-Superlight-2-White-Aslan-Store-1.png?v=1729285015&width=2048'),
('Razer Huntsman Elite','Teclado mecánico con switches opto-mecánicos y retroiluminación RGB.',200.00,'11','Perifericos','https://assets3.razerzone.com/41R27mmpkpi7bp6usvS6UJpMKao=/1920x1280/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh36%2Fh5a%2F9640099184670%2Fblackwidow-v4-2-500x500.png'),
('SteelSeries Arctis 7','Auriculares inalámbricos para gaming con sonido envolvente 7.1.',150.00,'11','Perifericos','https://media.steelseriescdn.com/thumbs/catalog/items/61467/b2a580f20a3e41e2969d8680d8ec09ff.png.500x400_q100_crop-fit_optimize.png'),
('Logitech G203','Raton gaming ultraligero con sensor HERO de 15K.',120.00,'11','Perifericos','https://acdn.mitiendanube.com/stores/877/534/products/image-removebg-preview-711-ccbe7f811cde877b4f16902199593365-1024-1024.png');





select nombre_producto from productos; 