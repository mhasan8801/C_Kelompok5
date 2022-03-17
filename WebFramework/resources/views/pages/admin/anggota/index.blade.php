@extends('layouts.admin')
@section('content')
    
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Anggota</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Id Anggota</th>
                                                <th>Nama</th>
                                                <th>Create at</th>
                                                <th>Update at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($anggota as $a)
                                            <tr>
                                                <td>{{ $a->id_anggota }}</td>
                                                <td>{{ $a->nama_anggota }}</td>
                                                <td>{{ $a->created_at }}</td>
                                                <td>{{ $a->updated_at }}</td>
                                            </tr>
                                            @endforeach
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id Anggota</th>
                                                <th>Nama</th>
                                                <th>Create at</th>
                                                <th>Update at</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
@endsection