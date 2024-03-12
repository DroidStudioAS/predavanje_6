<div class="form_container">
    <h1>Add A Grade</h1>
<form method="post" style="display: flex; flex-flow: column nowrap; width: 50vw; align-items: center" action="/post-grade">
     {{csrf_field()}}
    <label for="subject">Subject</label>
    <input name="subject" type="text">
    <label for="grade">Grade</label>
    <input name="grade" type="number">
    <label for="professor">Professor</label>
    <input name="professor" type="text">
    <input type="submit" value="Add Grade">
    <p>@if($errors->any()) {{$errors->first()}} @endif</p>
</form>
</div>
<style>
    .form_container{
        display: flex;
        justify-content: center;
        flex-flow: column nowrap;
        align-items: center;
    }
    .form_container input{
        width: 20vw;
        padding: 12px 8px 12px 8px;
    }
</style>
