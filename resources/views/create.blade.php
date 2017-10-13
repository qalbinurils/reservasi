@section('content')
    <form action="{{route('homestays.store')}}" method="post">
        {{csrf_field()}}
        <table style="padding: 10px">
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>
                    <input type="text" name="name" placeholder="name">
                </td>
            </tr>
        </table>
    </form>
@endsection