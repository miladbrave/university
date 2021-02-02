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
                                <span class="fa fa-book"></span>
                                لیست مقاطع تحصیلی
                                <a href="{{route('degree.create')}}" class="btn btn-default btn-rounded pull-right"
                                   type="button">ثبت مقطع تحصیلی جدید </a>
                                <hr>
                            </h1>
                            <div class="panel-body wt-panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-border table-hover" id="table_id">
                                        <thead>
                                        <tr>
                                            <th class="text-center">مقطع تحصیلی (فارسی)</th>
                                            <th class="text-center">مقطع تحصیلی (لاتین)</th>
                                            <th class="text-center">ابزار</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($degrees as $degree)
                                            <tr>
                                                <td class="text-center">{{$degree->faname}}</td>
                                                <td class="text-center">{{$degree->enname}}</td>
                                                <td class="text-center">
                                                    <form method="post"
                                                          action="{{route('degree.destroy',$degree->id)}}"
                                                          style="display: inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-default btn-rounded btn-sm"
                                                                type="submit"><i class="icon-trash"></i> حذف
                                                        </button>
                                                    </form>
                                                    <a href="{{route('degree.edit',$degree->id)}}">
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
                                    {{ $degrees->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

