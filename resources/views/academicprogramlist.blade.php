@extends('layout.master')
@section('headtitle')
    Academic program list
@endsection
@section('content')
 <div class="ui celled grid">
    <div class="wide column ">
      <div class="results">
      @if(count($ap)!=0)
        <div class="ui middle aligned animated list">
          @foreach($ap as $academic_program)
          <div class="item">
            <div class="content">
            <div class="header" style="color:white;">{{$academic_program->course_name}}</div>
            </div>
          </div>
          @endforeach
        </div>
      @else
      <label style="color:white"><h4>No Result</h4></label>
      @endif
      </div>
    </div>
  </div>
@endsection