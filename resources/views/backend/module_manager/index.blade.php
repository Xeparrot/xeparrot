@extends('backend.layouts.app')

@section('title', __('Module Explorer'))

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                @foreach($module_explorer as $moduleItem)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{route('admin.module.download')}}">
                                {{csrf_field()}}
                                <h4>{{$moduleItem->name}}</h4>
                                <small>{{$moduleItem->description}}</small><br><br>
                                <input type="hidden" name="module_repo" value="{{$moduleItem->repo}}">
                                <input type="hidden" name="module_author" value="{{$moduleItem->author}}">
                                <input type="hidden" name="module_name" value="{{$moduleItem->name}}">

                                @if(Module::find($moduleItem->name))
                                    <input type="hidden" name="install_status" value="uninstall">
                                    <button type="submit" class="btn btn-danger btn-sm">Uninstall</button>
                                @else
                                    @if(config('app.developer_mode') == true)
                                        <input type="hidden" name="install_status" value="install">
                                        <button type="submit" class="btn btn-primary btn-sm" disabled>Download</button>
                                    @else
                                        <input type="hidden" name="install_status" value="install">
                                        <button type="submit" class="btn btn-primary btn-sm">Download</button>
                                    @endif

                                @endif

                                <a href="#" class="btn btn-primarybtn btn-secondary btn-sm" style="background: #09326e"aut>Documentation</a>
                                <a href="{{route('admin.module.migration')}}" class="btn btn-secondary btn-sm" style="background: #09326e">DB Update</a>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
