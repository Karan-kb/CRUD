<!DOCTYPE html>
<head>
    <title>Student Details</title>
    <style>
/* Style for the form */
form {
width: 50%;
margin: 0 auto;
padding: 2em;
background-color: #f5f5f5;
border-radius: 10px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

    /* Style for the labels */
    label {
        display: block;
        margin-bottom: 0.5em;
    }

    /* Style for the input fields */
    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 0.5em;
        margin-bottom: 1em;
        border: none;
        border-radius: 5px;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
    }

    /* Style for the submit button */
    button[type="submit"]{
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 8px 16px;
        font-size: 14px;
        cursor: pointer;
        border-radius: 5px;
    }

     /* Style for the submit button on hover */
     button[type="submit"]:hover{
        background-color: #3e8e41;
    }
</style>
</head>
<body>
<form action="{{route('students.update', $student->id)}}" method="POST">

    @csrf

    
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $student->name}}"><br>

    <label for="course">Course:</label>
    <input type="text" id="course" name="course"  value="{{ $student->course}}"><br>

    <label for="tuition">Tuition Fee:</label>
    <input type="number" id="tuition" name="tuition" value="{{ $student->tuition}}"><br>

    <button type="submit">Submit</button>
</form>

</body>

</html>