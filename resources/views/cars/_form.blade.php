@php
    $fuelTypes = ['Бензин', 'Дизель', 'Гібрид', 'Електро'];
    $transmissions = ['Механіка', 'Автомат'];
@endphp

<div class="mb-3">
    <label for="brand" class="form-label">Марка</label>
    <input id="brand" name="brand" type="text" class="form-control"
           value="{{ old('brand', $car->brand ?? '') }}">
    @error('brand') <p class="text-danger small mb-0">{{ $message }}</p> @enderror
</div>

<div class="mb-3">
    <label for="model" class="form-label">Модель</label>
    <input id="model" name="model" type="text" class="form-control"
           value="{{ old('model', $car->model ?? '') }}">
    @error('model') <p class="text-danger small mb-0">{{ $message }}</p> @enderror
</div>

<div class="mb-3">
    <label for="year" class="form-label">Рік випуску</label>
    <input id="year" name="year" type="number" class="form-control"
           value="{{ old('year', $car->year ?? '') }}">
    @error('year') <p class="text-danger small mb-0">{{ $message }}</p> @enderror
</div>

<div class="mb-3">
    <label for="price" class="form-label">Ціна, $</label>
    <input id="price" name="price" type="number" step="0.01" min="0" class="form-control"
           value="{{ old('price', $car->price ?? '') }}">
    @error('price') <p class="text-danger small mb-0">{{ $message }}</p> @enderror
</div>

<div class="mb-3">
    <label for="mileage" class="form-label">Пробіг, км</label>
    <input id="mileage" name="mileage" type="number" min="0" class="form-control"
           value="{{ old('mileage', $car->mileage ?? 0) }}">
    @error('mileage') <p class="text-danger small mb-0">{{ $message }}</p> @enderror
</div>

<div class="mb-3">
    <label for="fuel_type" class="form-label">Тип палива</label>
    <select id="fuel_type" name="fuel_type" class="form-select">
        <option value="">— оберіть —</option>
        @foreach ($fuelTypes as $f)
            <option value="{{ $f }}" @selected(old('fuel_type', $car->fuel_type ?? '') === $f)>{{ $f }}</option>
        @endforeach
    </select>
    @error('fuel_type') <p class="text-danger small mb-0">{{ $message }}</p> @enderror
</div>

<div class="mb-3">
    <label for="transmission" class="form-label">Коробка передач</label>
    <select id="transmission" name="transmission" class="form-select">
        <option value="">— оберіть —</option>
        @foreach ($transmissions as $t)
            <option value="{{ $t }}" @selected(old('transmission', $car->transmission ?? '') === $t)>{{ $t }}</option>
        @endforeach
    </select>
    @error('transmission') <p class="text-danger small mb-0">{{ $message }}</p> @enderror
</div>

<div class="mb-3">
    <label for="color" class="form-label">Колір</label>
    <input id="color" name="color" type="text" class="form-control"
           value="{{ old('color', $car->color ?? '') }}">
    @error('color') <p class="text-danger small mb-0">{{ $message }}</p> @enderror
</div>І
