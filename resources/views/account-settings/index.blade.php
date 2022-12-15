{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<main class="page-wrapper">
    <div class="container">
        <div class="account-settings page">
            <div class="page-heading page-heading--with-buttons">
                <!-- <div class="account-settings__heading page-heading__title-wr">
                    <h1 class="page-heading__title">Account Settings</h1>
                </div> -->
                <div class="page-heading__btns account-settings__btns {{ $tab == 'myReports' ? 'account-settings__btns--active' : '' }}" id="headingButtons">
                    <div class="reports-available">
                        <span class="reports-available__title">Reports available</span>
                        <span class="reports-available__number">2</span>
                    </div>
                    <a class="btn btn--accent" href="/">Buy reports</a>
                </div>
            </div>
            <div class="account-settings__grid">
                <div class="account-settings__nav-wr">
                    <ul class="account-settings__nav-wr nav-tabs" id="settingsTabs">
                        <li class="nav-tabs__item">
                            <a class="nav-tabs__link nav-tabs-item nav-tabs-item--choose {{ $tab == 'editProfile' ? 'nav-tabs-item--active' : '' }}" href="#editProfile" data-tab="editProfile">
                                <div class="nav-tabs__item-icon nav-tabs-item__icon-wr">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.7812 3.75C9.48656 3.75 8.4375 4.79906 8.4375 6.09375C8.4375 7.38844 9.48656 8.4375 10.7812 8.4375C12.0759 8.4375 13.125 7.38844 13.125 6.09375C13.125 4.79906 12.0759 3.75 10.7812 3.75Z" fill="white" />
                                        <path d="M10.781 8.4375C10.1923 8.4375 9.6326 8.54625 9.12354 8.74125C9.8651 9.69469 10.3123 10.8881 10.3123 12.1875C10.3123 12.5306 10.2129 12.8484 10.0517 13.125H14.0623C14.5798 13.125 14.9998 12.705 14.9998 12.1875C14.9998 10.1194 13.107 8.4375 10.781 8.4375Z" fill="white" />
                                        <path d="M8.265 9.195C7.40438 8.16844 6.12937 7.5 4.6875 7.5C2.10281 7.5 0 9.60281 0 12.1875C0 12.4462 0.105 12.6806 0.274687 12.8503C0.444375 13.02 0.67875 13.125 0.9375 13.125H7.5H8.4375C8.955 13.125 9.375 12.705 9.375 12.1875C9.375 11.0447 8.9475 10.0097 8.265 9.195Z" fill="white" />
                                        <path d="M4.6875 7.5C3.13687 7.5 1.875 6.23812 1.875 4.6875C1.875 3.13687 3.13687 1.875 4.6875 1.875C6.23812 1.875 7.5 3.13687 7.5 4.6875C7.5 6.23812 6.23812 7.5 4.6875 7.5Z" fill="white" />
                                    </svg>
                                </div>
                                <span class="nav-tabs-item__name">Edit Profile</span>
                            </a>
                        </li>
                        {{-- <li class="nav-tabs__item">
                        <a class="nav-tabs__link nav-tabs-item nav-tabs-item--choose vin-cls {{ $tab == 'vindashboard' ? 'nav-tabs-item--active' : '' }}" href="#vindashboard" data-tab="vindashboard">
                        <div class="nav-tabs__item-icon nav-tabs-item__icon-wr">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.25 0H3.75C2.71594 0 1.875 0.840937 1.875 1.875V13.125C1.875 14.1591 2.71594 15 3.75 15H11.25C12.2841 15 13.125 14.1591 13.125 13.125V1.875C13.125 0.840937 12.2841 0 11.25 0ZM10.7812 12.1875H7.03125C6.7725 12.1875 6.5625 11.9775 6.5625 11.7188C6.5625 11.46 6.7725 11.25 7.03125 11.25H10.7812C11.04 11.25 11.25 11.46 11.25 11.7188C11.25 11.9775 11.04 12.1875 10.7812 12.1875ZM10.7812 9.375H7.03125C6.7725 9.375 6.5625 9.165 6.5625 8.90625C6.5625 8.6475 6.7725 8.4375 7.03125 8.4375H10.7812C11.04 8.4375 11.25 8.6475 11.25 8.90625C11.25 9.165 11.04 9.375 10.7812 9.375ZM10.7812 6.5625H7.03125C6.7725 6.5625 6.5625 6.3525 6.5625 6.09375C6.5625 5.835 6.7725 5.625 7.03125 5.625H10.7812C11.04 5.625 11.25 5.835 11.25 6.09375C11.25 6.3525 11.04 6.5625 10.7812 6.5625ZM10.7812 3.75H7.03125C6.7725 3.75 6.5625 3.54 6.5625 3.28125C6.5625 3.0225 6.7725 2.8125 7.03125 2.8125H10.7812C11.04 2.8125 11.25 3.0225 11.25 3.28125C11.25 3.54 11.04 3.75 10.7812 3.75ZM5.15625 3.75H4.21875C3.96 3.75 3.75 3.54 3.75 3.28125C3.75 3.0225 3.96 2.8125 4.21875 2.8125H5.15625C5.415 2.8125 5.625 3.0225 5.625 3.28125C5.625 3.54 5.415 3.75 5.15625 3.75ZM5.15625 6.5625H4.21875C3.96 6.5625 3.75 6.3525 3.75 6.09375C3.75 5.835 3.96 5.625 4.21875 5.625H5.15625C5.415 5.625 5.625 5.835 5.625 6.09375C5.625 6.3525 5.415 6.5625 5.15625 6.5625ZM5.15625 9.375H4.21875C3.96 9.375 3.75 9.165 3.75 8.90625C3.75 8.6475 3.96 8.4375 4.21875 8.4375H5.15625C5.415 8.4375 5.625 8.6475 5.625 8.90625C5.625 9.165 5.415 9.375 5.15625 9.375ZM5.15625 12.1875H4.21875C3.96 12.1875 3.75 11.9775 3.75 11.7188C3.75 11.46 3.96 11.25 4.21875 11.25H5.15625C5.415 11.25 5.625 11.46 5.625 11.7188C5.625 11.9775 5.415 12.1875 5.15625 12.1875Z" fill="#0077C6" />
                            </svg>
                        </div>
                        <span class="nav-tabs-item__name">Vin Dashboard</span>
                        </a>
                        </li> --}}
                        <li class="nav-tabs__item">
                            <a class="nav-tabs__link nav-tabs-item nav-tabs-item--choose {{ $tab == 'myReports' ? 'nav-tabs-item--active' : '' }}" href="#myReports" data-tab="myReports">
                                <div class="nav-tabs__item-icon nav-tabs-item__icon-wr">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.25 0H3.75C2.71594 0 1.875 0.840937 1.875 1.875V13.125C1.875 14.1591 2.71594 15 3.75 15H11.25C12.2841 15 13.125 14.1591 13.125 13.125V1.875C13.125 0.840937 12.2841 0 11.25 0ZM10.7812 12.1875H7.03125C6.7725 12.1875 6.5625 11.9775 6.5625 11.7188C6.5625 11.46 6.7725 11.25 7.03125 11.25H10.7812C11.04 11.25 11.25 11.46 11.25 11.7188C11.25 11.9775 11.04 12.1875 10.7812 12.1875ZM10.7812 9.375H7.03125C6.7725 9.375 6.5625 9.165 6.5625 8.90625C6.5625 8.6475 6.7725 8.4375 7.03125 8.4375H10.7812C11.04 8.4375 11.25 8.6475 11.25 8.90625C11.25 9.165 11.04 9.375 10.7812 9.375ZM10.7812 6.5625H7.03125C6.7725 6.5625 6.5625 6.3525 6.5625 6.09375C6.5625 5.835 6.7725 5.625 7.03125 5.625H10.7812C11.04 5.625 11.25 5.835 11.25 6.09375C11.25 6.3525 11.04 6.5625 10.7812 6.5625ZM10.7812 3.75H7.03125C6.7725 3.75 6.5625 3.54 6.5625 3.28125C6.5625 3.0225 6.7725 2.8125 7.03125 2.8125H10.7812C11.04 2.8125 11.25 3.0225 11.25 3.28125C11.25 3.54 11.04 3.75 10.7812 3.75ZM5.15625 3.75H4.21875C3.96 3.75 3.75 3.54 3.75 3.28125C3.75 3.0225 3.96 2.8125 4.21875 2.8125H5.15625C5.415 2.8125 5.625 3.0225 5.625 3.28125C5.625 3.54 5.415 3.75 5.15625 3.75ZM5.15625 6.5625H4.21875C3.96 6.5625 3.75 6.3525 3.75 6.09375C3.75 5.835 3.96 5.625 4.21875 5.625H5.15625C5.415 5.625 5.625 5.835 5.625 6.09375C5.625 6.3525 5.415 6.5625 5.15625 6.5625ZM5.15625 9.375H4.21875C3.96 9.375 3.75 9.165 3.75 8.90625C3.75 8.6475 3.96 8.4375 4.21875 8.4375H5.15625C5.415 8.4375 5.625 8.6475 5.625 8.90625C5.625 9.165 5.415 9.375 5.15625 9.375ZM5.15625 12.1875H4.21875C3.96 12.1875 3.75 11.9775 3.75 11.7188C3.75 11.46 3.96 11.25 4.21875 11.25H5.15625C5.415 11.25 5.625 11.46 5.625 11.7188C5.625 11.9775 5.415 12.1875 5.15625 12.1875Z" fill="#0077C6" />
                                    </svg>
                                </div>
                                <span class="nav-tabs-item__name">My Reports</span>
                            </a>
                        </li>
                        {{-- <li class="nav-tabs__item">
                        <a class="nav-tabs__link nav-tabs-item nav-tabs-item--choose" href="#paymentMethods" data-tab="paymentMethods">
                        <div class="nav-tabs__item-icon nav-tabs-item__icon-wr">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 3.37875C15 2.54813 14.3269 1.875 13.4963 1.875H7.13438L4.23281 0.134062C4.08469 0.045 3.91781 0 3.75 0C3.61594 0 3.48188 0.0290625 3.35719 0.08625C3.07594 0.216562 2.87625 0.477187 2.82562 0.782812L2.64375 1.875H1.875C0.839062 1.875 0 2.71406 0 3.75V14.0625C0 14.58 0.42 15 0.9375 15H14.0625C14.58 15 15 14.58 15 14.0625V11.25H10.7812C10.005 11.25 9.375 10.62 9.375 9.84375C9.375 9.0675 10.005 8.4375 10.7812 8.4375H15V3.37875ZM14.0625 4.67812V4.6875H1.875C1.35844 4.6875 0.9375 4.26656 0.9375 3.75C0.9375 3.36094 1.17656 3.02719 1.515 2.88563C1.62563 2.83875 1.7475 2.8125 1.875 2.8125H2.48719L2.33063 3.75H10.2591L8.69719 2.8125H13.4963C13.8084 2.8125 14.0625 3.06656 14.0625 3.37875V4.67812Z" fill="#0077C6" />
                            <path d="M11.7188 10.3125H10.7812C10.5225 10.3125 10.3125 10.1025 10.3125 9.84375C10.3125 9.585 10.5225 9.375 10.7812 9.375H11.7188C11.9775 9.375 12.1875 9.585 12.1875 9.84375C12.1875 10.1025 11.9775 10.3125 11.7188 10.3125Z" fill="#0077C6" />
                            </svg>
                        </div>
                        <span class="nav-tabs-item__name">Payment Methods</span>
                        </a>
                    </li>
                    <li class="nav-tabs__item">
                        <a class="nav-tabs__link nav-tabs-item nav-tabs-item--choose" href="#manageNotifications" data-tab="manageNotifications">
                        <div class="nav-tabs__item-icon nav-tabs-item__icon-wr">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 6.00004C2.99959 5.06506 3.29042 4.15316 3.83209 3.39107C4.37375 2.62897 5.13935 2.05452 6.0225 1.74754C5.9883 1.53327 6.00099 1.31413 6.0597 1.10525C6.11841 0.89636 6.22174 0.702698 6.36256 0.537621C6.50337 0.372543 6.67833 0.239982 6.87535 0.149082C7.07237 0.0581822 7.28677 0.0111084 7.50375 0.0111084C7.72073 0.0111084 7.93513 0.0581822 8.13215 0.149082C8.32917 0.239982 8.50412 0.372543 8.64494 0.537621C8.78576 0.702698 8.88909 0.89636 8.9478 1.10525C9.00651 1.31413 9.0192 1.53327 8.985 1.74754C9.86675 2.05578 10.6307 2.63077 11.171 3.39276C11.7112 4.15475 12.001 5.06597 12 6.00004V10.5L14.25 12V12.75H0.75V12L3 10.5V6.00004ZM9 13.5C9 13.8979 8.84196 14.2794 8.56066 14.5607C8.27936 14.842 7.89782 15 7.5 15C7.10218 15 6.72064 14.842 6.43934 14.5607C6.15804 14.2794 6 13.8979 6 13.5H9Z" fill="#0077C6" />
                            </svg>
                        </div>
                        <span class="nav-tabs-item__name">Manage notifications</span>
                        </a>
                    </li> --}}
                        <li class="nav-tabs__item signouthide">
                            <a class="nav-tabs__link nav-tabs-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" data-tab="signOut">
                                <div class="nav-tabs__item-icon nav-tabs-item__icon-wr">
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_66_3128)">
                                            <path d="M2.40067 8.20312H10.5468C10.9351 8.20312 11.2499 7.88831 11.2499 7.5C11.2499 7.11169 10.9351 6.79688 10.5468 6.79688H2.40067L3.30976 5.8878C3.58435 5.6132 3.58435 5.16804 3.30976 4.89344C3.03522 4.61885 2.59 4.61885 2.31541 4.89344L0.206137 7.00276C0.189684 7.01921 0.174121 7.03646 0.159402 7.05446C0.152981 7.06229 0.147403 7.07058 0.141356 7.0786C0.133621 7.08891 0.125653 7.09899 0.118481 7.10972C0.111918 7.11952 0.106247 7.12969 0.100247 7.13972C0.094481 7.14938 0.0884341 7.1588 0.0831373 7.16874C0.077606 7.17905 0.0729654 7.18965 0.0679967 7.20015C0.0631217 7.21041 0.0580124 7.22054 0.053653 7.23104C0.0494343 7.2413 0.0459656 7.25175 0.0422625 7.26216C0.0381844 7.27341 0.0338719 7.28452 0.0304032 7.296C0.0272626 7.30641 0.0249657 7.31696 0.0223407 7.3275C0.0193876 7.33918 0.0161064 7.3508 0.0137626 7.36271C0.011372 7.37485 0.00991889 7.38713 0.00818453 7.39936C0.00668454 7.40982 0.00466892 7.42013 0.00363768 7.43072C0.00138769 7.45341 0.00021582 7.47624 0.000168945 7.49902C0.000168945 7.49935 0.00012207 7.49972 0.00012207 7.50005C0.00012207 7.50038 0.000168945 7.50075 0.000168945 7.50108C0.00021582 7.52391 0.00138769 7.54669 0.00363768 7.56942C0.00466892 7.57988 0.00663766 7.59005 0.00809078 7.60041C0.00987202 7.61278 0.0113251 7.62516 0.0137626 7.63744C0.0161064 7.64925 0.0193407 7.66069 0.0222938 7.67227C0.0249657 7.68291 0.0273094 7.69364 0.0304969 7.70419C0.0339188 7.71549 0.0381844 7.72641 0.0421218 7.73747C0.0459187 7.74806 0.0493874 7.7587 0.0536999 7.76911C0.0579655 7.77942 0.0629811 7.78931 0.0677623 7.79939C0.0728248 7.81013 0.077606 7.82095 0.083231 7.8315C0.0883872 7.84111 0.0942466 7.85025 0.0998247 7.85958C0.105965 7.86994 0.111825 7.88039 0.118575 7.89047C0.125418 7.90073 0.133059 7.91034 0.140418 7.92023C0.146793 7.92872 0.152699 7.93748 0.159496 7.94573C0.173512 7.9628 0.188371 7.97916 0.203887 7.99486C0.204637 7.99561 0.205246 7.99645 0.205996 7.9972L2.31536 10.1066C2.4527 10.2439 2.63261 10.3126 2.81256 10.3126C2.99247 10.3125 3.17246 10.2439 3.30971 10.1067C3.58431 9.83206 3.58431 9.3869 3.30976 9.1123L2.40067 8.20312Z" fill="#0077C6" />
                                            <path d="M14.2969 1.17188H5.39074C5.00243 1.17188 4.68762 1.48669 4.68762 1.875V4.68748C4.68762 5.07579 5.00243 5.3906 5.39074 5.3906C5.77905 5.3906 6.09386 5.07579 6.09386 4.68748V2.57812H13.5938V12.4219H6.09386V10.3124C6.09386 9.92413 5.77905 9.60932 5.39074 9.60932C5.00243 9.60932 4.68762 9.92413 4.68762 10.3124V13.125C4.68762 13.5133 5.00243 13.8281 5.39074 13.8281H14.2969C14.6852 13.8281 15 13.5133 15 13.125V1.875C15 1.48669 14.6852 1.17188 14.2969 1.17188Z" fill="#0077C6" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_66_3128">
                                                <rect width="15" height="15" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <span class="nav-tabs-item__name">Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <?php
                $strArray = explode('/', $_SERVER['PHP_SELF']);

                ?>
                <div class="account-settings__content-wr vin-user-active mysettingset">
                    <!-- Edit Profile -->
                    @include('account-settings.partials._edit-profile')
                   
                    @include('account-settings.partials._vin-dashboard')
                   
                    <!-- Reports -->
                    @include('account-settings.partials._reports')

                    <!-- Payment methods -->
                    @include('account-settings.partials._payment-methods')

                    <!-- Manage Notification -->
                    @include('account-settings.partials._manage-notifications')

                </div>
            </div>
        </div>
    </div>

</main>

@include('account-settings.partials._modals._add-payment-method-modal')

@endsection

{{-- Styles Section --}}
@section('styles')
<link href="{{ asset('/assets/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/css/accountSettings.css') }}" rel="stylesheet" type="text/css" />

@endsection

{{-- Scripts Section --}}
@section('scripts')

<script src="{{ asset('/assets/js/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/jquery.mousewheel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/accountSettings.js') }}" type="text/javascript"></script>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.nav-tabs__link').on('click', function() {

            if ($(this).data('tab') == 'myReports') {
                $('.reportsHeaderMenu').addClass('nav__link--active');
            } else {
                $('.reportsHeaderMenu').removeClass('nav__link--active');
            }
            if ($(this).data('tab') == 'vindashboard') {

                $('.vin-cls').addClass('vin-cls-active');
                $('.account-settings__content-wr').addClass('vin-user-active')
            } else {

                $('.vin-cls').removeClass('vin-cls-active');
                $('.account-settings__content-wr').removeClass('vin-user-active')
            }

        })
        $(document).on('click', '.clickVin', function() {
            if (this.id == 'vindashboardNew') {
                alert('dd');
                $('.vin-cls').addClass('vin-cls-active');
                $('.mysettingset').addClass('vin-user-active')
            } else {
                alert('vvv');
                // $('.vin-cls').removeClass('vin-cls-active');
                // $('.mysettingset').removeClass('vin-user-active')
            }
        })
    })
</script>