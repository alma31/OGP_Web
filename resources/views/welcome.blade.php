@extends('layouts.app')


@section('title', 'Original Green Park')


@section('content')
    <!--
//////////////////////////////////////////////////////////////
                         DESKTOP
/////////////////////////////////////////////////////////////
 -->

<div class="content-desktop">
    <div class="row">
        <div class="col-md-4"></div>
        <div id="weather_div" class="col-md-4"><div id="weather"></div></div>
        <div class="col-md-4"></div>
    </div>
    <div class="row img_count">
        <div class="col-md-3">
            <img src="img/grabe.png" alt="">
            <p class="compteur" id="compteur_grabe">0</p>
        </div>
        <div class="col-md-3">
            <img src="img/musique.png" alt="">
            <p class="compteur" id="compteur_musique">0</p>
        </div>
        <div class="col-md-3">
            <img src="img/ollie_texte_poster_.png" alt="">
            <p class="compteur" id="compteur_ollie">0</p>
        </div>
        <div class="col-md-3">
            <img src="img/bierre.png" alt="">
            <p class="compteur" id="compteur_bierre">0</p>
        </div>
    </div>
    <div id="spot">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Le spot</h1>
            <img src="http://image.lachainemeteo.com/images/meteoconsult2014/decoupes_marine/00-Common/02-Menu/img-menu-large_Grndlarge.jpg" class="img-fluid center-block" alt="Responsive image">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-center">Original Green Park est un centre nautique familial ouvert à tous,
                du débutant au rider confirmé.</p>
            <p class="text-center">Dans un cadre naturel idyllique, des espaces sont mis à disposition,
                pour rider ou simplement profiter du lieu
                et de l'ambiance cosy et atypique.</p>
            <p class="text-center">Le restaurant à tapas vous accueille d’avril à novembre
            </p>
            <p class="text-center">Ici vous pourrez pratiquer :
                Le téléski · Le wakeboard
                Le wakeskate · Le stand up paddle
                · Le skate électrique</p>
            <p class="text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec porttitor lacus. Proin eu justo turpis. Donec tincidunt sit amet nisl nec elementum. Mauris finibus turpis in elit mattis lobortis. Maecenas in hendrerit augue. Donec egestas elit vel mi pulvinar rhoncus. Sed sollicitudin leo a lorem consequat, sed pulvinar nisi viverra.

                Aenean porta ornare ex, ac maximus quam. Praesent egestas nec nibh viverra blandit. Nunc tempor id justo sed tristique. Proin et vehicula nunc. Vivamus bibendum ex nec augue sollicitudin, sed tincidunt enim imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada justo vel est maximus vehicula. Donec et quam a turpis posuere accumsan.

                Nulla ultrices eu elit nec tempor. Maecenas id nulla tellus. Vivamus auctor leo nec est pellentesque, non dignissim est sagittis. In in consequat eros, at malesuada dui. Ut vestibulum metus eu ipsum eleifend, a dictum sem efficitur. Suspendisse vehicula leo ac luctus pharetra. Quisque ac quam et quam consequat ultricies. Fusce aliquam malesuada ante ut maximus. Donec nibh nisl, condimentum at nulla in, porttitor accumsan sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent pretium sapien urna, vitae hendrerit est ullamcorper et. Donec scelerisque nisi massa, eget blandit ex dictum eu. Donec ante sapien, pulvinar a dui et, maximus fermentum urna. Donec pharetra maximus orci et ultrices. Donec eu elementum eros. Maecenas felis risus, luctus ut justo lacinia, auctor vulputate nibh.

                Pellentesque tincidunt hendrerit elit. Aenean aliquet, felis a sollicitudin egestas, justo nunc convallis augue, condimentum varius odio mauris non dolor. Proin id tincidunt turpis. Nulla quis urna consequat, congue arcu at, bibendum nulla. Integer pharetra odio quis placerat efficitur. Fusce ornare tristique metus vitae tempus. Proin tristique erat quis turpis pellentesque, in ornare orci accumsan. Praesent congue ante dapibus pulvinar faucibus. Quisque vitae augue eu dolor ornare tempus ac vitae erat. Morbi id neque et erat sollicitudin ultrices consequat vel felis. Aenean in tristique ante, sit amet consectetur lorem.
            </p>
        </div>
    </div>
    </div>

    @include("activite")
</div>

    <!--
//////////////////////////////////////////////////////////////
                         RESPONSIVE
/////////////////////////////////////////////////////////////
 -->

    <div class="content-responsive">
        <div id="spot">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Le spot</h1>
                    <div id="weather"></div>
                    <img src="http://image.lachainemeteo.com/images/meteoconsult2014/decoupes_marine/00-Common/02-Menu/img-menu-large_Grndlarge.jpg" class="img-fluid center-block" alt="Responsive image">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Original Green Park est un centre nautique familial ouvert à tous,
                        du débutant au rider confirmé.</p>
                    <p class="text-center">Dans un cadre naturel idyllique, des espaces sont mis à disposition,
                        pour rider ou simplement profiter du lieu
                        et de l'ambiance cosy et atypique.</p>
                    <p class="text-center">Le restaurant à tapas vous accueille d’avril à novembre
                    </p>
                    <p class="text-center">Ici vous pourrez pratiquer :
                        Le téléski · Le wakeboard
                        Le wakeskate · Le stand up paddle
                        · Le skate électrique</p>
                    <p class="text-center">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec porttitor lacus. Proin eu justo turpis. Donec tincidunt sit amet nisl nec elementum. Mauris finibus turpis in elit mattis lobortis. Maecenas in hendrerit augue. Donec egestas elit vel mi pulvinar rhoncus. Sed sollicitudin leo a lorem consequat, sed pulvinar nisi viverra.

                        Aenean porta ornare ex, ac maximus quam. Praesent egestas nec nibh viverra blandit. Nunc tempor id justo sed tristique. Proin et vehicula nunc. Vivamus bibendum ex nec augue sollicitudin, sed tincidunt enim imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur malesuada justo vel est maximus vehicula. Donec et quam a turpis posuere accumsan.

                        Nulla ultrices eu elit nec tempor. Maecenas id nulla tellus. Vivamus auctor leo nec est pellentesque, non dignissim est sagittis. In in consequat eros, at malesuada dui. Ut vestibulum metus eu ipsum eleifend, a dictum sem efficitur. Suspendisse vehicula leo ac luctus pharetra. Quisque ac quam et quam consequat ultricies. Fusce aliquam malesuada ante ut maximus. Donec nibh nisl, condimentum at nulla in, porttitor accumsan sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent pretium sapien urna, vitae hendrerit est ullamcorper et. Donec scelerisque nisi massa, eget blandit ex dictum eu. Donec ante sapien, pulvinar a dui et, maximus fermentum urna. Donec pharetra maximus orci et ultrices. Donec eu elementum eros. Maecenas felis risus, luctus ut justo lacinia, auctor vulputate nibh.

                        Pellentesque tincidunt hendrerit elit. Aenean aliquet, felis a sollicitudin egestas, justo nunc convallis augue, condimentum varius odio mauris non dolor. Proin id tincidunt turpis. Nulla quis urna consequat, congue arcu at, bibendum nulla. Integer pharetra odio quis placerat efficitur. Fusce ornare tristique metus vitae tempus. Proin tristique erat quis turpis pellentesque, in ornare orci accumsan. Praesent congue ante dapibus pulvinar faucibus. Quisque vitae augue eu dolor ornare tempus ac vitae erat. Morbi id neque et erat sollicitudin ultrices consequat vel felis. Aenean in tristique ante, sit amet consectetur lorem.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection