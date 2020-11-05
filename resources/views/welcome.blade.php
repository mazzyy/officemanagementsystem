@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                
                <div>

                <table class="table table-striped">
                        <tr class=" bg-dark text-white pl-5 ">
                                <th >Registed users</th>
                                <th ></th>
                                <th>Created</th>
                            </tr>
                        
               @if (count($user))
               @foreach ($user as $item)
                    <tr>
                        <th><a href="/Listings/{{$item->id}}/show1">{{$item->name}}</a></th>
                        <th></th>
                        <th>{{$item->created_at}}</th>
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


