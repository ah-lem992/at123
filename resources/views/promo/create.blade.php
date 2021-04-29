@extends('layouts.master')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">

            <form  action="{{url('promo')}}" method="post" > 
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label >Année :</label>
                    <input type="text" name="annee" class="form-control">
                   
                       
                </div>
                   <br/>
                   <div class="form-group">
            
                    <input type="submit"  class="form-control btn btn-primary" value="Enregistrer ">
                </div>
            </form>
        </div>
    </div>
</div>




@endsection