@extends('Layouts.User.app')
@section('content')


 <h1>User Info</h1>
<section>
        <table id='table'>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>dob</th>
                <th>id</th>
            </tr>

            <script>
                $(document).ready(function() {

                    $.get("http://127.0.0.1:8000/api/alluser",
                        function(data) {
                            console.log(data);
                            var users = '';

                            $.each(data, function(key, value) {
                                users += '<tr>';
                                users += '<td>' +
                                    value.name + '</td>';

                                    users += '<td>' +
                                    value.email + '</td>';

                                    users += '<td>' +
                                    value.dob + '</td>';
                                    users += '<td>' +
                                    value.id + '</td>';
                            });
                            $('#table').append(users);
                        });
                });
            </script>

@endsection