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