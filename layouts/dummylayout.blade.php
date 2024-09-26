<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- extra CSS Files -->
    <link href="{{ asset('assets/extra/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra/remixicon/remixicon.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!-- <link href="{{ asset('assets/extra/simple-datatables/style.css')}}" rel="stylesheet"> -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/coloris.min.css')}}" rel="stylesheet" type="text/css">
    <style>
    
    .colortext {
      height: 30px;
    }

    .square .clr-field button,
    .circle .clr-field button {
      width: 22px;
      height: 22px;
      left: 5px;
      right: auto;
      border-radius: 5px;
    }

    .square .clr-field input,
    .circle .clr-field input {      
      padding-left: 36px;
    }

    .clr-field {
      width: 100%;      
    }

    .square {
        margin-top: 5px;
    }


    .circle .clr-field button {
      border-radius: 50%;
    }

    .full .clr-field button {
      width: 100%;
      height: 100%;
      border-radius: 5px;
    }

    /* start style.css code */

    /**
* Template Name: NiceAdmin
* Updated: Mar 12 2024 with Bootstrap v5.3.3
* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
:root {
  scroll-behavior: smooth;
}

body {
  font-family: "Open Sans", sans-serif;
  background: #f6f9ff;
  color: #444444;
}

a {
  color: #4154f1;
  text-decoration: none;
}

a:hover {
  color: #717ff5;
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Nunito", sans-serif;
}

/*--------------------------------------------------------------
# Main
--------------------------------------------------------------*/
#main {
  margin-top: 60px;
  padding: 20px 30px;
  transition: all 0.3s;
}

@media (max-width: 1199px) {
  #main {
    padding: 20px;
  }
}

/*--------------------------------------------------------------
# Page Title
--------------------------------------------------------------*/
.pagetitle {
  margin-bottom: 10px;
}

.pagetitle h1 {
  font-size: 24px;
  margin-bottom: 0;
  font-weight: 600;
  color: #012970;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  visibility: hidden;
  opacity: 0;
  right: 15px;
  bottom: 15px;
  z-index: 99999;
  background: #4154f1;
  width: 40px;
  height: 40px;
  border-radius: 4px;
  transition: all 0.4s;
}

.back-to-top i {
  font-size: 24px;
  color: #fff;
  line-height: 0;
}

.back-to-top:hover {
  background: #6776f4;
  color: #fff;
}

.back-to-top.active {
  visibility: visible;
  opacity: 1;
}

/*--------------------------------------------------------------
# Override some default Bootstrap stylings
--------------------------------------------------------------*/
/* Dropdown menus */
.dropdown-menu {
  border-radius: 4px;
  padding: 10px 0;
  animation-name: dropdown-animate;
  animation-duration: 0.2s;
  animation-fill-mode: both;
  border: 0;
  box-shadow: 0 5px 30px 0 rgba(82, 63, 105, 0.2);
}

.dropdown-menu .dropdown-header,
.dropdown-menu .dropdown-footer {
  text-align: center;
  font-size: 15px;
  padding: 10px 25px;
}

.dropdown-menu .dropdown-footer a {
  color: #444444;
  text-decoration: underline;
}

.dropdown-menu .dropdown-footer a:hover {
  text-decoration: none;
}

.dropdown-menu .dropdown-divider {
  color: #a5c5fe;
  margin: 0;
}

.dropdown-menu .dropdown-item {
  font-size: 14px;
  padding: 10px 15px;
  transition: 0.3s;
}

.dropdown-menu .dropdown-item i {
  margin-right: 10px;
  font-size: 18px;
  line-height: 0;
}

.dropdown-menu .dropdown-item:hover {
  background-color: #f6f9ff;
}

@media (min-width: 768px) {
  .dropdown-menu-arrow::before {
    content: "";
    width: 13px;
    height: 13px;
    background: #fff;
    position: absolute;
    top: -7px;
    right: 20px;
    transform: rotate(45deg);
    border-top: 1px solid #eaedf1;
    border-left: 1px solid #eaedf1;
  }
}

@keyframes dropdown-animate {
  0% {
    opacity: 0;
  }

  100% {
    opacity: 1;
  }

  0% {
    opacity: 0;
  }
}

/* Light Backgrounds */
.bg-primary-light {
  background-color: #cfe2ff;
  border-color: #cfe2ff;
}

.bg-secondary-light {
  background-color: #e2e3e5;
  border-color: #e2e3e5;
}

.bg-success-light {
  background-color: #d1e7dd;
  border-color: #d1e7dd;
}

.bg-danger-light {
  background-color: #f8d7da;
  border-color: #f8d7da;
}

.bg-warning-light {
  background-color: #fff3cd;
  border-color: #fff3cd;
}

.bg-info-light {
  background-color: #cff4fc;
  border-color: #cff4fc;
}

.bg-dark-light {
  background-color: #d3d3d4;
  border-color: #d3d3d4;
}

/* Card */
.card {
  margin-bottom: 30px;
  border: none;
  border-radius: 5px;
  box-shadow: 0px 0 30px rgba(1, 41, 112, 0.1);
}

.card-header,
.card-footer {
  border-color: #ebeef4;
  background-color: #fff;
  color: #798eb3;
  padding: 15px;
}

.card-title {
  padding: 20px 0 15px 0;
  font-size: 18px;
  font-weight: 500;
  color: #012970;
  font-family: "Poppins", sans-serif;
}

.card-title span {
  color: #899bbd;
  font-size: 14px;
  font-weight: 400;
}

.card-body-custom {
  width: 100%; 
  height: 66px; 
  padding: 0.5rem;
  margin: auto;
}

.card-img-overlay {
  background-color: rgba(255, 255, 255, 0.6);
}

/* Alerts */
.alert-heading {
  font-weight: 500;
  font-family: "Poppins", sans-serif;
  font-size: 20px;
}

/* Close Button */
.btn-close {
  background-size: 25%;
}

.btn-close:focus {
  outline: 0;
  box-shadow: none;
}

/* Accordion */
.accordion-item {
  border: 1px solid #ebeef4;
}

.accordion-button:focus {
  outline: 0;
  box-shadow: none;
}

.accordion-button:not(.collapsed) {
  color: #012970;
  background-color: #f6f9ff;
}

.accordion-flush .accordion-button {
  padding: 15px 0;
  background: none;
  border: 0;
}

.accordion-flush .accordion-button:not(.collapsed) {
  box-shadow: none;
  color: #4154f1;
}

.accordion-flush .accordion-body {
  padding: 0 0 15px 0;
  color: #3e4f6f;
  font-size: 15px;
}

/* Breadcrumbs */
.breadcrumb {
  font-size: 14px;
  font-family: "Nunito", sans-serif;
  color: #899bbd;
  font-weight: 600;
}

.breadcrumb a {
  color: #899bbd;
  transition: 0.3s;
}

.breadcrumb a:hover {
  color: #51678f;
}

.breadcrumb .breadcrumb-item::before {
  color: #899bbd;
}

.breadcrumb .active {
  color: #51678f;
  font-weight: 600;
}

/* Bordered Tabs */
.nav-tabs-bordered {
  border-bottom: 2px solid #ebeef4;
}

.nav-tabs-bordered .nav-link {
  margin-bottom: -2px;
  border: none;
  color: #2c384e;
}

.nav-tabs-bordered .nav-link:hover,
.nav-tabs-bordered .nav-link:focus {
  color: #4154f1;
}

.nav-tabs-bordered .nav-link.active {
  background-color: #fff;
  color: #4154f1;
  border-bottom: 2px solid #4154f1;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
.logo {
  line-height: 1;
}

@media (min-width: 1200px) {
  .logo {
    width: 280px;
  }
}

.logo img {
  max-height: 26px;
  margin-right: 6px;
}

.logo span {
  font-size: 26px;
  font-weight: 700;
  color: #012970;
  font-family: "Nunito", sans-serif;
}

.header {
  transition: all 0.5s;
  z-index: 997;
  height: 60px;
  box-shadow: 0px 2px 20px rgba(1, 41, 112, 0.1);
  background-color: #fff;
  padding-left: 20px;
  /* Toggle Sidebar Button */
  /* Search Bar */
}

.header .toggle-sidebar-btn {
  font-size: 32px;
  padding-left: 30px;
  cursor: pointer;
  color: #012970;
}

 .search-bar {
  min-width: 360px;
  padding: 0 20px;
}

@media (max-width: 1199px) {
   .search-bar {
    position: fixed;
    top: 50px;
    left: 0;
    right: 0;
    padding: 20px;
    box-shadow: 0px 0px 15px 0px rgba(1, 41, 112, 0.1);
    background: white;
    z-index: 9999;
    transition: 0.3s;
    visibility: hidden;
    opacity: 0;
  }

  .search-bar-show {
    top: 60px;
    visibility: visible;
    opacity: 1;
  }
}

 .search-form {
  width: 100%;
}

 .search-form input {
  border: 0;
  font-size: 14px;
  color: #012970;
  border: 1px solid rgba(1, 41, 112, 0.2);
  padding: 7px 38px 7px 8px;
  border-radius: 3px;
  transition: 0.3s;
  width: 100%;
}

.search-form input:focus,
 .search-form input:hover {
  outline: none;
  box-shadow: 0 0 10px 0 rgba(1, 41, 112, 0.15);
  border: 1px solid rgba(1, 41, 112, 0.3);
}

 .search-form button {
  border: 0;
  padding: 0;
  margin-left: -30px;
  background: none;
}

 .search-form button i {
  color: #012970;
}

/*--------------------------------------------------------------
# Header Nav
--------------------------------------------------------------*/
.header-nav ul {
  list-style: none;
}

.header-nav>ul {
  margin: 0;
  padding: 0;
}

.header-nav .nav-icon {
  font-size: 22px;
  color: #012970;
  margin-right: 25px;
  position: relative;
}

.header-nav .nav-profile {
  color: #012970;
}

.header-nav .nav-profile img {
  max-height: 36px;
}

.header-nav .nav-profile span {
  font-size: 14px;
  font-weight: 600;
}

.header-nav .badge-number {
  position: absolute;
  inset: -2px -5px auto auto;
  font-weight: normal;
  font-size: 12px;
  padding: 3px 6px;
}

.header-nav .notifications {
  inset: 8px -15px auto auto !important;
}

.header-nav .notifications .notification-item {
  display: flex;
  align-items: center;
  padding: 15px 10px;
  transition: 0.3s;
}

.header-nav .notifications .notification-item i {
  margin: 0 20px 0 10px;
  font-size: 24px;
}

.header-nav .notifications .notification-item h4 {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 5px;
}

.header-nav .notifications .notification-item p {
  font-size: 13px;
  margin-bottom: 3px;
  color: #919191;
}

.header-nav .notifications .notification-item:hover {
  background-color: #f6f9ff;
}

.header-nav .messages {
  inset: 8px -15px auto auto !important;
}

.header-nav .messages .message-item {
  padding: 15px 10px;
  transition: 0.3s;
}

.header-nav .messages .message-item a {
  display: flex;
}

.header-nav .messages .message-item img {
  margin: 0 20px 0 10px;
  max-height: 40px;
}

.header-nav .messages .message-item h4 {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #444444;
}

.header-nav .messages .message-item p {
  font-size: 13px;
  margin-bottom: 3px;
  color: #919191;
}

.header-nav .messages .message-item:hover {
  background-color: #f6f9ff;
}

.header-nav .profile {
  min-width: 240px;
  padding-bottom: 0;
  top: 8px !important;
}

.header-nav .profile .dropdown-header h6 {
  font-size: 18px;
  margin-bottom: 0;
  font-weight: 600;
  color: #444444;
}

.header-nav .profile .dropdown-header span {
  font-size: 14px;
}

.header-nav .profile .dropdown-item {
  font-size: 14px;
  padding: 10px 15px;
  transition: 0.3s;
}

.header-nav .profile .dropdown-item i {
  margin-right: 10px;
  font-size: 18px;
  line-height: 0;
}

.header-nav .profile .dropdown-item:hover {
  background-color: #f6f9ff;
}

/*--------------------------------------------------------------
# Sidebar
--------------------------------------------------------------*/
.sidebar {
  position: fixed;
  top: 60px;
  left: 0;
  bottom: 0;
  width: 400px;
  z-index: 996;
  transition: all 0.3s;
  padding: 20px;
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: #aab7cf transparent;
  box-shadow: 0px 0px 20px rgba(1, 41, 112, 0.1);
  background-color: #fff;
}

@media (max-width: 1199px) {
  .sidebar {
    left: -400px;
  }
}

.sidebar::-webkit-scrollbar {
  width: 5px;
  height: 8px;
  background-color: #fff;
}

.sidebar::-webkit-scrollbar-thumb {
  background-color: #aab7cf;
}

@media (min-width: 1200px) {

  #main,
  #footer {
    margin-left: 400px;
  }
}

@media (max-width: 1199px) {
  .toggle-sidebar .sidebar {
    left: 0;
  }
}

@media (min-width: 1200px) {

  .toggle-sidebar #main,
  .toggle-sidebar #footer {
    margin-left: 0;
  }

  .toggle-sidebar .sidebar {
    left: -400px;
  }
}

.sidebar-nav {
  padding: 0;
  margin: 0;
  list-style: none;
}

.sidebar-nav li {
  padding: 0;
  margin: 0;
  list-style: none;
}

.sidebar-nav .nav-item {
  margin-bottom: 5px;
}

.sidebar-nav .nav-heading {
  font-size: 11px;
  text-transform: uppercase;
  color: #899bbd;
  font-weight: 600;
  margin: 10px 0 5px 15px;
}

.sidebar-nav .nav-link {
  display: flex;
  align-items: center;
  font-size: 15px;
  font-weight: 600;
  color: #4154f1;
  transition: 0.3;
  background: #f6f9ff;
  padding: 10px 15px;
  border-radius: 4px;
}

.sidebar-nav .nav-link i {
  font-size: 16px;
  margin-right: 10px;
  color: #4154f1;
}

.sidebar-nav .nav-link.collapsed {
  color: #012970;
  background: #fff;
}

.sidebar-nav .nav-link.collapsed i {
  color: #899bbd;
}

.sidebar-nav .nav-link:hover {
  color: #4154f1;
  background: #f6f9ff;
}

.sidebar-nav .nav-link:hover i {
  color: #4154f1;
}

.sidebar-nav .nav-link .bi-chevron-down {
  margin-right: 0;
  transition: transform 0.2s ease-in-out;
}

.sidebar-nav .nav-link:not(.collapsed) .bi-chevron-down {
  transform: rotate(180deg);
}

.sidebar-nav .nav-content {
  padding: 5px 0 0 0;
  margin: 0;
  list-style: none;
}

.sidebar-nav .nav-content a {
  display: flex;
  align-items: center;
  font-size: 14px;
  font-weight: 600;
  color: #012970;
  transition: 0.3;
  padding: 10px 0 10px 40px;
  transition: 0.3s;
}

.sidebar-nav .nav-content a i {
  font-size: 6px;
  margin-right: 8px;
  line-height: 0;
  border-radius: 50%;
}

.sidebar-nav .nav-content a:hover,
.sidebar-nav .nav-content a.active {
  color: #4154f1;
}

.sidebar-nav .nav-content a.active i {
  background-color: #4154f1;
}

/*--------------------------------------------------------------
# Dashboard
--------------------------------------------------------------*/
/* Filter dropdown */
.dashboard .filter {
  position: absolute;
  right: 0px;
  top: 15px;
}

.dashboard .filter .icon {
  color: #aab7cf;
  padding-right: 20px;
  padding-bottom: 5px;
  transition: 0.3s;
  font-size: 16px;
}

.dashboard .filter .icon:hover,
.dashboard .filter .icon:focus {
  color: #4154f1;
}

.dashboard .filter .dropdown-header {
  padding: 8px 15px;
}

.dashboard .filter .dropdown-header h6 {
  text-transform: uppercase;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 1px;
  color: #aab7cf;
  margin-bottom: 0;
  padding: 0;
}

.dashboard .filter .dropdown-item {
  padding: 8px 15px;
}

/* Info Cards */
.dashboard .info-card {
  padding-bottom: 10px;
}

.dashboard .info-card h6 {
  font-size: 28px;
  color: #012970;
  font-weight: 700;
  margin: 0;
  padding: 0;
}

.dashboard .card-icon {
  font-size: 32px;
  line-height: 0;
  width: 64px;
  height: 64px;
  flex-shrink: 0;
  flex-grow: 0;
}

.dashboard .sales-card .card-icon {
  color: #4154f1;
  background: #f6f6fe;
}

.dashboard .revenue-card .card-icon {
  color: #2eca6a;
  background: #e0f8e9;
}

.dashboard .customers-card .card-icon {
  color: #ff771d;
  background: #ffecdf;
}

/* Activity */
.dashboard .activity {
  font-size: 14px;
}

.dashboard .activity .activity-item .activite-label {
  color: #888;
  position: relative;
  flex-shrink: 0;
  flex-grow: 0;
  min-width: 64px;
}

.dashboard .activity .activity-item .activite-label::before {
  content: "";
  position: absolute;
  right: -11px;
  width: 4px;
  top: 0;
  bottom: 0;
  background-color: #eceefe;
}

.dashboard .activity .activity-item .activity-badge {
  margin-top: 3px;
  z-index: 1;
  font-size: 11px;
  line-height: 0;
  border-radius: 50%;
  flex-shrink: 0;
  border: 3px solid #fff;
  flex-grow: 0;
}

.dashboard .activity .activity-item .activity-content {
  padding-left: 10px;
  padding-bottom: 20px;
}

.dashboard .activity .activity-item:first-child .activite-label::before {
  top: 5px;
}

.dashboard .activity .activity-item:last-child .activity-content {
  padding-bottom: 0;
}

/* News & Updates */
.dashboard .news .post-item+.post-item {
  margin-top: 15px;
}

.dashboard .news img {
  width: 80px;
  float: left;
  border-radius: 5px;
}

.dashboard .news h4 {
  font-size: 15px;
  margin-left: 95px;
  font-weight: bold;
  margin-bottom: 5px;
}

.dashboard .news h4 a {
  color: #012970;
  transition: 0.3s;
}

.dashboard .news h4 a:hover {
  color: #4154f1;
}

.dashboard .news p {
  font-size: 14px;
  color: #777777;
  margin-left: 95px;
}

/* Recent Sales */
.dashboard .recent-sales {
  font-size: 14px;
}

.dashboard .recent-sales .table thead {
  background: #f6f6fe;
}

.dashboard .recent-sales .table thead th {
  border: 0;
}

.dashboard .recent-sales .dataTable-top {
  padding: 0 0 10px 0;
}

.dashboard .recent-sales .dataTable-bottom {
  padding: 10px 0 0 0;
}

/* Top Selling */
.dashboard .top-selling {
  font-size: 14px;
}

.dashboard .top-selling .table thead {
  background: #f6f6fe;
}

.dashboard .top-selling .table thead th {
  border: 0;
}

.dashboard .top-selling .table tbody td {
  vertical-align: middle;
}

.dashboard .top-selling img {
  border-radius: 5px;
  max-width: 60px;
}

/*--------------------------------------------------------------
# Icons list page
--------------------------------------------------------------*/
.iconslist {
  display: grid;
  max-width: 100%;
  grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
  gap: 1.25rem;
  padding-top: 15px;
}

.iconslist .icon {
  background-color: #fff;
  border-radius: 0.25rem;
  text-align: center;
  color: #012970;
  padding: 15px 0;
}

.iconslist i {
  margin: 0.25rem;
  font-size: 2.5rem;
}

.iconslist .label {
  font-family: var(--bs-font-monospace);
  display: inline-block;
  width: 100%;
  overflow: hidden;
  padding: 0.25rem;
  font-size: 12px;
  text-overflow: ellipsis;
  white-space: nowrap;
  color: #666;
}

/*--------------------------------------------------------------
# Profie Page
--------------------------------------------------------------*/
.profile .profile-card img {
  max-width: 120px;
}

.profile .profile-card h2 {
  font-size: 24px;
  font-weight: 700;
  color: #2c384e;
  margin: 10px 0 0 0;
}

.profile .profile-card h3 {
  font-size: 18px;
}

.profile .profile-card .social-links a {
  font-size: 20px;
  display: inline-block;
  color: rgba(1, 41, 112, 0.5);
  line-height: 0;
  margin-right: 10px;
  transition: 0.3s;
}

.profile .profile-card .social-links a:hover {
  color: #012970;
}

.profile .profile-overview .row {
  margin-bottom: 20px;
  font-size: 15px;
}

.profile .profile-overview .card-title {
  color: #012970;
}

.profile .profile-overview .label {
  font-weight: 600;
  color: rgba(1, 41, 112, 0.6);
}

.profile .profile-edit label {
  font-weight: 600;
  color: rgba(1, 41, 112, 0.6);
}

.profile .profile-edit img {
  max-width: 120px;
}

/*--------------------------------------------------------------
# F.A.Q Page
--------------------------------------------------------------*/
.faq .basic h6 {
  font-size: 18px;
  font-weight: 600;
  color: #4154f1;
}

.faq .basic p {
  color: #6980aa;
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contacts .info-box {
  padding: 28px 30px;
}

.contacts .info-box i {
  font-size: 38px;
  line-height: 0;
  color: #4154f1;
}

.contacts .info-box h3 {
  font-size: 20px;
  color: #012970;
  font-weight: 700;
  margin: 20px 0 10px 0;
}

.contacts .info-box p {
  padding: 0;
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
}

.contacts .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.contacts .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.contacts .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
}

.contacts .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  animation: animate-loading 1s linear infinite;
}

.contacts .php-email-form input,
.contacts .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  border-radius: 0;
}

.contacts .php-email-form input:focus,
.contacts .php-email-form textarea:focus {
  border-color: #4154f1;
}

.contacts .php-email-form input {
  padding: 10px 15px;
}

.contacts .php-email-form textarea {
  padding: 12px 15px;
}

.contacts .php-email-form button[type=submit] {
  background: #4154f1;
  border: 0;
  padding: 10px 30px;
  color: #fff;
  transition: 0.4s;
  border-radius: 4px;
}

.contacts .php-email-form button[type=submit]:hover {
  background: #5969f3;
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Error 404
--------------------------------------------------------------*/
.error-404 {
  padding: 30px;
}

.error-404 h1 {
  font-size: 180px;
  font-weight: 700;
  color: #4154f1;
  margin-bottom: 0;
  line-height: 150px;
}

.error-404 h2 {
  font-size: 24px;
  font-weight: 700;
  color: #012970;
  margin-bottom: 30px;
}

.error-404 .btn {
  background: #51678f;
  color: #fff;
  padding: 8px 30px;
}

.error-404 .btn:hover {
  background: #3e4f6f;
}

@media (min-width: 992px) {
  .error-404 img {
    max-width: 50%;
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
.footer {
  padding: 0px 0;
  font-size: 14px;
  transition: all 0.3s;
}

.footer .copyright {
  text-align: center;
  color: #012970;
}

.footer .credits {
  padding-top: 5px;
  text-align: center;
  font-size: 13px;
  color: #012970;
}

.inputtext {
  margin-bottom: 20px;
  background: #f8f9fa;
  border: 1px solid #ced4da;
  border-radius: 5px;
  font-size: 16px;
  width: 100%;
  padding: 10px;
}

.card {
  margin-bottom: 5px;
  border: none;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  cursor:pointer;
}

.card-img-top {
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.pagination {
  justify-content: center;
  margin-top: 10px;
}

.pagination-button {
  font-size: 24px;
  background: none;
  border: none;
  cursor: pointer;
  color: #6c757d;
}

.pagination-button:hover {
  color: #007bff;
}

.search-bar-sidebar {
   min-width: 100px; 
  padding: 10px 5px;
}

.sidebar-parent {
  position: absolute;
  top: 0px;
  left: 0;
  bottom: 0;
  width: 80px;
  z-index: 996;
  transition: all 0.3s;
  padding: 20px;
  overflow: hidden;
  scrollbar-width: thin;
  scrollbar-color: #aab7cf transparent;
  box-shadow: 0px 0px 20px rgba(1, 41, 112, 0.1);
  background-color: #555;
  padding-left: 0;
  padding-top: 0;
}


.submenu
{

  margin-left: 80px
}

.icon-bar {
  width: 80px;
  background-color: #555;
}

 .icon-bar a {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      padding: 16px;
      transition: all 0.3s ease;
      color: white;
      text-decoration: none;
      font-size: 10px;
      cursor:pointer;
    }

.icon-bar a:hover {
  background-color: #000;
}

.icon-bar i {
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}


.option-bar{

  padding: 0 30px;
}

.option-bar i
{
  font-size: 25px;
  padding: 0 10px;
  cursor:pointer;
}

@media (max-width: 1199px) {
  .option-bar {
   position: fixed;
   top: 50px;
   left: 0;
   right: 0;
   padding: 20px;
   box-shadow: 0px 0px 15px 0px rgba(1, 41, 112, 0.1);
   background: white;
   z-index: 9999;
   transition: 0.3s;
   visibility: hidden;
   opacity: 0;
 }
}
 .design
 {
  height: 480px;
 }

 .footer-body
 {
  padding: 10px 25px;
  margin: 0;
  width: auto;
  font-weight: bold;
 }

 .footer-options{
  font-size: 25px;
 }

 .footer-right{
cursor: pointer;
  padding-right: 20px;
 }

/*Horizontal Scroller Start*/
.cover {
  position: relative;
  padding: 0px 30px;
  width: 100%;
}
/*
.left {
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
}

.right {
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
}
*/
.scroll-images {
  padding: 0px;
  position: relative;
  
  height: auto;
  display: flex;
  flex-wrap: nowrap;
  overflow-x: hidden;
  overflow-y: hidden;
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch;
}

.child {
  display: flex;
  justify-content: center;
  align-items: center;
  min-width: 45px;
  height: 45px;
  padding: 0px 15px;
  margin: 1px 3px;
  border: 1px solid #f1f1f1;
  overflow: hidden;
  -webkit-box-shadow: 0px 0px 15px 2px rgb(0 0 0 / 10%);;
  box-shadow: 0px 0px 15px 2px rgb(0 0 0 / 10%);;
}

.child img, .child > img {
  position: absolute;
  cursor: pointer;
  width: 45px;
  height: 45px;
  padding: 5px;;
  object-fit: cover;
  object-position: center;
  border-radius: 20%;
}

.scroll-images::-webkit-scrollbar {
  width: 5px;
  height: 8px;
  background-color: #aaa;
}

.scroll-images::-webkit-scrollbar-thumb {
  background-color: black;
}

.button {
  background-color: transparent;
  border: none;
  outline: none;
  cursor: pointer;
  font-size: 15px;
}

.scrollerViewContainer {
  margin-top: 0px; margin-bottom: 10px;
}

  /*Horizontal Scroller End*/

.rowmargin {
  margin-left: 0px; 
  margin-right: 0px;
  margin-top: 5px;
  margin-bottom: 5px;
}


.card-image
{
    width: 100%; 
    height: 75%; 
    object-fit: contain;
}

.box-title {
    font-size: 0.55rem;
    /* padding: 0px 0px; */
    text-align: center;
    font-weight: bold;
    margin: 5px 0px;
    word-wrap: initial;
    letter-spacing: 0.5px;
    margin: 5px auto;
}

.project-subtitle
{

  font-size: 12px;
}

.card-project-title
{
  padding: 0px;
}


.card-project-custom
{

  margin-bottom: 25px;
}

.obj_instrument {
  padding: 0.7em;
}

.panel-head-contextmenu {
  width: 100%;
  cursor: pointer;
  background-color: darkslategray;
  border: 1px solid darkslategray;
  text-align: center;
  color: white;
  margin-top: 5px;
  font-size: small;
}

.panel-head-contextmenu:hover {
  background-color: dimgray;
  border: 1px solid dimgray;
}

.context-menu {
  z-index: 99999;
  display: none;
  position: absolute;
  background-color: currentColor;
  padding: 5px;
  width: 20%;
}

.context-menu input {
  width: 100%;
  text-align: center;
  font-size: small;
}

.rotation-state {
  z-index: 99998;
  display: none;
  position: absolute;
  cursor: pointer;
}

.rotation-state-left {
  z-index: 99998;
  display: none;
  position: absolute;
  cursor: pointer;
}





/* region Resizable Div Start */
.resizable {
  
  width: 100px;
  height: 100px;
  position: absolute;
  top: 100px;
  left: 100px;
}

.resizable .resizers{
  width: 100%;
  height: 100%;
  border: 3px solid lightgrey;
  box-sizing: border-box;
}

.resizable .resizers .resizer{
  width: 15px;
  height: 15px;
  border-radius: 50%; /*magic to turn square into circle*/
  background: white;
  border: 3px solid lightgrey;
  position: absolute;
}

.resizable .resizers .resizer.top-left {
  left: 5px;
  top: 5px;
  cursor: nwse-resize; /*resizer cursor*/
}
.resizable .resizers .resizer.top-right {
  right: 5px;
  top: 5px;
  cursor: nesw-resize;
}
.resizable .resizers .resizer.bottom-left {
  left: 5px;
  bottom: 5px;
  cursor: nesw-resize;
}
.resizable .resizers .resizer.bottom-right {
  right: 5px;
  bottom: 5px;
  cursor: nwse-resize;
}

.resizable .resizers .resizer.top-left.actor {
  left: -5px;
  top: -5px;
  cursor: nwse-resize; /*resizer cursor*/
}
.resizable .resizers .resizer.top-right.actor{
  right: -5px;
  top: -5px;
  cursor: nesw-resize;
}
.resizable .resizers .resizer.bottom-left.actor {
  left: -5px;
  bottom: -5px;
  cursor: nesw-resize;
}
.resizable .resizers .resizer.bottom-right.actor {
  right: -5px;
  bottom: -5px;
  cursor: nwse-resize;
}
.non_resize {
  display: none;
}

.heading {
  border: none;
  padding: 2px;
  cursor: pointer;
  background: beige;
  text-align: center;
  max-width: fit-content;
  min-width: 25px;
  min-height: 25px;
}

.xxl {
  font-size: xx-large;
}

.xl {
  font-size: x-large;
}

.l {
  font-size: large;
}

.m {
  font-size: medium;
}

.s {
  font-size: small;
}

.ms {
  font-size: smaller;
}

.xs {
  font-size: x-small;
}

.xxs {
  font-size: xx-small;
}

.P5 {
  padding: 5px;
}
/* region Resizable Div End */


/* region Rectangle Start*/
.rectangle {
  width: 100px;
  height: 100px;
  border: 2px solid black;
  position: absolute;
  cursor: move;
}

.oval {
  width: 97%; /* Set the width of the oval */
  height: 97%; /* Set the height of the oval */
  position: absolute;
  border: 2px solid black;
  border-radius: 50%;
  cursor: move;  
}

.triangle {
  --b:5px; /* control the border thickness */
  width: 97%;
  height: 97%;
  position: absolute;
  clip-path: polygon(50% 0,100% 100%,0 100%,50% 0,50% var(--b),calc(var(--b)*cos(30deg)) calc(100% - var(--b)/2),calc(100% - var(--b)*cos(30deg)) calc(100% - var(--b)/2),50% var(--b));
  background: black;
}

.simpleLine {
  width: 100PX;
  height: 0px;
  border: 1px solid black;
  position: absolute;
  cursor: move;
}

.dashLine {
  width: 100PX;
  height: 0px;
  border: 1px dashed black;
  position: absolute;
  cursor: move;
}

.resize-handle {
  width: 15px;
  height: 15px;
  background-color: white;
  border: 2px solid black;
  position: absolute;
  border-radius: 50%;
}
.resize-handle.top-left { top: -5px; left: -5px; cursor: nw-resize; }
.resize-handle.top-right { top: -5px; right: -5px; cursor: ne-resize; }
.resize-handle.bottom-left { bottom: -5px; left: -5px; cursor: sw-resize; }
.resize-handle.bottom-right { bottom: -5px; right: -5px; cursor: se-resize; }

/* For Simple Line */
.resize-handle.Stop-left { top: -7px; left: -7px; cursor: nw-resize; }
.resize-handle.Stop-right { top: -7px; right: -7px; cursor: nw-resize; }

.rotate-handle {
  width: 10px;
  height: 10px;
  background-color: black;
  border: 2px solid black;
  position: absolute;
  left: 45px;
  top: -5px;
  cursor: pointer;
}


/* region Rectangle End */


.drawingArea {
  width: 500px; /* Width of the drawing area */
  height: 500px; /* Height of the drawing area */
  border: 1px solid black; /* Border around the drawing area */
  position: relative; /* Relative positioning for absolute child elements */
  cursor: crosshair; /* Cursor shape for drawing */
}

/* Style the lines */
.line {
  position: absolute; /* Absolute positioning for placing lines */
  height: 2px; /* Thickness of the line */
  background-color: black; /* Line color */
}

.t_line_container {
  width: 100%; /* Width of the container */
  height: 100%; /* Height of the container */
  display: flex;
  justify-content: center; /* Center the horizontal line */
  align-items: center; /* Center the horizontal line */
}

.t_line_horizontal {
  width: 100%; /* Width of the horizontal line (adjust as needed) */
  height: 2px; /* Thickness of the line */
  background-color: black; /* Color of the line */    
  position: relative; /* Allow positioning of the vertical line */
}

.t_line_vertical_right {
  position: relative;
  top: 0px; /* Position the top of the line above the horizontal line */
  right: 0px; /* Center the vertical line over the horizontal line */
  transform: translateX(-50%); /* Center the vertical line */
  width: 2px; /* Thickness of the vertical line */
  height: 100%; /* Height of the vertical line */
  background-color: black; /* Color of the line */
}

.t_line_vertical_left {
  position: relative;
  top: 0px; /* Position the top of the line above the horizontal line */
  left: 1px; /* Center the vertical line over the horizontal line */
  transform: translateX(-50%); /* Center the vertical line */
  width: 2px; /* Thickness of the vertical line */
  height: 100%; /* Height of the vertical line */
  background-color: black; /* Color of the line */
}

.arrow-line {
  width: 100%;
  height: 0px;
  background-color: black;
  position: relative;
  border: 1px solid black;
}

/* Create the arrowhead */
.arrow-head {
  width: 0;
  height: 100%;
  position: absolute;
  top: 0px;
  right: -25px;
  border-left: 25px solid black;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  transform: translateY(-50%);
}

.arrow-head_left {
  width: 0;
  height: 100%;
  position: absolute;
  top: 0px;
  left: -25px;
  border-right: 25px solid black;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  transform: translateY(-50%);
}

.notes {
  border: 0;
  font-size: 14px;
  color: #012970;
  border: 1px solid rgba(1, 41, 112, 0.2);
  padding: 7px 38px 7px 8px;
  border-radius: 3px;
  transition: 0.3s;
  width: 100%;
}

.divnotes {
  margin-bottom: 5px;
  padding: 4px 12px;
  position: relative;
}

.notes_warning {
  background-color: #ffffcc;
  border-left: 6px solid #ffeb3b;
  position: relative;
}

.notesclose {
  position: absolute; /* Position the button absolutely within the warning box */
  top: -5px; /* Adjust the top position as needed */
  right: 0px; /* Adjust the right position as needed */
  font-size: 16px; /* Adjust the font size as needed */
  background: none;
  border: none;
  cursor: pointer;
  color: red;
  font-weight: bold;
}

.sm {
  margin-top: 15px;
  margin-bottom: 10px;
  font-size: small;
}

    /* End style.css code*/


    </style>
</head>

<body>
    @yield('content')

    <aside id="sidebar" class="sidebar">
  <div id="sidebar-parent" class="sidebar-parent">
    <div class="icon-bar">
      <input type="hidden" id="selectionIndex" value="-1" />      
      <a class="active" onclick="loadData(1)">
        <i class="bi bi-music-note-beamed"></i>
        Instruments
      </a>
      <a class="active" onclick="loadData(2)">
        <i class="bi bi-people"></i>
        Actors
      </a>
      <a class="active" onclick="loadData(3)">
        <i class="bi bi-pencil"></i>
        Shapes
      </a>
      <a class="active" onclick="loadData(4)">
        <i class="bi bi-bar-chart-steps"></i>
        Lines
      </a>
      <a class="active" onclick="loadData(5)">
        <i class="bi bi-chat-text"></i>
        Text
      </a>
      <a class="active" onclick="loadData(0)">
        <i class="bi bi-pencil-square"></i>
        Notes
      </a>
    </div>
  </div>

  <div class="submenu">
    <div class="search-bar search-bar-sidebar">
      <div class="search-form d-flex align-items-center">
        <input type="text" id="txtsearch" name="txtsearch" placeholder="Search" title="Search..." />
        <button id="btnsearch" title="Search">
          <i class="bi bi-search"></i>
        </button>
      </div>
    </div>    
    <!-- End Search Bar -->
    <div class="row scrollerViewContainer">
      <button class="col-2 button left" onclick="leftScroll()">
        <i class="ri-arrow-left-s-line"></i>
      </button>
      <div class="col-8 scroll-images">
        <div class="child">
          <img src="assets/images/icons/drum.png" class="img-fluid" alt="Guitar" />
        </div>
        <div class="child">
          <img src="assets/images/icons/guitarregular.png" class="img-fluid" alt="Guitar" />
        </div>
        <div class="child">
          <img src="assets/images/icons/amp.png" class="img-fluid" alt="Guitar" />
        </div>

        <div class="child">
          <img src="assets/images/icons/piano.png" class="img-fluid" alt="Guitar" />
        </div>
        <div class="child">
          <img src="assets/images/icons/violin.png" class="img-fluid" alt="Guitar" />
        </div>
        <div class="child">
          <img src="assets/images/icons/trumpet.png" class="img-fluid" alt="Guitar" />
        </div>
      </div>
      <button class="col-2 button right" onclick="rightScroll()">
        <i class="ri-arrow-right-s-line"></i>
      </button>
    </div>

    <div id="cardContainer">
      <!-- Cards will be dynamically generated here -->
    </div>
    <div class="non_resize" id="cardNotes">
      <!-- Notes -->
    </div>
    <!-- Pagination -->
    <nav>
      <ul class="pagination" id="pagination">
        <li class="page-item">
          <button class="pagination-button" onclick="clickLeft()">
            <i class="ri-arrow-left-s-line"></i>
          </button>
        </li>
        <li class="page-item" style="align-self: center">
          <span class="labelColor" style="margin-left: 20px" id="currentPage">0</span>
          <span class="labelColor">-</span>
          <span class="labelColor" id="totalPage">0</span>
          <span class="labelColor"> of </span>
          <span class="labelColor" style="margin-right: 20px" id="totalRecords">0</span>
        </li>
        <li class="page-item">
          <button class="pagination-button" onclick="clickRight()">
            <i class="ri-arrow-right-s-line"></i>
          </button>
        </li>
      </ul>
    </nav>
  </div>
</aside>
<!-- End Sidebar-->

<main id="main" class="main">
  <section class="section dashboard">
    <div class="row">
      <div class="col-lg-12">
        <div id="main_card" class="col-lg-12 card design">
          <!--<div class="card-body card-body-custom"></div>-->
          <input type="hidden" id="z_index" value="0">
          <i id="rotationstate" class="rotation-state bi bi-arrow-clockwise"></i>
          <i id="rotationstate_left" class="rotation-state-left bi bi-arrow-counterclockwise"></i>
          <div id="contextMenu" class="context-menu">
            <input placeholder="Name" type="text" id="obj_ball_content">            
            <button class="panel-head-contextmenu" id="btnMoveFront">Move to front</button>
            <button class="panel-head-contextmenu" id="btnRemoveObject">Remove</button>
          </div>
          <div id="contextMenu_Heading" class="context-menu">
            <input placeholder="Name" class="P5" type="text" id="obj_heading">
            <button class="panel-head-contextmenu P5" id="btnBold">Bold</button>
            <button class="panel-head-contextmenu P5" id="btnItalic">Italic</button>
            <button class="panel-head-contextmenu P5" id="btnRemoveHeading">Remove</button>
            <div class="square">
              <input type="text" class="colortext coloris instance1" value="rgb(245, 245, 220)">
            </div>
          </div>
        </div>
        <!-- <canvas id="canvas" style="position: absolute;" class="col-lg-12 card design"></canvas> -->
        <polygon data-role="shape-main" fill="#0000ff" fill-opacity="0.2" fill-rule="nonzero" stroke="#0000ff" stroke-linejoin="round" stroke-width="1" points="82.4852,86.031 84.4381,86.031 85.6297,86.031 87.2185,86.031 89.9658,86.427 91.9187,88.407 95.0632,91.179 95.8576,92.367 98.2408,95.139 100.1937,98.307 103.3382,102.267 104.927,104.247 105.3242,104.643 105.3242,105.039 105.3242,105.831 105.3242,107.811 105.3242,110.187 104.5298,111.771 103.3382,113.355 100.5909,114.543 97.4464,116.127 94.6991,116.127 90.363,116.127 86.4241,116.127 81.6908,116.127 74.6074,116.127 65.5711,114.939 57.2961,111.771 52.1656,110.583 47.4654,107.811 41.9377,102.267 37.6016,92.367 35.2515,85.239 34.4571,81.279 34.4571,77.319 36.0459,70.983 38.7932,64.251 41.9377,57.915 45.8766,52.371 49.8155,48.807 59.6462,40.887 67.9212,36.927 75.4018,33.759 83.6768,30.987 91.9187,29.799 97.0492,29.799 101.3853,29.799 106.4827,29.799 111.6132,29.799 117.9022,35.343 124.5884,42.471 125.78,49.203 125.78,56.331 125.78,64.251 121.8411,72.963 116.7106,81.675 108.4687,88.803 102.1466,92.763 98.2408,93.951 95.0632,94.347 90.7602,94.743 87.2185,94.743 82.8824,94.743 79.7379,95.931 75.0046,97.911 71.8601,100.683 69.1128,105.435 67.9212,107.811 67.9212,110.187 67.9212,112.167 67.9212,112.563 71.0657,115.335 77.7519,116.919 85.2325,116.919 94.3019,118.503 102.1466,118.503 108.8659,116.919 112.8048,114.147 115.1549,110.979 115.9493,104.247 115.5521,96.327 109.23,88.011 101.3853,77.715 95.4604,70.587 89.5686,66.231 87.6157,64.251 86.8213,64.251 86.4241,63.855 86.4241,63.459 86.4241,62.271 89.9658,60.291 92.3159,59.499 96.2548,57.915 98.6049,56.331 102.5438,54.351 106.0855,51.975 108.8659,49.995 110.0244,48.015 110.0244,46.827 110.8188,44.055 110.8188,42.075 110.8188,39.699 108.8659,36.927 105.6883,34.551 102.1466,31.779 98.2408,30.591 95.4604,29.403 91.9187,29.403 87.6157,29.403 82.4852,29.403 78.5463,29.403 75.799,29.799 74.2102,30.591 71.4629,33.363 69.51,35.343 66.3324,38.907 65.9683,43.263 65.9683,49.599 65.9683,55.539 66.7296,61.083 69.1128,66.231 71.8601,71.775 74.2102,75.735 75.799,77.319 76.1962,77.715 77.3547,77.715"></polygon>     

      </div>
    </div>
  </section>
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="card">
    <div class="card-body footer-body">
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <div class="row">
            <div class="col text-end">
              <span class="footer-right">
                <i id="btnfullscreen" class="bi bi-arrows-fullscreen"> &nbsp Full screen</i>&nbsp&nbsp                
              </span>
              Zoom&nbsp;
              <i class="bi bi-zoom-out"></i>
            </div>
            <div class="col">
              <input type="range" class="form-range" id="customRange1" />
            </div>
            <div class="col">
              <i class="bi bi-zoom-in"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

    <!-- extra JS Files -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <!-- <script src="{{ asset('assets/extra/apexcharts/apexcharts.min.js')}}"></script> -->
    <script src="{{ asset('assets/extra/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- <script src="{{ asset('assets/extra/chart.js/chart.umd.js')}}"></script> -->
    <!-- <script src="{{ asset('assets/extra/echarts/echarts.min.js')}}"></script> -->
    <script src="{{ asset('assets/extra/quill/quill.min.js')}}"></script>
    <!-- <script src="{{ asset('assets/extra/simple-datatables/simple-datatables.js')}}"></script> -->
    <script src="{{ asset('assets/extra/tinymce/tinymce.min.js')}}"></script>
    <!-- <script src="{{ asset('assets/extra/php-email-form/validate.js')}}"></script> -->

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script src="{{ asset('assets/js/dashboard.js')}}"></script>
    <script src="{{ asset('assets/js/board.js')}}"></script>
    <script src="{{ asset('assets/js/coloris.min.js')}}"></script>
    <script>


////////////////////////////////////////    new implementations  /////////////////////////////////////

 // Sample data - replace this with your actual data
 var cardData_instruments = [];
var cardData_actors = [];
var current_obj = [];
var current_folder = "";
var object = "";
var currentObject = null;
var curr_heading = "";
var heading_object = null;
const cardsPerPage = 5;
const cardsPerRow = 3;
let currentPage = 1;



function displayCards(page) {
  const startIndex = (page - 1) * (cardsPerPage*cardsPerRow);
  const endIndex = startIndex + (cardsPerPage*cardsPerRow);
  const paginatedCards = cardData.slice(startIndex, endIndex);

  const cardContainer = document.getElementById('cardContainer');
  cardContainer.innerHTML = '';

  

for (let i = 0; i < paginatedCards.length; i++) {    

    var cardHTML = `<div class="row" style="margin-left: 0px; margin-right: 0px;">`;
      
        cardHTML += `<div style="padding-right: 5px; padding-left: 5px;" class="col-4">
          <div class="card">
            <div class="card-body-custom" onclick="create_object(` + parseInt(startIndex + i) + `)">
              <img src="assets/images/menuassets/` + paginatedCards[i].image + `" class="card-image" class="img-fluid" alt="Guitar">
              <div class="box-title">` + paginatedCards[i].title + `</div>
            </div>
          </div>
        </div>`;
        i++;
        if (paginatedCards.length > i) {
          cardHTML += `<div style="padding-right: 5px; padding-left: 5px;" class="col-4">
            <div class="card">
              <div class="card-body-custom" onclick="create_object(` + parseInt(startIndex + i) + `)">
                <img src="assets/images/menuassets/` + paginatedCards[i].image + `" class="card-image" class="img-fluid" alt="Guitar">
                              <div class="box-title">` + paginatedCards[i].title + `</div>
              </div>
            </div>  
          </div>`;
          i++;
          if(paginatedCards.length > i) {
            cardHTML += `<div style="padding-right: 5px; padding-left: 5px;" class="col-4">
              <div class="card">
                <div class="card-body-custom" onclick="create_object(` + parseInt(startIndex + i) + `)">
                  <img src="assets/images/menuassets/` + paginatedCards[i].image + `" class="card-image" class="img-fluid" alt="Guitar">
                                <div class="box-title">` + paginatedCards[i].title + `</div>
                </div>
              </div>
            </div>`;
          }
        }
        
        
      cardHTML += `</div>`;
      cardContainer.innerHTML += cardHTML;
      //i = i+2;
  }
}

function addnotes() {
  const cardContainer = document.getElementById('cardContainer');  
  cardContainer.innerHTML = '';
  var cardHTML = ``;
  
  cardContainer.innerHTML += cardHTML;
}

function displayHeadings() {
  
  const cardContainer = document.getElementById('cardContainer');
  cardContainer.innerHTML = '';

  var cardHTML = ``;

  cardHTML += `<div class="row rowmargin" ><div style="padding-right: 5px; padding-left: 5px;" class="col-12">
            <button type="button" style="width: 100%; font-size: xx-large;" class="btn btn-outline-secondary" onclick="create_heading('xxl')">Add a heading</button>
        </div></div>`;
        cardHTML += `<div class="row rowmargin"><div style="padding-right: 5px; padding-left: 5px;" class="col-12">
            <button type="button" style="width: 100%; font-size: x-large;" class="btn btn-outline-secondary" onclick="create_heading('xl')">Add a heading</button>
        </div></div>`;
        cardHTML += `<div class="row rowmargin"><div style="padding-right: 5px; padding-left: 5px;" class="col-12">
        <button type="button" style="width: 100%; font-size: large;" class="btn btn-outline-secondary" onclick="create_heading('l')">Add a heading</button>
        </div></div>`;
        cardHTML += `<div class="row rowmargin"><div style="padding-right: 5px; padding-left: 5px;" class="col-12">
            <button type="button" style="width: 100%; font-size: medium;" class="btn btn-outline-secondary" onclick="create_heading('m')">Add a heading</button>
        </div></div>`;
        cardHTML += `<div class="row rowmargin"><div style="padding-right: 5px; padding-left: 5px;" class="col-12">
            <button type="button" style="width: 100%; font-size: small;" class="btn btn-outline-secondary" onclick="create_heading('s')">Add a heading</button>
        </div></div>`;
        cardHTML += `<div class="row rowmargin"><div style="padding-right: 5px; padding-left: 5px;" class="col-12">
            <button type="button" style="width: 100%; font-size: smaller;" class="btn btn-outline-secondary" onclick="create_heading('ms')">Add a heading</button>
        </div></div>`;
        cardHTML += `<div class="row rowmargin"><div style="padding-right: 5px; padding-left: 5px;" class="col-12">
            <button type="button" style="width: 100%; font-size: x-small;" class="btn btn-outline-secondary" onclick="create_heading('xs')">Add a heading</button>
        </div></div>`;
        cardHTML += `<div class="row rowmargin"><div style="padding-right: 5px; padding-left: 5px;" class="col-12">
            <button type="button" style="width: 100%; font-size: xx-small;" class="btn btn-outline-secondary" onclick="create_heading('xxs')">Add a heading</button>
        </div></div>`;
  
  cardContainer.innerHTML += cardHTML;

}

function clickLeft() {
  
  var currPage = $("#currentPage").text();
  if(currPage > 1) {
    currentPage = (currentPage - 1);
    $("#currentPage").text(currentPage);
    displayCards(currentPage);
  }
}

function clickRight() {
  debugger
  var currPage = $("#currentPage").text();
  var totPage = $("#totalPage").text();
  let currPageInt = parseInt(currPage);
let totPageInt = parseInt(totPage);
  if(currPageInt < totPageInt) {
    currentPage = (currentPage + 1);
    $("#currentPage").text(currentPage);
    displayCards(currentPage);
  }
}

function displayPagination() {
  
  const totalPages = Math.ceil(cardData.length / (cardsPerPage*cardsPerRow));
  //const pagination = document.getElementById('pagination');
  //pagination.innerHTML = '';

  $("#totalRecords").text(cardData.length);
  $("#totalPage").text(totalPages);
  $("#currentPage").text(currentPage);
  
/*
  for (let i = 1; i <= totalPages; i++) {
    const li = document.createElement('li');
    li.classList.add('page-item');
    const link = document.createElement('a');
    link.classList.add('page-link');
    link.href = '#';
    link.innerText = i;
    li.appendChild(link);
    pagination.appendChild(li);

    link.addEventListener('click', function() {
      currentPage = i;
      displayCards(currentPage);
      highlightCurrentPage();
    });
  }

  highlightCurrentPage();
*/



}

function highlightCurrentPage() {
  const paginationLinks = document.querySelectorAll('#pagination .page-link');
  paginationLinks.forEach(link => {
    if (parseInt(link.innerText) === currentPage) {
      link.parentElement.classList.add('active');
    } else {
      link.parentElement.classList.remove('active');
    }
  });
}

// Initial display

loadData(1);
$("#selectionIndex").val(1);


function loadData(index) {
  var index_ = $("#selectionIndex").val();
  //$(".search-bar").css("display", "");
debugger
  var searchButton_ = document.getElementById('btnsearch');
  var searchtext_ = document.getElementById('txtsearch');  


  var container_ = document.getElementById('cardContainer');
  var notes_ = document.getElementById('cardNotes');

  container_.classList.remove("non_resize");
  notes_.classList.add("non_resize");

  searchButton_.classList.remove("non_resize");
  searchtext_.placeholder='Search';
  searchtext_.title='Search...';

  if(index == 1)
  {
    
    if(index_ != "1") {
      $(".scrollerViewContainer").css("display", "");
     // Read the JSON content from instrument.json


// Fetch the JSON content from instrument.json
fetch('/assets/data/instruments/instruments.json')
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    // Assign the JSON data to cardData
    cardData = data;
    cardData_instruments = cardData;
    currentPage = 1;
    displayCards(currentPage);
    displayPagination();
    $("#pagination").css("display", "");
    $("#selectionIndex").val(1);
    // Now you can use cardData as needed
    console.log(cardData);

  })
  .catch(error => {
    console.error('There was a problem with the fetch operation:', error);
  });

     
    }
    


  }

  if(index == 2)
  {
    
    if(index_ != "2") {

      $(".scrollerViewContainer").css("display", "none");
     

      // Fetch the JSON content from actors.json
fetch('/assets/data/actors/actors.json')
.then(response => {
  if (!response.ok) {
    throw new Error('Network response was not ok');
  }
  return response.json();
})
.then(data => {
  // Assign the JSON data to cardData
  cardData = data;
  cardData_actors = cardData;
  currentPage = 1;
  displayCards(currentPage);
  displayPagination();
  $("#pagination").css("display", "");
  $("#selectionIndex").val(2);
  // Now you can use cardData as needed
  console.log(cardData);

})
.catch(error => {
  console.error('There was a problem with the fetch operation:', error);
});

     
    }
    
    

  }

  if(index == 3)
  {
    
    if(index_ != "3") {

      $(".scrollerViewContainer").css("display", "none");
      cardData = [
        //{ title: 'Choose', image: 'choose_shap.svg', category: 'shape' },
        // { title: 'Polygon', image: 'choose_shap_area.svg', category: 'shape' },
        
        { title: 'Rectangle', image: 'rectangle.png', category: 'shape' },
        { title: 'Ellipse', image: 'ellipse.png', category: 'shape' },
        //{ title: 'Line', image: 'line.png', category: 'shape' },
        //{ title: 'Pencil', image: 'choose_shap_pencil.svg', category: 'shape' },
        // { title: 'Polyline', image: 'choose_shap_polyline.svg', category: 'shape' },
        
        //{ title: 'Text', image: 'choose_shap_text_manager.svg', category: 'shape' },
        { title: 'Triangle', image: 'triangle.png', category: 'shape' },        
      ];
      currentPage = 1;
      displayCards(currentPage);
      displayPagination();
      $("#pagination").css("display", "");
      $("#selectionIndex").val(3);
    }
  }

  if(index == 4)
  {
    
    if(index_ != "4") {

      $(".scrollerViewContainer").css("display", "none");
      cardData = [
        { title: 'Line', image: 'shap_line.svg', category: 'line' },
        { title: 'Arrow', image: 'shap_line_arrow.svg', category: 'line' },
        { title: 'ArrowReverse', image: 'shap_line_arrow_reverse.svg', category: 'line' },
        { title: 'Dashed', image: 'shap_line_dashed.svg', category: 'line' },
        { title: 'Flat', image: 'shap_line_flat.svg', category: 'line' },
        { title: 'Flat reverse', image: 'shap_line_flat_reverse.svg', category: 'line' },     
      ];
      currentPage = 1;
      displayCards(currentPage);
      displayPagination();
      $("#pagination").css("display", "");
      $("#selectionIndex").val(4);
    }
  }

  if(index == 5)
  {    
    if(index_ != "5") {
      $(".scrollerViewContainer").css("display", "none");
      displayHeadings();
      $("#pagination").css("display", "none");
      $("#selectionIndex").val(5);
    }
  }

  if(index == 0) {
    if(index_ != "0") {

      container_.classList.add("non_resize");
      notes_.classList.remove("non_resize");

      searchButton_.classList.add("non_resize");
      searchtext_.placeholder='Add Notes';
      searchtext_.title='Add Notes';

      $(".scrollerViewContainer").css("display", "none");      
      addnotes();
      $("#pagination").css("display", "none");
      $("#selectionIndex").val(0);
    }    
  } 
}


/*Horizontal Scroller Start*/
document.addEventListener("DOMContentLoaded", function () {
  const scrollImages = document.querySelector(".scroll-images");
  const scrollLength = scrollImages.scrollWidth - scrollImages.clientWidth;
  const leftButton = document.querySelector(".left");
  const rightButton = document.querySelector(".right");

  function checkScroll() {
    const currentScroll = scrollImages.scrollLeft;
    if (currentScroll === 0) {
      leftButton.setAttribute("disabled", "true");
      rightButton.removeAttribute("disabled");
    } else if (currentScroll === scrollLength) {
      rightButton.setAttribute("disabled", "true");
      leftButton.removeAttribute("disabled");
    } else {
      leftButton.removeAttribute("disabled");
      rightButton.removeAttribute("disabled");
    }
  }

  scrollImages.addEventListener("scroll", checkScroll);
  window.addEventListener("resize", checkScroll);
  checkScroll();

  function leftScroll() {
    scrollImages.scrollBy({
      left: -200,
      behavior: "smooth"
    });
  }

  function rightScroll() {
    scrollImages.scrollBy({
      left: 200,
      behavior: "smooth"
    });
  }

  leftButton.addEventListener("click", leftScroll);
  rightButton.addEventListener("click", rightScroll);
});
/*
document.addEventListener('click', function(event) {    
  
  var instrument_ = event.target.className;
  if (!contextMenu.contains(event.target)) {
      contextMenu.style.display = 'none';
  }
});
*/
function create_object(img_index) {
  debugger
  createElement_(img_index);
}

function create_heading(heading_size) {
  
  curr_heading = Date.now();
  const main_card = document.getElementById('main_card');
  var heading_ = document.createElement('label');  

  heading_.id = curr_heading;
  heading_.className = "heading " + heading_size;
  heading_.innerText = "Add a heading";  
  heading_.style.position = 'absolute';
  main_card.appendChild(heading_);
  
  dragElement(document.getElementById(curr_heading), 2);
}



function createElement_(_index) {
  

    var _selectedIndex = $("#selectionIndex").val();

    if(_selectedIndex == "1" || _selectedIndex == "2") {

       
      var _id = (_selectedIndex == "1" ? "img_instrument_" : "img_actor_")
      var div_id = (_selectedIndex == "1" ? "obj_instrument" : "obj_actor")
      var image_id_ = (_id + (_index+1) + "_counter");
      var counter_ = document.getElementById(image_id_);
      var counter_index = 0;

      const main_card = document.getElementById('main_card');
      if(counter_ == null) {
        var hiddentype_ = document.createElement('input');
        hiddentype_.setAttribute("type","hidden");
        hiddentype_.setAttribute("id",image_id_);
        hiddentype_.setAttribute("value","1");
        main_card.appendChild(hiddentype_);
        counter_index = 1;
      } else {
        
        counter_index = parseInt(counter_.value)+1;
        counter_.value = counter_index;
      }

      var objectmainid_ = div_id + "_" + (_index+1) + "_" + counter_index;
      var content_id = div_id + "_" + (_index+1) + "_" + counter_index + "_content";


      var html_ = `<div class="resizers ` + objectmainid_ + `" style="padding: 1px;">
      <div class"` + objectmainid_ + `"><label id="` + content_id + `" class="` + objectmainid_ + `" style="display: none;"></label></div>
      <div class='resizer top-left ` + (_selectedIndex == "2" ? "actor" : "") + ` ` + objectmainid_ + `'></div>
      <div class='resizer top-right ` + (_selectedIndex == "2" ? "actor" : "") + ` ` + objectmainid_ + `'></div>
      <div class='resizer bottom-left ` + (_selectedIndex == "2" ? "actor" : "") + ` ` + objectmainid_ + `'></div>
      <div class='resizer bottom-right ` + (_selectedIndex == "2" ? "actor" : "") + ` ` + objectmainid_ + `'></div>
      <img id="` + _id  + (_index+1) + "_" + counter_index + `" src="assets/images/menuassets/` + cardData[_index].image + `" style="object-fit: contain; width: 100%; height: 100%;" class="img-fluid ` + objectmainid_ + `" alt="Guitar">
      <input type="hidden" id="` + _id  + (_index+1) + "_" + counter_index + "_hidden" + `" value="0">
      </div>`;


      //var html_ = `<label id="` + content_id + `" style="display: none;"></label><img id="` + _id  + (_index+1) + "_" + counter_index + `" src="assets/images/menuassets/` + cardData[_index].image + `" style="object-fit: contain;" class="img-fluid" alt="Guitar"><input type="hidden" id="` + _id  + (_index+1) + "_" + counter_index + "_hidden" + `" value="0">`;
      //class="ui-resizable"
      var d = document.createElement('div');
      d.id = div_id + "_" + (_index+1) + "_" + counter_index;
      d.className = div_id + " resizable";
  
      d.style.position = 'absolute';
      //d.resizable();
      d.innerHTML = html_;
      main_card.appendChild(d);
      //$("#" + _id + (_index+1) + "_" + counter_index).resizable();
      
      makeResizableDiv('#' + d.id);
      dragElement(document.getElementById(d.id), 1);
    }
    else if (_selectedIndex == "3") {

        var shape_id = Date.now();
        const main_card = document.getElementById('main_card');
        var shape_ = document.createElement('div');  


        var html_ = `<div id="shape_` + shape_id + `" class="resizers shape_` + shape_id + `">
        <div class="` + (_index == 1 ? "shape oval" : _index == 2 ? "shape triangle" : "") + `"></div>
        <div class="resize-handle top-left"></div>
        <div class="resize-handle top-right"></div>
        <div class="resize-handle bottom-left"></div>
        <div class="resize-handle bottom-right"></div>
        </div>`;

        shape_.id = "shape_" + shape_id;
        // 
      switch(_index) {
        case 0:             
          shape_.className = "objShape shape rectangle";
          break;
        case 1:        
        case 2:
          shape_.className = "objShape resizable";
          break;        
      }
      
      shape_.style.position = 'absolute';
      shape_.innerHTML = html_;
      main_card.appendChild(shape_);
      
      object = shape_.id;
      currentObject = document.getElementById(shape_.id);      

      makeResizableRectangle('#' + shape_.id, 100, false);
      dragElement(document.getElementById(shape_.id), 1);
    } else if (_selectedIndex == "4") {
      
      var shape_id = Date.now();
      const main_card = document.getElementById('main_card');
      var shape_ = document.createElement('div');
      var min_height = 0;
      var isfixedsize_ = true;

        
        html_ = `<div id="shape_` + shape_id + `" class="resizers shape_` + shape_id + `">`;
        html_ += (_index == 1 ? `<div class="shape arrow-line"><div class="arrow-head"></div></div>` : 
        _index == 2 ? `<div class="shape arrow-line"><div class="arrow-head_left"></div></div>` : 
        _index == 4 ? `<div class="shape t_line_container"><div class="t_line_horizontal"></div><div class="t_line_vertical_right"></div></div>` : 
        _index == 5 ? `<div class="shape t_line_container"><div class="t_line_vertical_left"></div><div class="t_line_horizontal"></div></div>` : "<div></div>");                
        html_ += `<div class="resize-handle ` + (_index == 0 || _index == 3 || _index == 1 || _index == 2 ? "Stop-left" : "top-left") + `"></div>
        <div class="resize-handle ` + (_index == 0 || _index == 3 || _index == 1 || _index == 2 ? "Stop-right" : "top-right") + `"></div>        
        ` + (_index != 0 && _index != 1 && _index != 2 && _index != 3 ? `<div class="resize-handle bottom-left"></div>
        <div class="resize-handle bottom-right"></div>` : ``) + `
        <div class="rotate-handle"></div>
        </div>`;

        shape_.id = "shape_" + shape_id;
        // 
      switch(_index) {
        case 0:        
        shape_.className = "objShapeLine shape simpleLine";
          break;
        case 3:
        shape_.className = "objShapeLine shape dashLine";
          break;
        case 1:
        case 2:
        shape_.className = "objShapeLine shape simpleLine";        
          break;  
        case 4:
        case 5:        
        shape_.className = "objShape tline_ resizable";
        min_height = 50;
        var isfixedsize_ = false;
          break;
      }
      
      shape_.style.position = 'absolute';
      shape_.innerHTML = html_;
      main_card.appendChild(shape_);
      
      object = shape_.id;
      currentObject = document.getElementById(shape_.id);      

      makeResizableRectangle('#' + shape_.id, min_height, isfixedsize_);
      dragElement(document.getElementById(shape_.id), 1);

}
}
//dragElement(document.getElementsByClassName("obj_instrument"));


function dragElement(element, index) {
  debugger
  pos1 = 0,
  pos2 = 0,
  pos3 = 0,
  pos4 = 0;
  element.onmousedown = dragMouseDown;

  function dragMouseDown(e) {
          
    e = e || window.event;
    e.preventDefault();
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    
    e = e || window.event;
    e.preventDefault();
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    
    const alertArea = document.getElementById('main_card');
    const alertAreaRect = alertArea.getBoundingClientRect();
    const objrect = element.getBoundingClientRect();
    
    if(index == 1) {
      object = element.id;
    } else if (index == 2) {
      curr_heading = element.id;
      heading_object = element;
    }
    
    
    
    
    /*
    var chil = element.children[1].id;
    const hid = document.getElementById(chil);
    if(element.children[0].className != "panel-small-player-5") {
        object = element.id;
    }
    
    rotationAngle = 0;
    
    var ball_content_ = null;
    

    if(element.className == "obj_instrument" || element.className == "obj_ball obj_ball_before") {
        var contentid_ = element.id.replace("obj_ball","obj_ball_content");
        ball_content_ = document.getElementById(contentid_);
    } else if(element.className == "obj_small_ball" || element.className == "obj_small_ball obj_ball_before") {
        var contentid_ = element.id.replace("obj_small_ball","obj_small_ball_content");
        ball_content_ = document.getElementById(contentid_);
    }
*/


    var f_right = parseInt(alertAreaRect.right);
    var f_left = parseInt(alertAreaRect.left);
    var f_top = parseInt(alertAreaRect.top);
    var f_bottom = parseInt(alertAreaRect.bottom);

    var o_right = parseInt(objrect.right);
    var o_left = parseInt(objrect.left);
    var o_top = parseInt(objrect.top);
    var o_bottom = parseInt(objrect.bottom);

    //if (hid.value == "1") {
        if (
            ((o_right) >= f_left && (o_right - pos1) < f_right) &&
            (o_left <= f_right && (o_left - pos1) >= f_left) &&
            (o_bottom >= f_top && (o_bottom - pos2) < f_bottom) &&
            (o_top <= f_bottom && (o_top - pos2) >= f_top)
            //&& (element.offsetLeft - pos1) > 0

        ) {
            element.style.top = (element.offsetTop - pos2) + "px";
            element.style.left = (element.offsetLeft - pos1) + "px";

            
            rotationstate.style.display = 'none';
            //rotationstate.style.left = (element.offsetLeft - pos1 - 40) + 'px';
            //rotationstate.style.top = (element.offsetTop - pos2) + (element.children[1].clientHeight / 2) + 'px';

            rotationstate_left.style.display = 'none';
            //rotationstate_left.style.left = (element.offsetLeft - pos1 + 40) + (element.children[1].clientWidth) + 'px';
            //rotationstate_left.style.top = (element.offsetTop - pos2) + (element.children[1].clientHeight / 2) + 'px';
            


            //moveContent(element, ball_content_, (element.offsetTop - pos2), (element.offsetLeft - pos1));
            //element.classList.add("obj_ball_before");


        }

  /*
    } else {                            
        element.style.top = (element.offsetTop - pos2) + "px";
        element.style.left = (element.offsetLeft - pos1) + "px";
        moveContent(element, ball_content_, (element.offsetTop - pos2), (element.offsetLeft - pos1));
    }
   */

}            

function closeDragElement() {

  
    //var direction_ = element.children[0];
    //var chil = element.children[1].id;
    //const hid = document.getElementById(chil);
    const alertArea = document.getElementById('main_card');
    const alertAreaRect = alertArea.getBoundingClientRect();
    const objrect = element.getBoundingClientRect();

    var f_right = parseInt(alertAreaRect.right);
    var f_left = parseInt(alertAreaRect.left);
    var f_top = parseInt(alertAreaRect.top);
    var f_bottom = parseInt(alertAreaRect.bottom);

    var o_right = parseInt(objrect.right);
    var o_left = parseInt(objrect.left);
    var o_top = parseInt(objrect.top);
    var o_bottom = parseInt(objrect.bottom);

   
    //isNewCreated = true;
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
}



}

// Rotation Left
$(document).on('click', '#rotationstate_left', function (e) {  
  rottaeLeft(true);
});

// Rotation Right
$(document).on('click', '#rotationstate', function (e) {
  rottaeLeft(false);
});

$(document).on('click', '.rotate-handle', function (e) {
  linerotate(e);
});


$(document).on('click', '.obj_instrument', function (e) {
  clickObjBall(e);
});

$(document).on('contextmenu', '.obj_instrument', function (e) {  
  ObjBallContextMenu(e);
});

$(document).on('contextmenu', '.obj_actor', function (e) {  
  ObjBallContextMenu(e);
});

$(document).on('contextmenu', '.objShape', function (e) {  
  ObjBallContextMenu(e);
});

$(document).on('contextmenu', '.objShapeLine', function (e) {  
  ObjBallContextMenu(e);
});

$(document).on('click', '.obj_actor', function (e) {
  clickObjBall(e);
});

$(document).on('click', '.heading', function (e) {
  clickHeading(e);
});

$(document).on('contextmenu', '.heading', function (e) {
  ObjHeadingContextMenu(e);
});

$(document).on('click', '.objShape', function (e) {
  clickObjBall(e);
});

$(document).on('click', '.objShapeLine', function (e) {
  clickObjBall(e);
});


function clickHeading(e) {
  curr_heading = e.currentTarget.id;
  heading_object = e.currentTarget;
}

function clickObjBall(e) {
  e.preventDefault();
  debugger
  
  if(e.currentTarget.classList.contains("obj_instrument") || e.currentTarget.classList.contains("obj_actor")) {
      object = e.currentTarget.id;
      currentObject = e.currentTarget;
      
      var image_ = document.getElementById(e.currentTarget.id.replace("obj_","img_"));
      var foldersrc_ = image_.currentSrc.split("/assets/images/menuassets/");
      var src_ = foldersrc_[1].split("/");

      current_folder = src_[0].replace(".png","");
      

      if(e.currentTarget.classList.contains("obj_instrument")) {
        current_obj = cardData_instruments.find(p => p.title == current_folder).variants;
      } else {
        current_obj = cardData_actors.find(p => p.title == current_folder).variants;
      }      
      
      rotationstate.style.display = 'block';
      rotationstate.style.left = (e.currentTarget.offsetLeft - 35) + 'px';
      rotationstate.style.top = (e.currentTarget.offsetTop - 10) + (e.currentTarget.offsetHeight / 2) + 'px';

      rotationstate_left.style.display = 'block';
      rotationstate_left.style.left = (e.currentTarget.offsetLeft + 25) + e.currentTarget.offsetWidth + 'px';
      rotationstate_left.style.top = (e.currentTarget.offsetTop - 10) + (e.currentTarget.offsetHeight / 2) + 'px';
      
      debugger
      e.currentTarget.children[0].style.border = "";
      e.currentTarget.children[0].children[1].classList.remove("non_resize");
      e.currentTarget.children[0].children[2].classList.remove("non_resize");
      e.currentTarget.children[0].children[3].classList.remove("non_resize");
      e.currentTarget.children[0].children[4].classList.remove("non_resize");      
      //rotationstate.style.display = 'none';
      //rotationstate_left.style.display = 'none';      
  } else if (e.currentTarget.classList.contains("objShape")) {
      object = e.currentTarget.id;
      currentObject = e.currentTarget;

      if(e.currentTarget.children[0].children.length > 1) {
        e.currentTarget.children[0].style.border = "";
        e.currentTarget.children[0].children[1].classList.remove("non_resize");
        e.currentTarget.children[0].children[2].classList.remove("non_resize");
        e.currentTarget.children[0].children[3].classList.remove("non_resize");
        e.currentTarget.children[0].children[4].classList.remove("non_resize");
        if(e.currentTarget.children[0].children.length > 5) {
          e.currentTarget.children[0].children[5].classList.remove("non_resize");
        }
      } else {
        e.currentTarget.children[0].children[0].children[1].classList.remove("non_resize");
        e.currentTarget.children[0].children[0].children[2].classList.remove("non_resize");
        e.currentTarget.children[0].children[0].children[3].classList.remove("non_resize");
        e.currentTarget.children[0].children[0].children[4].classList.remove("non_resize");
        e.currentTarget.children[0].children[0].children[5].classList.remove("non_resize");
      }

      
  } else if (e.currentTarget.classList.contains("objShapeLine")) {
      object = e.currentTarget.id;
      currentObject = e.currentTarget;

      if(e.currentTarget.children[0].children.length > 1) {
        e.currentTarget.children[0].style.border = "";
        e.currentTarget.children[0].children[1].classList.remove("non_resize");
        e.currentTarget.children[0].children[2].classList.remove("non_resize");    
        e.currentTarget.children[0].children[3].classList.remove("non_resize");    
      } else {
        e.currentTarget.children[0].children[0].children[1].classList.remove("non_resize");
        e.currentTarget.children[0].children[0].children[2].classList.remove("non_resize");    
        e.currentTarget.children[0].children[0].children[3].classList.remove("non_resize");    
        e.currentTarget.children[0].children[0].children[4].classList.remove("non_resize");    
        e.currentTarget.children[0].children[0].children[5].classList.remove("non_resize");    
      }
      
  }
}

function ObjBallContextMenu(e) {
  
  debugger

  e.preventDefault(); // Prevent default right-click behavior                              
  
  if(e.currentTarget.classList.contains("objShapeLine") || e.currentTarget.classList.contains("objShape")) {
    document.getElementById("obj_ball_content").classList.add("non_resize");
    document.getElementById("btnMoveFront").classList.add("non_resize");
  } else {
    document.getElementById("obj_ball_content").classList.remove("non_resize");
    document.getElementById("btnMoveFront").classList.remove("non_resize");
  }
  
  object = e.currentTarget.id;
  currentObject = e.currentTarget;
  contextMenu.style.left = e.currentTarget.offsetLeft + 'px';
  contextMenu.style.top = e.currentTarget.offsetTop + 'px';  
  contextMenu.style.display = 'block';
  



  var objBallContent_ = document.getElementById(object + "_counter");
  //$("#obj_ball_content").val(objBallContent_.innerText);

}

function ObjHeadingContextMenu(e) {  
  
  e.preventDefault(); // Prevent default right-click behavior  
  curr_heading = e.currentTarget.id;
  heading_object = e.currentTarget;
  contextMenu_Heading.style.left = e.currentTarget.offsetLeft + 10 + 'px';
  contextMenu_Heading.style.top = e.currentTarget.offsetTop + 10 + 'px';
  contextMenu_Heading.style.display = 'block';

  var btnbold_ = document.getElementById("btnBold");
  var btnitalic_ = document.getElementById("btnItalic");

  var objheading_content = document.getElementById("obj_heading");
  var objheading_colorcode = document.getElementsByClassName("colortext");
  var objheading_colorbutton = document.getElementsByClassName("clr-field");
  
  debugger
  var fontWeight_ = e.currentTarget.style.fontWeight;
  var fontType_ = e.currentTarget.style.fontStyle;

  btnbold_.innerText = (fontWeight_ == "bold" ? "Regular" : "Bold");
  btnitalic_.innerText = (fontType_ == "italic" ? "Normal" : "Italic"); 

  
  objheading_content.value = e.currentTarget.innerText;
  objheading_colorcode[0].value = (e.currentTarget.style.backgroundColor == "" ? "rgb(245, 245, 220)" : e.currentTarget.style.backgroundColor);
  objheading_colorbutton[0].style.color = (e.currentTarget.style.backgroundColor == "" ? "rgb(245, 245, 220)" : e.currentTarget.style.backgroundColor);
}

document.addEventListener('click', function(event) {
  
  if (!contextMenu.contains(event.target)) {
      contextMenu.style.display = 'none';
  }

  if (!contextMenu_Heading.contains(event.target)) {
    contextMenu_Heading.style.display = 'none';
  }
  
  var objects_ = document.getElementsByClassName("resizable");
  for(const curr_object of objects_) {    
    if(object == curr_object.id && event.target.id != "main_card") {
      //rotationstate.style.display = 'block';
      //rotationstate_left.style.display = 'block';
    } else {
      debugger
      curr_object.children[0].style.border = "none";
      curr_object.children[0].children[1].classList.add("non_resize");
      curr_object.children[0].children[2].classList.add("non_resize");
      curr_object.children[0].children[3].classList.add("non_resize");
      curr_object.children[0].children[4].classList.add("non_resize");
      // if(curr_object.children[0].children.length > 5) {
      //   curr_object.children[0].children[5].classList.add("non_resize");
      // }
      //rotationstate.style.display = 'none';
      //rotationstate_left.style.display = 'none';      
    }
  }

  var rec_objects = document.getElementsByClassName("rectangle");
  for(const curr_object of rec_objects) {    
    if(object == curr_object.id && event.target.id != "main_card") {      
    } else {
      debugger      
      curr_object.children[0].children[1].classList.add("non_resize");
      curr_object.children[0].children[2].classList.add("non_resize");
      curr_object.children[0].children[3].classList.add("non_resize");
      curr_object.children[0].children[4].classList.add("non_resize");
    }
  }

  var line_objects = document.getElementsByClassName("objShapeLine");
  for(const curr_object of line_objects) {    
    if(object == curr_object.id && event.target.id != "main_card") {      
    } else {
      debugger      


      if(curr_object.children[0].children.length > 1) {
        curr_object.children[0].children[1].classList.add("non_resize");
        curr_object.children[0].children[2].classList.add("non_resize");
        curr_object.children[0].children[3].classList.add("non_resize");
      } else {
        curr_object.children[0].children[0].children[1].classList.add("non_resize");
        curr_object.children[0].children[0].children[2].classList.add("non_resize");
        curr_object.children[0].children[0].children[3].classList.add("non_resize");
        curr_object.children[0].children[0].children[4].classList.add("non_resize");
        curr_object.children[0].children[0].children[5].classList.add("non_resize");
      }
    }
  }

  var t_line_objects = document.getElementsByClassName("tline_");
  for(const curr_object of t_line_objects) {    
    if(object == curr_object.id && event.target.id != "main_card") {      
    } else {
        curr_object.children[0].children[1].classList.add("non_resize");
        curr_object.children[0].children[2].classList.add("non_resize");
        curr_object.children[0].children[3].classList.add("non_resize");
        curr_object.children[0].children[4].classList.add("non_resize");
        curr_object.children[0].children[5].classList.add("non_resize");      
    }
  }
});

/*
$(document).on('click', '#btnMoveBack', function (e) {
  if(object != null && object != "") {
    
      document.getElementById(object).style.zIndex = "0";
      contextMenu.style.display = 'none';
  }
});
*/

$(document).on('input', '#obj_ball_content', function (e) {
  
  if(object != null && object != "") {
      var item = document.getElementById(object);
      var objcontent = document.getElementById(object + "_content");
      var val_ = $("#obj_ball_content").val();

      if(val_.length > 0) {
          objcontent.style.display = "block";
          objcontent.innerText = val_;
      } else {
          objcontent.style.display = "none";
          objcontent.innerText = "";
      }      
  }
});

$(document).on('input', '#obj_heading', function (e) {
    debugger
  if(heading_object != null && heading_object != undefined) {
      //var heading_content = document.getElementById(curr_heading);
      var val_ = $("#obj_heading").val();
      heading_object.innerText = val_;
  }
});

$(document).on('click', '#btnBold', function (e) {
  if(heading_object != null && heading_object != undefined) {
    
    if(e.currentTarget.innerText == "Bold") {
      heading_object.style.fontWeight = "bold";
      e.currentTarget.innerText = "Regular";
    } else {
      heading_object.style.fontWeight = "";
      e.currentTarget.innerText = "Bold";
    }
    
    contextMenu_Heading.style.display = 'none';
  }
});

$(document).on('click', '#btnItalic', function (e) {
  if(heading_object != null && heading_object != undefined) {

    if(e.currentTarget.innerText == "Italic")
    {
      heading_object.style.fontStyle = "italic";
      e.currentTarget.innerText = "Normal";
    } else {
      heading_object.style.fontStyle = "";
      e.currentTarget.innerText = "Italic";
    }
    
    contextMenu_Heading.style.display = 'none';
  }
});

$(document).on('click', '#btnMoveFront', function (e) {
  if(object != null && object != "") {
    
      var current_zindex = document.getElementById("z_index");
      var zindex_ = parseInt(current_zindex.value + 1);
      document.getElementById(object).style.zIndex = zindex_.toString();
      current_zindex.value = zindex_;
      contextMenu.style.display = 'none';
  }
});

$(document).on('click', '#btnRemoveObject', function (e) {
  if(object != null && object != "") {
    var currentObj_ = document.getElementById(object);

    contextMenu.style.display = 'none';    
    $("#obj_ball_content").val("");
    currentObj_.remove();
  }  
});

$(document).on('click', '#btnRemoveHeading', function (e) {
  if(heading_object != null && heading_object != undefined) {      
    contextMenu_Heading.style.display = 'none';
    heading_object.remove();
  }
});

function rottaeLeft(isLeft) {
  if(current_obj != undefined && current_obj.length > 0) {      
    var image_ = document.getElementById(object.replace("obj_","img_"));
    var image_variantIndex_ = document.getElementById(image_.id + "_hidden");
    var index_ = (isLeft == true ? (current_obj.length-1 > parseInt(image_variantIndex_.value) ? parseInt(image_variantIndex_.value) + 1 : 0) : parseInt(image_variantIndex_.value) == 0 ? current_obj.length-1 : parseInt(image_variantIndex_.value) - 1);
    image_.src = "/assets/images/menuassets/" + current_folder + "/" + current_obj[index_].image;
    image_variantIndex_.value = index_;    
  }
}

function linerotate(elem_) {
  debugger

  if(currentObject.classList.contains("simpleLine") || currentObject.classList.contains("dashLine")) {
    var transform_ = currentObject.style.transform;
    var rotationAngle;
    if(transform_ != "") {
      rotationAngle = parseInt(transform_.replace("rotate(", "").replace("deg)", ""));
    } else {
        rotationAngle = 0;
    }

    rotationAngle += 5;
    if (rotationAngle > 359) {
        rotationAngle = 0;
    }

    currentObject.style.transform = `rotate(${rotationAngle}deg)`;
  }
  /*
  if(current_obj != undefined && current_obj.length > 0) {      
    var image_ = document.getElementById(object.replace("obj_","img_"));
    var image_variantIndex_ = document.getElementById(image_.id + "_hidden");
    var index_ = (isLeft == true ? (current_obj.length-1 > parseInt(image_variantIndex_.value) ? parseInt(image_variantIndex_.value) + 1 : 0) : parseInt(image_variantIndex_.value) == 0 ? current_obj.length-1 : parseInt(image_variantIndex_.value) - 1);
    debugger
    image_.src = "/assets/images/menuassets/" + current_folder + "/" + current_obj[index_].image;
    image_variantIndex_.value = index_;    
  } 
  */   
}

function setrotateposition(element_, width_) {
  debugger
  var elem_ = (element_.children[0].children.length > 1 ? element_.children[0] : element_.children[0].children[0]);


  if(width_ <= 100) {
    elem_.children[3].style.left = '45px';
  } else {
    elem_.children[3].style.left = ((width_/2) - 5) + 'px';
  }  
}

function makeResizableRectangle(div, height_, isfixedSize) {
  debugger
  const element = document.querySelector(div);
  const resizers = document.querySelectorAll(div + ' .resize-handle')
  const minimum_size = 100;
  const minimum_height = height_;
  let original_width = 0;
  let original_height = 0;
  let original_x = 0;
  let original_y = 0;
  let original_mouse_x = 0;
  let original_mouse_y = 0;
  for (let i = 0;i < resizers.length; i++) {
    const currentResizer = resizers[i];
    currentResizer.addEventListener('mousedown', function(e) {
      e.preventDefault()
      original_width = parseFloat(getComputedStyle(element, null).getPropertyValue('width').replace('px', ''));
      original_height = parseFloat(getComputedStyle(element, null).getPropertyValue('height').replace('px', ''));
      original_x = element.getBoundingClientRect().left;
      original_y = element.getBoundingClientRect().top;
      original_mouse_x = e.pageX;
      original_mouse_y = e.pageY;
      window.addEventListener('mousemove', resize)
      window.addEventListener('mouseup', stopResize)
    })
    
    function resize(e) {
      debugger
      if (currentResizer.classList.contains('bottom-right')) {
        debugger
        const width = original_width + (e.pageX - original_mouse_x);
        const height = original_height + (e.pageY - original_mouse_y)
        
        if (width > minimum_size) {
          element.style.width = width + 'px'
        }
        if (isfixedSize) {
          element.style.height = '0px'
        } else {
          if (height > height_) {
            element.style.height = height + 'px'
          }
        }
        
      }
      else if (currentResizer.classList.contains('bottom-left')) {
        const height = original_height + (e.pageY - original_mouse_y) 
        const width = original_width - (e.pageX - original_mouse_x)
        if(isfixedSize) {
          element.style.height = '0px';
        } else {
          if (height > height_) {
            element.style.height = height + 'px';
          }
        }        

        if (width > minimum_size) {
          element.style.width = width + 'px'
          element.style.right = original_x + (e.pageX - original_mouse_x) + 'px'
          //element.style.left = (e.pageX - original_mouse_x) + 'px'
        }
      }
      else if (currentResizer.classList.contains('top-right') || currentResizer.classList.contains('Stop-right')) {
        const width = original_width + (e.pageX - original_mouse_x)
        const height = original_height - (e.pageY - original_mouse_y)
        if (width > minimum_size) {
          element.style.width = width + 'px'
        }
        if(isfixedSize) {
          element.style.height = '0px'
        } else {
          if (height > height_) {
            element.style.height = height + 'px'
            element.style.bottom = original_y + (e.pageY - original_mouse_y) + 'px'
          }
        }        

        if(currentResizer.classList.contains('Stop-right')) {
          setrotateposition(element, width);
        }
      }
      else {
        const width = original_width - (e.pageX - original_mouse_x)
        const height = original_height - (e.pageY - original_mouse_y)
        if (width > minimum_size) {
          element.style.width = width + 'px'
          element.style.right = original_x + (e.pageX - original_mouse_x) + 'px'
        }
        
        if(isfixedSize) {
          element.style.height = '0px'
        } else {
          if (height > height_) {
            element.style.height = height + 'px'
            //element.style.top = original_y + (e.pageY - original_mouse_y) + 'px'
          }
        }
        

        if(currentResizer.classList.contains('Stop-left')) {
          setrotateposition(element, width);
        }
      }
    }
    
    function stopResize() {
      window.removeEventListener('mousemove', resize)
    }
  }
}

function makeResizableDiv(div) {
  debugger
  const element = document.querySelector(div);
  const resizers = document.querySelectorAll(div + ' .resizer')
  const minimum_size = 100;
  let original_width = 0;
  let original_height = 0;
  let original_x = 0;
  let original_y = 0;
  let original_mouse_x = 0;
  let original_mouse_y = 0;
  for (let i = 0;i < resizers.length; i++) {
    const currentResizer = resizers[i];
    currentResizer.addEventListener('mousedown', function(e) {
      e.preventDefault()
      original_width = parseFloat(getComputedStyle(element, null).getPropertyValue('width').replace('px', ''));
      original_height = parseFloat(getComputedStyle(element, null).getPropertyValue('height').replace('px', ''));
      original_x = element.getBoundingClientRect().left;
      original_y = element.getBoundingClientRect().top;
      original_mouse_x = e.pageX;
      original_mouse_y = e.pageY;
      window.addEventListener('mousemove', resize)
      window.addEventListener('mouseup', stopResize)
    })
    
    function resize(e) {
      if (currentResizer.classList.contains('bottom-right')) {
        debugger
        const width = original_width + (e.pageX - original_mouse_x);
        const height = original_height + (e.pageY - original_mouse_y)
        
        if (width > minimum_size) {
          element.style.width = width + 'px'
        }
        if (height > minimum_size) {
          element.style.height = height + 'px'
        }
      }
      else if (currentResizer.classList.contains('bottom-left')) {
        const height = original_height + (e.pageY - original_mouse_y) 
        const width = original_width - (e.pageX - original_mouse_x)
        if (height > minimum_size) {
          element.style.height = height + 'px'
        }
        if (width > minimum_size) {
          element.style.width = width + 'px'
          element.style.right = original_x + (e.pageX - original_mouse_x) + 'px'
          //element.style.left = (e.pageX - original_mouse_x) + 'px'
        }
      }
      else if (currentResizer.classList.contains('top-right')) {
        const width = original_width + (e.pageX - original_mouse_x)
        const height = original_height - (e.pageY - original_mouse_y)
        if (width > minimum_size) {
          element.style.width = width + 'px'
        }
        if (height > minimum_size) {
          element.style.height = height + 'px'
          element.style.bottom = original_y + (e.pageY - original_mouse_y) + 'px'
        }
      }
      else {
        const width = original_width - (e.pageX - original_mouse_x)
        const height = original_height - (e.pageY - original_mouse_y)
        if (width > minimum_size) {
          element.style.width = width + 'px'
          element.style.right = original_x + (e.pageX - original_mouse_x) + 'px'
        }
        if (height > minimum_size) {
          element.style.height = height + 'px'
          //element.style.top = original_y + (e.pageY - original_mouse_y) + 'px'
        }
      }
    }
    
    function stopResize() {
      window.removeEventListener('mousemove', resize)
    }
  }
}
  /*Horizontal Scroller End*/

$(document).on('input', '.colortext', function (e) {
  debugger
  if(heading_object != null && heading_object != undefined) {
    heading_object.style.background = e.currentTarget.value;
  }
});

$(document).on('keypress', '#txtsearch', function (event) {  
  if($("#selectionIndex").val() == "0") {  
    if(event.key === "Enter") {
      const cardContainer = document.getElementById('cardNotes');  
      var cardHTML = `<div class="divnotes notes_warning">
      <button class="notesclose close-btn" onclick="closeWarning(this)">&times;</button>
        <p class="sm">` + event.currentTarget.value + `</p>
      </div>`;
      cardContainer.innerHTML += cardHTML;
      $("#txtsearch").val("");
    }              
  }
});

function closeWarning(button) {
  
  var warningDiv = button.parentNode;
  warningDiv.remove();
}

$(document).on('click', '#btnfullscreen', function (e) {  
  
  var isFullScreen_ = (e.currentTarget.classList.contains("bi-arrows-fullscreen") ? true : false);
  if(isFullScreen_) {
    openFullscreen();
    e.currentTarget.classList.remove("bi-arrows-fullscreen");
    e.currentTarget.classList.add("bi-fullscreen-exit");
  }
  else {
    closeFullscreen();
    e.currentTarget.classList.remove("bi-fullscreen-exit");
    e.currentTarget.classList.add("bi-arrows-fullscreen");    
  }    
});

function openFullscreen() {
  var elem_ = document.documentElement;
  if (elem_.requestFullscreen) {
      elem_.requestFullscreen();
  } else if (elem_.webkitRequestFullscreen) { /* Safari */
      elem_.webkitRequestFullscreen();
  } else if (elem_.msRequestFullscreen) { /* IE11 */
      elem_.msRequestFullscreen();
  }
}

function closeFullscreen() {
  if (document.exitFullscreen) {
      document.exitFullscreen();
  } else if (document.webkitExitFullscreen) { /* Safari */
      document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
      document.msExitFullscreen();
  }
}

$(document).on('click', "#btndownload", function(e) {
  var element = document.querySelector(".dashboard");
  saveCapture(element)
});

function saveCapture(element) {
  debugger

  //$("#dummy_div1").css("display", "");
  //$("#dummy_div2").css("display", "");  
  
  html2canvas(element).then(function(canvas) {
      debugger                
      
      //$("#dummy_div1").css("display", "none");
      //$("#dummy_div2").css("display", "none");


      download(canvas.toDataURL("image/png"));
  })
}

function download(url){
  debugger
  
  var a = $("<a style='display:none' id='js-downloder'>")
  .attr("href", url)
  .attr("download", "test.png")
  .appendTo("body");

  a[0].click();

  a.remove();
}    

    </script>
    <script type="text/javascript">
    Coloris({
      el: '.coloris',
      swatches: [
        '#264653',
        '#2a9d8f',
        '#e9c46a',
        '#f4a261',
        '#e76f51',
        '#d62828',
        '#023e8a',
        '#0077b6',
        '#0096c7',
        '#00b4d8',
        '#48cae4'
      ]
    });

    Coloris.setInstance('.instance1', {
      theme: 'pill',
      themeMode: 'dark',
      formatToggle: true,
      closeButton: true,
      clearButton: true,
      swatches: [
        '#067bc2',
        '#84bcda',
        '#80e377',
        '#ecc30b',
        '#f37748',
        '#d56062'
      ]
    });

    Coloris.setInstance('.instance2', { theme: 'polaroid' });

    Coloris.setInstance('.instance3', {
      theme: 'polaroid',
      swatchesOnly: true
    });

    </script>
</body>

</html>