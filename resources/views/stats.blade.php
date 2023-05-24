@extends('layout.layout')

@section('content')
<div>
    <table>
        <thead>
            <th>User</th>
            <th>Click count</th>
        </thead>
        <tbody>
            @foreach ($records as $item)
                <tr>
                    <td>{{ $item->userId}}</td>
                    <td>{{ $item->click_count}}</td>
                </tr>
            @endforeach
            
        </tbody>
    </table>

</div>
@endsection