<?php 
    require 'Noticia.php';
    $news = Noticia::loadNews();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Larvas, nauplios, microalgas, el mejor camaron del mundo,">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
    <title>Calinauplio</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


    <!-- Start: Preloader
    ============================= -->

    <div class="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <!-- End: Preloader
    ============================= -->

    <!-- Start: Header Top
    ============================= -->
    <section id="header-top">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-9 col-md-12 text-lg-left mb-2 mb-lg-0">
                    <ul class="header-info d-inline-block">
                        <li><a href="https://api.whatsapp.com/send?phone=593997829038"><i class="fas fa-phone"></i>099 782 9038</a></li>
                        <li><a href="contact-us.html"><i class="fas fa-envelope"></i>ventas@calinauplio.com</a></li>
                        <li><a href="contact-us.html"><i class="fas fa-question"></i>Consúltanos</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 text-center text-lg-right mb-lg-0 mb-1">
                    <ul class="header-social d-inline-block">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>                    
                </div>
            </div>
        </div>
    </section>
    <!-- End: Header Top
    ============================= -->
    <!-- Start: Navigation
    ============================= -->
    <section class="navbar-wrapper">
        <div class="navbar-area sticky-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-6">
                        <div class="logo main">
                            <a href="index.html"><img class="responsive" src="assets/img/logos.png" alt="Startkit"></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-10 d-none d-lg-block text-right">
                        <nav class="main-menu">
                            <ul>
                                <li>
                                    <a href="index.html">Inicio</a>
                                </li>
                                <li>
                                    <a href="about-us.html">Somos</a>
                                </li>
                                <li class="c-dropdowns">
                                    <a href="">Empresas</a>
                                    <ul class="cr-dropdown-menu">
                                        <li>
                                            <a href="calinauplio.html">Calinauplio</a>
                                        </li>
                                        <li>
                                            <a href="aquaindesa.html">Aquaindesa</a>
                                        </li>
                                        <li>
                                            <a href="crisanticlub.html">Crisanticlub</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                
                                <li class="active">
                                    <a href="blog-left-sidebar.html">Noticias</a>
                                    
                                </li>

                                <li><a href="contact-us.html">Contacto</a></li>
                            </ul>
                        </nav>
                        <ul class="header-right-bar d-lg-inline-block d-none">
                            <li>
                                <a class="quote-btn boxed-btn" href="contact-us.html">Consúltanos!</a>
                            </li>
                        </ul>
                    </div>
                  
                </div>
            </div>
            <!-- Start Mobile Menu -->
            <div class="mobile-menu-area d-lg-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav class="mobile-menu-active">
                                    <ul>
                                        <li>
                                            <a href="index.html">Inicio</a>
                                        </li>
                                        <li>
                                            <a href="about-us.html">Somos</a>
                                        </li>
                                        <li class="c-dropdowns">
                                            <a href="">Empresas</a>
                                            <ul class="cr-dropdown-menu">
                                                <li>
                                                    <a href="calinauplio.html">Calinauplio</a>
                                                </li>
                                                <li>
                                                    <a href="aquaindesa.html">Aquaindesa</a>
                                                </li>
                                                <li>
                                                    <a href="crisanticlub.html">Crisanticlub</a>
                                                </li>
                                            
                                            </ul>
                                        </li>
                                  
                                        
                                        <li class="active">
                                            <a href="blog-left-sidebar.html">Noticias</a>
                                           
                                        </li>

                                        <li><a href="contact-us.html">Contacto</a></li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Mobile Menu -->
        </div>        
    </section>
    <!-- End: Navigation
    ============================= -->

    <!-- Start: Breadcrumb Area
    ============================= -->

    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Noticias</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="blog.html">Nuestro Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Breadcrumb Area
    ============================= -->

    <!-- Start: Content Section
    ============================= -->
    <section id="blog-content" class="section-padding-top">
        <div class="container">

            <div class="row">
                <!-- Blog Content -->
                <div class="col-lg-8 order-1 order-lg-2 col-md-12 mb-5 mb-lg-0">
                    <?php 
                        for($i = 0; $i < count($news); $i++){
                            $id = $news[$i]->id;
                            $title = $news[$i]->title;
                            $brief = $news[$i]->brief;
                            $imageName = $news[$i]->img;
                            
                            echo "<article class='blog-post'>
                                    <figure class='post-thumb'>
                                        <img src='uploads/{$imageName}' alt=''>
                                        <figcaption>
                                            <div class='inner-text'>
                                                <img src='assets/img/author01.png' alt=''>
                                            </div>
                                        </figcaption>
                                        <ul class='meta-info list-inline'>
                                            <li class='posted-by'><a href='#'><i class='fas fa-user'></i>Lily Simith</a></li>
                                            <li class='tags'><a href='#'><i class='fas fa-folder-open'></i>Latest Post</a></li>
                                            <li class='tags'><a href='#'><i class='fas fa-newspaper'></i>Order, Section</a></li>
                                        </ul>
                                    </figure>
                                    <div class='post-content'>
                                        <h4 class='post-title'><a href='blog-single.php?id={$id}'>{$title}</a></h4>
                                        {$brief}
                                        <a href='blog-single.php?id={$id}' class='boxed-btn'>Leer más <i class='fas fa-arrow-right'></i></a>
                                    </div>
                                </article>";
                        }
                    ?>
                    <article class="blog-post">
                        <figure class="post-thumb">
                            <img src="assets/img/blog-sidebar/blog-post-01.jpg" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <img src="assets/img/author01.png" alt="">
                                </div>
                            </figcaption>
                            
                        </figure>
                        <div class="post-content">
                            <h4 class="post-title"><a href="blog.html">5 Beneficios de nuestras algas.</a></h4>
                            <p class="content">
                                
                            </p>
                            <a href="blog.html" class="boxed-btn">Leer más <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    <article class="blog-post">
                        <figure class="post-thumb">
                            <img src="assets/img/blog-sidebar/blog-post-02.jpg" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <img src="assets/img/author01.png" alt="">
                                </div>
                            </figcaption>
                            
                        </figure>
                        <div class="post-content">
                            <h4 class="post-title"><a href="blog.html">Beneficios del uso de una buena larva.</a></h4>
                            <p class="content">
                               
                            </p>
                            <a href="blog.html" class="boxed-btn">Leer más <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>

                    
                    <nav class="pagination" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item prev">
                                <a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item next">
                                <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 col-md-12 order-2 order-lg-1">
                    <section class="sidebar">
                        <aside class="widget widget-calender">
                            <div class="widget-title">
                                <ul>
                                    <li>Mayo 2018</li>
                                    <li class="plus"><a href="#"><i class="fas fa-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="full-calender">
                                <ul class="weekdays">
                                    <li>Mo</li>
                                    <li>Tu</li>
                                    <li>We</li>
                                    <li>Th</li>
                                    <li>Fr</li>
                                    <li>Sa</li>
                                    <li>Su</li>
                                </ul>
                                <ul class="days">
                                
                                    <li class="disable">30</li>
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <li>6</li>
                                    <li>7</li>
                                    <li><a href="#"><span class="active">8</span><a></li>
                                    <li>9</li>
                                    <li>10</li>
                                    <li>11</li>
                                    <li>12</li>
                                    <li>13</li>
                                    <li>14</li>
                                    <li>15</li>
                                    <li>16</li>
                                    <li>17</li>
                                    <li>18</li>
                                    <li>19</li>
                                    <li>20</li>
                                    <li>21</li>
                                    <li>22</li>
                                    <li>23</li>
                                    <li>24</li>
                                    <li>25</li>
                                    <li>26</li>
                                    <li>27</li>
                                    <li>28</li>
                                    <li>29</li>
                                    <li>30</li>
                                    <li>31</li>
                                </ul>
                            </div>
                        </aside>

                        <aside class="widget widget-enter-mail">
                            <h3>Consúltanos</h3>
                            <p>Deseas conocer más acerca de nuestros productos, escríbenos</p>
                            <form method=POST action="mailto:ventas@calinauplio.com">
                                <input type="email" placeholder="Ingrese su correo">
                                <button class="boxed-btn" type="submit">Enviar mail</button>
                            </form>                            
                        </aside>

                        
                    </section>
                </div>
            </div>

        </div>
    </section>
    <!-- End: Content Section
    ============================= -->

        <!-- Start: Footer Sidebar
    ============================= -->
    <footer id="footer-widgets">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-4">
                    <aside class="widget widget_about">
                        <div class="footer-logo"><img src="assets/img/logos.png" alt="logo"></div>
                        <p>SOMOS UN GRUPO DE EMPRENDEDORES ECUATORIANOS, que juntos decidimos crear empresas acuícolas que garantizan la sostenibilidad y calidad de nuestros productos usando estrategias de producción con responsabilidad social y ambiental.</p>
                        <ul class="widget-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        
                    </aside>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-lg-0 mb-4">
                    <aside class="widget widget_links">
                        <h4 class="widget-title">Nuestro sitio</h4>
                        <ul>
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Somos</a></li>
                            <li><a href="#">Aquaindesa</a></li>
                            <li><a href="calinauplio.html">Calinauplio</a></li>
                            <li><a href="#">Crisanticlub</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-4">
                    <aside class="widget widget_links">
                        <h4 class="widget-title">Sitios de interés</h4>
                        <ul>
                            <li><a href="#">Fundación Calisur</a></li>
                            <li><a href="#">Ministerio de Acuacultura</a></li>
                            <li><a href="#">Cámara de acuacultura</a></li>
                            <li><a href="#">Nicovita</a></li>
                            <li><a href="#">Agripac</a></li>
                             
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <aside class="widget widget_contact">
                        <h4 class="widget-title">Información de contacto</h4>
                        <ul>
                            <li><i class="fas fa-map-marker"></i>Of. Guayaquil: URB San Felipe MZ 130 VILLA 15 </li>
                            <li><i class="fas fa-map-marker"></i>Of. Balao: KM 1 vía Puerto Balao</li>
                            <li><i class="fas fa-map-marker"></i>Of. Riochico: Club Crisanti Comuna Río chico</li>
                            <li><i class="fas fa-phone"></i>042632496 -046010687</li>
                            <li><i class="fas fa-phone"></i>0990944594 - 0999402636</li>
                            <li><i class="fas fa-envelope"></i>ventas@calinauplio.com</li>
                        </ul>
                        <form method=POST action="mailto:ventas@calinauplio.com">
                            <input type="email" placeholder="Enter your email">
                            <button class="subscribe-btn boxed-btn" type="submit">Súscribete</button>
                        </form>
                    </aside>
                </div>
            </div>

        </div>
    </footer>
    <!-- End: Footer Sidebar
    ============================= -->

    <!-- Start: Footer Copyright
    ============================= -->

    <section id="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 text-lg-left text-center mb-lg-0 mb-3 copyright-text"><p>Copyrights © 2018 All Rights Reserved, Powered by <a href="#">Calinauplio</a>.</p></div>
               
            </div>
        </div>
    </section>

    <!-- End: Footer Copyright
     ============================= -->

    <!-- Scripts -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.shuffle.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>

    <!-- Map Script -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqoWGSQYygV-G1P5tVrj-dM2rVHR5wOGY"></script>
    <script src="assets/js/map-script.js"></script> -->

    <!-- Custom Script -->
    <script src="assets/js/custom.js"></script>
</body>

</html>