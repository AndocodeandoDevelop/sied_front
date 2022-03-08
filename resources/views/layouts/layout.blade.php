<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head><base href="">
    <title>
        @yield('nombre')
    </title>
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    @yield('css')
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
            <!--begin::Aside Toolbarl-->
            <div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
                <!--begin::User-->
                <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px">
                        <img src="assets/media/avatars/150-26.jpg" alt="" />
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Wrapper-->
                    <div class="aside-user-info flex-row-fluid flex-wrap ms-5">
                        <!--begin::Section-->
                        <div class="d-flex">
                            <!--begin::Info-->
                            <div class="flex-grow-1 me-2">
                                <!--begin::Username-->
                                <a href="#" class="text-white text-hover-primary fs-6 fw-bold">Paul Melone</a>
                                <!--end::Username-->
                                <!--begin::Description-->
                                <span class="text-gray-600 fw-bold d-block fs-8 mb-1">Python Dev</span>
                                <!--end::Description-->
                                <!--begin::Label-->
                                <div class="d-flex align-items-center text-success fs-9">
                                    <span class="bullet bullet-dot bg-success me-1"></span>online</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Info-->
                            <!--begin::User menu-->
                            <div class="me-n2">
                                <!--begin::Action-->
                                <a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
                                    <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                    <span class="svg-icon svg-icon-muted svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
													<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
												</svg>
											</span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="assets/media/avatars/150-26.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                                                    <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
                                                <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                                            </div>
                                            <!--end::Username-->
                                        </div>
                                    </div>

                                </div>
                                <!--end::Menu-->
                                <!--end::Action-->
                            </div>
                            <!--end::User menu-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::User-->
                <!--begin::Aside search-->
                <div class="aside-search py-5">
                    <!--begin::Search-->
                    <div id="kt_header_search" class="d-flex align-items-center" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start" data-kt-menu-flip="bottom">
                        <!--begin::Form-->
                        <form data-kt-search-element="form" class="w-100 position-relative" autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden" />
                            <!--end::Hidden input-->
                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-2 search-icon position-absolute top-50 translate-middle-y ms-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
											<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
										</svg>
									</span>
                            <!--end::Svg Icon-->
                            <!--end::Icon-->
                            <!--begin::Input-->
                            <input type="text" class="form-control ps-13 fs-7 h-40px" name="search" value="" placeholder="Quick Search" data-kt-search-element="input" />
                            <!--end::Input-->
                            <!--begin::Spinner-->

                        </form>
                        <!--end::Form-->
                        <!--begin::Menu-->
                        <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-350px py-7 px-7 overflow-hidden">
                            <!--begin::Wrapper-->
                            <div data-kt-search-element="wrapper">
                                <!--begin::Recently viewed-->
                                <div data-kt-search-element="results" class="d-none">
                                    <!--begin::Items-->
                                    <div class="scroll-y mh-200px mh-lg-350px">
                                        <!--begin::Category title-->
                                        <h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
                                        <!--end::Category title-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="assets/media/avatars/150-1.jpg" alt="" />
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-bold">
                                                <span class="fs-6 fw-bold">Karina Clark</span>
                                                <span class="fs-7 fw-bold text-muted">Marketing Manager</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="assets/media/avatars/150-3.jpg" alt="" />
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-bold">
                                                <span class="fs-6 fw-bold">Olivia Bold</span>
                                                <span class="fs-7 fw-bold text-muted">Software Engineer</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="assets/media/avatars/150-8.jpg" alt="" />
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-bold">
                                                <span class="fs-6 fw-bold">Ana Clark</span>
                                                <span class="fs-7 fw-bold text-muted">UI/UX Designer</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="assets/media/avatars/150-11.jpg" alt="" />
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-bold">
                                                <span class="fs-6 fw-bold">Nick Pitola</span>
                                                <span class="fs-7 fw-bold text-muted">Art Director</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
                                                <img src="assets/media/avatars/150-12.jpg" alt="" />
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-bold">
                                                <span class="fs-6 fw-bold">Edward Kulnic</span>
                                                <span class="fs-7 fw-bold text-muted">System Administrator</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Category title-->
                                        <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
                                        <!--end::Category title-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
														</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-bold">
                                                <span class="fs-6 fw-bold">Company Rbranding</span>
                                                <span class="fs-7 fw-bold text-muted">UI Design</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
														</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-bold">
                                                <span class="fs-6 fw-bold">Company Re-branding</span>
                                                <span class="fs-7 fw-bold text-muted">Web Development</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
														</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-bold">
                                                <span class="fs-6 fw-bold">Business Analytics App</span>
                                                <span class="fs-7 fw-bold text-muted">Administration</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
														</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-bold">
                                                <span class="fs-6 fw-bold">EcoLeaf App Launch</span>
                                                <span class="fs-7 fw-bold text-muted">Marketing</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
														</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column justify-content-start fw-bold">
                                                <span class="fs-6 fw-bold">Tower Group Website</span>
                                                <span class="fs-7 fw-bold text-muted">Google Adwords</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Category title-->
                                        <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
                                        <!--end::Category title-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
																	<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
																</svg>
															</span>
                                                            <!--end::Svg Icon-->
														</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-bold">Si-Fi Project by AU Themes</span>
                                                <span class="fs-7 fw-bold text-muted">#45670</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
																	<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
																	<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
																	<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
																</svg>
															</span>
                                                            <!--end::Svg Icon-->
														</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-bold">Shopix Mobile App Planning</span>
                                                <span class="fs-7 fw-bold text-muted">#45690</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
																	<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
																	<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
																</svg>
															</span>
                                                            <!--end::Svg Icon-->
														</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-bold">Finance Monitoring SAAS Discussion</span>
                                                <span class="fs-7 fw-bold text-muted">#21090</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-40px me-4">
														<span class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-primary">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
																	<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
																</svg>
															</span>
                                                            <!--end::Svg Icon-->
														</span>
                                            </div>
                                            <!--end::Symbol-->
                                            <!--begin::Title-->
                                            <div class="d-flex flex-column">
                                                <span class="fs-6 fw-bold">Dashboard Analitics Launch</span>
                                                <span class="fs-7 fw-bold text-muted">#34560</span>
                                            </div>
                                            <!--end::Title-->
                                        </a>
                                        <!--end::Item-->
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Recently viewed-->
                                <!--begin::Recently viewed-->
                                <div data-kt-search-element="main">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-stack fw-bold mb-5">
                                        <!--begin::Label-->
                                        <span class="text-muted fs-6 me-2">Recently Searched</span>
                                        <!--end::Label-->
                                        <!--begin::Toolbar-->
                                        <div class="d-flex" data-kt-search-element="toolbar">
                                            <!--begin::Preferences toggle-->
                                            <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
                                                <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                                <span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
																<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Preferences toggle-->
                                            <!--begin::Advanced search toggle-->
                                            <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                <span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
															</svg>
														</span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Advanced search toggle-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Items-->

                                    <!--end::Items-->
                                </div>
                                <!--end::Recently viewed-->
                                <!--begin::Empty-->
                                <div data-kt-search-element="empty" class="text-center d-none">
                                    <!--begin::Icon-->
                                    <div class="pt-10 pb-10">
                                        <!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
                                        <span class="svg-icon svg-icon-4x opacity-50">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="black" />
														<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black" />
														<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="black" />
														<path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="black" />
													</svg>
												</span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Message-->
                                    <div class="pb-15 fw-bold">
                                        <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                        <div class="text-muted fs-7">Please try again with a different query</div>
                                    </div>
                                    <!--end::Message-->
                                </div>
                                <!--end::Empty-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Preferences-->
                            <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                <!--begin::Heading-->
                                <h3 class="fw-bold text-dark mb-7">Advanced Search</h3>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <!--begin::Radio group-->
                                    <div class="nav-group nav-group-fluid">
                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="type" value="has" checked="checked" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="type" value="users" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="type" value="orders" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="type" value="projects" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Radio group-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <!--begin::Radio group-->
                                    <div class="nav-group nav-group-fluid">
                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
                                        </label>
                                        <!--end::Option-->
                                        <!--begin::Option-->
                                        <label>
                                            <input type="radio" class="btn-check" name="attachment" value="any" />
                                            <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Radio group-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-5">
                                    <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                                        <option value="next">Within the next</option>
                                        <option value="last">Within the last</option>
                                        <option value="between">Between</option>
                                        <option value="on">On</option>
                                    </select>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="row mb-8">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                                            <option value="days">Days</option>
                                            <option value="weeks">Weeks</option>
                                            <option value="months">Months</option>
                                            <option value="years">Years</option>
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
                                    <a href="../../demo8/dist/pages/search/horizontal.html" class="btn btn-sm fw-bolder btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Preferences-->
                            <!--begin::Preferences-->
                            <form data-kt-search-element="preferences" class="pt-1 d-none">
                                <!--begin::Heading-->
                                <h3 class="fw-bold text-dark mb-7">Search Preferences</h3>
                                <!--end::Heading-->
                                <!--begin::Input group-->
                                <div class="pb-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Projects</span>
                                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    </label>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Targets</span>
                                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    </label>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Affiliate Programs</span>
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </label>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Referrals</span>
                                        <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                    </label>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="py-4 border-bottom">
                                    <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                        <span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Users</span>
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </label>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end pt-7">
                                    <button type="reset" class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
                                    <button type="submit" class="btn btn-sm fw-bolder btn-primary">Save Changes</button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Preferences-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Aside search-->
                <!--end::Aside user-->
            </div>
            <!--end::Aside Toolbarl-->
            <!--begin::Aside menu-->
            <div class="aside-menu flex-column-fluid">
                <!--begin::Aside Menu-->
                <div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item">
                            <div class="menu-content pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link active" href="../../demo8/dist/index.html">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                                <span class="menu-title">Default</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="../../demo8/dist/landing.html">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="black" />
													<path d="M19 10.4C19 10.3 19 10.2 19 10C19 8.9 18.1 8 17 8H16.9C15.6 6.2 14.6 4.29995 13.9 2.19995C13.3 2.09995 12.6 2 12 2C11.9 2 11.8 2 11.7 2C12.4 4.6 13.5 7.10005 15.1 9.30005C15 9.50005 15 9.7 15 10C15 11.1 15.9 12 17 12C17.1 12 17.3 12 17.4 11.9C18.6 13 19.9 14 21.4 14.8C21.4 14.8 21.5 14.8 21.5 14.9C21.7 14.2 21.8 13.5 21.9 12.7C20.9 12.1 19.9 11.3 19 10.4Z" fill="black" />
													<path d="M12 15C11 13.1 10.2 11.2 9.60001 9.19995C9.90001 8.89995 10 8.4 10 8C10 7.1 9.40001 6.39998 8.70001 6.09998C8.40001 4.99998 8.20001 3.90005 8.00001 2.80005C7.30001 3.10005 6.70001 3.40002 6.20001 3.90002C6.40001 4.80002 6.50001 5.6 6.80001 6.5C6.40001 6.9 6.10001 7.4 6.10001 8C6.10001 9 6.80001 9.8 7.80001 10C8.30001 11.6 9.00001 13.2 9.70001 14.7C7.10001 13.2 4.70001 11.5 2.40001 9.5C2.20001 10.3 2.10001 11.1 2.10001 11.9C4.60001 13.9 7.30001 15.7 10.1 17.2C10.2 18.2 11 19 12 19C12.6 20 13.2 20.9 13.9 21.8C14.6 21.7 15.3 21.5 15.9 21.2C15.4 20.5 14.9 19.8 14.4 19.1C15.5 19.5 16.5 19.9 17.6 20.2C18.3 19.8 18.9 19.2 19.4 18.6C17.6 18.1 15.7 17.5 14 16.7C13.9 15.8 13.1 15 12 15Z" fill="black" />
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
                                <span class="menu-title">Landing Page</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <div class="menu-content pt-8 pb-2">
                                <span class="menu-section text-muted text-uppercase fs-8 ls-1">Crafted</span>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="black" />
													<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="black" />
													<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="black" />
													<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="black" />
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">Pages</span>
										<span class="menu-arrow"></span>
									</span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Profile</span>
												<span class="menu-arrow"></span>
											</span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/pages/profile/overview.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Overview</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/pages/profile/projects.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Projects</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/pages/profile/campaigns.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Campaigns</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/pages/profile/documents.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Documents</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/pages/profile/connections.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Connections</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/pages/profile/activity.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Activity</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Projects</span>
												<span class="menu-arrow"></span>
											</span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/pages/projects/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">My Projects</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/pages/projects/project.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">View Project</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/pages/projects/targets.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Targets</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/pages/projects/budget.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Budget</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/pages/projects/users.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Users</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/pages/projects/files.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Files</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/pages/projects/activity.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Activity</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo8/dist/pages/projects/settings.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Settings</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
													<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">Account</span>
										<span class="menu-arrow"></span>
									</span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/account/overview.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">Overview</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/account/settings.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">Settings</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="../../demo8/dist/account/security.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                            <span class="menu-title">Security</span>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21 10.7192H3C2.4 10.7192 2 11.1192 2 11.7192C2 12.3192 2.4 12.7192 3 12.7192H6V14.7192C6 18.0192 8.7 20.7192 12 20.7192C15.3 20.7192 18 18.0192 18 14.7192V12.7192H21C21.6 12.7192 22 12.3192 22 11.7192C22 11.1192 21.6 10.7192 21 10.7192Z" fill="black" />
													<path d="M11.6 21.9192C11.4 21.9192 11.2 21.8192 11 21.7192C10.6 21.4192 10.5 20.7191 10.8 20.3191C11.7 19.1191 12.3 17.8191 12.7 16.3191C12.8 15.8191 13.4 15.4192 13.9 15.6192C14.4 15.7192 14.8 16.3191 14.6 16.8191C14.2 18.5191 13.4 20.1192 12.4 21.5192C12.2 21.7192 11.9 21.9192 11.6 21.9192ZM8.7 19.7192C10.2 18.1192 11 15.9192 11 13.7192V8.71917C11 8.11917 11.4 7.71917 12 7.71917C12.6 7.71917 13 8.11917 13 8.71917V13.0192C13 13.6192 13.4 14.0192 14 14.0192C14.6 14.0192 15 13.6192 15 13.0192V8.71917C15 7.01917 13.7 5.71917 12 5.71917C10.3 5.71917 9 7.01917 9 8.71917V13.7192C9 15.4192 8.4 17.1191 7.2 18.3191C6.8 18.7191 6.9 19.3192 7.3 19.7192C7.5 19.9192 7.7 20.0192 8 20.0192C8.3 20.0192 8.5 19.9192 8.7 19.7192ZM6 16.7192C6.5 16.7192 7 16.2192 7 15.7192V8.71917C7 8.11917 7.1 7.51918 7.3 6.91918C7.5 6.41918 7.2 5.8192 6.7 5.6192C6.2 5.4192 5.59999 5.71917 5.39999 6.21917C5.09999 7.01917 5 7.81917 5 8.71917V15.7192V15.8191C5 16.3191 5.5 16.7192 6 16.7192ZM9 4.71917C9.5 4.31917 10.1 4.11918 10.7 3.91918C11.2 3.81918 11.5 3.21917 11.4 2.71917C11.3 2.21917 10.7 1.91916 10.2 2.01916C9.4 2.21916 8.59999 2.6192 7.89999 3.1192C7.49999 3.4192 7.4 4.11916 7.7 4.51916C7.9 4.81916 8.2 4.91918 8.5 4.91918C8.6 4.91918 8.8 4.81917 9 4.71917ZM18.2 18.9192C18.7 17.2192 19 15.5192 19 13.7192V8.71917C19 5.71917 17.1 3.1192 14.3 2.1192C13.8 1.9192 13.2 2.21917 13 2.71917C12.8 3.21917 13.1 3.81916 13.6 4.01916C15.6 4.71916 17 6.61917 17 8.71917V13.7192C17 15.3192 16.8 16.8191 16.3 18.3191C16.1 18.8191 16.4 19.4192 16.9 19.6192C17 19.6192 17.1 19.6192 17.2 19.6192C17.7 19.6192 18 19.3192 18.2 18.9192Z" fill="black" />
												</svg>
											</span>
                                            <!--end::Svg Icon-->
										</span>
										<span class="menu-title">Authentication</span>
										<span class="menu-arrow"></span>
									</span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Basic Flow</span>
												<span class="menu-arrow"></span>
											</span>
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo8/dist/authentication/flows/basic/sign-in.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                    <span class="menu-title">Sign-in</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="../../demo8/dist/authentication/flows/basic/sign-up.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                    <span class="menu-title">Sign-up</span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>




                                </div>
                            </div>


                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Aside Menu-->
                </div>
                <!--end::Aside menu-->
                <!--begin::Footer-->

                <!--end::Footer-->
            </div>

            <!--   jjjjjjjjjjjjjjjjjj  -->
        </div>
    </div>
</div>
<div id="kt_header" style="" class="header align-items-stretch">
    <!--begin::Brand-->
    <div class="header-brand">
        <!--begin::Logo-->
        <a href="../../demo8/dist/index.html">
            <img alt="Logo" src="assets/media/logos/logo-1-dark.svg" class="h-25px h-lg-25px" />
        </a>
        <!--end::Logo-->
        <!--begin::Aside minimize-->
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr092.svg-->
            <span class="svg-icon svg-icon-1 me-n1 minimize-default">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.3" x="8.5" y="11" width="12" height="2" rx="1" fill="black" />
										<path d="M10.3687 11.6927L12.1244 10.2297C12.5946 9.83785 12.6268 9.12683 12.194 8.69401C11.8043 8.3043 11.1784 8.28591 10.7664 8.65206L7.84084 11.2526C7.39332 11.6504 7.39332 12.3496 7.84084 12.7474L10.7664 15.3479C11.1784 15.7141 11.8043 15.6957 12.194 15.306C12.6268 14.8732 12.5946 14.1621 12.1244 13.7703L10.3687 12.3073C10.1768 12.1474 10.1768 11.8526 10.3687 11.6927Z" fill="black" />
										<path opacity="0.5" d="M16 5V6C16 6.55228 15.5523 7 15 7C14.4477 7 14 6.55228 14 6C14 5.44772 13.5523 5 13 5H6C5.44771 5 5 5.44772 5 6V18C5 18.5523 5.44771 19 6 19H13C13.5523 19 14 18.5523 14 18C14 17.4477 14.4477 17 15 17C15.5523 17 16 17.4477 16 18V19C16 20.1046 15.1046 21 14 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H14C15.1046 3 16 3.89543 16 5Z" fill="black" />
									</svg>
								</span>
            <!--end::Svg Icon-->
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
            <span class="svg-icon svg-icon-1 minimize-active">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="black" />
										<path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="black" />
										<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
									</svg>
								</span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Aside minimize-->
        <!--begin::Aside toggle-->
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
            <div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                <span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
                <!--end::Svg Icon-->
            </div>
        </div>
        <!--end::Aside toggle-->
    </div>
    <!--end::Brand-->
    <div class="toolbar">
        <!--begin::Toolbar-->
        <div class="container-fluid py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-5">
                <!--begin::Title-->
                <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">Dashboard</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="../../demo8/dist/index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Default</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Action group-->
            <div class="d-flex align-items-center overflow-auto pt-3 pt-lg-0">
                <!--begin::Action wrapper-->
                <div class="d-flex align-items-center">
                    <!--begin::Label-->
                    <span class="fs-7 fw-bolder text-gray-700 pe-4 text-nowrap d-none d-xxl-block">Sort By:</span>
                    <!--end::Label-->
                    <!--begin::Select-->
                    <select class="form-select form-select-sm form-select-solid w-100px w-xxl-125px" data-control="select2" data-placeholder="Latest" data-hide-search="true">
                        <option value=""></option>
                        <option value="1" selected="selected">Latest</option>
                        <option value="2">In Progress</option>
                        <option value="3">Done</option>
                    </select>
                    <!--end::Select-->
                </div>
                <!--end::Action wrapper-->
                <!--begin::Action wrapper-->
                <div class="d-flex align-items-center">
                    <!--begin::Separartor-->
                    <div class="bullet bg-secondary h-35px w-1px mx-5"></div>
                    <!--end::Separartor-->
                    <!--begin::Label-->
                    <span class="fs-7 text-gray-700 fw-bolder d-none d-sm-block">Impact
										<span class="d-none d-xxl-inline">Level</span>:</span>
                    <!--end::Label-->
                    <!--begin::NoUiSlider-->
                    <div class="d-flex align-items-center ps-4" id="kt_toolbar">
                        <div id="kt_toolbar_slider" class="noUi-target noUi-target-primary w-75px w-xxl-150px noUi-sm"></div>
                        <span id="kt_toolbar_slider_value" class="d-flex flex-center bg-light-primary rounded-circle w-35px h-35px ms-4 fs-7 fw-bolder text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Set impact level"></span>
                    </div>
                    <!--end::NoUiSlider-->
                    <!--begin::Separartor-->
                    <div class="bullet bg-secondary h-35px w-1px mx-5"></div>
                    <!--end::Separartor-->
                </div>
                <!--end::Action wrapper-->
                <!--begin::Action wrapper-->
                <div class="d-flex align-items-center">
                    <!--begin::Label-->
                    <span class="fs-7 text-gray-700 fw-bolder pe-3 d-none d-xxl-block">Quick Tools:</span>
                    <!--end::Label-->
                    <!--begin::Actions-->
                    <div class="d-flex">
                        <!--begin::Action-->
                        <a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                            <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                            <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
														<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
													</svg>
												</span>
                            <!--end::Svg Icon-->
                        </a>
                        <!--end::Action-->
                        <!--begin::Notifications-->
                        <div class="d-flex align-items-center">
                            <!--begin::Menu- wrapper-->
                            <a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="black" />
															<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="black" />
															<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="black" />
															<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="black" />
														</svg>
													</span>
                                <!--end::Svg Icon-->
                            </a>

                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Notifications-->
                        <!--begin::Quick links-->
                        <div class="d-flex align-items-center">
                            <!--begin::Menu wrapper-->
                            <a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
                                <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z" fill="black" />
															<path opacity="0.3" d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z" fill="black" />
															<path opacity="0.3" d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z" fill="black" />
															<path opacity="0.3" d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z" fill="black" />
														</svg>
													</span>
                                <!--end::Svg Icon-->
                            </a>

                            <!--end::Menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Quick links-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Action wrapper-->
            </div>
            <!--end::Action group-->
        </div>
        <!--end::Toolbar-->
    </div>
</div>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    @yield('content')
</div>
<script src="assets/plugins/global/plugins.bundle.js"></script>
<script src="assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/modals/create-app.js"></script>
<script src="assets/js/custom/modals/upgrade-plan.js"></script>
@yield('js')
</body>
</html>
