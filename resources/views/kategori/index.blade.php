@extends('layout.index')

@section('content')
<body class="app sidebar-mini rtl">
    <div class="page">
        <div class="page-main">
            <!-- Row -->
            <div class="app-content toggle-content">
                <div class="side-app"> 
                    <div class="page-header">
                        <h1 class="page-title">Data Tables</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Add
                                        </button>
                                    </div>
                                    <div class="card-options">
                                        <a href="#" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                            <span class="fe fe-more-horizontal fs-20"></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                            <li><a href="#"><i class="fe fe-eye mr-2"></i>View</a></li>
                                            <li><a href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a></li>
                                            <li><a href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a></li>
                                            <li><a href="#"><i class="fe fe-download-cloud mr-2"></i>Download</a></li>
                                            <li><a href="#"><i class="fe fe-settings mr-2"></i>More</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" style="text-align: center" class="table table-striped text-nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p">#</th>
                                                    <th class="wd-15p">Nama Kategori</th>
                                                    <th class="wd-20p">Foto</th>
                                                    <th class="wd-25p">Action</th>
                                                </tr>
                                            </thead>
                                            <?php $p=1 ?>
                                            @foreach ($kategori as $item)
                                            <tbody>
                                                <tr>
                                                    <th>{{$p++}}</th>
                                                    <td>{{$item->namakategori}}</td>
                                                    <td><img src="{{asset('storage/' . $item->img)}}" width="50px" alt=""></td>
                                                    <td>
                                                        <a href="/kategori/{{$item->id}}" class="btn btn-success" data-toggle="modal" data-target="#update{{$p}}">Edit</a>
                                                        <form action="/kategori/{{$item->id}}" method="post" class="d-inline">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="btn btn-danger" onclick="return confirm('Yakin?')">Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!-- Modal update -->
                                            <div class="modal fade" id="update{{$p}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="/kategori/{{$item->id}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('put')
                                                            <div class="mb-3">
                                                                <label for="exampleInputEmail1" class="form-label">Nama Kategori</label>
                                                                <input type="text" class="form-control @error ('namakategori') is-invalid @enderror " id="exampleInputEmail1" value="{{$item->namakategori}}" name="namakategori">
                                                                @error('namakategori')
                                                                <div class="invalid-feedback">
                                                                    Nama kategori tidak boleh kosong
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleInputPassword1" class="form-label">Foto</label>
                                                                <input type="file" class="form-control @error ('img') is-invalid @enderror" id="exampleInputPassword1" name="img" value="{{$item->img}}"><br>
                                                                <img src="{{asset('storage/' . $item->img)}}" width="50px" alt="">
                                                                @error('namakategori')
                                                                <div class="invalid-feedback">
                                                                    Foto kategori tidak boleh kosong
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 </div>
</body>
@endsection
<!-- Modal tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="/kategori/store" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="namakategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control @error ('namakategori') is-invalid @enderror" id="namakategori" name="namakategori">
                        @error('namakategori')
                        <div class="invalid-feedback">
                            Nama kategori tidak boleh kosong
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Foto</label>
                        <input type="file" class="form-control @error ('img') is-invalid @enderror" id="img" name="img">
                        @error('img')
                        <div class="invalid-feedback">
                            Foto kategori tidak boleh kosong
                        </div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>