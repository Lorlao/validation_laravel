@extends('layouts.template')
@section('content')
    <table style='border:1px solid black' width=100%>
        <tr style='border:2px solid black'>
        <th class="table-active" >ID</th>
            <th class="table-active" >Nom</th>
            <th class="table-active">Classification</th>
            <th class="table-active">Éspérance de vie</th>
            @if(auth::check());
                <th class="table-active">Modifier</th>
                <th class="table-active">Supprimer</th>
            @endif
        </tr>
    @foreach($races as $race)
        <tr>
            <td class="table-info">{{$race->id}} </td>
            <td class="table-info">{{$race->name}} </td>
            <td class="table-primary">{{$race->classification}} </td>
            <td class="table-success">{{$race->life}} </td>
        </tr>
    @endforeach
    </table>
@endsection