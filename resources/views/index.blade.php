@section('content')
    <form method="get" action="{{route('homestays.create')}}">
        <button>Insert Homestay</button>
    </form>
    <table border="1">
        <thead align="center">
        <td>Name</td>
        <td>Address</td>
        <td>Description</td>
        <td>Price</td>
        <td colspan="3">Action</td>
        </thead>
        <tbody>

        @foreach($homestay as $homestays)
            <tr>
                <td>{{$homestays->name}}</td>
                <td>{{$homestays->address}}</td>
                <td>{{$homestays->description}}</td>
                <td>{{$homestays->price}}</td>
                <td>
                    <a href="{{route('homestays.show', ['homestays'=>$homestays->id])}}">Show</a>
                </td>
                <td>
                    <a href="{{route('homestays.edit', ['homestays'=>$homestays->id])}}">Edit</a>
                </td>

                <form action="{{route('homestays.destroy', ['homestays'=>$homestays->id])}}" method="post"
                onsubmit="return confirm('Apakah Anda Yakin?')">
                    <input type="hidden" name="_method" value="DELETE">
                    {{csrf_field()}}
                    <button>Hapus</button>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection