<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- ############# Q1 ################# --}}
    {{-- php artisan make:migration create_affectations_table --}}
    {{-- php artisan make:model Affectation -m --}}
    {{-- php artisan make:model Affectation  --}}

     {{-- ############# Q2 ################# --}}
     {{-- php artisan make:model Materiel
     php artisan make:model Employe
     php artisan make:model Departement --}}

     {{-- ############# Q3 ################# --}}
     {{-- php artisan make:Controller MaterielController --}}
    <a href="{{route('materiels.create')}}"> Ajouter un materiel </a>
    <table>
        <tr>
            <th>Code Matériel</th><th>Marque</th><th>Catégorie</th><th>Date Début Utilisation </th><th>Action</th>
        </tr>
        @foreach($materiels as $materiel)
        <tr>
            <td>{{ $materiel->codeMat }}</td>
            <td>{{ $materiel->marque }}</td>
            <td>{{ $materiel->categorie }}</td>
            <td>{{ $materiel->dateDebutUtilisation }}</td>
            <td>
                <form method="POST" action="{{ route('materiels.destroy', $materiel->codeMat) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
