<x-app-layout>
    @section('content')
        <h1>Dejanos un mensaje</h1>

        <form action="{{route('contactUs.store')}}" method="POST">
        
            @csrf
            <label for="">nombre:
                <br>
                <input type="text" name="name">
            </label>
            <br>
            @error('name')
                <p><strong>{{$message}}</strong></p>
            @enderror

            <label for="">correo:
                <br>
                <input type="text" name="mail">
            </label>
            <br>
            @error('mail')
                <p><strong>{{$message}}</strong></p>
            @enderror

            <label for="">mensaje:
                <br>
                <textarea name="message" rows="4"></textarea>
            </label>
            <br>
            @error('message')
                <p><strong>{{$message}}</strong></p>
            @enderror

            <br>

            <button type="submit">Enviar Mensaje</button>

        </form>

        @if (session('info'))
            <script>
                alert("{{session('info')}}");
            </script>
        @endif
        
    @endsection

</x-app-layout>