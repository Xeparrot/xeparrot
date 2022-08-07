@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-5 col-sm-3">
                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                        <a style="border-style: none;border-radius: 0px 10px 22px 0px;color: #5c5c5c;font-weight: 500;" class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">General</a>
                        <a style="border-style: none;border-radius: 0px 10px 22px 0px;color: #5c5c5c;font-weight: 500;" class="nav-link" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-theme" role="tab" aria-controls="vert-tabs-theme" aria-selected="true">Theme and Style</a>

                        @foreach(\App\Services\SettingsEngineService::getSettingsCategies() as $categies)
                            <a style="border-style: none;border-radius: 0px 10px 22px 0px;color: #5c5c5c;font-weight: 500;" class="nav-link" id="vert-tabs-{{slugify($categies->settings_category)}}-tab" data-toggle="pill" href="#vert-tabs-{{slugify($categies->settings_category)}}" role="tab" aria-controls="vert-tabs-{{slugify($categies->settings_category)}}" aria-selected="true">{{$categies->settings_category}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-7 col-sm-9">
                    <div class="tab-content" id="vert-tabs-tabContent">

                            @foreach(\App\Services\SettingsEngineService::getSettingsCategies() as $categies)
                                <div class="tab-pane fade" id="vert-tabs-{{slugify($categies->settings_category)}}" role="tabpanel" aria-labelledby="vert-tabs-{{slugify($categies->settings_category)}}-tab">
                                    <form action="{{route('admin.settings.store')}}" method="post">
                                        {{csrf_field()}}
                                        <h2>{{$categies->settings_category}}</h2>
                                             {!! getSettingPage($categies->settings_category) !!}
                                        <br>
                                            <button type="submit" class="btn btn-primary">Save Settings</button>
                                    </form>
                                </div>
                            @endforeach




                        <div class="tab-pane text-left fade active show" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                            <h2>General</h2>
                            <form action="{{route('admin.settings.store')}}" method="post">
                                {{csrf_field()}}
                                {!! getSettingPage('General') !!}
                                <br>
                                <button type="submit" class="btn btn-primary">Save Settings</button>
                            </form>
                            <br>
                        </div>


                         <div class="tab-pane text-left fade active" id="vert-tabs-theme" role="tabpanel" aria-labelledby="vert-tabs-theme-tab">
                            <h2>General</h2>
                               <form action="{{route('admin.settings.store')}}" method="post">
                                   {{csrf_field()}}
                                   <label>Theme</label><br>
                                   <small>Select Default Theme:</small><br>
                                   <select class="form-control" name="default_theme">
                                       @foreach(\App\Services\ThemeService::getThemeList() as $themeServiceItem)
                                            <option value="{{$themeServiceItem}}">{{$themeServiceItem}}</option>
                                       @endforeach
                                   </select>

                                <br>
                                <button type="submit" class="btn btn-primary">Save Settings</button>
                               </form>
                            <br>
                         </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
