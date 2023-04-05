<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="PrimestockTrades is an investment company that aggregates funds for investment in bitcoin and forex trading.                                                                                                                                                                                                                                                                                                                                                                                                        ">
    <meta name="keywords" content="primestocktrades, bitcoin trading, forex, investment, trading                                                                                                                                                                                                                                                                                                                                                                                                                                                       ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Earnings</title>
    <!-- Bootstrap CSS -->

    <link rel="shortcut icon" href="https://primestocktrades.com/m_cust/dash/uploads/prime25.png">

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
    <link href="https://primestocktrades.com/m_cust/dash/assets/dist/summernote/summernote-bs4.css" rel="stylesheet">
    <link rel="stylesheet" href="https://primestocktrades.com/m_cust/dash/assets/dist/css/intlTelInput.css">

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
                                                            <form>
                                                                    <input type="hidden" name="csrf_test_name"  />
                                    <div class="input-group">
                                        <input style="color:red;font-weigth:bolder;" class="form-control" placeholder="Search Earnings"
                                        
                                        
                                            name="searchText" readonly id="h1" value=" " type="search">
                                        <span class="search-icon"><i class="icon icon-search icon-lg"></i></span>
                                        <div class="input-group-append">
                                            
                                           
                                            <button  class="btn btn-primary" type="submit">Earnings                                            </button>
                                        </div>
                                    </div>
                                </form>
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
                                
                                <!-- /header menu -->

                                <!-- Header Menu -->
                                <ul class="dt-nav">
                                    <li class="dt-nav__item dropdown">

                                        <!-- Dropdown Link -->
                                        <a href="#" class="dt-nav__link dropdown-toggle no-arrow dt-avatar-wrapper"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{-- <img class="dt-avatar size-30"
                                                src="https://primestocktrades.com/m_cust/dash/assets/dist/img/avatar.png"
                                                alt="eze cecc"> --}}
                                            <span class="dt-avatar-info d-none d-sm-block">
                                                <span
                                                    class="dt-avatar-name">{{ Auth::user()->name }}</span>

                                        <!-- /dropdown link -->

                                        <!-- Dropdown Option -->
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a  class="dropdown-item btn btn-danger" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                        <!-- /dropdown option -->

                                    </li>
                                </ul>
                                <!-- /header menu -
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
                <main class="dt-main">
                    <!-- Sidebar -->
                    <aside id="main-sidebar" class="dt-sidebar ps ps--active-y">
                                                <div class="dt-sidebar__container mt-10">

                            <!-- Sidebar Navigation -->
                            <ul class="dt-side-nav">
                            
                                                                <li
                                    class="dt-side-nav__item ">
                                    <a href="/home"
                                        class="dt-side-nav__link "
                                        title="Dashboard">
                                        <i class="icon icon-dashboard icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text"> Main Dashboard</span>
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
                                            <a href="payment_account"
                                                class="dt-side-nav__link "
                                                title="Traffic">
                                                <span class="dt-side-nav__text">Deposit funds</span> </a>
                                        </li>

                                        <li class="dt-side-nav__item">
                                            <a href="view_deposit"
                                                class="dt-side-nav__link "
                                                title="Revenue">
                                                <span class="dt-side-nav__text">View deposits</span> </a>
                                        </li>
                                    </ul>
                                    <!-- /sub-menu -->

                                </li>
                                <li
                                    class="dt-side-nav__item ">
                                    <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow"
                                        title="Dashboard">
                                        <i class="icon icon-revenue-new icon-fw icon-lg"></i><span
                                            class="dt-side-nav__text">Withdrawals</span> </a>

                                    <!-- Sub-menu -->
                                    <ul class="dt-side-nav__sub-menu display-n">
                                        <li
                                            class="dt-side-nav__item open ">
                                            <a href="withdraw"
                                                class="dt-side-nav__link "
                                                title="Traffic">
                                                <span class="dt-side-nav__text">Withdraw funds</span> </a>
                                        </li>

                                        <li class="dt-side-nav__item">
                                            <a href="view"
                                                class="dt-side-nav__link "
                                                title="Revenue">
                                                <span class="dt-side-nav__text">View withdrawals</span> </a>
                                        </li>
                                    </ul>
                                    <!-- /sub-menu -->

                                </li>
                                <li
                                    class="dt-side-nav__item selected">
                                    <a href="earn"
                                        class="dt-side-nav__link dt-active"
                                        title="Earnings">

                                        <span class="dt-side-nav__text">Earnings</span>
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
                                    <a href="help" class="dt-side-nav__link"
                                        title="Support">

                                        <span  class="dt-side-nav__text">Help Desk</span>
                                    </a>
                                </li>
                                <!-- Menu Header -->

                                <!-- /menu item -->

                            </ul>
                            <!-- /sidebar navigation -->

                        </div>
                                            </aside>
                    <!-- /sidebar -->
                    <!-- Site Content Wrapper -->
<div class="dt-content-wrapper">
    <!-- Site Content -->
    <div class="dt-content">
        <!-- Profile -->
        <div class="profile">
            <!-- Profile Banner -->
            <div class="profile__banner">
                <!-- Page Header -->
                <div class="dt-page__header">
                    <h1 onclick="event.preventDefault();console.log("hello")" class="dt-page__title text-white display-i">
                    Earnings                    </h1>
                                        <div class="dt-entry__header mt-1m">
                        <!-- Entry Heading -->
                        <div class="dt-entry__heading">
                        </div>
                        <!-- /entry heading -->
                    </div>
                </div>
                <!-- /page header -->
                <div class="profile__banner-detail">
                    <!-- Avatar Wrapper -->
                    <div class="col-12">
                        <div class="row">
                                                        <div class="col-sm-4 col-12">
                                <!-- Card -->
                                <div class="dt-card dt-card__full-height text-dark">
                                    <!-- Card Body -->
                                    <div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
                                        <span class="badge badge-secondary badge-top-right">Total Earnings</span>
                                        <!-- Media -->
                                        <div class="media">
                                           <img style="width:40px; margin-right:1rem;" src="https://imgs.search.brave.com/LlaglRYQDYlI6Cqg2f0qGnlCI8hw6HNlCvVAiLig-RA/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC40/Yi1MdmxLUmtnZldE/YUR2Ri1hcVpnSGFI/YSZwaWQ9QXBp">
                                            <!-- Media Body -->
                                            <div class="media-body">
                                                <div class="display-3 font-weight-600 mb-1 init-counter" style="color:black;">
                                                    
                                                    
                                  
                                              
                                            {{$earn - DB::table('withdrawals')
    ->where('user_id', $user->id)
    ->where('status', 'paid')
    ->sum('amount')- DB::table('reinvests')
    ->where('user_id', $user->id)
    ->sum('amount');}}
                                           
                                                
                                            </div>
                                                <span class="d-block">Profit Balance(withdrawable)</span>
                                            </div>
                                            <!-- /media body -->
                                        </div>
                                        <!-- /media -->
                                    </div>
                                    <!-- /card body -->
                                </div>
                                <!-- /card -->
                            </div>
                                                        <!-- Grid Item -->
                            <div class="col-sm-4 col-12">

                                <!-- Card -->
                                <div class="dt-card dt-card__full-height text-dark">

                                    <!-- Card Body -->
                                    <div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
                                        <span class="badge badge-secondary badge-top-right">
                                                                                    Interest earnings                                        </span>
                                        <!-- Media -->
                                        <div class="media">

                                         <img style="width:55px;margin-right:1rem;" src="https://imgs.search.brave.com/YdTkRRrhiI5Tb0Q9RUQQT-_xsCBd5qD4nhgpq54Zw-E/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2Uy/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC43/eGZHak93WlRTdlBR/TDNmNEJDQUlBSGFI/YSZwaWQ9QXBp">

                                            <!-- Media Body -->
                                            <div class="media-body">
                                                <div class="display-3 font-weight-600 mb-1 init-counter">
                                                  
                                             <h2 style="color:black;
                                            "> $00</h2>
                                                                                 </div>
                                                <span class="d-block">
                                                    Interest earnings                                                </span>
                                            </div>
                                            <!-- /media body -->

                                        </div>
                                        <!-- /media -->
                                    </div>
                                    <!-- /card body -->

                                </div>
                                <!-- /card -->

                            </div>
                            <!-- Grid Item -->

                            <!-- Grid Item -->
                            <div class="col-sm-4 col-12">

                                <!-- Card -->
                                <div class="dt-card dt-card__full-height text-dark">

                                    <!-- Card Body -->
                                    <div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
                                        <span class="badge badge-secondary badge-top-right">
                                            Primeware trade bonus                                        </span>
                                        <!-- Media -->
                                        <div class="media">

                                             <img style="width:55px;margin-right:1rem;" src="https://imgs.search.brave.com/DtiI0ws-JZjoq5GfY3DYnEJbtc-tz_I_aAefSPwryk0/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2U0/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5N/aVMxLS1ydEZRT1da/TWdKN3BJZVJBSGFI/YSZwaWQ9QXBp">

                                            <!-- Media Body -->
                                            <div class="media-body">
                                                <div class="display-3 font-weight-600 mb-1 init-counter" id="h1">
                                                    @if (count($deposits)>0)
                                        
									   00
                                              
                                            
                                              
																
										
										
                                             @else
                                             <h2 style="color:black;
                                            "> $00</h2>
                                             @endif                                    </div>
                                                <span class="d-block">
                                                    Primeware trade                                                </span>
                                            </div>
                                            <!-- /media body -->

                                        </div>
                                        <!-- /media -->
                                    </div>
                                    <!-- /card body -->

                                </div>
                                <!-- /card -->

                            </div>
                            <!-- Grid Item -->

                        </div>
                    </div>
                    <!-- /avatar wrapper -->
                </div>

            </div>
            <!-- /profile banner -->

            <!-- Profile Content -->
            <div class="profile-content">

                <!-- Grid -->
                <div class="row">

                    <!-- Grid Item -->
                    <div class="col-xl-12 col-12 order-xl-1">
                        <!-- Card -->
                        <div class="dt-card">
                                                        <div class="card-body">

                                    <!-- Card Title-->
                                    <h2 class="card-title">Want to re invest from your earnings?</h2>
                                    <!-- Card Title-->
                                    <!-- Card Text-->
                                    <p class="card-text">
                                  click on the link below,..</p>
                                    <!-- /card text-->

                                    <!-- Card Link-->
                                    <a href="/reinvest"
                                        class="btn  text-uppercase" style="    background-color: rgb(4, 4, 65);color:white;
                                        font-weight:bolder;
">Re invest from earnings?</a>
                                    <!-- /card link-->





                          
        <!--                              <h5 type="hidden"  style="display:none;" onclick="count()">count</h5>-->
        <!--<h1  style="display:none;" class="h1">{{ $count }}</h1>-->
        <!--    <script defer>-->
        <!--    let counter={{ $count }};-->
        <!--    let h1= document.querySelector('.h1')-->
        <!--   function count(){-->
           
        <!--    counter=counter+0.00000000072312-->
        <!--    h1.innerHTML=counter-->
            
         
        <!--   }-->

        <!--   setInterval(count,100)-->
        <!--</script>                         -->








                            </div>
                            <!-- /card -->
                        </div>
                        <!-- /grid item -->

                        <div class="dt-card__body">
                            <!-- Modal -->
                            <div class="modal fade display-n" id="accountsModal" tabindex="-1" role="dialog" aria-labelledby="model-8" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">

                                    <!-- Modal Content -->
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="model-8">Payment Account</h3>
                                            <button type="button" class="close"
                                                data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <!-- /modal header -->

                                        <!-- Modal Body -->
                                        <div class="modal-body">
                                            <div class="row" id="paymentList">
                                            </div>
                                        </div>
                                        <!-- /modal body -->

                                        <!-- Modal Footer -->
                                        <div class="modal-footer">
                                            <button type="button"
                                                class="btn btn-secondary btn-sm"
                                                data-dismiss="modal">Cancel
                                            </button>
                                        </div>
                                        <!-- /modal footer -->
                                        </form>
                                    </div>
                                    <!-- /modal content -->

                                </div>
                            </div>
                            <!-- /modal -->
                            <div class="modal fade display-n" id="pricemodal" tabindex="-1" role="dialog"
                                aria-labelledby="model-8" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">

                                    <!-- Modal Content -->
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="model-8">View Payment Amount Info</h3>
                                            <button type="button" class="close"
                                                data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <!-- /modal header -->

                                        <!-- Modal Body -->
                                        <div class="modal-body">
                                            <p>Withdrawn Amount: <b id="fullamount"></b></p>
                                            <p>Transaction Fees: <b id="fullamountfees"></b></p>
                                            <p>Amount To Receive: <b id="fullamountlessfees"></b></p>
                                        </div>
                                        <!-- /modal body -->

                                        <!-- Modal Footer -->
                                        <div class="modal-footer">
                                            <button type="button"
                                                class="btn btn-secondary btn-sm"
                                                data-dismiss="modal">Cancel                                            </button>
                                        </div>
                                        <!-- /modal footer -->

                                    </div>
                                    <!-- /modal content -->

                                </div>
                            </div>
                            <!-- /modal -->
                                                    </div>

                    </div>
                    <!-- /grid -->

                </div>
                <!-- /profile content -->

            </div>
            <!-- /Profile -->

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade display-n" id="modal" tabindex="-1" role="dialog"
        aria-labelledby="model-8" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <!-- Modal Content -->
            <div class="modal-content">
                <form action="" id="modalForm" method="post" accept-charset="utf-8">
                                  <input type="hidden" name="csrf_test_name" value="4de925c3f1190a55e4c39002510aec4e" />
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h3 class="modal-title" id="model-8"></h3>
                        <button type="button" class="close"
                            data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <!-- /modal header -->
                    <!-- Modal Body -->
                    <!-- Form Group -->
                    <div class="modal-body mb--10 hide" id="reinvestPlans">
                        <div class="form-group">
                            <label for="fname">Select your preferred investment plan</label>
                            <select class="form-control" name="plan" id="simple-select">
                                <option value="" selected disabled hidden>Select your preferred investment plan</option>
                                                            </select>
                        </div>
                    </div>
                    <!-- /form group -->
                    <div class="modal-body" id="modalBody">
                    </div>
                    <!-- /modal body -->
                    <!-- Modal Footer -->
                    <div class="modal-footer" id="modalFooter">
                        <button type="button"
                            class="btn btn-secondary btn-sm"
                            data-dismiss="modal">Cancel                        </button>
                        <div id="continue"></div>
                    </div>
                    <!-- /modal footer -->
                </form>
            </div>
            <!-- /modal content -->
        </div>
    </div>
    <!-- /modal -->
    <script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/trans.js"></script>
   
    </script><!-- Footer -->
<footer class="dt-footer">
  <span class="dt-brand__logo">
                               <a href="/" class="fxt-logo"><img style="height: 150px; 
                            margin-top:1rem;" src="{{ asset('/storage/images/JxZzyOwMTIiMwrL6YErxStgJCXHX2067rm32AiKW.png') }}"
                             alt="Logo"></a>
                            </span>
    Copyright Primewaretrades © 2023</footer>
<!-- /footer -->

</div>



<!-- /site content wrapper -->
</main>
</div>
</div>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/summernote/summernote-bs4.js"></script>
<script src="https://primestocktrades.com/m_cust/dash/assets/dist/js/lang.js"></script>
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
</body>
</html>
