<!--
//////////////////////////////////////////////////////////////
                         HEADER RESPONSIVE
/////////////////////////////////////////////////////////////
 -->
<div class="header_reponsive">
<header>
        <h1 class="title_nav_responsive">{{ $name_page }}</h1>
    <img class="logo_img_responsive" src="img/logo_ogp_blanc.svg" alt="">
    <div id="js-iconMenu" class="iconMenu">
        <div class="iconMenu-line  iconMenu--lineTop"></div>
        <div class="iconMenu-line  iconMenu--lineCenter"></div>
        <div class="iconMenu-line  iconMenu--lineBottom"></div>
    </div>
</header>
<nav  class="mainMenu  js-toggleEffect">
    <div class="menu_scoll">
    <ul class="mainMenu-list">
        <li class="mainMenu-item">
            <a href="{{url('spot')}}" class="mainMenu-link">
                LE SPOT
            </a>
        </li>
        <li class="mainMenu-item">
            <a href="{{url('activite')}}" class="mainMenu-link">
                Les ACTIVITES
            </a>
        </li>
        <li class="mainMenu-item">
            <a href="{{url('restauration')}}" class="mainMenu-link">
                LA RESTAURATION
            </a>
        </li>
        <li class="mainMenu-item">
            <a href="{{url('event')}}" class="mainMenu-link">
                LES EVENEMENTS
            </a>
        </li>
        <li class="mainMenu-item">
            <a href="{{url('tarif')}}" class="mainMenu-link">
               LES TARIF
            </a>
        </li>
        <li class="mainMenu-item">
            <a href="{{url('galerie')}}" class="mainMenu-link">
               LA GALERIE
            </a>
        </li>
        <li class="mainMenu-item">
            <a href="{{url('contact')}}" class="mainMenu-link">
               CONTACT
            </a>
        </li>
    </ul>
    </div>
</nav>
</div>
<!--
//////////////////////////////////////////////////////////////
                         HEADER DESKTOP
/////////////////////////////////////////////////////////////
 -->

<!-- <div id="headerMrS">
    <div class="header sales active">
        <div class="header-content">
            <img style="width: 100%;height: 100%;" src="img/diapo_1_ogp.jpg" alt="" />
        </div>
    </div>
    <div class="header antique">
        <div class="header-content">
            <img style="width: 100%;height: 100%;" src="img/diapo_2_ogp.jpg" alt="" />
        </div>
    </div>
    <div class="header modern">
        <div class="header-content">
            <img style="width: 100%;height: 100%;" src="img/diapo_3_ogp.jpg" alt="" />
        </div>
    </div>
</div>
<div class="bar_white"></div> -->
<div id="headerMrS">
    <video preload="auto" loop autoplay="true" width="100%"  muted height="300" >
        <source src="video/OriginalGreenPark.mp4" type="video/mp4" />
    </video>
</div>
<div class="bar_white"></div>

