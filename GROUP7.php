<?php
// Group 7 Members
$members = [
    [
        "image" => "rain.jpg",
        "name" => "David Rainniel Dizon",
        "role" => "Team Leader / Programmer",
        "age" => "22",
        "course" => "BS Information Technology",
        "hobbies" => "Gaming, Motorcycling, MMA",
        "nickname" => "Rain"
    ],
    [
        "image" => "xyck.jpg",
        "name" => "Xyck Balucos",
        "role" => "Backend Developer",
        "age" => "22",
        "course" => "BS Information Technology",
        "hobbies" => "Basketball, Cycling",
        "nickname" => "Xyck"
    ],
    [
        "image" => "Mejia.jpg",
        "name" => "Harlie Mejia",
        "role" => "Web Designer",
        "age" => "20",
        "course" => "BS Information Technology",
        "hobbies" => "Coding, Basketball",
        "nickname" => "Harlie"
    ],
    [
        "image" => "lucky.jpg",
        "name" => "Lucky Martizano",
        "role" => "Web Debugging",
        "age" => "21",
        "course" => "BS Information Technology",
        "hobbies" => "Coding, Basketball",
        "nickname" => "Lucky"
    ],
    [
        "image" => "billy.jpg",
        "name" => "Billy Naire",
        "role" => "Web Debugging",
        "age" => "20",
        "course" => "BS Information Technology",
        "hobbies" => "Coding, Basketball",
        "nickname" => "Billy"
    ],
    [
        "image" => "suhail.jpg",
        "name" => "Suhail Mariano",
        "role" => "Web Debugging",
        "age" => "20",
        "course" => "BS Information Technology",
        "hobbies" => "Coding, Basketball",
        "nickname" => "Suhail"
    ],
    [
        "image" => "daniela.jpg",
        "name" => "Daniela Jane Meñoza",
        "role" => "Web Debugging",
        "age" => "19",
        "course" => "BS Information Technology",
        "hobbies" => "Volleyball, Singing, Dancing",
        "nickname" => "Ella/Dani"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Group 7 Profile</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f4f4f4;
}

header{
    background:#0d6efd;
    color:white;
    text-align:center;
    padding:30px;
}

header h1{
    font-size:38px;
}

header p{
    margin-top:10px;
}

.container{
    width:90%;
    margin:auto;
    padding:40px 0;
}

.team{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
}

.card{
    background:white;
    border-radius:15px;
    text-align:center;
    padding:20px;
    box-shadow:0 5px 15px rgba(0,0,0,.2);
    transition:.3s;
}

.card:hover{
    transform:translateY(-8px);
}

.card img{
    width:150px;
    height:150px;
    border-radius:50%;
    object-fit:cover;
    border:5px solid #0d6efd;
}

.card h2{
    margin-top:15px;
    color:#0d6efd;
}

.card h4{
    color:#666;
    margin-bottom:15px;
}

.info{
    text-align:left;
    margin-top:15px;
}

.info p{
    margin:8px 0;
}

footer{
    text-align:center;
    background:#0d6efd;
    color:white;
    padding:15px;
    margin-top:30px;
}

</style>

</head>

<body>

<header>
    <h1>Group 7</h1>
    <p>Members Profile</p>
</header>

<div class="container">

    <div class="team">

        <?php foreach ($members as $member): ?>

        <div class="card">

            <img 
                src="<?php echo $member['image']; ?>" 
                alt="<?php echo $member['name']; ?>"
            >

            <h2>
                <?php echo $member['name']; ?>
            </h2>

            <h4>
                <?php echo $member['role']; ?>
            </h4>

            <div class="info">

                <p>
                    <strong>Age:</strong>
                    <?php echo $member['age']; ?>
                </p>

                <p>
                    <strong>Course:</strong>
                    <?php echo $member['course']; ?>
                </p>

                <p>
                    <strong>Hobbies:</strong>
                    <?php echo $member['hobbies']; ?>
                </p>

                <p>
                    <strong>Nick name:</strong>
                    <?php echo $member['nickname']; ?>
                </p>

            </div>

        </div>

        <?php endforeach; ?>

    </div>

</div>

<footer>
    <p>Group 7 - Members Profile</p>
</footer>

</body>
</html>