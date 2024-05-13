@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h2 class="text-center mb-4">Жаңа Көмек түрін Қосу</h2>

                    <form  action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group">
                            <input type="text" name="service_name" class="form-control @error('Name') is-invalid @enderror" placeholder="Көмек көрсету түрі">
                            @error('service_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div style="margin-top: 10px" class="form-group">
                            <select class="form-control @error('type_service_id') is-invalid @enderror" name="category_id">
                                <option value="" selected disabled>Көмек санатын таңдаңыз:</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->Name }}</option>
                                @endforeach
                            </select>
                            @error('type_service_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div style="margin-top: 10px" class="form-group">
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Cипаттамасы"></textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div style="margin-top: 10px" class="form-group">
                            <label for="imgInput">Тұсқағаздағы сурет</label>
                            <input type="file" class="form-control-file @error('img') is-invalid @enderror" id="imgInput" name="img">
                            @error('Wallpaper')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button style="margin-top: 10px" class="btn btn-primary btn-block" type="submit">Сақтау</button>
                    </form>
                </div>
            </div>
        </div>
    </div>@endsection
