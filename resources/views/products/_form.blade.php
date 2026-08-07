<div class="mb-3">

    <label class="form-label">
        Product Name
    </label>

    <input
        type="text"
        name="name"
        class="form-control @error('name') is-invalid @enderror"
        value="{{ old('name', $product->name ?? '') }}">

    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>


<div class="mb-3">

    <label class="form-label">
        Description
    </label>

    <textarea
        name="description"
        rows="4"
        class="form-control @error('description') is-invalid @enderror">{{ old('description', $product->description ?? '') }}</textarea>

    @error('description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>


<div class="mb-3">

    <label class="form-label">
        Price
    </label>

    <input
        type="number"
        name="price"
        step="0.01"
        class="form-control @error('price') is-invalid @enderror"
        value="{{ old('price', $product->price ?? '') }}">

    @error('price')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>

<div class="mb-3">

    <label class="form-label">
        Quantity
    </label>

    <input
        type="number"
        name="quantity"
        class="form-control @error('quantity') is-invalid @enderror"
        value="{{ old('quantity', $product->quantity ?? '') }}">

    @error('quantity')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>