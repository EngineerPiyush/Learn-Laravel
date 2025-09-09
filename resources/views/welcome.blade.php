<!-- <h1>Hello Laravel this is Piyush.</h1> -->
<a href="/home">Home Page</a><br>
<a href="/about/Piyush">About Page</a><br>
<a href="/test-url">Url generation Page</a><br>
<a href="{{URL::to('about',['piyush'])}}">About Page</a><br>
<a href="{{url()->to('test-url')}}">URL Generation Page</a><br>
<!-- name route example -->
<a href="{{route('url')}}">Url Generation Page</a>
<!-- include pages -->
@include('admin.header')
@include('admin.inner',['page'=>"This is Piyush and this information pssed from admin.inner"])