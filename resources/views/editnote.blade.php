<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #313030;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

</head>
<body>
   <form method="post" action="{{route('n.update', ['note' => $note->id])}}">
    @csrf
    @method('put')
    <input type="text" placeholder="Title" name="title" value="{{ old('title', $note->title) }}"> <br>
<label for="">Your note: </label>
<input type="text" name="noteText" placeholder="Write here..." value="{{ old('noteText', $note->noteText) }}">

    <input type="submit" value="Save">
   </form>
    
</body>
</html>