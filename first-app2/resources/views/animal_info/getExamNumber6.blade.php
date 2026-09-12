<table>
    <thead>
        <tr>
            <th>name</th>
            <th>conservation status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $dt)
            <tr>
                <td>{{$dt->name}}</td>
                <td>{{$dt->conservation_status}}</td>
            </tr>
        @endforeach
    </tbody>
</table>