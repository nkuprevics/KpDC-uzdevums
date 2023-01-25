@extends('layouts.app')

@section('content')
    <div class="card-body">

        Uzmērīto baļķu skaits pa datumiem un vietām.

        <table>
            <tr>
                <th>Uzmērīšanas datums</th>
                <th>Vieta</th>
                <th>Skaits</th>
            </tr>
            @foreach($valuesByDate as $location => $count)
                <tr>
                    <td>{{ $userDate }}</td>
                    <td>{{ $location }}</td>
                    <td>{{ $count }}</td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
