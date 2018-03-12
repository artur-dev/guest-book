@if ($errors->any())
    <div class="alert alert-title">
        You have errors in the form!
    </div>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{!! Form::open(['route' => 'comment.store']) !!}

{{ csrf_field() }}

<div class="form-group">
    {!! Form::label('guest_name', 'Your Name') !!}
    {!! Form::text('guest_name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('guest_email', 'E-mail') !!}
    {!! Form::text('guest_email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

{!! Form::close() !!}
