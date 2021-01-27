@extends('layout')

@section('content')
    <section class="bg-white">
        <div class="container my-5">
            <div class="row py-3">
                <div class="col-12 col-md-7">

                    <p class="h1 mb-5">Víme, kolik práce dá sloužit <span class="text-primary">Bohu</span> darem
                        <span class="text-primary">zpěvu</span> a <span class="text-primary">hudby</span>.
                    </p>

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
                    <h2 class="mb-3"><b>Co děláme?</b></h2>
                    <p class="mb-5">Zpěvník přichází na pomoc všem scholám, křesťanským kapelám,
                        společenstvím a ostatním, kdo se chtějí modlit hudbou!</p>

                    <div class="row">
                        <div class="col-6 col-sm text-left">
                            <div class="card h-100">
                                {{--                                <div>--}}
                                {{--                                    <img src="https://proscholy.atlassian.net/rest/servicedesk/1/customer/viewport-resources/portal-logo/1/2"--}}
                                {{--                                         height="50px" style="box-shadow: none" class="mb-2">--}}
                                {{--                                </div>--}}
                                <img src="{{asset('/images/zpevnik.png')}}" width="100%" style="box-shadow: none">
                                <a href="//zpevnik.proscholy.cz" class="link-title mt-3 px-3">Zpěvník</a>
                                <p class="mt-3 font-weight-light px-3">Zpěvník přichází na pomoc všem scholám,
                                    křesťanským
                                    kapelám,
                                    společenstvím a ostatním, kdo se chtějí modlit hudbou!</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm text-left">
                            <div class="card h-100">
                                {{--                                <div>--}}
                                {{--                                    <img src="https://proscholy.atlassian.net/rest/servicedesk/1/customer/viewport-resources/portal-logo/1/2"--}}
                                {{--                                         height="50px" style="box-shadow: none" class="mb-2">--}}
                                {{--                                </div>--}}
                                <img src="{{asset('/images/regenschori.png')}}" width="100%" style="box-shadow: none">
                                <a href="//regenschori.cz" class="link-title px-3 mt-3">Regenschori</a>
                                <p class="mt-3 font-weight-light px-3">Regenschori je největší česká platforma
                                    sdružující
                                    křesťanské
                                    písně jak pro scholy, tak pro varhaníky.</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm text-left">
                            <div class="card h-100">
                                {{--                                <div>--}}
                                {{--                                    <img src="https://proscholy.atlassian.net/rest/servicedesk/1/customer/viewport-resources/portal-logo/1/2"--}}
                                {{--                                         height="50px" style="box-shadow: none" class="mb-2">--}}
                                {{--                                </div>--}}
                                <img src="{{asset('/images/podpora2.png')}}"
                                     width="100%"
                                     style="box-shadow: none; border-bottom: 1px solid #f5f5f5">
                                <a href="//proscholy.atlassian.net/servicedesk/customer/portals"
                                   class="link-title px-3 mt-3">Podpora
                                    pro
                                    scholy</a>
                                <p class="mt-3 font-weight-light px-3">Regenschori je největší česká platforma
                                    sdružující
                                    křesťanské
                                    písně jak pro scholy, tak pro varhaníky.</p>
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

            <iframe src="https://open.spotify.com/embed/playlist/77giBfU90a4MtpjS5MXDPA"
                    width="300"
                    height="380"
                    frameborder="0"
                    class="widget"
                    allowtransparency="true"
                    allow="encrypted-media"></iframe>
        </div>
    </section>
    {{--    <div style="height: 1000px"></div>--}}
    <section class="my-5">
        <div class="container">

            <h2>Kdo jsme</h2>
            <p>Náš tým tvoří přes 50 dobrovolníků; leadeři schol a kapel,
                odborníci v oblasti chrámové hudby, varhaníci, programátoři
                i autoři známých písní.</p>

            <p>Chceme být zázemím a pomocníkem pro všechny, kteří se chtějí modlit hudbou.
                Pro scholy, kapely, varhaníky, chrámové hudebníky, zpěváky, vedoucí chval i společenství.</p>

        </div>
    </section>

@endsection
