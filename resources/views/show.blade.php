@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
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
                        <th></th>
                    <th></th>
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


