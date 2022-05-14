@extends('../layouts/main')

@section('content')
<main>
    <div class="hero">
        <img src="{{URL::asset('images/contact.jpg')}}" alt="">
    </div>

    <div>
        <div style="width: 80%; margin:auto; height: 20px; border-bottom: 3px solid #48487f; text-align: center;">
            <span class="brand" style="background-color: white; padding: 0 10px;">CONTACT US</span>
        </div>
        <div>
            <div>
                Contact:
            </div>
            <div>
                Address:
            </div>
            <div>
                Business Hours:
            </div>
        </div>
    </div>
</main>
@endsection