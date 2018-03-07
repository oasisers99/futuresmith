@extends('layouts.common')

@section('title', config('app.name'))

@section('page-resources')
<style>
/**
 *==========================
 * Color Scheme CSS
 * Created for: Voli Pty Ltd
 * Author: Filip Blazevski
 * Contact: contact@filipblazevski.com
 * Copyright (C) 2018
 * Version: 1.0
 *==========================
 */

/***********************
 * Theme Fonts
 ***********************/

.main-font {
    font-family: 'Lato', sans-serif;;
}

.body-font {
    font-family: 'Open Sans', sans-serif;
    font-size: small;
}

.body-font-normal {
    font-family: 'Open Sans', sans-serif;
    font-size: medium;
}

.body-font-large {
    font-family: 'Open Sans', sans-serif;
    font-size: large;
}

/***********************
    Theme Background Colors
 ***********************/

.primary-green {
    background-color: rgb(29,201,176);
}

.primary-blue {
    background-color: rgb(46,124,254);
}

.secondary-white {
    background-color: rgb(242,242,242);
}

.secondary-black {
    background-color: rgb(36,41,36);
}

.secondary-red {
    background-color: rgb(237,71,105);
}

/***********************
 * Theme Text Colors
 ***********************/

.text-primary-green {
    color: rgb(29,201,176);
}

.text-primary-blue {
    color: rgb(46,124,254);
}

.text-secondary-white {
    color: rgb(242,242,242);
}

.text-secondary-black {
    color: rgb(36,41,36);
}

.text-secondary-red {
    color: rgb(237,71,105);
}


/***********************
 * Page Banner CSS
 * Responsible for Title / Navigation
 ***********************/
#page-title-banner {
    /*height: 80px;*/
    line-height: 80px;
}

#title-text {
    height: 60px !important;
    line-height: 60px !important;
    vertical-align: middle;
    margin-right: 10px;
}

#title-nav {
    height: 50px !important;
    line-height: 50px;
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important
}

#nav-col {
    height: 50px !important;
}


#page-title-banner > div > h2 {
    height: 80px;
    line-height:80px;
    vertical-align: middle;
    text-align: center;
}

#page-title-banner > div  {
    line-height: normal;
}

#search-content-row {
    padding: 2% 10% 0% 10%;
}

/***********************
 * Main Content CSS
 * Layouts Main Content
 ***********************/

#main-content-row {
    padding: 0 10% 2% 10%;
    margin-bottom: 200px;
}


/***********************
 * Projects Specific CSS
 ***********************/

#LocationSelectionDropDown {
    padding-left: 10px;
}

.dropdown-pill {
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    min-width: 40px;
    margin-right: 10px;
}

.dropdown-pill:hover {
    background-color: rgb(46,124,254);
}

.dropdown-pill-2 {
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    min-width: 40px;
    margin-right: 10px;
}

.dropdown-pill-2:hover {
    background-color: #0056b3;
    outline-color: #0056b3;
}

.no-underline {
    text-decoration: none;
}

.no-underline:hover {
    text-decoration: underline;
}

.no-bg-outline {
     background-color: transparent;
     border: none;
}

#productCreateProject {
    text-align: center;
}

#productCreateProject > a {
    padding-left: 20px;
    padding-right: 20px;
}

#categorySelectionInput {
    width: 300px;
}

/*======================
 * MEDIA QUERIES
 ======================*/

/***********************
 * Tablet+             *
 * Min Width: 768      *
 ***********************/

@media screen and (min-width: 768px) {

    /***********************
     * Title Navigation
     * Offset Right Tablet+
     ***********************/
    #title-nav {
        margin-right: 25%;
        -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important
    }

    /***********************
     * Page Title
     ***********************/
    #page-title-banner > div > h2 {
        margin-left: 0;
        text-align: center;
    }
}


/***********************
 * Desktop +           *
 * Min Width: 992      *
 ***********************/

@media screen and (min-width: 992px) {
    #productCreateProject {
        text-align: right;
    }

    #categorySelectionInput {
        width: 100%;
    }
}


/***********************
 * Overrides
 * Overrides Bootstrap 4
 * We didn't want to create
 * our own custom Bootstrap.
 * This will do for now
 ***********************/

.nav-link {
    color: rgb(36,41,36);
}

.nav-link:hover {
    color: rgb(46,124,254);
}

.nav-link.active {
    color: rgb(46,124,254);
    text-decoration: underline;
    text-decoration-color: rgb(46,124,254);
    text-decoration-style: solid;
}

.bg-primary {
    background-color: rgb(46,124,254);
    border-color: rgb(46,124,254);
}

.bg-primary-outline {
    outline-color: rgb(46,124,254);
    border-color: rgb(46,124,254);
}

.btn-primary {
    background-color: rgb(46,124,254);
    border-color: rgb(46,124,254);
}

.btn-primary-outline {
    outline-color: rgb(46,124,254);
    border-color: rgb(46,124,254);
}

/***********************
 * CARD RESPONSIVENESS
 * LINK: https://www.codeply.com/go/Zu7Cc9CD9Y/bootstrap-4-responsive-card-deck-(css)
 * Thanks Skelly <3
 ***********************/

/* responsively enforce wrapping */
.card-deck span {
    display: none;
}

/* lg+ */
@media (min-width:1200px){
    .card-deck span:nth-of-type(3n) {
        display: block;
        width: 100%;
        margin: 5px 0;
    }

}
/* md to lg */
@media (min-width:992px) and (max-width: 1199px) {
    .card-deck span:nth-of-type(2n) {
        display: block;
        width: 100%;
        margin: 5px 0;
    }

}

/* sm to md */
@media (min-width:768px) and (max-width: 991px) {
    .card-deck span:nth-of-type(2n) {
        display: block;
        width: 100%;
        margin: 5px 0;
    }
}

/* xs to sm */
@media (min-width: 576px) and (max-width: 767px) {
    .card-deck span:nth-of-type(1n) {
        display: block;
        width: 100%;
        margin: 5px 0;
    }
}

/************************
 * Extra Code for Card Deck
 * Makes Images look nicer
 * Does not stretch Images
 ***********************/
.card-img-top {
    object-fit: cover;
    align-content: center;
    width: 100% !important;
    height: auto !important;
    min-height: 180px;
    overflow-y: hidden;
}


/***********************
 * Card Deck
 * Overrides links
 * Provides links for images only
 ***********************/
.card > a {
    color: rgb(36,41,36);
}

.card > a:hover {
    text-decoration: none;
}
</style>
@endsection

@section('body-content')

<!--
*==========================
* Projects Page
* Created for: Voli Pty Ltd
* Author: Filip Blazevski
* Contact: contact@filipblazevski.com
* Copyright (C) 2018
* Version: 1.0
*==========================
-->
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Used in IDE to help use of Bootstrap Classes -->
    <!--<link rel="stylesheet" href="bootstrap.min.css"/>-->
    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Open+Sans:300,400" rel="stylesheet" media="all" type="text/css">
    <!-- Color Scheme CSS -->
    <link rel="stylesheet" media="all" href="color-scheme.css" type="text/css"/>
    <!-- Title -->
    <title>Projects | Voli</title>
</head>
<body class="secondary-white">
    <div class="container main-font">
        <!-- Logo and Nav -->
        <div class="row text-uppercase main-font">
            <!-- Main Logo/Title -->
            <div class="col-12 col-md-3 primary-green">
                <a href="index.html">
                    <h1 class="text-right text-white font-weight-bold no-underline" id="title-text">Voli</h1>
                </a>
            </div>
            <!-- /. Main Logo/Title -->
            <!-- Navigation -->
            <div class="col-12 col-md-9 font-weight-bold text-capitalize bg-white" id="nav-col">
                <ul class="nav justify-content-end" id="title-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:alert('Page doesn\'t exist yet!')">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:alert('Page doesn\'t exist yet!')">Tribes</a>
                    </li>
                </ul>
            </div>
            <!-- /. Navigation -->
        </div>
        <!-- /. Logo and Nav -->
        <!-- Projects Page -->
        <div class="row secondary-white clearfix" id="page-title-banner">
            <div class="col-12 col-md-3 float-left align-self-end main-font font-weight-bold">
                <h2>Projects</h2>
            </div>
            <div class="col-12 col-md-8 float-right align-self-center body-font text-center text-md-right">
                <p>Our community create and run their own volunteering projects.<br/>If you can't see a project you'd like to join, create a new one!</p>
            </div>
        </div>
        <!-- /. Projects Page -->
        <!-- Searching Functionality -->
        <div class="row bg-white body-font" id="search-content-row">
            <div class="col">
                <div class="row">
                    <div class="col-12 col-lg-8" id="productPageSearch">
                        <div class="form-group justify-content-center">
                            <div class="input-group mx-auto" id="categorySelectionInput">
                                <div class="input-group-prepend">
                                    <div class="dropdown">
                                        <button class="btn btn-outline-primary dropdown-toggle dropdown-pill font-weight-bold mx-auto pb-a" type="button" id="categorySelectionDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="TypeSelectionDropDown">
                                            <a class="dropdown-item" href="javascript:UpdateType('All')">All</a>
                                            <a class="dropdown-item" href="javascript:UpdateType('Technology')">Technology</a>
                                            <a class="dropdown-item" href="javascript:UpdateType('Arts')">Arts</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-block d-sm-none"></div>
                                <span class="input-group-text no-bg-outline">Projects in</span>
                                <div class="d-block d-sm-none"></div>
                                <div class="input-group-append">
                                    <div class="dropdown">
                                        <button class="btn btn-link dropdown-toggle no-underline" type="button" id="LocationSelectionDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Locations</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="javascript:UpdateLocation('All')">All Locations</a>
                                            <a class="dropdown-item" href="javascript:UpdateLocation('Melbourne')">Melbourne</a>
                                            <a class="dropdown-item" href="javascript:UpdateLocation('North Melbourne')">North Melbourne</a>
                                            <a class="dropdown-item" href="javascript:UpdateLocation('Richmond')">Richmond</a>
                                            <a class="dropdown-item" href="javascript:UpdateLocation('Hawthorn')">Hawthorn</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4" id="productCreateProject">
                        <a class="btn btn-primary dropdown-pill-2 text-white" data-toggle="modal" data-target=".bd-createproject-model-lg">Create Your Own Project</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. Searching Functionality -->
        <!-- Main Content -->
        <div class="row bg-white body-font" id="main-content-row">
            <div class="col">
                <hr class="d-block d-lg-none"/>
                <div class="card-deck">
                    <div class="card" data-location="Hawthorn" data-type="Technology">
                        <a href="https://google.com" target="_self">
                            <img class="card-img-top img-fluid responsive" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22365%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20365%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1615b41e221%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1615b41e221%22%3E%3Crect%20width%3D%22365%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22136.453125%22%20y%3D%2298.2546875%22%3E365x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">H T</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-secondary-red">
                                20 Volunteers from 3 Tribes
                                <br/>
                                Hawthorn
                                <br/>
                                2 Nov 17 - 2 Feb 2018 (ongoing)
                            </small>
                        </div>
                    </div>
                    <span></span>
                    <div class="card" data-location="Hawthorn" data-type="Arts">
                        <a href="https://google.com" target="_self">
                            <a href="https://google.com" target="_self">
                            <img class="card-img-top img-fluid" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22365%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20365%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1615b41e221%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1615b41e221%22%3E%3Crect%20width%3D%22365%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22136.453125%22%20y%3D%2298.2546875%22%3E365x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">H A</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-secondary-red">
                                20 Volunteers from 3 Tribes
                                <br/>
                                Hawthorn
                                <br/>
                                2 Nov 17 - 2 Feb 2018 (ongoing)
                            </small>
                        </div>
                    </div>
                    <span></span>
                    <div class="card" data-location="Melbourne" data-type="Technology">
                        <a href="https://google.com" target="_self">
                            <img class="card-img-top img-fluid" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22365%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20365%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1615b41e221%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1615b41e221%22%3E%3Crect%20width%3D%22365%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22136.453125%22%20y%3D%2298.2546875%22%3E365x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">M T</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-secondary-red">
                                20 Volunteers from 3 Tribes
                                <br/>
                                Melbourne
                                <br/>
                                2 Nov 17 - 2 Feb 2018 (ongoing)
                            </small>
                        </div>
                    </div>
                    <span></span>
                    <div class="card" data-location="Richmond" data-type="Arts">
                        <a href="https://google.com" target="_self">
                            <img class="card-img-top img-fluid" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22365%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20365%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1615b41e221%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1615b41e221%22%3E%3Crect%20width%3D%22365%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22136.453125%22%20y%3D%2298.2546875%22%3E365x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">R A</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-secondary-red">
                                20 Volunteers from 3 Tribes
                                <br/>
                                Richmond
                                <br/>
                                2 Nov 17 - 2 Feb 2018 (ongoing)
                            </small>
                        </div>
                    </div>
                    <span></span>
                    <div class="card">
                        <a href="https://google.com" target="_self">
                            <img class="card-img-top img-fluid" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22365%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20365%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1615b41e221%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1615b41e221%22%3E%3Crect%20width%3D%22365%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22136.453125%22%20y%3D%2298.2546875%22%3E365x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">No Link</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-secondary-red">
                                20 Volunteers from 3 Tribes
                                <br/>
                                No Location
                                <br/>
                                2 Nov 17 - 2 Feb 2018 (ongoing)
                            </small>
                        </div>
                    </div>
                    <span></span>
                    <div class="card">
                        <a href="https://google.com" target="_self">
                            <img class="card-img-top img-fluid" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22365%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20365%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1615b41e221%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1615b41e221%22%3E%3Crect%20width%3D%22365%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22136.453125%22%20y%3D%2298.2546875%22%3E365x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">No Link</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-secondary-red">
                                20 Volunteers from 3 Tribes
                                <br/>
                                No Location
                                <br/>
                                2 Nov 17 - 2 Feb 2018 (ongoing)
                            </small>
                        </div>
                    </div>
                    <span></span>
                    <div class="card" data-location="North Melbourne" data-type="Arts">
                        <a href="https://google.com" target="_self">
                            <img class="card-img-top img-fluid" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22365%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20365%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1615b41e221%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1615b41e221%22%3E%3Crect%20width%3D%22365%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22136.453125%22%20y%3D%2298.2546875%22%3E365x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">NM A</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-secondary-red">
                                20 Volunteers from 3 Tribes
                                <br/>
                                North Melbourne
                                <br/>
                                2 Nov 17 - 2 Feb 2018 (ongoing)
                            </small>
                        </div>
                    </div>
                    <span></span>
                    <div class="card" data-location="North Melbourne" data-type="Technology">
                        <a href="https://google.com" target="_self">
                            <img class="card-img-top img-fluid" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22365%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20365%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1615b41e221%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1615b41e221%22%3E%3Crect%20width%3D%22365%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22136.453125%22%20y%3D%2298.2546875%22%3E365x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">NM T</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-secondary-red">
                                20 Volunteers from 3 Tribes
                                <br/>
                                North Melbourne
                                <br/>
                                2 Nov 17 - 2 Feb 2018 (ongoing)
                            </small>
                        </div>
                    </div>
                    <span></span>
                    <div class="card" data-location="North Melbourne" data-type="Arts">
                        <a href="https://google.com" target="_self">
                            <img class="card-img-top img-fluid" data-src="holder.js/100px180/" alt="100%x180" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22365%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20365%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1615b41e221%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A18pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1615b41e221%22%3E%3Crect%20width%3D%22365%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22136.453125%22%20y%3D%2298.2546875%22%3E365x180%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">NM A</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-secondary-red">
                                20 Volunteers from 3 Tribes
                                <br/>
                                North Melbourne
                                <br/>
                                2 Nov 17 - 2 Feb 2018 (ongoing)
                            </small>
                        </div>
                    </div>
                </div>
                <div class="d-none" id="no-results">
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">No Results!</h4>
                        <p>We couldn't find anything that matched your criteria! Please try searching something different or <a href="index.html" class="alert-link">Try Again</a></p>
                        <hr>
                        <p class="mb-0">Don't forget you can create your own projects too! <a class="alert-link" href="#" data-toggle="modal" data-target=".bd-createproject-model-lg">Create your project here</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. Main Content -->
        <div class="row">
            <div class="col">
                <!-- Model Create New Project -->
                <div class="modal fade bd-createproject-model-lg" tabindex="-1" role="dialog" aria-labelledby="createProjectModal" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="CreateProjectLabel">Create a new project!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h2>Coming Soon!</h2>
                                <p>Would we move to a new page? Or maybe a model like this to create a new project?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. Model Create New Project -->
            </div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Custom Scripts -->
    <!-- Projects Script -->
    <script src="projects.js" type="text/javascript"></script>
</body>
</html>

@endsection
