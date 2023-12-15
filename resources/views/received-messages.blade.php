@extends('layouts.app')

@section('content')
<div class="container">
<div class="fixed-bottom message-input">

    <div class="row">
        <div class="col-md-8">
            <!-- Your existing content -->
            <h1>Received Messages</h1>

            <div class="message-container">
                @forelse ($receivedMessages as $message)
                    <div class="message">
                        <p class="sender">{{ $message->sender->name }}</p>
                        <p class="content">{{ $message->content }}</p>
                    </div>
                @empty
                    <p>No messages received.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <textarea name="content" placeholder="Type your message"></textarea>
        <button type="submit">Send</button>
    </form>
</div>
</div>
@endsection


