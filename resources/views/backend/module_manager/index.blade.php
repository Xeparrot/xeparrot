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

                                @if(Module::find($moduleItem->name))
                                    <input type="hidden" name="install_status" value="uninstall">
                                    <button type="submit" class="btn btn-primary">Uninstall</button>
                                @else
                                    <input type="hidden" name="install_status" value="install">
                                    <button type="submit" class="btn btn-primary">Download</button>
                                @endif
                                
                                <a href="#" class="btn btn-primary">Documentation</a>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
