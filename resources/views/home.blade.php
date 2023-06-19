<!DOCTYPE html>
<html lang="en">
 <head>
   @include('partials.head')
 </head>
 <style>
  .mark-as-read-checkbox {
  margin-top: 10px;
}

.mark-as-read-checkbox .form-check-input {
  margin-right: 5px;
}
.notification-wrapper {
  display: flex;
  align-items: center;
}

.notification-content {
  flex: 1;
  /* Add any desired styles */
}

.mark-as-read-checkbox {
  margin-left: 10px; /* Adjust margin as needed */
  display: flex;
  align-items: center;
}

.mark-as-read-checkbox .form-check-input {
  margin-right: 5px; /* Adjust margin as needed */
}

 </style>
 <body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAPDxAQEBANDhAQEBMOEBUQEA8SDxASGREWFhYXFhgYHSggGBomJxgXLT0hJSkrLy46FyszODM4QygtLjcBCgoKDg0OFxAQGC0eIB8tKy0tLS43LS0tKy0tLS03Ny0tLTcrKy0tLSsuLS0tLS0tListLS0tKy0tKzcuLTctN//AABEIAMgAyAMBIgACEQEDEQH/xAAcAAEAAgIDAQAAAAAAAAAAAAAABgcFCAEDBAL/xAA+EAABAwIEAgYGBwgDAQAAAAABAAIDBBEFBhIhBzETQVFhcZEUIjKBobEjQnKCksHRM1Jic6KywvAVF1RT/8QAGgEBAAIDAQAAAAAAAAAAAAAAAAIEAQMFBv/EACoRAAICAQMDAwQCAwAAAAAAAAABAgMRBCExBRJBEyJRMmFxgSOxFEJS/9oADAMBAAIRAxEAPwC8UREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREBwiKO5lzjS0AtI7XJ1MZYu5X3vyCw2lyShCU3iKySJeDEMZpqcXmmjYBvzufIbqmcf4jVlTdsbjTMN9o3EP/ELFRGed8jtUj3yO6y9xcfMrVK5eDqVdLk95vBdtfxOw+O+gyzfy2jf8RCw03FyPfRTyd2rT+TlU6LU7ZF2PTaVzuWf/wBuP/8AMzzP6r0wcXI9tdPJ36dP5uVT2RPVkS/wKH4LxoOJ2HyW1GWD+Y3l+ElSfD8ZpqgXhmjeDvzsfI7rWddkE743ao3vjd1Fji0+YUlc/Jos6VB/S8G0aKi8B4jVlNZshNSzbaRx19/rG5VpZazjS14sx2iTrY+wdy6rcwt0bEzmX6K2rdrKJGiIplQIiIAiIgCIiAIiIAiIgOF1zStY0ueQ1rRckmwA70mlaxpe4hrWgucSbAAcyqW4gZ3dWOMEB007didwZDe/lyUJzUUWdNppXSwuDKZ14kFxfBRbNB0ulubnt09niqzkkLiXOJJJuSeZN7+a+VKspZIqK8h5DooOZeRbVv8AVuqzcps9BCFWmh8EZp4HyODI2ue48g0Fzj7utTTA+GdXOA6UimYf3mkv97biytbAMs0tC20MYvYanOsXut2rMrbGleTmX9Uk9q1ggmG8LqKOxkdJM7rvYMP3d1n6bKOHx+zSwXta5YLlZxFtUEvBz5am2XMmY7/gaS2n0eHT2aRZeSpyhh8ntUsF7WuGNuFnEWe1EFbNf7MguJcLqKQExmWF3VaxYPu7KFY3wzrILuiIqWD91pD/AMO91d6KDqiyzVr7oec/k1bnhdG4te1zHDYhwII8+S4jkLSHNJBBuCOYN7+a2KzBlelrmaZmWd1PZYPaqczbkqow8l1nSwdTxY6d/rW5LRKtx3Oxp9dXd7XsyS5K4kFpZBW7tJ0tlubjs1dvirWhla9ocwhzXC4IIII7rLVtTrh9nd1G4QTnVTu2B3JjN7+XNThb4ZW1nT0131r9F3IuqGVr2hzSHNcA5pBuCCNl2qwcQIiIAiIgCIiA4RFHc85gFBSOkH7R50RDb2rE3+Cw3hZJQg5yUV5IRxUzaXONFA8hov05G1zf2b+4+arFfUkhcS5xLiTckkknz5lSjh/lg19QC8fQRHVJz9br0jt6vNVG3OR6eEYaar8GV4eZGNUW1NS21OLljbkGQ3I3tyH6K46eBsbQxjQ1rRZoAsAEp4GxtaxjQ1rRZoAsAFgc35tiw6MFw6SV/sMB3PeewfqrKioI4Nttmqswv0iRotesWzrX1L9XpE0IHJsL3xjn16bXVmcNs2mtjMMzvp4+s29dtufjzWI2KTwSu0FlUO9k6REWwpBERAEREAXTUU7ZGlj2h7XCxBAIIXciBPBSPEHJDqNzqiBpdTuN3AEkxkm3iR+qgq2iqadsrHMe0Oa4aSCLghUJn3LJw+pOn9jIdUZ3269J/wB6lWtrxujvaDWep/HPkk/CvNpa70Kd5LTboCeo39m/vHkrZWrUchaQ5pLSDcEEgjy5FbB5GzAK+ka8/tGepKNvasDf4qVU87MrdS0va/Ujw+SRoiLecoIiIAiIgOFRfFLGvSa0xtN2U5dGN/rXAd8Qrlx2uFPTTSk2DGHzOw+a1rqJjI973bue4vd4kklaLpbYOt0urMnN+BTQOke2Ngu57gxo7SSAFsVlPBW0NLHC21/aebW1OPMn4eSqnhNg/pFYZXC7KcNd98k6f7Vd6Ux2yOqX5kq14OCbC612zxiDqjEKlx5MlfE3f6rXFo+S2Hlbdrh2gj4LWrH4iyrqWG/q1Erd+6RyXcIdKS75PyeBezCMRfSzxzxmzmODuZ3F9x7140Vfg7bSawzZHLeNR11MyeMjcWeLi7XA2IP+9ayypLhJijoq4Qblk7XC2+xDdV/6firtVyEu5ZPL6uj0bHFcHKIimVgiIgCIiA4WCzlgba6kfEfaHrxnscAfyJ81nUCw1lYJQm4SUl4NW5Y3McWuBDmktcDzBvZS/hbjXo1a2NxsyoLYzvb1r2b8Svrirg/o9b0jRZlRqkH2wQXf3KH08xjex7dnMcHt8QQQqn0yPT+3UUflG0aLH4FXCopoZRuHsHmNj8lkFcPLyWG0zlERDAREQEI4t1nR4cW3t00jY/HYu/xVHK2ONc30dOz+PX/S4Kp1UtfuPR9NjinPyXZwhoBHQukIs6WS9+1oA0/MqdrB5JpxHh1K3a/QtJt1mwus4FZgsJHC1Mu62T+4VFcVMLMFe54FmTgvHe763xKvVQzijgfpVGXsAMkB1jtLbEED4eSjYsxN2ht9O1Z4exRaIvuFwDmlwuA4EjtF7qoemfBa3CjKxjArpm2LgRCDzA5F1h7/ADVnLwYFUMlpYXx20GNoFuqwtb4L3q7BJI8pqLZWWNyOURFI0BERAEREAREQEA4w0AkomS2u6KTya4et/aFSy2JzzT9Jh1ULAkROcPGxWuyq3Lc9B0ueamvhl48JKzpMODL36GR0fhsHf5Kbqr+Ck30dQz+PX/S0fkrQW+t5ijk6yPbdJBERTKoREQFTca/bpvsn5lVgFbPGuH6Onf8Ax6P6XH8lUyqWfUz0vT96EbK5ct6JT6fZ6JtvCyySweSKjpMOpXbX6FoNuo2F1nFajwedtWJy/JyuHNuLLlFkgUFxCyyaGpJaPoJbujsLBu+7fdcKKLZXMGDRVsD4JRs4bHa7XW2I71r9mPA5aGd0MgO27XWIa9t+YVWyGHlHotDq1bHslyiQ8Ps6OoXiCX1qZ57f2RO9x3fqrup52yMa9jg5rgHNINwQRcLVxTbIGdnULhDMdVM7xvGb8x3c1muzGzNeu0Pf74c/2Xki6aedsjWvY5r2uFwWkEEd1l3KycF7BF8udbnsuGPB5EHwIKGcH2iIhgIiIDGZjANHUBxs3onX8LLWorYrPFUIsPqnXFzE5rb9brGy11Va7lHd6UvZJ/cs/gp7dT9kfMK2FWfBSA9DUSdXSaPJrD+as1ba/pRzte83yCIi2FMIiICEcW6PpMOLrX6GRsnhzb/kqOWzGPUIqKaaE7h7D5jcfJa11EJje+N2zmOcx3iCQVWuW+TvdKszBx+C6eENeJKExk3dFJa3Y0gafkVOlSHCbGOgrDC42ZUBrfvgnT4e0rvW2p5ic3X19lz++5yiIthTOFg815dixCB0bwA+x6N/W13V7lnEWGskoTcGnHk1oxzB5qKZ0MzS0tOx2s4W2IPWFj1sbmfLkGIQmORoD/qPsNTD49ionMuXZ6CUxyt9Uk6Hi+l4v8Cqtlbiei0msjcsPZmdyLnh9CeimLpKdxFut0feO0forMnz5hzIulE4cLbNDJNRPZay1/RI2tLAu0FVsu7glebM81Nc8ta50MAPqtb6pPeSN1isJzJV0r9cU0g7Q46weX717LEoodzbyWY0Vxj2pbFvZe4pxSWZVt6E7eu1riz3gXKsGjrYpm6opGSD+E3WsClXDetlZiEDGSPDHus5ocdJ3tuO1boWvhnN1XTodrnDbBfqIsNmbMENBCZZDvyY0WLnOsdgD4Le3g40YOT7VyQvjJjIbHFSNPrPJkktzaAAAPfqPkqlXtxjE5Kud88hJc9xPP2RfYDsCyGTMDdXVkcdrxtc18t720Ai494uqkn3SPTUQWnp38clwcNcMNPh8dxZ0hMrh3k2HwAUqXxFGGNDRsGgNC+1bSwsHmrJ983J+TlERZIBERAcKiuKOC+jVrpGizKgulG1vWuC74lXqo7nnL4r6RzB+0YdcZ29qxFvioWRyi3or/StTfDNfqad0b2yMNnMcHtPYQQQtisp402upI5m21ey8XvpcOr5ea1zkjLSWuBaQbEEEEefIqUcP8zmgqAHn6CU6ZL39Xq1d3V5KvXPte52Ndp/WrzHlF/IuqnnbI1r2ODmuGppBuCF2q2ecCIiA4XhxbC4aqMxTMa9p7QDY2tcdhXvXCGU2nlFKZq4bz05MlNeoi3OkA9Izu67+Kgj2kEgggjmFtMsBj+UKOtuZY9LyLa2WDx7zdaJU/B1dP1NraxZ+5ruisPGuFdRHd1M8Tt5hrrNcPEk7qIVuXK2EkSU1QLdYieW+YC0uDXg6tepqs+mRi1m8m4vHRVkc8jS9jQ4Wbz3HNYZ7C3ZwLT3gj5r5WE8PJtlGM4uL4ZamMcWBpLaWA3I2fI7kfs2381XGLYpNVyGWd7nuPaTZvc3sC+KbDp5do4ZpL/uRvd8gpbgHDWrqCHTD0aM7+sPpOfLTzCnmUypGOn0yzx/ZEcPoZKiRsUTC97uQAJ6xzt1K+8k5YZh0GnZ0r/WldYbm3Id3PzXqy7lqnoGaYW7kDU91i93isyt1dfbucrWa13e2OyOURFtOeEREAREQBERAVLxUykWu9NgYS036cDqN/at7z5KsVtHNE17SxwDmuBa4EXBB5qluIGSHUbjPANVO7cjcmM3t5clXtr8o7fT9YmlXP8AR28PM8mlLaapdenNwx1iTGbk725j9VclPO2Roexwc1wuCDcELVxSrKWd6igIYS6WDkWE3Ld/q3+SxXbjZktZoO/318l+osLgGZqWubeGQXsNTXWD237VmlYTycSUJReJLByiIskQiIgC+XsB5gHxAK+kQHlfh8J5xRH7jf0XVHg9M3cQQ3+wCveuFjBLvl8nVHTMb7LGN8GgLuRFkjkIiIAiIgCIiAIiIAiIgC6pomvaWuaHNcLEEAgjvuu1EBUudeG5bqnohdt9TorG47dPb4Ks5Iy0lrgQQbEHmDe3mtpVHcy5Opa8Xe3RJ1PZYO5W3vzC0Tqzujq6XqTj7bN18mv1PO+NwfG5zHDkWktcPf1KaYHxMrIAGygVLB+84h/vdY3XVj3DisprujaalgvvG06+71RcqITwPjdpkY+N3WHtLT5FavdE6n8GoXhl0YbxRopABI2SFx53sWD72yz9Nm7D5PZqoL2vYvFwtdEUlcyrPpdT4bRst/z1JbV6RDp7dQsvJU5vw+P2qqC9r2D23K10uiz6z+CC6TDzJl2YlxRoo7iJsszuqwAYffuorPxVqnTMc2NkcQddzb6i4Wt7VtlXq7KenfI4NjY+Rx5BjS53kFF2yZYhoKILdZ/JsvhWIMqYWTRm7HtDh3XF7HvXsVc8K8Lr6YPE0Zjp3gENfdsjXb/VPLmrGVmLyss4N9ahNxi8o5REUjSEREAREQBERAEREAREQBERAEREBwsfiGDU1QLTQxvB25WPmN1kEQypNPKITX8McPkvoEsP8tw2/ECsNNwjj30VEndq0/k1Wgig64vwWY6y6PEipv8AqN//AKWeR/RemDhHHtrqJLdenT+bVaCLHpx+CT19/wD0Qmg4ZYfFbWJZ7f8A0dz/AAgKTUGD09OAIoY2AcrC58zuveikopeDRO+yf1SbOURFI1BERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREB//Z"
          height="15"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      @if (Auth::user()->is_admin)
        <li class="nav-item">
          <a class="nav-link" href="{{ route('users.userList') }}">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('notifications.create') }}">Create Notifications</a>
        </li>
        @endif
       
        <li class="nav-item">
          <a class="nav-link" href="{{ route('notifications.list') }}">Notifications</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
      </a>

      <!-- Notifications -->
      <div class="dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fas fa-bell"></i>
    <span class="badge rounded-pill bg-danger" id="unread-count">{{$unreadCount }}</span>
  </a>
  <ul class="dropdown-menu dropdown-menu-end notifications-dropdown" aria-labelledby="navbarDropdown">
    <li>
      <a class="dropdown-item view-all-btn" href="{{ route('notifications.list') }}">View All Notifications</a>
    </li>
    <li class="dropdown-divider"></li>
    @foreach ($notifications as $index => $notification)
      @if ($index < 8)
      <li>
    <a href="{{ route('notifications.list') }}" class="dropdown-item notification-link">
        <div class="notification-wrapper">
            <p class="notification-content">{{ $notification->data }}</p>
            <div class="mark-as-read-checkbox">
                <input type="checkbox" class="form-check-input mark-as-read" data-notification-id="{{ $notification->id }}" id="notification-{{ $notification->id }}" style="
                    margin-bottom: 22px;
                    margin-left: 16px;
                " {{ $notification->read_at ? 'checked' : '' }}>
            </div>
        </div>
    </a>
</li>
        <li class="dropdown-divider"></li>
      @endif
    @endforeach
    @if (count($notifications) > 8)
      <li>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item view-all-btn" href="#">View All Notifications</a>
      </li>
    @endif
  </ul>
</div>



      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
      <!-- Avatar -->
      <div class="dropdown">
        
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
@include('partials.header')
@yield('content')
@include('partials.footer')
@include('partials.footer-scripts')
 
<div class="container" style=" margin-top: 69px;">
  <div class="card">
    <div class="card-header"> 
      User Settings
    </div>
    <div class="card-body">
      <form id="userForm">
      <div class="row mb-3">
        <div class="form-check form-switch ms-3">
     <label class="form-check-label" for="on-screen-notifications" >On-Screen Notifications</label>
    <input class="form-check-input" type="checkbox" id="on-screen-notifications" {{ $user->notification_switch ? 'checked' : '' }}>
    </div>
    </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Name:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="nameInput" value="{{ $user->name }}" readonly>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Email:</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="emailInput" value="{{ $user->email }}" readonly>
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-3 col-form-label">Phone:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="phoneInput" value="{{ $user->phone_number }}" readonly>
          </div>
        </div>
      
        <div class="text-center">
          <button type="button" class="btn btn-primary" id="editButton">Edit</button>
          <button type="submit" class="btn btn-success d-none" id="saveButton">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>




<script>
$(document).ready(function() {
        
        $(document).on('change', '.mark-as-read', function() {
          var notificationId = $(this).data('notification-id');
          var isChecked = $(this).is(':checked');
          var impersonatedUserId = '{{ session('impersonated_user_id') }}';
         
          $.ajax({
            url: 'api/api/notifications/mark-as-read', // Updated URL
            type: 'POST',
            data: {
              _token: '{{ csrf_token() }}',
              notification_id: notificationId,// Pass notification_id as data
              is_checked: isChecked,
              impersonatedUserId :impersonatedUserId 
            },
            success: function(response) {
              console.log('response',response)
      
              var unreadCount = response.unreadCount;;
              $('#unread-count').text(unreadCount);
            }
          });
        });
      });
      
  $(document).ready(function() {
  $('#editButton').click(function() {
    $('#nameInput').prop('readonly', false);
    $('#emailInput').prop('readonly', false);
    $('#phoneInput').prop('readonly', false);
    
    $('#editButton').addClass('d-none');
    $('#saveButton').removeClass('d-none');
  });

  // Move the event handler inside the $(document).ready() function
  $('#saveButton').click(function () {
    event.preventDefault();
    console.log("save")
    // Disable editing on the form fields
    $('#nameInput, #emailInput, #phoneInput').prop('readonly', true);
    $('#on-screen-notifications').prop('disabled', true);

    // Hide the Save button and show the Edit button
    $(this).addClass('d-none');
    $('#editButton').removeClass('d-none');

    // Prepare the data to be sent
    var formData = {
      _token: '{{ csrf_token() }}',
      name: $('#nameInput').val(),
      email: $('#emailInput').val(),
      phone: $('#phoneInput').val(),
      on_screen_notifications: $('#on-screen-notifications').is(':checked') ? 1 : 0  
    };
    console.log("on-screen-notifications",$('#on-screen-notifications').is(':checked'));
    var phoneNumber = formData.phone;
    var regex = /^\d{10}$/;
    var impersonatedUserId = '{{ session('impersonated_user_id') }}';
    if (!regex.test(phoneNumber)) {
      // Invalid phone number
      alert('Invalid phone number');
      return;
    }
    var apiUrl = '{{ route("api.user.update", ["user" => $user->id]) }}';
    console.log( apiUrl);

    // Send the data via AJAX to the UserController for updating the user
    $.ajax({

      url: apiUrl,
      type: 'POST',
      data: formData,
      success: function (response) {
        // Handle the success response
        console.log('User details updated successfully:', response);
      },
      error: function (xhr) {
        // Handle the error response
        console.log('Error updating user details:', xhr.responseText);
      }
    });
  });
});
</script>

</div>
</body>
</html>