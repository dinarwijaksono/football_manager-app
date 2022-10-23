@extends('templates/main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Klub</h1>
    <ol class="breadcrumb">
        <!-- <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li> -->
        <li class="active">Klub</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">

        <div class="col-xs-4">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>150</h3>
                    <p>Tim</p>
                </div>
                <div class="icon">
                    <!-- <i class="ion ion-bag"></i> -->
                </div>
                <a href="/Club/tim" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->

        <div class="col-xs-4">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>150</h3>
                    <p>Tim</p>
                </div>
                <div class="icon">
                    <!-- <i class="ion ion-bag"></i> -->
                </div>
                <a href="/Club/tim" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->

        <div class="col-xs-4">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>150</h3>
                    <p>Tim</p>
                </div>
                <div class="icon">
                    <!-- <i class="ion ion-bag"></i> -->
                </div>
                <a href="/Club" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div><!-- ./col -->

    </div>

</section><!-- /.content -->
@endsection