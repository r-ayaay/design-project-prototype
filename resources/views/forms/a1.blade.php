@extends('../layouts/main')

@section('content')
<main class="split">
    <div>


        <h2 class="brand" style="text-align: left;">A1 Printing</h2>
        <form id="form" action="/addOrder" enctype="multipart/form-data" autocomplete="off" method="post">
            @csrf
            <label for="name">Name </label>
            <input type="text" name="name" required>

            <label for="email">Email </label>
            <input type="email" name="email" required>

            <div class="fileDiv">
                <input style="display:none;" type="file" accept="image/*" id="choose-file" name="photo" required>
                <div class="fileBtn" onClick="fileup()">Choose Photo</div>
            </div>

            <label for="quantity">Quantity </label>
            <input type="number" name="quantity" required>

            <input type="hidden" name="product" value="A1" />
            <label for="method_of_receiving">Receive Method: </label>
            <select name="method_of_receiving" id="method_of_receiving" form="form">
                <option value="Pick-Up">Pick-Up</option>
                <option value="Delivery">Delivery</option>
            </select>
            </br>
            </br>
            <button id="submitBtn">
                SUBMIT
            </button>
        </form>

    </div>

    <div>
        <h2 class="brand" style="text-align: left;">Preview:</h2>
        <div id="img-prev">
            Image not selected yet
        </div>
    </div>
</main>
@endsection