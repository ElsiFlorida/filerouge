@extends('barre')
@section('contenu')
<form>
    <div class="form-group">
      <label for="formGroupExampleInput">Nom</label>
      <input type="text" name="nomStructure" class="form-control" id="formGroupExampleInput" placeholder="Nom">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">SecteurActivite</label>
      <input type="text" name="secteurActivite" class="form-control" id="formGroupExampleInput2" placeholder="secteurActivite">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Contact</label>
        <input type="text" name="contact" class="form-control" id="formGroupExampleInput2" placeholder="Contact">
      </div>
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
  </form>
    
@endsection