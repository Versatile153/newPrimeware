
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="PrimestockTrades is an investment company that aggregates funds for investment in bitcoin and forex trading.                                                                                                                                                                                                                                                                                                                                                                                                        ">
    <meta name="keywords" content="primestocktrades, bitcoin trading, forex, investment, trading                                                                                                                                                                                                                                                                                                                                                                                                                                                       ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Bank Transfer</title>
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
    
    
<script defer>
  let text = document.getElementById('myText').innerHTML;
  const copyContent = async () => {
    try {
      await navigator.clipboard.writeText(text);
      console.log('Content copied to clipboard');
    } catch (err) {
      console.error('Failed to copy: ', err);
    }
  }
</script>
    
    <style>
        
        *{
    margin: 0;
    padding: 0%;
    box-sizing: border-box;
}
body{
    /*font-family: cursive;*/
    /* background-color: rgb(3, 3, 76); */
}
.container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}

.label{
    padding: 10px;
    font-size: 18px;
    color:#111;

}
.copy-text{
    position: relative;
    padding: 10px;
    display: flex;
    background-color: white;
    border: 1px solid black;
    display: flex;

}
.copy-text input.text{
    color: #555;
    padding: 5px;
    border: none;
    font-size: 18px;
    outline: none;
}
.copy-text button{
    padding: 4px;
    background:#5784f5;
    outline: none;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}
.copy-text button:active{
    background-color:#809ce2;
}
.copy-text button:before{
    content: 'copied';
    position: absolute;
    /* padding: 4px 6px; */
    font-size: 15px;
    top: -50px;
    display: none;
    background-color: #5c81dc;
    right: 0px;
}
.copy-text button::after{
    content: '';
    position: absolute;
    top: -20px;
    right: 25px;
    display: none;
    width: 10px;
    background-color: #5c81dc;
    height: 10px;
    transform: rotate(45deg);

}
    </style>
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
                                {{-- <a class="dt-brand__logo-link" href="">
                                    <img width="" class="d-none d-sm-inline-block w-100" src="https://media.istockphoto.com/id/1369738799/photo/blue-round-clock-on-white-background.jpg?b=1&s=170667a&w=0&k=20&c=aBwVsg0PbTUoBIeYAX7M7uhT47cEihCbfml1q-YWyls=" alt="logo">
                                    <img class="dt-brand__logo-symbol d-sm-none" src="" alt="logo">
                                    </a> --}}
                            </span>
                            <!-- /brand logo -->

                        </div>
                        <!-- /brand -->

                        <!-- Header toolbar-->
                        <div class="dt-header__toolbar">
                        

                            <div class="search-box d-none d-lg-block">
                                                            <h1 class="dt-page__title mt-4" style="margin-left: -1.5em;">Deposits <span class="breadcrumb-arrow-right"></span> New</h1>
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
                                <!--<ul class="dt-nav">-->
                                <!--    <li class="dt-nav__item dropdown">-->
      
                                        <!-- Dropdown Link -->
                                <!--        <a href="#" class="dt-nav__link dropdown-toggle" id='currentLang' data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                                <!--        <img class="flag-icon flag-icon-rounded flag-icon-lg mr-1m" src="https://primestocktrades.com/m_cust/dash/uploads/gb-eng.png">-->
                                <!--        <span>EN</span> </a>-->
                                        <!-- /dropdown link -->

                                        <!-- Dropdown Option -->
                                <!--        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(8px, 72px, 0px); top: 0px; left: 0px; will-change: transform;">-->
                                <!--                                                        <button class="dropdown-item sitelangChange" type="button" data-id="https://primestocktrades.com/m_cust/dash/switchlang/English">-->
                                <!--            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://primestocktrades.com/m_cust/dash/uploads/gb-eng.png"><span>English</span> </button>-->
                                <!--                                                        <button class="dropdown-item sitelangChange" type="button" data-id="https://primestocktrades.com/m_cust/dash/switchlang/Russian">-->
                                <!--            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://primestocktrades.com/m_cust/dash/uploads/russia.png"><span>Russian</span> </button>-->
                                <!--                                                        <button class="dropdown-item sitelangChange" type="button" data-id="https://primestocktrades.com/m_cust/dash/switchlang/Português">-->
                                <!--            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://primestocktrades.com/m_cust/dash/uploads/portuguese.png"><span>Português</span> </button>-->
                                <!--                                                        <button class="dropdown-item sitelangChange" type="button" data-id="https://primestocktrades.com/m_cust/dash/switchlang/Español">-->
                                <!--            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://primestocktrades.com/m_cust/dash/uploads/spain.png"><span>Español</span> </button>-->
                                <!--                                                        <button class="dropdown-item sitelangChange" type="button" data-id="https://primestocktrades.com/m_cust/dash/switchlang/German">-->
                                <!--            <img class="flag-icon flag-icon-rounded flag-icon-lg mr-2" src="https://primestocktrades.com/m_cust/dash/uploads/germany.png"><span>German</span> </button>-->
                                <!--                                                    </div>-->
                                        <!-- /dropdown option -->

                                <!--    </li>-->
                                <!--</ul>-->
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
                                        <span class="dt-side-nav__text btn btn-primary">Main dashboard</span>
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
                                    <a href="javascript:void(0)" class="dt-side-nav__link dt-side-nav__arrow"
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
                                            <a href="/view"
                                                class="dt-side-nav__link "
                                                title="Revenue">
                                                <span class="dt-side-nav__text">View withdrawals</span> </a>
                                        </li>
                                    </ul>
                                    <!-- /sub-menu -->

                                </li>
                                <li
                                    class="dt-side-nav__item ">
                                    <a href="/earn"
                                        class="dt-side-nav__link "
                                        title="Earnings">
                                        <i class="icon icon-dashboard icon-fw icon-lg"></i>
                                        <span class="dt-side-nav__text">Earnings</span>
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
                    <div class="dt-content-wrapper">

    <!-- Site Content -->
    <div class="dt-content">
        <!-- Profile -->
        <div class="profile">

            <!-- Profile Banner -->
            <div class="profile__banner">
                
                
                
                
                
                
                


                
                
                
                
                
                
                
                
                
                
                

                <!-- Page Header -->
                <div class="dt-page__header">
                    <h1 class="dt-page__title text-light display-i">Deposits / New</h1>
                    <a href="/home" class="btn btn-light btn-sm display-i ft-right">Back</a>
                    
                    
                            
                   
                    
                    
                    

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
                        <!-- Grid -->
                <div class="row">
                    <!-- Grid Item --> 
                    <div class="col-xl-6 col-md-6 col-12 order-xl-1">
                    </div>
                    <!-- Grid Item --> 
                    <div class="col-xl-6 col-md-6 col-12 order-xl-1">
                        <!-- Card -->
                        <div class="dt-card">
                            <!-- Card Body -->
                            <div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
                                <span class="badge badge-secondary badge-top-right">
                                copy address to make payment</span>
                                <!-- Media -->
                                <div class="media">
                                    <!-- Media Body -->
                                    <div class="media-body" style="color: grey;">
                                        <div class="row">
                                            <div class="col-md-2">
                                             
                                            </div>
                                            <div class="col-md-10">
                                             
                                                <div style="display:flex; margin:1rem;"class="display-5 font-weight-600 mt-1 init-counter">
                                                    <!--<img style="width:60px;" src="https://imgs.search.brave.com/gDlo5LJBf74m8g7e-9gzoTUNN9TIq6QMBhzvRxhiCc0/rs:fit:175:225:1/g:ce/aHR0cHM6Ly90c2U0/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC4x/TXgwX0NWVzZLZ2V2/WDRoaDU2ZmV3SGFI/YSZwaWQ9QXBp">-->
                                                    <!--<a href="" style="margin-top:2.5rem;margin-left:1rem;"> referal code {{$user->refferal_code}}</a>-->
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
  <div style="margin-right:1rem; ">                                                 
                                               
                                                    <!-- Add a data-address attribute to the button, and set it to the address you want to copy -->
<button id="copy-button" style="background-color: #0072C6; padding: 8px 16px;color: white;border: none;border-radius: 4px; cursor: pointer;transition: background-color 0.3s ease;" data-address="bc1qu80lfkeunf99lwn5epdplu3tk060s55cv3pekk">copy btc address</button>

<!-- Include the ClipboardJS library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

<script>
    // Initialize ClipboardJS on the copy button
    new ClipboardJS('#copy-button', {
        text: function() {
            return document.getElementById('copy-button').getAttribute('data-address');
        }
    });

    // Add an event listener to show a success message when the copy operation is complete
    document.getElementById('copy-button').addEventListener('click', function() {
        alert('btc address copied!');
    });
</script>

</div> 







                                
    <div style="margin-right:0.8rem;">                                              
                                                    <!-- Add a data-address attribute to the button, and set it to the address you want to copy -->
<button id="copy-button1"  style="background-color: #0072C6; padding: 6px 9px;color: white;border: none;border-radius: 4px; cursor: pointer;transition: background-color 0.3s ease;" data-address="0xF5528ae8D0F1988a9Ea171505F94b37E94308dd4">copy eth address</button>

<!-- Include the ClipboardJS library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

<script>
    // Initialize ClipboardJS on the copy button
    new ClipboardJS('#copy-button1', {
        text: function() {
            return document.getElementById('copy-button1').getAttribute('data-address');
        }
    });

    // Add an event listener to show a success message when the copy operation is complete
    document.getElementById('copy-button1').addEventListener('click', function() {
        alert('eth address copied!');
    });
</script>


</div>  








                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
    <div>                                               
                                                    <!-- Add a data-address attribute to the button, and set it to the address you want to copy -->
<button id="copy-button2" style="background-color: #0072C6; padding: 6px 9px;color: white;border: none;border-radius: 4px; cursor: pointer;transition: background-color 0.3s ease;"  data-address="0xF5528ae8D0F1988a9Ea171505F94b37E94308dd4
"> copy ussdt address</button>

<!-- Include the ClipboardJS library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

<script>
    // Initialize ClipboardJS on the copy button
    new ClipboardJS('#copy-button2', {
        text: function() {
            return document.getElementById('copy-button2').getAttribute('data-address');
        }
    });

    // Add an event listener to show a success message when the copy operation is complete
    document.getElementById('copy-button2').addEventListener('click', function() {
        alert('ussdt address copied!');
    });
</script>

                                                    
       </div>                                              
                                                    
                                             
                                                    
                                                    
                                                    </div>
                                               <span style="font-weight:bolder;color:black;"> To make payment, pay to any of the above addressess </span>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /media body -->

                                </div>
                                <!-- /media -->
                            </div>
                                <!-- /card body -->
                            </div>
                            <!-- /card -->
                        </div>
                        <!-- /grid item -->
                    </div>
                    <!-- /grid -->
                    
                    
                    
                    
                    
            
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                </div>
                <!-- /profile content -->
                        
                    </div>
                    <!-- /avatar wrapper -->
                </div>

            </div>
            <!-- /profile banner -->

            <!-- Profile Content -->
            <div class="profile-content marg-t-17 marg-t-0 ">
            <div class="row">
                <!-- Grid Item -->
                <div class="col-sm-6 col-12">
                    <!-- Card -->
                    <div class="dt-card dt-card__full-height text-dark hide">

                        <!-- Card Body -->
                        <div class="dt-card__body p-xl-8 py-sm-8 py-6 px-4">
                            <span class="badge badge-secondary badge-top-right">
                            Make a payment</span>
                            <!-- Media -->
                            <div class="media">

                            

                                <!-- Media Body -->
                                <div class="media-body">
                                   <h2 style="font-weight:bolder;color:black;">Sender transaction hash(s)</h2>
                                   
                                   




                                   
                                   
            <!--                       <div class="copy-text" style="display:block">-->
            <!--                            <label>btc</label>-->
                                           
            <!--                                <input                 type="text" value="bc1qu80lfkeunf99lwn5epdplu3tk060s55cv3pekk" class="form-control" id="accountId" name="trx_id">-->
                                            
            <!--                                 <button>-->
               
            <!--    <i class="fa fa-clone" aria-hidden="true"></i>-->
                
            <!--</button>-->
            <!--                            </div>-->
                                        
                                        
                                        
            <!--                             <div class="copy-text" style="display:block">-->
            <!--                            <label>eth</label>-->
                                           
            <!--                                <input                 type="text" value="bc1qu80lfkeunf99lwn5epdplu3tk060s55cv3pekk" class="form-control" id="accountId" name="trx_id">-->
                                            
                                              
            <!--                                 <button>-->
               
            <!--    <i class="fa fa-clone" aria-hidden="true"></i>-->
                
            <!--</button>-->
                                            
            <!--                            </div>-->
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
            <!--                             <div class="copy-text" style="display:block">-->
            <!--                            <label>usdt</label>-->
                                           
            <!--                                <input                 type="text" value="OxF5528ae8DOF1988a9Ea171505F94b37E94308dd4" class="form-control" id="accountId" name="trx_id">-->
                                            
                                              
            <!--                                 <button>-->
               
            <!--    <i class="fa fa-clone" aria-hidden="true"></i>-->
                
            <!--</button>-->
            <!--                            </div>-->
                                        
                                        
     

 <script>
        function CopyToClipboard(id)
        {
        var r = document.createRange();
        r.selectNode(document.getElementById(id));
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(r);
        document.execCommand('copy');
        window.getSelection().removeAllRanges();
        }
        </script>




                                    
                                    <form action="/proof" id="submitForm" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="" />    
 @csrf   
                                        <div class="form-group">
                                            <label style="font-weight:bolder;color:black;">Enter transaction id you've sent the deposit from</label>
                                            <input                 type="text" required class="form-control" id="accountId" name="trx_id">
                                        </div>
        
                                        <button type="submit" class="btn btn-primary text-uppercase">Confirm Deposit and Proceed</button>
                                    </form>     
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
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
            <!-- /Profile -->
            
            
            
           

            
            
            
            
            
            
            
            
           
        </div>
        
        
        
        <script>
        
        </script>
<!-- Footer -->
<footer class="dt-footer">
    
<a style="font-weight:bolder;color:black;" href="/" class="fxt-logo"><img style="height: 150px; 
                            margin-top:1rem;" src="{{ asset('/storage/images/JxZzyOwMTIiMwrL6YErxStgJCXHX2067rm32AiKW.png') }}"
                             alt="Logo"></a>
 <span style="font-weight:bolder;color:black;">   Copyright Primewaretrades  © 2023</span></footer>

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


    <script>
        let copyText=document.querySelector('.copy-text');
        copyText.querySelector('button').addEventListener('click',function(){
            let input= copyText.querySelector('input.text')
            input.select();
            document.execCommand("copy")
            copyText.classList.add("active")
            window.getSelection().removeAllRanges();

            setTimeout(function(){
                copyText.classList.remove('active')

            },2500);
        })

    </script>








</body>
</html>