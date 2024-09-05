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

    <a href="#" class="logo"> <span>BE</span>FIT</a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="#home">Inicio</a>
        <a href="#about">Sobre nosotros</a>
        <a href="#features">Características</a>
        <a href="#pricing">Precios</a>
        <a href="#trainers">Entrenadores</a>
        <a href="#blogs">Blogs</a>
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
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione quia accusamus dicta inventore nobis obcaecati vero odio, id dolorum. Consequatur ex, aperiam deserunt nostrum perferendis illum unde ipsa? Consequatur, distinctio?</p>
        <div class="box-container">
            <div class="box">
                <h3><i class="fas fa-check"></i>cuerpo y mente</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>vida saludable</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>estrategias</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>ejercicio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, enim.</p>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                <!-- <a href="#" class="btn">leer más</a> -->
            </div>
        </div>

        <div class="box second">
            <div class="image">
                <img src="images/f-img-2.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-2.png" alt="">
                <h3>gimnasio para hombres</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                <!-- <a href="#" class="btn">leer más</a> -->
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/f-img-3.jpg" alt="">
            </div>
            <div class="content">
                <img src="images/icon-3.png" alt="">
                <h3>gimnasio para mujeres</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, atque.</p>
                <!-- <a href="#" class="btn">leer más</a> -->
            </div>
        </div>

    </div>

</section>

<!-- sección características termina -->

<!-- sección precios comienza  -->

<section class="pricing" id="pricing">

    <div class="information">
        <span>plan de precios</span>
        <h3>plan de precios accesible para ti</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam dolore excepturi ea suscipit fugiat cum quae, rerum optio mollitia! Tempora?</p>
        <p> <i class="fas fa-check"></i> ejercicio cardiovascular </p>
        <p> <i class="fas fa-check"></i> levantamiento de pesas </p>
        <p> <i class="fas fa-check"></i> planes de dieta </p>
        <p> <i class="fas fa-check"></i> resultados completos </p>
        <a href="#" class="btn">ver precios</a>
    </div>

    <div class="plan basic">
        <h3>plan básico</h3>
        <div class="price"><span></span>2000<span>/mes</span></div>
        <div class="list">
            <p> <i class="fas fa-check"></i> entrenamiento personal </p>
            <p> <i class="fas fa-check"></i> ejercicio cardiovascular </p>
            <p> <i class="fas fa-check"></i> levantamiento de pesas </p>
            <p> <i class="fas fa-check"></i> planes de dieta </p>
            <p> <i class="fas fa-check"></i> resultados completos </p>
        </div>
        <!-- <a href="#" class="btn">comenzar</a> -->
    </div>

    <div class="plan">
        <h3>plan premium</h3>
        <div class="price"><span></span>4000<span>/mes</span></div>
        <div class="list">
            <p> <i class="fas fa-check"></i> entrenamiento personal </p>
            <p> <i class="fas fa-check"></i> ejercicio cardiovascular </p>
            <p> <i class="fas fa-check"></i> levantamiento de pesas </p>
            <p> <i class="fas fa-check"></i> planes de dieta </p>
            <p> <i class="fas fa-check"></i> resultados completos </p>
        </div>
        <!-- <a href="#" class="btn">comenzar</a> -->
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
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-2.jpg" alt="">
            <div class="content">
                <span>entrenador experto</span>
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-3.jpg" alt="">
            <div class="content">
                <span>entrenador experto</span>
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="images/trainer-4.jpg" alt="">
            <div class="content">
                <span>entrenador experto</span>
                <h3>john deo</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
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
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat architecto nesciunt aut sapiente quis inventore quam vitae quod illum incidunt.</p>
    <a href="#" class="btn">obtener descuento</a>

</section>

<!-- sección banner termina -->

<!-- sección testimonios comienza  -->

<section class="review">

    <div class="information">
        <span>testimonios</span>
        <h3>lo que dicen nuestros clientes</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis voluptas praesentium asperiores fugiat, excepturi odit obcaecati a voluptatibus earum quisquam?</p>
        <!-- <a href="#" class="btn">leer más</a> -->
    </div>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>diseñador</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>diseñador</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>diseñador</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>diseñador</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- sección testimonios termina -->

<!-- sección blogs comienza  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span>publicaciones diarias</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">por usuario</a> <span>|</span> <a href="#">21 de mayo, 2021</a> </div>
                    <h3>El fitness no se trata de ser mejor que alguien más</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <!-- <a href="#" class="btn">leer más</a> -->
                </div>
            </div>
            
            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">por usuario</a> <span>|</span> <a href="#">21 de mayo, 2021</a> </div>
                    <h3>El fitness no se trata de ser mejor que alguien más</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <!-- <a href="#" class="btn">leer más</a> -->
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">por usuario</a> <span>|</span> <a href="#">21 de mayo, 2021</a> </div>
                    <h3>El fitness no se trata de ser mejor que alguien más</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <!-- <a href="#" class="btn">leer más</a> -->
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">por usuario</a> <span>|</span> <a href="#">21 de mayo, 2021</a> </div>
                    <h3>El fitness no se trata de ser mejor que alguien más</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <!-- <a href="#" class="btn">leer más</a> -->
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="images/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">por usuario</a> <span>|</span> <a href="#">21 de mayo, 2021</a> </div>
                    <h3>El fitness no se trata de ser mejor que alguien más</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <!-- <a href="#" class="btn">leer más</a> -->
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- sección blogs termina -->

<!-- sección pie de página comienza  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>enlaces rápidos</h3>
            <a class="links" href="#home">Inicio</a>
            <a class="links" href="#about">Sobre nosotros</a>
            <a class="links" href="#features">Características</a>
            <a class="links" href="#pricing">Precios</a>
            <a class="links" href="#trainers">Entrenadores</a>
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
            <p> <i class="fas fa-phone"></i> +111-222-3333 </p>
            <p> <i class="fas fa-envelope"></i> krishnakumar29021@gmail.com </p>
            <p> <i class="fas fa-map"></i> karnataka, india - 560035 </p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-pinterest"></a>
            </div>
        </div>

    </div>

</section>

<div class="credit"> creado por <span>mr. Krishna</span> | todos los derechos reservados! </div>

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
