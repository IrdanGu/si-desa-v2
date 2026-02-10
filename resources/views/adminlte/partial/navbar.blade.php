<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" href="" id="notificationDropdown" data-toggle="dropdown">
                <i class="far fa-bell"></i>
                @if($surat_ktm + $surat_ku + $surat_domisili > 0)
                    <span id="notification-count" class="badge badge-warning navbar-badge">{{  $surat_ktm + $surat_ku + $surat_domisili }}</span>
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">Notifications</span>
                <div class="dropdown-divider"></div>
                @if($notifications->count() > 0)
                    @foreach($notifications as $notification)
                    @if($notification instanceof App\Models\Surat)
                    <a href="{{ route('suratindex') }}" class="dropdown-item notification-item" data-id="{{ $notification->id }}">
                        <i class="fas fa-envelope mr-2"></i> {{ $notification->nama }}
                        <span class="float-right text-muted text-sm">{{ $notification->created_at->diffForHumans() }}</span>
                    </a>
                @elseif($notification instanceof App\Models\Surat_KeteranganUsaha)
                    <a href="{{ route('surat_keteranganusahaindex') }}" class="dropdown-item notification-item" data-id="{{ $notification->id }}">
                        <i class="fas fa-envelope mr-2"></i> {{ $notification->nama }}
                        <span class="float-right text-muted text-sm">{{ $notification->created_at->diffForHumans() }}</span>

                    </a>

                    @elseif($notification instanceof App\Models\Surat_KeteranganDomisili)
                    <a href="{{ route('surat_keterangandomisiliindex') }}" class="dropdown-item notification-item" data-id="{{ $notification->id }}">
                        <i class="fas fa-envelope mr-2"></i> {{ $notification->nama }}
                        <span class="float-right text-muted text-sm">{{ $notification->created_at->diffForHumans() }}</span>

                    </a>
                @endif
            @endforeach
        @else
                    <span class="dropdown-item">No new messages</span>
                @endif
                <div class="dropdown-divider"></div>
                <a href="" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Logout</button>
            </form>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    function updateNotificationCount() {
        $.ajax({
            url: '{{ route("navbar.data") }}',
            method: 'GET',
            success: function(response) {
                $('#notification-count').text(response.surat);
            },
            error: function() {
                console.error('Failed to fetch notification count.');
            }
        });
    }

    // Update notification count on page load
    updateNotificationCount();

    // Optionally, update periodically (e.g., every 5 minutes)
    setInterval(updateNotificationCount, 300000); // 5 minutes in milliseconds

    // Mark notifications as read when clicked
    $(document).on('click', '.notification-item', function(event) {
        // event.preventDefault();
        // var notificationId = $(this).data('id');
        // var notificationItem = $(this);

        $.ajax({
            url: '{{ route("notification.read") }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id: notificationId
            },
            success: function() {
                var count = parseInt($('#notification-count').text()) - 1;
                if (count <= 0) {
                    $('#notification-count').remove();
                } else {
                    $('#notification-count').text(count);
                }
                // Redirect to suratindex after marking as read
                window.location.href = notificationItem.attr('href');
            },
            error: function() {
                console.error('Failed to mark notification as read.');
            }
        });
    });
});


</script>
