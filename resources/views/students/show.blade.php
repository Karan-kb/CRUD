<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <style>
        /* Style for the table */
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 1em;
        }

        /* Style for the table head */
        th {
            background-color: #4CAF50;
            color: white;
            text-align: left;
            padding: 8px;
        }

        /* Style for the table body - alternating row colors */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Style for the delete button */
        form button[type="submit"]{
            background-color: #f44336;
            color: white;
            border: none;
            padding: 8px 16px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
        }

        /* Style for the delete button on hover */
        form button[type="submit"]:hover{
            background-color: #d32f2f;
        }

        /* Style for the edit button */
        a.edit-button{
            background-color: #2196F3;
            color: white;
            border: none;
            padding: 8px 16px;
            font-size: 14px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }

        /* Style for the edit button on hover */
        a.edit-button:hover{
            background-color: #0b7dda;
        }
    </style>
</head>
<body>
        <table>
        @if(!$students->isEmpty())

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Tuition Fee</th>
                    <th>Action</th>
                    
                </tr>

            </thead>

            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->course }}</td>
                        <td>{{ $student->tuition }}</td>
                        <td>
                            <form method="POST" action="{{ route('students.destroy', ['student' => $student->id]) }}" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form> 
                            <a href="{{ route('students.edit', ['student' => $student->id]) }}" class="edit-button" style="display: inline-block;">Edit</a>
                        </td>
                       
                            
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1 style"back">No data found</h1>
    @endif
</body>
</html>
