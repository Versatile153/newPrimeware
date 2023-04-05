
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="Primewaretrades is an investment company that aggregates funds for investment in bitcoin and forex trading.                                                                                                                                                                                                                                                                                                                                                                                                        ">
    <meta name="keywords" content="Primewaretrades, bitcoin trading, forex, investment, trading                                                                                                                                                                                                                                                                                                                                                                                                                                                       ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard</title>
    <!-- Bootstrap CSS -->

    

    <!-- Font Icon Styles -->
    <link rel="stylesheet" href="https://primestocktrades.com/m_cust/dash/assets/dist/css/icons.css">
    <!-- /font icon Styles -->
    <!-- Load Styles -->
    <link rel="stylesheet" href="https://primestocktrades.com/m_cust/dash/assets/dist/css/bootstrap-formhelpers.min.css">
    <link rel="stylesheet" href="https://primestocktrades.com/m_cust/dash/assets/dist/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://primestocktrades.com/m_cust/dash/assets/dist/css/chartist.min.css">
    <link rel="stylesheet" href="https://primestocktrades.com/m_cust/dash/assets/dist/css/style.min.css">
    <!-- /load styles -->
    <!-- include summernote css/js -->
    <link rel="stylesheet" href="http://translate.google.com/translate?js=n&sl=auto&tl=destination_language&u=http://example.net">
    <link href="https://primestocktrades.com/m_cust/dash/assets/dist/summernote/summernote-bs4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://primestocktrades.com/m_cust/dash/assets/dist/css/intlTelInput.css">
    
    
    
   <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<style>
    
body.dark {
	--light: #0C0C1E;
	--grey: #060714;
	--dark: #FBFBFB;
}
</style>
    <script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/jquery.min.js"></script>
    </head>
    <body class="dt-header--fixed theme-dark dt-layout--full-width dt-sidebar--fixed o-auto">
        <!-- Root -->
        <div class="dt-root op-1">
            <div class="dt-root__inner">
                                <!-- Header -->
                <header class="dt-header">
                    <!-- Header container -->
                    <div class="dt-header__container">
                        <!-- Brand -->
                        <div class="dt-brand">
                            <!-- Brand tool -->
                            <div class="dt-brand__tool" data-toggle="main-sidebar">
                                <div class="hamburger-inner"></div>
                            </div>
                            <!-- /brand tool -->

                            <!-- Brand logo -->
                            <span class="dt-brand__logo">
							<a href="/" class="fxt-logo"><img style="height: 150px; 
                            margin-top:1rem;" src="{{ asset('/storage/images/JxZzyOwMTIiMwrL6YErxStgJCXHX2067rm32AiKW.png') }}"
                             alt="Logo"></a>
                            </span>
                            <!-- /brand logo -->

                        </div>
                        <!-- /brand -->

                        <!-- Header toolbar-->
                        <div class="dt-header__toolbar">


                            <div class="search-box d-none d-lg-block">
                                                            <h1 class="dt-page__title mt-4" style="margin-left: -1.5em;">Home <span class="breadcrumb-arrow-right"></span> message Admin:
                                                          
                                                               
                                                            </h1>
                                                            <strong class="btn btn-primary">
                                                                You are warmly welcome  {{ Auth::user()->name }}
                                                            </strong>
                                                          
                                                           
                                                        </div>

                            <!-- Header Menu Wrapper -->
                            <div class="dt-nav-wrapper">
                                <!-- Header Menu -->
                                <ul class="dt-nav d-lg-none">
                                    <li class="dt-nav__item dt-notification-search dropdown">

                                        <!-- Dropdown Link -->
                                        <a href="#" class="dt-nav__link dropdown-toggle no-arrow" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"> <i
                                                class="icon icon-search icon-fw icon-lg"></i> </a>
                                        <!-- /dropdown link -->

                                        <!-- Dropdown Option -->
                                        <div class="dropdown-menu">

                                            <!-- Search Box -->
                                            <form class="search-box right-side-icon">
                                                <input class="form-control form-control-lg" type="search"
                                                    placeholder="Search in app...">
                                                <button type="submit" class="search-icon"><i
                                                        class="icon icon-search icon-lg"></i></button>
                                            </form>
                                            <!-- /search box -->

                                        </div>
                                        <!-- /dropdown option -->

                                    </li>
                                </ul>
                                <!-- /header menu -->
                                <!-- Header Menu -->
<!--                                <ul class="dt-nav">-->
<!--                                    <li class="dt-nav__item dropdown">-->

                                        <!-- Dropdown Link -->
<!--                                        <a href="#" class="dt-nav__link dropdown-toggle" id='currentLang' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                                        <img class="flag-icon flag-icon-rounded flag-icon-lg mr-1m" src="https://primestocktrades.com/m_cust/dash/uploads/gb-eng.png">-->
<!--                                        <span>EN</span> </a>-->
<!--                                        <input style="background:black;" type="checkbox" id="switch-mode">-->
                                        <!-- /dropdown link -->

                                        <!-- Dropdown Option -->
<!--                                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(8px, 72px, 0px); top: 0px; left: 0px; will-change: transform;">-->
<!--                                            <button class="dropdown-item sitelangChange" type="button" data-id="https://primestocktrades.com/m_cust/dash/switchlang/English">-->
<!--<img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://primestocktrades.com/m_cust/dash/uploads/gb-eng.png"><span>English</span> </button>-->
<!--                                            <button class="dropdown-item sitelangChange" type="button" data-id="https://primestocktrades.com/m_cust/dash/switchlang/Russian">-->
<!--<img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://primestocktrades.com/m_cust/dash/uploads/russia.png"><span>Russian</span> </button>-->
<!--                                            <button class="dropdown-item sitelangChange" type="button" data-id="https://primestocktrades.com/m_cust/dash/switchlang/Português">-->
<!--<img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://primestocktrades.com/m_cust/dash/uploads/portuguese.png"><span>Português</span> </button>-->
<!--                                            <button class="dropdown-item sitelangChange" type="button" data-id="https://primestocktrades.com/m_cust/dash/switchlang/Español">-->
<!--<img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://primestocktrades.com/m_cust/dash/uploads/spain.png"><span>Español</span> </button>-->
<!--                                            <button class="dropdown-item sitelangChange" type="button" data-id="https://primestocktrades.com/m_cust/dash/switchlang/German">-->
<!--<img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://primestocktrades.com/m_cust/dash/uploads/germany.png"><span>German</span> </button>-->
<!--                                        </div>-->
                                        <!-- /dropdown option -->

<!--                                    </li>-->
<!--                                </ul>-->
                                <!-- /header menu -->

                                <!-- Header Menu -->
                                <ul class="dt-nav">
                                    <li class="dt-nav__item dropdown">

                                        <!-- Dropdown Link -->
                                        <a href="#" class="dt-nav__link dropdown-toggle no-arrow dt-avatar-wrapper"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img class="dt-avatar size-30"
                                                src="https://primestocktrades.com/m_cust/dash/assets/dist/img/avatar.png"
                                                alt="eze cecc">
                                            <span class="dt-avatar-info d-none d-sm-block">
                                                <span
                                                    class="dt-avatar-name">{{ Auth::user()->name }}</span>

                                        <!-- /dropdown link -->

                                        <!-- Dropdown Option -->
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="/profile">
                                                {{ __('my profile') }}
                                            </a>
        
                                        </div>
                                        <!-- /dropdown option -->

                                    </li>
                                </ul>
                                
                                
                                  <div id="google_translate_element" class="btn btn-primary" ></div> 
                                <!-- /header menu -->
                            </div>
                            <!-- Header Menu Wrapper -->

                        </div>
                        <!-- /header toolbar -->

                    </div>
                    <!-- /header container -->

                </header>
                <!-- /header -->

                <!-- Site Main -->
                <main class="dt-main" style="    background-color:rgb(7, 7, 50)";
>
                    <!-- Sidebar -->
                    <aside id="main-sidebar" class="dt-sidebar ps ps--active-y">
                                                <div class="dt-sidebar__container mt-10">

                            <!-- Sidebar Navigation -->
                            <ul class="dt-side-nav">
                                                                <li
                                    class="dt-side-nav__item selected">
                                    <a href="/home"
                                        class="dt-side-nav__link dt-active"
                                        title="Dashboard">
                                        <i class="icon icon-dashboard icon-fw icon-lg"></i>
									<span class="dt-side-nav__text " style="color:white">Main Dashboard
                                      
                                    </span>
                                    
                                        
                                
                                    </a>
                                   
                                </li>
                                <li
                                    class="dt-side-nav__item ">
                                    <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow"
                                        title="Dashboard">
                                        <i class="icon icon-revenue2 icon-fw icon-lg"></i> <span
                                            class="dt-side-nav__text">Deposits</span> </a>

                                    <!-- Sub-menu -->
                                    <ul class="dt-side-nav__sub-menu display-n">
                                        <li
                                            class="dt-side-nav__item open ">
                                            <a href="/payment_account"
                                                class="dt-side-nav__link "
                                                title="Traffic">
                                                <span class="dt-side-nav__text">Deposit funds</span> </a>
                                        </li>

                                        <li class="dt-side-nav__item">
                                            <a href="/view_deposit"
                                                class="dt-side-nav__link "
                                                title="Revenue">
                                                <span class="dt-side-nav__text">View deposits</span> </a>
                                        </li>
                                    </ul>
                                    <!-- /sub-menu -->

                                </li>
                                <li
                                    class="dt-side-nav__item ">
                                    <a href="#" class="dt-side-nav__link dt-side-nav__arrow"
                                        title="Dashboard">
                                        <i class="icon icon-revenue-new icon-fw icon-lg"></i><span
                                            class="dt-side-nav__text">Withdrawals</span> </a>

                                    <!-- Sub-menu -->
                                    <ul class="dt-side-nav__sub-menu display-n">
                                        <li
                                            class="dt-side-nav__item open ">
                                            <a href="/withdraw"
                                                class="dt-side-nav__link "
                                                title="Traffic">
                                                <span class="dt-side-nav__text">Withdraw funds</span> </a>
                                        </li>

                                        <li class="dt-side-nav__item">
								<a href="/view_deposit"
                                                class="dt-side-nav__link "
                                                title="Revenue">
                                                <span class="dt-side-nav__text">View withdrawals</span> </a>
                                        </li>
                                    </ul>
                                    <!-- /sub-menu -->

                                </li>
                                  @if(Auth::user()->access == "admin")
                  <li><a style="color:red;font-weight:bolder; margin-left:3.6rem;" class="dropdown-item" href="/admin">Admin</a></li>
                  @endif
                                <li
                                    class="dt-side-nav__item ">
                                    <a href="#"
                                        class="dt-side-nav__link "
                                        title="Earnings">
                                        <i class="icon icon-dashboard icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">Sent messages</span>
                                        <span style="background:red;border-radius: 50%; color:white;">{{count($myMessages)}}</span>
                                    </a>
                                </li>
                                 <li
                                    class="dt-side-nav__item ">
                                    <a href="/my_mess"
                                        class="dt-side-nav__link "
                                        title="Earnings">
                                        <i class="icon icon-dashboard icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">my messages</span>
                                        <span style="background:red;border-radius: 50%; color:white;">{{count($my_mess)}}</span>
                                    </a>
                                </li>
                                
                                 <li
                                    class="dt-side-nav__item ">
                                    <a href="/ref"
                                        class="dt-side-nav__link "
                                        title="My Referrals">
                                        <i class="icon icon-users icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">My Referrals</span>
                                    </a>
                                </li>
                                
                                <li
                                    class="dt-side-nav__item ">
                                    <a href="/help" class="dt-side-nav__link"
                                        title="Support">
                                        <i class="icon icon-mail icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">Help Desk</span>
                                    </a>
                                </li>
                                
                                
                                <!-- <li-->
                                <!--    class="dt-side-nav__item ">-->
                                <!--    <a href="#" class="dt-side-nav__link"-->
                                <!--        title="Support">-->
                                <!--        <i class="icon icon-mail icon-fw icon-lg"></i>-->
                                <!--        <span class="dt-side-nav__text">Messages</span>-->
                                <!--        <span style="background:red;border-radius: 50%; color:white;">0</span>-->
                                <!--    </a>-->
                                <!--</li>-->
                                
                                
                                	<li style="margin-left:3.8rem;">
			 
                                            <a style="color:red" class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        
			</li>
                                
                                
                                
                                
                                
                                
                                <!-- Menu Header -->

                                <!-- /menu item -->

                            </ul>
                            <!-- /sidebar navigation -->

                        </div>
                                            </aside>
                    <!-- /sidebar -->
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           <form style="margin:auto;" action="/mess" method="post">
                 @csrf
      <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="{{$user->email}}" style="width:350px;">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Messsage Area</label>
  <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
 <input type="submit" value="Send Message" class="btn btn-primary">
           
         </form>  
           
           
    <!-- /site content -->
    <script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/functions.js"></script><!-- Footer -->
<footer class="dt-footer">
<a href="/" class="fxt-logo"><img style="height: 150px; 
                            margin-top:1rem;" src="{{ asset('/storage/images/JxZzyOwMTIiMwrL6YErxStgJCXHX2067rm32AiKW.png') }}"
                             alt="Logo"></a>
    Copyright Primewaretrades © 2023</footer>
<!-- /footer -->

</div>
<!-- /site content wrapper -->
</main>
</div>
</div>
<script>
    $(".sitelangChange").click(function(e){
    var actionurl = $(this).attr("data-id");
    $.get(actionurl, function(data){
        var content = JSON.parse(data);
        setTimeout(
            function() {
                location.reload();
            }, 1000);
    });
});

$('.close').on('click', function(e){
    $('.drawer').removeClass('open');
})

$('.customizer-toggle').on('click', function(e){
    $('.drawer').addClass('open');
})

$('.choose-option__icon').on('click', function(e){
    var actionurl = $(this).attr("data-url");
    $.get(actionurl, function(data){
        var content = JSON.parse(data);

        setTimeout(
            function() {
                window.location.replace("./home");
            }, 1000);
    });
})
</script>
<script type="text/javascript">// <![CDATA[
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
    // ]]></script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
      
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/summernote/summernote-bs4.js"></script>
{{-- <script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/lang.js"></script> --}}
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/summernote/editor-summernote.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/moment/moment.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/contact.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/perfect-scrollbar.min.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/masonry.pkgd.min.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/sweetalert2.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/customizer.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/Chart.min.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/chartist.min.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/script.js"></script>

<script><
<script>




</script>

</script>
</body>
</html>
