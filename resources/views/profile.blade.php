@extends('template.index')
@section('main')
    <div class="row">
        <div class="col-md-3 col-md-offset-1" >
            <div class="profile-container row">
                <div class="profile-header col-md-12">
                    <div class="profile-header-background-img">
                            <div class="profile-photo">
                                <div class="profile-hover hidden">
                                        Change
                                    </div>
                            </div>
                            <div class="profile-header-hover">
                                   <span class="fa fa-camera"></span> <span class="text hidden">Upload</span>  
                            </div>
                    </div>
                    <div class="profile-header-links" >

                        <ul class="profile-links">
                            <li><a href="#">Change Password</a></li>
                        
                            <li><a href="#">Update Info</a></li>
                        </ul>

                    </div>

                </div>
                <div class="profile-content col-md-12">
                    <div>
                        <div class="profile-content-container">
                            <b>Intro</b>
                            <p>Channel ini khusus membahas gadget-gadget dalam bahasa Indonesia.</p>
                        </div>
                        <div class="profile-content-container">
                            <b>Name</b>
                            <p>Marcel Newman</p>
                        </div>
                        <div class="profile-content-container">
                            <b>Location</b>
                            <p>Indonesia</p>
                        </div>
                        <div class="profile-content-container">
                            <b>Links</b>
                            <p><span class="fa fa-instagram"></span> @marcelnewman</p>
                            <p><span class="fa fa-facebook"></span> Marcel Newman</p>
                            <p><span class="fa fa-twitter"></span> @marcelnewman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="posting-container col-md-7 ">
            <div class="posting-nav-container">
                <div id="video-nav" class="posting-nav posting-nav-active">
                    Video
                </div>
                <div id="article-nav" class="posting-nav">
                    Article
                </div>
            </div>
            <div class="posting-content-nav-container" style="float:right; padding:5px; color:white;">
                    <span class="fa fa-trash-o"></span> Delete
            </div>
            <div class="posting-content-container">
                    <div class="posting-content">
                        <div class="content col-md-4 video">
                            <div class="content-overlay">
                                <div class="content-overlay-header active">
                                        How to tidy up your..
                                        <div class="round">
                                            <input type="checkbox" id="checkbox" />
                                            <label for="checkbox"></label>
                                        </div>
                                </div>

                                <div class="content-overlay-real hidden">
                                    <p>2Mins - 192M Views</p>
                                    <p>Hallo guys, today i want to share how to tidy up your room in 5 mins</p>
                                    <div class="content-overlay-edit">
                                        Edit
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="content col-md-4 video">
                                <div class="content-overlay">
                                    <div class="content-overlay-header active">
                                            How to tidy up your..
                                            <div class="round">
                                                <input type="checkbox" id="checkbox2" />
                                                <label for="checkbox2"></label>
                                            </div>
                                    </div>
    
                                    <div class="content-overlay-real hidden">
                                        <p>2Mins - 192M Views</p>
                                        <p>Hallo guys, today i want to share how to tidy up your room in 5 mins</p>
                                        <div class="content-overlay-edit">
                                            Edit
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="content col-md-4 video">
                                <div class="content-overlay">
                                    <div class="content-overlay-header active">
                                            How to tidy up your..
                                            <div class="round">
                                                <input type="checkbox" id="checkbox3" />
                                                <label for="checkbox3"></label>
                                            </div>
                                    </div>
    
                                    <div class="content-overlay-real hidden">
                                        <p>2Mins - 192M Views</p>
                                        <p>Hallo guys, today i want to share how to tidy up your room in 5 mins</p>
                                        <div class="content-overlay-edit">
                                            Edit
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <div class="content col-md-4 video">
                                <div class="content-overlay">
                                    <div class="content-overlay-header active">
                                            How to tidy up your..
                                            <div class="round">
                                                <input type="checkbox" id="checkbox4" />
                                                <label for="checkbox4"></label>
                                            </div>
                                    </div>
    
                                    <div class="content-overlay-real hidden">
                                        <p>2Mins - 192M Views</p>
                                        <p>Hallo guys, today i want to share how to tidy up your room in 5 mins</p>
                                        <div class="content-overlay-edit">
                                            Edit
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
            <div class="posting-content-footer">

            </div>
        </div>
    </div>
@endsection

@section('additional-styles')
    <style>
        .profile-links li a:hover{
            color:grey;
        }

        .display-none{
            display:none;
        }

        .posting-content-nav-container{
            cursor: pointer;
        }

        .content-overlay-edit:hover{
            border:1px solid #333844;
            color:#333844;
            background-color: rgba(255, 255, 255, 0.9);
            cursor: pointer;
        }

        .content-overlay-edit{
            bottom:3px;
            position:absolute;
            right:3px;
            border:1px solid white;
            float:right;
            padding:3px 20px;
        }

        .content-overlay-real{
            padding:3px;
            height: 80%;
            background-color:rgba(0,0,0,0.7);
        }

        .content-overlay-header{
            padding:3px;
            height: 20%;
            background-color:rgba(0,0,0,0.7);
        }

        .content-overlay{
            color:white;
            /* padding:3px; */
            /* padding-top:1%; */
            /* background-color:rgba(0,0,0,0.7); */
            height: 100%;
        }
        .content-overlay p{
            margin:0;
        }

        .content{
            padding:0;
            height:128px;
            background-image: url("{{ asset('img/tidy-house-2.jpg') }}");
            background-size:100%;
            background-repeat: round;   
            /* margin-left:0.%; */
            width: 31%;
            margin-right: 2%;
            margin-bottom: 2%;
            cursor: pointer;
        }
        .round{
            float:right;
            margin-top:3px;
        }

        .content-header{
            padding:3px;
            color:white;
            background-color:rgba(0,0,0,0.7)
        }

        .posting-content-container{
            background-color:#3f465d;
            padding:20px;
        }

        .posting-content{
            margin-top:25px;

        }

        .posting-nav-container{
            padding:0;
            background-color:#333844;
        }
        .posting-nav:hover{
            background-color: #1f2638;
            /* color:unset; */
        }

        .posting-nav{
            margin:0;
            display:inline-block;
            padding: 10px 20px;
            /* margin-right: 20px; */
            border-right:1px solid white;
            background-color:#333844;
            cursor: pointer;
            color:white;
        }

        .posting-nav-active{
            background-color: #1f2638; 
        }

        .posting-container{
            margin-left:5%;
            margin-top:7vh;
            padding:0;
            background-color: #3f465d;
        }

        .profile-header-background-img{
            height: 70%;
            background-image:url('{{ asset('img/portfolio/port06.jpg') }}');
            background-size:100%;
            position: relative;
            padding-top:20%;
        }

        .profile-header-hover{
            background-color: rgba(0,0,0,0.0); 
            color:white;
            /* margin-top:20%; */
            display:inline-block;
            float:right;
            padding:3px;
            padding-bottom: 0;
            margin-top:15px;
            cursor: pointer;
            border-radius: 2px;
        }

        .profile-header-links{
            background-color:#333844;
            height: 20%;
        }
        .profile-hover{
            height: 75.3px;
            width: 75.3px;
            font-size:0.9em;
            padding-top:50px;
            border-radius:50%;
            background-color: rgba(0,0,0,0.7); 
            color:white;
            text-align: center;
            margin-left:-1px;
            margin-top:-1px;
        }

        .profile-photo {
            display:inline-block;
            background-image: url('{{ asset('img/ui-sam.jpg') }}');
            background-size:100%;
            cursor: pointer;
            padding:0;
            margin-left:5px;
            border:3px solid #333844;
            height: 80px;
            width: 80px;
            border-radius: 50%;
            /* background-color:blue; */
            /* margin-top:20px; */
        }

        .profile-container{
            margin-top:7vh;
            background-color:#333844;
            padding:10px;
            color:white;
            border-radius: 2%;
        }
        .profile-header{
            /* margin-top:10vh; */
            height:23vh;
            /* background-color: blue; */
            padding:0;
        }
        .profile-content{
            height:50vh;
            background-color:
        }

        .profile-content-container{
            margin-top:5px;
        }

        .profile-content-container b{
            font-size:1.2em;
            font-weight: bolder;
        }

        .profile-content-container p{
            font-size:0.9em;
            font-weight: normal;
        }

        .profile-links{
            list-style: none;
        }

        .profile-header-links{
            border-bottom: 1px solid #797979;
        }

        .profile-links li{
            display:inline-block;
            float:right;
            margin-left:10px;
            font-size: 0.8em;
        }

        .profile-links li a{
            color:white;
            /* text-decoration: underline; */
        }
    </style>

    <style>

        .round {
        position: relative;
        }

        .round label {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 50%;
        cursor: pointer;
        height: 12px;
        left: 0;
        position: absolute;
        top: 0;
        width: 12px;
        }

        .round label:after {
        border: 2px solid #fff;
        border-top: none;
        border-right: none;
        content: "";
        height: 2px;
        left: 2px;
        opacity: 0;
        position: absolute;
        top: 3px;
        transform: rotate(-45deg);
        width: 6px;
        }

        .round input[type="checkbox"] {
        visibility: hidden;
        }

        .round input[type="checkbox"]:checked + label {
        background-color: grey;
        border-color:grey;
        }

        .round input[type="checkbox"]:checked + label:after {
        opacity: 1;
        }

    </style>
@endsection

@section('additional-scripts')
    <script>
        $("#video-nav").click(function(){
            $("#article-nav").removeClass("posting-nav-active");
            $(this).addClass("posting-nav-active");
        });

        $("#article-nav").click(function(){
            $("#video-nav").removeClass("posting-nav-active");
            $(this).addClass("posting-nav-active");
        });

        $(".content").hover(function(){
            $(this).children().find(".content-overlay-real").removeClass("hidden");
        });

        $(".content").mouseleave(function(){
            $(this).children().find(".content-overlay-real").addClass("hidden");
        });

        $(".profile-photo").hover(function(){
            $(".profile-hover").removeClass("hidden");
        });

        $(".profile-photo").mouseleave(function(){
            $(".profile-hover").addClass("hidden");
        });

        $(".profile-header-hover").hover(function(){
            $(this).css("background-color",'rgba(0,0,0,0.5)');
            $(".profile-header-hover span.text").removeClass("hidden");
        });

        $(".profile-header-hover").mouseleave(function(){
            $(this).css("background-color",'rgba(0,0,0,0.0)');
            $(".profile-header-hover span.text").addClass("hidden");
        });      
    </script>
@endsection