@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">


    <div class="content ">
        <div class="title m-b-md">
            Customers
        </div>

        <table  class="table table-hover" width="100%">
            <thead>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Name
                </th>
            </tr>
            <tbody>


            @php $index=0 @endphp
            @foreach($customers as $customer)

                <tr>
                    <td>{{++$index}}</td>
                    <td>{{$customer['name']}}</td>


                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
@stop
