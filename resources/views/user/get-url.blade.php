<!-- http://localhost:8000/test-url  for this kind below method will be used -->
<h3>{{URL::current()}}</h3>
<!-- <h3>{{url()->current()}}</h3> -->

<!-- http://localhost:8000/test-url?piyush  for this kind below method will be used -->
<!-- <h3>{{URL::full()}}</h3> -->
<h3>{{url()->full()}}</h3> 

<!-- getting previous url  -->
<h3>{{URL::previous()}}</h3>
<!-- <h3>{{url()->previous()}}</h3> -->