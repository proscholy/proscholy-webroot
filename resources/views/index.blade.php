@extends('layout')

@section('content')
    <section class="bg-white">
        <div class="container my-5">
            <div class="row py-3">
                <div class="col-12 col-md-7">

                    <p class="h1 mb-5">Víme, kolik práce dá sloužit <span class="text-primary">Bohu</span> darem
                        <span class="text-primary">zpěvu</span> a <span class="text-primary">hudby</span>.

                    <p class="h1">Jsme v tom s Vámi! <br>Ze <span class="text-primary">srdce</span> si vážíme Vaší
                        <span class="text-primary">služby</span> a zavazujeme se,
                        že Vám v tom budeme <span class="text-primary">pomáhat</span> jak umíme!</p>
                </div>
            </div>
        </div>
    </section>

    {{--        <div style="height: 150px"></div>--}}
    <section class="bg-light mb-5 pb-5">
        <img src="{{asset('/images/waves.svg')}}" style="box-shadow: none; border-radius:0" height="75px" width="100%">
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mb-3">Co děláme?</h2>
                    <p class="mb-5">V rámci projektu ProScholy.cz pro Vás připravujeme nové způsoby, jak zlepšit nebo si
                        usnadnit Vaši hudební službu.</p>

                    <div class="row">
                        <div class="col-6 col-sm text-left">
                            <div class="card h-100">
                                <a href="//zpevnik.proscholy.cz">
                                    <img src="{{asset('/images/zpevnik.png')}}" width="100%" style="box-shadow: none">
                                </a>
                                <a href="//zpevnik.proscholy.cz" class="link-title mt-3 px-3">Zpěvník</a>
                                <p class="mt-3 font-weight-light px-3">Zpěvník přichází na pomoc všem scholám,
                                    křesťanským kapelám, společenstvím a ostatním, kdo se chtějí modlit hudbou!</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm text-left">
                            <div class="card h-100">
                                <a href="//regenschori.cz">
                                    <img src="{{asset('/images/regenschori.png')}}"
                                         width="100%"
                                         style="box-shadow: none">
                                </a>
                                <a href="//regenschori.cz" class="link-title px-3 mt-3">Regenschori</a>
                                <p class="mt-3 font-weight-light px-3">Regenschori je největší česká databáze křesťanské
                                    hudby pro vedoucí schol i pro varhaníky.</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm text-left">
                            <div class="card h-100">
                                <a href="//proscholy.atlassian.net/servicedesk/customer/portals">
                                    <img src="{{asset('/images/podpora2.png')}}"
                                         width="100%"
                                         style="box-shadow: none; border-bottom: 1px solid #f5f5f5">
                                </a>
                                <a href="//proscholy.atlassian.net/servicedesk/customer/portals"
                                   class="link-title px-3 mt-3">Podpora pro scholy</a>
                                <p class="mt-3 font-weight-light px-3">Online podpora pro scholy, kapely, hudebníky.
                                    Odpovídáme na Vaše hudební dotazy, připomínky či nejasnosti.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    <div style="height: 100px"></div>--}}
    <section class="bg-white">
        <div class="container mt-5">
            <h2>Křesťanská hudba na Spotify</h2>
            <p>Pokud máte Spotify, můžete si přidat některý z playlistů, které po vás sestavujeme.</p>

            <div class="row">
                <div class="col-md-4">
                    <iframe src="https://open.spotify.com/embed/playlist/77giBfU90a4MtpjS5MXDPA"
                            width="100%"
                            height="380"
                            frameborder="0"
                            class="widget"
                            allowtransparency="true"
                            allow="encrypted-media"></iframe>
                </div>
                <div class="col-md-4">
                    <iframe src="https://open.spotify.com/embed/playlist/5pHaZrXtJxXumImNqzdK0t"
                            width="100%"
                            height="380"
                            frameborder="0"
                            class="widget"
                            allowtransparency="true"
                            allow="encrypted-media"></iframe>
                </div>
                <div class="col-md-4">
                    <iframe src="https://open.spotify.com/embed/playlist/0ODeNpqLvYzu4MHhhUsOYb"
                            width="100%"
                            height="380"
                            frameborder="0"
                            class="widget"
                            allowtransparency="true"
                            allow="encrypted-media"></iframe>
                </div>
            </div>

        </div>
    </section>
    {{--    <div style="height: 1000px"></div>--}}
    <section class="my-5 py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Náš tým</h2>

                    <p>Projekt ProScholy.cz tvoří přes 50 dobrovolníků; někteří z nás jsou leadeři schol a chválových kapel,
                        odborníci v oblasti chrámové hudby, varhaníci, programátoři
                        i autoři známých písní.</p>

                    <p>Chceme být zázemím a pomocníkem pro všechny, kteří se chtějí modlit hudbou.
                        Pro scholy, kapely, varhaníky, chrámové hudebníky, zpěváky, vedoucí chval i společenství.</p>

                    <a class="btn btn-primary mt-2" href="https://proscholy.atlassian.net/servicedesk/customer/portal/1/group/7/create/24">Přidat se do týmu</a>
                </div>

                <div class="col-md-6">
                    <img src="{{asset('images/tym.jpg')}}" width="100%">
                </div>
            </div>


        </div>
    </section>

@endsection
