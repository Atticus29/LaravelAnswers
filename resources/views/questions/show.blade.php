@include('header')

@section('content')
    <div class="container">
        <h1>{{ $question->title }}</h1>
        <p class="lead">
            {{ $question->description }}
        </p>
        <hr/>    


        
        
        @if($question->answers->count()> 0)
            <!-- answers  -->
            @foreach($question->answers as $answer)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>{{ $answer->content }}</p>
                    </div>
                </div>
            @endforeach
        
        @else
            <!-- handle the case where there are no answers -->
            <p>There are no answers for this question yet. Submit one below!</p>
        @endif

        <form action="{{ route('answers.store') }}" method="POST">
            {{ csrf_field() }}
            <h4>Submit Your Answer</h4>
            <textarea class="form-control" name="content" rows="4"></textarea>
            <input type="hidden" value="{{ $question->id }}" name="question_id" />
            <button class="btn btn-primary">Submit Answer</button>
        </form>
    </div>