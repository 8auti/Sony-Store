CREATE DATABASE tienda_pc;
USE tienda_pc;

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

INSERT INTO productos (nombre_producto, descripcion, precio, id_categoria, nombre_imagen) VALUES
-- Graficas
('NVIDIA GeForce RTX 4090','Tarjeta gráfica de alta gama para juegos en 4K.',1600.00,'03','nvidia_geforce_rtx_4090.jpg'),
('AMD Radeon RX 7900 XTX','Potente tarjeta gráfica para juegos y creación en 4K.',1000.00,'03','amd_radeon_rx_7900_xtx.jpg'),
('NVIDIA GeForce RTX 3080','Tarjeta gráfica ideal para juegos en 4K y 1440p.',700.00,'03','nvidia_geforce_rtx_3080.jpg'),
('AMD Radeon RX 6800 XT','Tarjeta gráfica eficiente para juegos a 1440p y 4K.',650.00,'03','amd_radeon_rx_6800_xt.jpg'),
('NVIDIA GeForce GTX 1660 Super','Tarjeta gráfica accesible para juegos en 1080p y 1440p.', 250.00,'03','nvidia_geforce_gtx_1660_super.jpg'),
('ASUS TUF Gaming RTX 3070','Tarjeta gráfica robusta para gaming 1440p.',550.00,'03','asus_tuf_gaming_rtx_3070.jpg'),
('MSI Radeon RX 6600 XT','Tarjeta gráfica eficiente para gaming en 1080p.',330.00,'03','msi_radeon_rx_6600_xt.jpg'),

-- Mothers
('ASUS ROG Crosshair X670E Hero','Motherboard premium para procesadores AMD Ryzen serie 7000.',600.00,'01', 'asus_rog_crosshair_x670e_hero.jpg'),
('MSI MAG B550 TOMAHAWK WIFI','Motherboard versátil para Ryzen con Wi-Fi y PCIe 4.0.',150.00, '01','msi_mag_b550_tomahawk_wifi.jpg'),
('Gigabyte Z690 AORUS ELITE DDR4','Motherboard potente para procesadores Intel Alder Lake.', 250.00, '01', 'gigabyte_z690_aorus_elite_ddr4.jpg'),
('ASRock B450M Steel Legend','Motherboard compacta y asequible para Ryzen.',110.00,'01','asrock_b450m_steel_legend.jpg'),
('Gigabyte X570 Aorus Elite','Motherboard de alto rendimiento con PCIe 4.0.',200.00,'01','gigabyte_x570_aorus_elite.jpg'),

-- Monitores
('LG UltraGear 27GN950-B 4K','Monitor 4K IPS con tasa de refresco de 144Hz y G-Sync.',800.00,'06','lg_ultragear_27gn950_b_4k.jpg'),
('Samsung Odyssey G7 32"','Monitor curvo 240Hz con tecnología QLED para gamers.',550.00,'06','samsung_odyssey_g7_32.jpg'),
('Acer Predator XB273K','Monitor 27" 4K con 144Hz y soporte para NVIDIA G-Sync.',600.00,'06','acer_predator_xb273k.jpg'),
('Dell UltraSharp U2723QE','Monitor 4K profesional con colores precisos.',650.00,'06','dell_ultrasharp_u2723qe.jpg'),
('MSI Optix G27C5','Monitor curvo de 27 pulgadas para gaming.',300.00,'06','msi_optix_g27c5.jpg'),
('Logitech G502 HERO','Ratón gaming de alta precisión y personalización.',50.00,'11','logitech_g502_hero.jpg'),
('Razer BlackWidow V3','Teclado mecánico con iluminación RGB.',140.00,'11','razer_blackwidow_v3.jpg'),

-- Periféricos
('Logitech G Pro X Superlight','Ratón gaming ultraligero con sensor HERO 25K.',150.00,'11','logitech_g_pro_x_superlight.jpg'),
('Razer Huntsman Elite','Teclado mecánico con switches opto-mecánicos y retroiluminación RGB.',200.00,'11','razer_huntsman_elite.jpg'),
('SteelSeries Arctis 7','Auriculares inalámbricos para gaming con sonido envolvente 7.1.',150.00,'11','steelseries_arctis_7.jpg'),
('Logitech G203','Raton gaming ultraligero con sensor HERO de 15K.',120.00,'11','logitech_g_pro_x_superlight.jpg'),
('Razer BlackWidow V3','Teclado mecánico con retroiluminación RGB y switches verdes.',120.00,'11','razer_blackwidow_v3.jpg'),
('SteelSeries Arctis 7','Auriculares inalámbricos con sonido DTS Headphone:X 7.1.',150.00,'11','steelseries_arctis_7.jpg'),
('Corsair K95 RGB Platinum XT','Teclado mecánico con switches Cherry MX y retroiluminación RGB.',180.00,'11','corsair_k95_rgb_platinum_xt.jpg'),
('Logitech G920','Volante para Xbox y PC con retroalimentación force feedback.',250.00,'11','logitech_g920.jpg'),
('Razer DeathAdder V2','Raton ergonómico para gaming con sensor óptico de 20K DPI.',70.00,'11','razer_deathadder_v2.jpg'),
('Corsair Void Elite RGB','Auriculares gaming inalámbricos con sonido envolvente 7.1 y RGB.',100.00,'11','corsair_void_elite_rgb.jpg'),
('Logitech G903 Lightspeed','Raton inalámbrico con sensor HERO y 16K DPI, RGB.',130.00,'11','logitech_g903_lightspeed.jpg'),
('HyperX Alloy FPS Pro','Teclado mecánico compacto, ideal para FPS y portátil.',80.00,'11','hyperx_alloy_fps_pro.jpg'),
('Corsair Harpoon RGB Wireless','Raton inalámbrico con sensor de 10K DPI y retroiluminación RGB.',60.00,45,'11','corsair_harpoon_rgb_wireless.jpg');


SELECT nombre_categoria from categorias;
select nombre_producto from productos;

