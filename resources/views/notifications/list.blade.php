@extends('layouts.mainlayout')


@section('content')

<div class="card">
    <div class="card-header">
        <h3>Notifications</h3>
    </div>
    <div class="filter">
            <input type="text" id="filterInput" placeholder="Filter notifications">
        </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Notification Type</th>
                    <th scope="col">Notification</th>
                    <th scope="col">Read at</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Expiration</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notifications as $notification)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $notification->type }}</td>
                    <td>{{ $notification->data }}</td>
                    <td>{{ $notification->read_at }}</td>
                    <td>{{ $notification->created_at }}</td>
                    <td>{{ $notification->expiration }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#filterInput').keyup(function() {
            var filterValue = $(this).val().toLowerCase();
            console.log("filterValue",filterValue)
            $('table tbody tr').each(function() {
                var notificationText = $(this).find('td:eq(2)').text().toLowerCase();
                
                if (notificationText.indexOf(filterValue) > -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>






@endsection
