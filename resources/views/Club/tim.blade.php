@extends('templates/main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Klub</h1>
    <ol class="breadcrumb">
        <li><a href="/Club">Klub</a></li>
        <li class="active">Tim</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Daftar pemain</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Umur</th>
                            <th class="text-center">Kontak berakahir</th>
                            <th class="text-center">Posisi</th>
                            <th class="text-center">Keahlian</th>
                            <th class="text-center">Gaji</th>
                        </tr>

                        <tbody>

                            <?php $index = 1; ?>
                            @foreach ($listPlayers as $player)
                            <tr>
                                <td class="text-center">{{ $index ++ }}</td>
                                <td><a href="">{{ $player['name'] }}</a></td>
                                <td class="text-center">{{ $player['age'] }}</td>
                                <td class="text-center">{{ $player['end_contract'] }}</td>
                                <td class="text-center"><span class="badge bg-light-blue">{{ $player['position'] }}</span></td>
                                <td class="text-center">77</td>
                                <td class="text-right"><?= number_format($player['salary']) ?></td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

</section><!-- /.content -->
@endsection