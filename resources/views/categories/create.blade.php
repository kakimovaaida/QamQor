@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h2 class="text-center mb-4">Жаңа Көмек түрін Қосу</h2>

                    <form  action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="form-group">
                            <input type="text" name="Name" class="form-control @error('Name') is-invalid @enderror" placeholder="Көмек көрсету түрі">
                            @error('Name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div style="margin-top: 10px" class="form-group">
                            <select class="form-control @error('type_id') is-invalid @enderror" name="type_id">
                                <option value="" selected disabled>Көмек санатын таңдаңыз:</option>
                                @foreach($types as $t)
                                    <option value="{{ $t->id }}">{{ $t->name }}</option>
                                @endforeach
                            </select>
                            @error('type_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button style="margin-top: 10px" class="btn btn-primary btn-block" type="submit">Сақтау</button>
                    </form>
                </div>
            </div>
        </div>
    </div>@endsection
