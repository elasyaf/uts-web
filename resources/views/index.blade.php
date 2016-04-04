<!DOCTYPE html>
<html>
    <head>
        <title>Inventory Management</title>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" >
        <link rel="stylesheet" href="{{asset('assets/css/starter-template.css')}}" >
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Inventory Management</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>
                            Daftar Inventaris Kantor
                            <a href="{{route('inventory.form')}}" class="pull-right"><button class="btn btn-primary">Tambah</button></a>
                        </h2>
                    </div>
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <th>ID.</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Tgl. Input</th>
                            <th>Tgl. Update Data</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>AS-001<a href="{{route('inventory.detail',[1])}}"></a></td>
                                <td>Meja Belajar</td>
                                <td>13</td>
                                <td>2016-03-24 18:58:09</td>
                                <td>2016-03-24 18:58:09</td>
                                <td>
                                    <a href="#"><button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</button></a>
                                    <a href="#"><button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Delete</button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>AS-002<a href="{{route('inventory.detail',[2])}}"></a></td>
                                <td>Kursi Belajar</td>
                                <td>13</td>
                                <td>2016-03-24 18:59:17</td>
                                <td>2016-03-24 18:59:17</td>
                                <td>
                                    <a href="#"><button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</button></a>
                                    <a href="#"><button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Delete</button></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>AS-003<a href="{{route('inventory.detail',[3])}}"></a></td>
                                <td>Komputer</td>
                                <td>5</td>
                                <td>2016-03-24 190:05:39</td>
                                <td>2016-03-24 190:05:39</td>
                                <td>
                                    <a href="#"><button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</button></a>
                                    <a href="#"><button class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i> Delete</button></a>
                                </td>
                            </tr>
    
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- /.container -->
        <script type="text/javascript" src="{{asset('assets/js/jquery-1.12.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>
