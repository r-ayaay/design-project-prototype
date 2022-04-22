@extends('layouts.app')

@section('styling')
<link href="{{URL::asset('css/admin.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="order-status-bar">
        <a name="pending" value="pending" class="dashBoardLink" href="/admin">Pending</a>
        <a name="complete" value="complete" class="dashBoardLink" href="/admin/completed">Completed</a>
        <a name="cancelled" value="cancelled" class="dashBoardLink" href="/admin/cancelled">Cancelled</a>
    </div>
        
    <table name="data">
        <tr class="header">
            <th>Order ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Photo</th>
            <th>Product Type</th>
            <th>Qty.</th>
            <th>Size</th>
            <th>Price</th>
            <th>Status</th>
            <th>Method of Receiving</th>
        </tr>
        
            <!-- Some 'if statement' if there are orders or not -->
        @if(count($orders) > 0)
            @foreach(($orders) as $dataRow)
                <tr class="body">
                    <td>{{$dataRow['id']}}</td>
                    <td>{{$dataRow['client_name']}}</td>
                    <td>{{$dataRow['client_email']}}</td>
                    <td>{{$dataRow['photo']}}</td>
                    <td>{{$dataRow['product']}}</td>
                    <td>{{$dataRow['quantity']}}</td>
                    <td>{{$dataRow['dimension_x']}}</td>
                    <td>{{$dataRow['dimension_y']}}</td>
                    <td>{{$dataRow['status']}}</td>
                    <td>{{$dataRow['method_of_receiving']}}</td>
                </tr>
            @endforeach

        @else
        <tr class="body">
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        @endif
        <tr class="footer">
            <td class="navigation" colspan=10>
                Previous 1 Next
            </td>
        </tr>
        <!-- TEST -->
        <!-- <tr>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>seggs</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
        </tr>
        <tr>
            <td>test2</td>
            <td>test2</td>
            <td>test2</td>
            <td>seggs2</td>
            <td>test2</td>
            <td>test2</td>
            <td>test2</td>
            <td>test2</td>
            <td>test2</td>
        </tr> -->
    </table>
</div>
@endsection