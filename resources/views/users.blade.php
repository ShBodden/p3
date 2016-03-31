@extends('master')

@section('title')
    User Generator
@stop


@section('content')

    <h2>
Please select the number of users you wish to have generated. Enjoy!
    </h2>
    <form method='POST' action='/users'>
    {{ csrf_field() }}
    <input type='text' name='users'>
    <input type='submit' value='Submit'>
    </form>

          <ul class= 'errors'>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
<div class="data">
  @foreach ($data as $value)

           {{$value['name']}}
           <br>
           {{$value['phone']}}
           {{$value['email']}}
           <br>
           {{$value['profile']}}
           <br><br>

       @endforeach
</div>
@stop
