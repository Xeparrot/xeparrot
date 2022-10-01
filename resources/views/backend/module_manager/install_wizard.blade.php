@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <input type="hidden" value="{{$name}}" name="name" id="name">
    <input type="hidden" value="{{$author}}" name="name" id="author_name">
    <input type="hidden" value="{{$repo}}" name="name" id="repo">
    <div class="card">
        <div class="card-body">
            <!-- SmartWizard html -->

            <div id="smartwizard">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#step-1">
                            <div class="num">1</div>
                            Get Stared
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-2">
                            <span class="num">2</span>
                            License/Agreement
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#step-3">
                            <span class="num">3</span>
                            Install
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#step-4">
                            <span class="num">4</span>
                            Finish
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                        <div style="background: url('{{url('logo.png')}}');height: 310px;background-position: center;background-repeat: no-repeat;background-size: contain;margin-top: 90px;"></div>
                    </div>
                    <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                         <div id="" style="overflow:scroll; height:400px;padding: 10px">
                             <br>
                             <div style="text-align: left">
                                 @include('backend.module_manager.module_licenses.gnu_public')
                             </div>


                        </div>
                    </div>
                    <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                       <div class="container">

                       </div>
                    </div>
                    <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                       @include('backend.module_manager.module_wizard_partials.module_wizard_finish')
                    </div>
                </div>

                <!-- Include optional progressbar HTML -->
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>

    <script>

        function processBarRotate( percent ){
            var processBarHalfMove = '.processBarHalfMove';
            var processBarHalfLeft = '.processBarHalfLeft';
            var processBarHalfRight = '.processBarHalfRight';
            //
            //---按角度转动
            function barRotate( angle ){
                $(processBarHalfMove).css('transform', 'rotate(' + angle + 'deg)');
            }
            var angle = 3.6 * percent + 90;
            //小于50度，直接转到目标角度
            if ( percent <= 50 ){
                barRotate( angle );
            }
            //大于50度，则先转到一半，等事件结束
            else{
                var stopAtHalfAngle = 270;
                barRotate( stopAtHalfAngle );
                $(processBarHalfMove).one("webkitTransitionEnd", function(){ //监听动画结束时事件
                    barRotate( angle ); //完成剩余的角度
                    $(processBarHalfLeft).addClass('not-display');
                    $(processBarHalfRight).removeClass('not-display');
                });
            }
        }

        function percentNumAdd( num ){
            var span = '.processBarInner i span';
            //
            var cnt = 0;
            var timer = setInterval(function(){
                if ( cnt <= num ){
                    $(span).text( cnt ++ );
                }else{
                    clearInterval( timer );
                }
            }, 8 );
        }

        $(function(){
            processBarRotate( 87 );
            percentNumAdd( 87 );
        });
    </script>
@endsection
