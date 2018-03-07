@extends('layouts.common')

@section('title', config('app.name'))

@section('page-resources')
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<link rel="stylesheet" type="text/css" href="{{ mix('/css/front/front.css') }}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

    function validateAndSubmit(){

        projectSearchForm.submit();

    }

    // $.get("https://ipinfo.io", function (response) {
    //     $("#ip").html("IP: " + response.ip);
    //     $("#address").html("Location: " + response.city + ", " + response.region);
    //     $("#details").html(JSON.stringify(response, null, 4));
    //     $("#city").html(response.city);
    //     // document.getElementById('city').value = response.city;
    //     alert(response.city);
    // }, "jsonp");
</script>
<script>
/**=========
 * Projects JS
 * Created for: Voli Pty Ltd
 * Author: Filip Blazevski
 * Contact: contact@filipblazevski.com
 * Copyright (C) 2018
 * Version: 1.0
 */

/**********************************************************
 * Variables for use
 * Defines them here so
 * we can use them later
 */
var typ;
var available;
var loc;


/**********************************************************
 * RemoveSpan
 * Removes the span in the card decks to display correctly
 * To be used with other functions
 */
function RemoveSpan() {
    $(".card-deck").find("span").remove();
}

/**********************************************************
 * Update Type
 * @param type
 * Updates the Type Search on the Projects Page
 * Not final version. Code is not optimised
 */
function UpdateType(type) {
    // Counter
    available = 0;
    // Hide No Results for changing
    $("#no-results").removeClass("d-block").addClass("d-none");
    // Get Location DropDown current value
    loc = $("#LocationSelectionDropDown").text();

    // Remove Spans for responsive display
    RemoveSpan();

    // Type: All
    if (type === "All") {

        // Go through each card
        $(".card").each(function () {

            // Check If Location is specific
            if (loc !== "All Locations") {

                // Type: All | Location: Match | Visible
                if ($(this).data('location') === loc) {
                    $(this).css('visibility', 'visible');
                    $(this).css('display', 'flex');
                    $(this).after("<span></span>");
                    available++;
                } else {
                    // Type: All | Location: Doesn't Match | Hidden
                    $(this).css('visibility', 'hidden');
                    $(this).css('display', 'none');
                }
            } else {
                // Type: All | Location: All | Visible
                $(this).css('visibility', 'visible');
                $(this).css('display', 'flex');
                $(this).after("<span></span>");
                available++;
            }
        });

        // Set Dropdown to All
        $("#categorySelectionDropDown").html("All")

    } else {
        // Type: Specific

        // Go through each card
        $(".card").each(function () {
            // Check if Type Matches
            if ($(this).data('type') === (type)) {

                // Check If Location is specific
                if (loc !== "All Locations") {

                    // Type : Match | Location : Match | Shown
                    if ($(this).data('location') === loc) {
                        $(this).css('visibility', 'visible');
                        $(this).css('display', 'flex');
                        $(this).after("<span></span>");
                        available++;
                    } else {
                        // Type: Match | Location: Doesn't Match | Hidden
                        $(this).css('visibility', 'hidden');
                        $(this).css('display', 'none');
                    }
                } else {

                    // Type: Match | Location: All | Shown
                    $(this).css('visibility', 'visible');
                    $(this).css('display', 'flex');
                    $(this).after("<span></span>");
                    available++;
                }
            } else {
                // Type: Doesn't Match | Location: Doesn't Matter | Hidden
                $(this).css('visibility', 'hidden');
                $(this).css('display', 'none');
            }
        });

        // Set Dropdown to selected item
        $("#categorySelectionDropDown").html(type)
    }

    // If no results Show no results
    if (available === 0) {
        $("#no-results").removeClass("d-none").addClass("d-block");
    }
}

/**********************************************************
 * UpdateLocation
 * @param type
 * @param location
 * Updates the locations Search on the Projects Page
 * Not Final Version. Code not optimised
 */
function UpdateLocation(location) {
        // Counter
        available = 0;
        // Hide No Results for changing
        $("#no-results").removeClass("d-block").addClass("d-none");
        // Get Type Current Drop Down selection
        typ = $("#categorySelectionDropDown").text();

        // Remove Spans for responsive display
        RemoveSpan();

        // Location: All
        if (location === "All") {

            // Go through each card
            $( ".card" ).each(function() {

                // Check if Type specific
                if (typ !== "All") {

                    // Location: All | Type: Match | Shown
                    if ($(this).data('type') === typ) {
                        $(this).css('visibility', 'visible');
                        $(this).css('display', 'flex');
                        $(this).after("<span></span>");
                        available++;
                    } else {
                        // Location: All | Type: Doesn't Match | Hidden
                        $(this).css('visibility','hidden');
                        $( this ).css('display','none');
                    }
                } else {
                    // Location: All | Type: All | Shown
                    $(this).css('visibility','visible');
                    $( this ).css('display','flex');
                    $( this ).after("<span></span>");
                    available++;
                }
            });

            // Set Dropdown to all
            $("#LocationSelectionDropDown").html("All Locations")
        } else {
            // Location Specific

            // Go through each card
            $( ".card" ).each(function() {
                if ($(this).data('location') === (location)) {

                        // Check if Type is specific
                        if (typ !== "All") {

                            // Location: Match | Type: Match | Shown
                            if ($(this).data('type') === typ) {
                                $(this).css('visibility', 'visible');
                                $(this).css('display', 'flex');
                                $(this).after("<span></span>");
                                available++;
                            } else {
                                // Location : Match | Type : Doesn't Match | Hidden
                                $(this).css('visibility','hidden');
                                $( this ).css('display','none');
                            }
                        } else {
                            // Location : Match | Type: All | Shown
                            $(this).css('visibility','visible');
                            $( this ).css('display','flex');
                            $( this ).after("<span></span>");
                            available++;
                        }
                } else {
                    // Location: Doesn't Match | Type: Doesn't Matter | Hidden
                    $(this).css('visibility','hidden');
                    $( this ).css('display','none');
                }
            });

            // Set Dropdown to selected item
            $("#LocationSelectionDropDown").html(location)
        }

    // If no results Show no results
    if (available === 0) {
        $("#no-results").removeClass("d-none").addClass("d-block");
    }
}
</script>
<style type="text/css">
    .project-search-text{
        position: absolute;
        border-radius:5px;
        border-width: 2px;
        padding: 5px;
        font-size: 14px;
        color: #a6a6a6;
    }
    #search-interest{
        width:80%;
        right: 5%;
    }
    #search-area{
        width:40%;
    }
    #search-project-btn{
        margin-left: 45%;
    }
    #search-message{
        margin-top: 10px;
        text-align: center;
    }
    div.row.project-search{
        margin-top: 5%;
    }

    div.fh5co-blog-style-1.project-search{
        padding: 4em 0;
    }

    div.col-md-3.more-search{
        width: 20%;
    }
    .row.p-b.more-search{
        padding-bottom: 10px;
    }

    #search-result-hr{
        margin-top: 10px;
        margin-bottom: 20px;
    }
    #interest-select{
        height: 40px;
        width: 260px;
    }
</style>
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
/*
.main-font {
    font-family: 'Lato', sans-serif;
}

.body-font {
    font-family: 'Open Sans', sans-serif;
    font-size: medium;
}

.body-font-normal {
    font-family: 'Open Sans', sans-serif;
    font-size: large;
}

.body-font-large {
    font-family: 'Open Sans', sans-serif;
    font-size: large;
}*/

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

<div class="fh5co-content-style-6">
    <div class="container-fluid">

        <div class="row secondary-white clearfix" id="page-title-banner">
            <div class="col-12 col-md-3 float-left align-self-end main-font font-weight-bold">
                <h2>Projects</h2>
            </div>
            <div class="col-12 col-md-8 float-right align-self-center body-font text-center text-md-right">
                <p>Our community create and run their own volunteering projects.<br>If you can't see a project you'd like to join, create a new one!</p>
            </div>
        </div>

        <!--<div class="row project-search">
            <div class="col-12 text-center">
                <h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Find project!</h2>
                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Our community of tribes create and run their <b>own</b> volunteering projects and activities. If you can’t see a project that you’d like to join; <a href="{{ route('front.gettingStarted') }}">create a new one!</a></p>
                {{-- <p>Search more tribes out there!</p> --}}
            </div>
        </div>-->

        <!-- Searching Functionality -->
        <div class="row bg-white body-font" id="search-content-row">
            <div class="col">
                <div class="row">
                    <div class="col-12 col-lg-8" id="productPageSearch">
                        <div class="form-group justify-content-center">
                            <div class="input-group mx-auto d-inline" id="categorySelectionInput">
                                <div class="input-group-prepend">
                                    <div class="dropdown">
                                        <button class="btn btn-outline-primary dropdown-toggle dropdown-pill font-weight-bold mx-auto pb-a" type="button" id="categorySelectionDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="TypeSelectionDropDown">
                                            <a class="dropdown-item" href="javascript:UpdateType('All')">All</a>
                                            @foreach($interests as $idx=>$interest)
                                                    <a class="dropdown-item" href="javascript:UpdateType('{{$interest}}')">{{$interest}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="d-block d-sm-none"></div>
                                <span class="input-group-text no-bg-outline h4">Projects in</span>
                                <div class="d-block d-sm-none"></div>
                                <div class="input-group-append">
                                    <div class="dropdown">
                                        <button class="btn btn-link dropdown-toggle no-underline" type="button" id="LocationSelectionDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Locations</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="javascript:UpdateLocation('All')">All Locations</a>
                                            @foreach ($projects as $idx=>$project)
                                                    <a class="dropdown-item" href="javascript:UpdateLocation('{{ addslashes($project->location) }}')">{{$project->location}}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4" id="productCreateProject">
                        <a href="{{ route('front.gettingStarted') }}" class="btn btn-primary dropdown-pill-2 text-white">Create Your Own Project</a>
                    </div>
                </div>
            </div>
            <div class="col-12 d-none" id="no-results">
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">No Results!</h4>
                    <p>We couldn't find anything that matched your criteria! Please try searching something different or <a href="{{ route('front.projectSearchPage') }}" class="alert-link">Try Again</a></p>
                    <hr>
                    <p class="mb-0">Don't forget you can create your own projects too! <a class="alert-link" href="{{ route('front.gettingStarted') }}">Create your project here</a></p>
                </div>
            </div>
        </div>
        <!-- /. Searching Functionality -->

        <!-- Main Content -->
        <div class="row bg-white body-font" id="main-content-row">
            <div class="col">
                <hr class="d-block d-lg-none"/>
                <div class="card-deck">
                @foreach ($projects as $idx=>$project)
<!--            @if(($idx + 1)%4 === 1) <div class="row"> @endif -->
                <h1>
                <div class="card" data-location="{{$project->location}}" data-type="{{$project->topic}}">
                    <a href="{{route('front.viewProject', ['projectId' => $project->id]) }}" target="_self">
                        <img class="card-img-top img-fluid" alt="100%x180" src="/images/img_same_dimension_1.jpg" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{$project->title}}</h5>
                        <p class="card-text">{{ str_limit($project->description, 200) }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-secondary-red">
                            {{$project->created_by}}
                            <br/>
                            {{$project->location}}
                            <br/>
                            {{$project->updated_at}}
                        </small>
                    </div>
                </div>
                <span></span>
                @endforeach

                <!-- OLD CODE - WAS ABOVE @ endforeach
                  <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                      <a href="#" class="link-block">
                          <figure><img src="/images/img_same_dimension_1.jpg" alt="Image" class="img-responsive img-rounded"></figure>
                          <h3>{{$project->title}}</h3>
                          <p>{{ str_limit($project->description, 200) }}</p>
                          <p><a href="{{route('front.viewProject', ['projectId' => $project->id]) }}" class="btn btn-primary btn-sm">Learn More</a></p>
                      </a>
                      @if(($idx + 1)%4 === 0)
                        </div>
                      @endif -->

            </div>
        </div>
      </div>
</div>

@endsection
