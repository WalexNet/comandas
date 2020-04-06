            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-center py-3"><?= $titulo ?></h1>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->


                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="text-center py-3">imprimir componentes</h1>

                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Listado de productos</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>                  
                                                <tr>
                                                    <th style="width: 10px">Img</th>
                                                    <th>Descripci&oacute;n</th>
                                                    <th>Precio</th>
                                                    <th>IVA</th>
                                                    <th>Categor&iacute;a</th>
                                                    <th>Pertenece</th>
                                                    <th style="width: 40px">Existencias</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>XXX</td>
                                                    <td>patatas fritas</td>
                                                    <td>€3.50</td>
                                                    <td>21%</td>
                                                    <td>Tapas</td>
                                                    <td>Cocina</td>
                                                    <td><span class="badge bg-danger">NO</span></td>
                                                    <td>Del/Edi</td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>Clean database</td>
                                                    <td>
                                                        <div class="progress progress-xs">
                                                        <div class="progress-bar bg-warning" style="width: 70%"></div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-warning">70%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>Cron job running</td>
                                                    <td>
                                                        <div class="progress progress-xs progress-striped active">
                                                        <div class="progress-bar bg-primary" style="width: 30%"></div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-primary">30%</span></td>
                                                </tr>
                                                <tr>
                                                    <td>4.</td>
                                                    <td>Fix and squish bugs</td>
                                                    <td>
                                                        <div class="progress progress-xs progress-striped active">
                                                        <div class="progress-bar bg-success" style="width: 90%"></div>
                                                        </div>
                                                    </td>
                                                    <td><span class="badge bg-success">90%</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer clearfix">
                                        <ul class="pagination pagination-sm m-0 float-right">
                                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>      
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->