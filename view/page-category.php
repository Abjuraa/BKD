<?php
include("../php/conexion.php");
// include("../php/requestProductsStore.php");
$queryM = "SELECT `id_secciones`, `nombre_seccion` FROM `secciones_products` WHERE 1";

$resultado = mysqli_query($conex, $queryM);
$datos = array(); // Inicializamos un array para almacenar los datos

while ($row = mysqli_fetch_assoc($resultado)) {
    $datos[] = $row;
}

$queryM = "SELECT * FROM `categoria_products`";

$resultado2 = mysqli_query($conex, $queryM);
$categorias = array();

while ($row = mysqli_fetch_assoc($resultado2)) {
    $categorias[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page-category</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link
    rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>    
    <script src="../js/productsWithFilter.js"></script>
    

</head>
<body>
    <div id="page" class="site page-category">
        <aside class="site-off desktop-hide">
            <div class="off-canvas">
                <div class="canvas-head flexitem">
                    <div class="logo"><a href="../index.php"><span class="circle"></span>Hamburgo</a></div>
                    <a href="../index.php" class="t-close flexcenter"><span class="ri-close-line"></span></a>
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
                                <!-- <li><a href="#">Blog</a></li> -->
                                <li><a href="#">Futuros productos</a></li>
                                <li><a href="#">Deseados</a></li>
                            </ul>
                        </div>
                        <div class="right">
                            <ul class="flexitem main-links">
                                    <li><a href="login.php">Iniciar sesión</a></li>
                                    <li><a href="#">Mi cuenta</a></li>
                                    <li><a href="#">Domicilios</a></li>
                                    <li><a href="#">COP<span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                                        <ul>
                                            <li class="current"><a href="#">COP</a></li>
                                            <li><a href="#">USD</a></li>
                                            <!-- <li><a href="#"></a></li>
                                            <li><a href="#"></a></li> -->
                                        </ul>
                                    </li>
                                    <li><a href="#">Español <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                                        <ul>
                                            <li class="current"><a href="#">Español</a></li>
                                            <li><a href="#">Ingles</a></li>
                                            <!-- <li><a href="#"></a></li>
                                            <li><a href="#"></a></li> -->
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
                            <div class="logo"><a href="../index.php"><span class="circle"></span>Hamburgo D.C</a></div>
                            <nav class="mobile-hide">
                                <ul class="flexitem second-links">
                                    <li><a href="../index.php">Inicio</a></li>
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
                                                <a href="checkout.php" class="primary-button">Pagar</a>
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
            <div class="single-category">
                <div class="container">
                    <div class="wrapper">
                        <div class="column">
                            <div class="holder">
                                <div class="row sidebar">
                                    <div class="filter">
                                        <div class="filter-block">
                                            <h4>Secciones</h4>
                                            <ul id="seccions"></ul>
                                        </div>

                                        <!-- <div class="filter-block">
                                            <h4>Categorias</h4>
                                            <ul id="categoria">
                                                
                                            </ul>
                                        </div> -->

                                        <div class="filter-block pricing">
                                            <h4>Precio</h4>
                                            <!-- <div class="byprice">
                                                <div class="range-track">
                                                    <input type="range" value="0" min="0" max="1000000" step="20000">
                                                </div>
                                                <div class="price-range">
                                                    <span class="price-form">$0</span>
                                                    <span class="price-to">$1'000.000</span>
                                                </div>
                                            </div> -->
                                            <div class="byprice">
                                                <div class="range-track">
                                                    <input type="range" id="minPrice" value="0" min="0" max="1000000" step="20000">
                                                    <input type="range" id="maxPrice" value="1000000" min="0" max="1000000" step="20000">
                                                </div>

                                                <div class="price-range">
                                                    <span class="price-form">$<span id="minPriceValue">0</span></span>
                                                    <span class="price-to">$<span id="maxPriceValue">1,000,000</span></span>
                                                </div>
                                            </div>
                                            <div id="button-searchStore" class="button-search">
                                                <button class="primary-button">Buscar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section">
                                    <div class="row">
                                        <div class="cat-head">
                                            <div class="breadcrumb">
                                                <ul class="flexitem">
                                                    <li><a href="../index.php">Inicio</a></li>
                                                    <li>Tienda</li>
                                                </ul>
                                            </div>
                                            <div class="page-title">
                                                <h1>Productos</h1>
                                            </div>
                                            <div class="cat-description">
                                                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nobis, voluptates veritatis incidunt vero cum eligendi sint fugiat numquam sapiente nesciunt rerum ad explicabo placeat facere. Repudiandae minus ducimus sed dolorum eveniet eius atque aliquid dolores optio obcaecati ipsam commodi, nulla non nesciunt soluta molestiae aliquam ipsa quibusdam impedit voluptatibus. Quisquam fugiat nihil asperiores neque molestias ab eaque aperiam id possimus corporis sapiente magni maiores exercitationem, vitae quod. Quia repellendus fugit praesentium id! In, illum?</p> -->
                                            </div>
                                            <div class="cat-navigation flexitem">
                                                <div class="item-filter desktop-hide">
                                                    <a href="#" class="filter-trigger label">
                                                        <i class="ri-menu-2-line ri-2x"></i>
                                                        <span>Filtro</span>
                                                    </a>
                                                </div>
                                                <!-- <div class="item-perpage mobile-hide">
                                                    <div id="infoSizePage" class="label">Mostrar 10 por página</div>
                                                    <div class="desktop-hide">10</div>
                                                </div> -->
                                                
                                                <!-- <div class="item-options">
                                                    <div class="label" id="dropdown-label">
                                                        <span class="mobile-hide">Mostrar 10 por página</span>
                                                        <div class="desktop-hide">10</div>
                                                        <i class="ri-arrow-down-s-line" id="dropdown-icon"></i>
                                                    </div>
                                                    <ul id="dropdown-list">
                                                        <li>Mostrar 10 por página</li>
                                                        <li>Mostrar 20 por página</li>
                                                        <li>Mostrar 30 por página</li>
                                                    </ul>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div id="productsListFilter" class="products main flexwrap">
                                    </div>
                                    <!-- <div class="load-more flexcenter">
                                        <a href="#" class="secondary-button">Más productos</a>
                                    </div> -->
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

        <div class="overlay"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.3.1/index.js"></script>
    <script src="../js/index.js"></script>
    <script src="../js/renderCart.js"></script>
    <script src="../js/inputRank.js"></script>

    <script>
        renderCart();
    </script>
    <script>
        const FtoShow = '.filter';
        const Fpopup = document.querySelector(FtoShow);
        const Ftrigger = document.querySelector('.filter-trigger');

        Ftrigger.addEventListener('click', () => {
            setTimeout(() => {
                if(!Fpopup.classList.contains('show')) {
                    Fpopup.classList.add('show')
                }
            }, 250)
        })

        //auto close by click outside .filter
        document.addEventListener('click', (e) => {
            const isClosest = e.target.closest(FtoShow);
            if(!isClosest && Fpopup.classList.contains('show')) {
                Fpopup.classList.remove('show')
            }
        })
    </script>
    
    <script>

    let secciones = <?= json_encode($datos)?>;
    let categoria = <?= json_encode($categorias)?>;
</script>
<script src="../js/getProductsListForFilters.js"></script>
<script src="../js/logicSelectInput.js"></script>
</body>
</html>
