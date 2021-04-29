@extends('layouts.master')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">

            <form  action="{{url('teacher')}}" method="post" > 
                {{ csrf_field() }}
               
                
                <div class="form-group">
                    <label >Nom :</label>
                    <input type="text" name="nom" class="form-control">
                   
                       
                </div>
                   <div class="form-group">
                    <label >Grade :</label>
                    <input type="text" name="grade" class="form-control" ></input>
            
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