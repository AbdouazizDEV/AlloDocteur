<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6 col-lg-3">
                <h3 class="heading">À Propos de Nous</h3>
                <p>
                    Notre clinique se consacre à fournir des soins de santé exceptionnels et accessibles. Nous comprenons l'importance d'une prise de rendez-vous médicale efficace et sans stress. Notre équipe s'efforce d'offrir un service personnalisé, veillant à ce que chaque patient reçoive l'attention et les soins nécessaires. Notre objectif est d'améliorer votre santé et votre bien-être à chaque visite.
                </p>
                <a href="{{ url('about-us') }}" class="">en savoir plus</a>

                <h3 class="heading">Suivez-Nous</h3>
                <p class="social-media">
                    <a href=""> <i class="bx bxl-facebook"></i></a>
                    <a href=""> <i class="bx bxl-twitter"></i></a>
                    <a href=""> <i class="bx bxl-instagram"></i></a>
                    <a href=""> <i class="bx bxl-youtube"></i></a>
                    <a href=""> <i class="bx bxl-linkedin"></i></a>
                </p>
            </div>
            <div class="col-md-3 col-6 col-lg-3">
                <h3 class="heading">Liens Rapides</h3>
                <ul class="contact-links footer-links">
                    <li><a href="{{ url('/') }}" class="contact-link"> <i class="bx bx-chevron-right"></i> Accueil</a></li>
                    <li><a href="{{ url('about-us') }}" class="contact-link"> <i class="bx bx-chevron-right"></i> À Propos de Nous</a></li>
                    <li><a href="{{ url('find-a-doctor') }}" class="contact-link"> <i class="bx bx-chevron-right"></i> Trouver un Médecin</a></li>
                    <li><a href="{{ url('/contact-us') }}" class="contact-link"> <i class="bx bx-chevron-right"></i> Nous Contacter</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-5 col-lg-3">
                <h3 class="heading">CONTACTEZ-NOUS</h3>
                @if ($appSetting->address)
                    <p class="me-4">
                        {{$appSetting->address}}
                    </p>
                @endif
                @if ($appSetting->whatsapp)
                    <p class="me-4">
                        <i class="bx bxl-whatsapp"></i>
                        {{$appSetting->whatsapp}}
                    </p>
                @endif
                <ul class="contact-links footer-links">
                    <li><a href="{{ url('find-a-doctor') }}" class="contact-link"> <i class="bx bx-chevron-right"></i> Trouver un Médecin</a></li>
                    <li><a href="{{ url('/contact-us') }}" class="contact-link"> <i class="bx bx-chevron-right"></i> Nous Contacter</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-7 col-lg-3">
                <div class="footer-contact">
                    <h3 class="heading">Rejoignez-Nous</h3>
                    <ul class="contact-links">
                        @if ($appSetting->phone1)
                            <li>
                                <a href="tel:{{$appSetting->phone1}}" title="Appelez-nous" class="contact-link">
                                    <i class="bx bx-phone-call"></i>
                                    <span class="link-text">{{$appSetting->phone1}}</span>
                                </a>
                            </li>
                        @endif
                        @if ($appSetting->phone2)
                            <li>
                                <a href="tel:{{$appSetting->phone2}}" title="Appelez-nous" class="contact-link">
                                    <i class="bx bx-phone-call"></i>
                                    <span class="link-text">{{$appSetting->phone2}}</span>
                                </a>
                            </li>
                        @endif
                        @if ($appSetting->email1)
                            <li>
                                <a href="mailto:{{$appSetting->email1}}" title="Appelez-nous" class="contact-link">
                                    <i class="bx bx-envelope"></i>
                                    <span class="link-text">{{$appSetting->email1}}</span>
                                </a>
                            </li>
                        @endif
                        @if ($appSetting->email2)
                            <li>
                                <a href="mailto:{{$appSetting->email2}}" title="Appelez-nous" class="contact-link">
                                    <i class="bx bx-envelope"></i>
                                    <span class="link-text">{{$appSetting->email2}}</span>
                                </a>
                            </li>
                        @endif
                        @if ($appSetting->fax)
                            <li>
                                <a href="mailto:{{$appSetting->fax}}" title="Appelez-nous" class="contact-link">
                                    <i class="bx bx-file"></i> FAX :
                                    <span class="link-text">{{$appSetting->fax}}</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <hr class="text-white">
    </div>
    <div class="container mt-md-5 mt-3">
        <div class="row">
            <div class="col-md-6 text-md-start text-center">
                <p class="mb-0 fs-12">{{ $appSetting->copyright ?? 'Copyright - 2023' }}.</p>
            </div>
            <div class="col-md-6">
                <p class="mb-0 fs-12 text-md-end text-center">
                    Design &amp; Developed by -
                    <a href="https://www.fundaofwebit.com/" target="_blank" class="text-white">Funda of Web IT</a>
                </p>
            </div>
        </div>
    </div>
</div>
