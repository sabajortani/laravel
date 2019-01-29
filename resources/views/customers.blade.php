@extends('layouts.main')

@section('title')

    create customer
@endsection

@section('body')

    <table style="text-align:center; border-collapse: collapse;width:100%; border : 2px solid black;">
    <tr>
        <th>source</th>
        <th>name_of_good</th>
        <th>quantity</th>

        <th>no_of_bol</th>
        <th>date</th>
        <th>no_type_insource</th>
        <th>fee_of_carry</th>
        <th>destination</th>
        <th>good_code</th>
        <th>id_no_employee</th>
        <th>id_no_reseaver</th>
        <th>id_no_sender</th>
        <th>id_no_driver</th>
        <th>id_no_customer</th>




        <th>edit</th>
        <th>delete</th>
    </tr>
    @forelse($bols as $bol)
        <tr>
            <td>{{ $bol->source }}    </td>
            <td>{{ $bol->name_of_good }}     </td>
            <td>{{ $bol->no_of_bol }}</td>
            <td>{{ $bol->date }}</td>
            <td>{{ $bol->no_type_insource }}</td>
            <td>{{ $bol->fee_of_carry }}</td>
            <td>{{ $bol->destination }}</td>
            <td>{{ $bol->quantity }}</td>
            <td>{{ $bol->good_code }}</td>
            <td>{{ $bol->id_no_employee }}</td>
            <td>{{ $bol->id_no_reseaver }}</td>
            <td>{{ $bol->id_no_sender }}</td>
            <td>{{ $bol->id_no_driver }}</td>
            <td>{{ $bol->id_no_customer }}</td>

            <td>
                <a button class="form-control btn btn-outline-info" type="submit" href="{{route('bol_edit', ['id' => $bol->no_of_bol])}}"> edit </a>

            </td>
            <td>
                <a button class="form-control btn btn-outline-info" type="submit" href="{{route('bol_delete', ['id' => $bol->no_of_bol])}}">delete</a>

            </td>
        </tr>
        @empty
        @endforelse
        </table>

@endsection