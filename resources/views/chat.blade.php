
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ 'Thrift Your Book' }}</title>
    <style>
    /* width */  
    ::-webkit-scrollbar {
        width: 7px;
    }
    /* Track */
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #a7a7a7;
    }
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #929292;
    }
    ul {
        margin: 0;
        padding: 0;
    }
    li {
        list-style: none;
    }
    .user-wrapper, .message-wrapper {
        border: 1px solid #dddddd;
        overflow-y: auto;
    }
    .user-wrapper {
        height: 400px;
        padding: 20px;
        border-radius: 20px;
    }
    .user {
        cursor: pointer;
        padding: 5px 0;
        position: relative;
    }
    .user:hover {
        background: #f3f4f6;
    }
    .user:last-child {
        margin-bottom: 0;
    }
    .pending {
        position: absolute;
        left: 0px;
        top: 15px;
        background: #3b3c43;
        margin: 0;
        border-radius: 50%;
        width: 18px;
        height: 18px;
        line-height: 18px;
        padding-left: 5px;
        color: #ffffff;
        font-size: 12px;
    }
    .media-left {
        margin: 0 10px;
    }
    .media-left img {
        width: 64px;
        border-radius: 64px;
    }
    .media-body p {
        margin: 6px 0;
    }
    .message-wrapper {
        padding: 10px;
        height: 336px;
        border-radius: 20px;
        background: #f3f4f6;
    }
    .messages .message {
        margin-bottom: 15px;
    }
    .messages .message:last-child {
        margin-bottom: 0;
    }
    .received, .sent {
        width: 45%;
        padding: 3px 10px;
        border-radius: 10px;
    }
    .received {
        background: #ffffff;
    }
    .sent {
        color: white;
        background: #3b3c43;
        float: right;
        text-align: right;
    }
    .message p {
        margin: 5px 0;
    }
    .date {
        color: #cfcfcf;
        font-size: 12px;
    }
    .active {
        background: #eeeeee;
    }
    input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 15px 0 0 0;
        display: inline-block;
        border-radius: 4px;
        box-sizing: border-box;
        outline: none;
        border: 1px solid #cccccc;
    }
    input[type=text]:focus {
        border: 1px solid #aaaaaa;
    }
    .redirect {
        background-color: #3b3c43;
        padding: 10px;
        font-size: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        color: white;
        transition-timing-function: ease-in-out;
        transition: 0.2s;
        border-radius: 50%;
        width: 30px;
        height: 30px;
    }

    .redirect:hover {
        text-decoration: none;
        color: white;
        background-color: #4e4f55;
    }
    @media (min-width: 1024px) {
	#search-button {
        display: none;
    }
}
    </style>
  </head>
<body>
<x-app-layout>
<x-slot name="header">  
    <!-- <div class="redirect-container mb-4">
		<a href="{{ URL::previous() }}" class="redirect">
		<i class="fa-solid fa-arrow-left"></i> </a>
	</div> -->
</x-slot>
<x-slot name="slot">
    <div class="container-fluid mb-4" style="padding-left: 60px; padding-right: 60px;">
        <div class="row flex justify-center">
            <div class="col-md-3">
                 <div class="user-wrapper">    
                    <ul class="users">
                    <form action="{{action([App\Http\Controllers\Auth\RegisteredUserController::class, 'index_one'])}}" method="POST" class="flex justify-center items-center" ">
                    @csrf
                        <div class="w-full flex flex-col mb-2">
                            <input type="text" id="dsearch" name="chat" class="block px-4 mb-2 py-2 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-200 focus:border-gray-400 input-control" placeholder="{{ __('l.searchchat') }}" required>
                            <x-button id="search-button" class=" py-2 flex items-center justify-center" style="width: 50%;" type="submit" value="search">{{ __('l.search') }}</x-button>
                        </div>
                        
                    </form>
                    @foreach($users as $user)
                        @if (is_countable($name) && count($name) == 0)
                        <li class="user" id="{{ $user->id }}">
                                @if($user->unread)
                                   <span class="pending">{{ $user->unread }}</span>
                                @endif
                                <div class="media">
                                    <div class="media-body" style="border-radius: 10px;">
                                        <p class="name ml-4">{{ $user->name }}</p>
                                    </div>
                                </div>
                            </li>
                        @elseif ($user->name==$name)
                           <li class="user" id="{{ $user->id }}">
                                @if($user->unread)
                                   <span class="pending">{{ $user->unread }}</span>
                                @endif

                                <div class="media">
                                    <div class="media-body">
                                        <p class="name ml-4" style="border-radius: 10px;">{{ $user->name }}</p>
                                    </div>
                                </div>
                            </li>
                            @endif
                       @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-8" id="messages">

            </div>
        </div>
    </div>
</x-slot> 
</x-app-layout>

<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    var receiver_id = '';
    var my_id = {{ Auth::id() }};
    $(document).ready(function () {
        // ajax setup form csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;
    var pusher = new Pusher('85db3734be833f620d43', {
    cluster: 'eu' });
    var channelName = "<?php echo 'notify-channel' ?>";
    var status = $('#id').val();
    var channel = pusher.subscribe('notify-channel');
    channel.bind('App\\Events\\Notify', function(data) {
      //  alert(JSON.stringify(data));
            if (my_id == data.from) {
                $('#' + data.to).click();
            } else if (my_id == data.to) {
                if (receiver_id == data.from) {
                    // if receiver is selected, reload the selected user ...
                    $('#' + data.from).click();
                } else {
                    // if receiver is not seleted, add notification for that user
                    var pending = parseInt($('#' + data.from).find('.pending').html());
                    if (pending) {
                        $('#' + data.from).find('.pending').html(pending + 1);
                    } else {
                        $('#' + data.from).append('<span class="pending">1</span>');
                    }
                }
            }
        });
        $('.user').click(function () {
            $('.user').removeClass('active');
            $(this).addClass('active');
            $(this).find('.pending').remove();
            receiver_id = $(this).attr('id');
            $.ajax({
                type: "get",
                url: "message/" + receiver_id, // need to create this route
                data: "",
                cache: false,
                success: function (data) {
                    $('#messages').html(data);
                    scrollToBottomFunc();
                    //alert("receiver_id");
                }
            });
        });
        $(document).on('keyup', '.input-text input', function (e) {
            var message = $(this).val();
            // check if enter key is pressed and message is not null also receiver is selected
            if (e.keyCode == 13 && message != '' && receiver_id != '') {
                $(this).val(''); // while pressed enter text box will be empty
                var datastr = "receiver_id=" + receiver_id + "&message=" + message;
                $.ajax({
                    type: "post",
                    url: "message", // need to create this post route
                    data: datastr,
                    cache: false,
                    success: function (data) {
                    },
                    error: function (jqXHR, status, err) {
                    },
                    complete: function () {
                        scrollToBottomFunc();
                    }
                })
            }
        });
    });
    // make a function to scroll down auto
    function scrollToBottomFunc() {
        $('.message-wrapper').animate({
            scrollTop: $('.message-wrapper').get(0).scrollHeight
        }, 50);
    }
 </script>
 </body>
</html>
