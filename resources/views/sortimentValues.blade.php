@extends('layouts.app')

@section('content')
    <div class="card-body">

        <h1 class="text-1xl text-center text-gray-800 font-semibold pb-3">
            Tilpums pa sortimentiem (grupveida uzmērīšana)
        </h1>

        <div class="container w-full mx-auto px-2">
            <!--Card-->
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-stone-200">

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
                                    Nav dati
                                @else
                                    {{ $entry['bruto'] }}
                                @endif
                            </td>
                            <td>
                                @if ($entry['neto'] == null)
                                    Nav dati
                                @else
                                    {{ $entry['neto'] }}
                                @endif
                            </td>
                            <td>
                                @if ($entry['brakis'] == null)
                                    Nav dati
                                @else
                                    {{ $entry['brakis'] }}
                                @endif
                            </td>
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
