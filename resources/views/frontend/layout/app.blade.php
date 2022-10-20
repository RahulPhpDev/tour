<html>
    <head>
        <title> @yield('title', 'Saksham Holidays is one of the growing and reputed travel agency in India.'): {{trans('app_content.app_name')}}</title>

        @include('frontend.layout.style')
        <meta charset="UTF-8">
    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


         <!-- Primary Meta Tags -->
    <meta name="title" content="Best Tour and Travel in India">
    <meta name="description" content="Sakham Holiday ">
    <meta name="keywords" content="Tour and travel, Best Tour and Travel in Uttarakhand, Best Tour and Travel in India, Best Tour and Travel in Delhi">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="sakshamholidays.com">
    <meta property="og:title" content="Sakham Holiday - Best tour operator">
    <meta property="og:description" content="Tour and travel, Best Tour and Travel in Uttarakhand, Best Tour and Travel in India, Best Tour and Travel in Delhi">
    <meta property="og:image" content="{{trans('app_content.logo_url') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="sakshamholidays.com">
    <meta property="twitter:title" content="Sakham Holiday - Best tour operator">
    <meta property="twitter:description" content="Tour and travel, Best Tour and Travel in Uttarakhand, Best Tour and Travel in India, Best Tour and Travel in Delhi">
    <meta property="twitter:image" content="{{trans('app_content.logo_url') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{trans('app_content.logo_url') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{trans('app_content.logo_url') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{trans('app_content.logo_url') }}">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10998814186"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10998814186');
</script>
    </head>
    <body>
       @include('frontend.layout.topbar')
            @if(
                optional(request()->route())->getName() === 'homepage' ||
                optional(request()->route())->getName() === 'home.about'
            )
                @include('frontend.layout.carousel')
            @endif

            @yield('content')
<footer>
        @include('frontend.layout.footer')

        @include('frontend.utils.enquiry-modal')
       <div class="whats-app-footer">
        <a href = "https://wa.me/919891161011" target = "_blank">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="80" width="80" viewBox="-93.2412 -156.2325 808.0904 937.395"><defs><linearGradient x1=".5" y1="0" x2=".5" y2="1" id="a"><stop stop-color="#20B038" offset="0%"/><stop stop-color="#60D66A" offset="100%"/></linearGradient><linearGradient x1=".5" y1="0" x2=".5" y2="1" id="b"><stop stop-color="#F9F9F9" offset="0%"/><stop stop-color="#FFF" offset="100%"/></linearGradient><linearGradient xlink:href="#a" id="f" x1="270.265" y1="1.184" x2="270.265" y2="541.56" gradientTransform="scale(.99775 1.00225)" gradientUnits="userSpaceOnUse"/><linearGradient xlink:href="#b" id="g" x1="279.952" y1=".811" x2="279.952" y2="560.571" gradientTransform="scale(.99777 1.00224)" gradientUnits="userSpaceOnUse"/><filter x="-.056" y="-.062" width="1.112" height="1.11" filterUnits="objectBoundingBox" id="c"><feGaussianBlur stdDeviation="2" in="SourceGraphic"/></filter><filter x="-.082" y="-.088" width="1.164" height="1.162" filterUnits="objectBoundingBox" id="d"><feOffset dy="-4" in="SourceAlpha" result="shadowOffsetOuter1"/><feGaussianBlur stdDeviation="12.5" in="shadowOffsetOuter1" result="shadowBlurOuter1"/><feComposite in="shadowBlurOuter1" in2="SourceAlpha" operator="out" result="shadowBlurOuter1"/><feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.21 0" in="shadowBlurOuter1"/></filter><path d="M576.337 707.516c-.018-49.17 12.795-97.167 37.15-139.475L574 423.48l147.548 38.792c40.652-22.23 86.423-33.944 133.002-33.962h.12c153.395 0 278.265 125.166 278.33 278.98.025 74.548-28.9 144.642-81.446 197.373C999 957.393 929.12 986.447 854.67 986.48c-153.42 0-278.272-125.146-278.333-278.964z" id="e"/></defs><g fill="none" fill-rule="evenodd"><g transform="matrix(1 0 0 -1 -542.696 1013.504)" fill="#000" fill-rule="nonzero" filter="url(#c)"><use filter="url(#d)" xlink:href="#e" width="100%" height="100%"/><use fill-opacity=".2" xlink:href="#e" width="100%" height="100%"/></g><path transform="matrix(1 0 0 -1 41.304 577.504)" fill-rule="nonzero" fill="url(#f)" d="M2.325 274.421c-.014-47.29 12.342-93.466 35.839-134.166L.077 1.187l142.314 37.316C181.6 17.133 225.745 5.856 270.673 5.84h.12c147.95 0 268.386 120.396 268.447 268.372.03 71.707-27.87 139.132-78.559 189.858-50.68 50.726-118.084 78.676-189.898 78.708-147.968 0-268.398-120.386-268.458-268.358"/><path transform="matrix(1 0 0 -1 31.637 586.837)" fill-rule="nonzero" fill="url(#g)" d="M2.407 283.847c-.018-48.996 12.784-96.824 37.117-138.983L.072.814l147.419 38.654c40.616-22.15 86.346-33.824 132.885-33.841h.12c153.26 0 278.02 124.724 278.085 277.994.026 74.286-28.874 144.132-81.374 196.678-52.507 52.544-122.326 81.494-196.711 81.528-153.285 0-278.028-124.704-278.09-277.98zm87.789-131.724l-5.503 8.74C61.555 197.653 49.34 240.17 49.36 283.828c.049 127.399 103.73 231.044 231.224 231.044 61.74-.025 119.765-24.09 163.409-67.763 43.639-43.67 67.653-101.726 67.635-163.469-.054-127.403-103.739-231.063-231.131-231.063h-.09c-41.482.022-82.162 11.159-117.642 32.214l-8.444 5.004L66.84 66.86z"/><path d="M242.63 186.78c-5.205-11.57-10.684-11.803-15.636-12.006-4.05-.173-8.687-.162-13.316-.162-4.632 0-12.161 1.74-18.527 8.693-6.37 6.953-24.322 23.761-24.322 57.947 0 34.19 24.901 67.222 28.372 71.862 3.474 4.634 48.07 77.028 118.694 104.88 58.696 23.146 70.64 18.542 83.38 17.384 12.74-1.158 41.11-16.805 46.9-33.03 5.791-16.223 5.791-30.128 4.054-33.035-1.738-2.896-6.37-4.633-13.319-8.108-6.95-3.475-41.11-20.287-47.48-22.603-6.37-2.316-11.003-3.474-15.635 3.482-4.633 6.95-17.94 22.596-21.996 27.23-4.053 4.643-8.106 5.222-15.056 1.747-6.949-3.485-29.328-10.815-55.876-34.485-20.656-18.416-34.6-41.16-38.656-48.116-4.053-6.95-.433-10.714 3.052-14.178 3.12-3.113 6.95-8.11 10.424-12.168 3.467-4.057 4.626-6.953 6.942-11.586 2.316-4.64 1.158-8.698-.579-12.172-1.737-3.475-15.241-37.838-21.42-51.576" fill="#FFF"/></g></svg>
        </a>
        </div>
        <script>

if(window.location.href.indexOf('/thank-you/')!=-1)
{
 gtag('event', 'conversion', {'send_to': 'AW-10998814186/xklkCIDTluYDEOqr0vwo'});
}
</script>
        <footer>
    </body>
            @include('frontend.layout.script')
            @stack('styles')
            <style>
                .whats-app-footer {
                    position: fixed;
                    width: 50px;
                    height: 50px;
                    bottom: 40px;
                    left: 15px;
                    z-index: 100;
                    
                }
            </style>
</html>
