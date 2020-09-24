@extends('barre')
@section('contenu')
<form>
    <div class="form-group">
      <label for="formGroupExampleInput">Nom</label>
      <input type="text" name="nom" class="form-control" id="formGroupExampleInput" placeholder="Nom">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Cout de Réalisation</label>
      <input type="text" name="cout" class="form-control" id="formGroupExampleInput2" placeholder="Cout de Réalisation">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Date de réalisation</label>
        <input type="date" name="date" class="form-control" id="formGroupExampleInput2" placeholder="Date de réalisation">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Description</label>
        <input type="text" name="description" class="form-control" id="formGroupExampleInput2" placeholder="Description">
      </div>
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
  </form>
    
@endsection