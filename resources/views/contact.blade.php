
    <form action="{{url('/contact')}}" method="POST">
        @csrf
        <input type="text" name="fullName">    
        <button>submit</button>
    </form>
