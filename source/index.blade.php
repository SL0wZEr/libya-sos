@extends('_layouts.master')

@section('body')
    @foreach($page->contacts as $contactTitle => $contact)
        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <div class="section-head border-bottom border-gray pt-2 pb-3 mb-0 d-flex align-items-center">
                <i class="{{ $contact->icon }} ml-1 mr-2"></i>
                <h6 class="font-weight-bold m-0 pt-2">{{ $contactTitle }}</h6>
            </div>
            <div class="section-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border-top-0 border-bottom-0 text-muted w-75">الجهة</th>
                            <th class="border-top-0 border-bottom-0 text-muted">رقم الهاتف</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contact->branches as $branch)
                            <tr>
                                <td>
                                    <p class="mb-0">{{ $branch->name }}</p>
                                    <small class="text-muted">{{ $branch->district }}</small>
                                </td>
                                <td>
                                    <a href="tel:{{ $branch->phone_number }}">
                                        {{ $branch->phone_number }} <i class="fas fa-phone ml-1 mr-2 fa-flip-horizontal ml-2"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
@endsection
