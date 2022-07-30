<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export</title>
</head>
<body>
    <table>
        <thead style="background-color: green; color: skyblue; border: 3px solid #ee00ee">
        <tr>
            <th>Name</th>
            <th>Team</th>
            <th>Number</th>
            <th>Position</th>
            <th>Height</th>
            <th>Nationality</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rosters as $roster)
            <tr>
                <td>{{ $roster->name }}</td>
                <td>{{ $roster->get_team->name }}</td>
                <td>{{ $roster->number }}</td>
                <td>{{ $roster->pos }}</td>
                <td>{{ $roster->height }}</td>
                <td>{{ $roster->weight }}</td>
                <td>{{ $roster->nationality }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>