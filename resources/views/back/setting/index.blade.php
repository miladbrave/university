@extends('back.layout.master')
@section('content')
    <div class="main-container gray-bg" id="app">
        <div class="main-content">
            <div class="col-lg-12 col-sm-12 animatedParent animateOnce z-index-46">
                <div class="panel panel-default animated fadeInUp">
                    <div class="panel-body min-height-100">
                        <h1 class="page-title">
                            <span class="fa fa-list"></span>
                            تنظیمات
                            <a href="{{url()->previous()}}" class="btn btn-default btn-rounded pull-right mob"
                               type="button"> بازگشت <span class="icon-left-open"></span></a>
                            <hr>
                        </h1>
                        <form action="{{route('setting.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group @if($errors->has('word')) has-error @endif">
                                        <label>قیمت فایل Word</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                            <input type="text" class="form-control" name="word"
                                                   @if($setting) value="{{$setting->word_price}}" @endif>
                                        </div>
                                    </div>
                                    @if ($errors->has('word'))
                                        <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('word') }}</span>
                                                </span>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group @if($errors->has('pdf')) has-error @endif">
                                        <label>قیمت فایل Pdf</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                            <input type="text" class="form-control" name="pdf"
                                                   @if($setting) value="{{$setting->pdf_price}}" @endif>
                                        </div>
                                    </div>
                                    @if ($errors->has('pdf'))
                                        <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('pdf') }}</span>
                                                </span>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group @if($errors->has('titlefile')) has-error @endif">
                                        <label>عنوان فایل تولیدی</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                            <input type="text" class="form-control" name="titlefile"
                                                   @if($setting) value="{{$setting->titlefile}}" @endif>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @if($errors->has('guide')) has-error @endif">
                                        <label>متن راهنما</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                            <input type="text" class="form-control" name="guide"
                                                   @if($setting) value="{{$setting->guide}}" @endif>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="padding: 3% 3%">
                                        <label>درباره ما</label>
                                        <textarea id="textareaDes" name="description"
                                                  class="editor form-control">  @if($setting) {{$setting->description}} @endif</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="padding: 3% 3%">
                                        <label>تماس با ما</label>
                                        <textarea id="textareaDes2" name="description2"
                                                  class="editor form-control">  @if($setting) {{$setting->description2}} @endif </textarea>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 up">
                                    <label>آپلود لوگوی وب سایت</label>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="file" name="file" id="field-file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        @if(isset($setting->photo))
                                            <div class="col-sm-5" style="margin-top: 1%">
                                                <img class="img-responsive" src="{{asset($setting->photo->path)}}"
                                                     alt="image" style="height: 100px;">
                                                <a href="{{route('photoDelete',$setting->photo->id)}}"
                                                   class="pull-left small btn btn-danger"
                                                   type="submit" style="margin-top: 2%">حذف
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group @if($errors->has('time')) has-error @endif">
                                        <label>مدت زمان اعتبار لینک (ساعت)</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                            <input type="text" class="form-control" name="time"
                                                   @if($setting) value="{{$setting->time}}" @endif>
                                        </div>
                                    </div>
                                    @if ($errors->has('time'))
                                        <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('time') }}</span>
                                                </span>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group @if($errors->has('phone')) has-error @endif">
                                        <label>شماره تماس</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="text" class="form-control" name="phone"
                                                   @if($setting) value="{{$setting->phone}}" @endif>
                                        </div>
                                    </div>
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                </span>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group @if($errors->has('email')) has-error @endif">
                                        <label>ایمیل</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control" name="email"
                                                   @if($setting) value="{{$setting->email}}" @endif>
                                        </div>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                </span>
                                    @endif
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group @if($errors->has('telegram')) has-error @endif">
                                        <label>تلگرام</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fas fa-file-text"></i></span>
                                            <input type="text" class="form-control" name="telegram"
                                                   @if($setting) value="{{$setting->telegram}}" @endif>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group @if($errors->has('whats')) has-error @endif">
                                        <label>واتس آپ</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-whatsapp"></i></span>
                                            <input type="text" class="form-control" name="whats"
                                                   @if($setting) value="{{$setting->whats}}" @endif>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group @if($errors->has('sitename')) has-error @endif">
                                        <label>نام سایت</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <input type="text" class="form-control" name="sitename"
                                                   @if($setting) value="{{$setting->sitename}}" @endif>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @if($errors->has('sitedes')) has-error @endif">
                                        <label>توضیح سایت</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                                            <input type="text" class="form-control" name="sitedes"
                                                   @if($setting) value="{{$setting->sitedes}}" @endif>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button class="btn btn-success" type="submit">ثبت مشخصات</button>
                        </form>
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
    </script>
@endsection

