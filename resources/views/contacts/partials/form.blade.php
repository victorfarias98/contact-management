<div class="mb-3">
    <label for="name" class="form-label">Nome</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $contact->name ?? '') }}">
    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="contact" class="form-label">Contato</label>
    <input type="text" name="contact" class="form-control" value="{{ old('contact', $contact->contact ?? '') }}">
    @error('contact') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $contact->email ?? '') }}">
    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
</div>
