<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <style>
            .entry {
                margin-top: 20px;
            }
        </style>
    </head>
    <body>

<a href="{{ url('comment') }}" class="btn btn-info">Add new entry</a>

</button>
@foreach ($comments as $comment)
    <div class="entry">
        <div class="user">
            {{ $comment->guest_name }}
            @if ($comment->guest_email)
                {{ $comment->guest_email }}
            @endif
        </div>
        <div class="comment">
            {{ $comment->comment }}
        </div>
    </div>
@endforeach
    </body>
</html>

