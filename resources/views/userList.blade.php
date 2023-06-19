@extends('layouts.mainlayout')


@section('content')

<div class="card">
    <div class="card-header">
        <h3>User List</h3>
    </div>
    <div class="filter">
            <input type="text" class="form-control" id="searchInput" placeholder="Filter notifications" style="width: 250px;">
        </div>
    <!-- <div class="form-group">
            <input type="text" id="searchInput" class="form-control" placeholder="Search by name">
        </div> -->
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Unread Notifications</th>
                    <th scope="col">Is Admin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr onclick="window.location='{{ route('impersonate', ['user' => $user]) }}';">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>{{ $user->notifications_count }}</td>
                    <td>{{ $user->is_admin ? 'Yes' : 'No' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#searchInput').keyup(function() {
            var value = $(this).val().toLowerCase();
            $('table tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });
    });
</script>
<!-- <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Unread Notifications</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone_number }}</td>
                <td>{{ $user->notifications_count }}</td>
            </tr>
        @endforeach
    </tbody>
</table> -->

@endsection
