<!-- Disimpan di resources/views/layouts/app.blade.php -->
<html>
<head>
 <title> Halaman @yield('title')</title>
</head>
<body>
 @section('sidebar')
 <ul>
     <li><a href="{{route('home')}}">{{('Home')}}</a></li>
     <li>Category
         <ul>
             <li><a href="{{route('product')}}">{{('Product')}}</a></li>
             <li><a href="{{route('books')}}">{{('Books')}}</a></li>
         </ul>
     </li>
     <li><a href="{{route('news','technology')}}">{{('News')}}</a></li>
     <li>Program
        <ul>
            <li><a href="{{route('karir')}}">{{('Karir')}}</a></li>
            <li><a href="{{route('magang')}}">{{('Magang')}}</a></li>
            <li><a href="{{route('kunjunganIndustri')}}">{{('Kunjungan Industri')}}</a></li>
        </ul>
     </li>
     <li><a href="{{route('aboutUs')}}">{{('About Us')}}</a></li>
     <li><a href="{{route('contactUs')}}">{{('Contact Us')}}</a></li>
 </ul>
 @show
 <div class="container">
 @yield('content')
 </div>
</body>
</html>
