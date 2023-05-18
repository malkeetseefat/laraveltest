@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<a class="btn btn-info" href="{{ url('all_books') }}"> View All </a>

<form action="{{ url('booksadd') }}" method="post">
	@csrf
  <div class="container">
    <h1>Add Books</h1>
    <p>Please fill in this form to add an books.</p>
    <hr>

    <label for="name"><b>Book Name</b></label>
    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
    <input type="text" placeholder="Enter Book Name" name="book_name" id="email" required>

    <label for="psw"><b>Select Author Name</b></label>
    <select name="author_name" id="psw" required>
      <option value=""> Select Author </option>

      @foreach($Authors as $ALLAuthors)
        <option value="{{$ALLAuthors->authorname}}"> {{$ALLAuthors->authorname}} </option>
      @endforeach

    </select>

    <label for="psw-repeat"><b>Published Date</b></label>
    <input type="date" placeholder="Published Date" name="published_date" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Add</button>
  </div>
</form>

</body>
</html>

@endsection
