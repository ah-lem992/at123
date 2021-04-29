@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <br/>
            <h1>Les années </h1>
            <div class="pull-center">
                <a href="{{ url('promo/create') }}" class="btn btn-success"> nouvelle année</a>
            </div>
            <table class="table">
                <head>
                   <tr>
                       <th>Année </th>
                       <th>date </th>
                       <th>action</th>
                   </tr>
                </head>

                <body>
                    @foreach($promos as $promo)
                <tr>
                            <td>{{$promo ->annee}}  <br>
                            <td>{{$promo ->created_at}}</td>
                            <td>
                                <form action="{{ url('promo/'.$promo->id ) }} " method="post ">

                                <a href="{{ url('promo/' .$promo->id. '/edit') }}" class="btn btn-default">editer</a>
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger">Delete</button>

                                    </form>




                            </td>
                 </tr>
                     @endforeach

                </body>
            </table>



        </div>
    </div>
</div>


@endsection
