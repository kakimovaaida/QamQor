@extends('layouts.app')
@section('content')
    <style>
        .card {
            border: 2px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #012970;
            color: #ffffff;
            border-radius: 10px 10px 0 0;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 100px">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center mb-4">Реквизиты для благотворительности</h1>
                    </div>
                    <div class="card-body">
                        <p class="mb-2"><strong>Номер карты:</strong> 1234 5678 9012 3456</p>
                        <p class="mb-2"><strong>Название банка:</strong> Пример Банк</p>
                        <p class="mb-2"><strong>SWIFT/BIC код:</strong> ABCD1234</p>
                        <p class="mb-2"><strong>ИНН:</strong> 1234567890</p>
                        <p class="mb-2"><strong>КПП:</strong> 0987654321</p>
                        <p class="mb-2"><strong>Расчетный счет:</strong> 9876543210</p>
                        <p class="mb-2"><strong>Корреспондентский счет:</strong> 8765432109</p>
                        <p class="mb-0"><strong>Назначение платежа:</strong> Пожертвование на благотворительность</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

