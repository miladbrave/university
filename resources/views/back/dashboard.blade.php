@extends('back.layout.master')
@section('content')
    <div class="main-container gray-bg">
        <div class="main-header row">
            <div class="col-sm-6 col-xs-7">
                <!-- User info -->
                <ul class="user-info pull-left">
                    <li class="profile-info dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> <img
                                width="44" class="img-circle avatar" alt="" src="/back/images/man-3.jpg">علی احمدی <span
                                class="caret"></span></a>
                        <!-- User action menu -->
                        <ul class="dropdown-menu">
                            <li><a href="#/"><i class="icon-user"></i>پروفایل من</a></li>
                            <li><a href="#/"><i class="icon-mail"></i> پیام ها</a></li>
                            <li><a href="#"><i class="icon-clipboard"></i> وظایف</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-cog"></i> تنظیمات اکانت</a></li>
                            <li><a href="#"><i class="icon-logout"></i> خروج</a></li>
                        </ul>
                        <!-- /user action menu -->
                    </li>
                </ul>
                <!-- /user info -->
            </div>
            <div class="col-sm-6 col-xs-5">
                <div class="pull-right">
                    <!-- User alerts -->
                    <ul class="user-info pull-left">
                        <!-- Notifications -->
                        <li class="notifications dropdown">
                            <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown"
                               class="dropdown-toggle" href="#"><i class="icon-attention"></i><span
                                    class="badge badge-info">6</span></a>
                            <ul class="dropdown-menu pull-right">
                                <li class="first">
                                    <div class="small"><a class="pull-right danger" href="#">علامت به عنوان خوانده
                                            شده</a> شما <strong>3</strong> اطلاعیه های جدید دارید.
                                    </div>
                                </li>
                                <li>
                                    <ul class="dropdown-list">
                                        <li class="unread notification-success"><a href="#"><i
                                                    class="icon-user-add pull-right"></i><span
                                                    class="block-line strong"> ثبت نام کاربر جدید</span><span
                                                    class="block-line small">30 ثانیه قبل</span></a></li>
                                        <li class="unread notification-secondary"><a href="#"><i
                                                    class="icon-heart pull-right"></i><span class="block-line strong">یک نفر این مطلب را پسندید</span><span
                                                    class="block-line small">60 ثانیه قبل</span></a></li>
                                        <li class="unread notification-primary"><a href="#"><i
                                                    class="icon-user pull-right"></i><span class="block-line strong">تنظیمات تغییر کرد</span><span
                                                    class="block-line small">2 ساعت قبل</span></a></li>
                                        <li class="notification-danger"><a href="#"><i
                                                    class="icon-cancel-circled pull-right"></i><span
                                                    class="block-line strong">یک نفر این مطلب را پسندید</span><span
                                                    class="block-line small">60 ثانیه قبل</span></a></li>
                                        <li class="notification-info"><a href="#"><i
                                                    class="icon-info pull-right"></i><span class="block-line strong">یک نفر این مطلب را پسندید</span><span
                                                    class="block-line small">60 ثانیه قبل</span></a></li>
                                        <li class="notification-warning"><a href="#"><i class="icon-rss pull-right"></i><span
                                                    class="block-line strong">یک نفر این مطلب را پسندید</span><span
                                                    class="block-line small">60 ثانیه قبل</span></a></li>
                                    </ul>
                                </li>
                                <li class="external-last"><a href="#" class="danger">مشاهده تمام اطلاعیه ها</a></li>
                            </ul>
                        </li>
                        <!-- /notifications -->
                        <!--پیام ها -->
                        <li class="notifications dropdown">
                            <a data-close-others="true" data-hover="dropdown" data-toggle="dropdown"
                               class="dropdown-toggle" href="#"><i class="icon-mail"></i><span
                                    class="badge badge-secondary">12</span></a>
                            <ul class="dropdown-menu pull-right">
                                <li class="first">
                                    <div class="dropdown-content-header"><i
                                            class="fa fa-pencil-square-o pull-right"></i>پیام ها
                                    </div>
                                </li>
                                <li>
                                    <ul class="media-list">
                                        <li class="media">
                                            <div class="media-left"><img alt="" class="img-circle img-sm"
                                                                         src="images/domnic-brown.png"></div>
                                            <div class="media-body">
                                                <a class="media-heading" href="#">
                                                    <span class="text-semibold">علی احمدی</span>
                                                    <span class="media-annotation pull-right">Tue</span>
                                                </a>
                                                <span class="text-muted">پروژه شما برای تلفن های موبایل جالب است من دوست دارم این را بررسی کنم...</span>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left"><img alt="" class="img-circle img-sm"
                                                                         src="images/john-smith.png"></div>
                                            <div class="media-body">
                                                <a class="media-heading" href="#">
                                                    <span class="text-semibold">رضا حسینی</span>
                                                    <span class="media-annotation pull-right">12:30</span>
                                                </a>
                                                <span class="text-muted">با تشکر از شما برای ارسال چنین محتوایی فوق العاده. نوشتن برجسته بود...</span>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left"><img alt="" class="img-circle img-sm"
                                                                         src="images/stella-johnson.png"></div>
                                            <div class="media-body">
                                                <a class="media-heading" href="#">
                                                    <span class="text-semibold">محمد محمدی</span>
                                                    <span class="media-annotation pull-right">2 روز قبل</span>
                                                </a>
                                                <span class="text-muted">از شما متشکریم که به ما اعتماد کردید که منبع شما برای محصولات ورزشی با کیفیت بالا باشد...</span>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left"><img alt="" class="img-circle img-sm"
                                                                         src="images/alex-dolgove.png"></div>
                                            <div class="media-body">
                                                <a class="media-heading" href="#">
                                                    <span class="text-semibold">محمد نوری</span>
                                                    <span class="media-annotation pull-right">10:45</span>
                                                </a>
                                                <span class="text-muted">پس از جلسه جمعه ما در مورد رابطه کسب و کار ما و چقدر خوش شانس بود...</span>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-left"><img alt="" class="img-circle img-sm"
                                                                         src="images/domnic-brown.png"></div>
                                            <div class="media-body">
                                                <a class="media-heading" href="#">
                                                    <span class="text-semibold">علی احمدی</span>
                                                    <span class="media-annotation pull-right">4:00</span>
                                                </a>
                                                <span class="text-muted">من می خواهم از این فرصت برای تشکر از شما برای همکاری شما در اخطار کامل استفاده کنید...</span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="external-last"><a class="danger" href="#">تمام پیام ها</a></li>
                            </ul>
                        </li>
                        <!-- /messages -->
                    </ul>
                    <!-- /user alerts -->
                </div>
            </div>
        </div>
        <div class="main-content">
            <h1 class="page-title"> داشبورد</h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-3 animatedParent animateOnce z-index-50">
                            <div class="panel minimal panel-default animated fadeInUp">
                                <div class="panel-heading clearfix">
                                    <div class="panel-title"> ورودی ها</div>
                                    <ul class="panel-tool-options">
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"
                                               aria-expanded="false"><i class="icon-cog"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-arrows-ccw"></i> بروزرسانی</a></li>
                                                <li><a href="#"><i class="icon-list"></i>جزییات</a></li>
                                                <li><a href="#"><i class="icon-chart-pie"></i> آمار</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-cancel"></i> پاک کردن لیست</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel body -->
                                <div class="panel-body">
                                    <div class="row col-with-divider">
                                        <div class="col-xs-6 text-center stack-order">
                                            <h1 class="no-margins">87</h1>
                                            <small>این هفته</small>
                                        </div>
                                        <div class="col-xs-6 text-center stack-order">
                                            <h1 class="no-margins">53</h1>
                                            <small>آخر هفته</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 animatedParent animateOnce z-index-49">
                            <div class="panel minimal panel-default animated fadeInUp">
                                <div class="panel-heading clearfix">
                                    <div class="panel-title">آخرین فروش ماه</div>
                                    <ul class="panel-tool-options">
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"
                                               aria-expanded="false"><i class="icon-cog"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-arrows-ccw"></i> بروزرسانی</a></li>
                                                <li><a href="#"><i class="icon-list"></i>جزییات</a></li>
                                                <li><a href="#"><i class="icon-chart-pie"></i> آمار</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-cancel"></i> پاک کردن لیست</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel body -->
                                <div class="panel-body">
                                    <div class="stack-order">
                                        <h1 class="no-margins">$87,003</h1>
                                        <small>افزایش از 89 سفارش</small>
                                    </div>
                                    <div class="bar-chart-icon"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 animatedParent animateOnce z-index-48">
                            <div class="panel minimal panel-default animated fadeInUp">
                                <div class="panel-heading clearfix">
                                    <div class="panel-title"> بازدید کنندگان</div>
                                    <ul class="panel-tool-options">
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"
                                               aria-expanded="false"><i class="icon-cog"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-arrows-ccw"></i> بروزرسانی</a></li>
                                                <li><a href="#"><i class="icon-list"></i>جزییات</a></li>
                                                <li><a href="#"><i class="icon-chart-pie"></i> آمار</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-cancel"></i> پاک کردن لیست</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel body -->
                                <div class="panel-body">
                                    <div class="stack-order">
                                        <h1 class="no-margins">823</h1>
                                        <small> بازدید های جدیدی این ماه</small>
                                    </div>
                                    <div class="bar-chart-icon"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 animatedParent animateOnce z-index-47">
                            <div class="panel minimal panel-default animated fadeInUp">
                                <div class="panel-heading no-border clearfix">
                                    <ul class="panel-tool-options">
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle" href="#"
                                               aria-expanded="false"><i class="icon-cog"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#"><i class="icon-arrows-ccw"></i> بروزرسانی</a></li>
                                                <li><a href="#"><i class="icon-list"></i>جزییات</a></li>
                                                <li><a href="#"><i class="icon-chart-pie"></i> آمار</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="icon-cancel"></i> پاک کردن لیست</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- panel body -->
                                <div class="panel-body panel-content">
                                    <div class="stack-order text-center">
                                        <h1>7856</h1>
                                        <h4>محصولات فروخته شده تا کنون</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
