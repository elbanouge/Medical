@extends('layout')

@section('content')

    <div class="body">

        <header id="header" class="header-effect-shrink"
            data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-top-0">
                <div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">
                    <div class="container h-100">
                        <div class="header-row h-100">
                            <div class="header-column justify-content-between">
                                <div class="header-row">
                                    <nav class="header-nav-top w-100">
                                        <ul class="nav nav-pills justify-content-between w-100 h-100">
                                            <li class="nav-item py-2 d-none d-xl-inline-flex">
                                                <span
                                                    class="header-top-phone py-2 d-flex align-items-center text-color-primary font-weight-semibold text-uppercase">
                                                    <i class="icon-phone icons text-5 mr-2"></i> <a
                                                        href="tel:+212-528-866-732">+(212) 528-866-732</a>
                                                </span>
                                                <span
                                                    class="header-top-email px-0 font-weight-normal d-flex align-items-center"><i
                                                        class="far fa-envelope text-4"></i> <a class="text-color-default"
                                                        href="mailto:Largou@dentaire.com">Largou@dentaire.com</a></span>
                                                <span
                                                    class="header-top-opening-hours px-0 font-weight-normal d-flex align-items-center"><i
                                                        class="far fa-clock text-4"></i>Du lundi au Vendredi 8h30 ??
                                                    18h30 et Samedi 8h30 ?? 15h</span>
                                            </li>
                                            <li class="nav-item nav-item-header-top-socials d-flex justify-content-between">
                                                <span class="header-top-socials p-0 h-100">
                                                    <ul class="d-flex align-items-center h-100 p-0">
                                                        <li class="list-unstyled">
                                                            <a href="#"><i
                                                                    class="fab fa-instagram text-color-quaternary text-hover-primary"></i></a>
                                                        </li>
                                                        <li class="list-unstyled">
                                                            <a href="#"><i
                                                                    class="fab fa-facebook-f text-color-quaternary text-hover-primary"></i></a>
                                                        </li>
                                                        <li class="list-unstyled">
                                                            <a href="#"><i
                                                                    class="fab fa-twitter text-color-quaternary text-hover-primary"></i></a>
                                                        </li>
                                                    </ul>
                                                </span>
                                                <span
                                                    class="header-top-button-make-as-appoitment d-inline-flex align-items-center justify-content-center h-100 p-0 align-top">
                                                    <a href="#"
                                                        class="d-flex align-items-center justify-content-center h-100 w-100 btn-primary font-weight-normal text-decoration-none">PRENDRE
                                                        RENDEZ-VOUS</a>
                                                </span>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-container container bg-color-light">
                    <div class="header-row">
                        <div class="header-column header-column-logo">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="demo-medical-2.html">
                                        <img alt="Porto" width="180" height="60" src="img/logos/Logo.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column header-column-nav-menu justify-content-end">
                            <div class="header-row">
                                <div class="header-nav header-nav-links order-2 order-lg-1">
                                    <div
                                        class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="dropdown-secondary">
                                                    <a class="nav-link" href="demo-medical-2.html">
                                                        Accueil
                                                    </a>
                                                </li>
                                                <li class="dropdown-secondary">
                                                    <a class="nav-link" href="#specialite">
                                                        Sp??cialit??s
                                                    </a>
                                                </li>
                                                <li class="dropdown-secondary">
                                                    <a class="nav-link" href="#service">
                                                        Service M??dical
                                                    </a>
                                                </li>
                                                <li class="dropdown-secondary">
                                                    <a class="nav-link"
                                                        href="file:///C:/Users/Abdellah/Desktop/Medical/demo-medical-2.html#about-us">
                                                        A propos
                                                    </a>
                                                </li>

                                                <li class="dropdown-secondary">
                                                    <a class="nav-link active" href="demo-medical-2-contact-us.html">
                                                        Contact
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                        data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="header-column header-column-search justify-content-center align-items-end">
                            <div class="header-nav-features">
                                <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                    <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0"
                                        id="headerTopSearchDropdown">
                                        <form role="search" action="page-search-results.html" method="get">
                                            <div class="simple-search input-group">
                                                <input class="form-control text-1" id="headerSearch" name="q" type="search"
                                                    value="" placeholder="Search...">
                                                <span class="input-group-append border-radius-0">
                                                    <button class="btn" type="submit">
                                                        <i class="fa fa-search header-nav-top-icon"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div role="main" class="main">

            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md m-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="fadeIn"
                                data-appear-animation-delay="100">Contactez-nous</h1>
                        </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb d-block text-md-right appear-animation" data-appear-animation="fadeIn"
                                data-appear-animation-delay="300">
                                <li><a href="file:///C:/Users/Abdellah/Desktop/Medical/demo-medical-2.html">Accueil</a></li>
                                <li class="active">Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
            <div id="googlemaps" class="google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3465.880372589333!2d-9.735189985309061!3d29.694247782011104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb47b9d5b53cfc1%3A0x69c7b126f40fe639!2sCentre%20Dentaire%20LARGOU!5e0!3m2!1sfr!2sma!4v1619049237187!5m2!1sfr!2sma"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <div class="container py-5">
                <div class="row">
                    <div class="col pt-3">

                        <h3 class="text-color-quaternary font-weight-bolder text-capitalize mb-2">Coordonn??es de contact
                        </h3>
                        <p class="mb-4">La cabinet dentaire situ?? ?? Tiznit une ville du r??gion sous Massa, elle a
                            commenc?? sont travaille en 2009, des le jour
                            jusqu'?? maintenant elle a obtenue une bonne r??p??tition, et sans exag??ration elle est une des
                            meilleurs au sud du Maroc.
                        </p>

                        <div class="row text-center pb-3 pt-4">
                            <div class="col-lg-3 col-md-6 pb-4 pb-lg-0">
                                <img width="60" src="img/icons/icon-location.svg" alt="" />
                                <h4 class="m-0 pt-4 font-weight-bold">Addresse</h4>
                                <p class="m-0">Complexe Comerciale Wadi Ljana, Tiznit 85000</p>
                            </div>
                            <div class="col-lg-3 col-md-6 pb-4 pb-lg-0">
                                <img width="60" src="img/icons/icon-phone.svg" alt="" />
                                <h4 class="m-0 pt-4 font-weight-bold">T??l??phone</h4>
                                <p class="m-0"><a href="tel:+212528866732"
                                        class="text-color-default text-color-hover-primary">+(212) 528-866-732</a></p>
                            </div>
                            <div class="col-lg-3 col-md-6 pb-4 pb-md-0">
                                <img width="60" src="img/icons/icon-envelope.svg" alt="" />
                                <h4 class="m-0 pt-4 font-weight-bold">Email</h4>
                                <p class="m-0"><a href="mailto:Largou@dentaire.com"
                                        class="text-default text-hover-primary">Largou@dentaire.com</a></p>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <img width="60" src="img/icons/icon-calendar.svg" alt="" />
                                <h4 class="m-0 pt-4 font-weight-bold">Horaires D'ouvertures</h4>
                                <p class="m-0">Du lundi au Vendredi 8h30 ?? 18h30 et Samedi 8h30 ?? 15h
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <hr class="my-5">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <iframe name="contact" width="100%" height="12%" style="border:0;"></iframe>
                        <h3 class="text-color-quaternary font-weight-bolder text-capitalize mb-2">Envoyer nous un
                            message</h3>
                        <form id="form-contact" class="contact-form custom-form-style-1 appear-animation"
                            data-appear-animation="fadeIn" data-appear-animation-delay="100" action="php/email-script.php"
                            method="POST" target="contact">
                            <div id="form-success" class="contact-form-success alert alert-success d-none mt-4">
                                <strong>Succ??s!</strong> Votre message a ??t?? envoy?? avec succ??s.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4">
                                <strong>Erreur!</strong> Nous avons rencontr?? une erreur lors de l'envoi de votre
                                message.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" placeholder="Votre nom" value=""
                                        data-msg-required="S'il vous pla??t entrez votre nom." maxlength="100"
                                        class="form-control" name="name" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" placeholder="Votre E-mail" value=""
                                        data-msg-required="S'il vous pla??t entrez votre addresse."
                                        data-msg-email="S'il vous pla??t, mettez une adresse email valide." maxlength="100"
                                        class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input placeholder="Sujet" type="text" value=""
                                        data-msg-required="Veuillez saisir le sujet." maxlength="100" class="form-control"
                                        name="subject" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <textarea placeholder="Votre Message..." maxlength="5000"
                                        data-msg-required="S'il vous pla??t entrez votre message." rows="10"
                                        class="form-control" name="message" required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="submit" value="Envoyer le message" name="sendMailBtn"
                                        class="btn btn-primary px-4 py-3 text-center text-uppercase font-weight-semibold"
                                        data-loading-text="Chargement...">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <footer id="footer" class="m-0 bg-color-quaternary">
            <div class="container">
                <div class="row py-5">
                    <div class="col-sm-12 pb-4 pb-lg-0 col-lg-2 mb-2 d-flex align-items-center">
                        <img src="img/logos/Logo_footer.png" alt="Logo Footer">
                    </div>
                    <div class="col-sm-6 col-lg-3 footer-column footer-column-get-in-touch">
                        <h4 class="mb-4 text-uppercase">CONTACT</h4>
                        <div class="info custom-info mb-4">
                            <div class="custom-info-block custom-info-block-address">
                                <span
                                    class="text-color-default font-weight-bolder text-uppercase title-custom-info-block title-custom-info-block-address">Addresse</span>
                                <span
                                    class="font-weight-normal text-color-light text-custom-info-block p-relative bottom-6 text-custom-info-block-address">Complexe
                                    Comerciale Wadi Ljana, Tiznit 85000</span>
                            </div>
                            <div class="custom-info-block custom-info-block-phone">
                                <span
                                    class="text-color-default font-weight-bolder text-uppercase title-custom-info-block title-custom-info-block-phone">T??l??phone</span>
                                <span
                                    class="font-weight-normal text-color-light text-custom-info-block p-relative bottom-6 text-custom-info-block-phone">Gratuit
                                    <a href="tel:+212528866732" class="text-color-light">+(212) 528-866-732</a></span>
                            </div>
                            <div class="custom-info-block custom-info-block-email">
                                <span
                                    class="text-color-default font-weight-bolder text-uppercase title-custom-info-block title-custom-info-block-email">Email</span>
                                <span
                                    class="font-weight-normal text-color-light text-custom-info-block p-relative bottom-6 text-custom-info-block-email"><a
                                        class="text-color-light"
                                        href="mailto:Largou@dentaire.com">Largou@dentaire.com</a></span>
                            </div>
                        </div>
                        <ul class="social-icons">
                            <li class="social-icons-instagram">
                                <a href="#" target="_blank" title="Instagram">
                                    <i class="fab fa-instagram text-4 font-weight-semibold"></i>
                                </a>
                            </li>
                            <li class="social-icons-twitter">
                                <a href="#" target="_blank" title="Twitter">
                                    <i class="fab fa-twitter text-4 font-weight-semibold"></i>
                                </a>
                            </li>
                            <li class="social-icons-facebook">
                                <a href="#" target="_blank" title="Facebook">
                                    <i class="fab fa-facebook-f text-4 font-weight-semibold"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 pt-5 pt-md-0 col-lg-4">
                        <div class="nav-footer-container">
                            <h4 class="mb-4 text-uppercase">SERVICES M??DICAUX</h4>
                            <div class="nav-footer d-flex">
                                <ul style="margin: 0 10%;">
                                    <li class="nav-foot">
                                        Chirurgie Buccale
                                    </li>
                                    <li class="nav-foot">
                                        Parodontite
                                    </li>
                                    <li class="nav-foot">
                                        P??dodontie
                                    </li>
                                    <!-- </ul>
                                 <ul class="pl-4"> -->
                                    <li class="nav-foot">
                                        Endodontie
                                    </li>
                                    <li class="nav-foot">
                                        Orthodontie
                                    </li>
                                    <li class="nav-foot">
                                        Implantologie
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-sm-12 pt-4 pt-lg-0 col-lg-3 text-left ml-lg-auto footer-column footer-column-opening-hours">
                        <h4 class="mb-4 text-uppercase">HORAIRES D'OUVERTURES</h4>
                        <div class="info custom-info pt-0">
                            <span>Du lundi au Vendredi</span>
                            <span>8h30 ?? 18h30</span>
                        </div>
                        <div class="info custom-info">
                            <span>Samedi</span>
                            <span>8h30 ?? 15h</span>
                        </div>
                        <div class="info custom-info pb-0 border-bottom-0">
                            <span>Dimanche</span>
                            <span>Ferm??e</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright pt-3 pb-3 container bg-color-quaternary">
                <div class="row">
                    <div class="col-lg-12 text-center m-0 pb-4">
                        <p class="text-color-default">Centre Dentaire Largou Tiznit. ?? 2021. Tous les droits sont
                            r??serv??s</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
