<div class="page-sidebar">
    <header class="site-header">
        <div class="site-logo"><a href="index.html"><img src="/back/images/logo.png" alt="Mouldifi" title="Mouldifi"></a></div>
        <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
        <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
    </header>
    <ul id="side-nav" class="main-menu navbar-collapse collapse">
        <li >
            <a href="{{route('dashboard')}}"><i class="icon-gauge"></i><span class="title"> داشبورد</span></a>
        </li>
        <li class="has-sub">
            <a href="collapsed-sidebar.html"><i class="fa fa-university"></i><span class="title">دانشگاه ها</span></a>
            <ul class="nav collapse">
                <li><a href="{{route('university.index')}}"><span class="title">لیست دانشگاه ها</span></a></li>
                <li><a href="{{route('university.create')}}"><span class="title">ثبت دانشگاه جدید</span></a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="collapsed-sidebar.html"><i class="fa fa-building-o"></i><span class="title">دانشکده ها</span></a>
            <ul class="nav collapse">
                <li><a href="{{route('faculty.index')}}"><span class="title">لیست دانشکده ها</span></a></li>
                <li><a href="{{route('faculty.create')}}"><span class="title">ثبت دانشکده جدید</span></a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="collapsed-sidebar.html"><i class="fa fa-list"></i><span class="title">رشته های تحصیلی</span></a>
            <ul class="nav collapse">
                <li><a href="{{route('program.index')}}"><span class="title">لیست رشته های تحصیلی</span></a></li>
                <li><a href="{{route('program.create')}}"><span class="title">ثبت رشته تحصیلی</span></a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="collapsed-sidebar.html"><i class="fa fa-level-up"></i><span class="title">مقطع تحصیلی</span></a>
            <ul class="nav collapse">
                <li><a href="{{route('degree.index')}}"><span class="title">لیست مقاطع تحصیلی</span></a></li>
                <li><a href="{{route('degree.create')}}"><span class="title">ثبت مقطع تحصیلی</span></a></li>
            </ul>
        </li>
        <li class="has-sub">
            <a href="collapsed-sidebar.html"><i class="fa fa-book"></i><span class="title">دروس</span></a>
            <ul class="nav collapse">
                <li><a href="{{route('course.index')}}"><span class="title">لیست دروس</span></a></li>
                <li><a href="{{route('courseType.index')}}"><span class="title">لیست نوع دروس</span></a></li>
                <li><a href="{{route('courseCategory.index')}}"><span class="title">لیست دسته بندی دروس</span></a></li>
            </ul>
        </li>

    </ul>
</div>
