@include('layouts/resume-header')

<div class="mainbody containeruse innerpage">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="progilesidebar">
                    <h2>Tools</h2>
                    <div class="progilesidebar-resume">
                        <h3><a href="{{route('my-profile')}}" >My Profile</a></h3>
                        <h3><a href="{{route('message.index')}}" >Message</a></h3>
                        <h3><a href="{{ route('create-resume') }}" target="_blank">Edit Existing Resume</a></h3>
                        <h3><a href="{{ route('download.pdf') }}" target="_blank">Download Resume</a></h3>
                    </div>
                    <h2>Feed</h2>
                    <div class="progilesidebar-resume progileblog">
                        {!! $setting->value !!}
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card messagedesign">
                        <div class="card-header">
                        @php
                            $admin = App\Models\User::find(1);
                        @endphp
                            <div class="messageadminimg"><img src="{{ $admin->profile_image ?? asset('assets/images/client3.png')}}" class="img-fluid" alt=""><span class="adminname">{{$admin->first_name}}</span> <span class="online active">Online</span></div> <a href="javascript:void(0)" onclick="getMessages()" class=""><i class="las la-sync float-right"></i></a></div>
                    <div class="card-body" id="chat-body">
                        @if(session('success'))
                            <div id="successMessage" class="text-success text-center">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="chatdiv">
                            <div class="spinner text-center" style="display: none;">
                                <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading... <i class="la la-spinner"></i></span>
                                </div>
                            </div>
                            <div class="chat-messages">
                                @if(count($messages) > 0)
                                    <input type="hidden"  id="Messageids" value="{{ $messages->pluck('id')->implode(',') }}">
                                     @php
                                         $lastChatDate = null;
                                         $lastMessageDate = $messages->min('created_at')->format('Y-m-d');
                                    @endphp
                                         <input type="hidden" id="lastMessageDate" value="{{ $lastMessageDate }}">
                                    <div class="chatul">
                                        @foreach ($messages as $message)
                                            @php
                                                $admin = App\Models\User::find(1);
                                                $user = App\Models\User::find($userId);
                                                $isSender = $message->sender_id == $userId;
                                                $isReceiver = $message->receiver_id == 1;
                                                $profileImage = $isSender ? ($user && $user->profile_image ? $user->profile_image : asset('assets/images/client3.png')) : ($admin && $admin->profile_image ? $admin->profile_image : asset('assets/images/client3.png'));
                                                $fullName = $isSender ? $user->first_name : $admin->first_name;
                                                $timeFormat = $isSender ? 'h:i A' : 'h:i A'; // Adjust the time format based on sender type
                                                $chatDate = $message->created_at->format('Y-m-d');
                                            @endphp
                                            @if (!$lastChatDate || $lastChatDate != $chatDate)
                                                <!-- Display chat date only if it's different from the last chat date -->
                                                <div class="chatdate"><span>{{ $chatDate }}</span></div>
                                                @php
                                                    $lastChatDate = $chatDate;
                                                @endphp
                                            @endif
                                            <div class="chatlist {{ $isSender || $isReceiver ? 'chatlistright' : '' }}">
                                                <div class="chatlist-img"> 
                                                    <img src="{{ $profileImage }}" class="img-fluid" alt="">
                                                </div>
                                                @if ($isSender || $isReceiver)
                                                    <span class="chatlist-time">{{ $message->created_at->format($timeFormat) }}</span>
                                                    <span class="chatlist-name">{{ $fullName }}</span>
                                                @else
                                                    <span class="chatlist-name">{{ $fullName }}</span>
                                                    <span class="chatlist-time">{{ $message->created_at->format($timeFormat) }}</span>
                                                @endif
                                                <div class="chatlist-messages-main">
                                                    <div class="chatlist-messages">
                                                        {{ $message->message }}
                                                    </div>
                                                </div>
                                                @if ($message->read_status == 'true')
                                                    <span class="seen"><i class="la la-check-double"></i></span>
                                                @else
                                                    <span class="seen"><i class="la la-check"></i></span>
                                                @endif
                                                @if ($message->attachment) 
                                                    <span class="chatlistdownload">
                                                        <a target="_blank" href="{{ $message->attachment }}">
                                                            <i class="la la-download"></i>
                                                        </a>
                                                    </span> 
                                                @endif
                                            </div>
                                        @endforeach


                                    </div>
                                @else
                                    <div class="text-center">
                                         <span id="NoMessages">No Messages</span>
                                    </div>
                                @endif



                            </div>
                        </div>
                        <div class="messageinput">
                            <input type="text" name="message" class="form-control" id="messageInput" placeholder="Type a message...">
                            <div class="attachmentdiv">
                                <label class="attachment">
                                <input type="file" name="attachment" id="attachment" class="form-control" accept="image/*,application/pdf">
                                 <i class="la la-paperclip"></i></label>
                                <button type="button" onclick="saveMessages()" class="btn btn-primary"><i class="lab la-telegram"></i></button>
                            </div>
                        </div>
                        <div id="messageError" style="color: red; display: none;">Please enter a message</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function getMessages() {
        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "{{ route('message.get') }}",
            type: 'POST',
            data: {
                _token: csrfToken  // Pass the CSRF token as part of the request data
            },
            success: function(response) {
                $('.chat-messages').html(response);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }


    function saveMessages() {
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
        formData.append('message', message);

        // Check if attachment file is selected
        if (attachmentFile) {
            formData.append('attachment', attachmentFile);
        }

        var csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "{{ route('message.store') }}",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': csrfToken 
            },
            success: function(response) {
                $('.chat-messages').html(response);
                $('#messageInput').val('');
                $('#attachment').val('');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }
$(document).ready(function() {
    $('.chatdiv').on('scroll', function() {
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
            url: "{{route('load.more.messages')}}", // Replace 'your-endpoint-url' with your actual endpoint
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
                        $('.chat-messages').prepend(response);
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

</script>
@include('layouts/footer')



