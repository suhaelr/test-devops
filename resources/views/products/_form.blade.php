<div class="mb-3">
    <label for="name" class="form-label">Nama Produk</label>
    <input type="text" name="name" id="name" class="form-control"
           value="{{ old('name', $product->name ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="description" class="form-label">Deskripsi</label>
    <textarea name="description" id="description" class="form-control" rows="3">{{ old('description', $product->description ?? '') }}</textarea>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="price" class="form-label">Harga (Rp)</label>
        <input type="number" name="price" id="price" class="form-control" step="0.01" min="0"
               value="{{ old('price', $product->price ?? '') }}" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="stock" class="form-label">Stok</label>
        <input type="number" name="stock" id="stock" class="form-control" min="0"
               value="{{ old('stock', $product->stock ?? 0) }}" required>
    </div>
</div>
