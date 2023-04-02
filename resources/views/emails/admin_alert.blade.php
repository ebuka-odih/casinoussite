@component('mail::message')
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>

# New Message

<table style="width:100%">
    <tr>
        <th>Name:</th>
        <td>{{ $data->name }}</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>{{ $data->email }}</td>
    </tr>
    <tr>
        <th>Phone:</th>
        <td>{{ $data->phone }}</td>
    </tr>
    <tr>
        <th>Country:</th>
        <td>{{ $data->country }}</td>
    </tr>
    <tr>
        <th>Age:</th>
        <td>{{ $data->age }}</td>
    </tr>
    <tr>
        <th>Occupation:</th>
        <td>{{ $data->age }}</td>
    </tr>

</table>




Thanks,<br>
{{ config('app.name') }}
@endcomponent
