<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        * {
            font-family: sans-serif;

        }

        .containerdiv {
            position: absolute;
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(blue, white);
            margin-top: 10vh;
            display: flex;
            flex-wrap: wrap;
        }

        .containerdiv pre {
            width: 100%;
            color: white;
            font-size: 30px;
            font-weight: bold;
        }

        .innerdivcard {
            width: 30%;
            height: 15vh;
            background-color: white;
            margin-left: 6vh;
            border-radius: 10px;
            box-shadow: 5px 5px 5px 5px #333;
            display: flex;


        }

        .innerdivcard:hover {

            box-shadow: 7px 7px 7px 7px green;



        }

        .headingdiv {
            margin-top: 3vh;
            position: relative;
            width: 100%;
            height: 8vh;
        }

        .innertextdiv {
            margin-top: 5vh;
            width: 85%;
            height: 8vh;
            text-align: left;

        }

        .innertextdiv a {
            font-weight: bold;
            color: black;
            font-family: sans-serif;
            font-size: 16px;
            text-align: center;

        }

        .innerdivimage {
            width: 25%;
            height: 13vh;
            margin-top: 1vh;
        }

        .secondcontainer {
            position: absolute;
            width: 100%;
            height: 80vh;
            background-image: linear-gradient(blue, white);
            margin-top: 110vh;
            display: flex;
        }

        .innersecondcontainer {
            position: relative;
            width: 35%;
            height: 55vh;
            background-image: linear-gradient(white, blue);
            margin-top: 13vh;
            margin-left: 22vh;
            border-radius: 10px;
            box-shadow: 7px 7px 7px 7px #333;
            text-align: center;

        }

        .innersecondcontainer:hover {

            background-image: linear-gradient(blue, white);
            box-shadow: 7px 7px 7px 7px green;
            color: white;
        }

        .linebreak {
            width: 100%;
            height: 100vh;
            background-color: red;
            position: absolute;
            margin-top: 200vh;
        }
    </style>
</head>

<body>



    <div class="containerdiv">
        <div class="headingdiv">

            <pre>   Welcome to Home Repair Hub</pre>
        </div>

        <div class="innerdivcard">
            <div class="innerdivimage">
                <img src="orderbox.png" style="width:10vh; height : 10vh; margin-left:2vh; margin-top:1.5vh;" alt="">

            </div>
            <div class="innertextdiv">
                <a href="">A delivery, order or return</a>
            </div>


        </div>
        <div class="innerdivcard">
            <div class="innerdivimage">
                <img src="accessability.png" style="width:10vh; height : 10vh; margin-left:2vh; margin-top:1.5vh;"
                    alt="">

            </div>
            <div class="innertextdiv">
                <a href="">Accessability</a>
            </div>


        </div>
        <div class="innerdivcard">
            <div class="innerdivimage">
                <img src="atmcard.png" style="width:10vh; height : 10vh; margin-left:2vh; margin-top:1.5vh;" alt="">

            </div>
            <div class="innertextdiv">
                <a href="">Payments gift cards</a>
            </div>


        </div>
        <div class="innerdivcard">
            <div class="innerdivimage">
                <img src="padlock.png" style="width:10vh; height : 10vh; margin-left:2vh; margin-top:1.5vh;" alt="">

            </div>
            <div class="innertextdiv">
                <a href="">Address, security & privacy</a>
            </div>


        </div>
        <div class="innerdivcard">
            <div class="innerdivimage">
                <img src="membership.png" style="width:10vh; height : 10vh; margin-left:2vh; margin-top:1.5vh;" alt="">

            </div>
            <div class="innertextdiv">
                <a href="">Memberships, subscriptions</a>
            </div>


        </div>
        <div class="innerdivcard">
            <div class="innerdivimage">
                <img src="cvupload.png" style="width:10vh; height : 10vh; margin-left:2vh; margin-top:1.5vh;" alt="">

            </div>
            <div class="innertextdiv">
                <a href="">Upload CV Resume</a>
            </div>


        </div>
        <div class="innerdivcard">
            <div class="innerdivimage">
                <img src="multimedia.png" style="width:10vh; height : 10vh; margin-left:2vh; margin-top:1.5vh;" alt="">

            </div>
            <div class="innertextdiv">
                <a href="">
                    eBooks, Prime Videos, Music or Games</a>
            </div>


        </div>
        <div class="innerdivcard">
            <div class="innerdivimage">
                <img src="joinourcommunity.png" style="width:10vh; height : 10vh; margin-left:2vh; margin-top:1.5vh;"
                    alt="">

            </div>
            <div class="innertextdiv">
                <a href="">Join our community</a>
            </div>


        </div>
        <div class="innerdivcard">
            <div class="innerdivimage">
                <img src="gmail.png" style="width:10vh; height : 10vh; margin-left:2vh; margin-top:1.5vh;" alt="">

            </div>
            <div class="innertextdiv">
                <a href="">Email Us</a>
            </div>


        </div>
        <div class="innerdivcard">
            <div class="innerdivimage">
                <img src="messages.png" style="width:10vh; height : 10vh; margin-left:2vh; margin-top:1.5vh;" alt="">

            </div>
            <div class="innertextdiv">
                <a href="">Text Message Us</a>
            </div>


        </div>
        <div class="innerdivcard">
            <div class="innerdivimage">
                <img src="phonecall.png" style="width:10vh; height : 10vh; margin-left:2vh; margin-top:1.5vh;" alt="">

            </div>
            <div class="innertextdiv">
                <a href="">Make call to Us</a>
            </div>


        </div>
        <div class="innerdivcard">
            <div class="innerdivimage">
                <img src="yahoo.png" style="width:10vh; height : 10vh; margin-left:2vh; margin-top:1.5vh;" alt="">

            </div>
            <div class="innertextdiv">
                <a href="">Meet us at Yahoo!</a>
            </div>


        </div>

    </div>


    <div class="secondcontainer">
        <div class="innersecondcontainer">
            <img src="facebook.png" height="320px" width="320px" alt="">
        </div>
        <div class="innersecondcontainer">
            <h1>Get Services on FaceBook</h1><br>
            <h4>We are excited to announce a brand-new feature on our website that will enhance your shopping
                experience: Our exclusive Facebook Services! This innovative addition allows you to connect, interact,
                and shop directly through our Facebook page with ease and convenience Explore our wide range of products
                directly on our Facebook page. Browse through our catalog, view detailed product descriptions, and make
                purchases without ever leaving Facebook. Our seamless integration ensures a smooth and hassle-free
                Got questions? Need assistance? Our dedicated customer support team is just a message away. Use
                Facebook Messenger to chat with our friendly representatives in real-time. Whether you need
                help with product information, order tracking, or returns, we're here to assist you instantly.
                shopping experience</h4>
        </div>
    </div>



    <div class="linebreak">
        <?php

        include 'footer.php';
        ?>
    </div>


</body>

</html>