<h1>hello world</h1> 

<x-message-banner msg="User Login Successfully" class="success"/>
<x-message-banner msg="User signup Successfully" class="success"/>
<x-message-banner msg="User signup failed" class="failure"/>

<style>
    .success{
        background:lightgreen;
        color:green;
        padding:3px 10px;
        margin: 10px;
        display:inline-block;
    }
    .failure{
        background:pink;
        color:green;
        padding:3px 10px;
        margin: 10px;
        display:inline-block;
    }
</style>