<!-- {{print_r($errors)}} -->
 @if($errors->any())
<!-- @foreach($errors->all() as $error)
{{$error}}
@endforeach
@endif -->
<form action="adduser" method="post">
@csrf
<div class="input-wrapper">
<label for="name">Name</label>
<input type="text" name="name" id="name">
<span>@error('name'){{$message}}@enderror</span>
<label for="name">Email</label>
<input type="email" name="email" id="email">
<span>@error('email'){{$message}}@enderror</span>
<label for="name">Password</label>
<input type="password" name="password" id="password">
<span>@error('password'){{$message}}@enderror</span>
</div>

<div class="special-input">User Skills <br>
<label for="php">PHP</label>    
<input type="checkbox" name="skills[]" id="php" value="php">
<label for="node">Node</label>
<input type="checkbox" name="skills[]" id="node" value="node">
<label for="java">Java</label>
<input type="checkbox" name="skills[]" id="java" value="java">
<span>@error('skills[]'){{$message}}@enderror</span>
</div>

<div class="special-input">User Gender <br>
<label for="male">Male</label>
<input type="radio" name="gender" id="male" value="male">
<label for="female">Female</label>
<input type="radio" name="gender" id="female" value="female">
<span>@error('gender'){{$message}}@enderror</span>
</div>

<div class="special-input">User age <br>
<input type="range" name="age"  min="18" max="26">
</div>

<div class="special-input">User City <br>
<select name="city">
<option value="gorakhpur">Gorakhpur</option>
<option value="ayodhya">Ayodhya</option>
<option value="noida">Noida</option>
<option value="delhi">Delhi</option>
</select>
<span>@error('city'){{$message}}@enderror</span>
</div>

<button type="submit">Add new User</button>
</form>

<style>
form{
    border: 1px solid #c3c3c3;
    padding: 30px;
    display: inline-block;
    border-radius: 5px;
}
.input-wrapper input{
    padding: 5px;
    border: 1px solid yellowgreen;
    margin: 10px;
}
.input-wrapper{
    padding: 10px;
    display: flex;
    flex-direction: column;
}
.special-input{
    padding: 10px;
}
button{
  margin: 10px;
  padding: 10px;
  border: 1px solid yellowgreen;
  border-radius: 5px;
  cursor: pointer;
}
</style>