<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blank Space Diary</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background-size: cover;
    background-position: center;
        }

        /* Style for the heading */
        /* .heading {
            text-align: center;
            width: 100%;
            margin-bottom: 20px;
        } */

         h1 {
            font-size: 36px;
            color: #edebeb;
        }

        /* Style for the "Add Note" button */
        .addnote {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        .addnote a {
            display: inline-block;
            padding: 10px 15px;
            background-color: #6fc289;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease-in-out;
        }

        .addnote a:hover {
            background-color: #315337;
        }

        /* Style for each note block */
        .note {
            min-height: 150px;
            width: calc(25% - 20px);
            margin-left: 40px;
            margin-right: 40px;
            margin-top: 30px;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        /* Hover effect */
        .note:hover {
            transform: translateY(-5px);
        }

        /* Style for note title */
        .note h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        /* Style for note text */
        .note p {
            font-size: 16px;
            color: #555;
        }

        /* Style for links and buttons */
        .note a,
        .note form {
            margin-top: 10px;
        }

        .note a {
            display: inline-block;
            padding: 8px 12px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease-in-out;
        }

        .note a:hover {
            background-color: #2980b9;
        }

        .note form input[type="submit"] {
            background-color: #e74c3c;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .note form input[type="submit"]:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

        <h1>Blank Space Diary</h1>
  
    
    <div class="addnote">
        <a href="{{ route('n.add') }}">Add Note</a>
    </div>
    
    @foreach ($notes as $note)
        <div class="note">
            <h2>{{ $note->title }}</h2>
            <p>{{ $note->noteText }}</p>

            <a href="{{ route('n.edit', ['note' => $note]) }}">Edit note</a>
            <form method="post" action="{{ route('n.delete', ['note' => $note]) }}">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form>
        </div>
   
    @endforeach
</body>
</html>
