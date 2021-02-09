@extends('layout')

@section('content')

    <main>
{{--        <div id="box-container">--}}
{{--            <div class="box">--}}
{{--                <ul class='inhoud'>--}}
{{--                    <h3>Hoe kun je een document printen op de HZ?</h3>--}}
{{--                    <li>Open het document dat je wilt printen.          <br>--}}
{{--                        Connect met een beschikbare printer bij HZ.     <br>--}}
{{--                        Print--}}
{{--                    </li>--}}
{{--                    <br>--}}
{{--                    <h3>Hoe kun je een document scannen en naar je laptop versturen op de HZ?</h3>--}}
{{--                        <li>--}}
{{--                            Je kunt je document bij een beschikbare printer scannen en hem vervolgens naar jezelf mailen--}}
{{--                        </li> --}}
{{--                    <br>--}}
{{--                    <h3>What do you need to do when you are sick / show symptoms of coronavirus?</h3>--}}
{{--                    <li>--}}
{{--                        Laat het Evelien Clemminck weten.   <br>--}}
{{--                        Email: evelien.clemminck@hz.nl      <br>--}}
{{--                        telefoon: 0118-489163               <br>--}}
{{--                    <br>--}}
{{--                    </li>--}}
{{--                    <br>--}}
{{--                    <h3>How can you book a project space in one of the wings?</h3>--}}
{{--                    <li>Ga naar de your HZ page, Login-> Self-Service Portal-> New Reservations-> Book Project Group Rooms</li>--}}
{{--                    <br>--}}
{{--                    <h3>What are the instructions if you want to park your car at the HZ parking lot?</h3>--}}
{{--                    <li>Je kunt je studentenpas gebruiken om te parkeren. </li>--}}
{{--                </ul>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        </div>--}}
        <div id="box-container">
           <div class="box">
                <ul class='inhoud'>

                    @foreach($faq as $faqs)

                        <p><b>{{ $faqs->question }}</b></p>

                        <p>{{$faqs->answer}}</p>
                        <br>
                        <p><a href="{{$faqs->link}}">{{$faqs->link}}</a></p>

                        <p >{{$faqs->created_at}}</p>

                    @endforeach

                </ul>
           </div>
        </div>
    </main>
@endsection
    <style>
        #box-container {
            display: flex;
            flex-direction: row;
            position: relative;
            top: 15vh;
            height: auto;
        }

        .box {
            background-color: black;
            border: 10px solid rgb(0, 0, 0);
            flex: 33%;
            align-content: center;
            max-width: 100vw;
            max-height: auto;
        }

    </style>
