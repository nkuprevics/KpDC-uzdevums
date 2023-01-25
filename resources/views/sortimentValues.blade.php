@extends('layouts.app')

@section('content')
    <div class="card-body">

        Tilpums pa sortimentiem (grupveida uzmērīšana)

        <table>
            <tr>
                <th>Sortiments</th>
                <th>Bruto</th>
                <th>Neto</th>
                <th>Brāķis</th>
            </tr>
            @foreach($valuesBySortiment as $entry)
                <tr>
                    <td>{{ $entry['sortiments'] }}</td>
                    <td>
                        @if ($entry['bruto'] == null)
                            no data
                        @else
                            {{ $entry['bruto'] }}
                        @endif
                    </td>
                    <td>{{ $entry['neto'] }}</td>
                    <td>{{ $entry['brakis'] }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
