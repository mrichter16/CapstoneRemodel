@extends('main')

@section('content')
<div>
    <h4>{{ $message }}</h4>
    <table class="table table-striped table-bordered" id="users_table">
        <tr>
            <th>User ID</th>
            <th>First</th>
            <th>Last</th>
            <th>email</th>
            <th>username</th>
            <th>employeeID</th>
            <th>Resident Type</th>
            <th>level</th>
            @foreach ($usersArr as $user)
                <tr>
                    <td align="left">{{ $user['userID'] }}</td>
                    <td align="left">{{ $user['name_first'] }}</td>
                    <td align="left">{{ $user['name_last'] }}</td>
                    <td align="left">{{ $user['email'] }}</td>
                    <td align="left">{{ $user['username'] }}</td>
                    <td align="left">{{ $user['employeeID'] }}</td>
                    <td align="left">{{ $user['typeID'] }}</td>
                    <td align="left">{{ $user['level'] }}</td>
                </tr>
            @endforeach

        </tr>
    </table>
</div>
<script>
    var usersArr = <?php echo json_encode($usersArr); ?>;
    console.log(usersArr);
    var facArr = <?php echo json_encode($facArr); ?>;
    console.log(facArr);
    var EvalsForm = <?php echo json_encode($formArr); ?>;
    console.log(EvalsForm);
    var EvaluationTypes = <?php echo json_encode($typesArr); ?>;
    console.log(EvaluationTypes);
</script>
@endsection
