<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8"/>

    <script>

        function getMobileOperatingSystem() {

            var userAgent = navigator.userAgent || navigator.vendor || window.opera;


            // Windows Phone must come first because its UA also contains "Android"
            if (/windows phone/i.test(userAgent)) {
                return "Windows Phone";
            }

            if (/android/i.test(userAgent)) {
                return "Android"
            }


            // iOS detection from: http://stackoverflow.com/a/9039885/177710

            if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
                return "iOS";
            }

            return "unknown";

        }
    </script>

    <script>

        function DetectAndServe() {

            let os = getMobileOperatingSystem();

            if (os == "Android") {

                window.location.href = "https://play.google.com/store/apps/details?id=jozkar.mladez";

            }

            else if (os == "iOS") {

                window.location.href = "https://apps.apple.com/cz/app/zp%C4%9Bvn%C3%ADk-pro-scholy/id1475375453?l=cs";
            }

            else {

                //window.location.href = "https://zpevnik.proscholy.cz";
            }

        }
    </script>

    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
</head>

<body onload="DetectAndServe()">
    <style>
        body {
            background:  #272727;

            font-family: "Segoe UI", sans-serif;

            color:       white;
        }
    </style>

    <div class="container mt-5">
        <h1>Mobilní aplikace zpěvníku</h1>

        <a href="https://play.google.com/store/apps/details?id=jozkar.mladez">Android aplikace na Google Play</a></br></br>
        <a href="https://apps.apple.com/cz/app/zp%C4%9Bvn%C3%ADk-pro-scholy/id1475375453?l=cs">iOS aplikace na AppStore</a>
    </div>

</body>

</html>

<?php

//header("location: https://play.google.com/store/apps/details?id=jozkar.mladez");
