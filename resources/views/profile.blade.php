<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Ronnie Selles</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    #box-container {
        display: flex;
        flex-direction: row;
        position: relative;
        top: 10vh;
        height: auto;
        padding:5vh;
    }

    .box {
        background-color: black;
        border: 10px solid rgb(0, 0, 0);
        flex: 33vw;
        align-content: center;
        max-width: 33vw;
        max-height: auto;
        
    }
    #handstand-img{
        width: 80%;
        
    }

</style>

<body>
    <nav>
        <ul>
            <li><a href="/"><img id='home-icon' src="assets/home-icon.png"></a></li>
            <li><a id='current-page' href="profile">Profile</a></li>
            <li><a href="dashboard">Dashboard</a></li>
            <li><a href="faq">FAQ</a></li>
            <li><a href="motivation">Motivation</a></li>
        </ul>
    </nav>

    <main>
        <div id="box-container">
            <div class="box"><img id='handstand-img' src="assets/handstand.jpg"></div>
            <div class="box">
                <ul class='inhoud'>
                    <li>Ronnie Selles</li>
                    <li>Geboren in Nederland</li>
                    <li>Ik woon in Vlissingen</li>
                    <br>
                    <li>Vrije tijd?</li>
                    <li>Calisthenics/bodyweight training</li>
                    <li>&lt--</li>
                    <li>muziek maken</li>
                    <li>--&gt</li>
                    <li>en gamen(natuurlijk)</li>
                </ul>
            </div>
            <div class="box"><img id='handstand-img' src="assets/ableton-logo.jpg"></div>
        </div>
        </div>

    </main>

    <footer>
        <h5>© 2020 Ronnie Selles</h5>
    </footer>
</body>

</html>