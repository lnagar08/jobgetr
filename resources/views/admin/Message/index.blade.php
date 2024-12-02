@extends('layouts.admin')
@section('title', 'Message')
@section('content')
<link href="{{asset('admin/assets/css/apps/mailing-chat.css')}}" rel="stylesheet" type="text/css" />
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="chat-section layout-top-spacing">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="chat-system">
                        <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu mail-menu d-lg-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                        <div class="user-list-box">
                                <div class="search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    <input type="text" class="form-control" placeholder="Search" />
                                </div>
                                <div class="people">
                                    @if(count($users) > 0)
                                       @foreach ($users as $key => $user)
                                            @php
                                                $unreadmsg = App\Models\Message::where('receiver_id', '1')
                                                                                ->where('read_status', 'false')
                                                                                ->where('sender_id', $user->id)
                                                                                ->first();
                                        
                                                // Fetch today's latest message
                                               $curentmsg = App\Models\Message::where(function ($query) use ($user) {
                                                                            $query->where('receiver_id', '1')
                                                                                  ->orWhere('sender_id', '1');
                                                                        })
                                                                        ->where(function ($query) use ($user) {
                                                                            $query->where('receiver_id', $user->id)
                                                                                  ->orWhere('sender_id', $user->id);
                                                                        })
                                                                        ->orderBy('created_at', 'desc')
                                                                        ->first();
                                            @endphp
                                            <div class="person" onclick="getMessages({{ $user->id }});" data-chat="person6">
                                                <div class="user-info">
                                                    <div class="f-head">
                                                        <img src="{{ $user->profile_image ?? asset('admin/assets/img/90x90.jpg') }}" alt="avatar">
                                                    </div>
                                                    <div class="f-body">
                                                        <div class="meta-info">
                                                            <span class="user-name" data-name="Alma Clarke">{{ $user->first_name }} {{ $user->last_name }}</span>
                                                            @if ($unreadmsg)
                                                                <span class="user-meta-time">{{ $unreadmsg->created_at->format('M d') }}</span>
                                                            @elseif ($curentmsg)
                                                                <span class="user-meta-time">{{ $curentmsg->created_at->format('M d') }}</span>
                                                            @else
                                                                <span class="user-meta-time">{{ $user->created_at->format('M d') }}</span>
                                                            @endif
                                                        </div>
                                                        @if ($unreadmsg)
                                                            <span class="preview">{{ $unreadmsg->message }}</span>
                                                        @elseif ($curentmsg)
                                                            <span class="preview">{{ $curentmsg->message }}</span>
                                                        @else
                                                            <span class="preview">{{ $user->email }}</span>
                                                        @endif
                                                    </div>
                                                    @if ($unreadmsg)
                                                        <span class="unreadmsg-right"><b class="text-danger mt-2">New</b></span>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach




                                    @else
                                        <div class="text-center">
                                                No User Found
                                            </div> 
                                    @endif                                                                 
                                </div>
                                </div>
                        <div class="chat-box">
                            
                                <div class="chat-not-selected">
                                        <p> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg> Click User To Chat</p>
                                    </div>
                                <div class="chat-box-inner">
                                        <div class="chat-meta-user">
                                            <div class="current-chat-user-name"><span><img src="assets/img/90x90.jpg" alt="dynamic-image"><span class="name"></span></span></div>
                                            <div class="chat-action-btn align-self-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" onclick="getallmessage();" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>
                                            </div>
                                        </div>
                                        <div class="chat-conversation-box">
                                            <div id="chat-conversation-box-scroll" class="chat-conversation-box-scroll">
                                                <div class="spinner text-center" style="display: none;">
                                                    <div class="spinner-border" role="status">
                                                        <span class="visually-hidden">Loading... <i class="la la-spinner"></i></span>
                                                    </div>
                                                </div>
                                                <div id="showchat" class="chat" data-chat="person6"></div>
                                            </div>
                                        </div>
                                        <div class="chat-footer">
                                            <div class="chat-input">
                                                <form class="chat-form" action="javascript:void(0);">
                                                    <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                                    <input type="text" class="mail-write-box form-control" placeholder="Message" id="messageInput" required />
                                                    <input type="file" id="attachment" class="d-none" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,.gif,.bmp" onchange="handleFileUpload(this)">
                                                    <div id="messageError" style="color: red; display: none;">Please enter a message</div>
                                                    <input type="hidden" id="userId">
                                                    <div class="chat-inputbtn">
                                                    <svg id="fileUploadIcon" style="left: 684px;cursor: pointer;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"/></svg>
                                                    <svg  onclick="saveMessages()" xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="left: 712px;cursor: pointer;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('admin/assets/js/apps/mailbox-chat.js')}}"></script>
<script>
$(document).ready(function() {
    $('#fileUploadIcon').click(function() {
        $('#attachment').click(); // Trigger file selection dialog when SVG icon is clicked
    });
});

function handleFileUpload(input) {
    const file = input.files[0];
    if (file) {
        const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/bmp', 'application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        if (allowedTypes.includes(file.type)) {
            $('#attachment').prop('files', input.files);
            alert('File Atteched Successfully'); 
        } else {
            alert('Invalid file type. Please upload an image, PDF, or DOC file.');
            input.value = ''; // Clear the file input field
        }
    }
}

function getMessages(userId) {
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: "{{ route('amessage.get') }}",
        type: 'POST',
        data: {
            userId: userId,
            _token: csrfToken  // Pass the CSRF token as part of the request data
        },
        success: function(response) {
            $('#showchat').html(response);
            $('#userId').val(userId);
        },
        error: function(xhr, status, error) {
            // Handle any errors
            console.error(error);
        }
    });
}
function saveMessages() {
    var userId = $('#userId').val();
    var message = $('#messageInput').val();
    var attachmentFile = $('#attachment').prop('files')[0];

    // Check if the message is empty
    if (message.trim() === '') {
        $('#messageError').show();
        return;
    } else {
        $('#messageError').hide();
    }

    var formData = new FormData();
    formData.append('userId', userId);
    formData.append('message', message);
    formData.append('attachment', attachmentFile);

    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: "{{ route('amessage.store') }}",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': csrfToken 
        },
        success: function(response) {
            $('#showchat').html(response);
            $('#messageInput').val(''); 
            $('#attachment').val('');
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
}


function getallmessage() {
    var userId = $('#userId').val();
    getMessages(userId);
}


$(document).ready(function() {
    $('.chat-conversation-box').on('scroll', function() {
        if ($(this).scrollTop() === 0) {
         var lastMessageDate = $('#lastMessageDate').val();
            var Messageids = $('#Messageids').val();
            loadMoreMessages(lastMessageDate,Messageids);
        }
    });

    function loadMoreMessages(lastMessageDate,Messageids) {
         var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $('.spinner').show();
        $.ajax({
            url: "{{route('load.more.amessage')}}", // Replace 'your-endpoint-url' with your actual endpoint
            type: 'GET',
            data: {
                 _token: csrfToken, 
                lastMessageDate: lastMessageDate,
                Messageids: Messageids,
            },
            success: function(response) {
                $('.spinner').show();
                if ($('#NoMessages').length) {
                    $('#NoMessages').replaceWith(response);
                    $('.spinner').hide();
                } else {
                    setTimeout(function() {
                        $('#showchat').prepend(response);
                        $('.spinner').hide();
                    }, 800);
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
                  $('.spinner').hide();
            }
        });
    }
});
$(document).ready(function() {
    $('.hamburger').click(function() {
        $('.user-list-box').toggleClass('user-list-box-show');
    });
});


</script>
@endsection
 