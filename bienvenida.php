<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor debes iniciar sesión");
                window.location="login.php";
            </script>
        ';
        session_destroy();
        die();
        
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conociendo Barranca</title>
    <link rel="stylesheet" href="bienvenida.css">
    <link rel="icon" href="Imagenes/gps.png">
    <script src="https://kit.fontawesome.com/9ec76534bd.js" crossorigin="anonymous"></script>
</head>
<body>    
    <nav>
        <img src="Imagenes/barca.png" alt="Logo Conociendo Barranca">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">|</a></li>
            <li><a href="Destinos/Destinos.php">Destinos</a></li>
            <li><a href="">|</a></li>
            <li><a href="">Contacto</a></li>
            <li><a href="">|</a></li>
            <li><a href="">Acerca de la Web</a></li>
            <li><a href="">|</a></li>
            <li><a href="php/cerrar_sesion.php">Cerrar Sesion</a></li>
        </ul>
        <div class="fondo">
            <input type="text" placeholder="Buscar">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </nav>
    <header>
        <div class="cnt-slider-img">
                <ul class="slider">
                <li id="slide1">
                    <img src="Imagenes/barranca.png" alt="">
                </li>
                <li id="slide2">
                    <img src="Imagenes/isla.png" alt="">
                </li>
                <li id="slide3">
                    <img src="Imagenes/playa.png" alt="">
                </li>
                </ul>
                <ul class="menu">
                    <li><a href="#slide1"></a></li>
                    <li><a href="#slide2"></a></li>
                    <li><a href="#slide3"></a></li>
                </ul>
        </div>
        <div class="historia">
            <p class="title-historia">
                HISTORIA
            </p>
            <p class="subtitle1-historia">
                Época preincaica
            </p>
            <p class="content-subtitle1-historia">
                Las primeras comunidades aldeanas y pobladores barranquinos se remontan al Período Incaico Superior 1,543 a.c. Se caracterizaban por dedicarse a las actividades tales como la horticultura, construcción de casas con terrazas y trabajaban en grupos en chacras. Sus instrumentos de trabajo que utilizaban era la cerámica, el sedentarismo y el tejido en algodón.
            </p>
            <p class="subtitle2-historia">
                Época Incaica
            </p>
            <p class="content-subtitle2-historia">
                Se remonta a la Cultura Chimú, ya que se extendía desde la Costa Norte de Piura, y hasta cerca de Lima por el Sur. En el valle del río Pativilca se construyó la Fortaleza de Paramonga.

                El Reino del gran Chimú contaba con un ejército organizado cuya misión era garantizar el orden dentro y fuera de su territorio, Estos pueblos pagaban tributos con oro, plata, cobre, piedras preciosas ya que los habitantes del Reino eran muy aficionados.
            </p>
            <p class="subtitle3-historia">
                Época de la Conquista
            </p>
            <p class="content-subtitle3-historia">
                Los Tres señoríos, Tributarios del Reino de Pachacamac no quisieron someterse al Imperio. Así fue como Barranca, Huaura y Chancay iniciaron una resistencia contra las tropas incaicas, La lucha duró dos años, murió mucha gente por ambos bandos, pero al fin el poder del Ejército Incaico consiguió la victoria.
            </p>
            <p class="subtitle4-historia">
                Época de la Independencia
            </p>
            <p class="content-subtitle4-historia">
                Según el viajero francés Julien Mellet, en la etapa previa a la Independencia Barranca era una gran aldea habitada por muchos tributarios de carácter sumiso y dócil que le permitía tener gran comercio de corderos y ganado vacuno, como también de carbón que se transportaba en gran cantidad, en mulas a la capital. Las haciendas de la época como la de Huayto, se dedicaban al cultivo de caña y elaboración de azúcar, así como maíz, frijoles, camotes; todo ello a través de una abundante mano de obra esclava.
            </p>
        </div>
        <div class="poblacion">
            <p class="title-poblacion">
                Población
            </p>
            <p class="content-poblacion">
                La ciudad de Barranca tiene una población mayoritariamente mestiza. Sin embargo, existen importantes colonias de minorías, producto de las migraciones. El crecimiento que ha tenido la ciudad en las últimas décadas, al igual que varias de las ciudades de la costa del departamento, ha sido en gran parte debido a los siguientes factores: al inicio del proceso nacional de urbanización de los años 60; al terremoto de Huaraz en 1970, gran causante de corrientes migratorias hacia las provincias del norte del departamento de Lima

                En 1813, Barranca contaba con 1150 habitantes distribuidas de la forma siguiente:
            </p>
            <ul class="list-distr-pob">
                <li>Españoles: 247</li>
                <li>Indios: 517</li>
                <li>Mestizos: 109</li>
                <li>Castas libres: 14</li>
                <li>Esclavos: 268</li>
            </ul>
            <p class="content2-poblacion">
                Blasco Núñez Vela de Trujillo se dirigió a Barranca, donde pudo leer en la pared de la estancia en que comía esta advertencia preñada de amenaza: “A quien viniere a echarme de mi casa y hacienda procuraré yo echarle del mundo”
            </p>
        </div>
    </header>
    <main>
        <div class="geografia">
            <div class="ubicacion">
                <p class="title-ubicacion">
                    Ubicación
                </p>
                <p class="content-ubicacion">
                    La ciudad se encuentra ubicada en una franja del centro noroccidental de la provincia de Barranca cerca al valle de río Pativilca. Su Plaza mayor se ubica 10 m s. n. m. Limita al norte con el distrito de Pativilca y Paramonga, al este con el departamento de Ancash, al sur con los distritos de Supe Puerto y Supe Pueblo, y al oeste con el océano Pacífico.
                </p>
            </div>
            <div class="hidrografia">
                <p class="title-hidrografia">
                    Hidrografía
                </p>
                <p class="content-hidrografia">
                    Barranca cuenta con el río Pativilca que pasa por la parte norte de la ciudad; sus aguas fueron utilizadas desde épocas antiguas por los habitantes de esta zona, quienes aprovecharon sus aguas para sus campos de cultivo; y sus aguas continúan siendo utilizadas en esta época. El río desemboca en el océano Pacífico justo en los límites entre los distritos de Pativilca y Barranca.

                    Cuenca: Océano Pacífico

                    Vertiente hidrográfica: Vertiente del   Océano Pacífico
                </p>
            </div>
            <div class="politica">
                <div class="crea-polit-distr">
                    <p class="title-dis">
                        Creación Política como Distrito
                    </p>
                    <p class="content-dis">
                        La creación política en calidad de distrito se realizó en el año 1823, siendo su primer alcalde Don Pio Davila, fue durante la lucha por la independencia, bajo la gesta emancipadora de José San Martín.

                        Años más tarde durante el Gobierno de Don Augusto B. Leguia (1909) se eleva a villa el pueblo de Barranca Capital del distrito mediante la Ley Nº1130.

                        Hasta 1,984 formaba parte de la provincia de Chancay (hoy provincia de Huaura), Barranca como distrito tuvo una duración de 161 años.
                    </p>
                </div>
                <div class="crea-polit-prov">
                    <p class="title-prov">
                        Creación Politica como Provincia
                    </p>
                    <p class="content-prov">
                        Barranca como Provincia fue creada el 5 de octubre de 1984 fue elevada a la categoría de Capital de Provincia según Decreto Ley 239.399, durante el gobierno del arquitecto Fernando Belaúnde Terry. Su primer alcalde fue el doctor Carlos Solórzano Herrera.
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>