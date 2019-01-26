@extends('layouts.main')

@section('title')

    create bol
@endsection

@section('body')

    <table>
        <tr>
            <th>source</th>
            <th>name_of_good</th>
            <th>quantity</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        @forelse($bols as $bol)
            <tr>
                <td>{{ $bol->source }}</td>
                <td>{{ $bol->name_of_good }}</td>
                <td>{{ $bol->quantity }}</td>
                <td>
                    <a href="{{route('bol.edit', ['id' => $bol->no_of_bol])}}"> edit </a>
                </td>
                <td>
                    <a href="{{route('bol.delete', ['id' => $bol->no_of_bol])}}">delete</a>
                </td>
            </tr>
        @empty
        @endforelse
    </table>
@endsection