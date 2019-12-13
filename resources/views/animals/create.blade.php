@extends('layouts.template')

@section('content')
    <h1>Ajouter un animal</h1>
    <br><br>
    <form method="POST" action="/storeAnimal">
    @csrf
        <div class="form-group">
            <label for="name">Animal</label>
            <input class="form-control" name="name" rows="1" required>
        
            <label for="age">Âge</label>
            <input class="form-control" name="age" rows="1" required>
        
            <label for="weight">Poids</label>
            <input class="form-control" name="weight" rows="1" required>
        
            <label for="height">Taille</label>
            <input class="form-control" name="height" rows="1" required>
        
            <label for="race_id">Espèce</label>
        
            <select name="race_id">
                @foreach($races as $race)
                    <option value="{{$race->id}}">{{$race->name}}</option>
                @endforeach
            </select> 
        <br><br>
            <button type="submit" class="btn btn-primary">Submit</button>
        <br>
        </div>
    </form>
@endsection