@extends('layout.master')
@section('headtitle')
    Search
@endsection
@section('content')
<section class="section-padding" style="background-color:#008080;min-height:400px">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <form action="{{url('/getdata')}}" method="POST" >
                    {{csrf_field()}}
                            <div class="form-group">
                                <div class="col-md-4">
                                    <select class="form-control">
                                        <option value="Mathematics">Mathematics</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="col-md-8">
                            <input type="text"  name="keyword" placeholder="keyword" class="form-control" required="required">
                            </div>
                            <div class="col-md-4">
                            <button type="submit" class="button white">Submit</button>    
                            </div>
                            </div>         
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="box">
                        <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <td scope="col">#</td>
                            <td scope="col">FACULTY NAME</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection