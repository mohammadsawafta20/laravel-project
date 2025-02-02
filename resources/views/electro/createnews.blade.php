<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car - Laravel 11 CRUD with Image Upload Tutorial - itcodStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Add Car</h2>
                <form action="{{ route('createnewsstore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="make" class="form-label">product_id</label>
                        <input type="text" class="form-control" id="make" name="make" required>
                    </div>
                    <div class="mb-3">
                        <label for="model" class="form-label">img</label>
                        <input type="text" class="form-control" id="model" name="model" required>
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">img_sort</label>
                        <input type="number" class="form-control" id="year" name="year" min="1900" max="{{ date('Y') + 1 }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">state</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>