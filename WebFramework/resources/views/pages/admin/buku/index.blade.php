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
                                <h4 class="card-title">Data Buku</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID Buku</th>
                                                <th>Judul Buku</th>
                                                <th>Create at</th>
                                                <th>Update at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach($buku as $b)
                                            <tr>
                                                <td>{{ $b->id_buku }}</td>
                                                <td>{{ $b->judul_buku }}</td>
                                                <td>{{ $b->created_at }}</td>
                                                <td>{{ $b->updated_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID Buku</th>
                                                <th>Judul Buku</th>
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