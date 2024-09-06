<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Gimnasio</title>

    <!-- enlace a cdn de font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- enlace a archivo css personalizado -->
    <link rel="stylesheet" href="css/home.css">

</head>
<body>
    
<!-- sección de encabezado comienza      -->

<header class="header">

    <a href="#" class="logo"> <span>FITNES</span>STUDIO</a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">Inicio</a>
        <a href="#about">Sobre nosotros</a>
        <a href="#features">Características</a>
        <a href="#pricing">Precios</a>
        <a href="#trainers">Personal</a>
        <a href="login.php" class="btn1">Iniciar sesión</a>
    </nav>

</header>

<!-- sección de encabezado termina     -->

<!-- sección de inicio comienza  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/home-bg-1.jpg) no-repeat;">
                <div class="content">
                    <span>sé fuerte, mantente en forma</span>
                    <h3>Hazte más fuerte que tus excusas.</h3>
                    <!-- <a href="#" class="btn">comenzar</a> -->
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-bg-2.jpg) no-repeat;">
                <div class="content">
                    <span>sé fuerte, mantente en forma</span>
                    <h3>Hazte más fuerte que tus excusas.</h3>
                    <!-- <a href="#" class="btn">comenzar</a> -->
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-bg-3.jpg) no-repeat;">
                <div class="content">
                    <span>sé fuerte, mantente en forma</span>
                    <h3>Hazte más fuerte que tus excusas.</h3>
                    <!-- <a href="#" class="btn">comenzar</a> -->
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- sección de inicio termina -->

<!-- sección sobre nosotros comienza  -->

<section class="about" id="about">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <span>sobre nosotros</span>
        <h3 class="title">Cada día es una oportunidad para mejorar</h3>
        <p> Nuestra misión es simple: ayudarte a alcanzar tu mejor versión. Ofrecemos una amplia variedad de clases y entrenamientos personalizados, diseñados por nuestros entrenadores certificados, que no solo se enfocan en la fuerza física, sino también en la mejora continua de tus capacidades y tu bienestar integral.</p>
        <div class="box-container">
            <div class="box">
                <h3><i class="fas fa-check"></i>cuerpo y mente</h3>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>vida saludable</h3>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>estrategias</h3>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>ejercicio</h3>
            </div>
        </div>
        <!-- <a href="#" class="btn">leer más</a> -->
    </div>

</section>

<!-- sección sobre nosotros termina -->

<!-- sección características comienza  -->

<section class="features" id="features">

    <h1 class="heading"> <span>características del gimnasio</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/f-img-1.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-1.png" alt="">
                <h3>culturismo</h3>
            </div>
        </div>

        <div class="box second">
            <div class="image">
                <img src="images/f-img-2.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-2.png" alt="">
                <h3>gimnasio para hombres</h3>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/f-img-3.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-3.png" alt="">
                <h3>gimnasio para mujeres</h3>
            </div>
        </div>

    </div>

</section>

<!-- sección características termina -->

<!-- sección precios comienza  -->

<section class="pricing" id="pricing">

    <div class="information">
        <span>plan de precios</span>
        <div class="plan basic">
            <h3>plan básico</h3>
            <div class="price"><span></span>30<span>/mes</span></div>
            <div class="list">
                <p> <i class="fas fa-check"></i> Acceso ilimitado al gimnasio </p>
                <p> <i class="fas fa-check"></i> Horario libre </p>
            </div>
        </div>
    </div>

    

    <div class="plan">
        <h3>plan premium</h3>
        <div class="price"><span></span>60<span>/mes</span></div>
        <div class="list">
            <p> <i class="fas fa-check"></i> Acceso ilimitado al gimnasio </p>
            <p> <i class="fas fa-check"></i> Clases grupales incluidas (Yoga, Spinning, HIIT) </p>
            <p> <i class="fas fa-check"></i> 1 sesión de entrenamiento personal al mes </p>
        </div>
    </div>

    <div class="plan">
        <h3>plan vip</h3>
        <div class="price"><span></span>90<span>/mes</span></div>
        <div class="list">
            <p> <i class="fas fa-check"></i> Acceso ilimitado al gimnasio </p>
            <p> <i class="fas fa-check"></i> Clases grupales incluidas </p>
            <p> <i class="fas fa-check"></i> Entrenamiento personal ilimitado </p>
            <p> <i class="fas fa-check"></i> Acceso a zona exclusiva de recuperación (sauna y spa) </p>
            <p> <i class="fas fa-check"></i> resultados completos y guias con expertos </p>
        </div>
    </div>

</section>

<!-- sección precios termina -->

<!-- sección entrenadores comienza  -->

<section class="trainers" id="trainers">

    <h1 class="heading"> <span>entrenadores expertos</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/trainer-1.jpg" alt="">
            <div class="content">
                <span>entrenador experto</span>
                <h3>Alex García</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-2.jpg" alt="">
            <div class="content">
                <span>entrenador experto</span>
                <h3>Carla Sánchez</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-3.jpg" alt="">
            <div class="content">
                <span>entrenador experto</span>
                <h3>Luis Fernández</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-4.jpg" alt="">
            <div class="content">
                <span>entrenador experto</span>
                <h3>Sofía Torres</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- sección entrenadores termina -->

<!-- sección banner comienza  -->

<section class="banner">

    <span>únete a nosotros ahora</span>
    <h3>obtén hasta un 50% de descuento</h3>
    <p> No estás entrenando para un objetivo, estás entrenando para una vida mejor.</p>
    <a href="#" class="btn">obtener descuento</a>

</section>

<!-- sección banner termina -->

<!-- sección pie de página comienza  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>enlaces rápidos</h3>
            <a class="links" href="#home">Inicio</a>
            <a class="links" href="#about">Sobre nosotros</a>
            <a class="links" href="#features">Características</a>
            <a class="links" href="#pricing">Precios</a>
            <a class="links" href="#trainers">Personal</a>
            <a class="links" href="#blogs">Blogs</a>
        </div>

        <div class="box">
            <h3>horarios de apertura</h3>
            <p> lunes : <i> 7:00am - 10:30pm </i> </p>
            <p> martes : <i> 7:00am - 10:30pm </i> </p>
            <p> miércoles : <i> 7:00am - 10:30pm </i> </p>
            <p> viernes : <i> 7:00am - 10:30pm </i> </p>
            <p> sábado : <i> 7:00am - 10:30pm </i> </p>
            <p> domingo : <i> cerrado </i> </p>
        </div>

        <div class="box">
            <h3>contacto</h3>
            <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
            <p> <i class="fas fa-envelope"></i> gym5@gmail.com </p>
            <p> <i class="fas fa-map"></i> LATACUNGA, Ecuador  </p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<div class="credit"> Creado por <span>Grupo Vargas-Chimborazo-Quillupangui</span> | todos los derechos reservados! </div>

<!-- sección pie de página termina -->

<!-- <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> -->

<!-- enlace al archivo js personalizado -->
<script src="js/home.js"></script>
<script type="text/javascript">
    // Esta función se llama desde los menús emergentes para transferirse a
    // una página diferente. Ignorar si el valor devuelto es una cadena nula:
    function goPage (newURL) {

    // si la url está vacía, omite los divisores del menú y restablece la selección del menú al valor predeterminado
        if (newURL != "") {
  
            // si la url es "-", es esta página -- restablecer el menú:
            if (newURL == "-" ) {
            resetMenu();            
            } 
            // de lo contrario, enviar página a la URL designada            
            else {  
                document.location.href = newURL;
            }
        }
    }
    // restablece la selección del menú al entrar a esta página:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>  

</body>
</html>
