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
                                <th >Employe Details</th>
                                <th ></th>
                                <th></th>
                            </tr>

            </table>
    <div class="row pl-5">
            <div class="card col-md-5" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{$employes->name}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$employes->number}}</h6>
                      <a  class="card-link">{{$employes->occupation}}</a>
                      <p class="card-text">{{$employes->bio}}</p>
                
                    </div>
            </div>
                          
    </div>

              </div>
            
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


