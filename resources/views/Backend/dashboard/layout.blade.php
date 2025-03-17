<!DOCTYPE html>
<html>

<head>
    <base href="http://localhost/learnlaravel.com/public/">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Dashboard v.2</title>

    <link href="backend-style/css/bootstrap.min.css" rel="stylesheet">
    <link href="backend-style/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="backend-style/css/animate.css" rel="stylesheet">
    <link href="backend-style/css/style.css" rel="stylesheet">
    <link href="backend-style/css/custom.css" rel="stylesheet"> 
    {{-- <script src="vendor/flasher/flash.min.js"></script> --}}
    @if(isset($config['css']) && is_array($config['css']))
    
        @foreach($config['css'] as $key => $value)
            {!! '<link href="'.$value.'" rel="stylesheet"></link>' !!}
        @endforeach

    @endif
    <script src="backend-style/js/jquery-3.1.1.min.js"></script>


</head>

<body>
    <div id="wrapper">
        
        {{-- SIDEBAR --}}
        @include('backend.dashboard.component.sidebar')

        <div id="page-wrapper" class="gray-bg">
            {{-- NAVBAR --}}
            @include('backend.dashboard.component.navbar')
            
            <div class="wrapper wrapper-content">
            
                @include($template)


                {{-- FOOTER DASHBOARD --}}
                @include('backend.dashboard.component.footer')
                
            </div>
        </div>
    </div>

    @include('backend.dashboard.component.script')
</body>
</html>
