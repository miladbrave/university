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
                                    ثبت درس جدید
                                    <a href="{{url()->previous()}}" class="btn btn-default btn-rounded pull-right mob"
                                       type="button"> بازگشت <span class="icon-left-open"></span></a>
                                    <hr>
                                </h1>
                                <form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group @if($errors->has('faname')) has-error @endif">
                                                <label>نام درس (فارسی)<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                    <input type="text" class="form-control" name="faname" required
                                                           value="{{old('faname')}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('faname'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('faname') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group @if($errors->has('enname')) has-error @endif">
                                                <label>نام درس (لاتین)<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                    <input type="text" class="form-control" name="enname" required
                                                           value="{{old('enname')}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('enname'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('enname') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group @if($errors->has('credit')) has-error @endif">
                                                <label> تعداد واحد<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                            class="fa fa-sort-numeric-desc"></i></span>
                                                    <input type="text" class="form-control" name="credit" required
                                                           value="{{old('credit')}}">
                                                </div>
                                            </div>
                                            @if ($errors->has('credit'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('credit') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-3">
                                            <div
                                                class="form-group @if($errors->has('coursetype')) has-error @endif">
                                                <label>نوع درس</label>
                                                <select name="coursetype" id="type" class="form-control">
                                                    @foreach($courseTypes as $courseType)
                                                        <option
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
                                                            value="{{$courseCategory->id}}">{{$courseCategory->enname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group @if($errors->has('precourse')) has-error @endif">
                                                <label>دروس پیش نیاز <span class="text-danger">*</span></label>
                                                <select name="precourse[]" class="select2 form-control" multiple>
                                                    @foreach($courses as $course)
                                                        <option value="{{$course->id}}">{{$course->enname}}</option>
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
                                            <div class="form-group @if($errors->has('reference')) has-error @endif">
                                                <label>منابع درس (لاتین)<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <textarea id="textareaDes" name="reference" required
                                                              class="editor form-control"> {{old('reference')}}</textarea>
                                                </div>
                                            </div>
                                            @if ($errors->has('reference'))
                                                <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('reference') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <div
                                                class="form-group @if($errors->has('description')) has-error @endif">
                                                <label>توضیحات<span class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <textarea type="text" class="form-control" name="description"
                                                              id="textareaDes2"
                                                              required>{{old('description')}}</textarea>
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
                                                    <textarea type="text" class="form-control" name="detail"
                                                              id="textareaDes3"
                                                              required>{{old('detail')}}</textarea>
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
@section('js')
    <script>
        CKEDITOR.replace('textareaDes', {
            toolbarGroups: [
                {
                    "name": "basicstyles", "groups": ["basicstyles"]
                },
                {"name": "links", "groups": ["links"]},
                {"name": "paragraph", "groups": ["list", "blocks"]},
                {"name": "document", "groups": ["mode"]},
                {"name": "insert", "groups": ["insert"]},
                {"name": "styles", "groups": ["styles"]},
                {"name": "about", "groups": ["about"]}
            ],
            language: 'fa',
        })
        CKEDITOR.replace('textareaDes2', {
            toolbarGroups: [
                {
                    "name": "basicstyles", "groups": ["basicstyles"]
                },
                {"name": "links", "groups": ["links"]},
                {"name": "paragraph", "groups": ["list", "blocks"]},
                {"name": "document", "groups": ["mode"]},
                {"name": "insert", "groups": ["insert"]},
                {"name": "styles", "groups": ["styles"]},
                {"name": "about", "groups": ["about"]}
            ],
            language: 'fa',
        })
        CKEDITOR.replace('textareaDes3', {
            toolbarGroups: [
                {
                    "name": "basicstyles", "groups": ["basicstyles"]
                },
                {"name": "links", "groups": ["links"]},
                {"name": "paragraph", "groups": ["list", "blocks"]},
                {"name": "document", "groups": ["mode"]},
                {"name": "insert", "groups": ["insert"]},
                {"name": "styles", "groups": ["styles"]},
                {"name": "about", "groups": ["about"]}
            ],
            language: 'fa',
        })
    </script>
@endsection


