<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Answers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" > 
</head>
<body>
    <div class="container">
        <h1>Ask a question</h1>
        <hr />
        <form action="{{ route('questions.store') }}" method="POST">
            {{ csrf_field() }}
            <label for="title">Question:</label>
            <input type="text" name="title" id="title" class="form-control" />

            <label for="description">More Information:</label>
            <textarea class="form-control" name="description" id="description" rows=""></textarea>
            <input type="submit" class="btn btn-primary" value="Submit Question">
        </form>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous" ></script>
</body>
</html>