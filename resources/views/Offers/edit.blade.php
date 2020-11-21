<?php
      $lang=str_replace('_', '-', app()->getLocale());
      $dir=$lang=="en"? "ltr":"rtl";
      $align=$dir=='rtl'?'right':'left';
 ?>
<!DOCTYPE html>
<html lang="{{ $lang }}" dir="{{$dir}}">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">


    <!-- jQuery library -->
    <script src="/js/jquery-3.5.1.js"></script>


    <!-- Popper JS -->
    <script src="/js/popper-base.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    {{-- {{ str_replace('_', '-', app()->getLocale()) }} --}}


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">{{__('CreatePage.Navbar')}}</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            {{-- يعمل لوب ويطلع لك اللغات الي انته مفعلها مع اسمها ورابطها --}}
            <ul class="navbar-nav">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                <li class="nav-item active">
                    {{-- عند الظغط علئ الرابط حسب اللغه يحول الديفولت عندك فكل الي عملته باي لغه يتفعل --}}
                    <a class="nav-link"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}<span
                            class="sr-only">(current)</span></a>
                </li>
                @endforeach
            </ul>
        </div>
    </nav>

    <h1 style="text-align:center"> {{__('CreatePage.title')}} </h1>

    <form style="text-align:{{$align}}" class="container " action=" {{Route('update',$offer->id ?? '')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group w-50 ">
            <label for="name">{{__('CreatePage.Name')}}:</label>
            <input value ='{{$offer->name}}' type="text" class="form-control" placeholder="{{__('CreatePage.PHName')}}" id="name" name="name">
            {{-- //validation --}}
            @error('name')
            <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group w-50">
            <label for="price">{{__('CreatePage.Price')}}</label>
            <input value ='{{$offer->price}}' type="text" class="form-control" placeholder="{{__('CreatePage.PHPrice')}}" id="price" name="price">
            {{-- //validation --}}
            @error('price')
            {{-- //message without (s) is attrbute in @error --}}
            <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class=" w-50 form-group >
            <label for=" details">{{__('CreatePage.Details')}}</label>
            <input value ='{{$offer->details}}' type="text" class="form-control" placeholder="{{__('CreatePage.PHDetails')}}"" id=" details"
                name="details">
            {{-- //validation --}}
            @error('details')
            <small class="form-text text-danger">{{$message}}</small>
            @enderror
        </div>

<div class="form-group w-50">
    <label for="Image">{{__('CreatePage.image')}}</label>
    <input type="file" class="form-control" " id=" image" name="image">
    {{-- //validation --}}
    @error('image')
    {{-- //message without (s) is attrbute in @error --}}
    <small class="form-text text-danger">{{$message}}</small>
    @enderror
</div>

        <button type="submit" class="btn btn-primary text-align-center">{{__('CreatePage.Submit')}}</button>

    </form>
    {{-- <h3> {{ $mess ?? '' }} </h3> هنا معناه اختياري --}}
    @if( session()->has('succ') )
    <div class="alert alert-success w-25 text-center container" role="alert">
        <h4 class="alert-heading">{{session()->get('succ')}} </h4>
        <p></p>
        <p class="mb-0"></p>
    </div>
    @endif



</body>

</html>
