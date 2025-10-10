@php
$user = auth()->user();

$avatar_url = ($user && $user->avatar)
    ? asset('images/avatar/' . $user->avatar)
    : "https://ui-avatars.com/api/?name=" . urlencode($user->username ?? 'User');
@endphp

<img src="{{ $avatar_url }}"
     class="rounded-circle"
     alt="Foto profil {{ $user->username ?? 'User' }}"
     width="159" height="128">
