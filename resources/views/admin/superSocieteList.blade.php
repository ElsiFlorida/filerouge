@extends('barre')
@section('contenu')

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">N°</th>
        <th scope="col">Nom</th>
        <th scope="col">Secteur Activité</th>
        <th scope="col">Contact</th>
        <th scope="col">Administrateur</th>
        <th scope="col">Options</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td><button type="button" class="btn btn-info">Modifier</button>
            <button type="button" class="btn btn-danger">Supprimer</button></td>
      </tr>
     
    </tbody>
  </table>
    
@endsection