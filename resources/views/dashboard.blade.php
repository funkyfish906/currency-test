@extends('layout')

@section('content')
    <div class="col-12">
        <h2>
            SID: {{$sid}}
        </h2>
    </div>
    <div id="accordion" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <h5 class="mb-0">
                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Валюты
                    </a>
                </h5>
            </div>

            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th>Валюта</th>
                            <th>Значение</th>
                            <th>Статус</th>
                        </thead>
                        <tbody>
                        @foreach ($currencies as $currency)
                            <tr>
                                <td> {{$currency['curr_code']}} </td>
                                <td> {{$currency['denominator']}} </td>
                                <td> {{$currency['status']}} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
                <h5 class="mb-0">
                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Курсы
                    </a>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <th>Курс</th>
                        <th>От</th>
                        <th>До</th>
                        </thead>
                        <tbody>
                        @foreach ($rates as $rate)
                            <tr>
                                <td> {{$rate['rate']}} </td>
                                <td> {{$rate['from']}} </td>
                                <td> {{$rate['to']}} </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection