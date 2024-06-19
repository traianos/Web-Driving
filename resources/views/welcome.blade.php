@extends('layout')
@section('title','DrivingSchool')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
       
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
        <scrip src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>


        
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        
        <style>
        .chart-container {
            position: relative;
            height: 400px;
            width: 600px;
            margin: auto;
        }
         </style>


    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="">Driving School</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu  
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="">Αρχικη</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#contact">Επικοινωνια</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('login') }}">Συνδεση</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('register') }}">Εγγραφη</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="#prices">ΤΙΜΕΣ</a></li>
                        <li class="nav-item">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary"> Κατηγοριες Διπλωμάtων </button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('car') }}">Δίπλωμα-Αυτοκίνητου</a></li>
                                    <li><a class="dropdown-item" href="{{ route('motor') }}">Δίπλωμα- Mοτοσυκλέτας</a></li>
                                    <li><a class="dropdown-item" href="{{ route('truck') }}">Δίπλωμα φορτηγού</a></li>
                                    <li><a class="dropdown-item" href="{{ route('bus') }}">Δίπλωμα Λεωφορείου</a></li>
                                    <li><a class="dropdown-item" href="{{ route('pei') }}">Δίπλωμα ΠΕΙ</a></li>
                                    <li><a class="dropdown-item" href="{{ route('adr') }}">Δίπλωμα ADR</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div style="text-align: center;">
                            <p id="text1" class="animated-text" style="font-size: 24px; color: blue; text-align: center;">
                                <strong style="color: red;">Δίπλωμα φορτηγού και ΠΕΙ</strong>
                            </p>
                            <img
                                decoding="async"
                                src="{{ asset('images/trucklogo.png') }}"
                                class="ls-img-layer ls-layer"
                                alt="Δίπλωμα φορτηγού και ΠΕΙ"
                                style="opacity: 1; filter: brightness(150%); width: 300px; height: auto; margin: auto;"
                            />
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div style="text-align: center;">
                            <p id="text2" class="animated-text" style="font-size: 24px; color: blue; text-align: center;">
                                <strong style="color: red;">Δίπλωμα Mοτοσυκλέτας </strong>
                            </p>
                            <strong><img src="{{ asset('images/motologo.png') }}" alt="New Logo" style="width: 400px; height: auto; display: block; margin: 0 auto;"></strong>
                           
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div style="text-align: center;">
                            <p id="text3" class="animated-text" style="font-size: 24px; color: blue; text-align: center;">
                                <strong style="color: red;">Δίπλωμα  Αυτοκίνητου</strong>
                            </p>
                            <strong><img src="{{ asset('images/carlogo.png') }}" alt="New Logo" style="width: 400px; height: auto; display: block; margin: 0 auto;"></strong>
                           
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div style="text-align: center;">
                            <p id="text4" class="animated-text" style="font-size: 24px; color: blue; text-align: center;">
                                <strong style="color: red;">Δίπλωμα  Λεωφορείου </strong>
                            </p>
                            <strong><img src="{{ asset('images/buslogo.png') }}" alt="New Logo" style="width: 400px; height: auto; display: block; margin: 0 auto;"></strong>
                           
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            
            <script>
                var carousel = document.getElementById('carouselExampleIndicators');
            
                carousel.addEventListener('slide.bs.carousel', function (event) {
                    var activeIndex = event.to;
                    var text1 = document.getElementById('text1');
                    var text2 = document.getElementById('text2');
                    var text3 = document.getElementById('text3');
                    var text4 = document.getElementById('text4');
            
                    switch (activeIndex) {
                        case 0:
                            text1.classList.add('animated');
                            text2.classList.remove('animated');
                            text3.classList.remove('animated');
                            text4.classList.remove('animated');
                            break;
                        case 1:
                            text1.classList.remove('animated');
                            text2.classList.add('animated');
                            text3.classList.remove('animated');
                            text4.classList.remove('animated');
                            break;
                        case 2:
                            text1.classList.remove('animated');
                            text2.classList.remove('animated');
                            text3.classList.add('animated');
                            text4.classList.remove('animated');
                            break;
                        case 3:
                            text1.classList.remove('animated');
                            text2.classList.remove('animated');
                            text3.classList.remove('animated');
                            text4.classList.add('animated');
                            break;
                        default:
                            text1.classList.remove('animated');
                            text2.classList.remove('animated');
                            text3.classList.remove('animated');
                            text4.classList.remove('animated');
                            break;
                    }
                });
            </script>
            
            <style>
                @keyframes slide {
                    0% { transform: translateX(-50px); opacity: 0; font-size: 24px; }
                    100% { transform: translateX(0); opacity: 1; font-size: 36px; }
                }
                .animated-text {
                    animation: none;
                }
                .animated {
                    animation: slide 1s ease-out;
                }
            </style>
            
                
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                     <!-- Prices Section -->

                            <!----- css for card----->
                            <style>
                                /* Add this CSS */
                                .card:hover {
                                    transform: scale(1.1);
                                    transition: transform 0.3s ease;
                                }
                            </style>
                            <!-- Prices Section -->
                            <section id="prices" class="py-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 mx-auto text-center">
                                            <h2 class="section-heading">Τιμες Δίπλωματων</h2>
                                            <p class="mb-5"></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card text-center bg-primary text-white">
                                                <div class="card-header">
                                                    <div>
                                                        <h4 class="card-title" style="font-family: Arial, sans-serif;">
                                                            <a href="{{ route('car') }}" style="color: white;">Δίπλωμα-Αυτοκίνητου</a>
                                                        </h4>
                                                    </div>
                                                </div>                                          
                                                <div class="card-body">
                                                    <h5 class="card-price">&euro;550</h5>
                                                    <p class="card-text"><ul>
                                                        <li>Περιλαμβάνει</li>
                                                        <li>25 Μαθήματα Υποχρεωτικά </li>
                                                        <li> Διάρκεια-Μαθημάτων 1,5 ώρας </li>
                                                    </ul></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card text-center bg-success text-white">
                                                <div class="card-header">
                                                    <div>
                                                        <h4 class="card-title" style="font-family: Arial, sans-serif;">
                                                            <a href="{{ route('truck') }}" style="color: white;">Δίπλωμα φορτηγού</a>
                                                        </h4>
                                                    </div>
                                                </div>                                                  
                                                <div class="card-body">
                                                    <h5 class="card-price">&euro;750</h5>
                                                    <p class="card-text">
                                                        <ul>
                                                            <li>Περιλαμβάνει</li>
                                                            <li>15 μαθήματα διάρκειας 45 λεπτών</li>
            
                                                        </ul>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card text-center bg-info text-white">
                                                <div>
                                                    <h4 class="card-title" style="font-family: Arial, sans-serif;">
                                                        <a href="{{ route('motor') }}" style="color: white;">Δίπλωμα-Mοτοσυκλέτας</a>
                                                    </h4>
                                                </div>                                    
                                                <div class="card-body">
                                                    <h5 class="card-price">&euro;300</h5>
                                                    <p class="card-text">
                                                        <ul>
                                                            <li>Περιλαμβάνει</li>
                                                            <li>15 μαθήματα διάρκειας 45 λεπτών</li>
                                                        </ul>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card text-center bg-info text-white">
                                                <div class="card-header">
                                                    <h4><a href="{{ route('bus') }}" style="color: white;">Δίπλωμα-Λεωφορείου </a></h4>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-price">&euro;300</h5>
                                                    <p class="card-text">
                                                        <ul>
                                                            <li>Περιλαμβάνει</li>
                                                            <li>7 μαθήματα διάρκειας 45 λεπτών</li>
                                                        </ul>
                                                    </p>
                                                </div>                                  
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card text-center bg-info text-white">
                                                <div class="card-header">
                                                  <h4>  <a href="{{ route('pei') }}" style="color: white;">Δίπλωμα-ΠΕΙ</a></h4>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-price">&euro;600</h5>
                                                    <p class="card-text">
                                                        <ul>
                                                            <li>Περιλαμβάνει</li>
                                                            <li>7 μαθήματα διάρκειας 45 λεπτών</li>
                                                        </ul>
                                                    </p>
                                                </div>  
                                                                                   
                                              
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card text-center bg-info text-white">
                                                <div class="card-header">
                                                   <h4> <a href="{{ route('taji') }}" style="color: white;">Δίπλωμα-ΤΑΞΙ</a></h4>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-price">&euro;500</h5>
                                                    <p class="card-text">
                                                        <ul>
                                                            <li>Περιλαμβάνει</li>
                                                            <li>7 μαθήματα διάρκειας 45 λεπτών</li>
                                                        </ul>
                                                    </p>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                   
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                   <!-- Contact Section -->
                    <section id="contact" class="py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 mx-auto text-center">
                                    <h2 class="section-heading">Επικοινωνια</h2>
                                    <p class="mb-5"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 mx-auto text-center">
                                    <div class="contact-info">
                                        <i class="fas fa-phone fa-3x mb-3"></i>
                                        <p>+30-123-456789</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mx-auto text-center">
                                    <div class="contact-info">
                                        <i class="fas fa-map-marker-alt fa-3x mb-3"></i>
                                        <p>Aristotelous Square, Thessaloniki, Greece</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mx-auto text-center">
                                    <div class="contact-info">
                                        <i class="fas fa-envelope fa-3x mb-3"></i>
                                        <p>drivingschool@gmail.com</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 mx-auto text-center text-end">
                                    <div class="contact-info">
                                        <i class="fas fa-clock fa-3x mb-3"></i>
                                        <p class="schedule">
                                            <strong>ΩΡΑΡΙΟ</strong><br>
                                            Δευ-Παρ: 09:00-21:00<br>
                                            Σαβ-Κυρ: κλειστά
                                        </p>
                                    </div>
                                </div>
                                
                                  
                            </div>
                            
                        </div>
                        <!-- Map Begin -->
                       <div class="map">
                        
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3062.760804621955!2d22.948647514247524!3d40.63232827934192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a83944d9e0d7f1%3A0x4df2063eb8339e9c!2sAristotelous%20Square!5e0!3m2!1sen!2sbd!4v1641393136925!5m2!1sen!2sbd"
                            height="400" width="600" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <div class="map-inside">
                            
                            
                        </div>
                    </section>
                    <section id="charts" class="py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 mx-auto text-center">
                                    <h2 class="section-heading">ΟΙ ΕΠΙΤΥΧΙΕΣ ΜΑΣ</h2>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <div class="chart-container">
                                        <canvas id="myChart">ΟΙ ΕΠΙΤΥΧΙΕΣ ΜΑΣ</canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <script>
                        // JavaScript to render the chart
                        document.addEventListener('DOMContentLoaded', (event) => {
                            var ctx = document.getElementById('myChart').getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['ΔΙΠΛΩΜΑ ΜΟΤΟΣΥΚΛΕΤΑΣ' , 'Δίπλωμα-Αυτοκίνητου', 'Δίπλωμα-Λεοφορειο', 'Δίπλωμα-Φορτηγο', ],
                                    datasets: [{
                                        label: '%',
                                        data: [60, 58, 50,80],
                                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                        borderColor: 'rgba(75, 192, 192, 1)',
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    responsive: true,
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    },
                                    plugins: {
                                        datalabels: {
                                            anchor: 'end',
                                            align: 'top',
                                            formatter: (value) => value,
                                            font: {
                                                weight: 'bold'
                                            }
                                        }
                                    }
                                }
                            });
                    
                            // Add labels above each bar
                            Chart.register(ChartDataLabels);
                        });
                    </script>

                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <style>
                    .newsletter {
                    padding: 80px 0;
                    background: #19beda;
                    }

                    .newsletter .content {
                    max-width: 650px;
                    margin: 0 auto;
                    text-align: center;
                    position: relative;
                    z-index: 2; }
                    .newsletter .content h2 {
                    color: #243c4f;
                    margin-bottom: 40px; }
                    .newsletter .content .form-control {
                    height: 50px;
                    border-color: #ffffff;
                    border-radius:0;
                    }
                    .newsletter .content.form-control:focus {
                    box-shadow: none;
                    border: 2px solid #243c4f;
                    }
                    .newsletter .content .btn {
                    min-height: 50px; 
                    border-radius:0;
                    background: #243c4f;
                    color: #fff;
                    font-weight:600;
                    }
                    </style>




                    
                    <section class="newsletter">
                        <div class="container">
                        <div class="row">
                        <div class="col-sm-12">
                            <div class="content">
                                <h2>Κάνε εγγραφή στο Newsletters μας</h2>
                            <div class="input-group">
                                 <input type="email" class="form-control form-control-user" placeholder="Enter your email">
                                 <span class="input-group-btn">
                                 <button class="btn btn-primary" type="submit">Subscribe Now</button>
                                 </span>
                                  </div>
                            </div>
                        </div>
                        </div>
                        </div>
                    </section>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                   
                </div>
            </div>
        </div>
<!-- Footer-->
<footer class="border-top" style="background-color: rgba(0, 0, 0, 0.397); padding: 20px 0;">
    <div class="container px-4 px-lg-5">
        <div class="footer-row">
            <section class="footer-section">
                <div class="footer-content">
                    <div class="footer-about">
                        <div class="footer-about-logo">
                            <img src="{{ asset('images/driving.png') }}" alt="Driving School Logo" style="width: 300px; height: auto;">
                        </div>
                        <ul>
                            <li>Phone: +30-123-456789</li>
                            <li>Add: Aristotelous Square, Thessaloniki, Greece</li>
                            <li>Email: Drivingschool@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="footer-section">
                <div class="footer-content">
                    <div class="footer-text">
                        <h5 class="mb-1">ΣΧΟΛΗ ΟΔΗΓΩΝ</h5>
                        <p>Στη σχολή οδηγών μας θα βρείτε όλα τα διπλώματα οδήγησης, ΠΕΙ και Μεταφορά Επικίνδυνων φορτίων.</p>
                    </div>
                </div>
            </section>
            <section class="footer-section">
                <div class="footer-content">
                    <div class="footer-follow">
                        <h5 class="mb-3">Follow Us:</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#!"><i class="fab fa-twitter fa-lg"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="fab fa-facebook-f fa-lg"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="fab fa-google fa-lg"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <div class="footer-row justify-content-center">
            <section class="footer-section">
                <div class="footer-content">
                    <div class="footer-opyright">
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Drivingschool</div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</footer>

<style>
    .footer-row {
    display: flex;
    flex-wrap: wrap;
}

.footer-section {
    flex: 1;
}

.footer-content {
    padding: 20px;
    border-right: 1px solid #ccc; /* Add border between sections */
}

.footer-content:last-child {
    border-right: none; /* Remove border from last section */
}

.footer-text {
    text-align: center;
}

.footer-follow {
    text-align: right;
}

.footer-row.justify-content-center {
    justify-content: center;
}

</style>



<!---end footer------->



        <!-- Bootstrap core JS-->
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
