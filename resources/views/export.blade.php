<head>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="customFile">
                        <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Exportar datos</button>
                <a href="{{ route('export') }}" class="btn btn-success">Import datos</a>
            </div>
        </div>
    </div>
</form>
