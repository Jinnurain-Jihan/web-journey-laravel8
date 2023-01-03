<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Laravel Form</title>
</head>
<body>
    <div class="shadow m-5 p-5">
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <form action="{{ route('form-submit')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="mb-1">Name</label>
                <input type="text" name="name" id="name" class="form-control py-2">
                @error('name')
                <span class="text-danger">{{ $message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="mb-1">Email</label>
                <input type="text" name="email" id="email" class="form-control py-2">
                @error('email')
                <span class="text-danger">{{ $message}}</span>
                @enderror
            </div>
            <input type="submit" value="Submit" class="btn btn-primary mt-3 w-100">
        </form>
    </div>
</body>
</html>