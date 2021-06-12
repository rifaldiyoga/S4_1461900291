<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
</head>
<body>
    <div class="container p-3">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('import') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">File untuk diimport</label>
                        <input type="file" class="form-control" name="import" placeholder="Import Pasien"/>
                    </div>
                    <button class="btn btn-info">Import</button>
                </form>
            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Id.</td>
                            <td>Nama</td>
                            <td>Alamat</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pasien as $item)
                            
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>