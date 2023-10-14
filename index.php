<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburgo D.C</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link
    rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>

<body>
    <div id="page" class="site page-home">
        <aside class="site-off desktop-hide">
            <div class="off-canvas">
                <div class="canvas-head flexitem">
                    <div class="logo"><a href="index.php"><span class="circle"></span>Hamburgo</a></div>
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
                                    <li><a href="view/login.php">Iniciar sesión</a></li>
                                    <li><a href="#">Mi cuenta</a></li>
                                    <li><a href="#">Domicilios</a></li>
                                    <li><a href="#">COP<span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                                        <ul>
                                            <li class="current"><a href="#">COP</a></li>
                                            <li><a href="#">USD</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Español <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
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
                            <div class="logo"><a href="index.php"><span class="circle"></span>Hamburgo D.C</a></div>
                            <nav class="mobile-hide">
                                <ul class="flexitem second-links">
                                    <li><a href="index.php">Inicio</a></li>
                                    <li><a href="view/page-category.php">Tienda</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="right">
                            <ul class="flexitem second-links">
                                <li class="mobile-hide"><a href="#">
                                    <div class="icon-large"><i class="ri-heart-line"></i></div>
                                </a></li>
                                <li  class="iscart"><a href="#">
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
                                                <a href="view/checkout.php" class="primary-button">Pagar</a>
                                                <a href="view/cart.php" class="secondary-button">Ver Carrito</a>
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
                                        <!-- <li>
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-android-line"></i></div>
                                                Pet Supplies
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-basketball-line"></i></div>
                                                Sports
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="icon-large"><i class="ri-shield-star-line"></i></div>
                                                Best Seller
                                            </a>
                                        </li> -->
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

        <?php

        include("php/conexion.php");
include("php/productsOffets.php");
        
        $queryPO = "SELECT * FROM `productos` WHERE `offert_now` = 1";
            $resultadoProducts = mysqli_query($conex, $queryPO);
            $datosProd = array();

            while ($row = mysqli_fetch_assoc($resultadoProducts)) {
                $datosProd[] = $row;
            }
            
               // Codifica cada elemento en UTF-8
                foreach ($datosProd as &$fila) {
                    foreach ($fila as &$valor) {
                        $valor = utf8_encode($valor);
                    }
                }
                
                $jsonDatosProd = json_encode($datosProd);
if ($jsonDatosProd === false) {
                    echo 'Error en json_encode: ' . json_last_error_msg();
                } else {
                    echo '<script>';
                    echo 'let datosProdOfferts = ' . $jsonDatosProd . ';';
                    echo '</script>';
                }
                
        ?>

            <div class="slider">
                <div class="container">
                    <div class="wrapper">
                        <div class="myslider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="img/slider/slider0-1.jpg" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Cuidado de la piel</h4>
                                            <h2><span>Ve y compralo!</span><br><span>Cuidado personal</span></h2>
                                            <a href="#" class="primary-button">Comprar ahora</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="img/slider/slider1-1.jpg" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Promoción</h4>
                                            <h2><span>Consigue las nuevas ofertas!</span><br><span>Promociones</span></h2>
                                            <a href="#" class="primary-button">Conseguir ahora</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="img/slider/slider2-1.jpg" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Nuevo</h4>
                                            <h2><span> Nuevas vacunas!</span><br><span>Oferta para nuevo producto</span></h2>
                                            <a href="#" class="primary-button">Consiguir ahora</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="image object-cover">
                                            <img src="img/slider/slider3-1.jpg" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Salud sexual</h4>
                                            <h2><span>Ahorra 20%!</span><br><span>Rebaja en Anticoceptivo</span></h2>
                                            <a href="#" class="primary-button">Comprar ahora</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider -->

            <div class="brands">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="item">
                            <a href="#">
                                <img src="../img/brands/advil 0-1.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="../img/brands/dristan 1-1.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="../img/brands/corega 2-1.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="../img/brands/pfizer 3-1.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="../img/brands/abbott 4-1.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <img src="../img/brands/johnsons 5-1.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brands -->

            <div class="trending">
                <div class="container">
                    <div class="wrapper">
                        <div class="sectop flexitem">
                            <h2><span class="circle"></span><span>Productos en oferta</span></h2>
                        </div>
                        <div class="column">
                            <div class="flexwrap">
                                <div class="row products big">

                                    <div class="item">
                                        <div class="offer">
                                            <p>La oferta acaba en:</p>
                                            <ul class="flexcenter">
                                                <li><div id="dias">NA</div></li>
                                                <li><div id="horas">NA</div></li>
                                                <li><div id="minutos">NA</div></li>
                                                <li><div id="segundos">NA</div></li>
                                            </ul>
                                        </div>
                                        <div class="media">
                                            <div class="image">
                                                <a id="product_id_link" href="view/detailView.php?index=">
                                                    <img id="img_product_star" src="img/products/omega 3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span id="discount_product_star"></span></div>
                                        </div>
                                        <div class="content">
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span id="comments_star" class="mini-text"> </span>
                                            </div>
                                            <h3 class="main-links"><a id="nombre_producto_star" href="view/detailView.php?index="> </a></h3>
                                            <div class="price">
                                                <span id="precio_descuento_star" class="current"> </span>
                                               <span id="precio_normal_star" class="normal mini-text"> </span>
                                            </div>
                                            <div class="stock mini-text">
                                                <div class="qty">
                                                    <span>Stock:<strong id="producto_stock_star" class="qty-available"> </strong></span>
                                                   <span>Vendidos:<strong id="producto_sold_star" class="qty-sold"> </strong></span>

                                                </div>
                                                <div class="bar">
                                                    <div class="available"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div id="colum1_products_offert" class="row products mini">
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="view/detailView.php?index=3">
                                                    <img src="img/products/ENJUAGUE_BUCAL_PERIOGARD.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>32%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="view/detailView.php?index=3">Enjuague Bucal PerioGard Sin Alcohol Frasco X 250mL</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(2,548)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$129.99</span>
                                                <span class="normal mini-text">189.98</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>2975 Vendido</p>
                                                <p>Envio Gratis</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="view/detailView.php?index=4">
                                                    <img src="img/products/botiquin.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>25%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="view/detailView.php?index=4">Botiquin Rojo Paquete X 1 Nexcara</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(1,955)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$56.50</span>
                                                <span class="normal mini-text">676,50</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>2975 Vendido</p>
                                                <p>Envio Gratis</p>
                                                <p class="stock-danger">Stock: 7 left!</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="view/detailView.php?index=5">
                                                    <img src="img/products/calcio.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>32%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="view/detailView.php?index=5">Calcio + Vitamina D3 1200Mg + 400Ui Capsulas Blandas Frasco X 60</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(2,548)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$129.99</span>
                                                <span class="normal mini-text">189.98</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>2975 Vendido</p>
                                                <p>Envio Gratis</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="view/detailView.php?index=6">
                                                    <img src="img/products/corega.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>32%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="view/detailView.php?index=6">Corega Tabs Tabletas Efervescentes Caja X 30</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(2,548)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$129.99</span>
                                                <span class="normal mini-text">189.98</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>2975 Vendido</p>
                                                <p>Envio Gratis</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="colum2_products_offert" class="row products mini">
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="view/detailView.php?index=7">
                                                    <img src="img/products/crema dental.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>32%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="view/detailView.php?index=7">Crema Dental Sensitive Pro-Alivio Tubo X 75 mL</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(2,548)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$129.99</span>
                                                <span class="normal mini-text">189.98</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>2975 Vendido</p>
                                                <p>Envio Gratis</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="view/detailView.php?index=8">
                                                    <img src="img/products/desodorante mujer.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>32%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="view/detailView.php?index=8">Desodorante Mujer Invisible Balance Fco X 50G Clinical Protection</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(2,548)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$129.99</span>
                                                <span class="normal mini-text">189.98</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>2975 Vendido</p>
                                                <p>Envio Gratis</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="view/detailView.php?index=9">
                                                    <img src="img/products/naturcor.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>32%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="view/detailView.php?index=9">Colágeno Líquido Naturcol Soluble + Vitaminas Uva Frasco X 500Ml</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(2,548)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$129.99</span>
                                                <span class="normal mini-text">189.98</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>2975 Vendido</p>
                                                <p>Envio Gratis</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="view/detailView.php?index=10">
                                                    <img src="img/products/panuelos.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                    <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>32%</span></div>
                                        </div>
                                        <div class="content">
                                            <h3 class="main-links"><a href="view/detailView.php?index=10">Pañuelos Cuidado Gripal Paquete X 40</a></h3>
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(2,548)</span>
                                            </div>
                                            <div class="price">
                                                <span class="current">$129.99</span>
                                                <span class="normal mini-text">189.98</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>2975 Vendido</p>
                                                <p>Envio Gratis</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- trending -->

            <div class="features">
                <div class="container">
                    <div class="wrapper">
                        <div class="column">
                            <div class="sectop flexitem">
                                <h2><span class="circle"></span><span>Productos Destacados</span></h2>
                                <div class="second-links">
                                    <a href="view/page-category.php" class="view-all">Ver Todo<i class="ri-arrow-right-line"></i></a>
                                </div>
                            </div>
                            <div class="products main flexwrap">
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="view/detailView.php?index=11">
                                                <img src="img/products/tapabocas.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>25%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(1,955)</span>
                                        </div>
                                        <h3><a href="view/detailView.php?index=11">Tapabocas Desechables Negros Caja X 50</a></h3>
                                        <div class="price">
                                            <span class="current">$56.50</span>
                                            <span class="normal mini-text">676,50</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="medicamentos/Pesa Digital Corporal Caja X 1.php">
                                                <img src="img/products/pesa digital.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>32%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(994)</span>
                                        </div>
                                        <h3><a href="medicamentos/Pesa Digital Corporal Caja X 1.php">Pesa Digital Corporal Caja X 1</a></h3>
                                        <div class="price">
                                            <span class="current">$37.50</span>
                                            <span class="normal mini-text">40.50</span>
                                        </div>
                                        <!-- additional structure -->
                                        <div class="footer">
                                            <ul class="mini-text">
                                                <li>polyester, cotton</li>
                                                <li>pull on clousure</li>
                                                <li>fashion personality</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="medicamentos/Electrolit Fresa Solución Oral Frasco X 625mL.php">
                                                <img src="img/products/suero.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>32%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(2,548)</span>
                                        </div>
                                        <h3><a href="medicamentos/Electrolit Fresa Solución Oral Frasco X 625mL.php">Electrolit Fresa Solución Oral Frasco X 625mL</a></h3>
                                        <div class="price">
                                            <span class="current">$129.99</span>
                                            <span class="normal mini-text">189.98</span>
                                        </div>
                                        <div class="footer">
                                            <ul class="mini-text">
                                                <li>65% polyster, 35% cotton</li>
                                                <li>imported</li>
                                                <li>machines wash</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="medicamentos/Toallas Femeninas Nocturnas Kotex Econopack Paquete X 30.php">
                                                <img src="img/products/TOALLAS_FEMENINAS.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>32%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(2,548)</span>
                                        </div>
                                        <h3><a href="medicamentos/Toallas Femeninas Nocturnas Kotex Econopack Paquete X 30.php">Toallas Femeninas Nocturnas Kotex Econopack Paquete X 30</a></h3>
                                        <div class="price">
                                            <span class="current">$129.99</span>
                                            <span class="normal mini-text">189.98</span>
                                        </div>
                                        <div class="mini-text">
                                            <p>2975 Vendido</p>
                                            <p>Envio Gratis</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="medicamentos/Mieltertos Con Miel y Propóleo Sobre Individual X 4 Pastillas Masticables.php">
                                                <img src="img/products/MIELTERTOS.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>32%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(2,548)</span>
                                        </div>
                                        <h3><a href="medicamentos/Mieltertos Con Miel y Propóleo Sobre Individual X 4 Pastillas Masticables.php">Mieltertos Con Miel y Propóleo Sobre Individual X 4 Pastillas Masticables</a></h3>
                                        <div class="price">
                                            <span class="current">$129.99</span>
                                            <span class="normal mini-text">189.98</span>
                                        </div>
                                        <div class="mini-text">
                                            <p>2975 Vendido</p>
                                            <p>Envio Gratis</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="medicamentos/Termómetro Digital Caja X 1.php">
                                                <img src="img/products/TERMOMETRO_DIGITAL.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>32%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(2,548)</span>
                                        </div>
                                        <h3><a href="medicamentos/Termómetro Digital Caja X 1.php">Termómetro Digital Caja X 1</a></h3>
                                        <div class="price">
                                            <span class="current">$129.99</span>
                                            <span class="normal mini-text">189.98</span>
                                        </div>
                                        <div class="mini-text">
                                            <p>2975 Vendido</p>
                                            <p>Envio Gratis</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="medicamentos/Lubricante Ocular Splash Tears Solución Oftálmica Estéril Frasco X 15.php">
                                                <img src="img/products/LUBRICANTE-OCULAR.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>32%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(2,548)</span>
                                        </div>
                                        <h3><a href="medicamentos/Lubricante Ocular Splash Tears Solución Oftálmica Estéril Frasco X 15.php">Lubricante Ocular Splash Tears Solución Oftálmica Estéril Frasco X 15 mL</a></h3>
                                        <div class="price">
                                            <span class="current">$129.99</span>
                                            <span class="normal mini-text">189.98</span>
                                        </div>
                                        <div class="mini-text">
                                            <p>2975 Vendido</p>
                                            <p>Envio Gratis</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="media">
                                        <div class="thumbnail object-cover">
                                            <a href="medicamentos/Vitamina C + B2 + Zinc Easylife Tubo X 20 Tabletas Efervescente Sabor.php">
                                                <img src="img/products/163031_1-VITAMINA_C.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="hoverable">
                                            <ul>
                                                <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                                                <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                                <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="discount circle flexcenter"><span>32%</span></div>
                                    </div>
                                    <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(2,548)</span>
                                        </div>
                                        <h3><a href="medicamentos/Vitamina C + B2 + Zinc Easylife Tubo X 20 Tabletas Efervescente Sabor.php">Vitamina C + B2 + Zinc Easylife Tubo X 20 Tabletas Efervescente Sabor Limon</a></h3>
                                        <div class="price">
                                            <span class="current">$129.99</span>
                                            <span class="normal mini-text">189.98</span>
                                        </div>
                                        <div class="mini-text">
                                            <p>2975 Vendido</p>
                                            <p>Envio Gratis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- featured products -->

            <div class="banners">
                <div class="container">
                    <div class="wrapper">
                        <div class="column">
                            <div class="banner flexwrap">
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <img src="img/banner/banner1.jpg" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Increibles Descuentos!</h4>
                                            <h3><span>Consigue Increibles descuentos en</span><br>Living room chair</h3>
                                            <a href="#" class="primary-button">Compralo Ahora</a>
                                        </div>
                                        <a href="#" class="over-link"></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item get-gray">
                                        <div class="image">
                                            <img src="img/banner/banner2.jpg" alt="">
                                        </div>
                                        <div class="text-content flexcol">
                                            <h4>Increibles Descuentos!</h4>
                                            <h3><span>Descuento todo el día</span><br>Office outfit</h3>
                                            <a href="#" class="primary-button">Compralo ahora</a>
                                        </div>
                                        <a href="#" class="over-link"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- banners -->

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
                                <a href="#">
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

        <div class="overlay"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/renderCart.js"></script>

    <script>
        renderCart();
    </script>

    <script>
        //contador de promociones
const countDate = new Date('october 20, 2023 00:00:00').getTime();


function newYear(){
    const now = new Date().getTime();
    gap = countDate - now;

    const segundos = 1000;
    const minutos = segundos * 60;
    const horas = minutos * 60;
    const dias = horas * 24;

    const d = Math.floor(gap / (dias));
    const h = Math.floor((gap % (dias)) / (horas));
    const m = Math.floor((gap % (horas)) / (minutos));
    const s = Math.floor((gap % (minutos)) / (segundos)); 

    document.getElementById('dias').innerText = d;
    document.getElementById('horas').innerText = h;
    document.getElementById('minutos').innerText = m;
    document.getElementById('segundos').innerText = s;
}

setInterval(function(){
    newYear();
},1000)
    </script>
    
    <script>
    let id_producto_star = <?= json_encode($id_producto_star)?>;
    let producto_nombre_star = <?= json_encode($producto_nombre_star)?>;
    let producto_oferta_star = <?= json_encode($producto_oferta_star)?>;
    let producto_img_star = '<?= $producto_img_star?>';
    let producto_precio_star = <?= json_encode($producto_precio_star)?>;
    let producto_vendido_star = <?= json_encode($producto_vendido_star)?>;
    let producto_stock_star = <?= json_encode($producto_stock_star)?>;
    let producto_comentario_star = <?= json_encode($producto_comment_star)?>;
    console.log(datosProdOfferts);
    </script>

<script src="js/productStarLogic.js"></script>
<script src="js/productsOffertList.js"></script>
</body>
</html>