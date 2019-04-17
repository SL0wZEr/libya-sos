@extends('_layouts.master')

@section('body')
    <div class="my-3 p-3 bg-white rounded shadow-sm" id="CivilDefense">
        <div class="section-head border-bottom border-gray pt-2 pb-3 mb-0 d-flex align-items-center">
            <i class="fas fa-fire ml-1 mr-2 rounded" style="fill: #007bff;"></i>
            <h6 class="font-weight-bold m-0 pt-2">الدفاع المدني / فريق الطوارئ</h6>
        </div>
        <div class="section-body">
            <table class="table">
                <thead>
                    <tr>
                        <th class="border-top-0 border-bottom-0 text-muted">المدينة / المنطقة</th>
                        <th class="border-top-0 border-bottom-0 text-muted">رقم الهاتف</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>طرابلس - الفرناج</td>
                        <td><a href="tel:094-571-6189">094-571-6189</a></td>
                    </tr>
                    <tr>
                        <td>طرابلس - عين زارة</td>
                        <td><a href="tel:092-885-3028">092-885-3028</a></td>
                    </tr>
                    <tr>
                        <td>طرابلس - السراج</td>
                        <td><a href="tel:021-444-8111">021-444-8111</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div><!-- End CivilDefense -->

    <div class="my-3 p-3 bg-white rounded shadow-sm" id="Ambulance">
        <div class="section-head border-bottom border-gray pt-2 pb-3 mb-0 d-flex align-items-center">
            <i class="fas fa-ambulance ml-1 mr-2 rounded" style="fill: #007bff;"></i>
            <h6 class="font-weight-bold m-0 pt-2">الإسعاف</h6>
        </div>
        <div class="section-body">
            <table class="table">
                <thead>
                    <tr>
                        <th class="border-top-0 border-bottom-0 text-muted">المدينة / المنطقة</th>
                        <th class="border-top-0 border-bottom-0 text-muted">رقم الهاتف</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>طرابلس - الفرناج</td>
                        <td><a href="tel:094-571-6189">094-571-6189</a></td>
                    </tr>
                    <tr>
                        <td>طرابلس - عين زارة</td>
                        <td><a href="tel:092-885-3028">092-885-3028</a></td>
                    </tr>
                    <tr>
                        <td>طرابلس - السراج</td>
                        <td><a href="tel:021-444-8111">021-444-8111</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div><!-- End Ambulance -->
@endsection
