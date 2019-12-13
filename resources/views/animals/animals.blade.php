@extends('layouts.template')
@section('content')
    <table style='border:1px solid black' width=100%>
        <tr style='border:2px solid black'>
        <th class="table-active" >ID</th>
            <th class="table-active" >Nom</th>
            <th class="table-active">Âge</th>
            <th class="table-active">Poids</th>
            <th class="table-active">Taille</th>
            <th class="table-active">Espèce</th>
            @if(auth::check());
                <th class="table-active">Modifier</th>
                <th class="table-active">Supprimer</th>
            @endif
        </tr>
    @foreach($animals as $animal)
        <tr>
            <td class="table-default">{{$animal->id}} </td>
            <td class="table-info">{{$animal->name}} </td>
            <td class="table-primary">{{$animal->age}} </td>
            <td class="table-success">{{$animal->weight}} </td>
            <td class="table-danger">{{$animal->height}} </td>
            <td class="table-warning">{{$animal->race_id}} </td>
        </tr>
    @endforeach
    </table>
@endsection
