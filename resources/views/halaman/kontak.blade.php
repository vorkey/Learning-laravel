@extends('layout/aplikasi')

@section('konten')
<h1>{{ $judul }}</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis qui velit obcaecati sequi aliquam magni perspiciatis. Alias possimus et culpa? Enim optio consequuntur eaque beatae placeat consectetur ducimus alias repellat totam, laudantium quia, magni reprehenderit omnis facilis ab sint quaerat mollitia eos architecto vero natus sed delectus numquam quod! Vel!</p>

<ul>
    <li>Email : {{ $kontak['email']}}</li>
    <li>Website : {{ $kontak['website']}}</li>
</ul>
@endsection
        