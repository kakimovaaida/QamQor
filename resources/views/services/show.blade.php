@extends('layouts.app')

@section('content')
    <style>
        .book-container {
            position: relative;
            width: 100%;
            padding: 2rem;
            background-color: #f9f9f9;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .book-content {
            position: relative;
            z-index: 1;
        }

        .page {
            position: relative;
            padding: 2rem;
            background-color: #fff;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .page::before,
        .page::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 50%;
            background-color: #f9f9f9;
            z-index: -1;
        }

        .page::before {
            left: -1px;
            transform: skewX(-3deg);
            box-shadow: 3px 0 5px rgba(0, 0, 0, 0.1);
        }

        .page::after {
            right: -1px;
            transform: skewX(3deg);
            box-shadow: -3px 0 5px rgba(0, 0, 0, 0.1);
        }

        .actions {
            margin-top: 1rem;
        }

    </style>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card p-4 shadow-lg">
                    <div class="book-container">
                        <div class="book-content">
                            <header class="text-center">
                                <h1 class="display-5">{{ $services->service_name }}</h1>
                            </header>
                            <div class="page">
                                <article class="mt-3">
                                    <p class="text-justify">{{ $services->description }}</p>
                                </article>
                                <footer>
                                    <p class="text-muted">Дата публикации: {{ $services->created_at->format('d.m.Y') }}</p>
                                    @can('update', $services)
                                        <div class="actions">
                                            <a href="{{ route('services.edit', $services->id) }}" class="btn btn-primary">Редактировать</a>

                                            <form action="{{ route('services.destroy', $services->id) }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger" type="submit">Удалить</button>
                                            </form>
                                        </div>
                                    @endcan
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
