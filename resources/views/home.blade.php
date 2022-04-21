@extends('layouts.app')

@section('styling')
<link href="{{URL::asset('css/admin.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="order-status-bar">
        <a name="pending" value="pending" class="dashBoardLink" href="#" focus>Pending</a>
        <a name="complete" value="complete" class="dashBoardLink" href="#">Completed</a>
        <a name="cancelled" value="cancelled" class="dashBoardLink" href="#">Cancelled</a>
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
        <tr class="body">
            <!-- Some 'if statement' if there are no pending orders -->
            @if(count($pendingOrders) > 0)
                @foreach($pendingOrders as $dataRow)
                    
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
                @endforeach

            @else
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
            @endif
        </tr>
        <tr class="footer">
            <td class="navigation" colspan=9>
                <div class="navigation-previous">
                    Previous 1 Next
                </div>
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