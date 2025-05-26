<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Code Employe</th><th>Nom</th><th>Prenom</th><th>Département</th><th>Nombre de Matériels</th><th>Rechercher les matériels</th>
        </tr>
        @foreach($employes as $employe)
        <tr>
            <td>{{ $employe->codeEmp }}</td>
            <td>{{ $employe->nomEmp }}</td>
            <td>{{ $employe->prenomEmp }}</td>
            <td>{{ $employe->departement->nomDep }}</td>
            <td>{{$employe->materiels->count()}}</td>
            <td>
                <a href="{{route('employes.show',$employe->codeEmp)}}"> détails matériels utilisés</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
