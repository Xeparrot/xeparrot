<div class="container">
    <div class="">
        <div class="" style="height:100px;background-image: url('{{url('migration.png')}}');background-repeat: no-repeat;background-position: center;background-size: contain;margin-top: 60px;margin-bottom: 10px;">

        </div>
        <div style="text-align: center">
            <form action="{{route('admin.module.migration')}}" method="post">
                {{csrf_field()}}
                <h3 style="text-align: center">Plugin Install Success</h3>
                <h4 style="text-align: center">But you should refresh database with migration</h4><br>
                <button type="submit" class="btn btn-primary">Finish and Migrate DB</button>
            </form>

        </div>

    </div>
</div>