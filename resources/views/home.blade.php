@if (Auth::user()->role_id == 1)
    <script>
        window.location = "/admin/dashboard";
    </script>
@elseif(Auth::user()->role_id == 2)
    <script>
        window.location = "/member/dashboard";
    </script>
@endif
