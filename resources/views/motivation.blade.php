@extends('layout')

@section('content')

    <main>
        <div id="box-container1">
            <div class="box1">
              <ul>
                <h1>
                    <li>Theory</li>
                </h1>
                <h4>
                    <li>According to Beata Souders motivation is a condition inside us that desires a change, either in the self or the environmen.<br>
                        The essence of motivation is energized and persistent goal-directed behavior. When we are motivated, we move and take action.</li>
                </h4>
                <br>
                <h3>
                    <li>types of motivation</li>
                </h3>
                <h4>
                    <li>According to www.verywellmind.com:</li>
                    <li>-Extrinsic motivations are those that arise from outside of the individual and often involve rewards such as trophies, money, social recognition, or praise.</li>
                    <li>-Intrinsic motivations are those that arise from within the individual, such as doing a complicated crossword puzzle purely for the personal gratification of solving a problem.</li>
                </h4>
                <br>
                <h3>
                    <li>Dan Pink: the puzzle of motivation</li>
                </h3>
                <h4>
                    <li>According to dan pink rewarding people to stimulate better performance doesn't work it actually achieves the opposite</li>
                    <li>Rewards narrow our focus and because of that work really well for simple tasks. But NOT for tasks where you need to think out of the box.</li>
                    <li>Studies agree with him on this statement.</li>
                    <li>If you want to get higher performace we need to stop punishing and giving rewards.</li>
                    <li>We need to start working with intrinsic motivation, doing tasks because we like them and because they matter.</li>
                    <li>Autonomy: urge to direct our own lives.</li>
                    <li>Mastery: desire to get better.</li>
                    <li>Purpose: to serve something larger than ourselves.</li>
                    <li>We need to stop using the old way and start working with a new way of motivating people with Intrinsic motivation instead of Extrinsic motivation.</li>


                </h4>


              </ul>
            </div>


        </div>
        <div id="box-container2">
            <div class="box2">
                <ul>
                    <h1>
                        <li>Performance motivation</li>
                    </h1>
                    <h4>
                        <li>Je bent in <i>sterke mate intrinsiek gemotiveerd</i> en maar weinig extrinsiek gemotiveerd. <br>
                            Dat je in sterke mate intrinsiek gemotiveerd bent betekent dat je het echt leuk vindt om te studeren.<br>
                             Je beleeft er <i>plezier aan om beter en wijzer</i> te worden. De kans dat jij iets opsteekt van school/je studie is dan ook groot.<br>
                              Je intrinsieke motivatie zorgt er bovendien voor dat je een studie of <i>beroep kiest dat uitstekend bij je kwaliteiten past.</i><br>
                               Dat je maar weinig extrinsiek gemotiveerd bent wil zeggen dat je je, in je studie, <br>
                               <i>weinig laat leiden door wat andere mensen van je studie vinden</i>, of door wat je later met je studie kunt bereiken.<br>
                                Voor jou staat je interesse voorop.</li>
                            <br>
                        <li>Ik heb hier weinig op aan te merken. Ik ben het met alle punten eens.</li><br>
                    </h4>
                </ul>
                <ul>
                    <h1>
                        <li>Career anchors/values</li>
                    </h1>
                    <h4>
                        <li>Normen en waarden(18 punten)</li>
                        <li>Ik vindt het een fijn idee een bijdrage te leveren aan een groter geheel en minder bezig zijn met wat mensen van mij vinden</li>
                        <li>Dit komt overeen met de intrinsieke motivatie van de eerdere test.</li>
                        <li>Creativiteit(18 punten)</li>
                        <li>Ik ben denk ik een creatief iemand dus ik vindt het heel fijn om ook eigen ideeën te kunnen toevoegen</li>
                        <li>"Vaak werken creatieve mensen het liefst zelfstandig of in kleine teams." hier ben ik het ook helemaal mee eens.</li>
                        <li>Sociale contacten(3 punten)</li>
                        <li>Het is niet dat ik sociale contacten helemaal niet belangrijk vindt. Ik vind het ook fijn dat het ook gezellig is</li>
                        <li>Ik vindt het ook leuker om in kleine groepjes te werken dan alleen. Ik vind dit echter niet het belangrijkste.</li>
                    </h4>
                </ul>
            </div>

        </div>
        </div>
        <div id="box-container3">
            <div class="box3">
                <ul>
                    <h1>
                        <li>Resource list</li>
                    </h1>
                    <h4>
                        <li><a href= 'https://positivepsychology.com/what-is-motivation/'>positivepsychology.com,(2020)</a></li>
                        <li><a href= 'https://www.verywellmind.com/what-is-motivation-2795378'>verywellmind.com,(2020)</a></li>
                        <li><a href= 'https://www.managementstudyguide.com/what_is_motivation.html'>managementstudyguide.com,(2020)</a></li>
                        <li><a href= 'https://www.ted.com/talks/dan_pink_the_puzzle_of_motivation'>ted.com,(2020)</a></li>
                        <li><a href= 'https://www.123test.nl/schein/'>123test.nl, (2020)</a></li>
                    </h4>
            </div>

        </div>
        </div>
    </main>
@endsection
    <style>
        i{
            color:red
        }
        #box-container1 {
            display: flex;
            flex-direction: row;
            position: relative;
            top: 10vh;
            height: auto;
            padding:5vh;
        }

        .box1 {
            background-color: black;
            border: 10px solid rgb(0, 0, 0);
            flex: 33%;
            align-content: center;
            max-width: 100vw;
            max-height: 80%;
        }
        #box-container2 {
            display: flex;
            flex-direction: row;
            position: relative;
            top:10vh;
            height: auto;
            padding:5vh;
        }

        .box2 {
            background-color: black;
            border: 10px solid rgb(0, 0, 0);
            flex: 33%;
            align-content: center;
            max-width: 100vw;
            max-height: 33vw;

        }
        #box-container3 {
            display: flex;
            flex-direction: row;
            position: relative;
            top:10vh;
            height: auto;
            padding:5vh;
        }

        .box3 {
            background-color: black;
            border: 10px solid rgb(0, 0, 0);
            flex: 33%;
            align-content: center;
            max-width: 100vw;
            max-height: 33vw;

        }
    </style>
