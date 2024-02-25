<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <a href="{{ route('student.create') }}" target="_blank"> Ragister New Student</a>
    <table border="1" width="100%" class="table table-success table-striped">
        <thead>
            <th>id</th>
            <th>name</th>
            <th>father_name</th>
            <th>phone</th>
            <th>student_class</th>
            <th>duration</th>
            <th>created at/date</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($students as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->father_name }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->student_class }}</td>
                <td>{{ $data->duration }}</td>
                <td>{{ $data->created_at }}</td>
            </tr>
            <div>
                <a href={{route('student.delete'. ['id => $data-.id']) }}>Deleate</a>
            </div>
            @endforeach
        </tbody>

    </table>
</body>
</html>