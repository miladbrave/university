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
                                    <span class="fa fa-university"></span>
                                    ویرایش دانشگاه: {{$university->enname}}
                                    <a href="{{url()->previous()}}" class="btn btn-default btn-rounded pull-right mob"
                                       type="button"> بازگشت <span class="icon-left-open"></span></a>
                                    <hr>
                                </h1>
                                <form action="{{route('university.update',$university->id)}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group @if($errors->has('faname')) has-error @endif">
                                                <label>نام دانشگاه (فارسی)</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                    <input type="text" class="form-control" name="faname"
                                                           value="{{$university->faname}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group @if($errors->has('laname')) has-error @endif">
                                                <label>نام دانشگاه (لاتین)<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                    <input type="text" class="form-control" name="enname" required
                                                           value="{{$university->enname}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('enname'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('enname') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group @if($errors->has('facity')) has-error @endif">
                                                <label>شهر (فارسی)</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                                    <input type="text" class="form-control" name="facity"
                                                           value="{{$university->facity}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group @if($errors->has('enity')) has-error @endif">
                                                <label>شهر (لاتین)<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                                    <input type="text" class="form-control" name="encity" required
                                                           value="{{$university->encity}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('encity'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('encity') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group @if($errors->has('phone')) has-error @endif">
                                                <label>شماره تلفن <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                    <input type="text" class="form-control" name="phone" required
                                                           value="{{$university->phone}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group @if($errors->has('web')) has-error @endif">
                                                <label>آدرس وب سایت <span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-internet-explorer"></i></span>
                                                    <input type="text" class="form-control" name="web" required
                                                           value="{{$university->web}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('web'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('web') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group @if($errors->has('email')) has-error @endif">
                                                <label>آدرس ایمیل<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-envelope"></i></span>
                                                    <input type="email" class="form-control" name="email" required
                                                           value="{{$university->email}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group @if($errors->has('postcode')) has-error @endif">
                                                <label>کد پستی<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-sort-numeric-desc"></i></span>
                                                    <input type="text" class="form-control" name="postcode" required
                                                           value="{{$university->postcode}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('postcode'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('postcode') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group @if($errors->has('address')) has-error @endif">
                                                <label>آدرس (لاتین)<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-map-marker"></i></span>
                                                    <input type="text" class="form-control" name="address" required
                                                           value="{{$university->address}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('address'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 up">
                                            <label>آپلود لوگوی دانشگاه</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-6">
                                                <input type="file" name="file" id="field-file" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        @if(isset($university->photo))
                                            <div class="col-sm-5" style="margin-top: 1%">
                                                <img class="img-responsive" src="{{asset($university->photo->path)}}"
                                                     alt="image" style="height: 100px;">
                                                <a href="{{route('photoDelete',$university->photo->id)}}"
                                                   class="pull-left small btn btn-danger"
                                                   type="submit" style="margin-top: 2%">حذف
                                                </a>
                                            </div>
                                        @endif
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

