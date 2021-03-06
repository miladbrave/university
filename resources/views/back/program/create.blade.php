@extends('back.layout.master')
@section('content')
    <div class="main-container gray-bg" id="app">
        <div class="main-content">
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 animatedParent animateOnce z-index-46">
                        <div class="panel panel-default animated fadeInUp">
                            <div class="panel-body min-height-100">
                                <h1 class="page-title">
                                    <span class="fa fa-list"></span>
                                    رشته تحصیلی جدید
                                    <a href="{{url()->previous()}}" class="btn btn-default btn-rounded pull-right mob"
                                       type="button"> بازگشت <span class="icon-left-open"></span></a>
                                    <hr>
                                </h1>
                                <form action="{{route('program.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group @if($errors->has('faname')) has-error @endif">
                                                <label>نام رشته تحصیلی (فارسی)<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                    <input type="text" class="form-control" name="faname"
                                                           value="{{old('faname')}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('faname'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('faname') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group @if($errors->has('laname')) has-error @endif">
                                                <label>نام رشته تحصیلی (لاتین)<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                    <input type="text" class="form-control" name="enname" required
                                                           value="{{old('laname')}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('enname'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('enname') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group @if($errors->has('precourse')) has-error @endif">
                                                <label>دروس مربوط به این رشته : </label>
                                                <select name="precourse[]" class="select2 form-control"
                                                        multiple>
                                                    @foreach($courses as $course)
                                                        <option value="{{$course->id}}">{{$course->enname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <button class="btn btn-success" type="submit">ثبت رشته تحصیلی جدید</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

