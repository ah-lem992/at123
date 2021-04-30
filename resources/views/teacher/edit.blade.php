
@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <br/>

            <form  action="{{url('prof/'.$prof->id)}}" method="post"  >

                {{ csrf_field() }}
               <input type="hidden" name="_method" value="PUT">
                <br/>
                <div class="form-group">
                    <label for="">Nom </label>
                    <input type="text" name="nom" class="form-control" value="{{$prof-> nom}}" value="{{ old('nom') }}">
                </div>
                <br/>
                <div class="form-group">
                    <label for="">Grade </label>
                    <input type="text" name="grade" class="form-control" value="{{$prof-> grade}}" value="{{ old('grade') }}">
                </div>

                   <div class="form-group">

                    <input type="submit"  class="form-control btn btn-primary" value="modifier  ">
                </div>
            </form>
        </div>
    </div>
</div>




@endsection
