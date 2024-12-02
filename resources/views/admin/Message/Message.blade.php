@if(count($messages) > 0)
    <input type="hidden" id="Messageids" value="{{ $messages->pluck('id')->implode(',') }}">
    @php
        $lastChatDate = null; // Variable to track the last chat date
        $lastMessageDate = $messages->min('created_at')->format('Y-m-d');
    @endphp
    <input type="hidden" id="lastMessageDate" value="{{ $lastMessageDate }}">
    <div class="chatul">
        @foreach ($messages as $message)
            @php
                $admin = App\Models\User::find(1);
                $user = App\Models\User::find($userId);
                $isSenderAdmin = $message->sender_id == 1;
                $isReceiverUser = $message->receiver_id == $userId;
                $profileImage = $isSenderAdmin ? ($admin && $admin->profile_image ? $admin->profile_image : asset('assets/images/client3.png')) : ($user && $user->profile_image ? $user->profile_image : asset('assets/images/client3.png'));
                $fullName = $isSenderAdmin ? $admin->first_name : $user->first_name;
                $timeFormat = 'h:i A'; // Time format is the same for both sender types
                $chatDate = $message->created_at->format('Y-m-d'); // Get the chat date
            @endphp

            @if (!$lastChatDate || $lastChatDate != $chatDate)
                <!-- Display chat date only if it's different from the last chat date -->
                <div class="chatdate"><span>{{ $chatDate }}</span></div>
                @php
                    $lastChatDate = $chatDate;
                @endphp
            @endif

            <div class="chatlist {{ $isSenderAdmin ? 'chatlistright' : '' }}">
                <div class="chatlist-img"> 
                    <img src="{{ $profileImage }}" class="img-fluid" alt="">
                </div>
                @if ($isSenderAdmin || $isReceiverUser)
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
                    <span class="seen unseen"><i class="fa fa-check"></i></span>
                @else
                    <span class="seen"><i class="fa fa-check"></i></span>
                @endif
                @if ($message->attachment) 
                    <span class="chatlistdownload">
                        <a target="_blank" href="{{ $message->attachment }}">
                            <i class="fa fa-download"></i>
                        </a>
                    </span> 
                @endif
            </div>
        @endforeach
    </div>
@else
    <div class="conversation-start">
        <span id="NoMessages">No Messages</span>
    </div>
@endif

