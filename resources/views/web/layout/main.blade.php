@include('web.layout.head')

<body >
    <style>
        .blog-img{
        height: 100px !important;
        }
        </style>
@include('web.layout.header')





@yield('content')






@include('web.layout.footer')
@include('web.layout.footerScript')
