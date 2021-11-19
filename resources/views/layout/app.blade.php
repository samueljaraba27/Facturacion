 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
     <title>PlainAdmin Demo | Bootstrap 5 Admin Template</title>

     <!-- ========== All CSS files linkup ========= -->
     <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
     <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}" />
     <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}" />
     <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.css') }}" />
     <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.css') }}" />
     <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
 </head>

 <body>
     <!-- ======== sidebar-nav start =========== -->
     <aside class="sidebar-nav-wrapper">
         <div class="navbar-logo">
             <a href="index.html">
                 <img src="assets/images/logo/logo.svg" alt="logo" />
             </a>
         </div>
         <nav class="sidebar-nav">
             <ul>
                 <li class="nav-item">
                     <a href="/home">
                         <span class="icon">
                             <svg width="22" height="22" viewBox="0 0 22 22">
                                 <path
                                     d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
                             </svg>
                         </span>
                         <span class="text">Escritorio</span>
                     </a>
                 </li>
                 <li class="nav-item nav-item-has-children">
                     <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_2"
                         aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="icon">
                             <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                 <path fill="currentColor"
                                     d="M14.8 8L16 9.2L9.2 16L8 14.8L14.8 8M4 4H20C21.11 4 22 4.89 22 6V10C20.9 10 20 10.9 20 12C20 13.11 20.9 14 22 14V18C22 19.11 21.11 20 20 20H4C2.9 20 2 19.11 2 18V14C3.11 14 4 13.11 4 12C4 10.9 3.11 10 2 10V6C2 4.89 2.9 4 4 4M4 6V8.54C5.24 9.26 6 10.57 6 12C6 13.43 5.24 14.75 4 15.46V18H20V15.46C18.76 14.75 18 13.43 18 12C18 10.57 18.76 9.26 20 8.54V6H4M9.5 8C10.33 8 11 8.67 11 9.5C11 10.33 10.33 11 9.5 11C8.67 11 8 10.33 8 9.5C8 8.67 8.67 8 9.5 8M14.5 13C15.33 13 16 13.67 16 14.5C16 15.33 15.33 16 14.5 16C13.67 16 13 15.33 13 14.5C13 13.67 13.67 13 14.5 13Z" />
                             </svg>
                         </span>

                         <span class="text"> Facturación</span>
                     </a>
                     <ul id="ddmenu_2" class="collapse dropdown-nav">
                         <li>
                             <a href="facturacion/">Nueva Factura </a>
                         </li>
                         <li>
                             <a href="blank-page.html"> Todas </a>
                         </li>
                     </ul>
                 </li>
                 {{-- <li class="nav-item">
                     <a href="invoice.html">
                         <span class="icon">
                             <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                 <path fill="currentColor"
                                     d="M6.1,10L4,18V8H21A2,2 0 0,0 19,6H12L10,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H19C19.9,20 20.7,19.4 20.9,18.5L23.2,10H6.1M19,18H6L7.6,12H20.6L19,18Z" />
                             </svg>
                         </span>
                         <span class="text">Archivos</span>
                     </a>
                 </li> --}}
                 <li class="nav-item nav-item-has-children">
                     <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_3"
                         aria-controls="ddmenu_3" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="icon">
                             <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                 <path fill="currentColor"
                                     d="M6.1,10L4,18V8H21A2,2 0 0,0 19,6H12L10,4H4A2,2 0 0,0 2,6V18A2,2 0 0,0 4,20H19C19.9,20 20.7,19.4 20.9,18.5L23.2,10H6.1M19,18H6L7.6,12H20.6L19,18Z" />
                             </svg>
                         </span>
                         <span class="text">Archivos</span>
                     </a>
                     <ul id="ddmenu_3" class="collapse dropdown-nav">
                         <li>
                             <a href="signin.html"> Referencia</a>
                         </li>
                         <li>
                             <a href="signup.html"> Terceros </a>
                         </li>
                     </ul>
                 </li>
                 <span class="divider">
                     <hr />
                 </span>
                 <li class="nav-item nav-item-has-children">
                     <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_4"
                         aria-controls="ddmenu_4" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="icon">
                             <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                 <path fill="currentColor"
                                     d="M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10M10,22C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.79,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,13L21.54,14.63C21.73,14.78 21.79,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.04 19.05,18.95L16.56,17.95C16.04,18.34 15.5,18.68 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10M11.25,4L10.88,6.61C9.68,6.86 8.62,7.5 7.85,8.39L5.44,7.35L4.69,8.65L6.8,10.2C6.4,11.37 6.4,12.64 6.8,13.8L4.68,15.36L5.43,16.66L7.86,15.62C8.63,16.5 9.68,17.14 10.87,17.38L11.24,20H12.76L13.13,17.39C14.32,17.14 15.37,16.5 16.14,15.62L18.57,16.66L19.32,15.36L17.2,13.81C17.6,12.64 17.6,11.37 17.2,10.2L19.31,8.65L18.56,7.35L16.15,8.39C15.38,7.5 14.32,6.86 13.12,6.62L12.75,4H11.25Z" />
                             </svg>
                         </span>
                         <span class="text">Configiraciones </span>
                     </a>
                     <ul id="ddmenu_4" class="collapse dropdown-nav">
                         <li>
                             <a href="alerts.html"> Empresa </a>
                         </li>
                         <li>
                             <a href="buttons.html"> Usuarios </a>
                         </li>
                         <li>
                             <a href="cards.html"> Gestion </a>
                         </li>
                         <li>
                             <a href="typography.html"> Otros </a>
                         </li>
                     </ul>
                 </li>
                 {{-- <li class="nav-item nav-item-has-children">
                     <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_55"
                         aria-controls="ddmenu_55" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="icon">
                             <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M1.83325 19.25V17.4167H18.3333V19.25H1.83325ZM18.3333 7.33333V4.58333H16.4999V7.33333H18.3333ZM18.3333 2.75C18.8195 2.75 19.2858 2.94315 19.6296 3.28697C19.9734 3.63079 20.1666 4.0971 20.1666 4.58333V7.33333C20.1666 7.81956 19.9734 8.28588 19.6296 8.6297C19.2858 8.97351 18.8195 9.16667 18.3333 9.16667H16.4999V11.9167C16.4999 12.8891 16.1136 13.8218 15.426 14.5094C14.7383 15.197 13.8057 15.5833 12.8333 15.5833H7.33325C6.36079 15.5833 5.42816 15.197 4.74053 14.5094C4.05289 13.8218 3.66659 12.8891 3.66659 11.9167V2.75H18.3333ZM14.6666 4.58333H5.49992V11.9167C5.49992 12.4029 5.69307 12.8692 6.03689 13.213C6.38071 13.5568 6.84702 13.75 7.33325 13.75H12.8333C13.3195 13.75 13.7858 13.5568 14.1296 13.213C14.4734 12.8692 14.6666 12.4029 14.6666 11.9167V4.58333Z" />
                             </svg>
                         </span>
                         <span class="text">Icons</span>
                     </a>
                     <ul id="ddmenu_55" class="collapse dropdown-nav">
                         <li>
                             <a href="icons.html"> LineIcons </a>
                         </li>
                         <li>
                             <a href="mdi-icons.html"> MDI Icons </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item nav-item-has-children">
                     <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_5"
                         aria-controls="ddmenu_5" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="icon">
                             <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M13.75 4.58325H16.5L15.125 6.41659L13.75 4.58325ZM4.58333 1.83325H17.4167C18.4342 1.83325 19.25 2.65825 19.25 3.66659V18.3333C19.25 19.3508 18.4342 20.1666 17.4167 20.1666H4.58333C3.575 20.1666 2.75 19.3508 2.75 18.3333V3.66659C2.75 2.65825 3.575 1.83325 4.58333 1.83325ZM4.58333 3.66659V7.33325H17.4167V3.66659H4.58333ZM4.58333 18.3333H17.4167V9.16659H4.58333V18.3333ZM6.41667 10.9999H15.5833V12.8333H6.41667V10.9999ZM6.41667 14.6666H15.5833V16.4999H6.41667V14.6666Z" />
                             </svg>
                         </span>
                         <span class="text"> Forms </span>
                     </a>
                     <ul id="ddmenu_5" class="collapse dropdown-nav">
                         <li>
                             <a href="form-elements.html"> From Elements </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="tables.html">
                         <span class="icon">
                             <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M4.58333 3.66675H17.4167C17.9029 3.66675 18.3692 3.8599 18.713 4.20372C19.0568 4.54754 19.25 5.01385 19.25 5.50008V16.5001C19.25 16.9863 19.0568 17.4526 18.713 17.7964C18.3692 18.1403 17.9029 18.3334 17.4167 18.3334H4.58333C4.0971 18.3334 3.63079 18.1403 3.28697 17.7964C2.94315 17.4526 2.75 16.9863 2.75 16.5001V5.50008C2.75 5.01385 2.94315 4.54754 3.28697 4.20372C3.63079 3.8599 4.0971 3.66675 4.58333 3.66675ZM4.58333 7.33341V11.0001H10.0833V7.33341H4.58333ZM11.9167 7.33341V11.0001H17.4167V7.33341H11.9167ZM4.58333 12.8334V16.5001H10.0833V12.8334H4.58333ZM11.9167 12.8334V16.5001H17.4167V12.8334H11.9167Z" />
                             </svg>
                         </span>
                         <span class="text">Tables</span>
                     </a>
                 </li>
                 <span class="divider">
                     <hr />
                 </span>

                 <li class="nav-item">
                     <a href="notification.html">
                         <span class="icon">
                             <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                     d="M9.16667 19.25H12.8333C12.8333 20.2584 12.0083 21.0834 11 21.0834C9.99167 21.0834 9.16667 20.2584 9.16667 19.25ZM19.25 17.4167V18.3334H2.75V17.4167L4.58333 15.5834V10.0834C4.58333 7.24171 6.41667 4.76671 9.16667 3.94171V3.66671C9.16667 2.65837 9.99167 1.83337 11 1.83337C12.0083 1.83337 12.8333 2.65837 12.8333 3.66671V3.94171C15.5833 4.76671 17.4167 7.24171 17.4167 10.0834V15.5834L19.25 17.4167ZM15.5833 10.0834C15.5833 7.51671 13.5667 5.50004 11 5.50004C8.43333 5.50004 6.41667 7.51671 6.41667 10.0834V16.5H15.5833V10.0834Z" />
                             </svg>
                         </span>
                         <span class="text">Notifications</span>
                     </a>
                 </li> --}}
             </ul>
         </nav>
     </aside>
     <div class="overlay"></div>
     <!-- ======== sidebar-nav end =========== -->

     <!-- ======== main-wrapper start =========== -->
     <main class="main-wrapper">
         <!-- ========== header start ========== -->
         <header class="header">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-lg-5 col-md-5 col-6">
                         <div class="header-left d-flex align-items-center">
                             <div class="menu-toggle-btn mr-20">
                                 <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                                     <i class="lni lni-chevron-left me-2"></i>
                                 </button>
                             </div>
                             {{-- <div class="header-search d-none d-md-flex">
                                 <form action="#">
                                     <input type="text" placeholder="Search..." />
                                     <button><i class="lni lni-search-alt"></i></button>
                                 </form>
                             </div> --}}
                         </div>
                     </div>
                     <div class="col-lg-7 col-md-7 col-6">
                         <div class="header-right">
                             <!-- notification start -->
                             {{-- <div class="notification-box ml-15 d-none d-md-flex">
                                 <button class="dropdown-toggle" type="button" id="notification"
                                     data-bs-toggle="dropdown" aria-expanded="false">
                                     <i class="lni lni-alarm"></i>
                                     <span>2</span>
                                 </button>
                                 <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notification">
                                     <li>
                                         <a href="#0">
                                             <div class="image">
                                                 <img src="assets/images/lead/lead-6.png" alt="" />
                                             </div>
                                             <div class="content">
                                                 <h6>
                                                     John Doe
                                                     <span class="text-regular">
                                                         comment on a product.
                                                     </span>
                                                 </h6>
                                                 <p>
                                                     Lorem ipsum dolor sit amet, consect etur adipiscing
                                                     elit Vivamus tortor.
                                                 </p>
                                                 <span>10 mins ago</span>
                                             </div>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#0">
                                             <div class="image">
                                                 <img src="assets/images/lead/lead-1.png" alt="" />
                                             </div>
                                             <div class="content">
                                                 <h6>
                                                     Jonathon
                                                     <span class="text-regular">
                                                         like on a product.
                                                     </span>
                                                 </h6>
                                                 <p>
                                                     Lorem ipsum dolor sit amet, consect etur adipiscing
                                                     elit Vivamus tortor.
                                                 </p>
                                                 <span>10 mins ago</span>
                                             </div>
                                         </a>
                                     </li>
                                 </ul>
                             </div> 
                             <!-- notification end -->
                             <!-- message start -->
                             <div class="header-message-box ml-15 d-none d-md-flex">
                                 <button class="dropdown-toggle" type="button" id="message" data-bs-toggle="dropdown"
                                     aria-expanded="false">
                                     <i class="lni lni-envelope"></i>
                                     <span>3</span>
                                 </button>
                                 <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="message">
                                     <li>
                                         <a href="#0">
                                             <div class="image">
                                                 <img src="assets/images/lead/lead-5.png" alt="" />
                                             </div>
                                             <div class="content">
                                                 <h6>Jacob Jones</h6>
                                                 <p>Hey!I can across your profile and ...</p>
                                                 <span>10 mins ago</span>
                                             </div>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#0">
                                             <div class="image">
                                                 <img src="assets/images/lead/lead-3.png" alt="" />
                                             </div>
                                             <div class="content">
                                                 <h6>John Doe</h6>
                                                 <p>Would you mind please checking out</p>
                                                 <span>12 mins ago</span>
                                             </div>
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#0">
                                             <div class="image">
                                                 <img src="assets/images/lead/lead-2.png" alt="" />
                                             </div>
                                             <div class="content">
                                                 <h6>Anee Lee</h6>
                                                 <p>Hey! are you available for freelance?</p>
                                                 <span>1h ago</span>
                                             </div>
                                         </a>
                                     </li>
                                 </ul>
                             </div>
                             <!-- message end -->
                             <!-- filter start -->
                             <div class="filter-box ml-15 d-none d-md-flex">
                                 <button class="" type="button" id="filter">
                                     <i class="lni lni-funnel"></i>
                                 </button>
                             </div> --}}
                             <!-- filter end -->
                             <!-- profile start -->
                             <div class="profile-box ml-15">
                                 <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                                     data-bs-toggle="dropdown" aria-expanded="false">
                                     <div class="profile-info">
                                         <div class="info">
                                             <h6>John Doe</h6>
                                             <div class="image">
                                                 <img src="assets/images/profile/profile-image.png" alt="" />
                                                 <span class="status"></span>
                                             </div>
                                         </div>
                                     </div>
                                     <i class="lni lni-chevron-down"></i>
                                 </button>
                                 <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                                     <li>
                                         <a href="#0">
                                             <i class="lni lni-user"></i> View Profile
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#0">
                                             <i class="lni lni-alarm"></i> Notifications
                                         </a>
                                     </li>
                                     <li>
                                         <a href="#0"> <i class="lni lni-inbox"></i> Messages </a>
                                     </li>
                                     <li>
                                         <a href="#0"> <i class="lni lni-cog"></i> Settings </a>
                                     </li>
                                     <li>
                                         <a href="#0"> <i class="lni lni-exit"></i>Desconectar</a>
                                     </li>
                                 </ul>
                             </div>
                             <!-- profile end -->
                         </div>
                     </div>
                 </div>
             </div>
         </header>
         <!-- ========== header end ========== -->

         <!-- ========== section start ========== -->
         <section class="section">
             <div class="container-fluid">
                 @yield('content')
             </div>
             <!-- end container -->
         </section>
         <!-- ========== section end ========== -->

         <!-- ========== footer start =========== -->
         <footer class="footer">
             <div class="container-fluid">
                 <div class="row">
                     <div class="col-md-6 order-last order-md-first">
                         <div class="copyright text-center text-md-start">
                             <p class="text-sm">
                                 Designed and Developed by
                                 <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                                     PlainAdmin
                                 </a>
                             </p>
                         </div>
                     </div>
                     <!-- end col-->
                     <div class="col-md-6">
                         <div class="terms d-flex justify-content-center justify-content-md-end">
                             <a href="#0" class="text-sm">Term & Conditions</a>
                             <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
                         </div>
                     </div>
                 </div>
                 <!-- end row -->
             </div>
             <!-- end container -->
         </footer>
         <!-- ========== footer end =========== -->
     </main>
     <!-- ======== main-wrapper end =========== -->

     <!-- ========= All Javascript files linkup ======== -->
     <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
     <script src="{{ asset('assets/js/dynamic-pie-chart.js') }}"></script>
     <script src="{{ asset('assets/js/moment.min.js') }}"></script>
     <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
     <script src="{{ asset('assets/js/jvectormap.min.js') }}"></script>
     <script src="{{ asset('assets/js/world-merc.js') }}"></script>
     <script src="{{ asset('assets/js/polyfill.js') }}"></script>
     <script src="{{ asset('assets/js/cleave.min.js') }}"></script>
     <script src="{{ asset('assets/js/sweetalert2@11.js') }}"></script>
     <script src="{{ asset('assets/js/main.js') }}"></script>

     <script>
         // ======== jvectormap activation
         var markers = [{
                 name: "Egypt",
                 coords: [26.8206, 30.8025]
             },
             {
                 name: "Russia",
                 coords: [61.524, 105.3188]
             },
             {
                 name: "Canada",
                 coords: [56.1304, -106.3468]
             },
             {
                 name: "Greenland",
                 coords: [71.7069, -42.6043]
             },
             {
                 name: "Brazil",
                 coords: [-14.235, -51.9253]
             },
         ];

         var jvm = new jsVectorMap({
             map: "world_merc",
             selector: "#map",
             zoomButtons: true,

             regionStyle: {
                 initial: {
                     fill: "#d1d5db",
                 },
             },

             labels: {
                 markers: {
                     render: (marker) => marker.name,
                 },
             },

             markersSelectable: true,
             selectedMarkers: markers.map((marker, index) => {
                 var name = marker.name;

                 if (name === "Russia" || name === "Brazil") {
                     return index;
                 }
             }),
             markers: markers,
             markerStyle: {
                 initial: {
                     fill: "#2F80ED"
                 },
                 selected: {
                     fill: "#ff5050"
                 },
             },
             markerLabelStyle: {
                 initial: {
                     fontWeight: 400,
                     fontSize: 14,
                 },
             },
         });
         // ====== calendar activation
         document.addEventListener("DOMContentLoaded", function() {
             var calendarMiniEl = document.getElementById("calendar-mini");
             var calendarMini = new FullCalendar.Calendar(calendarMiniEl, {
                 initialView: "dayGridMonth",
                 headerToolbar: {
                     end: "today prev,next",
                 },
             });
             calendarMini.render();
         });
         // =========== chart one start
         var ctx1 = document.getElementById("Chart1").getContext("2d");
         var chart1 = new Chart(ctx1, {
             // The type of chart we want to create
             type: "line", // also try bar or other graph types

             // The data for our dataset
             data: {
                 labels: [
                     "Jan",
                     "Fab",
                     "Mar",
                     "Apr",
                     "May",
                     "Jun",
                     "Jul",
                     "Aug",
                     "Sep",
                     "Oct",
                     "Nov",
                     "Dec",
                 ],
                 // Information about the dataset
                 datasets: [{
                     label: "",
                     backgroundColor: "transparent",
                     borderColor: "#2F80ED",
                     data: [
                         600, 700, 750, 800, 760, 820, 690, 740, 720, 890, 776, 900,
                     ],
                     pointBackgroundColor: "transparent",
                     pointHoverBackgroundColor: "#2F80ED",
                     pointBorderColor: "transparent",
                     pointHoverBorderColor: "#fff",
                     pointHoverBorderWidth: 5,
                     pointBorderWidth: 5,
                     pointRadius: 8,
                     pointHoverRadius: 8,
                 }, ],
             },

             // Configuration options
             options: {
                 tooltips: {
                     callbacks: {
                         labelColor: function(tooltipItem, chart) {
                             return {
                                 backgroundColor: "#ffffff",
                             };
                         },
                     },
                     intersect: false,
                     backgroundColor: "#f9f9f9",
                     titleFontColor: "#8F92A1",
                     titleFontColor: "#8F92A1",
                     titleFontSize: 12,
                     bodyFontColor: "#171717",
                     bodyFontStyle: "bold",
                     bodyFontSize: 16,
                     multiKeyBackground: "transparent",
                     displayColors: false,
                     xPadding: 30,
                     yPadding: 10,
                     bodyAlign: "center",
                     titleAlign: "center",
                 },

                 title: {
                     display: false,
                 },
                 legend: {
                     display: false,
                 },

                 scales: {
                     yAxes: [{
                         gridLines: {
                             display: false,
                             drawTicks: false,
                             drawBorder: false,
                         },
                         ticks: {
                             padding: 35,
                             max: 1200,
                             min: 500,
                         },
                     }, ],
                     xAxes: [{
                         gridLines: {
                             drawBorder: false,
                             color: "rgba(143, 146, 161, .1)",
                             zeroLineColor: "rgba(143, 146, 161, .1)",
                         },
                         ticks: {
                             padding: 20,
                         },
                     }, ],
                 },
             },
         });
         // =========== chart one end

         // =========== chart two start
         var ctx2 = document.getElementById("Chart2").getContext("2d");
         var chart2 = new Chart(ctx2, {
             // The type of chart we want to create
             type: "bar", // also try bar or other graph types
             // The data for our dataset
             data: {
                 labels: [
                     "Jan",
                     "Fab",
                     "Mar",
                     "Apr",
                     "May",
                     "Jun",
                     "Jul",
                     "Aug",
                     "Sep",
                     "Oct",
                     "Nov",
                     "Dec",
                 ],
                 // Information about the dataset
                 datasets: [{
                     label: "",
                     backgroundColor: "#2F80ED",
                     barThickness: 6,
                     maxBarThickness: 8,
                     data: [
                         600, 700, 1000, 700, 650, 800, 690, 740, 720, 1120, 876, 900,
                     ],
                     borderRadius: 100,
                     pointBackgroundColor: "#F3F6F8",
                     pointHoverBackgroundColor: "#5243AA",
                     pointBorderColor: "#F3F6F8",
                     pointHoverBorderColor: "#fff",
                     pointHoverBorderWidth: 5,
                     pointBorderWidth: 5,
                     pointRadius: 8,
                     pointHoverRadius: 8,
                 }, ],
             },
             // Configuration options
             options: {
                 borderColor: "#F3F6F8",
                 borderWidth: 15,
                 backgroundColor: "#F3F6F8",
                 tooltips: {
                     callbacks: {
                         labelColor: function(tooltipItem, chart) {
                             return {
                                 backgroundColor: "rgba(104, 110, 255, .0)",
                             };
                         },
                     },
                     backgroundColor: "#F3F6F8",
                     titleFontColor: "#8F92A1",
                     titleFontSize: 12,
                     bodyFontColor: "#171717",
                     bodyFontStyle: "bold",
                     bodyFontSize: 16,
                     multiKeyBackground: "transparent",
                     displayColors: false,
                     xPadding: 30,
                     yPadding: 10,
                     bodyAlign: "center",
                     titleAlign: "center",
                 },

                 title: {
                     display: false,
                 },
                 legend: {
                     display: false,
                 },

                 scales: {
                     yAxes: [{
                         gridLines: {
                             display: false,
                             drawTicks: false,
                             drawBorder: false,
                         },
                         ticks: {
                             padding: 35,
                             max: 1200,
                             min: 0,
                         },
                     }, ],
                     xAxes: [{
                         gridLines: {
                             display: false,
                             drawBorder: false,
                             color: "rgba(143, 146, 161, .1)",
                             zeroLineColor: "rgba(143, 146, 161, .1)",
                         },
                         ticks: {
                             padding: 20,
                         },
                     }, ],
                 },
             },
         });
         // =========== chart two end

         // =========== chart three start
         var ctx3 = document.getElementById("Chart3").getContext("2d");
         var chart3 = new Chart(ctx3, {
             // The type of chart we want to create
             type: "line", // also try bar or other graph types

             // The data for our dataset
             data: {
                 labels: [
                     "Jan",
                     "Fab",
                     "Mar",
                     "Apr",
                     "May",
                     "Jun",
                     "Jul",
                     "Aug",
                     "Sep",
                     "Oct",
                     "Nov",
                     "Dec",
                 ],
                 // Information about the dataset
                 datasets: [{
                         label: "Revenue",
                         backgroundColor: "transparent",
                         borderColor: "#5243AA",
                         data: [80, 120, 110, 100, 130, 150, 115, 145, 140, 130, 160, 210],
                         pointBackgroundColor: "transparent",
                         pointHoverBackgroundColor: "#5243AA",
                         pointBorderColor: "transparent",
                         pointHoverBorderColor: "#fff",
                         pointHoverBorderWidth: 3,
                         pointBorderWidth: 5,
                         pointRadius: 5,
                         pointHoverRadius: 8,
                     },
                     {
                         label: "Profit",
                         backgroundColor: "transparent",
                         borderColor: "#686EFF",
                         data: [
                             120, 160, 150, 140, 165, 210, 135, 155, 170, 140, 130, 200,
                         ],
                         pointBackgroundColor: "transparent",
                         pointHoverBackgroundColor: "#686EFF",
                         pointBorderColor: "transparent",
                         pointHoverBorderColor: "#fff",
                         pointHoverBorderWidth: 3,
                         pointBorderWidth: 5,
                         pointRadius: 5,
                         pointHoverRadius: 8,
                     },
                     {
                         label: "Order",
                         backgroundColor: "transparent",
                         borderColor: "#FF8730",
                         data: [180, 110, 140, 135, 100, 90, 145, 115, 100, 110, 115, 150],
                         pointBackgroundColor: "transparent",
                         pointHoverBackgroundColor: "#FF8730",
                         pointBorderColor: "transparent",
                         pointHoverBorderColor: "#fff",
                         pointHoverBorderWidth: 3,
                         pointBorderWidth: 5,
                         pointRadius: 5,
                         pointHoverRadius: 8,
                     },
                 ],
             },

             // Configuration options
             options: {
                 tooltips: {
                     callbacks: {
                         labelColor: function(tooltipItem, chart) {
                             return {
                                 backgroundColor: "rgba(104, 110, 255, .0)",
                             };
                         },
                     },
                     intersect: false,
                     backgroundColor: "#fbfbfb",
                     titleFontColor: "#8F92A1",
                     titleFontSize: 16,
                     titleFontFamily: "Inter",
                     titleFontStyle: "400",
                     bodyFontColor: "#171717",
                     bodyFontSize: 16,
                     multiKeyBackground: "transparent",
                     displayColors: false,
                     xPadding: 30,
                     yPadding: 15,
                     borderColor: "rgba(143, 146, 161, .1)",
                     borderWidth: 1,
                     title: false,
                 },

                 title: {
                     display: false,
                 },

                 layout: {
                     padding: {
                         top: 0,
                     },
                 },

                 legend: false,

                 scales: {
                     yAxes: [{
                         gridLines: {
                             display: false,
                             drawTicks: false,
                             drawBorder: false,
                         },
                         ticks: {
                             padding: 35,
                             max: 300,
                             min: 50,
                         },
                     }, ],
                     xAxes: [{
                         gridLines: {
                             drawBorder: false,
                             color: "rgba(143, 146, 161, .1)",
                             zeroLineColor: "rgba(143, 146, 161, .1)",
                         },
                         ticks: {
                             padding: 20,
                         },
                     }, ],
                 },
             },
         });
         // =========== chart three end

         // ================== chart four start
         var ctx4 = document.getElementById("Chart4").getContext("2d");
         var chart4 = new Chart(ctx4, {
             // The type of chart we want to create
             type: "bar", // also try bar or other graph types
             // The data for our dataset
             data: {
                 labels: ["Jan", "Fab", "Mar", "Apr", "May", "Jun"],
                 // Information about the dataset
                 datasets: [{
                         label: "",
                         backgroundColor: "#2F80ED",
                         barThickness: "flex",
                         maxBarThickness: 8,
                         data: [600, 700, 1000, 700, 650, 800],
                         pointBackgroundColor: "#F3F6F8",
                         pointHoverBackgroundColor: "#5243AA",
                         pointBorderColor: "#F3F6F8",
                         pointHoverBorderColor: "#fff",
                         pointHoverBorderWidth: 5,
                         pointBorderWidth: 5,
                         pointRadius: 8,
                         pointHoverRadius: 8,
                     },
                     {
                         label: "",
                         backgroundColor: "#EB5757",
                         barThickness: "flex",
                         maxBarThickness: 8,
                         data: [690, 740, 720, 1120, 876, 900],
                         pointBackgroundColor: "#F3F6F8",
                         pointHoverBackgroundColor: "#5243AA",
                         pointBorderColor: "#F3F6F8",
                         pointHoverBorderColor: "#fff",
                         pointHoverBorderWidth: 5,
                         pointBorderWidth: 5,
                         pointRadius: 8,
                         pointHoverRadius: 8,
                     },
                 ],
             },
             // Configuration options
             options: {
                 borderColor: "#F3F6F8",
                 borderWidth: 15,
                 backgroundColor: "#F3F6F8",
                 tooltips: {
                     callbacks: {
                         labelColor: function(tooltipItem, chart) {
                             return {
                                 backgroundColor: "rgba(104, 110, 255, .0)",
                             };
                         },
                     },
                     backgroundColor: "#F3F6F8",
                     titleFontColor: "#8F92A1",
                     titleFontSize: 12,
                     bodyFontColor: "#171717",
                     bodyFontStyle: "bold",
                     bodyFontSize: 16,
                     multiKeyBackground: "transparent",
                     displayColors: false,
                     xPadding: 30,
                     yPadding: 10,
                     bodyAlign: "center",
                     titleAlign: "center",
                 },

                 title: {
                     display: false,
                 },
                 legend: {
                     display: false,
                 },

                 scales: {
                     yAxes: [{
                         gridLines: {
                             display: false,
                             drawTicks: false,
                             drawBorder: false,
                         },
                         ticks: {
                             padding: 35,
                             max: 1200,
                             min: 0,
                         },
                     }, ],
                     xAxes: [{
                         gridLines: {
                             display: false,
                             drawBorder: false,
                             color: "rgba(143, 146, 161, .1)",
                             zeroLineColor: "rgba(143, 146, 161, .1)",
                         },
                         ticks: {
                             padding: 20,
                         },
                     }, ],
                 },
             },
         });
         // =========== chart four end
     </script>
     @yield('scripts')
 </body>

 </html>
