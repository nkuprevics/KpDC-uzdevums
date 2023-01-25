@extends('layouts.app')

@section('content')
    <div class="card-body">

        Tilpums pa sortimentiem (grupveida uzmērīšana)

    <div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">
        <!--Card-->
        <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                <tr>
                    <th>Sortiments</th>
                    <th>Bruto</th>
                    <th>Neto</th>
                    <th>Brāķis</th>
                </tr>
                </thead>
                <tbody>
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
                </tbody>
            </table>
        </div>
    </div>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {

            var table = $('#example').DataTable({
                responsive: true
            })
                .columns.adjust()
                .responsive.recalc();
        });
    </script>



@endsection
