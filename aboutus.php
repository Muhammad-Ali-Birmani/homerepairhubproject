<?php
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        .bodycontainer {
            position: static;
            width: 100%;
            height: 100vh;
            background-image: url('plumber.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            object-fit: cover;
        }

        .innerdiv {
            position: relative;
            top: 35vh;
            width: 50%;
            height: 60vh;
            background-color: rgb(6, 105, 245);
            margin: auto;
            text-align: center;
            opacity: 0.8;
            border-radius: 10px;
        }



        .innerdiv h1 {
            color: white;
            font-size: 40px;
            font-style: normal;
            font-family: sans-serif;
        }

        .breakdiv {
            width: 100%;
            height: 3vh;
            background-color: #333;

        }



        .sincediv {
            display: flex;
            position: absolute;
            width: 100%;
            height: 80vh;
            background-color: rgb(19, 99, 212);
            background-image: linear-gradient(blue, white, blue);
        }

        .sidephoto {
            position: relative;
            width: 40%;
            height: 60vh;
            margin-top: 10vh;
            margin-left: 16vh;
            text-align: center;
            color: white;
            border-top-left-radius: 100px;
            border-bottom-right-radius: 100px;
            background-color: rgb(6, 105, 245);
        }

        .sidetext {
            position: relative;
            width: 40%;
            height: 60vh;
            margin-top: 10vh;
            background-color: rgb(6, 105, 245);
            margin-left: 8vh;
            background-image: url('plumberworking.png');
            background-repeat: no-repeat;
            background-size: cover;
            border-top-left-radius: 100px;
            border-bottom-right-radius: 100px;
        }

        .sidephoto h1 {
            color: white;
            font-size: 40px;
            font-style: normal;
            font-family: sans-serif;
        }

        .sidephoto p {
            color: white;
            font-size: 17px;
            font-style: normal;
            font-family: sans-serif;
        }



        .thirdblock {
            position: relative;
            margin-top: 80vh;
            width: 100%;
            height: 3vh;
            background-color: rgb(51, 51, 51);
            opacity: 1;
        }

        .fourthblock {
            position: relative;
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(white, blue);
            display: flex;
            text-align: center;

        }

        .innerdivcardone {
            position: relative;
            width: 20%;
            height: 60vh;
            background-image: linear-gradient(blue, white);
            margin-top: 20vh;
            border-top-right-radius: 100px;
            border-bottom-left-radius: 100px;
            margin-left: 20vh;
            box-shadow: 10px 10px #333;

        }

        .innerdivcardone:hover {
            transition: 1s ease;
            background-image: linear-gradient(white, blue);
            box-shadow: 7px 7px 7px 7px green;


        }

        .innerdivcardtwo:hover {
            transition: 1s ease;
            background-image: linear-gradient(white, blue);
            box-shadow: 7px 7px 7px 7px green;

        }

        .innerdivcardthree:hover {
            transition: 1s ease;
            background-image: linear-gradient(white, blue);
            box-shadow: 7px 7px 7px 7px green;

        }

        .innerdivcardtwo {
            position: relative;
            width: 20%;
            height: 60vh;
            background-image: linear-gradient(blue, white);
            margin-top: 20vh;
            border-top-right-radius: 100px;
            border-bottom-left-radius: 100px;
            margin-left: 20vh;
            box-shadow: 10px 10px #333;


        }

        .innerdivcardthree {
            position: relative;
            width: 20%;
            height: 60vh;
            background-image: linear-gradient(blue, white);
            margin-top: 20vh;
            border-top-right-radius: 100px;
            border-bottom-left-radius: 100px;
            margin-left: 20vh;
            box-shadow: 10px 10px #333;

        }


        .empprofile {
            width: 50%;
            height: 35%;
            background-image: linear-gradient(blue, white);
            margin: auto;
            margin-top: 30px;
            border-radius: 50%;
        }


        .breakdivlast {
            width: 100%;
            height: 3vh;
            background-color: #333;
            position: relative;
        }
    </style>
</head>

<body>
    <div class="bodycontainer">
        <div class="innerdiv">
            <div class="innertext"></div>
            <h1>Fixing leaks, one pipe at a time. Your trusted plumbing solution for a drip-free home</h1>
            <p style="color:white; font-size:20px;">Plumbers possess a unique blend of qualities
                essential to their
                craft.
                First and foremost, they exhibit unparalleled problem-solving skills,
                capable of diagnosing complex issues and devising effective solutions swiftly.
                Precision is their hallmark; every joint sealed, every pipe fitted with meticulous accuracy.
                Adaptability is another key trait; they navigate diverse challenges,
                from routine maintenance to emergency repairs, with ease and composure</p>
        </div>
    </div>
    <div class="breakdiv">
        <p style="color: white;"><i>home repair lab home repair lab home repair lab home repair
                lab home repair lab home repair lab home repair lab home repair lab home repair lab
                home repair lab home repair lab home repair lab home repa</i></p>
    </div>
    <div class="sincediv">
        <div class="sidetext">

        </div>
        <div class="sidephoto">
            <h1>Quality Work</h1><br>
            <p style="">Welcome to Home Repair Lab, where plumbing expertise meets unparalleled service.
                With over 25 years of combined experience, our team of licensed plumbers is dedicated
                to providing top-notch service for all your plumbing needs. From residential repairs
                to large-scale commercial projects, we've built our reputation on professionalism,
                reliability, and customer satisfaction. Our commitment to using the highest quality materials
                and employing modern techniques ensures that your plumbing system functions flawlessly
                for years to come. Whether it's a minor leak or a major installation, we're here for
                you 24/7 with prompt, personalized service. Don't just take our word for it—see what
                our satisfied customers have to say. Contact us today and experience the difference
                with Home Repair Lab</p>
        </div>

    </div>
    <div class="thirdblock">
        <p style="color: white;"><i>home repair lab home repair lab home repair lab home repair
                lab home repair lab home repair lab home repair lab home repair lab home repair lab
                home repair lab home repair lab home repair lab home repa</i></p>
    </div>
    <div class="fourthblock">
        <div class="innerdivcardone">
            <div class="empprofile">
                <img style="width:75%; margin-left:20px; margin-top:10px" src="technicianprofile1.png"
                    alt="plumber profile">
            </div>
            <h1 style="color:white">Muhammad Ali</h1>
            <h3 style="color:white">(Apprentice Plumber)</h3>
            <p style="font-size:20px"><span style="font-size: 20px; font-weight: bold;">Home Repair Hub </span>"is
                ever
                our commitment to quality service ensures that every drip, every leak, is met with expertise and care."
            </p>
        </div>
        <div class="innerdivcardtwo">
            <div class="empprofile">
                <img style="width:75%;  margin-top:10px" src="technicianprofile2.png" alt="plumber profile">
            </div>
            <h1 style="color:white">Asad Ullah</h1>
            <h3 style="color:white">(Journeyman Plumber)</h3>
            <p style="font-size:20px"><span style="font-size: 20px; font-weight: bold;">Home Repair Hub </span>"is
                ever
                our commitment to quality service ensures that every drip, every leak, is met with expertise and care."
            </p>
        </div>
        <div class="innerdivcardthree">
            <div class="empprofile">
                <img style="width:75%;  margin-top:10px" src="technicianprofile3.png" alt="plumber profile">
            </div>
            <h1 style="color:white">Sulman Saleem</h1>
            <h3 style="color:white">(Service Plumber)</h3>
            <p style="font-size:20px"><span style="font-size: 20px; font-weight: bold;">Home Repair Hub </span>"is
                ever
                our commitment to quality service ensures that every drip, every leak, is met with expertise and care."
            </p>
        </div>

    </div>

    <div class="breakdivlast">
        <p style="color: white;"><i>home repair lab home repair lab home repair lab home repair
                lab home repair lab home repair lab home repair lab home repair lab home repair lab
                home repair lab home repair lab home repair lab home repa</i></p>
    </div>


</body>

</html>
<?php
include 'footer.php'
    ?>