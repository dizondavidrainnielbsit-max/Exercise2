<?php

$name = "David Rainniel Dizon";
$age = 22;
$height = "167 cm";
$weight = "167 kg";
$course = "BS Information Technology";
$nickname = "Rain";
$hobbies = "Gaming, Motorcycling, MMA";
$role = "Team Leader / Programmer";

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>David Rainniel Dizon - Personal Profile</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f3e8ff;
    min-height:100vh;
}

/* HEADER */

header{
    background:linear-gradient(135deg,#8e44ad,#c05ce3);
    color:white;
    text-align:center;
    padding:35px 20px;
}

header h1{
    font-size:40px;
    letter-spacing:2px;
}

header p{
    margin-top:8px;
    font-size:18px;
}

/* MAIN CONTAINER */

.container{
    width:90%;
    max-width:900px;
    margin:40px auto;
}

/* PROFILE CARD */

.profile{
    background:white;
    border-radius:20px;
    padding:35px;
    box-shadow:0 8px 25px rgba(0,0,0,.15);
    display:flex;
    gap:40px;
    align-items:center;
}

/* IMAGE */

.profile img{
    width:220px;
    height:220px;
    border-radius:20px;
    object-fit:cover;
    border:6px solid #a855d4;
}

/* INFORMATION */

.details{
    flex:1;
}

.details h2{
    color:#8e44ad;
    font-size:30px;
    margin-bottom:5px;
}

.details h4{
    color:#777;
    margin-bottom:25px;
    font-size:18px;
}

/* INFO BOX */

.info{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:15px;
}

.info-box{
    background:#f7effc;
    padding:15px;
    border-radius:10px;
    border-left:5px solid #a855d4;
}

.info-box strong{
    color:#8e44ad;
    display:block;
    margin-bottom:5px;
}

/* ABOUT */

.about{
    background:white;
    margin-top:25px;
    padding:30px;
    border-radius:20px;
    box-shadow:0 8px 25px rgba(0,0,0,.12);
}

.about h2{
    color:#8e44ad;
    margin-bottom:15px;
}

.about p{
    color:#555;
    line-height:1.7;
}

/* FOOTER */

footer{
    background:#8e44ad;
    color:white;
    text-align:center;
    padding:18px;
    margin-top:40px;
}

/* RESPONSIVE */

@media(max-width:700px){

    .profile{
        flex-direction:column;
        text-align:center;
    }

    .info{
        grid-template-columns:1fr;
    }

    header h1{
        font-size:30px;
    }

}

</style>

</head>


<body>

<header>

    <h1>PERSONAL PROFILE</h1>

    <p>My Personal Information</p>

</header>


<div class="container">


    <!-- PROFILE -->

    <div class="profile">

        <img src="rain.jpg" alt="David Rainniel Dizon">


        <div class="details">

            <h2>
                <?php echo $name; ?>
            </h2>

            <h4>
                <?php echo $role; ?>
            </h4>


            <div class="info">

                <div class="info-box">

                    <strong>Age</strong>

                    <?php echo $age; ?> years old

                </div>


                <div class="info-box">

                    <strong>Height</strong>

                    <?php echo $height; ?>

                </div>


                <div class="info-box">

                    <strong>Weight</strong>

                    <?php echo $weight; ?>

                </div>


                <div class="info-box">

                    <strong>Nickname</strong>

                    <?php echo $nickname; ?>

                </div>


                <div class="info-box">

                    <strong>Course</strong>

                    <?php echo $course; ?>

                </div>


                <div class="info-box">

                    <strong>Hobbies</strong>

                    <?php echo $hobbies; ?>

                </div>

            </div>

        </div>

    </div>


    <!-- ABOUT ME -->

    <div class="about">

        <h2>About Me</h2>

        <p>
            Hello! My name is <?php echo $name; ?>.
            I am a <?php echo $course; ?> student.
            I enjoy <?php echo $hobbies; ?>.
            I am also interested in learning new technologies,
            improving my programming skills, and exploring
            different things related to Information Technology.
        </p>

    </div>


</div>


<footer>

    <p>
        &copy; 2026 <?php echo $name; ?> | Personal Profile
    </p>

</footer>


</body>

</html>