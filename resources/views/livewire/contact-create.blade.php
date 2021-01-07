<div>
  <form wire:submit.prevent="store">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input wire:model="name" class="form-control" type="text" id="name">
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input wire:model="phone" class="form-control" type="text" id="phone">
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-dark">Confirm</button>
    </div>
  </form>

  @if ($errors->any())
    @foreach ($errors->all() as $error)
      <input type="hidden" id="message" name="message" value="{{ $error }}">
      <script id="message-script">
        @this.errors.push($('#message').val());

        $('#message').remove();
        $('#message-script').remove();
      </script>
    @endforeach
    <script type="text/javascript">
      console.log(@this.errors);
    </script>
  @endif
</div>


