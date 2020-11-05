@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{ __('Dashboard') }} <a  class="btn btn-success" href="/{{$listings->id}}/createemployes">add employes</a></div>
                
                <div>

                <table class="table table-striped">
                        <tr class=" bg-dark text-white pl-5 ">
                                <th >Your Company</th>
                                <th ></th>
                                <th>Employes</th>
                            </tr>

            </table>
    <div class="row pl-5">
            <div class="card col-md-5" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{$listings->name}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$listings->phone}}</h6>
                      <a  class="card-link">{{$listings->address}}</a>
                    <p class="card-text">{{$listings->bio}}</p>
                      <a class="card-link">{{$listings->website}}</a>
                    </div>
            </div>
                            @if (count($employes))
                            <div class="card col-md-5 ml-5" style="width: 18rem;">
                                <div class="card-body">
                                @foreach ($employes as $item)                                
                                <a href="/Listings/{{$item->id}}/employesdetails"><h5 class="card-title">{{$item->name}}</h5></a>

                                @endforeach
                                </div>
                            </div>
            
                            @endif
    </div>

              </div>
            
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


