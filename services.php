<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <style>
        * {
            font-family: sans-serif;
        }

        .maincontainer {
            position: absolute;
            width: 100%;
            height: 90vh;
            background-color: brown;
            margin-top: 10vh;
            text-align: center;
            color: white;
        }

        .maincontainer img {
            width: 100%;
            height: 90vh;
            background-repeat: no-repeat;
            object-fit: cover;
            background-size: contain;
        }

        .innercontainertext {
            position: absolute;
            width: 80%;
            height: 50vh;
            background-image: linear-gradient(blue, #333);
            margin-left: 20vh;
            margin-top: 20vh;
            opacity: 0.8;
            border-radius: 10px;
            box-shadow: 5px 5px 5px 5px white;

        }

        .innercontainertext:hover {

            box-shadow: 7px 7px 7px 7px green;
            transition: 1s ease-in-out;

        }

        .innercontainertext h1 {

            font-size: 10vh;

        }

        .installationdiv {

            position: absolute;
            width: 100%;
            height: 80vh;
            background-image: linear-gradient(blue, white);
            margin-top: 100vh;
            box-shadow: 7px 7px 7px 7px #333;
            display: flex;


        }

        .maintenancerepair {

            position: absolute;
            width: 100%;
            height: 80vh;
            background-image: linear-gradient(blue, white);
            margin-top: 180vh;
            box-shadow: 7px 7px 7px 7px #333;
            display: flex;


        }

        .innerinstalldiv {

            background-image: linear-gradient(white, blue);
            position: relative;
            width: 40%;
            height: 60vh;
            margin-top: 10vh;
            margin-left: 16vh;
            text-align: center;
            border-radius: 40px;
            box-shadow: 4px 4px 4px 4px #333;

        }

        .innerinstalldiv h1 {
            font-size: 40px;

        }

        .innerinstalldiv p {
            font-size: 30px;

        }

        .innerinstalldiv button {
            font-size: 30px;
            border-style: none;
            border-radius: 8px;
            background-color: rgb(76, 175, 80);
            box-shadow: 2px 2px 2px 2px white;
            color: white;
        }

        .innerinstalldiv button:hover {
            font-size: 30px;

            box-shadow: 3px 3px 3px 3px yellow;
            transition: 1s ease-in-out;
            color: black;

        }



        .innerinstalldiv img {
            width: 100%;
            height: 100%;
            border-radius: 40px;
        }

        .innerinstalldiv:hover {

            background-image: linear-gradient(blue, white);
            box-shadow: 7px 7px 7px 7px green;
            transition: 1s ease-in-out;
            color: white;
        }

        .workingcardcontainer {
            position: absolute;
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(blue, white);
            margin-top: 260vh;
            box-shadow: 4px 4px 4px 4px #333;
            display: flex;
            flex-wrap: wrap;
        }



        .innercarddiv {
            background-image: linear-gradient(white, blue);
            position: relative;
            width: 25%;
            height: 35vh;
            margin-top: 10vh;
            margin-left: 16vh;
            text-align: center;
            border-radius: 20px;
            box-shadow: 4px 4px 4px 4px #333;
        }

        .innercarddiv:hover {
            background-image: linear-gradient(blue, white);
            box-shadow: 4px 4px 4px 4px green;
            transition: 1s ease-in-out;
            color: white;
        }

        .innercarddiv button {
            padding: 10px;
            border-radius: 5px;
            border-style: none;
            margin-top: 2px;
            font-size: 18px;
            font-weight: bold;
            background-color: green;
            color: white;
        }

        .mostinnercarddiv {
            width: 100%;
            height: 28vh;
            border-radius: 20px;

        }

        .footerdivofservice {
            position: absolute;
            width: 100%;
            height: 100vh;
            background-color: red;
            margin-top: 360vh;
        }
    </style>
</head>

<body>
    <div class="maincontainer">
        <div class="innercontainertext">
            <h1>Welcome to our Services page</h1><br>
            <h2>
                We are committed to providing exceptional support and services to
                ensure your hardware products meet your needs and expectations. Explore our range
                of services designed to enhance your shopping experience and keep your
                equipment running smoothly ensure your hardware products meet your needs and expectations. Explore our
                range
                of services designed to enhance your shopping experience and keep your
                equipment running smoothly.</h2>


        </div>
        <img src="hardwarestore.jpg" alt="">
    </div>

    <div class="installationdiv">
        <div class="innerinstalldiv">
            <img src="plumberinstallingbolt.jpg" alt="">
        </div>
        <div class="innerinstalldiv">
            <h1>Professional Installation Services</h1>
            <p>Ensure your new hardware is set up correctly and efficiently with our
                professional installation services. Our experienced technicians handle
                everything from home security systems to advanced networking equipment done things.</p>
            <button>served now</button>
        </div>
    </div>


    <div class="maintenancerepair">
        <div class="innerinstalldiv">

            <h1>Maintenance and Repair</h1>
            <p>We use advanced technology to detect and repair leaks in your plumbing system.
                Our non-invasive methods ensure that we identify the source of the problem without causing
                unnecessary damage to your property
                Our non-invasive methods ensure that we identify the source of the problem.</p>
            <button>served now</button>


        </div>
        <div class="innerinstalldiv">
            <img src="plumberfixingpipe.jpg" alt="">

        </div>
    </div>


    <div class="workingcardcontainer">
        <div class="innercarddiv">
            <div class="mostinnercarddiv">
                <h1 style="font-size:20px; color:green;">Emergency Plumbing Services</h1><br>
                <h3>When plumbing emergencies strike, you need a team that responds quickly and efficiently. Our
                    emergency plumbing services are available 24/7 to handle any urgent issues.</h3>
            </div>
            <button>served now</button>
        </div>
        <div class="innercarddiv">
            <div class="mostinnercarddiv">
                <h1 style="font-size:19px; color:green;">Commercial and Residential Services</h1>
                <h3>"Our plumbing expertise extends to both residential and commercial properties.
                    Whether you need plumbing services for your home, office, restaurant, or retail space,
                    we have the experience.</h3>
            </div>
            <button>served now</button>
        </div>
        <div class="innercarddiv">
            <div class="mostinnercarddiv">
                <h1 style="font-size:20px; color:green;">Hardware Products</h1><br>
                <h3>In addition to our plumbing services, we offer a wide selection of high-quality hardware products.
                    From pipes and fittings to faucets and fixtures, we have everything you need for your plumbing
                    projects.</h3>
            </div>
            <button>served now</button>
        </div>
        <div class="innercarddiv">
            <div class="mostinnercarddiv">
                <h1 style="font-size:20px; color:green;">Customer Testimonials</h1><br>
                <h3>Fantastic service! The plumber was friendly, professional, and fixed my issue in no time. Highly
                    recommend!'John D.
                </h3>
            </div>
            <button>served now</button>
        </div>
        <div class="innercarddiv">
            <div class="mostinnercarddiv">
                <h1 style="font-size:20px; color:green;">Call-to-Action:</h1><br>
                <h3>"Ready to experience top-quality plumbing services and hardware products? Schedule your service or
                    shop our products today</h3>
            </div>
            <button>served now</button>
        </div>
        <div class="innercarddiv">
            <div class="mostinnercarddiv">
                <h1 style="font-size:20px; color:green;">Contact Information</h1><br>
                <h3>Phone: +92-3319298-353 <br>
                    Email: ali353@.com</h3>
            </div>
            <button>served now</button>
        </div>



    </div>

    <div class="footerdivofservice">
        <?php
        include 'footer.php';
        ?>
    </div>

</body>

</html>