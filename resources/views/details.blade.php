<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Détails des matériels utilisés par {{ $employe->codeEmp }}</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Code</th>
                <th>Marque</th>
                <th>Description</th>
                {{-- <th>Date debut Utilisation </th> --}}
                <th>Date début Affectation</th>
                <th>Date fin Affectation</th>
            </tr>
        </thead>
        <tbody>
             @foreach($employe->materiels as $materiel)
                <tr>
                    <td>{{ $materiel->codeMat }}</td>
                    <td>{{ $materiel->marque }}</td>
                    <td>{{ $materiel->categorie }}</td>
                    {{-- <td>{{ $materiel->dateDebutUtilisation }}</td> --}}
                    <td>{{ $materiel->pivot->dateDebutAffectation }}</td>
                    <td>{{ $materiel->pivot->dateFinAffectation  }}</td>
                </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>
