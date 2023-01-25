@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <a href="/totalMeasuredValues">Link 1</a>
                    <a href="/sortimentValues">Link 2</a>
                    <a href="/measuredValues">Link 3</a>
                </div>

                <div class="card-body">

                    BALK

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
            </div>
        </div>
    </div>
</div>
@endsection
