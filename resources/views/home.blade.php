@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}<a  class="btn btn-success" href="/Listings/create">create</a></div>
                
                <div>

                <table class="table table-striped">
                        <tr class=" bg-dark text-white pl-5 ">
                                <th >Your Company</th>
                                <th ></th>
                                <th></th>
                            </tr>
                        
               @if (count($listings))
               @foreach ($listings as $item)
                    <tr>
                        <th><a href="/Listings/{{$item->id}}/fulldata">{{$item->name}}</a></th>
                        <th><a href="Listings/{{$item->id}}/edit">Edit</a></th>
                    <th><a class="confirmation" onclick="myFunction()" role="alert" href="Listings/{{$item->id}}/destroy1">Delete</a></th>
                    </tr>

              
              
                   
               @endforeach
                   
               @endif
           
           
            </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function myFunction(){
        alert('deleted');
    }
   
</script>
