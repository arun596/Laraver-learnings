<div>
    <h2>add new user</h2>

    <!-- @if($errors->any())
    @foreach($errors->all() as $error)
    <div style="color:red">
        {{$error}}
    </div>
    @endforeach
    @endif -->

    <form action="adduser" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user name" name="username"  value="{{old('username')}}"
            class="{{$errors->has('username')?'input-error':''}}">
            <span style="color:red">@error('username'){{$message}}@enderror</span>
        </div>
        <br>

        
        <div class="input-wrapper">
            <input type="text" placeholder="Enter user email" name="email"  value="{{old('email')}}"
            class="{{$errors->has('email')?'input-error':''}}">
            <span style="color:red">@error('email'){{$message}}@enderror</span>

        </div>
        <br>
        

        <div class="input-wrapper">
            <input type="text" placeholder="Enter user city" name="city"  value="{{old('city')}}"
            class="{{$errors->has('city')?'input-error':''}}">
            <span style="color:red">@error('city'){{$message}}@enderror</span>

        </div>
        <br>


        <div class="input-wrapper">
            <button>Add new user</button>
        </div>
        <br>




    </form>
</div>

<style>
    input{
    /* border: blue 1px solid; */
    border-radius: 5px;
    height: 45px;
    width: 200px;
    }

    button{
        height: 35px;
        border-radius: 5px;
        background-color: green;
        color:white;
        border: 2px solid black;
        width: 200px;
        cursor:pointer;
    }
    .input-wrapper{
        margin:5px;
    }
    .input-error{
        border:1px solid red;
        color:red;
    }

</style>