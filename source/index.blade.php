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
                    <tbody>
                        @foreach($contact->branches as $branch)
                            <tr>
                                <td class="w-75">
                                    <p class="mb-0">{{ $branch->name }}</p>
                                    <small class="text-muted">{{ $branch->district }}</small>
                                </td>
                                <td class="text-center">
                                    <a href="tel:{{ $branch->phone_number }}">
                                        <span class="d-none d-sm-block">{{ $branch->phone_number }}</span>
                                        <i class="text-primary-red d-block d-sm-none fas fa-phone ml-1 mr-2 fa-flip-horizontal ml-2"></i>
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
