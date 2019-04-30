<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.metadata')
    <title>Document</title>
    @include('template.style')
</head>
<body>
    @include('template.navbar')
    @include('template.sidebar')
    <section id="main-content">
        <section class="wrapper site-min-height">
            @section('main')
      </section><!-- /wrapper -->
    </section><!-- /MAIN CONTENT -->
</body>
    @include('template.javascript')
</html>