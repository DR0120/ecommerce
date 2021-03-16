<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
        //     DbSeeder::class
        // ]);
        DB::table('categorias')->insert([
            'nombre' => 'BOARD',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'TERJETA DE VIDEO',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'MEMORIAS RAM',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'MEMORIAS RAM P/PORTATILES',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'PROCESADOR INTEL',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'PROCESADOR AMD',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'REFRIGERACION P/PROCESADORES',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'DISCOS HHD/SSD',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'FUENTES DE PODER',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'CHASIS CASE TORRES',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'MOUSE',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'TECLADO',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'AUDIO/MICRO',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'PAD MOUSE',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'JOISTICK CONT',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'MONITORES HOGAR/DISEÑO',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'MONITORES GAMER',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'PORTATILES',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'PORTATILES GAMER',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'PARLANTES',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'TECLADO Y MOUSE',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'UPS',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'DISCOS EXTERNOS',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'TARJETAS DE SONIDO',
        ]);
        DB::table('categorias')->insert([
            'nombre' => 'SILLA GAMER',
        ]);

        // TABLA MARCAS

        DB::table('marcas')->insert([
            'nombre' => 'ASUS',
            'imagen' => 'https://thumbs.dreamstime.com/b/logotipo-de-asus-127699289.jpg'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'GIGABYTE',
            'imagen' => 'https://1000marcas.net/wp-content/uploads/2020/02/Gigabyte-Logo.png'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'MSI',
            'imagen' => 'https://1000marcas.net/wp-content/uploads/2020/03/MSI-emblema.jpg'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'AMD',
            'imagen' => 'https://www.muycomputerpro.com/wp-content/uploads/2011/11/amd-logo.jpg'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'INTEL',
            'imagen' => 'https://www.teknofilo.com/wp-content/uploads/2020/09/Logo-tipo-anterior.jpg'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'ASRock',
            'imagen' => 'https://pcmrace.s3.amazonaws.com/2020/11/asrocklogo-750x400.jpg'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'WESTER DIGITAL',
            'imagen' => 'https://www.razorman.net/reviewshardware/wp-content/uploads/western-digital-logo.jpg'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'TOSHIBA',
            'imagen' => 'https://cdn.freebiesupply.com/logos/large/2x/toshiba-1-logo-png-transparent.png'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'SAMSUNG',
            'imagen' => 'https://upload.wikimedia.org/wikipedia/commons/6/6e/Logo_samsung_5.jpg'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'CORSAIR',
            'imagen' => 'http://hardzone.es/app/uploads/2014/01/Corsair-logo-690x335.png'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'LONGITECH',
            'imagen' => 'https://logodownload.org/wp-content/uploads/2018/03/logitech-logo.png'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'COOLER MASTER',
            'imagen' => 'http://hardzone.es/app/uploads/2013/01/cooler-master-logo-690x335-696x336.jpg'
        ]);    
        DB::table('marcas')->insert([
            'nombre' => 'AORUS',
            'imagen' => 'https://i0.wp.com/www.tecnozona.com/wp-content/uploads/2017/04/Aorus-Logo.jpg'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'OC',
            'imagen' => 'https://image.shutterstock.com/image-vector/oc-o-c-black-letter-260nw-627612980.jpg'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'SEGATE',
            'imagen' => 'https://i.pinimg.com/originals/12/b8/25/12b825bb26a3067cf7b7d8e9c3d270a9.jpg'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'ADATA',
            'imagen' => 'http://1000marcas.net/wp-content/uploads/2020/10/ADATA-logo.jpg'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'HIPERX',
            'imagen' => 'https://hardwareviews.com/wp-content/uploads/2018/10/hyperx-kingston-portada.jpg'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'XPG',
            'imagen' => 'https://www.121pr.com/wp-content/uploads/2019/09/XPG_Logo_%E6%BC%B8%E5%B1%A4%E9%BB%91%E5%9C%88%EF%BC%BF%E9%BB%91%E5%BA%95%E6%87%89%E7%94%A8.png'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'EVGA',
            'imagen' => 'http://electroshop.info/bd/image/cache/catalog/brands/e3w9oo-600x315.png'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'THERMALTAKE',
            'imagen' => 'https://www.supertec.com.pe/productos/marcas/thermaltake.jpg'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'BITFENIX',
            'imagen' => 'https://highendstore.net/image/cache/catalog/Bitfenix-600x315w.png'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'BUNGEE',
            'imagen' => 'https://i.ytimg.com/vi/K_NYcfe3vbk/hqdefault.jpg'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'NVIDIA',
            'imagen' => 'https://www.profesionalreview.com/wp-content/uploads/2015/12/nvidia-logo2016.jpg'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'TRUST',
            'imagen' => 'https://www.robbshop.nl/media/48/f9/fd/1593694989/trust.png'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'RAZER',
            'imagen' => 'https://upload.wikimedia.org/wikipedia/commons/7/79/Logo_Razer_2017.png'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'STEELSERIES',
            'imagen' => 'https://i1.wp.com/d9n64ieh9hz8y.cloudfront.net/wp-content/uploads/20160325165608/steelseries-rival-300-gaming-mouse-danh-gia-gaming-gear-1140x641.jpg?resize=900%2C506&ssl=1'
        ]);
        DB::table('marcas')->insert([
            'nombre' => 'ZOWIE',
            'imagen' => 'https://brands-buyviu-com.s3.amazonaws.com/brand_logos/474e2f778f333a041561edf90f270046'
        ]);

        // OFERTAS
        DB::table('ofertas')->insert([
            'descuento' => 0.00,
            'periodo_inicio' => '2021-03-09',
            'periodo_fin' => '2021-03-09',
        ]);
        DB::table('ofertas')->insert([
            'descuento' => 10.00,
            'periodo_inicio' => '2021-03-09',
            'periodo_fin' => '2021-03-09',
        ]);
        DB::table('ofertas')->insert([
            'descuento' => 15.00,
            'periodo_inicio' => '2021-03-09',
            'periodo_fin' => '2021-03-09',
        ]);
        DB::table('ofertas')->insert([
            'descuento' => 20.00,
            'periodo_inicio' => '2021-03-09',
            'periodo_fin' => '2021-03-09',
        ]);
        DB::table('ofertas')->insert([
            'descuento' => 30.00,
            'periodo_inicio' => '2021-03-09',
            'periodo_fin' => '2021-03-09',
        ]);
        DB::table('ofertas')->insert([
            'descuento' => 40.00,
            'periodo_inicio' => '2021-03-09',
            'periodo_fin' => '2021-03-09',
        ]);
        DB::table('ofertas')->insert([
            'descuento' => 50.00,
            'periodo_inicio' => '2021-03-09',
            'periodo_fin' => '2021-03-09',
        ]);
        DB::table('ofertas')->insert([
            'descuento' => 60.00,
            'periodo_inicio' => '2021-03-09',
            'periodo_fin' => '2021-03-09',
        ]);
        DB::table('ofertas')->insert([
            'descuento' => 70.00,
            'periodo_inicio' => '2021-03-09',
            'periodo_fin' => '2021-03-09',
        ]);
        DB::table('ofertas')->insert([
            'descuento' => 80.00,
            'periodo_inicio' => '2021-03-09',
            'periodo_fin' => '2021-03-09',
        ]);

        // PRODUCTOS
        DB::table('productos')->insert([
            'categoria_id' => 1,
            'marca_id' => 1,
            'oferta_id' => 1,
            'cod' => 'BOA-001',
            'nombre' => 'ASUS H310M',
            'descripcion' => 'La ASUS PRIME H310M es una placa base de última generación preparada para soportar los procesadores Intel Core 8th generation (Intel Coffee Lake). Basado en el chipset Intel H310 Express, proporcionará un rendimiento óptimo para una configuración de última generación con un potente procesador. Soporta procesadores Intel Core Coffee Lake de octava generación, tarjetas gráficas PCI-Express 3.0 16x, unidades SATA de 6 Gbps y M.2, RAM DDR4 y dispositivos USB 3.0.',
            'precio_venta' => 264.00,
            'imagen' => 'ASUS H310M1.jpg',
            'imagenes' => '["ASUS H310M1.jpg","ASUS H310M2.jpg","ASUS H310M3.jpg","ASUS H310M4.jpg"]',
            'stock' => 20
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 3,
            'marca_id' => 17,
            'oferta_id' => 1,
            'cod' => 'MRAM-001',
            'nombre' => '4GB  DDR4  4X1  ADATA',
            'descripcion' => 'ADATA AD4U2400J4G17-R 4GB DDR4 2400MHz modulo de - Memoria (4 GB, 1 x 4 GB, DDR4, 2400 MHz, 288-pin DIMM)',
            'precio_venta' => 120.00,
            'imagen' => '4GB  DDR4  4X1  ADATA1.jpg',
            'imagenes' => '["4GB  DDR4  4X1  ADATA1.jpg","4GB  DDR4  4X1  ADATA2.jpg","4GB  DDR4  4X1  ADATA3.jpg","4GB  DDR4  4X1  ADATA4.jpg"]',
            'stock' => 70
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 3,
            'marca_id' => 19,
            'oferta_id' => 1,
            'cod' => 'MRAM-002',
            'nombre' => 'ASUS H310M',
            'descripcion' => '8GB DDR 3000 8X1 XPG La memoria XPG SPECTRIX D41 DDR4 RGB reune un rendimiento excepcional y una iluminacion RGB fascinante para ofrecerte una actualizacion digna para tu sistema',
            'precio_venta' => 192.00,
            'imagen' => '8GB DDR 3000 8X1 XPG1.jpg',
            'imagenes' => '["8GB DDR 3000 8X1 XPG1.jpg","8GB DDR 3000 8X1 XPG2.jpg","8GB DDR 3000 8X1 XPG3.jpg","8GB DDR 3000 8X1 XPG4.jpg"]',
            'stock' => 70
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 3,
            'marca_id' => 10,
            'oferta_id' => 3,
            'cod' => 'MRAM-003',
            'nombre' => '8GB DDR 3000 8X1 CORSAIR',
            'descripcion' => 'Con la nueva gama de memorias de PC de alta gama Vengeance Series, Corsair ofrece soluciones estables y eficaces para los ordenadores portátiles de nueva generación que también tienen un gran potencial de overclocking',
            'precio_venta' => 195.00,
            'imagen' => '8GB DDR 3000 8X1  CORSAIR1.jpg',
            'imagenes' => '["8GB DDR 3000 8X1  CORSAIR1.jpg","8GB DDR 3000 8X1  CORSAIR2.jpg","8GB DDR 3000 8X1  CORSAIR3.jpg","8GB DDR 3000 8X1  CORSAIR4.jpg"]',
            'stock' => 50
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 3,
            'marca_id' => 10,
            'oferta_id' => 1,
            'cod' => 'MRAM-004',
            'nombre' => '8GB DDR4 2666 LED CORSAIR',
            'descripcion' => 'Con la nueva gama de memorias de PC de gama alta Vengeance LPX Series, Corsair ofrece soluciones estables y de alto rendimiento para plataformas de próxima generación con el potencial añadido del overclocking',
            'precio_venta' => 200.00,
            'imagen' => '8GB DDR4 2666 LED CORSAIR1.jpg',
            'imagenes' => '["8GB DDR4 2666 LED CORSAIR1.jpg","8GB DDR4 2666 LED CORSAIR2.jpg","8GB DDR4 2666 LED CORSAIR3.jpg","8GB DDR4 2666 LED CORSAIR4.jpg"]',
            'stock' => 50
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 3,
            'marca_id' => 19,
            'oferta_id' => 1,
            'cod' => 'MRAM-005',
            'nombre' => '8GB DDR4 3000 8X1 RGB XPG',
            'descripcion' => 'Modelo: AX4U300038G16-SB41\r\nVelocidad: DDR4-3000\r\nLatencia: CL16-18-18\r\nVoltaje: 1.35V \r\nIluminacion: RGB\r\nColor: Rojo/Negro\r\nCompatibilidad: ASUS Aura Sync, MSI Mystic Light, Gigabyte RGB Fusion y AsRock Polychrome Sync',
            'precio_venta' => 215.00,
            'imagen' => '8GB DDR4 3000 8X1 RGB XPG1.jpg',
            'imagenes' => '["8GB DDR4 3000 8X1 RGB XPG1.jpg","8GB DDR4 3000 8X1 RGB XPG2.jpg","8GB DDR4 3000 8X1 RGB XPG3.jpg","8GB DDR4 3000 8X1 RGB XPG4.jpg"]',
            'stock' => 50
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 3,
            'marca_id' => 19,
            'oferta_id' => 1,
            'cod' => 'MRAM-006',
            'nombre' => '16 GB DDR4 3000 16X1 XPG',
            'descripcion' => 'ADATA XPG GAMMIX D30 16GB 3000MHz Negro DDR4 CL16 Retail módulo de memoria',
            'precio_venta' => 339.00,
            'imagen' => '16 GB DDR4 3000 16X1 XPG1.jpg',
            'imagenes' => '["16 GB DDR4 3000 16X1 XPG1.jpg","17 GB DDR4 3000 16X1 XPG1.jpg","18 GB DDR4 3000 16X1 XPG1.jpg","19 GB DDR4 3000 16X1 XPG1.jpg"]',
            'stock' => 50
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 3,
            'marca_id' => 19,
            'oferta_id' => 1,
            'cod' => 'MRAM-007',
            'nombre' => '8G DDR4 3600 8X1 XPG D80 LIQUID',
            'descripcion' => 'XPG Spectrix D80 RGB DDR4 refrigerado por liquido 3600MHz 16GB (2x8GB) 288-Pin PC4-28800 Desktop U-DIMM Memory Retail Kit (AX4U360038G17-DR80)',
            'precio_venta' => 340.00,
            'imagen' => '8G DDR4 3600 8X1 XPG D80 LIQUID1.jpg',
            'imagenes' => '["8G DDR4 3600 8X1 XPG D80 LIQUID1.jpg","8G DDR4 3600 8X1 XPG D80 LIQUID2.jpg","8G DDR4 3600 8X1 XPG D80 LIQUID3.jpg","8G DDR4 3600 8X1 XPG D80 LIQUID4.jpg"]',
            'stock' => 50
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 3,
            'marca_id' => 10,
            'oferta_id' => 1,
            'cod' => 'MRAM-008',
            'nombre' => '16 GB DDR4 320016X1 CORSAIR',
            'descripcion' => 'Con la nueva gama de memorias de PC de gama alta Vengeance LPX Series, Corsair ofrece soluciones estables y de alto rendimiento para plataformas de próxima generación con el potencial añadido del overclocking',
            'precio_venta' => 365.00,
            'imagen' => '16 GB DDR4 320016X1 CORSAIR1.jpg',
            'imagenes' => '["16 GB DDR4 320016X1 CORSAIR1.jpg","17 GB DDR4 320016X1 CORSAIR1.jpg","18 GB DDR4 320016X1 CORSAIR1.jpg","19 GB DDR4 320016X1 CORSAIR1.jpg"]',
            'stock' => 75
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 3,
            'marca_id' => 10,
            'oferta_id' => 1,
            'cod' => 'MRAM-009',
            'nombre' => '16 GB DDR4 3000 2X8 CORSAIR RGB',
            'descripcion' => 'Con la nueva gama de memorias de PC de alta gama Vengeance RGB PRO Series, Corsair ofrece soluciones estables y eficaces para las plataformas de nueva generacion que tambien tienen un gran potencial de overclocking. Ofrecen también una iluminación RGB multizona dinámica hipnotizadora',
            'precio_venta' => 395.00,
            'imagen' => '16 GB DDR4 3000 2X8 CORSAIR RGB1.jpg',
            'imagenes' => '["16 GB DDR4 3000 2X8 CORSAIR RGB1.jpg","17 GB DDR4 3000 2X8 CORSAIR RGB1.jpg","18 GB DDR4 3000 2X8 CORSAIR RGB1.jpg","19 GB DDR4 3000 2X8 CORSAIR RGB1.jpg"]',
            'stock' => 50
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 3,
            'marca_id' => 19,
            'oferta_id' => 1,
            'cod' => 'MRAM-010',
            'nombre' => '16 GB DDR4 3200 1X16 XPG RGB D41',
            'descripcion' => 'XPG Spectrix D41 DDR4 RGB 3000MHz 16GB (2x8GB) 288-Pin PC4-24000 Desktop U-DIMM Kit minorista de memoria rojo (AX4U300038G16A-DR41)',
            'precio_venta' => 425.00,
            'imagen' => '16 GB DDR4 3200 1X16 XPG RGB D411.jpg',
            'imagenes' => '["16 GB DDR4 3200 1X16 XPG RGB D411.jpg","17 GB DDR4 3200 1X16 XPG RGB D411.jpg","18 GB DDR4 3200 1X16 XPG RGB D411.jpg","19 GB DDR4 3200 1X16 XPG RGB D411.jpg"]',
            'stock' => 50
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 3,
            'marca_id' => 10,
            'oferta_id' => 1,
            'cod' => 'MRAM-011',
            'nombre' => '16 GB DDR4  3600 2X8 CORSAIR',
            'descripcion' => 'Con la nueva gama de memorias de PC de gama alta Vengeance LPX Series, Corsair ofrece soluciones estables y de alto rendimiento para plataformas de proxima generacion con el potencial aniadido del overclocking',
            'precio_venta' => 454.00,
            'imagen' => '16 GB DDR4  3600 2X8 CORSAIR1.jpg',
            'imagenes' => '["16 GB DDR4  3600 2X8 CORSAIR1.jpg","17 GB DDR4  3600 2X8 CORSAIR1.jpg","18 GB DDR4  3600 2X8 CORSAIR1.jpg","19 GB DDR4  3600 2X8 CORSAIR1.jpg"]',
            'stock' => 50
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 3,
            'marca_id' => 10,
            'oferta_id' => 1,
            'cod' => 'MRAM-012',
            'nombre' => '16 GB DDR4 3200 2X8 CORSAIR RGB',
            'descripcion' => 'Las memorias de PC Vengeance RGB PRO Series de Corsair de gama alta ofrecen el mejor rendimiento y estabilidad para las plataformas de proxima generacion con alto potencial de overclocking. Tambien le ofrecen una iluminacion RGB dinamica, hipnotizante y multizona',
            'precio_venta' => 469.00,
            'imagen' => '16 GB DDR4 3200 2X8 CORSAIR RGB1.jpg',
            'imagenes' => '["16 GB DDR4 3200 2X8 CORSAIR RGB1.jpg","17 GB DDR4 3200 2X8 CORSAIR RGB1.jpg","18 GB DDR4 3200 2X8 CORSAIR RGB1.jpg","19 GB DDR4 3200 2X8 CORSAIR RGB1.jpg"]',
            'stock' => 70 
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 3,
            'marca_id' => 15,
            'oferta_id' => 1,
            'cod' => 'MRAM-013',
            'nombre' => '16GB DDR4 3200 2X8 DOMINATO R',
            'descripcion' => 'Las tiras de RAM RGB Platinum Dominator de Corsair le aseguraran el maximo rendimiento para las plataformas de proxima generacion con el beneficio añadido de un alto potencial de overclocking. Con tensiones nominales de 1,35 V, las memorias PC DDR4 Dominator Platinum RGB son una solución de gama alta',
            'precio_venta' => 555.00,
            'imagen' => '16GB DDR4 3200 2X8 DOMINATOR1.jpg',
            'imagenes' => '["16GB DDR4 3200 2X8 DOMINATOR1.jpg","16GB DDR4 3200 2X8 DOMINATOR2.jpg","16GB DDR4 3200 2X8 DOMINATOR3.jpg","16GB DDR4 3200 2X8 DOMINATOR4.jpg"]',
            'stock' => 50
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 4,
            'marca_id' => 15,
            'oferta_id' => 1,
            'cod' => 'MRP-001',
            'nombre' => '8GB DDR4 2666 8X1',
            'descripcion' => 'La memoria Aegis ha sido diseñada para encajar perfectamente en plataformas Intel de ultima generacion con procesadores Intel Core como la sexta generacion. El objetivo es Ofrecer la mayor flexibilidad posible a los jugadores experimentados',
            'precio_venta' => 185.00,
            'imagen' => '8GB DDR4 2666 8X11.jpg',
            'imagenes' => '["8GB DDR4 2666 8X11.jpg","8GB DDR4 2666 8X12.jpg","8GB DDR4 2666 8X13.jpg","8GB DDR4 2666 8X14.jpg"]',
            'stock' => 50
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 4,
            'marca_id' => 15,
            'oferta_id' => 1,
            'cod' => 'MRP-002',
            'nombre' => '16GB DDR4 266616X1',
            'descripcion' => 'La memoria Aegis ha sido diseñada para encajar perfectamente en plataformas Intel de ultima generacion con procesadores Intel Core como la sexta generacion. El objetivo es Ofrecer la mayor flexibilidad posible a los jugadores experimentados',
            'precio_venta' => 335.00,
            'imagen' => '16GB DDR4 266616X11.jpg',
            'imagenes' => '["16GB DDR4 266616X11.jpg","16GB DDR4 266616X12.jpg","16GB DDR4 266616X13.jpg","16GB DDR4 266616X14.jpg"]',
            'stock' => 50
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 5,
            'marca_id' => 5,
            'oferta_id' => 1,
            'cod' => 'POI-001',
            'nombre' => 'INTEL CORE I3 9100F 3.6 4.2 GHZ',
            'descripcion' => 'El procesador Intel Core i3-9100F ofrece un rendimiento de primera clase con sus 4 nucleos y una frecuencia nativa de 3,6 GHz que aumenta a 4,12 GHz en modo Turbo. Sin un controlador grafico integrado, este Core i3 Coffee Lake Refresh sera ideal para los jugadores con una tarjeta grafica dedicada',
            'precio_venta' => 599.00,
            'imagen' => 'INTEL CORE I3 9100F 3.6 4.2 GHZ1.jpg',
            'imagenes' => '["INTEL CORE I3 9100F  3.6  4.2 GHZ1.jpg","INTEL CORE I3 9100F  3.6  4.2 GHZ2.jpg","INTEL CORE I3 9100F  3.6  4.2 GHZ3.jpg","INTEL CORE I3 9100F  3.6  4.2 GHZ4.jpg"]',
            'stock' => 50
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 5,
            'marca_id' => 5,
            'oferta_id' => 1,
            'cod' => 'POI-002',
            'nombre' => 'INTELCORE I5 9400F 2.9 4.1 GHZ',
            'descripcion' => 'El procesador Intel Core i5-9400F ofrece un rendimiento de primera categoria con sus 6 nucleos y una velocidad de reloj nativa de 2,9 GHz que sube a 4,1 GHz en modo Turbo. Sin controlador de graficos integrado, este Core i5 Coffee Lake Refresh será ideal para los jugadores con una tarjeta grafica dedicada',
            'precio_venta' => 699.00,
            'imagen' => 'INTELCORE I5 9400F     2.9    4.1 GHZ1.jpg',
            'imagenes' => '["INTELCORE I5 9400F     2.9    4.1 GHZ1.jpg","INTELCORE I5 9400F     2.9    4.1 GHZ2.jpg","INTELCORE I5 9400F     2.9    4.1 GHZ3.jpg","INTELCORE I5 9400F     2.9    4.1 GHZ4.jpg"]',
            'stock' => 50
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 5,
            'marca_id' => 5,
            'oferta_id' => 1,
            'cod' => 'POI-003',
            'nombre' => 'INTEL CORE I5 8600K  3.6  4.3.GHZ',
            'descripcion' => '3,6 GHz Frecuencia de funcionamiento, LGA1151 Socket\r\ncafe Lago Series\r\nIntel en caja de computadora CPU\r\ni5 – 8600 K con 9 MB de cache\r\n6 Core/6 hilos',
            'precio_venta' => 880.00,
            'imagen' => 'INTEL CORE I5 8600K  3.6  4.3.GHZ1.jpg',
            'imagenes' => '["INTEL CORE I5 8600K  3.6  4.3.GHZ1.jpg","INTEL CORE I5 8600K  3.6  4.3.GHZ2.jpg","INTEL CORE I5 8600K  3.6  4.3.GHZ3.jpg","INTEL CORE I5 8600K  3.6  4.3.GHZ4.jpg"]',
            'stock' => 50 
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 5,
            'marca_id' => 5,
            'oferta_id' => 1,
            'cod' => 'POI-004',
            'nombre' => 'INTEL CORE I5  9600K  3.6  4.3.GHZ',
            'descripcion' => 'Procesador Intel Core i5-9600K para equipos de sobremesa de 6 nucleos de hasta 4,6 GHz Turbo desbloqueado LGA1151 Serie 300 95W. 6 núcleos / 6 hilos\r\n3,70 GHz hasta 4,60 GHz / 9 MB de caché\r\nCompatible solo con placas base basadas en chipsets Intel 300 Series\r\nCompatible con memoria Intel Optane\r\nGráficos Intel UHD 630',
            'precio_venta' => 945.00,
            'imagen' => 'INTEL CORE I5  9600K  3.6  4.3.GHZ1.jpg',
            'imagenes' => '["INTEL CORE I5  9600K  3.6  4.3.GHZ1.jpg","INTEL CORE I5  9600K  3.6  4.3.GHZ2.jpg","INTEL CORE I5  9600K  3.6  4.3.GHZ3.jpg","INTEL CORE I5  9600K  3.6  4.3.GHZ4.jpg"]',
            'stock' => 50
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 5,
            'marca_id' => 5,
            'oferta_id' => 1,
            'cod' => 'POI-005',
            'nombre' => 'INTEL CORE I7 9700F 3.0 4.9 GHZ',
            'descripcion' => 'Intel Core i7-9700F Procesador de sobremesa 8 Core velocidad de 3 GHz (hasta 4,7 GHz) Sin gráficos de procesador LGA1151 Serie 300 65W (BX80684I79700F)',
            'precio_venta' => 1399.00,
            'imagen' => 'INTEL CORE I7 9700F 3.0 4.9 GHZ1.jpg',
            'imagenes' => '["INTEL CORE I7 9700F 3.0 4.9 GHZ1.jpg","INTEL CORE I7 9700F 3.0 4.9 GHZ2.jpg","INTEL CORE I7 9700F 3.0 4.9 GHZ3.jpg","INTEL CORE I7 9700F 3.0 4.9 GHZ4.jpg"]',
            'stock' => 50
        ]);
        DB::table('productos')->insert([
            'categoria_id' => 5,
            'marca_id' => 5,
            'oferta_id' => 1,
            'cod' => 'POI-006',
            'nombre' => 'INTEL CORE  I7 9700K 3.6 4.9 GHZ',
            'descripcion' => 'Procesador Intel Core i7-9700K para equipos de escritorio',
            'precio_venta' => 1525.00,
            'imagen' => 'INTEL CORE  I7 9700K 3.6 4.9 GHZ1.jpg',
            'imagenes' => '["INTEL CORE  I7 9700K 3.6 4.9 GHZ1.jpg","INTEL CORE  I7 9700K 3.6 4.9 GHZ2.jpg","INTEL CORE  I7 9700K 3.6 4.9 GHZ3.jpg","INTEL CORE  I7 9700K 3.6 4.9 GHZ4.jpg"]',
            'stock' => 50
        ]);

        //  USERS
        DB::table('users')->insert([
            'name' => 'admin',
            'apellido' => 'Rodriguez',
            'nro_documento' => '84758',
            'direccion' => 'UAGRM',
            'telefono' => 12345678,
            'email' => 'admin@admin.com',
            'password' => Hash::make('0120'),
            'rol' => 'admin',
            'puntos_acumulados' => 0,
        ]);
        DB::table('users')->insert([
            'name' => 'diego',
            'apellido' => 'Rodriguez',
            'nro_documento' => '84758',
            'direccion' => 'UAGRM',
            'telefono' => 12345678,
            'email' => 'user1@user.com',
            'password' => Hash::make('0120'),
            'rol' => 'user',
            'puntos_acumulados' => 0,
        ]);
        DB::table('users')->insert([
            'name' => 'mariela',
            'apellido' => 'Rodriguez',
            'nro_documento' => '84758',
            'direccion' => 'UAGRM',
            'telefono' => 12345678,
            'email' => 'user2@user.com',
            'password' => Hash::make('0120'),
            'rol' => 'user',
            'puntos_acumulados' => 0,
        ]);

        // FAVORITOS
        // DB::table('favoritos')->insert([
        //     'persona_id' => 2,
        //     'producto_id' => 25,
        // ]);
    }
}
