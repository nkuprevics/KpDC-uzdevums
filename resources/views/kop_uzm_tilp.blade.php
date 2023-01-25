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

                    Kopējais uzmērītais tilpums

                    <table>
                        <tr>
                            <th>Veids</th>
                            <th>Bruto</th>
                            <th>Neto</th>
                            <th>Brāķis</th>
                        </tr>
                            @foreach($totalMeasuredValues as $measuredValue)
                            <tr>
                                <td>{{ $measuredValue['name'] }}</td>
                                <td>{{ $measuredValue['bruto'] }}</td>
                                <td>{{ $measuredValue['neto'] }}</td>
                                <td>{{ $measuredValue['brakis'] }}</td>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
