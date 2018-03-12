{!! Form::open(['route' => 'comment.store']) !!}

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