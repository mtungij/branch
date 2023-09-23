<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title  -->
  <title>Masinde Store</title>

  <!-- Style Css -->
  <link rel="stylesheet" id="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
  <link rel="stylesheet" id="color" href="<?php echo base_url('assets/css/colors.css')?>">

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;600;700&amp;display=swap" rel="stylesheet">
  <!-- Icons  -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

  <!-- Favicon  -->
  <link rel="icon" href="<?php echo base_url('assets/img/favicon.png')?>">
</head>

<body id="body-layout" class="text-body-md relative font-sans font-normal text-gray-700 dark:text-gray-300 bg-surface-500 dark:bg-surfacedark-500 show">
  <!-- preloader -->
  <div class="preloader fixed inset-0 z-50 bg-surface-500 dark:bg-surfacedark-500">
    <div class="w-full h-screen flex justify-center items-center">
      <!-- loader -->
      <svg class="circular-loader relative w-[100px] h-[100px]">
        <circle class="path stroke-primary-600 dark:stroke-primary-200" cx="50" cy="50" r="20" fill="none" stroke-width="5" stroke-miterlimit="10"></circle>
      </svg>
    </div>
  </div>

  <header data-type="navtop" class="nav-top [&.show]:translate-y-0 top-0 fixed h-16 px-4 lg:px-8 lg:pl-3 left-0 lg:left-72 right-0 flex flex-row items-center justify-between gap-3 z-50 transition-all duration-300 ease-in-out bg-surface-500 dark:bg-surfacedark-500">
    <!-- trigger sidebar -->
    <button data-type="dialogs" data-target="#sidebar" class="relative inline-flex lg:hidden items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
      <span class="material-symbols-outlined !text-[28px]">menu</span>
    </button>

    <!-- trigger compact layout -->
    <button data-type="toggle" data-target="#body-layout" class="compact-btn group relative hidden  !items-center justify-center w-12 h-12 gap-x-2 py-2.5 px-6 rounded-[6.25rem] tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
      <span class="material-symbols-outlined !text-[28px] menu-close">menu_open</span>
      <span class="material-symbols-outlined !text-[28px] menu-open">menu</span>
    </button>

    <!-- search form -->
    <div class="relative w-full hidden md:block">
      <!-- desktop search -->
      <div class="relative w-full">
        <button class="absolute left-1 top-1 hidden sm:inline-flex !items-center justify-center w-10 h-10 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
          <span class="material-symbols-outlined !text-2xl">search</span>
        </button>
        <input type="search" placeholder="Search..." class="max-sm:absolute max-sm:inset-x-0 block w-40 sm:w-80 md:w-full pl-14 h-12 rounded-full bg-white dark:bg-gray-900 py-2 px-4 ring-0 focus:outline-none focus:shadow">
      </div>
    </div>

    <!-- navbar right -->
    <div class="flex flex-row items-center gap-3 ml-auto md:ml-12">
      <!-- mobile search trigger -->
      <button data-type="dialogs" data-target="#dialog_search" class="btn relative inline-flex md:hidden !items-center justify-center w-12 h-12 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
        <span class="material-symbols-outlined !text-[28px]">search</span>
      </button>

      <!--<div class="relative">
        <!-- <button data-type="dropdown" data-target="#dropdown0" class="btn relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
          <span  aria-label="Languages" data-microtip-position="bottom" role="tooltip" class="material-symbols-outlined !text-[28px] pointer-events-none">translate</span>
        </button>

        <!-- menus -->
       <!-- <ul id="dropdown0" data-type="dropdownmenu" class="[&.show]:!opacity-100 [&.show]:!visible opacity-0 invisible absolute top-[3.1rem] z-30 transition duration-400 ease-in-out left-auto right-0 transform translate-x-1/3 min-w-[150px] inline-flex flex-col py-2 rounded-xl bg-white dark:bg-gray-900 shadow-md dark:shadow-gray-50/10">
          <li class="relative">
            <a href="#" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
              <img src="<?php echo base_url('assets/img/flags/US.svg')?>" class="h-4" alt="English">
              English
            </a>
          </li>
          <li class="relative">
            <a href="#" class="w-full flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
              <img src="<?php echo base_url('assets/img/flags/IT.svg')?>" class="h-4" alt="Italy">
              Italy
            </a>
          </li>
          <li class="relative">
            <a href="#" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
              <img src="<?php echo base_url('assets/img/flags/ES.svg')?>" class="h-4" alt="Spain">
              Spain
            </a>
          </li>
          <li class="relative">
            <a href="#" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
              <img src="<?php echo base_url('assets/img/flags/SA.svg')?>" class="h-4" alt="Arabic">
              Arabic
            </a>
          </li>
        </ul>
      </div> -->

      <div class="relative hidden sm:inline-block">
        <button data-type="dropdown" data-target="#dropdown-apps" class="btn relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
          <span aria-label="Apps" data-microtip-position="bottom" role="tooltip" class="material-symbols-outlined !text-[28px] pointer-events-none">apps</span>
        </button>

        <!-- menus -->
        <div id="dropdown-apps" data-type="dropdownmenu" class="[&.show]:!opacity-100 [&.show]:!visible opacity-0 invisible absolute top-[3.1rem] z-30 transition duration-400 ease-in-out left-auto right-0 transform md:translate-x-[120px] min-w-[300px] inline-flex flex-col rounded-xl overflow-hidden bg-white dark:bg-gray-900 shadow-md dark:shadow-gray-50/10 max-sm:fixed max-sm:mt-3 max-sm:left-4 max-sm:right-4 p-6">
          <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
            <a href="#" class="py-2 px-3 hover:bg-surface-200 dark:hover:bg-surfacedark-200 rounded-xl flex flex-col items-center gap-1">
              <span class="material-symbols-outlined !text-4xl text-red-600 dark:text-red-200">email</span>
              <p class="text-title-sm text-center">Email</p>
            </a>
            <a href="#" class="py-2 px-3 hover:bg-surface-200 dark:hover:bg-surfacedark-200 rounded-xl flex flex-col items-center gap-1">
              <span class="material-symbols-outlined !text-4xl text-yellow-600 dark:text-yellow-200">event</span>
              <p class="text-title-sm text-center">Calendar</p>
            </a>
            <a href="#" class="py-2 px-3 hover:bg-surface-200 dark:hover:bg-surfacedark-200 rounded-xl flex flex-col items-center gap-1">
              <span class="material-symbols-outlined !text-4xl text-green-600 dark:text-green-200">chat</span>
              <p class="text-title-sm text-center">Chat</p>
            </a>
            <a href="#" class="py-2 px-3 hover:bg-surface-200 dark:hover:bg-surfacedark-200 rounded-xl flex flex-col items-center gap-1">
              <span class="material-symbols-outlined !text-4xl text-purple-600 dark:text-purple-200">pie_chart</span>
              <p class="text-title-sm text-center">Chart</p>
            </a>
            <a href="#" class="py-2 px-3 hover:bg-surface-200 dark:hover:bg-surfacedark-200 rounded-xl flex flex-col items-center gap-1">
              <span class="material-symbols-outlined !text-4xl text-pink-600 dark:text-pink-200">widgets</span>
              <p class="text-title-sm text-center">Widgets</p>
            </a>
            <a href="#" class="py-2 px-3 hover:bg-surface-200 dark:hover:bg-surfacedark-200 rounded-xl flex flex-col items-center gap-1">
              <span class="material-symbols-outlined !text-4xl text-blue-600 dark:text-blue-200">rocket</span>
              <p class="text-title-sm text-center">Landing</p>
            </a>
          </div>
        </div>
      </div>

      <div class="relative hidden sm:inline-block">
        <!-- trigger bottom sheets -->
        <button data-type="dialogs" data-target="#sheets_b" class="btn relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
          <span aria-label="Settings" data-microtip-position="bottom" role="tooltip" class="material-symbols-outlined !text-[28px] pointer-events-none">settings</span>
        </button>
      </div>

      <div class="relative">
        <button data-type="dropdown" data-target="#dropdown2" class="btn relative !inline-flex !items-center justify-center w-12 h-12 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
          <span aria-label="Notification" data-microtip-position="bottom" role="tooltip" class="material-symbols-outlined !text-[28px] pointer-events-none ">notifications</span>
          <span class="pointer-events-none absolute top-2 right-2 w-4 h-4 flex items-center justify-center rounded-full text-[11px] leading-none tracking-[.045em] font-medium bg-error-600 dark:bg-error-200 text-white dark:text-error-800">1</span>
        </button>

        <!-- menus -->
        <div id="dropdown2" data-type="dropdownmenu" class="[&.show]:!opacity-100 [&.show]:!visible opacity-0 invisible absolute top-[3.1rem] z-30 transition duration-400 ease-in-out -right-12 sm:right-0 min-w-[300px] inline-flex flex-col py-2 rounded-xl overflow-hidden bg-white dark:bg-gray-900 shadow-md dark:shadow-gray-50/10 max-sm:fixed max-sm:mt-3 max-sm:left-4 max-sm:right-4">
          <div class="px-6 pt-1.5 pb-3 font-normal border-b border-gray-100 dark:border-gray-800">
            <div class="relative">
              <div class="text-title-sm">Notifications</div>
              <div class="absolute top-0 right-0">
                <button class="inline-block mr-0">
                  <span class="material-symbols-outlined pointer-events-none" aria-label="Clear all" data-microtip-position="bottom" role="tooltip">delete</span>
                </button>
              </div>
            </div>
          </div>

          <div class="max-h-60 overflow-y-auto scrollbars">
            <!-- item -->
            <a class="relative" href="../user/notification.html">
              <div class="unread flex flex-wrap flex-row items-center border-b border-gray-100 dark:border-gray-800 [&.unread]:bg-surface-400 dark:[&.unread]:bg-surfacedark-400 hover:bg-surface-200 dark:hover:bg-surfacedark-200 py-2">
                <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                  <div class="flex justify-center items-center mx-auto w-8 h-8 rounded-full bg-primary-600 dark:bg-primary-200 text-neutral-10 dark:text-neutral-900">
                    <span class="material-symbols-outlined">diversity_3</span>
                  </div>
                </div>
                <div class="flex-shrink max-w-full px-2 w-3/4">
                  <div class="text-body-md">Time for a meeting with Mr.Roger</div>
                  <div class="text-gray-500 text-body-md mt-1">5 Minutes Ago</div>
                </div>
              </div>
            </a>

            <!-- item -->
            <a class="relative" href="../user/notification.html">
              <div class="flex flex-wrap flex-row items-center border-b border-gray-100 dark:border-gray-800 [&.unread]:bg-surface-400 dark:[&.unread]:bg-surfacedark-400 hover:bg-surface-200 dark:hover:bg-surfacedark-200 py-2">
                <div class="flex-shrink max-w-full px-2 w-1/4 text-center">
                  <div class="flex justify-center items-center mx-auto w-8 h-8 rounded-full bg-primary-600 dark:bg-primary-200 text-neutral-10 dark:text-neutral-900">
                    <span class="material-symbols-outlined">person</span>
                  </div>
                </div>
                <div class="flex-shrink max-w-full px-2 w-3/4">
                  <div class="text-body-md">Congratulations you get a new prospect!</div>
                  <div class="text-gray-500 text-body-md mt-1">1h ago</div>
                </div>
              </div>
            </a>
          </div>

          <div class="px-6 pt-3 pb-1.5 text-center text-body-md font-normal">
            <a href="../user/notification.html" class="hover:underline">Show all Notifications</a>
          </div>
        </div>
      </div>

      <div class="relative">
        <button data-type="dropdown" data-target="#dropdown1" class="btn w-12 h-12 gap-x-2 py-2.5 flex items-center gap-2 justify-center rounded-full text-sm tracking-[0.15px]">
          <img src="<?php echo base_url('assets/img/avatar.png')?>" alt="ari budin" class="w-10 h-10 flex-none rounded-full bg-primary-600 dark:bg-primary-200">
        </button>

        <!-- menus -->
        <ul id="dropdown1" data-type="dropdownmenu" class="[&.show]:!opacity-100 [&.show]:!visible opacity-0 invisible absolute top-[3.1rem] z-30 transition duration-400 ease-in-out left-auto right-0 min-w-[200px] inline-flex flex-col py-2 rounded-xl bg-white dark:bg-gray-900 shadow-md dark:shadow-gray-50/10 max-sm:fixed max-sm:mt-3 max-sm:left-4 max-sm:right-4">
          <li class="relative">
            <a href="../user/profile.html" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
            <span class="material-symbols-outlined">person</span>
              Profile
            </a>
          </li>
          <li class="relative">
            <a href="../user/edit-profile.html" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
            <span class="material-symbols-outlined">settings</span>
              Settings
            </a>
          </li>
          <li class="relative">
            <a href="../docs/support.html" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
            <span class="material-symbols-outlined">help_center</span>
              Help
            </a>
          </li>
          <li class="relative border-t border-gray-100 dark:border-gray-800">
            <a href="../auth/logout.html" class="flex flex-row items-center gap-3 py-2.5 px-6 hover-icon hover:bg-surface-200 dark:hover:bg-surfacedark-200">
            <span class="material-symbols-outlined">power_settings_new</span>
              Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <main class="lg:flex">
    <!-- sidebar -->
    <aside id="sidebar" class="sidebar transition-all duration-500 ease-in-out fixed max-lg:z-[60] lg:shrink-0 lg:relative lg:w-72 h-screen max-lg:[&.show_.sidebar-bg]:opacity-60 dark:max-lg:[&.show_.sidebar-bg]:opacity-60 [&.show_.sidebar-bg]:inset-0 [&.show_.sidebar-content]:translate-x-0">
      <!-- backdrop -->
      <div data-close="#sidebar" class="sidebar-bg fixed z-40 opacity-0 -top-full bg-black"></div>

      <!-- menu -->
      <div id="sidebar-content" class="sidebar-content transition-all duration-300 ease-in-out fixed z-40 max-lg:-translate-x-full max-lg:bg-surface-500 dark:max-lg:bg-surfacedark-500 left-0 top-0 bottom-0 h-screen w-72 overflow-auto scrollbars">
        <!-- logo -->
        <a href="../analytics/analytics-dashboard.html" class="sidebar-logo pt-4 pb-2 pl-6 flex items-center w-full">
          <div class="w-9 h-9 rounded-full border-2 border-primary-600 flex items-center justify-center text-primary-800 font-bold text-lg">
            <span class="flex items-center justify-center w-6 h-6 rounded-full bg-primary-200">G</span>
          </div>
          <h4 class="text-2xl font-medium tracking-wide text-gray-900 dark:text-gray-100 compact-hide ml-2">Goodash</h4>
        </a>

        <!-- Standart drawer -->
        <div class="w-full inline-flex flex-col px-3 pb-3">
          <!-- title & menu -->
          <div class="pt-6 pb-2 px-4 compact-hide">
            <p class="text-title-sm font-medium uppercase text-gray-600 dark:text-gray-400">Home</p>
          </div>
          <ul class="sidebar-menu flex flex-col">
            <!-- dashboards -->
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard1" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">leaderboard</span>
                <span class="compact-title">Analytics</span>
              </a>
              <ul id="dashboard1" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <li>
                  <a href="../analytics/analytics-dashboard.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Dashboard
                  </a>
                </li>
                <li>
                  <a href="../analytics/audience.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Audience
                  </a>
                </li>
                <li>
                  <a href="../analytics/traffic.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Traffics
                  </a>
                </li>
              </ul>
            </li>
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard2" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">groups</span>
                <span class="compact-title">CRM</span>
              </a>
              <ul id="dashboard2" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <li><a href="../crm/crm-dashboard.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Dashboard
                  </a>
                </li>
                <li><a href="../crm/opportunities.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Opportunities
                  </a>
                </li>
                <li><a href="../crm/customers.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Customers
                  </a>
                </li>
                <li><a href="../crm/customer-detail.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Customer details
                  </a>
                </li>
              </ul>
            </li>
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard3" class="active flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">shopping_cart</span>
                <span class="compact-title">Ecommerce</span>
              </a>
              <ul id="dashboard3" data-type="collapsed" class="active sidebar-submenu [&.active]:block hidden">
                <li><a href="ecommerce-dashboard.html" class="active flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Dashboard
                  </a>
                </li>
                <li><a href="product-list.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Product list
                  </a>
                </li>
                <li><a href="product-detail.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Product detail
                  </a>
                </li>
                <li><a href="add-product.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Add product
                  </a>
                </li>
                <li><a href="customers.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Customers
                  </a>
                </li>
                <li><a href="orders.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Orders
                  </a>
                </li>
                <li><a href="order-detail.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Order detail
                  </a>
                </li>
                <li><a href="shopping-cart.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Shopping cart
                  </a>
                </li>
                <li><a href="checkout.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Checkout
                  </a>
                </li>
                <li><a href="invoice.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Invoice
                  </a>
                </li>
              </ul>
            </li>
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard4" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">chart_data</span>
                <span class="compact-title">Sales</span>
              </a>
              <ul id="dashboard4" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <li><a href="../sales/sales-dashboard.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Dashboard
                  </a>
                </li>
                <li><a href="../sales/leaderboard.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Leaderboard
                  </a>
                </li>
                <li><a href="../sales/bestseller.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Bestseller
                  </a>
                </li>
              </ul>
            </li>
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard5" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">fact_check</span>
                <span class="compact-title">Projects</span>
              </a>
              <ul id="dashboard5" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <li><a href="../projects/project-dashboard.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Dashboard
                  </a>
                </li>
                <li><a href="../projects/project-list.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Project list
                  </a>
                </li>
                <li><a href="../projects/project-detail.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Project detail
                  </a>
                </li>
                <li><a href="../projects/kanban-board.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Kanban board
                  </a>
                </li>
              </ul>
            </li>
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#dashboard_smart" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">house</span>
                <span class="compact-title">Smarthome</span>
              </a>
              <ul id="dashboard_smart" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <li><a href="../smarthome/smarthome-dashboard.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Dashboard
                  </a>
                </li>
                <li><a href="../smarthome/rooms.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Rooms
                  </a>
                </li>
                <li><a href="../smarthome/room-detail.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Room detail
                  </a>
                </li>
                <li><a href="../smarthome/devices.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Devices control
                  </a>
                </li>
              </ul>
            </li>
          </ul>

          <!-- title & menu -->
          <div class="pt-6 pb-2 px-4 compact-hide">
            <p class="text-title-sm font-medium uppercase text-gray-600 dark:text-gray-400">Apps</p>
          </div>
          <ul class="sidebar-menu flex flex-col">
            <!-- Apps -->
            <li class="relative">
              <a href="../apps/chats.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">sms</span>
                <span class="compact-title">Chats</span>
                <span class="compact-hide w-5 h-5 flex items-center justify-center rounded-full text-[11px] leading-none tracking-[.045em] font-medium bg-surface-200 dark:bg-surfacedark-200 ml-auto">12</span>
              </a>
            </li>
            <li class="relative">
              <a href="../apps/calendar.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">calendar_today</span>
                <span class="compact-title">Calendar</span>
              </a>
            </li>
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#apps1" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">mail</span>
                <span class="compact-title">Email</span>
              </a>
              <ul id="apps1" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <li><a href="../apps/inbox.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Inbox
                  </a>
                </li>
                <li><a href="../apps/detail-email.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Detail
                  </a>
                </li>
                <li><a href="../apps/new-email.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Compose
                  </a>
                </li>
              </ul>
            </li>
            <li class="relative">
              <a href="../apps/widgets.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">widgets</span>
                <span class="compact-title">Widgets</span>
              </a>
            </li>
            <li class="relative">
              <a href="../apps/charts.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">pie_chart</span>
                <span class="compact-title">Charts</span>
              </a>
            </li>
          </ul>

          <!-- title & menu -->
          <div class="pt-6 pb-2 px-4 compact-hide">
            <p class="text-title-sm font-medium uppercase text-gray-600 dark:text-gray-400">Pages</p>
          </div>
          <ul class="sidebar-menu flex flex-col">
            <!-- pages -->
            <li class="relative">
              <a href="../index-2.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">rocket_launch</span>
                <span class="compact-title">Landing page</span>
              </a>
            </li>
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#pages3" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">description</span>
                <span class="compact-title">Pages</span>
              </a>
              <ul id="pages3" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <li><a href="../pages/starter.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Starter page
                  </a>
                </li>
                <li><a href="../pages/maintenance.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Mainternance
                  </a>
                </li>
                <li><a href="../pages/blog-list.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Blog list
                  </a>
                </li>
                <li><a href="../pages/blog-detail.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Blog detail
                  </a>
                </li>
                <li><a href="../pages/gallery.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Gallery
                  </a>
                </li>
                <li><a href="../pages/services.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Services
                  </a>
                </li>
                <li><a href="../pages/timeline.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Timeline
                  </a>
                </li>
                <li><a href="../pages/faq.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Faq
                  </a>
                </li>
                <li><a href="../pages/pricing.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Pricing
                  </a>
                </li>
                <li><a href="../pages/contact.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Contact Us
                  </a>
                </li>
                <li><a href="../pages/setting.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Settings
                  </a>
                </li>
                <li><a href="../pages/error-404.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Error 404
                  </a>
                </li>
                <li><a href="../pages/tos.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Term of Service
                  </a>
                </li>
                <li><a href="../pages/privacy.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Privacy policy
                  </a>
                </li>
              </ul>
            </li>
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#pages1" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">person</span>
                <span class="compact-title">Users</span>
              </a>
              <ul id="pages1" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                 <li><a href="../user/feed.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Feed
                  </a>
                </li>
                <li><a href="../user/profile.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Profile
                  </a>
                </li>
                <li><a href="../user/edit-profile.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Edit Profile
                  </a>
                </li>
                <li><a href="../user/notification.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Notification
                  </a>
                </li>
              </ul>
            </li>
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#pages2" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">key</span>
                <span class="compact-title">Authentication</span>
              </a>
              <ul id="pages2" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <li><a href="../auth/register.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Register
                  </a>
                </li>
                <li><a href="../auth/login.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Login
                  </a>
                </li>
                <li><a href="../auth/forgot-password.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Forgot password
                  </a>
                </li>
                <li><a href="../auth/reset-password.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Reset password
                  </a>
                </li>
                <li><a href="../auth/select-otp.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Select OTP
                  </a>
                </li>
                <li><a href="../auth/input-otp.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Input OTP
                  </a>
                </li>
              </ul>
            </li>
          </ul>

          <!-- title & menu -->
          <div class="pt-6 pb-2 px-4 compact-hide">
            <p class="text-title-sm font-medium uppercase text-gray-600 dark:text-gray-400">UI kit</p>
          </div>
          <ul class="sidebar-menu flex flex-col">
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#kit1" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">layers</span>
                <span class="compact-title">Components</span>
              </a>
              <ul id="kit1" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <li>
                  <a href="../components/accordion.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Accordion
                  </a>
                </li>
                <li>
                  <a href="../components/alerts.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Alerts
                  </a>
                </li>
                <li>
                  <a href="../components/avatar.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Avatar
                  </a>
                </li>
                <li>
                  <a href="../components/breadcrumb.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Breadcrumb
                  </a>
                </li>
                <li>
                  <a href="../components/badges.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Badges
                  </a>
                </li>
                <li>
                  <a href="../components/bottom-app-bar.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Bottom app bar
                  </a>
                </li>
                <li>
                  <a href="../components/bottom-sheets.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Bottom sheets
                  </a>
                </li>
                <li>
                  <a href="../components/buttons.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Buttons
                  </a>
                </li>
                <li>
                  <a href="../components/cards.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Cards
                  </a>
                </li>
                <li>
                  <a href="../components/carousel.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Carousel
                  </a>
                </li>
                <li>
                  <a href="../components/chips.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Chips
                  </a>
                </li>
                <li>
                  <a href="../components/dialogs.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Dialogs
                  </a>
                </li>
                <li>
                  <a href="../components/divider.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Divider
                  </a>
                </li>
                <li>
                  <a href="../components/dropdown.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Dropdown
                  </a>
                </li>
                <li>
                  <a href="../components/elevation.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Elevation
                  </a>
                </li>
                <li>
                  <a href="../components/grids.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Grids
                  </a>
                </li>
                <li>
                  <a href="../components/lists.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Lists
                  </a>
                </li>
                <li>
                  <a href="../components/navigation-bar.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Navigation bar
                  </a>
                </li>
                <li>
                  <a href="../components/navigation-drawer.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Navigation drawer
                  </a>
                </li>
                <li>
                  <a href="../components/navigation-rail.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Navigation rail
                  </a>
                </li>
                <li>
                  <a href="../components/pagination.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Pagination
                  </a>
                </li>
                <li>
                  <a href="../components/progress-indicators.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Progress indicators
                  </a>
                </li>
                <li>
                  <a href="../components/rating.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Rating
                  </a>
                </li>
                <li>
                  <a href="../components/side-sheets.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Side sheets
                  </a>
                </li>
                <li>
                  <a href="../components/snackbar.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Snackbar
                  </a>
                </li>
                <li>
                  <a href="../components/shape.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Shape
                  </a>
                </li>
                <li>
                  <a href="../components/stepper.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Stepper
                  </a>
                </li>
                <li>
                  <a href="../components/tooltips.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Tooltips
                  </a>
                </li>
                <li>
                  <a href="../components/tabs.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Tabs
                  </a>
                </li>
                <li>
                  <a href="../components/top-app-bar.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Top app bar
                  </a>
                </li>
              </ul>
            </li>
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#kit2" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">list_alt</span>
                <span class="compact-title">Forms</span>
              </a>
              <ul id="kit2" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <li><a href="../forms/input.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Input &amp; Select
                  </a>
                </li>
                <li><a href="../forms/checkbox.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Checkbox &amp; Radio
                  </a>
                </li>
                <li><a href="../forms/switch.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Switch
                  </a>
                </li>
                <li><a href="../forms/range.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Range slider
                  </a>
                </li>
                <li><a href="../forms/date-picker.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Date picker
                  </a>
                </li>
                <li><a href="../forms/advance.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Advance
                  </a>
                </li>
              </ul>
            </li>
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#kit3" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">article</span>
                <span class="compact-title">Contents</span>
              </a>
              <ul id="kit3" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <li><a href="../docs/colors.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Colors
                  </a>
                </li>
                <li><a href="../docs/icons.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Icons
                  </a>
                </li>
                <li><a href="../docs/tables.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Tables
                  </a>
                </li>
                <li><a href="../docs/typography.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Typography
                  </a>
                </li>
              </ul>
            </li>
            <li class="relative">
              <a href="javascript:void(0)" data-type="collapse" data-target="#kit4" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">space_dashboard</span>
                <span class="compact-title">Layouts</span>
              </a>
              <ul id="kit4" data-type="collapsed" class="sidebar-submenu [&.active]:block hidden">
                <li><a href="../layouts/default.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Default
                  </a>
                </li>
                <li><a href="../layouts/compact.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Compact
                  </a>
                </li>
                <li><a href="../layouts/compact-text.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Compact text
                  </a>
                </li>
                <li><a href="../layouts/classic.html" class="flex items-center py-3 pl-12 pr-6 mb-1 leading-none gap-2.5 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-primary-600/[0.08] dark:[&.active]:bg-primary-200/10 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                    Classic
                  </a>
                </li>
              </ul>
            </li>
            <li class="relative">
              <a href="../docs/plugins.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">extension</span>
                <span class="compact-title">Plugins</span>
              </a>
            </li>
          </ul>

          <!-- title & menu -->
          <div class="pt-6 pb-2 px-4 compact-hide">
            <p class="text-title-sm font-medium uppercase text-gray-600 dark:text-gray-400">Info</p>
          </div>
          <ul class="sidebar-menu flex flex-col">
            <li class="relative">
              <a href="../docs/index.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">quick_reference_all</span>
                <span class="compact-title">Docs</span>
              </a>
            </li>
            <li class="relative">
              <a href="../docs/changelog.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">source_notes</span>
                <span class="compact-title">Changelogs</span>
              </a>
            </li>
            <li class="relative">
              <a href="../docs/support.html" class="flex flex-row items-center gap-3 py-3 pl-4 pr-6 mb-1 rounded-full hover-icon [&.active]:text-gray-900 dark:[&.active]:text-gray-100 [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 hover:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08]">
                <span class="material-symbols-outlined">help_center</span>
                <span class="compact-title">Support</span>
              </a>
            </li>
          </ul>

          <div class="w-full flex flex-col gap-2 mt-12">
            <!-- title & content -->
            <div class="pb-2 px-4 compact-hide">
              <p class="text-title-sm font-medium uppercase text-gray-600 dark:text-gray-400">Statistics</p>
            </div>
            <!-- content -->
            <div class="flex flex-col gap-4 compact-hide mb-6">
              <div class="w-full flex flex-col gap-2 px-4">
                <div class="flex flex-row justify-between">
                  <span class="text-title-sm">Complete</span><span class="text-title-sm">89%</span>
                </div>
                <!-- linear progress -->
                <div class="flex bg-gray-100 dark:bg-gray-700 h-1">
                  <div class="flex bg-green-600 dark:bg-green-200" role="progressbar" style="width: 89%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="w-full flex flex-col gap-2 px-4">
                <div class="flex flex-row justify-between">
                  <span class="text-title-sm">On Progress</span><span class="text-title-sm">76%</span>
                </div>
                <!-- linear progress -->
                <div class="flex bg-gray-100 dark:bg-gray-700 h-1">
                  <div class="flex bg-yellow-600 dark:bg-yellow-200" role="progressbar" style="width: 76%;" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="w-full flex flex-col gap-2 px-4">
                <div class="flex flex-row justify-between">
                  <span class="text-title-sm">Cancelled</span><span class="text-title-sm">17%</span>
                </div>
                <!-- linear progress -->
                <div class="flex bg-gray-100 dark:bg-gray-700 h-1">
                  <div class="flex bg-error-600 dark:bg-error-200" role="progressbar" style="width: 17%;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>

            <!-- action -->
            <div class="px-4 flex justify-center mb-12">
              <a href="../index-2.html" target="_blank" class="btn relative flex flex-row items-center justify-center gap-x-2 py-2.5 px-6 rounded-[6.25rem] hover:shadow-md text-label-lg bg-primary-600 text-white dark:bg-primary-200 dark:text-primary-800">
                <span class="material-symbols-outlined">shopping_cart</span><span class="ml-1 compact-hide">Upgrade Now</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </aside>

    <!-- content -->
    <div class="main-content flex-grow min-h-[100%] py-20 relative px-4 lg:pr-8 lg:pl-3">
      <!-- heading -->
      <div class="flex flex-row justify-between items-center pt-2 pb-6">
        <h2 class="text-title-lg">Ecommerce</h2>
        <!-- filter -->
        <div class="btn-segmented inline-flex flex-row items-center">
          <div class="segmented-item [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 h-8 btn-outline relative inline-flex flex-row items-center justify-center gap-x-2 py-2 px-4 text-sm tracking-[.00714em] font-medium border border-gray-500 text-primary-600 dark:border-gray-400 dark:text-primary-200 active">
            <input id="check7" type="radio" name="radios" class="z-10 opacity-0 absolute inset-0" value="1" checked="">
            <label class="flex items-center gap-3" for="check7">
              Daily
            </label>
          </div>
          <div class="segmented-item [&.active]:bg-secondary-100 dark:[&.active]:bg-secondary-700 h-8 btn-outline relative inline-flex flex-row items-center justify-center gap-x-2 py-2 px-4 text-sm tracking-[.00714em] font-medium border border-gray-500 text-primary-600 dark:border-gray-400 dark:text-primary-200">
            <input id="check8" type="radio" name="radios" class="z-10 opacity-0 absolute inset-0" value="2">
            <label class="flex items-center gap-3" for="check8">
              Monthly
            </label>
          </div>
        </div>
      </div>

      <!-- content 1 -->
      <div class="sm:grid sm:grid-cols-2 sm:gap-4 md:gap-6">
        <!-- card -->
        <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900 mb-4 md:mb-6">
          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Sales vs Profit</h3>
          </div>
          <div class="relative">
           <canvas class="max-w-100" id="BarChart"></canvas>
          </div>
        </div>

        <div class="max-sm:flex gap-4 sm:grid sm:grid-cols-2 md:gap-6 mb-4 md:mb-6 max-sm:-mx-4 max-sm:px-4 overflow-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:'none'] [scrollbar-width:'none']">
          <!-- card -->
          <div class="max-sm:w-60 max-sm:flex-shrink-0 relative py-8 px-6 overflow-hidden flex flex-col gap-2 rounded-xl bg-white dark:bg-gray-900">
            <!-- bg -->
            <div class="absolute right-0 top-0 opacity-50 text-surface-400 dark:text-surfacedark-400 !text-[100px] material-symbols-outlined">account_balance_wallet</div>

            <h2 class="text-headline-md mt-1"><span>$</span>31K</h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Revenue</h3>
              <span class="col-span-2 text-body-sm text-green-500 text-right">+10%</span>
            </div>
          </div>
          <!-- card -->
          <div class="max-sm:w-60 max-sm:flex-shrink-0 relative py-8 px-6 overflow-hidden flex flex-col gap-2 rounded-xl bg-white dark:bg-gray-900">
            <!-- bg -->
            <div class="absolute right-0 top-0 opacity-50 text-surface-400 dark:text-surfacedark-400 !text-[100px] material-symbols-outlined">shopping_cart</div>

            <h2 class="text-headline-md mt-1">1456</h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Total Order</h3>
              <span class="col-span-2 text-body-sm text-green-500 text-right">+5%</span>
            </div>
          </div>
          <!-- card -->
         <div class="max-sm:w-60 max-sm:flex-shrink-0 relative py-8 px-6 overflow-hidden flex flex-col gap-2 rounded-xl bg-white dark:bg-gray-900">
            <!-- bg -->
            <div class="absolute right-0 top-0 opacity-50 text-surface-400 dark:text-surfacedark-400 !text-[100px] material-symbols-outlined">person</div>
 
            <h2 class="text-headline-md mt-1">2,5K</h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Customers</h3>
              <span class="col-span-2 text-body-sm text-green-500 text-right">+21%</span>
            </div>
          </div>
          <!-- card -->
          <div class="max-sm:w-60 max-sm:flex-shrink-0 relative py-8 px-6 overflow-hidden flex flex-col gap-2 rounded-xl bg-white dark:bg-gray-900">
            <!-- bg -->
            <div class="absolute right-0 top-0 opacity-50 text-surface-400 dark:text-surfacedark-400 !text-[100px] material-symbols-outlined">person_pin</div>

            <h2 class="text-headline-md mt-1">314</h2>
            <div class="flex justify-between items-center gap-2 z-10">
              <h3 class="text-body-md text-gray-800 dark:text-gray-200">Users Online</h3>
              <span class="col-span-2 text-body-sm text-red-500 text-right">-34%</span>
            </div>
          </div>
        </div>
      </div>

      <!-- content 2 -->
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 md:gap-6 mb-4 md:mb-6">
        <div class="max-sm:order-2">
          <!-- card -->
          <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="flex flex-row gap-2 items-center justify-between pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Sales by Location</h3>
            </div>
            <div class="relative">
              <div class="flex flex-col gap-1 py-2">
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <img src="<?php echo base_url('assets/img/flags/US.svg')?>" class="w-6 h-6 mr-2" alt="social">
                    United States
                  </div>
                  <span>16,050</span>
                </div>
                <!-- linear progress -->
                <div class="flex bg-surface-500 dark:bg-surfacedark-500 h-1 mt-2">
                  <div class="flex bg-green-600 dark:bg-green-200" role="progressbar" style="width: 69%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="flex flex-col gap-1 py-2">
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <img src="<?php echo base_url('assets/img/flags/IN.svg')?>" class="w-6 h-6 mr-2" alt="social">
                    India
                  </div>
                  <span>3,050</span>
                </div>
                <!-- linear progress -->
                <div class="flex bg-surface-500 dark:bg-surfacedark-500 h-1 mt-2">
                  <div class="flex bg-green-600 dark:bg-green-200" role="progressbar" style="width: 19%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="flex flex-col gap-1 py-2">
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <img src="<?php echo base_url('assets/img/flags/IT.svg')?>" class="w-6 h-6 mr-2" alt="social">
                    Italy
                  </div>
                  <span>2,150</span>
                </div>
                <!-- linear progress -->
                <div class="flex bg-surface-500 dark:bg-surfacedark-500 h-1 mt-2">
                  <div class="flex bg-green-600 dark:bg-green-200" role="progressbar" style="width: 12%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="flex flex-col gap-1 py-2">
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <img src="<?php echo base_url('assets/img/flags/ID.svg')?>" class="w-6 h-6 mr-2" alt="social">
                    Indonesia
                  </div>
                  <span>1,750</span>
                </div>
                <!-- linear progress -->
                <div class="flex bg-surface-500 dark:bg-surfacedark-500 h-1 mt-2">
                  <div class="flex bg-green-600 dark:bg-green-200" role="progressbar" style="width: 9%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="flex flex-col gap-1 py-2">
                <div class="flex items-center justify-between">
                  <div class="flex items-center">
                    <img src="<?php echo base_url('assets/img/flags/JP.svg')?>" class="w-6 h-6 mr-2" alt="social">
                    Japan
                  </div>
                  <span>1,250</span>
                </div>
                <!-- linear progress -->
                <div class="flex bg-surface-500 dark:bg-surfacedark-500 h-1 mt-2">
                  <div class="flex bg-green-600 dark:bg-green-200" role="progressbar" style="width: 8%;" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="max-sm:order-1 sm:col-span-2">
          <!-- card -->
          <div class="flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="py-8 px-6 flex flex-row gap-2 items-center justify-between pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Latest Order</h3>
            </div>
            <div class="relative pb-6 overflow-auto">
              <table class="table-bordered-bottom text-body-sm">
                <thead class="text-gray-800 dark:text-gray-200 border-b border-gray-100 dark:border-gray-800">
                  <tr class="[&_th]:px-6 [&_th]:py-5 title-md bg-surface-100 dark:bg-surfacedark-100">
                    <th>
                      Billing
                    </th>
                    <th>
                      Amount
                    </th>
                    <th>
                      Status
                    </th>
                    <th>
                      Invoive
                    </th>
                  </tr>
                </thead>
                <tbody class="[&_td]:px-6 [&_td]:py-3 text-body-sm">
                  <tr>
                    <td>
                      <div class="flex flex-col">
                        Thomas Lindar
                        <span class="text-label-md text-gray-500 mt-1">Roma</span>
                      </div>
                    </td>
                    <td>
                      332<span>$</span>
                    </td>
                    <td>
                      <div class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-primary-100 dark:bg-primary-900 rounded-full">Process</div>
                    </td>
                    <td>
                      <a href="#" class="hover:text-primary-500">#INV9834</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="flex flex-col">
                        Jeremi Nolan
                        <span class="text-label-md text-gray-500 mt-1">London</span>
                      </div>
                    </td>
                    <td>
                      362<span>$</span>
                    </td>
                    <td>
                      <div class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-yellow-100 dark:bg-yellow-900 rounded-full">Shipping</div>
                    </td>
                    <td>
                      <a href="#" class="hover:text-primary-500">#INV9834</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="flex flex-col">
                        Carlos Garcia
                        <span class="text-label-md text-gray-500 mt-1">Barcelona</span>
                      </div>
                    </td>
                    <td>
                      142<span>$</span>
                    </td>
                    <td>
                      <div class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-green-100 dark:bg-green-900 rounded-full">Complete</div>
                    </td>
                    <td>
                      <a href="#" class="hover:text-primary-500">#INV9834</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="flex flex-col">
                        Joe Daniel
                        <span class="text-label-md text-gray-500 mt-1">San Fransisco</span>
                      </div>
                    </td>
                    <td>
                      452<span>$</span>
                    </td>
                    <td>
                      <div class="inline-block leading-tight text-center text-label-md py-1 px-3 text-gray-800 dark:text-gray-100 bg-red-100 dark:bg-red-900 rounded-full">Cancelled</div>
                    </td>
                    <td>
                      <a href="#" class="hover:text-primary-500">#INV9834</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- content 3 -->
      <div class="max-sm:flex gap-4 sm:grid sm:grid-cols-3 md:gap-6 mb-4 md:mb-6 max-sm:-mx-4 max-sm:px-4 overflow-auto [&::-webkit-scrollbar]:hidden [-ms-overflow-style:'none'] [scrollbar-width:'none']">
        <!-- card -->
        <div class="relative overflow-hidden max-sm:w-60 max-sm:flex-shrink-0 py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Repeat Rate</h3>
            <span class="col-span-2 text-body-sm text-green-500 text-right">+16%</span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm">26,12<span>%</span></h4>
          </div>

          <hr class="border-surface-500 dark:border-surfacedark-500 my-5">

          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Avg. Order Value</h3>
            <span class="col-span-2 text-body-sm text-green-500 text-right">+2%</span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm">123,6<span>$</span></h4>
          </div>
          <!-- bg -->
          <div class="absolute -right-4 -bottom-24">
            <div class="bg-surface-500 dark:bg-surfacedark-500 opacity-50 dark:opacity-50 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
          </div>
          <div class="absolute -right-24 -bottom-12">
            <div class="bg-surface-500 dark:bg-surfacedark-500 opacity-50 dark:opacity-50 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
          </div>
        </div>
        <!-- card -->
        <div class="max-sm:w-60 max-sm:flex-shrink-0 py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Traffic Sources</h3>
          </div>
          <div class="relative w-3/4 mx-auto">
            <canvas class="max-w-100" id="SourceChart"></canvas>
          </div>
        </div>
        <!-- card -->
        <div class="relative overflow-hidden max-sm:w-60 max-sm:flex-shrink-0 py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Daily Visitor</h3>
            <span class="col-span-2 text-body-sm text-red-500 text-right">-8%</span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm">1,129</h4>
          </div>

          <hr class="border-surface-500 dark:border-surfacedark-500 my-5">

          <div class="flex flex-row gap-2 items-center justify-between pb-3">
            <h3 class="text-title-md text-gray-800 dark:text-gray-200">Conversion Rate</h3>
            <span class="col-span-2 text-body-sm text-red-500 text-right">-6%</span>
          </div>
          <div class="relative">
            <h4 class="text-headline-sm">12,4<span>%</span></h4>
          </div>

          <!-- bg -->
          <div class="absolute -right-4 -bottom-24">
            <div class="bg-surface-500 dark:bg-surfacedark-500 opacity-50 dark:opacity-50 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
          </div>
          <div class="absolute -right-24 -bottom-12">
            <div class="bg-surface-500 dark:bg-surfacedark-500 opacity-50 dark:opacity-50 w-36 h-36 rounded-full shadow-lg shadow-indigo-500/10"></div>
          </div>
        </div>
      </div>

      <!-- content 4 -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6 mb-4 md:mb-6">
        <div>
          <!-- card -->
          <div class="flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="pt-5 px-6 flex flex-row gap-2 items-center justify-between pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Bestseller</h3>
            </div>
            <div class="relative pb-6 overflow-hidden">
              <table class="table-bordered-bottom text-body-sm">
                <tbody class="[&_td]:px-6 [&_td]:py-3 text-body-sm">
                  <tr>
                    <td>
                      <span class="text-left">#1</span>
                    </td>
                    <td>
                      <a href="#">
                        <div class="flex flex-row items-center gap-4">
                          <img src="<?php echo base_url('assets/img/products/product.png')?>" class="w-10 h-10 rounded" alt="product">
                          <div class="flex flex-col">
                            Apple 2020 MacBook Air Laptop M1 Chip
                            <span class="text-label-md text-gray-500 mt-1">Computer</span>
                          </div>
                        </div>
                      </a>
                    </td>
                    <td>
                      <span class="text-left">2,226 Sales</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="text-left">#2</span>
                    </td>
                    <td>
                      <a href="#">
                        <div class="flex flex-row items-center gap-4">
                          <img src="<?php echo base_url('assets/img/products/product.png')?>" class="w-10 h-10 rounded" alt="product">
                          <div class="flex flex-col">
                            Leather Desk Pad Protector & Mouse Pad
                            <span class="text-label-md text-gray-500 mt-1">Computer</span>
                          </div>
                        </div>
                      </a>
                    </td>
                    <td>
                      <span class="text-left">2,126 Sales</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="text-left">#3</span>
                    </td>
                    <td>
                      <a href="#">
                        <div class="flex flex-row items-center gap-4">
                          <img src="<?php echo base_url('assets/img/products/product.png')?>" class="w-10 h-10 rounded" alt="product">
                          <div class="flex flex-col">
                            Aothia Large Dual Monitor Stand Riser
                            <span class="text-label-md text-gray-500 mt-1">Computer</span>
                          </div>
                        </div>
                      </a>
                    </td>
                    <td>
                      <span class="text-left">1,996 Sales</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span class="text-left">#4</span>
                    </td>
                    <td>
                      <a href="#">
                        <div class="flex flex-row items-center gap-4">
                          <img src="<?php echo base_url('assets/img/products/product.png')?>" class="w-10 h-10 rounded" alt="product">
                          <div class="flex flex-col">
                            Blink Video Doorbell and chime app alerts
                            <span class="text-label-md text-gray-500 mt-1">Smarthome</span>
                          </div>
                        </div>
                      </a>
                    </td>
                    <td>
                      <span class="text-left">1,726 Sales</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div>
          <!-- card -->
          <div class="py-8 px-6 flex flex-col rounded-xl bg-white dark:bg-gray-900">
            <div class="flex flex-row gap-2 items-center justify-between pb-3">
              <h3 class="text-title-md text-gray-800 dark:text-gray-200">Recent Actifity</h3>
            </div>
            <div class="relative">
              <ul class="h-72 overflow-y-auto scrollbars show mt-2 mb-6">
                <li class="flex">
                  <div class="relative flex-shrink-0 w-12 text-center">
                    <span class="absolute left-1/2 ml-0 top-10 -bottom-4 border-l border-dashed border-gray-200 dark:border-gray-700"></span>
                    <div class="h-12 w-12 flex justify-center items-center rounded-full bg-surface-400 dark:bg-surfacedark-400 mr-auto">
                      <span class="material-symbols-outlined text-primary-600 dark:text-primary-200">shopping_cart</span>
                    </div>
                  </div>

                  <div class="ml-6 pb-8">
                    <div class="flex flex-row justify-between pb-2">
                      <div class="text-label-md text-gray-500">Aug 7, 02.21 am</div>
                    </div>
                    <p class="text-body-md">New order has submited <a href="#" class="text-primary-600 dark:text-primary-200">"#INV3432"</a></p>
                  </div>
                </li>
                <li class="flex">
                  <div class="relative flex-shrink-0 w-12 text-center">
                    <span class="absolute left-1/2 ml-0 top-10 -bottom-4 border-l border-dashed border-gray-200 dark:border-gray-700"></span>
                    <div class="h-12 w-12 flex justify-center items-center rounded-full bg-surface-400 dark:bg-surfacedark-400 mr-auto">
                      <span class="material-symbols-outlined text-primary-600 dark:text-primary-200">inventory</span>
                    </div>
                  </div>

                  <div class="ml-6 pb-8">
                    <div class="flex flex-row justify-between pb-2">
                      <div class="text-label-md text-gray-500">Aug 6, 02.21 am</div>
                    </div>
                    <p class="text-body-md">Order has been processed <a href="#" class="text-primary-600 dark:text-primary-200">"#INV3431"</a></p>
                  </div>
                </li>
                <li class="flex">
                  <div class="relative flex-shrink-0 w-12 text-center">
                    <span class="absolute left-1/2 ml-0 top-10 -bottom-4 border-l border-dashed border-gray-200 dark:border-gray-700"></span>
                    <div class="h-12 w-12 flex justify-center items-center rounded-full bg-surface-400 dark:bg-surfacedark-400 mr-auto">
                      <span class="material-symbols-outlined text-primary-600 dark:text-primary-200">local_shipping</span>
                    </div>
                  </div>

                  <div class="ml-6 pb-8">
                    <div class="flex flex-row justify-between pb-2">
                      <div class="text-label-md text-gray-500">Aug 6, 20.10 pm</div>
                    </div>
                    <p class="text-body-md">Order has been shipped <a href="#" class="text-primary-600 dark:text-primary-200">"#INV3430"</a></p>
                  </div>
                </li>
                <li class="flex">
                  <div class="relative flex-shrink-0 w-12 text-center">
                    <span class="absolute left-1/2 ml-0 top-10 -bottom-4 border-l border-dashed border-gray-200 dark:border-gray-700"></span>
                    <div class="h-12 w-12 flex justify-center items-center rounded-full bg-surface-400 dark:bg-surfacedark-400 mr-auto">
                      <span class="material-symbols-outlined text-primary-600 dark:text-primary-200">local_shipping</span>
                    </div>
                  </div>

                  <div class="ml-6 pb-8">
                    <div class="flex flex-row justify-between pb-2">
                      <div class="text-label-md text-gray-500">Aug 6, 18.34 pm</div>
                    </div>
                    <p class="text-body-md">Order has been shipped <a href="#" class="text-primary-600 dark:text-primary-200">"#INV3429"</a></p>
                  </div>
                </li>
                <li class="flex">
                  <div class="relative flex-shrink-0 w-12 text-center">
                    <span class="absolute left-1/2 ml-0 top-10 -bottom-4 border-l border-dashed border-gray-200 dark:border-gray-700"></span>
                    <div class="h-12 w-12 flex justify-center items-center rounded-full bg-surface-400 dark:bg-surfacedark-400 mr-auto">
                      <span class="material-symbols-outlined text-primary-600 dark:text-primary-200">local_shipping</span>
                    </div>
                  </div>

                  <div class="ml-6 pb-8">
                    <div class="flex flex-row justify-between pb-2">
                      <div class="text-label-md text-gray-500">Aug 6, 03.21 am</div>
                    </div>
                    <p class="text-body-md">Order has been shipped <a href="#" class="text-primary-600 dark:text-primary-200">"#INV3428"</a></p>
                  </div>
                </li>
                <li class="flex">
                  <div class="relative flex-shrink-0 w-12 text-center">
                    <span class="absolute left-1/2 ml-0 top-10 -bottom-4 border-l border-dashed border-gray-200 dark:border-gray-700"></span>
                    <div class="h-12 w-12 flex justify-center items-center rounded-full bg-surface-400 dark:bg-surfacedark-400 mr-auto">
                      <span class="material-symbols-outlined text-primary-600 dark:text-primary-200">local_shipping</span>
                    </div>
                  </div>

                  <div class="ml-6 pb-8">
                    <div class="flex flex-row justify-between pb-2">
                      <div class="text-label-md text-gray-500">Aug 6, 03.21 am</div>
                    </div>
                    <p class="text-body-md">Order has been shipped <a href="#" class="text-primary-600 dark:text-primary-200">"#INV3428"</a></p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <footer class="footer absolute px-4 lg:px-8 lg:pl-3 left-0 lg:left-72 bottom-0 right-0">
    <div class="text-center py-6">
      <!-- Copyright text -->
      <p><script>document.write(new Date().getFullYear())</script> Goodash - All right reserved</p>
    </div>
  </footer>

  <!-- Mobile search -->
  <div id="dialog_search" class="[&.show]:opacity-100 [&.show]:h-full [&.show]:inset-0 [&.show_.dialog]:!block opacity-0 w-full h-0 z-[70] overflow-auto fixed left-0 top-0 flex items-center justify-center">
    <!-- dialogs -->
    <div class="dialog hidden fixed inset-0 z-50 flex-col gap-2 bg-neutral-10 dark:bg-neutral-900">
      <!-- header -->
      <div class="min-h-[56px] flex flex-row items-center justify-between gap-4 pl-4 pr-2 pt-4 pb-2">
        <h3 class="flex flex-grow text-title-md">Search</h3>

        <button data-close="#dialog_search" class="relative flex flex-row items-center justify-center gap-x-2 p-2 rounded-[6.25rem] text-sm tracking-[.00714em] font-medium text-primary-600 dark:bg-surfacedark-100 hover:bg-surface-200 focus:bg-surface-400 dark:text-primary-200 dark:hover:bg-surfacedark-200 dark:focus:bg-surfacedark-400">
          <span class="material-symbols-outlined">close</span>
        </button>
      </div>
      <hr class="w-full border-surface-100 dark:border-surfacedark-100">
      <div class="relative p-4">
        <div class="relative">
          <button class="absolute left-1 top-1 inline-flex !items-center justify-center w-10 h-10 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
            <span class="material-symbols-outlined !text-2xl">search</span>
          </button>
          <input type="search" placeholder="Search..." class="block w-full px-14 h-12 rounded-full bg-surface-200 dark:bg-surfacedark-200 focus:bg-white dark:focus:bg-gray-900 py-2 ring-0 focus:outline-none focus:shadow">
          <button class="absolute right-1 top-1 inline-flex !items-center justify-center w-10 h-10 gap-x-2 p-2.5 rounded-[6.25rem] text-sm tracking-[.00714em] text-center font-medium hover:bg-primary-600/[0.08] focus:bg-primary-600/[0.08] dark:hover:bg-primary-200/[0.08] dark:focus:bg-primary-200/[0.08]">
            <span class="material-symbols-outlined !text-2xl">keyboard_voice</span>
          </button>
        </div>
      </div>
      <!-- body -->
      <div class="relative px-4 h-screen overflow-y-scroll scrollbars">
        <!-- search history -->
        <div class="relative flex flex-col w-full px-2 pb-40">
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Joe Thomas</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Software</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Material 3</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Tailwind css</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Joe Thomas</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Software</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Material 3</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Tailwind css</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Joe Thomas</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Software</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Material 3</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
          <button class="flex flex-row items-center gap-4 py-3">
            <span class="material-symbols-outlined w-6">history</span>
            <span class="text-body-md">Tailwind css</span>
            <span class="material-symbols-outlined w-6 ml-auto transform rotate-45">arrow_back</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- bottom sheets dialogs -->
  <div id="sheets_b" class="[&.show_.bg-sheets]:opacity-60 [&.show_.bg-sheets]:inset-0 [&.show_.content-sheets]:translate-y-0">
    <!-- background sheets dialogs -->
    <div data-close="#sheets_b" class="bg-sheets fixed z-[60] opacity-0 -top-full bg-black"></div>

    <!-- bottom sheets dialogs content -->
    <div class="content-sheets fixed left-0 right-0 bottom-0 z-[70] transition-transform translate-y-full duration-[400ms] flex flex-col items-center w-full md:w-5/6 lg:w-1/2 gap-3 sm:mx-auto rounded-t-[28px] min-h-[40%] max-h-[70%] bg-surface-100 dark:bg-surfacedark-100 shadow-xl">
      <div class="flex justify-center p-4 w-full h-9">
        <div class="w-8 h-1 opacity-40 bg-gray-500 rounded-full"></div>
      </div>

      <!-- content -->
      <div class="w-full relative flex flex-col gap-4 px-4 sm:px-6">
        <h2 class="text-title-md text-center">Theme Settings</h2>
        <hr class="border-gray-100 dark:border-gray-800">
        <!-- light dark options -->
        <div class="flex flex-row items-center gap-4">
          <h3 class="text-title-sm">Light & Dark</h3>
          <div class="flex flex-row items-center gap-4">
            <button data-type="theme" id="lightdark" class="btn-outline relative flex flex-row items-center justify-center w-10 h-10 gap-x-2 py-2 px-4 rounded-full text-sm tracking-[.00714em] font-medium border border-gray-200 dark:border-gray-700">
              <span class="material-symbols-outlined !text-base dark-hidden" aria-label="Light Mode" data-microtip-position="top" role="tooltip">light_mode</span>
              <span class="material-symbols-outlined !text-base dark-block" aria-label="Dark Mode" data-microtip-position="top" role="tooltip">dark_mode</span>
            </button>
          </div>
        </div>
        <!-- theme colors -->
        <div class="flex flex-row items-center gap-4">
          <h3 class="text-title-sm">Theme Colors</h3>
          <!-- menus -->
          <div class="setSkin flex flex-wrap items-center gap-6">
            <div class="relative">
              <label for="red-theme" class="setSkin cursor-pointer flex flex-row items-center gap-2 py-2">
              <input type="radio" class="z-10 hidden opacity-0" name="themes" id="red-theme" value="red-theme">
              <span aria-label="Red" data-microtip-position="top" role="tooltip" class="w-4 h-4 sm:w-8 sm:h-8 rounded-full bg-error-600"></span>
              </label>
            </div>
            <div class="relative">
              <label for="green-theme" class="setSkin cursor-pointer flex flex-row items-center gap-2 py-2">
              <input type="radio" class="z-10 hidden opacity-0" name="themes" id="green-theme" value="green-theme">
              <span aria-label="Green" data-microtip-position="top" role="tooltip" class="w-4 h-4 sm:w-8 sm:h-8 rounded-full bg-green-600"></span>
              </label>
            </div>
            <div class="relative">
              <label for="yellow-theme" class="setSkin cursor-pointer flex flex-row items-center gap-2 py-2">
              <input type="radio" class="z-10 hidden opacity-0" name="themes" id="yellow-theme" value="yellow-theme">
              <span aria-label="Yellow" data-microtip-position="top" role="tooltip" class="w-4 h-4 sm:w-8 sm:h-8 rounded-full bg-yellow-600"></span>
              </label>
            </div>
            <div class="relative">
              <label for="purple-theme" class="setSkin cursor-pointer flex flex-row items-center gap-2 py-2">
              <input type="radio" class="z-10 hidden opacity-0" name="themes" id="purple-theme" value="purple-theme">
              <span aria-label="Purple" data-microtip-position="top" role="tooltip" class="w-4 h-4 sm:w-8 sm:h-8 rounded-full bg-purple-600"></span>
              </label>
            </div>
            <div class="relative">
              <label for="blue-theme" class="setSkin cursor-pointer flex flex-row items-center gap-2 py-2">
              <input type="radio" class="z-10 hidden opacity-0" name="themes" id="blue-theme" value="blue-theme">
              <span aria-label="Blue" data-microtip-position="top" role="tooltip" class="w-4 h-4 sm:w-8 sm:h-8 rounded-full bg-blue-600"></span>
              </label>
            </div>
          </div>
        </div>
        <!-- theme layout -->
        <div class="flex flex-row items-center gap-4 mb-12">
          <h3 class="text-title-sm">Layouts</h3>
          <!-- menus -->
          <div class="setLayout flex flex-wrap items-center gap-3 sm:gap-6">
            <div class="relative" aria-label="Layout Default" data-microtip-position="top" role="tooltip" >
              <label for="layout-default" class="setLayout cursor-pointer flex flex-row items-center gap-2">
              <input type="radio" class="z-10 hidden opacity-0" name="layouts" id="layout-default" value="layout-default">
              <img class="w-12 sm:w-24 rounded h-auto border border-gray-200 dark:border-gray-700 mb-1" src="<?php echo base_url('assets/img/layouts/default.jpg')?>" alt="layouts">
              </label>
            </div>
            <div class="relative" aria-label="Layout Compact" data-microtip-position="top" role="tooltip" >
              <label for="layout-compact" class="setLayout cursor-pointer flex flex-row items-center gap-2">
              <input type="radio" class="z-10 hidden opacity-0" name="layouts" id="layout-compact" value="layout-compact">
              <img class="w-12 sm:w-24 rounded h-auto border border-gray-200 dark:border-gray-700 mb-1" src="<?php echo base_url('assets/img/layouts/compact.jpg')?>" alt="layouts">
              </label>
            </div>
            <div class="relative" aria-label="Layout Compact Text" data-microtip-position="top" role="tooltip" >
              <label for="layout-compact-text" class="setLayout cursor-pointer flex flex-row items-center gap-2">
              <input type="radio" class="z-10 hidden opacity-0" name="layouts" id="layout-compact-text" value="layout-compact-text">
              <img class="w-12 sm:w-24 rounded h-auto border border-gray-200 dark:border-gray-700 mb-1" src="<?php echo base_url('assets/img/layouts/compact-text.jpg')?>" alt="layouts">
              </label>
            </div>
            <div class="relative" aria-label="Layout Classic" data-microtip-position="top" role="tooltip" >
              <label for="layout-classic" class="setLayout cursor-pointer flex flex-row items-center gap-2">
              <input type="radio" class="z-10 hidden opacity-0" name="layouts" id="layout-classic" value="layout-classic">
              <img class="w-12 sm:w-24 rounded h-auto border border-gray-200 dark:border-gray-700 mb-1" src="<?php echo base_url('assets/img/layouts/classic.jpg')?>" alt="layouts">
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Charts js -->
  <script src="<?php echo base_url('assets/vendors/chart.js/dist/chart.umd.js')?>"></script>
  <!-- Chart config -->
  <script src="<?php echo base_url('assets/js/charts/ecommerce.js')?>"></script>

  <!-- Tailmater javascript -->
  <script src="<?php echo base_url('assets/js/tailmater.js') ?>"></script>
</body>

<!-- Mirrored from goodash.tailwinddashboard.com/ecommerce/ecommerce-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Sep 2023 19:18:05 GMT -->
</html>