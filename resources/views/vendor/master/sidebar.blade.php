

<div class="sidebar" style="direction: ltr">
    <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{(!empty($data->photo)) ? url('upload/vendor/image/'.$data->photo): url('upload/vendor/image/R.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a  href="{{route('VendorProfile')}}" class="nav-link">
                        <i class="fa fa-calendar nav-icon"></i>
                        <p> پروفایل </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-plus-square-o"></i>
                        <p>
                            بیشتر
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('VendorChangePass')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>تغیر پسورد</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @php
                    $id=\Illuminate\Support\Facades\Auth::user()->id;
                    $vendor=\App\Models\User::find($id);
                    $status=$vendor->status;
                @endphp
                @if($status === 'active')
                <li class="nav-item has-treeview menu-open">
                    <a style="background-color: #548d69" href="#" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            مدیریت کاربران
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link ">
                                <i class="fa fa-users nav-icon"></i>
                                <p> لیست کاربران </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="" class="nav-link">
                                <i class="fa fa-users nav-icon"></i>
                                <p>ایجاد کاربر</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a style="background-color: #548d69" href="#" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            مدیریت محصولات
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link ">
                                <i class="fa fa-product-hunt nav-icon"></i>
                                <p> لیست محصولات </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="" class="nav-link">
                                <i class="fa fa-product-hunt nav-icon"></i>
                                <p>ایجاد محصولات</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a style="background-color: #548d69" href="#" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            مدیریت بلاگ ها
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link ">
                                <i class="fa fa-product-hunt nav-icon"></i>
                                <p> لیست بلاگ  </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="" class="nav-link">
                                <i class="fa fa-product-hunt nav-icon"></i>
                                <p>ایجاد بلاگ</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a style="background-color: #548d69" href="#" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            مدیریت دسته بندی
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link ">
                                <i class="fa fa-th-list  nav-icon"></i>
                                <p> لیست دسته بندی </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="" class="nav-link">
                                <i class="fa fa-th nav-icon"></i>
                                <p>ایجاد دسته بندی</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="nav-item has-treeview menu-open">
                    <a  href="{{route('vendorLogout')}}" class="nav-link">
                        <i class="fa fa-close nav-icon"></i>
                        <p> خروج </p>
                    </a>
                </li>
                /
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
</div>

