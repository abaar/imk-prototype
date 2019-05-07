<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.metadata')
    <title>Document</title>
    @include('template.style')
    @yield('additional-styles')
</head>
<body>
    @include('template.navbar')
    @include('template.sidebar')
    <section id="main-content">
        <div class="overlay">
        </div>
        <section class="wrapper site-min-height"> 
            @yield('main')
        </section><!-- /wrapper -->
    </section><!-- /MAIN CONTENT -->
    @include('template.footer')
</body>
    @include('template.javascript')
    
<script>
    $(document).ready(function(){
        $('#main-content').css({
                'margin-left': '0px'
            });
        $('#sidebar > ul').addClass("hidden");
        $("#container").addClass("sidebar-closed");
    });

    function redirect(to){
        // alert(to);
        location.href=to;
    }
</script>

    @yield('additional-scripts')
</html>