<html>

<head>
<title>Cities of WA</title>

<h1>Cities of Washington</h1>
</head>

<body>
    <table>
        <tbody>
        <th>Rank</th>
        <th>City</th>
        <th>State</th>
        <th>Population</th>
            @foreach ($allWashingtonCities as $city)
                <tr> 
                <td>{{ $city->population_rank }}</td>
                <td>{{ $city->name }} </td>
                <td>WA</td>
                <td>{{ $city->population_2010 }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>