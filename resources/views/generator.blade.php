@extends('master')

@section('title')
    Lorem Ipsum
@stop




@section('content')
<h2>
Please select the number of paragraphs you wish to have generated. Enjoy!
</h2>
  <form method='POST' action='/paragraph'>
  {{ csrf_field() }}
  <input type='text' name='paragraphs'>
  <input type='submit' value='Submit'>
  </form>

  <ul class= 'errors'>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

<br>


<div>
  @foreach ($paragraphs as $value)
{{$value}}<br><br>
@endforeach
</div>
@stop
