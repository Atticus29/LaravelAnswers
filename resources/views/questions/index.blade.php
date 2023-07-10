@include('header')

@section('content')
<div class="container">
    <h1>Recent Questions</h1>

    @foreach ($questions as $question)
        <hr/>
        <div class="well">
            <h3>{{ $question->title }}</h3>
            <p>{{  $question->description }}</p>
            <a href="{{ route('questions.show', $question->id) }}" class="btn btn-primary small">View Details</a>
        </div>
    @endforeach
</div>
