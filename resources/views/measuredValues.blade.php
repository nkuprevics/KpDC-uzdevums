@extends('layouts.app')

@section('content')
    <div class="card-body">

        Uzmērīto baļķu skaits pa datumiem un vietām.

        <form action="/filter" type="get">
            <label for="start">Datums:</label>
            <input type="date" id="start" name="date"
                   value="2018-07-22"
                   min="2020-01-01" max="2023-12-31">
            <input type="submit" value="Submit">
        </form>

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
