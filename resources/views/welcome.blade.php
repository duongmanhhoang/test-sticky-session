@foreach ($cookies as $key => $cookie)
    <p>{{ $key }}: {{ $cookie }}</p>
@endforeach

<script>
    const SERVER = "{{ $server }}"
    localStorage.setItem('server', SERVER);
</script>