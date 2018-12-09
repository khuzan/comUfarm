@extends('master.main')

@section('title','Dashboard')

@section('content')

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    @foreach($datas as $data)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">{{$data->firstname.' '.$data->lastname}}</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth" align="center">
                                    <img src="/images/{{$data->image}}" width="200" height="200">
                                </div>
                                    {{$data->post_desc}}
                                <div class="footer">
                                    <div class="chart-legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Bounce
                                        <i class="fa fa-circle text-warning"></i> Unsubscribe
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        {{-- <i class="ti-timer"></i> Campaign sent 2 days ago  --}}
                                        <i class="ti-timer"></i> Posted on {{$data->created_at}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>
        
</div>
@endsection


