<header class="container-fluid">
    <div id="header" class="row">
        <div class="col-sm-6 d-flex align-items-center">
            <nav>
                <ul>
                    <li class="mediasocial pb-5">
                        <div class="overlay">
                            <img src="{{ asset('images/linkedin.png') }}" alt="linkedin">
                            <p class="text">
                                <a href="https://www.linkedin.com/in/anandh-aroumougame/" target="_blank">Linkedin</a>
                            </p>
                        </div>
                    </li>
                    <li class="mediasocial pt-5">
                        <div class="overlay">
                            <img src="{{ asset('images/instagram.png')}}" alt="instagram">
                            <p class="text"><a href="https://www.instagram.com/pyno21/?hl=fr" target="_blank">Instagram</a></p>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="w-100 position-absolute" id="bgslider" >
            &nbsp;
        </div>
    </div>
</header>

<div>
    <div id="navbar" class="row align-items-sm-center justify-content-sm-between ">
        <div class="col-sm-2 offset-4">
            <a href="{{ route('showAllLivre') }} ">Livres</a>
        </div>
        <div class="col-sm-2 ">
            <a href=" {{ route('showAddLivreForm') }}">Add Livre</a>
        </div>

        <div class="col-1 offset-3">

        </div>
    </div>
</div>