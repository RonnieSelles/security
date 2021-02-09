@extends('layout')

@section('content')
    <main>
        <div id='background-image'>

            <a id='go-down-button' href="#box-container">Go down</a>

            <div id='welcome-text'>
                <header>
                    <h2>Ronnie Selles</h2>
                </header>
                <h5>Welcome!</h5>
            </div>

            <div id="box-container">
                <div class="box"><img class='logos-main' src="assets/hz-logo.jpg"></div>
                <div class="box">
                    <ul class='inhoud'>
                        <li>
                            Het HBO past bij mij omdat ik het leuk vind om nieuwe dingen te leren en ik goed zelfstandig kan werken.
                            Ook is het heel leuk om in groepen te werken en samen tot een oplossing te komen.
                        </li>
                        <br>
                        <li>
                            Het programmeren zelf vind ik heel leuk omdat ik lekker creatief kan zijn en technisch bezig ben.

                        </li>
                    </ul>
                </div>
                <div class='box'><img class='logos-main' src="assets/js-logo.png"></div>
            </div>
        </div>
    </main>
    @endsection


<style>
    #welcome-text {
        text-align: center;
        font-size: 50px;
        position: relative;
        top: 30vh;
        text-shadow: 2px 2px 2px black;
    }

    #go-down-button {
        color: white;
        text-shadow: 2px 2px 2px black;
        scroll-behavior: smooth;
        position: relative;
        left: 1vh;
        top: 8vh;
    }

    /*achtergrond */
    #background-image {
        background-image: url('assets/wallpaper.jpg');
        background-repeat: no-repeat;
        background-position: top;
        background-size: cover;
        background-attachment: fixed;
        height: 200vh;
    }

    /*box met afbeeldingen text*/
    #box-container {
        display: flex;
        flex-direction: row;
        position: relative;
        top: 100vh;
        height: auto;
        padding:5vh;
    }

    .box {
        background-color: black;
        border: 10px solid rgb(0, 0, 0);
        flex: 33%;
        align-content: center;
        max-width: 33vw;
        max-height: auto;
    }

    /*mobile*/
    @media (max-width: 800px) {
        #box-container {
            flex-direction: column;
            top: 50vh;
            left: 10%;
        }

        .box {
            max-width: 60vw;
            max-height: 60vw;
        }
    }

    /* js en hz logo*/
    .logos-main {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        height: auto;
    }

</style>
