<html>
    <head>   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title> Washington City Population </title>

    <h1 style="margin:32px">Washington City Population</h1>
    </head>

    <body>
        <div class="container">
            <h1>Top 10 Highest Populated Cities</h1>
            <table class="table">
                <tbody>
                    @foreach ($highestPopCities as $city)
                        <tr> 
                        <td>{{ $city }} </td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="container">
            <h1>Top 10 Lowest Populated Cities</h1>
            <table class="table">
                <tbody>
                    @foreach ($lowestPopCities as $city)
                        <tr> 
                        <td>{{ $city }} </td> 
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="container">
            <h1>Random City Population</h1>
            <table class="table">
                <tbody>
                    <tr> 
                    <td>{{ $randomPopCity }} </td> 
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </body>

</html>