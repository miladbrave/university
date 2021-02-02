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
                                    <span class="fa fa-paperclip"></span>
                                    ویرایش درس: {{$course->enname}}
                                    <a href="{{url()->previous()}}" class="btn btn-default btn-rounded pull-right mob"
                                       type="button"> بازگشت <span class="icon-left-open"></span></a>
                                    <hr>
                                </h1>
                                <form action="{{route('course.update',$course->id)}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group @if($errors->has('faname')) has-error @endif">
                                                <label>نام درس (فارسی)</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                    <input type="text" class="form-control" name="faname"
                                                           value="{{$course->faname}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group @if($errors->has('enname')) has-error @endif">
                                                <label>نام درس (لاتین)<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                    <input type="text" class="form-control" name="enname" required
                                                           value="{{$course->enname}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('enname'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('enname') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group @if($errors->has('credit')) has-error @endif">
                                                <label> تعداد واحد<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-sort-numeric-desc"></i></span>
                                                    <input type="text" class="form-control" name="credit" required
                                                           value="{{$course->credit}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('credit'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('credit') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group @if($errors->has('reference')) has-error @endif">
                                                <label>منابع درس (لاتین)<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-map-marker"></i></span>
                                                    <input type="text" class="form-control" name="reference"
                                                           required
                                                           value="{{$course->reference}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('reference'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('reference') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group @if($errors->has('coursetype')) has-error @endif">
                                                <label>نوع درس</label>
                                                <select name="coursetype" id="type" class="form-control">
                                                    @foreach($courseTypes as $courseType)
                                                        <option @if($courseType->id == $course->coursetype) selected
                                                                @endif
                                                                value="{{$courseType->id}}">{{$courseType->enname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div
                                                class="form-group @if($errors->has('coursecategory')) has-error @endif">
                                                <label>دسته بندی درس</label>
                                                <select name="coursecategory" id="type" class="form-control">
                                                    @foreach($courseCategories as $courseCategory)
                                                        <option
                                                            @if($courseCategory->id == $course->coursecategory) selected
                                                            @endif
                                                            value="{{$courseCategory->id}}">{{$courseCategory->enname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group @if($errors->has('precourse')) has-error @endif">
                                                <label>دروس پیش نیاز <span class="text-danger">*</span></label>
                                                <select name="precourse[]" class="select2 form-control" multiple>
                                                    @foreach($courses as $cours)
                                                        <option
                                                            @if($course->precourses->contains($cours->id)) selected @endif
                                                            value="{{$cours->id}}">{{$cours->enname}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @if ($errors->has('precourse'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('precourse') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="form-group @if($errors->has('description')) has-error @endif">
                                                <label>توضیحات<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-file-text"></i></span>
                                                    <textarea type="text" class="form-control" name="description"
                                                              required
                                                    >{{$course->description}}</textarea>
                                                </div>
                                            </div>
                                            @if ($errors->has('description'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group @if($errors->has('detail')) has-error @endif">
                                                <label>جزییات<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="fa fa-tasks"></i></span>
                                                    <input type="text" class="form-control" name="detail" required
                                                           value="{{$course->detail}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('detail'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('detail') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <button class="btn btn-success" type="submit">ثبت درس</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

