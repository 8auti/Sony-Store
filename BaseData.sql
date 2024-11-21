DROP DATABASE IF EXISTS tienda_pc;

CREATE DATABASE tienda_pc;

USE tienda_pc;

CREATE TABLE categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY,
    nombre_categoria VARCHAR(50) NOT NULL
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

INSERT INTO productos (nombre_producto, descripcion, precio, id_categoria, nombre_categoria, url_imagen) VALUES
-- Graficas
('NVIDIA GeForce RTX 4090','Tarjeta gráfica de alta gama para juegos en 4K.',1600.00,'03','Tarjetas Gráficas','https://www.computershopping.com.ar/Images/Productos/Descripciones/GV-N408SWF3V2-16GD_heroimg_900w.png'),
('AMD Radeon RX 7900 XTX','Potente tarjeta gráfica para juegos y creación en 4K.',1000.00,'03','Tarjetas Gráficas','https://www.biostar.com.tw/picture/Review/525/RX7900XT_45_3_s.png'),
('NVIDIA GeForce RTX 3080','Tarjeta gráfica ideal para juegos en 4K y 1440p.',700.00,'03','Tarjetas Gráficas','https://storage-asset.msi.com/global/picture/image/feature/vga/NVIDIA/RTX3080Ti-gaming/images/3080ti-vga-body.png'),
('AMD Radeon RX 6800 XT','Tarjeta gráfica eficiente para juegos a 1440p y 4K.',650.00,'03','Tarjetas Gráficas','https://pg.asrock.com/Graphics-Card/photo/Radeon%20RX%206800%20XT%20Phantom%20Gaming%20D%2016G%20OC(L4).png'),

-- Mothers
('ASUS ROG Crosshair X670E Hero','Motherboard premium para procesadores AMD Ryzen serie 7000.',600.00,'01','Motherboards', 'https://dlcdnwebimgs.asus.com/gain/F17834FA-586C-40FA-A2AD-24D07A3431A0/h300/w300'),
('MSI MAG B550 TOMAHAWK WIFI','Motherboard versátil para Ryzen con Wi-Fi y PCIe 4.0.',150.00, '01','Motherboards','https://asset.msi.com/resize/image/global/product/product_16492305296ff2084c3e2e35c03546e01e5e2bf0c9.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png'),
('Gigabyte Z690 AORUS ELITE DDR4','Motherboard potente para procesadores Intel Alder Lake.', 250.00, '01','Motherboards', 'https://static.gigabyte.com/StaticFile/Image/Global/aa552f0fa095306d8c46f84350ec3bfc/Product/29915/png/500'),

-- Memorias RAM
('Corsair Vengeance RGB Pro 16GB DDR4', 'Memoria RAM con iluminación RGB dinámica.', 80.00, 50, '04','Memorias RAM', 'https://assets.corsair.com/image/upload/f_auto,q_auto/v1/akamai/pdp/vengeance-rgb-pro/tuff/Vengeance_RGB_PRO_TUF_01_2UP.png'),
('Kingston Fury Beast 16GB DDR5', 'RAM DDR5 para alto rendimiento y velocidad.', 110.00, 30, '04','Memorias RAM', 'https://wiztech.com.ar/assets/images/products/ram/hyperx_fury_beast_64gb_5600_a.png'),
('G.Skill Trident Z RGB 32GB DDR4', 'Memoria RAM RGB para gaming avanzado.', 160.00, 40, '04','Memorias RAM', 'https://www.hardsoft.hr/slike/velike/gskill-trident-z-rgb-32gb-kit-2x16gb-ddr4-3200mhz-cl16-135v-23745-gskme-32gb_ddr4_32_2.webp'),

-- Coolers
('Cooler Master Hyper 212 Black Edition', 'Refrigeración eficiente para CPUs de alto rendimiento.', 50.00, 25, '07','Coolers', 'https://a.storyblok.com/f/281110/72f38aa0b0/hyper-212-rgb-black-gallery-1.png/m/960x0/smart'),
('NZXT Kraken X63 RGB', 'Refrigeración líquida con iluminación RGB.', 160.00, 15, '07','Coolers', 'https://i.ebayimg.com/images/g/zsYAAOSw3SdeRV4q/s-l1200.png'),
('Noctua NH-D15', 'Disipador silencioso de alta eficiencia térmica.', 100.00, 20, '07','Coolers', 'https://techgaming.nl/wp-content/uploads/2024/07/Noctua-NH-D-15-G2-779x768.png'),

-- Gabinetes
('NZXT H510 Elite', 'Gabinete compacto con diseño moderno y RGB.', 150.00, 10, '09','Gabinetes', 'https://www.datocms-assets.com/34299/1611150070-eyjwyxroijoibnp4dfwvywnjb3vudhnclzq0xc80mdawnzm2xc9wcm9qzwn0c1wvmthcl2fzc2v0c1wvmtdclzmwntncl2fknjkxndrmyzkyntjkmti2zmuzzjfly2i0mte3mwrjlte1ota2odmwoteucg5nin0nzxtqev86cdrz-arn0p2n7ruakmvjzln4d9mjeupjin1kg.png'),
('Corsair iCUE 4000X RGB', 'Gabinete espacioso con ventilación optimizada.', 140.00, 20, '09','Gabinetes', 'https://i0.wp.com/www.aslanstoreuy.com/wp-content/uploads/2023/09/Gabinete-Corsair-iCUE-4000X-RGB-Negro-Aslan-Store-2.webp?fit=600%2C600&ssl=1'),
('Cooler Master MasterBox Q300L', 'Gabinete versátil y asequible para todos.', 60.00, 30, '09','Gabinetes', 'https://a.storyblok.com/f/281110/1175x1120/fc2064e6df/q300l-sec1-1.png/m/640x0/smart'),

-- Monitores
('LG UltraGear 27GN950-B 4K','Monitor 4K IPS con tasa de refresco de 144Hz y G-Sync.',800.00,'06','Monitores','Monitores','https://i0.wp.com/www.aslanstoreuy.com/wp-content/uploads/2023/06/Monitor-Gamer-LG-UltraGear-27-1ms-240Hz-Aslan-Store-1.png?fit=900%2C900&ssl=1'),
('Samsung Odyssey G7 32"','Monitor curvo 240Hz con tecnología QLED para gamers.',550.00,'06','Monitores','Monitores','https://images.samsung.com/is/image/samsung/levant-ar-odyssey-g7-lc32g75tqsmxzn-frontblack-255149820?$650_519_PNG$'),

-- Periféricos
('Logitech G Pro X Superlight','Ratón gaming ultraligero con sensor HERO 25K.',150.00,'11','Perifericos','Perifericos','https://www.stec.com.ar/cdn/shop/files/Mouse-Inalambrico-Logitech-G-PRO-X-Superlight-2-White-Aslan-Store-1.png?v=1729285015&width=2048'),
('Razer Huntsman Elite','Teclado mecánico con switches opto-mecánicos y retroiluminación RGB.',200.00,'11','Perifericos','Perifericos','https://assets3.razerzone.com/41R27mmpkpi7bp6usvS6UJpMKao=/1920x1280/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh36%2Fh5a%2F9640099184670%2Fblackwidow-v4-2-500x500.png'),
('SteelSeries Arctis 7','Auriculares inalámbricos para gaming con sonido envolvente 7.1.',150.00,'11','Perifericos','Perifericos','https://media.steelseriescdn.com/thumbs/catalog/items/61467/b2a580f20a3e41e2969d8680d8ec09ff.png.500x400_q100_crop-fit_optimize.png'),
('Logitech G203','Raton gaming ultraligero con sensor HERO de 15K.',120.00,'11','Perifericos','Perifericos','https://acdn.mitiendanube.com/stores/877/534/products/image-removebg-preview-711-ccbe7f811cde877b4f16902199593365-1024-1024.png');
    