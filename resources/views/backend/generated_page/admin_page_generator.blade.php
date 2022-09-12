@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{$formURL}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="row">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-5 col-sm-3">
                                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                        @foreach($formData as $categriesItem)
                                            <a style="border-style: none;border-radius: 0px 10px 22px 0px;color: #5c5c5c;font-weight: 500;" class="nav-link" id="vert-tabs-{{str_replace(' ','',$categriesItem['category'])}}-tab" data-toggle="pill" href="#vert-tabs-{{str_replace(' ','',$categriesItem['category'])}}" role="tab" aria-controls="vert-tabs-{{str_replace(' ','',$categriesItem['category'])}}" aria-selected="true">{{$categriesItem['category']}}</a>
                                        @endforeach
                                        {{--<a style="border-style: none;border-radius: 0px 10px 22px 0px;color: #5c5c5c;font-weight: 500;" class="nav-link" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-theme" role="tab" aria-controls="vert-tabs-theme" aria-selected="false">Theme and Style</a>--}}
                                    </div>
                                </div>
                                <div class="col-7 col-sm-9">
                                    <div class="tab-content" id="vert-tabs-tabContent">
                                        @foreach($formData as $key => $categriesItem)
                                            @if($key == 0)
                                                <div class="tab-pane text-left fade active show" id="vert-tabs-{{str_replace(' ','',$categriesItem['category'])}}" role="tabpanel" aria-labelledby="vert-tabs-{{str_replace(' ','',$categriesItem['category'])}}-tab">
                                                    <h2>{{$categriesItem['category']}}</h2><br>
                                                    {!! $categriesItem['html_content'] !!}
                                                </div>
                                            @else
                                                <div class="tab-pane text-left fade" id="vert-tabs-{{str_replace(' ','',$categriesItem['category'])}}" role="tabpanel" aria-labelledby="vert-tabs-{{str_replace(' ','',$categriesItem['category'])}}-tab">
                                                    <h2>{{$categriesItem['category']}}</h2><br>
                                                    {!! $categriesItem['html_content'] !!}
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary">Save Settings</button>
            </form>
        </div>
    </div>



@endsection
