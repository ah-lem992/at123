@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <br/>

            <form  action="{{url('promo/'.$promo->id)}}" method="post"  >
                
                {{ csrf_field() }}
               <input type="hidden" name="_method" value="PUT">
                <br/>
                <div class="form-group">
                    <label for="">Année </label>
                    <input type="text" name="annee" class="form-control" value="{{$promo-> annee}}" value="{{ old('annee') }}">
                </div>
                <br/>
                   
                   <div class="form-group">
            
                    <input type="submit"  class="form-control btn btn-primary" value="modifier  ">
                </div>
            </form>
        </div>
    </div>
</div>




@endsection