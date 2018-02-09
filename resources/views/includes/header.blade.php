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
                <i class="md12 material-icons">place</i>LE SPOT
            </a>
        </li>
        <li class="mainMenu-item">
            <a href="{{url('activite')}}" class="mainMenu-link">
                <i class="md12 material-icons">account_circle</i>Les activités
            </a>
        </li>
        <li class="mainMenu-item">
            <a href="{{url('restauration')}}" class="mainMenu-link">
                <i class="md12 material-icons">work</i>LA RESTAURATION
            </a>
        </li>
        <li class="mainMenu-item">
            <a href="{{url('event')}}" class="mainMenu-link">
                <i class="md12 material-icons">note_add</i>Les événements
            </a>
        </li>
        <li class="mainMenu-item">
            <a href="{{url('tarif')}}" class="mainMenu-link">
                <i class="md12 material-icons">note_add</i>Les tarif
            </a>
        </li>
        <li class="mainMenu-item">
            <a href="{{url('galerie')}}" class="mainMenu-link">
                <i class="md12 material-icons">note_add</i>Galerie
            </a>
        </li>
        <li class="mainMenu-item">
            <a href="{{url('contact')}}" class="mainMenu-link">
                <i class="md12 material-icons">note_add</i>Contact
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
    <ul class="rslides">
        <li><img src="img/diapo_1_ogp.jpg" alt=""></li>
        <li><img src="img/diapo_2_ogp.jpg" alt=""></li>
        <li><img src="img/diapo_3_ogp.jpg" alt=""></li>
    </ul>
</div>
<div class="bar_white"></div>