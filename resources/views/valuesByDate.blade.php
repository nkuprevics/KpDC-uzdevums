@extends('layouts.app')

@section('content')
    <div class="card-body">

        <h1 class="text-1xl text-center text-gray-800 font-semibold pb-3">
            Uzmērīto baļķu skaits pa datumiem un vietām.
        </h1>

        <div class="text-center pb-4">
            <h1 class="text text-center text-gray-800 font-semibold pb-3">
                Izvēlēties datumu:
            </h1>
            <form action="/filter" type="get">
                <label for="start">Datums:</label>
                <input type="date" id="start" name="date"
                       value="2023-01-01"
                       min="2020-01-01" max="2023-12-31">
                <br>
                <input class="pt-2 pb-2 pl-2 pr-2 text-1/2xl mt-2 bg-gray-200 rounded border-2" type="submit"
                       value="Filter">
            </form>
        </div>

        <div class="container w-full mx-auto px-2">
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-stone-200">
                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                    <tr>
                        <th>Uzmērīšanas datums</th>
                        <th>Vieta</th>
                        <th>Skaits</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($valuesByDate as $location => $count)
                        <tr>
                            <td>{{ $userDate }}</td>
                            <td>{{ $location }}</td>
                            <td>{{ $count }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <!--Datatables -->
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
        <script>
            $(document).ready(function () {

                var table = $('#example').DataTable({
                    responsive: true
                })
                    .columns.adjust()
                    .responsive.recalc();
            });
        </script>

@endsection
