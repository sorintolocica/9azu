@extends('layouts.admin')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Panoul de control</h1>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Categorii anime</h4>
                    </div>
                    <div class="card-body">
                        12
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-book-open"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Numarul de episoade</h4>
                    </div>
                    <div class="card-body">
                        122
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Toți utilizatorii</h4>
                    </div>
                    <div class="card-body">
                        45
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="section-header">
            <h1>Postări</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                    <tr>
                                        <th>Ordinea</th>
                                        <th>Denumirea</th>
                                        <th>Categoria</th>
                                        <th>Actiuni</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>My Home Hero - Episodul 1</td>
                                        <td>My Home Hero</td>
                                        <td class="pt_10 pb_10">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Detalii</button>
                                            <a href="" class="btn btn-danger" onClick="return confirm('Are you sure?');">Sterge</a>
                                        </td>
                                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Detail</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Item Name</label></div>
                                                            <div class="col-md-8">Laptop</div>
                                                        </div>
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Description</label></div>
                                                            <div class="col-md-8">This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Headphone</td>
                                        <td>$40</td>
                                        <td class="pt_10 pb_10">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Detail</button>
                                            <a href="" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                        </td>
                                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Detail</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Item Name</label></div>
                                                            <div class="col-md-8">Headphone</div>
                                                        </div>
                                                        <div class="form-group row bdb1 pt_10 mb_0">
                                                            <div class="col-md-4"><label class="form-label">Description</label></div>
                                                            <div class="col-md-8">This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
