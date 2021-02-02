@extends('back.layout.master')
@section('content')
    <div class="main-container gray-bg" id="app">
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12 animatedParent animateOnce z-index-46">
                    <div class="panel panel-default animated fadeInUp">
                        <div class="panel-body min-height-100">
                            @if(Session::has('success'))
                                <div class="container" id="alert">
                                    <div class="alert alert-success" style="width: 100%">
                                        <div>{{ Session('success') }}</div>
                                    </div>
                                </div>
                            @elseif(Session::has('danger'))
                                <div class="container" id="alert">
                                    <div class="alert alert-danger" style="width: 100%">
                                        <div>{{ Session('danger') }}</div>
                                    </div>
                                </div>
                            @endif
                            <h1 class="page-title">
                                <span class="fa fa-university"></span>
                                لیست دانشگاه ها
                                <a href="{{route('university.create')}}" class="btn btn-default btn-rounded pull-right"
                                   type="button">ثبت دانشگاه جدید </a>
                                <hr>
                            </h1>
                            <div class="panel-body wt-panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-border table-hover" id="table_id">
                                        <thead>
                                        <tr>
                                            <th class="text-center">نام دانشگاه</th>
                                            <th class="text-center">شهر</th>
                                            <th class="text-center">شماره تماس</th>
                                            <th class="text-center">سایت</th>
                                            <th class="text-center">ایمیل</th>
                                            <th class="text-center">کد پستی</th>
                                            <th class="text-center">آدرس</th>
                                            <th class="text-center">ابزار</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($universities as $university)
                                            <tr>
                                                <td class="text-center">{{$university->enname}}</td>
                                                <td class="text-center">{{$university->encity}}</td>
                                                <td class="text-center">{{$university->phone}}</td>
                                                <td class="text-center">{{$university->web}}</td>
                                                <td class="text-center">{{$university->email}}</td>
                                                <td class="text-center">{{$university->postcode}}</td>
                                                <td class="text-center">{!!Str::limit( $university->address ,30)!!}</td>
                                                <td class="text-center">
                                                    <form method="post"
                                                          action="{{route('university.destroy',$university->id)}}"
                                                          style="display: inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-default btn-rounded btn-sm"
                                                                type="submit"><i class="icon-trash"></i> حذف
                                                        </button>
                                                    </form>
                                                    <a href="{{route('university.edit',$university->id)}}">
                                                        <button class="btn btn-default btn-rounded btn-sm"
                                                                type="button"><i class="icon-eye"></i> ویرایش
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="container">
                                    {{ $universities->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

