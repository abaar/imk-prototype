@extends('template.index')
@section('main')

    <div class="filter-wrapper">
        
            <div class="filter-header">
                <h4 id="filter-close-title" class="filter-header-title">Filter</h4>
                <div class="pull-right">
                    <h4><span id="filter-close-trigger" class="fa fa-times"></span></h4>
                    <p class="filter-closed-text">F</p>
                    <p class="filter-closed-text">I</p>
                    <p class="filter-closed-text">L</p>
                    <p class="filter-closed-text">T</p>
                    <p class="filter-closed-text">E</p>
                    <p class="filter-closed-text">R</p>
                </div>
            </div>
            <div id="filter">
            <div class="filter-content">
                <div class="content-of-filters row">
                        <h5><span>Tipe</span></h5>
                        <ul style="padding-left:0">
                            <li class="col-md-5 filter-option left"><span>Video</span></li>
                            <li class="col-md-5 filter-option right"><span>Artikel</span></li>
                        </ul>
                    </div>
                <div class="content-of-filters row video">
                    <h5><span>Kualitas</span></h5>
                    <ul style="padding-left:0">
                        <li class="col-md-5 filter-option left"><span>>360P</span></li>
                        <li class="col-md-5 filter-option  right"><span>360P</span></li>
                        <li class="col-md-5 filter-option left"><span>720P</span></li>
                        <li class="col-md-5 filter-option right"><span>>720P</span></li>
                    </ul>
                </div>
                <div class="content-of-filters row video">
                    <h5><span>Durasi (menit)</span></h5>
                    <ul style="padding-left:0">
                        <li class="col-md-5 filter-option left"><span>>5</span></li>
                        <li class="col-md-5 filter-option right"><span>5-10</span></li>
                        <li class="col-md-5 filter-option left"><span>>10</span></li>
                    </ul>
                </div>
                <div class="content-of-filters row tag">
                    <h5 class="tag-title"><span>Tag</span></h5>
                        <select class="chosen-select" multiple="multiple">
                            <option value="">Ruang Sempit</option>
                            <option value="">Lemari</option>
                            <option value="">Ruang luas</option>
                        </select>
                </div>
                <div class="content-of-filters row tag" style="margin-top:30px">
                        <button class="btn col-md-11 btn-filter" >FILTER</button>
                    </div>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
        <div id="content">

        </div>
    </div>

@endsection

@section('additional-styles')
    <style>
        .btn-filter{
            background-color: #333844;
            color: white;
            border: 1px solid #232329;
        }

        .btn-filter:hover{
            background-color: #0f1629;
            color: white;
            border: 1px solid #232329;            
        }

        .filter-header{
            /* border-bottom: 1px solid white */
        }

        .filter-header-title{
            display:inline-block;
        }

        .filter-content{
            padding-left:20px;
        }

        .right, .left{
            margin-left:7px;
        }
        .filter-option{
            padding-top:5px;
            padding-bottom:5px;
            border:1px solid white;
            border-radius:5px;
            margin-top:5px;
            background-color:#6c717f;
        }

        .filter-option:hover{
            background-color: #333844;
            color:white;
            cursor:pointer;
            border:1px solid grey;
        }

        .opt-selected{
            background-color: #333844;
            color:white;
            cursor:pointer;
            border:1px solid grey;
        }

        .content-of-filters{
            margin-top:10px;
        }

        .filter-wrapper{
            color:white;
            padding-left: 10px;
            padding-right:10px;
            /* background-color:white; */
            margin-top:20px;
            height: 80vh;
            width: 15%;
            border-right: 1px solid white;
        }

        #filter-close-trigger{
            cursor: pointer;
        }

        .select2-multiple-results .select2-multiple-highlighted {
            background: red;
            color: #fff;
        }

        .tag{
            color:black;
        }
        
        .tag-title{
            color:white;
        }

        .filter-closed-text{
            width: 100%;
            display:none;
            font-size:1.2em;
        }

    </style>
@endsection

@section('additional-scripts')
    <script>
         $("#filter-close-trigger").click(function(){
            if($("#filter").hasClass("hidden")){
                $(".filter-wrapper").css("width","15%").css("background-color","unset");
                $("#filter").removeClass("hidden");
                $("#filter-close-title").removeClass("hidden")
                $(this).removeClass("fa-chevron-right").addClass("fa-times");
                $(".filter-closed-text").css("display","none");
            }else{
                $("#filter").addClass("hidden");
                $(".filter-wrapper").css("width","3%").css("background-color","#333844");
                $("#filter-close-title").addClass("hidden");
                $(this).removeClass("fa-times").addClass("fa-chevron-right");
                $(".filter-closed-text").css("display","block");
            }
         });

         $(".chosen-select").select2({width: "92%"}); 

         $(".filter-option").click(function(){
            if($(this).hasClass("opt-selected"))
            {
                $(this).removeClass("opt-selected");
            }else{
                $(this).addClass("opt-selected");
            }

         });

    </script>
@endsection