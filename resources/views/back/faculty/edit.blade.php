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
                                    <span class="fa fa-building-o"></span>
                                    ویرایش دانشکده : {{$faculty->enname}}
                                    <a href="{{url()->previous()}}" class="btn btn-default btn-rounded pull-right mob"
                                       type="button"> بازگشت <span class="icon-left-open"></span></a>
                                    <hr>
                                </h1>
                                <form action="{{route('faculty.update',$faculty->id)}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group @if($errors->has('faname')) has-error @endif">
                                                <label>نام دانشگاه (فارسی)<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                    <input type="text" class="form-control" name="faname" required
                                                           value="{{$faculty->faname}}">
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
                                                <label>نام دانشگاه (لاتین)<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                    <input type="text" class="form-control" name="enname" required
                                                           value="{{$faculty->enname}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('enname'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('enname') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <button class="btn btn-success" type="submit">ثبت تغییرات</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

