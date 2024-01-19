<!DOCTYPE html>

<html lang="en" class="light-style layout-compact layout-navbar-fixed layout-menu-fixed     " dir="ltr" data-theme="theme-default" data-assets-path="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/" data-base-url="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" data-framework="laravel" data-template="vertical-menu-theme-default-light">


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:50:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Dashboard - Analytics |
    Sneat -
    Bootstrap 5 HTML Admin Template - Pro</title>
  <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="0eCEBTosT4fUoOUBm1mZC5xlQ6QVoufdLxSNbJCn">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-laravel-admin-template/">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />

  
      <!-- Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
  </script>
  <!-- End Google Tag Manager -->
    

  <!-- Include Styles -->
  <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Theme CSS-->
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('demo/assets/vendor/fonts/boxiconsc4a7.css?id=87122b3a3900320673311cebdeb618da') }}" />
<link rel="stylesheet" href="{{ asset('demo/assets/vendor/fonts/fontawesome8a69.css?id=a2997cb6a1c98cc3c85f4c99cdea95b5') }}" />
<link rel="stylesheet" href="{{ asset('demo/assets/vendor/fonts/flag-icons80a8.css?id=121bcc3078c6c2f608037fb9ca8bce8d') }}" />
<!-- ... -->
<link rel="stylesheet" href="{{ asset('demo/assets/vendor/css/rtl/corea8ac.css?id=55b2a9dfaa009c41df62ca8d16e913a8') }}" class="template-customizer-core-css" />
<link rel="stylesheet" href="{{ asset('demo/assets/vendor/css/rtl/theme-default4c4b.css?id=9182924a7b965439eca5e189ba43eba1') }}" class="template-customizer-theme-css" />
<link rel="stylesheet" href="{{ asset('demo/assets/css/demob77a.css?id=69dfc5e48fce5a4ff55ff7b593cdf93d') }}" />
<!-- ... -->
<link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbare482.css?id=73d641bb8db2475ecafc6c68461ed01b') }}" />
<link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/typeahead-js/typeahead05d2.css?id=de339ead5e9c9e36f12e46cbef7aaffd') }}" />
<!-- ... -->
<link rel="stylesheet" href="{{ asset('demo/assets/vendor/libs/apex-charts/apex-charts.css') }}">
</head>


<!-- Page Styles -->

  <!-- Include Scripts for customizer, helper, analytics, config -->
  <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
  <!-- laravel style -->
<script src="{{asset('demo/assets/vendor/js/helpers.js')}}"></script>
<!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="{{asset('demo/assets/vendor/js/template-customizer.js')}}"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{asset('demo/assets/js/config.js')}}"></script>

  <script>
    window.templateCustomizer = new TemplateCustomizer({
      cssPath: '',
      themesPath: '',
      defaultStyle: "light",
      defaultShowDropdownOnHover: "true", // true/false (for horizontal layout only)
      displayCustomizer: "true",
      lang: 'en',
      pathResolver: function(path) {
        var resolvedPaths = {
          // Core stylesheets
                      'core.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=55b2a9dfaa009c41df62ca8d16e913a8',
            'core-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=d98ae2a03b5b1b05651411ee58ef81a6',
          
          // Themes
                      'theme-default.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=9182924a7b965439eca5e189ba43eba1',
            'theme-default-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=ae30991ef3f62e7c03ca6f8930843e80',
                      'theme-bordered.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=a4f95a927b1e2bcdfd57a3bbfb2bd3d9',
            'theme-bordered-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=2a668deb480284f975db82d0a7277156',
                      'theme-semi-dark.css': 'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=9c02fb39c47f91b2d198f343fa8b4df7',
            'theme-semi-dark-dark.css':
            'https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=c4b1950a14ffd431f752917b97a0ee51',
                  }
        return resolvedPaths[path] || path;
      },
      'controls': ["rtl","style","headerType","contentLayout","layoutCollapsed","layoutNavbarOptions","themes"],
    });
  </script>
</head>

<body>
  
      <!-- Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    

  <!-- Layout Content -->
  <div class="layout-wrapper layout-content-navbar ">
  <div class="layout-container">

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- ! Hide app brand if navbar-full -->
    <div class="app-brand demo">
    <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="app-brand-link">
      <span class="app-brand-logo demo">
        <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
  <defs>
    <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
    <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
    <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
    <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
  </defs>
  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
      <g id="Icon" transform="translate(27.000000, 15.000000)">
        <g id="Mask" transform="translate(0.000000, 8.000000)">
          <mask id="mask-2" fill="white">
            <use xlink:href="#path-1"></use>
          </mask>
          <use fill="var(--bs-primary)" xlink:href="#path-1"></use>
          <g id="Path-3" mask="url(#mask-2)">
            <use fill="var(--bs-primary)" xlink:href="#path-3"></use>
            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
          </g>
          <g id="Path-4" mask="url(#mask-2)">
            <use fill="var(--bs-primary)" xlink:href="#path-4"></use>
            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
          </g>
        </g>
        <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
          <use fill="var(--bs-primary)" xlink:href="#path-5"></use>
          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
        </g>
      </g>
    </g>
  </g>
</svg>
      </span>
      <span class="app-brand-text demo menu-text fw-bold ms-2">Sneat</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>
  
  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    
    

    
    
    
    
    
    <li class="menu-item active open">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div class="text-truncate">Dashboards</div>
                  <div class="badge bg-danger rounded-pill ms-auto">5</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item active">
        <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="menu-link" >
                    <div>Analytics</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="dashboard/crm.html" class="menu-link" >
                    <div>CRM</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/dashboard.html" class="menu-link" >
                    <div>eCommerce</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/logistics/dashboard.html" class="menu-link" >
                    <div>Logistics</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/academy/dashboard.html" class="menu-link" >
                    <div>Academy</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div class="text-truncate">Layouts</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="layouts/collapsed-menu.html" class="menu-link" >
                    <div>Collapsed menu</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="layouts/content-navbar.html" class="menu-link" >
                    <div>Content navbar</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="layouts/content-nav-sidebar.html" class="menu-link" >
                    <div>Content nav + Sidebar</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="layouts/horizontal.html" class="menu-link"  target="_blank" >
                    <div>Horizontal</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="layouts/without-menu.html" class="menu-link" >
                    <div>Without menu</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="layouts/without-navbar.html" class="menu-link" >
                    <div>Without navbar</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="layouts/fluid.html" class="menu-link" >
                    <div>Fluid</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="layouts/container.html" class="menu-link" >
                    <div>Container</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="layouts/blank.html" class="menu-link"  target="_blank" >
                    <div>Blank</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div class="text-truncate">Front Pages</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="front-pages/landing.html" class="menu-link"  target="_blank" >
                    <div>Landing</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="front-pages/pricing.html" class="menu-link"  target="_blank" >
                    <div>Pricing</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="front-pages/payment.html" class="menu-link"  target="_blank" >
                    <div>Payment</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="front-pages/checkout.html" class="menu-link"  target="_blank" >
                    <div>Checkout</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="front-pages/help-center.html" class="menu-link"  target="_blank" >
                    <div>Help Center</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bxl-php"></i>
                <div class="text-truncate">Laravel Example</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="laravel/user-management.html" class="menu-link" >
                    <div>User Management</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Apps &amp; Pages</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="app/email.html" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-envelope"></i>
                <div class="text-truncate">Email</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="app/chat.html" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div class="text-truncate">Chat</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="app/calendar.html" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div class="text-truncate">Calendar</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="app/kanban.html" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-grid"></i>
                <div class="text-truncate">Kanban</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-cart-alt"></i>
                <div class="text-truncate">eCommerce</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/dashboard.html" class="menu-link" >
                    <div>Dashboard</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Products</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/product/list.html" class="menu-link" >
                    <div>Product List</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/product/add.html" class="menu-link" >
                    <div>Add Product</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/product/category.html" class="menu-link" >
                    <div>Category List</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Order</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/order/list.html" class="menu-link" >
                    <div>Order List</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/order/details.html" class="menu-link" >
                    <div> Order Details</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Customer</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/customer/all.html" class="menu-link" >
                    <div>All Customers</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Customer Details</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/customer/details/overview.html" class="menu-link" >
                    <div>Overview</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/customer/details/security.html" class="menu-link" >
                    <div>Security</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/customer/details/billing.html" class="menu-link" >
                    <div>Address &amp; Billing</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/customer/details/notifications.html" class="menu-link" >
                    <div>Notifications</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/manage/reviews.html" class="menu-link" >
                    <div>Manage Reviews</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/referrals.html" class="menu-link" >
                    <div>Referrals</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Settings</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/settings/details.html" class="menu-link" >
                    <div>Store details</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/settings/payments.html" class="menu-link" >
                    <div>Payments</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/settings/checkout.html" class="menu-link" >
                    <div>Checkout</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/settings/shipping.html" class="menu-link" >
                    <div>Shipping &amp; Delivery</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/settings/locations.html" class="menu-link" >
                    <div>Locations</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/ecommerce/settings/notifications.html" class="menu-link" >
                    <div>Notifications</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-book-open"></i>
                <div class="text-truncate">Academy</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="app/academy/dashboard.html" class="menu-link" >
                    <div>Dashboard</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/academy/course.html" class="menu-link" >
                    <div>My Course</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/academy/course-details.html" class="menu-link" >
                    <div>Course Details</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-car"></i>
                <div class="text-truncate">Logistics</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="app/logistics/dashboard.html" class="menu-link" >
                    <div>Dashboard</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/logistics/fleet.html" class="menu-link" >
                    <div>Fleet</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div class="text-truncate">Invoice</div>
                  <div class="badge bg-success rounded-pill ms-auto">4</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="app/invoice/list.html" class="menu-link" >
                    <div>List</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/invoice/preview.html" class="menu-link" >
                    <div>Preview</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/invoice/edit.html" class="menu-link" >
                    <div>Edit</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/invoice/add.html" class="menu-link" >
                    <div>Add</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div class="text-truncate">Users</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="app/user/list.html" class="menu-link" >
                    <div>List</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>View</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="app/user/view/account.html" class="menu-link" >
                    <div>Account</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/user/view/security.html" class="menu-link" >
                    <div>Security</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/user/view/billing.html" class="menu-link" >
                    <div>Billing &amp; Plans</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/user/view/notifications.html" class="menu-link" >
                    <div>Notifications</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/user/view/connections.html" class="menu-link" >
                    <div>Connections</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-check-shield"></i>
                <div class="text-truncate">Roles &amp; Permissions</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="app/access-roles.html" class="menu-link" >
                    <div>Roles</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="app/access-permission.html" class="menu-link" >
                    <div>Permission</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div class="text-truncate">Pages</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>User Profile</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="pages/profile-user.html" class="menu-link" >
                    <div>Profile</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="pages/profile-teams.html" class="menu-link" >
                    <div>Teams</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="pages/profile-projects.html" class="menu-link" >
                    <div>Projects</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="pages/profile-connections.html" class="menu-link" >
                    <div>Connections</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Account Settings</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="pages/account-settings-account.html" class="menu-link" >
                    <div>Account</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="pages/account-settings-security.html" class="menu-link" >
                    <div>Security</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="pages/account-settings-billing.html" class="menu-link" >
                    <div>Billing &amp; Plans</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="pages/account-settings-notifications.html" class="menu-link" >
                    <div>Notifications</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="pages/account-settings-connections.html" class="menu-link" >
                    <div>Connections</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="pages/faq.html" class="menu-link" >
                    <div>FAQ</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="pages/pricing.html" class="menu-link" >
                    <div>Pricing</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Misc</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="pages/misc-error.html" class="menu-link"  target="_blank" >
                    <div>Error</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="pages/misc-under-maintenance.html" class="menu-link"  target="_blank" >
                    <div>Under Maintenance</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="pages/misc-comingsoon.html" class="menu-link"  target="_blank" >
                    <div>Coming Soon</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="pages/misc-not-authorized.html" class="menu-link"  target="_blank" >
                    <div>Not Authorized</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div class="text-truncate">Authentications</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Login</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="auth/login-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="auth/login-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Register</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="auth/register-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="auth/register-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="auth/register-multisteps.html" class="menu-link"  target="_blank" >
                    <div>Multi-steps</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Verify Email</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="auth/verify-email-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="auth/verify-email-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Reset Password</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="auth/reset-password-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="auth/reset-password-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Forgot Password</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="auth/forgot-password-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="auth/forgot-password-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Two Steps</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="auth/two-steps-basic.html" class="menu-link"  target="_blank" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="auth/two-steps-cover.html" class="menu-link"  target="_blank" >
                    <div>Cover</div>
        </a>

        
              </li>
      </ul>
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                <div class="text-truncate">Wizard Examples</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="wizard/ex-checkout.html" class="menu-link" >
                    <div>Checkout</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="wizard/ex-property-listing.html" class="menu-link" >
                    <div>Property Listing</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="wizard/ex-create-deal.html" class="menu-link" >
                    <div>Create Deal</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="modal-examples.html" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-window-open"></i>
                <div class="text-truncate">Modal Examples</div>
              </a>

      
          </li>
        
    

    
        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Components</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div class="text-truncate">Cards</div>
                  <div class="badge bg-danger rounded-pill ms-auto">6</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="cards/basic.html" class="menu-link" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="cards/advance.html" class="menu-link" >
                    <div>Advance</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="cards/statistics.html" class="menu-link" >
                    <div>Statistics</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="cards/analytics.html" class="menu-link" >
                    <div>Analytics</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="cards/gamifications.html" class="menu-link" >
                    <div>Gamifications</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="cards/actions.html" class="menu-link" >
                    <div>Actions</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div class="text-truncate">User interface</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="ui/accordion.html" class="menu-link" >
                    <div>Accordion</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/alerts.html" class="menu-link" >
                    <div>Alerts</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/badges.html" class="menu-link" >
                    <div>Badges</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/buttons.html" class="menu-link" >
                    <div>Buttons</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/carousel.html" class="menu-link" >
                    <div>Carousel</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/collapse.html" class="menu-link" >
                    <div>Collapse</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/dropdowns.html" class="menu-link" >
                    <div>Dropdowns</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/footer.html" class="menu-link" >
                    <div>Footer</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/list-groups.html" class="menu-link" >
                    <div>List Groups</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/modals.html" class="menu-link" >
                    <div>Modals</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/navbar.html" class="menu-link" >
                    <div>Navbar</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/offcanvas.html" class="menu-link" >
                    <div>Offcanvas</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/pagination-breadcrumbs.html" class="menu-link" >
                    <div>Pagination &amp; Breadcrumbs</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/progress.html" class="menu-link" >
                    <div>Progress</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/spinners.html" class="menu-link" >
                    <div>Spinners</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/tabs-pills.html" class="menu-link" >
                    <div>Tabs &amp; Pills</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/toasts.html" class="menu-link" >
                    <div>Toasts</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/tooltips-popovers.html" class="menu-link" >
                    <div>Tooltips &amp; popovers</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="ui/typography.html" class="menu-link" >
                    <div>Typography</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div class="text-truncate">Extended UI</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="extended/ui-avatar.html" class="menu-link" >
                    <div>Avatar</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="extended/ui-blockui.html" class="menu-link" >
                    <div>BlockUI</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="extended/ui-drag-and-drop.html" class="menu-link" >
                    <div>Drag &amp; Drop</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="extended/ui-media-player.html" class="menu-link" >
                    <div>Media Player</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="extended/ui-perfect-scrollbar.html" class="menu-link" >
                    <div>Perfect scrollbar</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="extended/ui-star-ratings.html" class="menu-link" >
                    <div>Star Ratings</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="extended/ui-sweetalert2.html" class="menu-link" >
                    <div>SweetAlert2</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="extended/ui-text-divider.html" class="menu-link" >
                    <div>Text Divider</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="javascript:void(0)" class="menu-link menu-toggle" >
                    <div>Timeline</div>
        </a>

        
                  <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="extended/ui-timeline-basic.html" class="menu-link" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="extended/ui-timeline-fullscreen.html" class="menu-link" >
                    <div>Fullscreen</div>
        </a>

        
              </li>
      </ul>
              </li>
    
    
    
      <li class="menu-item ">
        <a href="extended/ui-tour.html" class="menu-link" >
                    <div>Tour</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="extended/ui-treeview.html" class="menu-link" >
                    <div>Treeview</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="extended/ui-misc.html" class="menu-link" >
                    <div>Miscellaneous</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div class="text-truncate">Icons</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="icons/boxicons.html" class="menu-link" >
                    <div>Boxicons</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="icons/font-awesome.html" class="menu-link" >
                    <div>Fontawesome</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Forms &amp; Tables</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div class="text-truncate">Form Elements</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="forms/basic-inputs.html" class="menu-link" >
                    <div>Basic Inputs</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="forms/input-groups.html" class="menu-link" >
                    <div>Input groups</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="forms/custom-options.html" class="menu-link" >
                    <div>Custom Options</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="forms/editors.html" class="menu-link" >
                    <div>Editors</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="forms/file-upload.html" class="menu-link" >
                    <div>File Upload</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="forms/pickers.html" class="menu-link" >
                    <div>Pickers</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="forms/selects.html" class="menu-link" >
                    <div>Select &amp; Tags</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="forms/sliders.html" class="menu-link" >
                    <div>Sliders</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="forms/switches.html" class="menu-link" >
                    <div>Switches</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="forms/extras.html" class="menu-link" >
                    <div>Extras</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div class="text-truncate">Form Layouts</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="form/layouts-vertical.html" class="menu-link" >
                    <div>Vertical Form</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="form/layouts-horizontal.html" class="menu-link" >
                    <div>Horizontal Form</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="form/layouts-sticky.html" class="menu-link" >
                    <div>Sticky Actions</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-carousel"></i>
                <div class="text-truncate">Form Wizard</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="form/wizard-numbered.html" class="menu-link" >
                    <div>Numbered</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="form/wizard-icons.html" class="menu-link" >
                    <div>Icons</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="form/validation.html" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-list-check"></i>
                <div class="text-truncate">Form Validation</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="tables/basic.html" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div class="text-truncate">Tables</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-grid"></i>
                <div class="text-truncate">Datatables</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="tables/datatables-basic.html" class="menu-link" >
                    <div>Basic</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="tables/datatables-advanced.html" class="menu-link" >
                    <div>Advanced</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="tables/datatables-extensions.html" class="menu-link" >
                    <div>Extensions</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Charts &amp; Maps</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
                <i class="menu-icon tf-icons bx bx-chart"></i>
                <div class="text-truncate">Charts</div>
              </a>

      
            <ul class="menu-sub">
      
    
    
      <li class="menu-item ">
        <a href="charts/apex.html" class="menu-link" >
                    <div>Apex Charts</div>
        </a>

        
              </li>
    
    
    
      <li class="menu-item ">
        <a href="charts/chartjs.html" class="menu-link" >
                    <div>ChartJS</div>
        </a>

        
              </li>
      </ul>
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="maps/leaflet.html" class="menu-link" >
                <i class="menu-icon tf-icons bx bx-map-alt"></i>
                <div class="text-truncate">Leaflet Maps</div>
              </a>

      
          </li>
        
    

    
        <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Misc</span>
    </li>

        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="https://themeselection.com/support/" class="menu-link"  target="_blank" >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div class="text-truncate">Support</div>
              </a>

      
          </li>
        
    

    
    
    
    
    
    <li class="menu-item ">
      <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html" class="menu-link"  target="_blank" >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div class="text-truncate">Documentation</div>
              </a>

      
          </li>
          </ul>

</aside>
    

    <!-- Layout page -->
    <div class="layout-page">

      
      

      <!-- BEGIN: Navbar-->
            <!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    
      <!--  Brand demo (display only for navbar-full and hide on below xl) -->
      
      <!-- ! Not required for layout-without-menu -->
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="bx bx-menu bx-sm"></i>
        </a>
      </div>
      
      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                <!-- Search -->
        <div class="navbar-nav align-items-center">
          <div class="nav-item navbar-search-wrapper mb-0">
            <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
              <i class="bx bx-search bx-sm"></i>
              <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
            </a>
          </div>
        </div>
        <!-- /Search -->
        
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        
        <!-- Language -->
        <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <i class='bx bx-globe bx-sm'></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item active" href="index.html" data-language="en">
                <span class="align-middle">English</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item " href="index.html" data-language="fr">
                <span class="align-middle">French</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item " href="index.html" data-language="de">
                <span class="align-middle">German</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item " href="index.html" data-language="pt">
                <span class="align-middle">Portuguese</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ Language -->

        <!-- Quick links  -->
        <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <i class='bx bx-grid-alt bx-sm'></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end py-0">
            <div class="dropdown-menu-header border-bottom">
              <div class="dropdown-header d-flex align-items-center py-3">
                <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="bx bx-sm bx-plus-circle"></i></a>
              </div>
            </div>
            <div class="dropdown-shortcuts-list scrollable-container">
              <div class="row row-bordered overflow-visible g-0">
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-calendar fs-4"></i>
                  </span>
                  <a href="app/calendar.html" class="stretched-link">Calendar</a>
                  <small class="text-muted mb-0">Appointments</small>
                </div>
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-food-menu fs-4"></i>
                  </span>
                  <a href="app/invoice/list.html" class="stretched-link">Invoice App</a>
                  <small class="text-muted mb-0">Manage Accounts</small>
                </div>
              </div>
              <div class="row row-bordered overflow-visible g-0">
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-user fs-4"></i>
                  </span>
                  <a href="app/user/list.html" class="stretched-link">User App</a>
                  <small class="text-muted mb-0">Manage Users</small>
                </div>
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-check-shield fs-4"></i>
                  </span>
                  <a href="app/access-roles.html" class="stretched-link">Role Management</a>
                  <small class="text-muted mb-0">Permission</small>
                </div>
              </div>
              <div class="row row-bordered overflow-visible g-0">
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                  </span>
                  <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1" class="stretched-link">Dashboard</a>
                  <small class="text-muted mb-0">User Profile</small>
                </div>
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-cog fs-4"></i>
                  </span>
                  <a href="pages/account-settings-account.html" class="stretched-link">Setting</a>
                  <small class="text-muted mb-0">Account Settings</small>
                </div>
              </div>
              <div class="row row-bordered overflow-visible g-0">
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-help-circle fs-4"></i>
                  </span>
                  <a href="pages/faq.html" class="stretched-link">FAQs</a>
                  <small class="text-muted mb-0">FAQs & Articles</small>
                </div>
                <div class="dropdown-shortcuts-item col">
                  <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                    <i class="bx bx-window-open fs-4"></i>
                  </span>
                  <a href="modal-examples.html" class="stretched-link">Modals</a>
                  <small class="text-muted mb-0">Useful Popups</small>
                </div>
              </div>
            </div>
          </div>
        </li>
        <!-- Quick links -->

                <!-- Style Switcher -->
        <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <i class='bx bx-sm'></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                <span class="align-middle"><i class='bx bx-sun me-2'></i>Light</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                <span class="align-middle"><i class="bx bx-moon me-2"></i>Dark</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                <span class="align-middle"><i class="bx bx-desktop me-2"></i>System</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ Style Switcher -->
        
        <!-- Notification -->
        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <i class="bx bx-bell bx-sm"></i>
            <span class="badge bg-danger rounded-pill badge-notifications">5</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end py-0">
            <li class="dropdown-menu-header border-bottom">
              <div class="dropdown-header d-flex align-items-center py-3">
                <h5 class="text-body mb-0 me-auto">Notification</h5>
                <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
              </div>
            </li>
            <li class="dropdown-notifications-list scrollable-container">
              <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="../demo/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                      <p class="mb-0">Won the monthly best seller gold badge</p>
                      <small class="text-muted">1h ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Charles Franklin</h6>
                      <p class="mb-0">Accepted your connection</p>
                      <small class="text-muted">12hr ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="../demo/assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">New Message ✉️</h6>
                      <p class="mb-0">You have new message from Natalie</p>
                      <small class="text-muted">1h ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                      <p class="mb-0">ACME Inc. made new order $1,154</p>
                      <small class="text-muted">1 day ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="../demo/assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Application has been approved 🚀 </h6>
                      <p class="mb-0">Your ABC project application has been approved.</p>
                      <small class="text-muted">2 days ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Monthly report is generated</h6>
                      <p class="mb-0">July monthly financial report is generated </p>
                      <small class="text-muted">3 days ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="../demo/assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Send connection request</h6>
                      <p class="mb-0">Peter sent you connection request</p>
                      <small class="text-muted">4 days ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src="../demo/assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">New message from Jane</h6>
                      <p class="mb-0">Your have new message from Jane</p>
                      <small class="text-muted">5 days ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">CPU is running high</h6>
                      <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                      <small class="text-muted">5 days ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown-menu-footer border-top p-3">
              <button class="btn btn-primary text-uppercase w-100">view all notifications</button>
            </li>
          </ul>
        </li>
        <!--/ Notification -->

        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="../demo/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="pages/profile-user.html">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src="../demo/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-medium d-block">
                                            John Doe
                                          </span>
                    <small class="text-muted">Admin</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="pages/profile-user.html">
                <i class="bx bx-user me-2"></i>
                <span class="align-middle">My Profile</span>
              </a>
            </li>
                        <li>
              <a class="dropdown-item" href="pages/account-settings-billing.html">
                <span class="d-flex align-items-center align-middle">
                  <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                  <span class="flex-grow-1 align-middle">Billing</span>
                  <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                </span>
              </a>
            </li>
                          <li>
                <div class="dropdown-divider"></div>
              </li>
                            <li>
                <a class="dropdown-item" href="auth/login-basic.html">
                  <i class='bx bx-log-in me-2'></i>
                  <span class="align-middle">Login</span>
                </a>
              </li>
                          </ul>
          </li>
          <!--/ User -->
        </ul>
      </div>

      <!-- Search Small Screens -->
      <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
      </div>

        </nav>
  <!-- / Navbar -->
            <!-- END: Navbar-->


      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
                  <div class="container-xxl flex-grow-1 container-p-y">
            
            <div class="row">
  <div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
            <p class="mb-4">You have done <span class="fw-medium">72%</span> more sales today. Check your new badge in your profile.</p>

            <a href="javascript:;" class="btn btn-sm btn-label-primary">View Badges</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="../demo/assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.html">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 order-1">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body pb-0">
            <span class="d-block fw-medium mb-1">Order</span>
            <h3 class="card-title mb-1">276k</h3>
          </div>
          <div id="orderChart" class="mb-3"></div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="../demo/assets/img/icons/unicons/wallet-info.png" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span>Sales</span>
            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
            <small class="text-success fw-medium"><i class='bx bx-up-arrow-alt'></i> +28.42%</small>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Total Revenue -->
  <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
    <div class="card">
      <div class="row row-bordered g-0">
        <div class="col-md-8">
          <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
          <div id="totalRevenueChart" class="px-2"></div>
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="text-center">
              <div class="dropdown">
                <button class="btn btn-sm btn-label-primary dropdown-toggle" type="button" id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  2022
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                  <a class="dropdown-item" href="javascript:void(0);">2021</a>
                  <a class="dropdown-item" href="javascript:void(0);">2020</a>
                  <a class="dropdown-item" href="javascript:void(0);">2019</a>
                </div>
              </div>
            </div>
          </div>
          <div id="growthChart"></div>
          <div class="text-center fw-medium pt-3 mb-2">62% Company Growth</div>

          <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>2022</small>
                <h6 class="mb-0">$32.5k</h6>
              </div>
            </div>
            <div class="d-flex">
              <div class="me-2">
                <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
              </div>
              <div class="d-flex flex-column">
                <small>2021</small>
                <h6 class="mb-0">$41.2k</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Revenue -->
  <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
    <div class="row">
      <div class="col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img src="../demo/assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded">
              </div>
              <div class="dropdown">
                <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                </div>
              </div>
            </div>
            <span class="d-block mb-1">Payments</span>
            <h3 class="card-title text-nowrap mb-2">$2,456</h3>
            <small class="text-danger fw-medium"><i class='bx bx-down-arrow-alt'></i> -14.82%</small>
          </div>
        </div>
      </div>
      <div class="col-6 mb-4">
        <div class="card">
          <div class="card-body pb-2">
            <span class="d-block fw-medium mb-1">Revenue</span>
            <h3 class="card-title mb-1">425k</h3>
            <div id="revenueChart"></div>
          </div>
        </div>
      </div>
      <!-- </div>
    <div class="row"> -->
      <div class="col-12 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
              <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                <div class="card-title">
                  <h5 class="text-nowrap mb-2">Profile Report</h5>
                  <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                </div>
                <div class="mt-sm-auto">
                  <small class="text-success text-nowrap fw-medium"><i class='bx bx-chevron-up'></i> 68.2%</small>
                  <h3 class="mb-0">$84,686k</h3>
                </div>
              </div>
              <div id="profileReportChart"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <!-- Order Statistics -->
  <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between pb-0">
        <div class="card-title mb-0">
          <h5 class="m-0 me-2">Order Statistics</h5>
          <small class="text-muted">42.82k Total Sales</small>
        </div>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="d-flex flex-column align-items-center gap-1">
            <h2 class="mb-2">8,258</h2>
            <span>Total Orders</span>
          </div>
          <div id="orderStatisticsChart"></div>
        </div>
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-mobile-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Electronic</h6>
                <small class="text-muted">Mobile, Earbuds, TV</small>
              </div>
              <div class="user-progress">
                <small class="fw-medium">82.5k</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-success"><i class='bx bx-closet'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Fashion</h6>
                <small class="text-muted">T-shirt, Jeans, Shoes</small>
              </div>
              <div class="user-progress">
                <small class="fw-medium">23.8k</small>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-info"><i class='bx bx-home-alt'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Decor</h6>
                <small class="text-muted">Fine Art, Dining</small>
              </div>
              <div class="user-progress">
                <small class="fw-medium">849k</small>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <span class="avatar-initial rounded bg-label-secondary"><i class='bx bx-football'></i></span>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <h6 class="mb-0">Sports</h6>
                <small class="text-muted">Football, Cricket Kit</small>
              </div>
              <div class="user-progress">
                <small class="fw-medium">99</small>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Order Statistics -->

  <!-- Expense Overview -->
  <div class="col-md-6 col-lg-4 order-1 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">Income</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Expenses</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab">Profit</button>
          </li>
        </ul>
      </div>
      <div class="card-body px-0">
        <div class="tab-content p-0">
          <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
            <div class="d-flex p-4 pt-3">
              <div class="avatar flex-shrink-0 me-3">
                <img src="../demo/assets/img/icons/unicons/wallet.png" alt="User">
              </div>
              <div>
                <small class="text-muted d-block">Total Balance</small>
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$459.10</h6>
                  <small class="text-success fw-medium">
                    <i class='bx bx-chevron-up'></i>
                    42.9%
                  </small>
                </div>
              </div>
            </div>
            <div id="incomeChart"></div>
            <div class="d-flex justify-content-center pt-4 gap-2">
              <div class="flex-shrink-0">
                <div id="expensesOfWeek"></div>
              </div>
              <div>
                <p class="mb-n1 mt-1">Expenses This Week</p>
                <small class="text-muted">$39 less than last week</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Expense Overview -->

  <!-- Transactions -->
  <div class="col-md-6 col-lg-4 order-2 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Transactions</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="../demo/assets/img/icons/unicons/paypal.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Paypal</small>
                <h6 class="mb-0">Send money</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+82.6</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="../demo/assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Wallet</small>
                <h6 class="mb-0">Mac'D</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+270.69</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="../demo/assets/img/icons/unicons/chart.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Transfer</small>
                <h6 class="mb-0">Refund</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+637.91</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="../demo/assets/img/icons/unicons/cc-success.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Credit Card</small>
                <h6 class="mb-0">Ordered Food</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">-838.71</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex mb-4 pb-1">
            <div class="avatar flex-shrink-0 me-3">
              <img src="../demo/assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Wallet</small>
                <h6 class="mb-0">Starbucks</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">+203.33</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
          <li class="d-flex">
            <div class="avatar flex-shrink-0 me-3">
              <img src="../demo/assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded">
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <small class="text-muted d-block mb-1">Mastercard</small>
                <h6 class="mb-0">Ordered Food</h6>
              </div>
              <div class="user-progress d-flex align-items-center gap-1">
                <h6 class="mb-0">-92.45</h6> <span class="text-muted">USD</span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Transactions -->
  <!-- Activity Timeline -->
  <div class="col-md-12 col-lg-6 order-4 order-lg-3 ">
    <div class="card">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title m-0 me-2">Activity Timeline</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="timelineWapper" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineWapper">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <!-- Activity Timeline -->
        <ul class="timeline">
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-primary"></span></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">12 Invoices have been paid</h6>
                <small class="text-muted">12 min ago</small>
              </div>
              <p class="mb-2">Invoices have been paid to the company</p>
              <div class="d-flex">
                <a href="javascript:void(0)" class="d-flex align-items-center me-3">
                  <img src="../demo/assets/img/icons/misc/pdf.png" alt="PDF image" width="23" class="me-2">
                  <h6 class="mb-0">invoices.pdf</h6>
                </a>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-warning"></span></span>
            <div class="timeline-event">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">Client Meeting</h6>
                <small class="text-muted">45 min ago</small>
              </div>
              <p class="mb-2">Project meeting with john @10:15am</p>
              <div class="d-flex flex-wrap">
                <div class="avatar me-3">
                  <img src="../demo/assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                </div>
                <div>
                  <h6 class="mb-0">Lester McCarthy (Client)</h6>
                  <span>CEO of ThemeSelection</span>
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point-wrapper"><span class="timeline-point timeline-point-info"></span></span>
            <div class="timeline-event pb-0">
              <div class="timeline-header mb-1">
                <h6 class="mb-0">Create a new project for client</h6>
                <small class="text-muted">2 Day Ago</small>
              </div>
              <p class="mb-2">5 team members in a project</p>
              <div class="d-flex align-items-center avatar-group">
                <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy">
                  <img src="../demo/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                </div>
                <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Marrie Patty">
                  <img src="../demo/assets/img/avatars/12.png" alt="Avatar" class="rounded-circle">
                </div>
                <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Jimmy Jackson">
                  <img src="../demo/assets/img/avatars/9.png" alt="Avatar" class="rounded-circle">
                </div>
                <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kristine Gill">
                  <img src="../demo/assets/img/avatars/6.png" alt="Avatar" class="rounded-circle">
                </div>
                <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Nelson Wilson">
                  <img src="../demo/assets/img/avatars/14.png" alt="Avatar" class="rounded-circle">
                </div>
              </div>
            </div>
          </li>
          <li class="timeline-end-indicator">
            <i class="bx bx-check-circle"></i>
          </li>
        </ul>
        <!-- /Activity Timeline -->
      </div>
    </div>
  </div>
  <!--/ Activity Timeline -->
  <!-- pill table -->
  <div class="col-md-6 order-3 order-lg-4 mb-4 mb-lg-0">
    <div class="card text-center">
      <div class="card-header py-3">
        <ul class="nav nav-pills" role="tablist">
          <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-browser" aria-controls="navs-pills-browser" aria-selected="true">Browser</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-os" aria-controls="navs-pills-os" aria-selected="false">Operating System</button>
          </li>
          <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-country" aria-controls="navs-pills-country" aria-selected="false">Country</button>
          </li>
        </ul>
      </div>
      <div class="tab-content pt-0">
        <div class="tab-pane fade show active" id="navs-pills-browser" role="tabpanel">
          <div class="table-responsive text-start">
            <table class="table table-borderless text-nowrap">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Browser</th>
                  <th>Visits</th>
                  <th class="w-50">Data In Percentage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/chrome.png" alt="Chrome" height="24" class="me-2">
                      <span>Chrome</span>
                    </div>
                  </td>
                  <td>8.92k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 84.75%" aria-valuenow="84.75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">84.75%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/safari.png" alt="Safari" height="24" class="me-2">
                      <span>Safari</span>
                    </div>
                  </td>
                  <td>7.29k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72.43%" aria-valuenow="72.43" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">72.43%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/firefox.png" alt="Firefox" height="24" class="me-2">
                      <span>Firefox</span>
                    </div>
                  </td>
                  <td>6.11k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 67.37%" aria-valuenow="67.37" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">67.37%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/edge.png" alt="Edge" height="24" class="me-2">
                      <span>Edge</span>
                    </div>
                  </td>
                  <td>5.08k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 60.12%" aria-valuenow="60.12" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">60.12%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/opera.png" alt="Opera" height="24" class="me-2">
                      <span>Opera</span>
                    </div>
                  </td>
                  <td>3.93k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 51.94%" aria-valuenow="51.94" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">51.94%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/brave.png" alt="Brave" height="24" class="me-2">
                      <span>Brave</span>
                    </div>
                  </td>
                  <td>3.19k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 39.94%" aria-valuenow="39.94" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">39.94%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/vivaldi.png" alt="Vivaldi" height="24" class="me-2">
                      <span>Vivaldi</span>
                    </div>
                  </td>
                  <td>1.29k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 28.43%" aria-valuenow="28.43" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">18.43%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/uc.png" alt="UC Browser" height="24" class="me-2">
                      <span>UC Browser</span>
                    </div>
                  </td>
                  <td>328</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20.14%" aria-valuenow="20.14" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">20.14%</small>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-pills-os" role="tabpanel">
          <div class="table-responsive text-start">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>No</th>
                  <th>System</th>
                  <th>Visits</th>
                  <th class="w-50">Data In Percentage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/windows.png" alt="Windows" height="24" class="me-2">
                      <span>Windows</span>
                    </div>
                  </td>
                  <td>875.24k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 71.50%" aria-valuenow="71.50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">71.50%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/mac.png" alt="Mac" height="24" class="me-2">
                      <span>Mac</span>
                    </div>
                  </td>
                  <td>89.68k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66.67%" aria-valuenow="66.67" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">66.67%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/ubuntu.png" alt="Ubuntu" height="24" class="me-2">
                      <span>Ubuntu</span>
                    </div>
                  </td>
                  <td>37.68k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 62.82%" aria-valuenow="62.82" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">62.82%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/chrome.png" alt="Chrome" height="24" class="me-2">
                      <span>Chrome</span>
                    </div>
                  </td>
                  <td>35.34k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 56.25%" aria-valuenow="56.25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">56.25%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/cent.png" alt="Cent" height="24" class="me-2">
                      <span>Cent</span>
                    </div>
                  </td>
                  <td>32.25k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 42.76%" aria-valuenow="42.76" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">42.76%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/linux.png" alt="Linux" height="24" class="me-2">
                      <span>Linux</span>
                    </div>
                  </td>
                  <td>22.15k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 37.77%" aria-valuenow="37.77" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">37.77%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/fedora.png" alt="Fedora" height="24" class="me-2">
                      <span>Fedora</span>
                    </div>
                  </td>
                  <td>1.13k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 29.16%" aria-valuenow="29.16" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">29.16%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="../demo/assets/img/icons/brands/vivaldi-os.png" alt="Vivaldi" height="24" class="me-2">
                      <span>Vivaldi</span>
                    </div>
                  </td>
                  <td>1.09k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 26.26%" aria-valuenow="26.26" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">26.26%</small>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-pills-country" role="tabpanel">
          <div class="table-responsive text-start">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Country</th>
                  <th>Visits</th>
                  <th class="w-50">Data In Percentage</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/us.svg" alt="USA" height="24" class="me-2">
                      <span>USA</span>
                    </div>
                  </td>
                  <td>87.24k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 89.12%" aria-valuenow="89.12" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">89.12%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/br.svg" alt="Brazil" height="24" class="me-2">
                      <span>Brazil</span>
                    </div>
                  </td>
                  <td>62.68k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 78.23%" aria-valuenow="78.23" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">78.23%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/in.svg" alt="India" height="24" class="me-2">
                      <span>India</span>
                    </div>
                  </td>
                  <td>52.58k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 69.82%" aria-valuenow="69.82" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">69.82%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/au.svg" alt="Australia" height="24" class="me-2">
                      <span>Australia</span>
                    </div>
                  </td>
                  <td>44.13k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 59.90%" aria-valuenow="59.90" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">59.90%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/de.svg" alt="Germany" height="24" class="me-2">
                      <span>Germany</span>
                    </div>
                  </td>
                  <td>32.21k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 57.11%" aria-valuenow="57.11" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">57.11%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/fr.svg" alt="France" height="24" class="me-2">
                      <span>France</span>
                    </div>
                  </td>
                  <td>37.87k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 41.23%" aria-valuenow="41.23" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">41.23%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/pt.svg" alt="Portugal" height="24" class="me-2">
                      <span>Portugal</span>
                    </div>
                  </td>
                  <td>20.29k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 37.11%" aria-valuenow="37.11" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">37.11%</small>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/svg/flags/cn.svg" alt="China" height="24" class="me-2">
                      <span>China</span>
                    </div>
                  </td>
                  <td>12.21k</td>
                  <td>
                    <div class="d-flex justify-content-between align-items-center gap-3">
                      <div class="progress w-100" style="height:10px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 17.61%" aria-valuenow="17.61" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small class="fw-medium">17.61%</small>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ pill table -->
</div>

          </div>
          <!-- / Content -->

          <!-- Footer -->
                    <!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      © <script>document.write(new Date().getFullYear())</script>
      , made with ❤️ by <a href="https://themeselection.com/" target="_blank" class="footer-link fw-medium">ThemeSelection</a>
    </div>
    <div  class="d-none d-lg-inline-block">
      <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
      <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>
      <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/laravel-introduction.html" target="_blank" class="footer-link me-4">Documentation</a>
      <a href="https://themeselection.com/support/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
    </div>
  </div>
</footer>
<!--/ Footer-->
                    <!-- / Footer -->
          <div class="content-backdrop fade"></div>
        </div>
        <!--/ Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

        <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->
    <!--/ Layout Content -->

  
  <div class="buy-now">
    <a href="https://themeselection.com/item/sneat-bootstrap-laravel-admin-template/" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div>
  

  <!-- Include Scripts -->
  <!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
  <!-- BEGIN: Vendor JS-->
<script src="{{asset('demo/assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a')}}"></script>
<script src="{{asset('demo/assets/vendor/libs/popper/popper0a73.js?id=baf82d96b7771efbcc05c3b77135d24c')}}"></script>
<script src="{{asset('demo/assets/vendor/js/bootstrapcfc4.js?id=4648227467e3fd3f4cf976cfb0e43aea')}}"></script>
<script src="{{asset('demo/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a')}}"></script>
<script src="{{asset('demo/assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8')}}"></script>
<script src="{{asset('demo/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6')}}"></script>
<script src="{{asset('demo/assets/vendor/js/menu2dc9.js?id=c6ce30ded4234d0c4ca0fb5f2a2990d8')}}"></script>
<script src="{{asset('demo/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{asset('demo/assets/js/maind63d.js?id=6bea3f2e092d5fe7327c226f3242f31b')}}"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
<script src="{{asset('demo/assets/js/dashboards-analytics.js')}}"></script>
<!-- END: Page JS-->

</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Nov 2023 03:50:51 GMT -->
</html>
