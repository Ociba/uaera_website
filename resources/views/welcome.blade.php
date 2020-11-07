<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="images/loho.jpg" href="{{asset('images/loho.jpg')}}">
    <title img src="{{asset('images/loho.jpg')}}" style="width:50px; height:50px;" alt="">UAERA-curbing unemployment</title>

    @include('frontlayouts.css')
</head>
<body class="home page-template-default page page-id-2039 gdlr-core-body woocommerce-no-js tribe-no-js kingster-body kingster-body-front kingster-full  kingster-with-sticky-navigation  kingster-blockquote-style-1 gdlr-core-link-to-lightbox">
    <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/8653923.js"></script>
<!-- End of HubSpot Embed Code -->
<div id="fb-root"></div>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/8653923.js"></script>
<!-- End of HubSpot Embed Code -->
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=174468550314600&autoLogAppEvents=1" nonce="RtPqCkj5"></script>
    @include('frontlayouts.menu')
    <div class="kingster-body-outer-wrapper ">
        <div class="kingster-body-wrapper clearfix  kingster-with-frame">
            {{--@include('frontlayouts.topbar')--}}
            @include('frontlayouts.header')
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    @include('frontlayouts.slider')
                    @include('frontlayouts.vision')
                    @include('frontlayouts.count')
                    @include('frontlayouts.video')
                    @include('frontlayouts.about')
                    @include('frontlayouts.social_media')
                    @include('frontlayouts.events')
                </div>
            </div>
            @include('frontlayouts.footer')
            <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        </div>
    </div>
	@include('frontlayouts.javascript')
</body>
</html>
