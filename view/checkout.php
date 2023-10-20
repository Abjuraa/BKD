<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    

</head>
<body>
    <div id="page" class="site page-checkout">
        <aside class="site-off desktop-hide">
            <div class="off-canvas">
                <div class="canvas-head flexitem">
                    <div class="logo"><a href="/"><span class="circle"></span>Hamburgo</a></div>
                    <a href="#" class="t-close flexcenter"><span class="ri-close-line"></span></a>
                </div>
                <div class="departments"></div>
                <nav></nav>
                <div class="thetop-nav"></div>
            </div>
        </aside>
        
        <header>
            <div class="header-top mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                            <ul class="flexitem main-links">
                                <li><a href="#">Futuros productos</a></li>
                                <li><a href="#">Deseados</a></li>
                            </ul>
                        </div>
                        <div class="right">
                            <ul class="flexitem main-links">
                                <li><a href="login.php">Iniciar sesión</a></li>
                                <li><a href="#">COP<span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                                        <ul>
                                            <li class="current"><a href="#">COP</a></li>
                                            <li><a href="#">USD</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">English <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                                        <ul>
                                            <li class="current"><a href="#">Español</a></li>
                                            <li><a href="#">Ingles</a></li>
                                        </ul>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top -->

            <div class="header-nav">
                <div class="container">
                    <div class="wrapper flexitem">
                        <a href="#" class="trigger desktop-hide"><span class="i ri-menu-2-line"></span></a>
                        <div class="left flexitem">
                            <div class="logo"><a href="../index.php"><span class="circle"></span>Hamburgo</a></div>
                            <nav class="mobile-hide">
                                <ul class="flexitem second-links">
                                    <li><a href="../index.php">Inicio</a></li>
                                    <li><a href="page-category.php">Tienda</a></li>
                            </nav>
                        </div>
                        <div class="right">
                            <ul class="flexitem second-links">
                                <li class="mobile-hide"><a href="#">
                                        <div class="icon-large"><i class="ri-heart-line"></i></div>
                                    </a></li>
                                <li class="iscart"><a href="#">
                                        <div class="icon-large">
                                            <i class="ri-shopping-cart-line"></i>
                                            <div class="fly-item"><span class="item-number-cart">0</span></div>
                                        </div>
                                        <div class="icon-text">
                                            <div class="mini-text">Total</div>
                                            <div class="cart-total">$0</div>
                                        </div>

                                    </a>
                                    <div class="mini-cart" id="products-id">
                                        <div class="content">
                                            <div class="cart-head">
                                                <span class="num-products">0</span> Productos
                                            </div>
                                            <div class="cart-body">
                                                <ul class="products mini">
                                                </ul>
                                            </div>
                                            <div class="cart-footer">
                                                <div class="subtotal">
                                                    <p>Subtotal</p>
                                                </div>
                                                <div class="actions">
                                                    <a href="cart.php" class="secondary-button">Ver Carrito</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Main -->

            <div class="header-main mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                            <div class="dpt-cat">
                                <div class="dpt-head">
                                    <div class="main-text">Categorías</div>
                                    <div class="mini-text mobile-hide">Total 8 categorías</div>
                                    <a href="#" class="dpt-trigger mobile-hide">
                                        <i class="ri-menu-3-line ri-xl"></i>
                                        <i class="ri-close-line ri-xl"></i>
                                    </a>
                                </div>
                                <div class="dpt-menu">
                                    <ul class="second-links">
                                        <li class="has-child homekit">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-capsule-line"></i></div>
                                                Medicamentos
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <div class="mega">
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Alergias</a></h4>
                                                        <ul>
                                                            <li><a href="#">Corticoides Alergias</a></li>
                                                            <li><a href="#">Rinitis</a></li>
                                                            <li><a href="#">Reacciones Alergicas y Picazón</a></li>
                                                            <!-- <li><a href="#"></a></li> -->
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#"></a>Alivio del Dolor</h4>
                                                        <ul>
                                                            <li><a href="#">Antihemorroidales</a></li>
                                                            <li><a href="#">Antiinflamatorios</a></li>
                                                            <li><a href="#">Artiris y Artrosis</a></li>
                                                            <li><a href="#">Dolor Fuerte y Migraña</a></li>
                                                            <li><a href="#">Dolor y Fiebre</a></li>
                                                            <li><a href="#">Esclerosis Múltiple</a></li>
                                                            <li><a href="#">Relajante Muscular</a></li>
                                                            <!-- <li><a href="#"></a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Botiquín y Primeros Auxilios</a></h4>
                                                        <ul>
                                                            <li><a href="#">Algodones</a></li>
                                                            <li><a href="#">Antísepticos y Desinfectantes</a></li>
                                                            <li><a href="#">Curitas, Gasas, Apósitos y Vendas</a></li>
                                                            <li><a href="#">Micropore-Esparadrapo</a></li>
                                                            <li><a href="#">Ortopédicos</a></li>
                                                            <li><a href="#">Tapabocas y Guantes</a></li>
                                                            <li><a href="#">Termómetro</a></li>
                                                            <!-- <li><a href="#"></a></li> -->
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#">Corazón y Sistema Circulatorio</a></h4>
                                                        <ul>
                                                            <li><a href="#">Antianemicos</a></li>
                                                            <li><a href="#">Antiarritmicos y Antianginosos</a></li>
                                                            <li><a href="#">Anticoagulantes</a></li>
                                                            <li><a href="#">Antiplaquetarios</a></li>
                                                            <li><a href="#">Antivaricosos y Vasodilatadores</a></li>
                                                            <li><a href="#">Cuidado de la Tensión</a></li>
                                                            <li><a href="#">Diuréticos</a></li>
                                                            <li><a href="#">Inmunoestimulantes</a></li>
                                                            <!-- <li><a href="#"></a></li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Gripa y Tos</a></h4>
                                                        <ul>
                                                            <li><a href="#">Dolor de Garganta</a></li>
                                                            <li><a href="#">Expectorantes</a></li>
                                                            <li><a href="#">Mucoliticos</a></li>
                                                            <li><a href="#">Antigripales</a></li>
                                                            <li><a href="#">Descongestionantes</a></li>
                                                            <li><a href="#">Pañuelos</a></li>
                                                            <li><a href="#">Alivio Tos y Antisépticos Bucales</a></li>
                                                            <li><a href="#">Vitaminas Prevención Resfrío</a></li>
                                                            <!-- <li><a href="#"></a></li> -->
                                                        </ul>
                                                    </div>
                                            </div>
                                            <li class="has-child homekit">
                                                <a href="#">
                                                    <div class="icon-large"><i class="ri-user-heart-line"></i></div>
                                                    Dermocosméticos
                                                    <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                                </a>
                                                <div class="mega">
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4><a href="#">Protección Solar</a></h4>
                                                            <ul>
                                                                <li><a href="#">Facial</a></li>
                                                                <li><a href="#">Corporal</a></li>
                                                                <li><a href="#">Infantil</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#"></a>Cuidado Facial</h4>
                                                            <ul>
                                                                <li><a href="#">Limpieza</a></li>
                                                                <li><a href="#">Hidratación</a></li>
                                                                <li><a href="#">Antiedad</a></li>
                                                                <li><a href="#">Contorno Ojos</a></li>
                                                                <li><a href="#">Especializados y Anti Imperfecciones</a></li>
                                                                <li><a href="#">Cuiadado de Labios</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4><a href="#">Cuidado Coporal</a></h4>
                                                            <ul>
                                                                <li><a href="#">Hidratantes</a></li>
                                                                <li><a href="#">Limpieza</a></li>
                                                                <li><a href="#">Tratamientos</a></li>
                                                                <li><a href="#">Desodorantes</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#">Cuidado del Cabello</a></h4>
                                                            <ul>
                                                                <li><a href="#">Shampoo y Acondicionador</a></li>
                                                                <li><a href="#">Tratamiento capilar</a></li>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="has-child homekit">
                                                <a href="#">
                                                    <div class="icon-large"><i class="ri-user-star-line"></i></div>
                                                    Cuidado Personal
                                                    <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                                </a>
                                                <div class="mega">
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4><a href="#">Cuidado de la Piel</a></h4>
                                                            <ul>
                                                                <li><a href="#">Cuidado Facial</a></li>
                                                                <li><a href="#">Crema Corporal</a></li>
                                                                <li><a href="#">Protección Solar</a></li>
                                                                <li><a href="#">Cuidado Corporal y SPA</a></li>
                                                                <li><a href="#">Cuidado Labios</a></li>
                                                                <li><a href="#">Mascarillas</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#"></a>Cuidado del Cabello</h4>
                                                            <ul>
                                                                <li><a href="#">Shampoo y Acondicionador</a></li>
                                                                <li><a href="#">Cremas de Peinar, Geles y Ceras</a></li>
                                                                <li><a href="#">Tratamientos</a></li>
                                                                <li><a href="#">Tinturas</a></li>
                                                                <li><a href="#">Planchas</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4><a href="#">Higiene Oral</a></h4>
                                                            <ul>
                                                                <li><a href="#">Crema Dental</a></li>
                                                                <li><a href="#">Enjuague Bucal</a></li>
                                                                <li><a href="#">Cepillos Dentales y Repuestos</a></li>
                                                                <li><a href="#">Sedas Dentales</a></li>
                                                                <li><a href="#">Fijador Prótesis Dental y Accesorios</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#">Higiene Personal</a></h4>
                                                            <ul>
                                                                <li><a href="#">Desodorantes</a></li>
                                                                <li><a href="#">Protección Pies</a></li>
                                                                <li><a href="#">Jabones</a></li>
                                                                <li><a href="#">Pañuelos</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4><a href="#">Afeitada y Depilación</a></h4>
                                                            <ul>
                                                                <li><a href="#">Máquienas Desechables</a></li>
                                                                <li><a href="#">Crema de Afeitar</a></li>
                                                                <li><a href="#">Máquinas y Repuestos</a></li>
                                                                <li><a href="#">Depilación</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#">Cuidado Femenino</a></h4>
                                                            <ul>
                                                                <li><a href="#">Protección Femenina</a></li>
                                                                <li><a href="#">Higiene Íntima</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#">Incontinencia</a></h4>
                                                        </div>
                                                </div>
                                            </li>
                                            <li class="has-child homekit">
                                                <a href="#">
                                                    <div class="icon-large"><i class="ri-hearts-fill"></i></div>
                                                    Bebé y Maternidad
                                                    <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                                </a>
                                                <div class="mega">
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4><a href="#">Alimentación y Lactancia</a></h4>
                                                            <ul>
                                                                <li><a href="#">Fórmulas Infantiles</a></li>
                                                                <li><a href="#">Fórmulas para Necesidades Especiales</a></li>
                                                                <li><a href="#">Cereales, Coladas y Compotas</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#">Pañales y Toallitas Húmedas</a></h4>
                                                            <ul>
                                                                <li><a href="#">Pañales</a></li>
                                                                <li><a href="#">Toallitas Húmedas</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4><a href="#">Hora del Baño</a></h4>
                                                            <ul>
                                                                <li><a href="#">Cuidado del Cabello</a></li>
                                                                <li><a href="#">Jabones</a></li>
                                                                <li><a href="#">Cremas y Aceites Corporales</a></li>
                                                                <li><a href="#">Artículos de Aseo (Talcos y Copitos)</a></li>
                                                                <li><a href="#">Colonias y Fragancias</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#">Mamá</a></h4>
                                                            <ul>
                                                                <li><a href="#">Lactancia y Suplementos Alimenticios</a></li>
                                                                <li><a href="#">Cuidado Pezones</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="has-child homekit">
                                                <a href="#">
                                                    <div class="icon-large"><i class="ri-leaf-line"></i></div>
                                                    Bienestar y Nutrición
                                                    <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                                </a>
                                                <div class="mega">
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4><a href="#">Nutrición</a></h4>
                                                            <ul>
                                                                <li><a href="#">Adulto</a></li>
                                                                <li><a href="#">Niño</a></li>
                                                                <li><a href="#">Diabetes</a></li>
                                                                <li><a href="#">Especializada</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#"></a>Vitaminas y Minerales</h4>
                                                            <ul>
                                                                <li><a href="#">Vitaminas</a></li>
                                                                <li><a href="#">Minerales</a></li>
                                                                <li><a href="#">Calcio y Huesos</a></li>
                                                                <li><a href="#">Belleza y Cuidado de la Piel</a></li>
                                                                <li><a href="#">Belleza Mujer</a></li>
                                                                <li><a href="#">Calcio y Osteoporosis</a></li>
                                                                <li><a href="#">Menopausia</a></li>
                                                                <li><a href="#">Vitaminas Prevención Refrío</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4><a href="#">Suplemento Nutricional</a></h4>
                                                            <ul>
                                                                <li><a href="#">Colágenos</a></li>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#">Suplementos Dietarios</a></h4>
                                                            <ul>
                                                                <li><a href="#">Calcio Mujer</a></li>
                                                                <li><a href="#">Menopausia</a></li>
                                                                <li><a href="#">Antidiarreicos</a></li>
                                                                <li><a href="#">Artritis y Artrosis</a></li>
                                                                <li><a href="#">Belleza Mujer</a></li>
                                                                <li><a href="#">Colon Irritable</a></li>
                                                                <li><a href="#">Edulcorantes</a></li>
                                                                <li><a href="#">Laxantes</a></li>
                                                                <li><a href="#">Otros Suplementos</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4><a href="#">Deporte</a></h4>
                                                            <ul>
                                                                <li><a href="#">Control de Peso</a></li>
                                                                <li><a href="#">Rehidratantes</a></li>
                                                                <li><a href="#">Suplemento Nutricional</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#">Alimentos Saludables</a></h4>
                                                            <ul>
                                                                <li><a href="#">Snacks Saludables</a></li>
                                                                <li><a href="#">Bebidas Funcionales</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </li>
                                            <li class="has-child homekit">
                                                <a href="#">
                                                    <div class="icon-large"><i class="ri-parent-line"></i></div>
                                                    Salud Sexual
                                                    <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                                </a>
                                                <div class="mega">
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4><a href="#">Alivio del Dolor</a></h4>
                                                            <ul>
                                                                <li><a href="#">Anestésicos Hombre</a></li>
                                                                <li><a href="#">Antiespasmódicos Hombre</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#">Anticoceptivos</a></h4>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#">Cuidado de Próstata</a></h4>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#">Disfunción Eréctil</a></h4>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#">Lubricantes e Higiene Mujer</a></h4>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#">Preservativos y Accesorios</a></h4>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4><a href="#">Test de Diagnósticos</a></h4>
                                                            <ul>
                                                                <li><a href="#">Test Embarazo y Ovulación</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#">Tratamiento Testosterona</a></h4>
                                                            <ul>
                                                                <li><a href="#">Androgenoterapia</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="has-child homekit">
                                                <a href="#">
                                                    <div class="icon-large"><i class="ri-eye-close-line"></i></div>
                                                    Belleza
                                                    <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                                </a>
                                                <div class="mega">
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4><a href="#">Cuidado Corporal</a></h4>
                                                            <ul>
                                                                <li><a href="#">Depilación</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#"></a>Cuidado del Cabello</h4>
                                                            <ul>
                                                                <li><a href="#">Shampoo y Acondicionador</a></li>
                                                                <li><a href="#">Cremas de Peinar, Geles y Ceras</a></li>
                                                                <li><a href="#">Trataminetos</a></li>
                                                                <li><a href="#">Tinturas</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4><a href="#">Maquillaje</a></h4>
                                                            <ul>
                                                                <li><a href="#">Ojos</a></li>
                                                                <li><a href="#">Rostro</a></li>
                                                                <li><a href="#">Uñas</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <h4><a href="#">Acessorios</a></h4>
                                                            <ul>
                                                                <li><a href="#">Cabello</a></li>
                                                                <li><a href="#">Accesorios Manicure Pedicure</a></li>
                                                                <li><a href="#">Maquillaje</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4><a href="#">Perfumes</a></h4>
                                                            <ul>
                                                                <li><a href="#">Packs (Estuchería)</a></li>
                                                            </ul>
                                                        </div>
                                                </div>
                                            </li>
                                        <li class="has-child homekit">
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-cup-line"></i></div>
                                                Alimentos y Bebidas
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <div class="mega">
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Alimentos Saludables</a></h4>
                                                        <ul>
                                                            <li><a href="#">Abarrotes</a></li>
                                                            <li><a href="#">Endulzantes</a></li>
                                                            <li><a href="#">Aguas y Té</a></li>
                                                            <li><a href="#">Snacks</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="#"></a>Bebidas</h4>
                                                        <ul>
                                                            <li><a href="#">Aguas</a></li>
                                                            <li><a href="#">Gaseosas</a></li>
                                                            <li><a href="#">Jugos</a></li>
                                                            <li><a href="#">Té</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4><a href="#">Snacks</a></h4>
                                                        <ul>
                                                            <li><a href="#">Snacks Salados</a></li>
                                                            <li><a href="#">Snacks Dulces</a></li>
                                                            <li><a href="#">Chocolates</a></li>
                                                            <li><a href="#">Chicles y Mentas</a></li>
                                                            <li><a href="#">Gomitas</a></li>
                                                            <li><a href="#">Helados</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="search-box">
                                <form action="" class="search">
                                    <span class="icon-large"><i class="ri-search-line"></i></span>
                                    <input type="search" placeholder="Busca tus productos">
                                    <button type="submit">Buscar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header -->

        <main>
            <div class="single-checkout">
                <div class="container">
                    <div class="wrapper">
                        <div class="checkout flexwrap">
                            <div class="item left styled">
                                <h1>Dirección De Envío</h1>
                                <form action="../php/gmailPurchaseSend.php" method="post">
                                    <p>
                                        <label for="email">Correo Electrónico <span></span></label>
                                        <input type="email" name="email" id="email" autocomplete="off" required>
                                    </p>
                                    <p>
                                        <label for="fname">Primer Nombre <span></span></label>
                                        <input type="text" id="fname" required>
                                    </p>
                                    <p>
                                        <label for="lname">Primer Apellido <span></span></label>
                                        <input type="text" id="lname" required>
                                    </p>
                                    <p>
                                        <label for="cname">Nombre Compañía <span></span></label>
                                        <input type="text" id="cname">
                                    </p>
                                    <p>
                                        <label for="adress">Dirección <span></span></label>
                                        <input type="text" id="adress" required>
                                    </p>
                                    <p>
                                        <label for="city">Ciudad <span></span></label>
                                        <input type="text" id="city" required>
                                    </p>
                                    <p>
                                        <label for="state">Estado/Provincia <span></span></label>
                                        <input type="text" id="state" required>
                                    </p>
                                    <p>
                                        <label for="postal">Codigo Postal <span></span></label>
                                        <input type="number" id="postal" required>
                                    </p>
                                    <p>
                                        <label for="country">País</label>
                                        <select name="country" id="country">
                                            <option value="1">Afganistan</option>
                                            <option value="2" selected="selected">Colombia</option>
                                            <option value="3">Peru</option>
                                            <option value="4">Venezuela</option>
                                            <option value="5">Brasil</option>
                                            <option value="6">Otro</option>
                                        </select>
                                    </p>
                                    <p>
                                        <label for="phone">Número Telefonico <span></span></label>
                                        <input type="number" id="phone" required>
                                    </p>
                                    <p>
                                        <label>Notas Pedido (Opcional)</label>
                                        <textarea name="npedido" cols="30" rows="10"></textarea>
                                    </p>
                                    <div class="primary-checkout">
                                    <button class="primary-button">Realizar Pedido</button>
                                </div>
                                </form>
                            </div>
                            <div class="item right " >
                                <h2>Resumen Pedido</h2>
                                <div class="summary-order is_sticky">
                                    <div class="summary-totals">
                                        <ul>
                                            <li>
                                                <span>Subtotal</span>
                                                <span id="subTotalCompra">$0</span>
                                            </li>
                                            <li>
                                                <span>Descuento</span>
                                                <span id="descuentoCompra">$0</span>
                                            </li>
                                            <li>
                                                <span>Envío</span>
                                                <span id="envioCompra">$0</span>
                                            </li>
                                            <li>
                                                <span>Total</span>
                                                <strong id="totalCompra">$0</strong>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul id="payProductsList" class="products mini">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <!-- main -->

        <footer>
            <div class="newsletter">
                <div class="container">
                    <div class="wrapper">
                        <div class="box">
                            <div class="content">
                                <h3>Ingresa a nuestras noticias.</h3>
                                <p>Ingresa tu correo electronico para recibir<strong> Ofertas especiales.</strong></p>
                            </div>
                            <form action="" class="search">
                                <span class="icon-large"><i class="ri-mail-line"></i></span>
                                <input type="mail" placeholder="Tu correo electronico" required>
                                <button type="submit">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- nesletter-->

            <div class="widgets">
                <div class="container">
                    <div class="wrapper">
                        <div class="flexwrap">
                            <div class="row">
                                <div class="item mini-links">
                                    <h4>Ayuda & Contacto</h4>
                                    <ul class="flexcol">
                                        <li><a href="#">Tu cuenta</a></li>
                                        <li><a href="#">Tus Ordenes</a></li>
                                        <li><a href="#">Calificacion de Envios</a></li>
                                        <li><a href="#">Regresos</a></li>
                                        <li><a href="#">Asistencia</a></li>
                                        <li><a href="#">Ayuda</a></li>
                                        <li><a href="#">Contactanos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item mini-links">
                                    <h4>Categoria de Productos</h4>
                                    <ul class="flexcol">
                                        <li><a href="#">Medicamentos</a></li>
                                        <li><a href="#">Dermocosméticos</a></li>
                                        <li><a href="#">Cuidado Personal</a></li>
                                        <li><a href="#">Bebe y Maternidad</a></li>
                                        <li><a href="#">Bienestar y Nutrición</a></li>
                                        <li><a href="#">Salud Sexual</a></li>
                                        <li><a href="#">Belleza</a></li>
                                        <li><a href="#">Alimentos y Bebidas</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item mini-links">
                                    <h4>Info Pagos</h4>
                                    <ul class="flexcol">
                                        <li><a href="#">Bussines Card</a></li>
                                        <li><a href="#">Shop Whit Points</a></li>
                                        <li><a href="#">Reload Your Balance</a></li>
                                        <li><a href="#">Paypal</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="item mini-links">
                                    <h4>Sobre Nosotros</h4>
                                    <ul class="flexcol">
                                        <li><a href="#">Info Compañia</a></li>
                                        <li><a href="#">Noticias</a></li>
                                        <li><a href="/view/somos.php">Inventores</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- widgets -->

            <div class="footer-info">
                <div class="container">
                    <div class="wrapper">
                        <div class="flexcol">
                            <div class="logo">
                                <a href="#"><span class="circle"></span>Hamburgo</a>
                            </div>
                            <div class="socials">
                                <ul class="flexitem">
                                    <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                    <li><a href="#"><i class="ri-facebook-line"></i></a></li>
                                    <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    <li><a href="#"><i class="ri-linkedin-line"></i></a></li>
                                    <li><a href="#"><i class="ri-youtube-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <p class="mini-text">Copyright 2023 © .Store. All right reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer -->

        <div class="menu-bottom desktop-hide">
            <div class="container">
                <div class="wrapper">
                    <nav>
                        <ul class="flexitem">
                            <li>
                                <a href="#">
                                    <i class="ri-bar-chart-line"></i>
                                    <span>Mas Buscado</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ri-user-6-line"></i>
                                    <span>Cuenta</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ri-heart-line"></i>
                                    <span>Lista de Deseados</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0"  class="t-search">
                                    <i class="ri-search-line"></i>
                                    <span>Buscar</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <i class="ri-shopping-cart-line"></i>
                                    <span>Carrito</span>
                                    <div class="fly-item">
                                        <span class="item-number">0</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- menu bottom -->

        <div class="search-bottom desktop-hide">
            <div class="container">
                <div class="wrapper">
                    
                    <form action="" class="search">
                        <a href="#" class="t-close search-close flexcenter"><i class="ri-close-line"></i></a>
                        <span class="icon-large"><i class="ri-search-line"></i></span>
                        <input type="search" placeholder="Busca tus productos" required>
                        <button type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- search bottom -->

        <div id="modal" class="modal">
            <div class="content flexcol">
                <div class="image object-cover">
                    <img src="../img/products/apparel4.jpg" alt="">
                </div>
                <h2>Get the latest deals and coupons</h2>
                <p class="mobile-hide">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est repellendus nobis obcaecati possimus, beatae modi.</p>
                <form action="" class="search">
                    <span class="icon-large"><i class="ri-mail-line"></i></span>
                    <input type="mail" placeholder="Your email address">
                    <button>Subscribe</button>
                </form>
                <a href="#" class="mini-text">Do not show me this again</a>
                <a href="#" class="t-close modalclose flexcenter">
                    <i class="ri-close-line"></i>
                </a>
            </div>
        </div>


        <div class="backtotop">
            <a href="#" class="flexcol">
                <i class="ri-arrow-up-line"></i>
                <span>Top</span>
            </a>
        </div>

        <div class="overlay"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.3.1/index.js"></script>
    <script src="../js/index.js"></script>
    <script src="../js/renderCart.js"></script>
    <script>
        renderCart();
    </script>
    <script src="../js/payCheckOutLogic.js"></script>
    <script>
        const FtoShow = '.filter';
        const Fpopup = document.querySelector(FtoShow);
        const Ftrigger = document.querySelector('.filter-trigger');
    </script>
</body>
</html>