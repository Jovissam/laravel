<h3>My name is {{ $name }} {{ $surname }}</h3>

<p>{!! $globalVariable !!}</p> 

@include('shared.alert', ['color' => 'yellow', 'message' => 'submit'])