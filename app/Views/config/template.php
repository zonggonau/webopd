<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PAPUAHOSTER - Hosting, Domain, Cloud VPS">
    <meta name="keywords" content="Apps, Software, technology, landing page, business, responsive, multipage, corporate, hosting, vps, cloud, aws, porta berta, web berita, ">
    <meta name="author" content="Coderspoint">

    <!-- Site title -->
    <title>TITLE</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Plugin Css -->
    <link href="<?= base_url('assets'); ?>/css/plugin.css" rel="stylesheet">
    <link href="<?= base_url('assets'); ?>/css/pemda.css" rel="stylesheet">

    <!-- Site css -->
    <link href="<?= base_url('assets'); ?>/css/style.css" rel="stylesheet">

    <style>
        .accordion {
            /* background-color: #eee; */
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }

        .as-counter {
            display: flex;
            margin-bottom: 3rem;
            text-align: center;
        }

        .as-counter__wrapper {
            display: table;
            text-align: center;
        }

        .as-counter__item {
            background-color: #444;
            border-radius: 8px;
            color: #29384e;
            font-family: NunitoSansBold, sans-serif;
            font-size: clamp(3rem, 5vw, 2rem);
            height: 70px;
            margin: .4rem;
            padding: 12px 10px;
            width: 70px;
        }

        .as-counter__time {
            color: #fff;
            display: inline-flex;
            font-size: clamp(1.5rem, 5vw, .875rem);
            letter-spacing: .02em;
            line-height: 0 .5rem;
            margin: 0 .5rem;
        }

        .as-counter__colon {
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            margin-top: -20px;
            padding: 0 .5rem;
        }
    </style>

</head>

<body>

    <!-- Preloader starts-->
    <div id="preloader"></div>
    <!-- Preloader ends -->


    <?= $this->include('config/navbar'); ?>
    <?= $this->renderSection('main'); ?>
    <?= $this->include('config/footer'); ?>




    <!-- Latest jQuery -->
    <script src="<?= base_url('assets'); ?>/js/jquery.min.js"></script>

    <!-- Plugin js -->
    <script src="<?= base_url('assets'); ?>/js/plugin.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script> -->

    <!-- Main js-->
    <script src="<?= base_url('assets'); ?>/js/main_script.js"></script>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>

    <!-- Timecount untuk unlimited hosting  -->
    <script>
        var dt = "";
        var now = new Date();
        var dateNows = now.getFullYear() + '-' + (now.getMonth() + 1) + '-' + now.getDate() + ' 23:59:00';

        if (dt) {
            dt = "";
        } else {
            dt = `${dateNows}`;
        }

        var dateNow = now.toLocaleDateString('en-us', {
            timeZone: 'Asia/Jayapura'
        });
        dateNow = dateNow.split('/');
        var dateString = dateNow[2] + '/' + dateNow[0] + '/' + dateNow[1] + ' ' + dt.split(' ')[1];
        var countDownDate = new Date(dateString);
        countDownDate.setMinutes(countDownDate.getMinutes() + 1);

        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate.getTime() - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (days <= 0) {
                days = '00';
            } else if (days.length == 1) {
                days = `0${days}`
            }

            if (hours <= 0) {
                hours = '00';
            } else if (String(hours).length == 1) {
                hours = `0${hours}`
            }

            if (minutes <= 0) {
                minutes = '00';
            } else if (String(minutes).length == 1) {
                minutes = `0${minutes}`
            }

            if (seconds <= 0) {
                seconds = '00';
            } else if (String(seconds).length == 1) {
                seconds = `0${seconds}`
            }

            $('#days').html(days);
            $('#hours').html(hours);
            $('#minutes').html(minutes);
            $('#seconds').html(seconds);

            if (distance <= 0 || isNaN(distance)) {
                clearInterval(x);
                $('.as-counter').css("display", "none");
                $('.as-hero__button').css("margin-top", "0");
            }
        }, 1000);
    </script>

    <!-- Timecount untuk vps  -->
    <script>
        var dt = "";
        var now = new Date();
        var dateNows = now.getFullYear() + '-' + (now.getMonth() + 1) + '-' + now.getDate() + ' 23:59:00';

        if (dt) {
            dt = "";
        } else {
            dt = `${dateNows}`;
        }

        var dateNow = now.toLocaleDateString('en-us', {
            timeZone: 'Asia/Jayapura'
        });
        dateNow = dateNow.split('/');
        var dateString = dateNow[2] + '/' + dateNow[0] + '/' + dateNow[1] + ' ' + dt.split(' ')[1];
        var countDownDate = new Date(dateString);
        countDownDate.setMinutes(countDownDate.getMinutes() + 1);

        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate.getTime() - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (days <= 0) {
                days = '00';
            } else if (days.length == 1) {
                days = `0${days}`
            }

            if (hours <= 0) {
                hours = '00';
            } else if (String(hours).length == 1) {
                hours = `0${hours}`
            }

            if (minutes <= 0) {
                minutes = '00';
            } else if (String(minutes).length == 1) {
                minutes = `0${minutes}`
            }

            if (seconds <= 0) {
                seconds = '00';
            } else if (String(seconds).length == 1) {
                seconds = `0${seconds}`
            }

            $('#daysv').html(days);
            $('#hoursv').html(hours);
            $('#minutesv').html(minutes);
            $('#secondsv').html(seconds);

            if (distance <= 0 || isNaN(distance)) {
                clearInterval(x);
                $('.as-counter').css("display", "none");
                $('.as-hero__button').css("margin-top", "0");
            }
        }, 1000);
    </script>
</body>

</html>