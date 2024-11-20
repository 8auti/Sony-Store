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

-- rams
('Corsair Vengeance LPX 16GB DDR4 3200MHz','Memoria RAM DDR4 de alto rendimiento con disipador.',65.00,'04','corsair_vengeance_lpx_16gb_ddr4_3200mhz.jpg'),
('G.Skill Ripjaws V 32GB DDR4 3600MHz','RAM DDR4 de 32GB, ideal para gaming y multitarea.', 120.00,'04','gskill_ripjaws_v_32gb_ddr4_3600mhz.jpg'),
('Kingston Fury Beast 16GB DDR5 5200MHz','RAM DDR5 rápida y eficiente para plataformas modernas.',110.00,'04','kingston_fury_beast_16gb_ddr5_5200mhz.jpg'),
('HyperX Fury 16GB DDR4 3200MHz','RAM DDR4 rápida y confiable para gaming.',70.00,'04','hyperx_fury_16gb_ddr4_3200mhz.jpg'),
('TeamGroup T-Force Delta 32GB DDR5 6000MHz','Memoria RAM DDR5 con iluminación RGB.',180.00,'04','teamgroup_tforce_delta_32gb_ddr5_6000mhz.jpg'),

-- Almacenamiento
('Samsung 970 EVO Plus 1TB','SSD NVMe M.2 de alto rendimiento con 1TB de capacidad.',150.00,'05','samsung_970_evo_plus_1tb.jpg'),
('Western Digital Black SN850X 2TB','SSD NVMe PCIe 4.0 para gaming y rendimiento extremo.',250.00,'05','wd_black_sn850x_2tb.jpg'),
('Crucial P5 500GB','SSD NVMe de 500GB, ideal para usuarios de alto rendimiento.',60.00,'05','crucial_p5_500gb.jpg'),
('Western Digital Blue 1TB HDD','HDD confiable para almacenamiento general.',50.00,'05','western_digital_blue_1tb_hdd.jpg'),
('Seagate FireCuda 530 2TB NVMe','SSD NVMe de alto rendimiento para gaming.',300.00,'05','seagate_firecuda_530_2tb_nvme.jpg'),

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
('Corsair Harpoon RGB Wireless','Raton inalámbrico con sensor de 10K DPI y retroiluminación RGB.',60.00,45,'11','corsair_harpoon_rgb_wireless.jpg'),

-- Coolers
('Cooler Master Hyper 212 Black Edition','Disipador universal para CPUs con ventilador.',45.00,'07','cooler_master_hyper_212_black_edition.jpg'),
('Noctua NH-D15','Enfriador premium para CPUs de alto rendimiento.',100.00,'07','noctua_nh_d15.jpg'),
('be quiet! Dark Rock Pro 4','Enfriador silencioso y eficiente para CPUs de alto rendimiento.',90.00,'07','be_quiet_dark_rock_pro_4.jpg'),
('Cooler Master MasterLiquid ML240L','Kit de refrigeración líquida AIO de 240mm con RGB.',110.00,'07','cooler_master_masterliquid_ml240l.jpg'),
('NZXT Kraken X63','Refrigeración líquida AIO de 280mm con iluminación RGB.',160.00,'07','nzxt_kraken_x63.jpg'),
('Noctua NH-L9x65','Enfriador compacto de alto rendimiento para espacios reducidos.',50.00,'07','noctua_nh_l9x65.jpg'),
('Corsair iCUE H115i Elite Capellix','Refrigeración líquida AIO de 280mm con bombas RGB.',180.00,'07','corsair_icue_h115i_elite_capellix.jpg'),

-- Gabinetes
('NZXT H510 Elite','Gabinete compacto con panel de vidrio templado.',150.00,'09','nzxt_h510_elite.jpg'),
('Corsair iCUE 4000X RGB','Gabinete con iluminación RGB y flujo de aire optimizado.',120.00,'09','corsair_icue_4000x_rgb.jpg'),
('Fractal Design Meshify C','Gabinete con diseño de malla para un flujo de aire optimizado.',90.00,'09','fractal_design_meshify_c.jpg'),
('Lian Li PC-O11 Dynamic','Gabinete premium con gran capacidad y flujo de aire eficiente.',180.00,'09','lian_li_pc_o11_dynamic.jpg'),
('Phanteks P400A','Gabinete con malla frontal y excelente flujo de aire.',80.00,'09','phanteks_p400a.jpg'),
('Cooler Master HAF 700','Gabinete grande con soporte para múltiples radiadores y gran espacio.',220.00,'09','cooler_master_haf_700.jpg'),
('NZXT H510','Gabinete compacto con diseño minimalista y fácil cableado.',80.00,'09','nzxt_h510.jpg'),

-- Fuentes
('EVGA SuperNOVA 750W G5','Fuente de poder 750W con certificación Gold.',110.00,'10','evga_supernova_750w_g5.jpg'),
('Corsair RM850x 850W','Fuente de poder modular y eficiente.',130.00,'10','corsair_rm850x_850w.jpg'),
('Seasonic Focus GX-750W','Fuente de poder 750W con certificación Gold y modular.',120.00,'10','seasonic_focus_gx_750w.jpg'),
('Corsair RM1000x 1000W','Fuente de alimentación de 1000W con eficiencia 80 Plus Gold.',160.00,'10','corsair_rm1000x_1000w.jpg'),
('Cooler Master MWE Gold 850W','Fuente de poder de 850W con certificación Gold y ventilador silencioso.',95.00,'10','cooler_master_mwe_gold_850w.jpg'),
('EVGA SuperNOVA 650W GA','Fuente de poder de 650W con certificación Gold y cables modulares.',85.00,'10','evga_supernova_650w_ga.jpg'),
('Antec Earthwatts Gold Pro 750W','Fuente de alimentación con 750W y eficiencia 80 Plus Gold.',100.00,'10','antec_earthwatts_gold_pro_750w.jpg');


SELECT nombre_categoria from categorias;
select nombre_producto from productos;

