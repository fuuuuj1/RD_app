@if ($errors->any())
  <div class="card-text text-lest alert alert-danger">
    <ul class="mb-0">
      @foreach($errors->all() as $error)
        <li style="list-style: none">{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
