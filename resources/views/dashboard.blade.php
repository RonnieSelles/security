@extends('layout')

@section('content')



    <main>
        <div id="box-container1">
            <div class="box1">
                <div id='table'>
                    <div class="c1">Quartile</div>
                    <div class="c2">Course</div>
                    <div class="c3">EC</div>
                    <div class="c4">Exam</div>
                    <div class="c5">Grade</div>

                    <div class="quart1">1</div>
                    <div class="c7">Programme and Career Orientation</div>
                    <div class="c8">2.5</div>
                    <div class="c9">assassment</div>
                    <div class="c10">...</div>

                    <div class="c12">Computer science basics</div>
                    <div class="c13">7.5</div>
                    <div class="c14">written</div>
                    <div class="c15">...</div>

                    <div class="c17">Programming Basics</div>
                    <div class="c18">5</div>
                    <div class="c19">Case Study</div>
                    <div class="c20">6</div>


                    <div class="quart2">2</div>
                    <div class="oop">Object Oriented Programming</div>
                    <div class="oop2">10</div>
                    <div class="c24">Case study</div>
                    <div class="c25">...</div>
                    <div class="c26">Project</div>
                    <div class="c27">...</div>

                    <div class="c28">Professional Skills 1</div>
                    <div class="c29">2,5</div>
                    <div class="c30">Portfolio exam</div>
                    <div class="c31">...</div>

                    <div class="quart3">3</div>
                    <div class="c33">Framework project 1</div>
                    <div class="c34">5</div>
                    <div class="c35">Portfolio exam1</div>
                    <div class="c36">...</div>
                    <div class="c37">Portfolio exam2</div>
                    <div class="c38">...</div>

                    <div class="c39">Framework development</div>
                    <div class="c40">5</div>
                    <div class="c41">Case Study</div>
                    <div class="c42">...</div>

                    <div class="c43">Professional Working Envirenment</div>
                    <div class="c44">2,5</div>
                    <div class="c45">Assessment</div>
                    <div class="c46">...</div>

                    <div class="c47">Professional Skills 2</div>
                    <div class="c48">2,5</div>
                    <div class="c49">Portfolio Exam</div>
                    <div class="c50">...</div>
                    <div class="c51">Written Exam1</div>
                    <div class="c52">...</div>
                    <div class="c53">Written Exam2</div>
                    <div class="c54">...</div>

                    <div class="quart4">4</div>
                    <div class="c56">Framework Project 2</div>
                    <div class="c57">5</div>
                    <div class="c58">Portfolio Exam</div>
                    <div class="c59">...</div>

                    <div class="c61">Framework Development 2</div>
                    <div class="c62">5</div>
                    <div class="c63">Portfolio Exam</div>
                    <div class="c64">...</div>

                    <div class="c65">Professional Skills 3</div>
                    <div class="c66">2,5</div>
                    <div class="c67">Portfolio Exam</div>
                    <div class="c68">...</div>
                    <div class="c69">Written Exam1</div>
                    <div class="c70">...</div>
                    <div class="c71">Written Exam2</div>
                    <div class="c72">...</div>

                    <div class="c73">Whenever</div>
                    <div class="c74">HZ personality</div>
                    <div class="c75">2,5</div>
                    <div class="c76">Portfolio</div>
                    <div class="c77">...</div>

                    <div class="c78">IT personality</div>
                    <div class="c79">2,5</div>
                    <div class="c80">Portfolio</div>
                    <div class="c81">...</div>

                    <div class="total">Total</div>
                    <div class="total"></div>
                    <div class="total">5</div>
                    <div class="total"></div>
                    <div class="total"></div>
                </div>
            </div>


        </div>
        </div>
        <div id="box-container2">
            <div class="box2">
                <ul>
                    <li>Study Guide / handige links</li>
                    <br>
                    <li><a href ='https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen' target="_blank">onderwijs-en-examenregelingen</a></li>
                    <li><a href= 'https://hz.nl/uploads/documents/Regelingen/NL/Uitvoeringsregeling-OER-HBO-ICT-Voltijd-2019-2020.pdf'target="_blank">Uitvoeringsregeling-ICT</a></li>
                    <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">studievoortgang</a></li>
                    <br>
                    <li><a href="https://learn.hz.nl/my/" target="_blank">learn.hz</a></li>
                    <li><a href="https://github.com/HZ-HBO-ICT" target="_blank">github.com/HZ-HBO-ICT</a></li>
                    <li><a href="" target="_blank"></a></li>
                </ul>
            </div>

        </div>
        </div>
    </main>
@endsection


    <style>
        main {
            height: 220vh;
        }
        /*tabel*/
        #box-container1 {
            display: flex;
            flex-direction: row;
            position: relative;
            top: 10vh;
            height: auto;
            padding:5vh;
        }
        /*box around table*/
        .box1 {
            background-color: black;
            border: 10px solid rgb(0, 0, 0);
            flex: 33%;
            align-content: center;
            max-width: 100vw;
            max-height: 80%;
        }
        /*table*/
        #table {
            font-size: 25px;
            width: 100%;
            height: 80%;
            display: grid;
            z-index: 2;
            grid-template-columns: auto auto auto auto auto;
            background: black;
            grid-template-rows: 50px, 50px;
        }

        #table>div {
            padding: 20px 0;
            border: 1px solid white; /*table border color*/
            text-align: center;
        }

        /*table*/

        /* quart 1*/
        .quart1 {
            grid-row-start: 2;
            grid-row-end: 5;
        }
        /* quart 2*/
        .quart2{
            grid-row-start: 5;
            grid-row-end: 8;
            /* oop breder */
        }
        .oop{
            grid-row-start: 5;
            grid-row-end: 7;
        }
        /*ec breder*/
        .oop2{
            grid-row-start: 5;
            grid-row-end: 7;
        }
        /*quart 3*/
        /* framework project*/
        .quart3{
            grid-row-start:8 ;
            grid-row-end: 15;
        }
        .c33{
            grid-row-start:8 ;
            grid-row-end: 10;
        }
        .c34{
            grid-row-start:8 ;
            grid-row-end: 10;
        }

        /*prof skills 2*/
        .c47{
            grid-row-start:12 ;
            grid-row-end: 15   ;
        }
        .c48{
            grid-row-start:12 ;
            grid-row-end: 15   ;
        }

        /*quart 4*/
        .quart4{
            grid-row-start:15 ;
            grid-row-end: 20;
        }
        .c65{
            grid-row-start:17 ;
            grid-row-end: 20;
        }
        .c66    {
            grid-row-start:17 ;
            grid-row-end: 20;
        }

        /* whenever*/
        .c73{
            grid-row-start:20 ;
            grid-row-end: 22     ;
        }

        .total{
            background-color:red;
        }


        /*study guide*/
        #box-container2 {
            display: flex;
            flex-direction: row;
            position: relative;
            top:40vh;
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
            font-size: 40px;
        }
    </style>
