<!DOCTYPE html>
<html>
    <head>
        <title>Tutorial Membuat CRUD Pada Laravel 8</title>
    </head>

    <body>
        <h3>Data Santri</h3>

        <br/>
        <br/>

        <table border="1">
            <tr>
                <th>idsantri</th>
                <th>Nama</th>
            </tr>

            @foreach($santri as $p)
            <tr>
                {{-- //kudu persis mbek data base --}}
                <td>{{ $p->TAGGALLHR }}</td>
                <td>{{ $p->NAMASATRI }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>