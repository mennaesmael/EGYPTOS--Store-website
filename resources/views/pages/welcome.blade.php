 {{-- start The layout and  the nav bar --}}
@extends('layout.master')
{{-- edit the title  --}}
@section('title','Home')



{{-- start main content and header --}}

@section('content')

<h1 class="main-h1">discover <br> and buy <br> new posters</h1>


<div class="ellipse1"></div>

<div>
    <img src="{{URL::asset('/image/Untitled-1.jpg')}}" alt="profile Pic" class="png-hero1" >

</div>


<button class="herobutton"> <a href="#" class="buttontext">buy now</a></button>

    
@endsection

{{-- end main content and header --}}



    </body>
</html>
