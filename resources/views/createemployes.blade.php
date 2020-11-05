@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  
                </div>

              <form class="p-1"method="get" action="/{{$id}}/storeemploye">
                        <div class="form-group">
                          <label for="exampleInputEmail1">name</label>
                          <input  name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        
                              <div class="form-group">
                                    <label for="exampleInputEmail1">number</label>
                                    <input  name="number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                               
                                  </div>
                                  <div class="form-group">
                                        <label for="exampleInputEmail1">occupation</label>
                                        <input name="occupation" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                   
                                      </div>
                                      <div class="form-group">
                                            <label for="exampleFormControlTextarea1">bio</label>
                                            <textarea  name="bio" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                          </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>

                
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
