<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    
    <x-nav-bar />

    <div class="container mt-4">
    <h1>Students</h1>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach ($students as $student)
            <tr>
                <th scope="row">{{ $student['uid'] }}</th>
                <td>{{ $student['username'] }}</td>
                <td>{{ $student['age'] }}</td>
                <td>{{ $student['phone'] }}</td>
                <td>{{ $student['email'] }}</td>
                <td>
                    <a href="{{ '/edit/' . $student['uid'] }}" >Edit</a>
                    <a href="{{ '/delete/' . $student['uid'] }}" >Delete</a>
                </td>
            </tr>
        @endforeach

    </tbody>
    </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>