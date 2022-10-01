@extends('backend.layouts.app')

@section('title', __('Module Explorer'))

@section('content')
    {{$loader=true}}
    <div class="card">
        <div class="card-body">
            <div class="swiper mySwiper" style="height: 300px">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url('{{url('img/sliders/1.jpg')}}');height: 380px;background-size: cover;background-repeat: no-repeat;background-position: center;">
                        <div style=""></div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('{{url('img/sliders/2.webp')}}');height: 380px;background-size: cover;background-repeat: no-repeat;background-position: center;">Slide 2</div>
                    <div class="swiper-slide" style="background-image: url('{{url('img/sliders/3.jpg')}}');height: 380px;background-size: cover;background-repeat: no-repeat;background-position: center;">Slide 3</div>
                   
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- SmartWizard html -->
        </div>
    </div>

    <div class="card">
        <div class="card-body">



            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                        renderBullet: function (index, className) {
                            return '<span class="' + className + '">' + (index + 1) + "</span>";
                        },
                    },
                });
            </script>


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
                                        <a href="{{route('admin.module.install',['git',$moduleItem->author,$moduleItem->name,'install'])}}" class="btn btn-primary btn-sm">Download</a>
                                    @endif

                                @endif

                                <a href="#" class="btn btn-primarybtn btn-secondary btn-sm" style="background: #09326e"aut>Documentation</a>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
