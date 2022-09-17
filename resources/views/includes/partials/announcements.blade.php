@if(config('app.developer_mode') == true)
    <div style="background-color: #cf8e02;padding-left: 41px;padding-top: 6px;padding-bottom: 6px;color: white;">
        XeParrot developer mode enabled, Module manager disabled
    </div>
@else
    @if($announcements->count())
        @foreach($announcements as $announcement)
            <x-utils.alert :type="$announcement->type" :dismissable="false" class="pt-1 pb-1 mb-0">
                {{ (new \Illuminate\Support\HtmlString($announcement->message)) }}
            </x-utils.alert>
        @endforeach
    @endif
@endif
