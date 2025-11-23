<h1>this is view page</h1>
<h1>{{$name}}</h1>

@if($name == 'Arun Sharma')
<h2>this is arun sharma</h2>
@else
<h2>other user</h2>
@endif

<div>
    @foreach($users as $user)
    <h5>{{$user}}</h5>
    @endforeach
</div>