

<div class="sidebar" style="direction: ltr">
    <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{(!empty($data->photo)) ? url('upload/admin/image/'.$data->photo): url('upload/admin/image/no_images.png')}}" class="img-circle elevation-2" alt="User Image">
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
                    <a  href="{{route('admin.profile')}}" class="nav-link">
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
                            <a href="{{route('AdminChangePass')}}" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>تغیر پسورد</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a style="background-color: #548d69" href="#" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            مدیریت برند
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('AdminBrandCreate')}}" class="nav-link ">
                                <i class="fa fa-braille nav-icon"></i>
                                <p> افزودن برند </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{route('AdminBrandIndex')}}" class="nav-link">
                                <i class="fa fa-braille nav-icon"></i>
                                <p>لیست برندها</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a style="background-color: #548d69" href="#" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            مدیریت گوپون ها
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('ُCouponCreate')}}" class="nav-link ">
                                <i class="fa fa-braille nav-icon"></i>
                                <p> افزودن کوپون </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{route('ُCouponIndex')}}" class="nav-link">
                                <i class="fa fa-braille nav-icon"></i>
                                <p>لیست کوپون ها</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a style="background-color: #548d69" href="#" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            مدیریت ناوگان حمل ونقل
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('ُDivisionCreate')}}" class="nav-link ">
                                <i class="fa fa-braille nav-icon"></i>
                                <p> افزودن ناوگان </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{route('ُDivisionIndex')}}" class="nav-link">
                                <i class="fa fa-braille nav-icon"></i>
                                <p>لیست ناوگان ها</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('ُDistrictCreate')}}" class="nav-link ">
                                <i class="fa fa-braille nav-icon"></i>
                                <p> افزودن منطقه ناوگان </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{route('ُDistrictIndex')}}" class="nav-link">
                                <i class="fa fa-braille nav-icon"></i>
                                <p>لیست منطقه ناوگان ها</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('ُStateCreate')}}" class="nav-link ">
                                <i class="fa fa-braille nav-icon"></i>
                                <p> افزودن شهر ناوگان </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{route('StateIndex')}}" class="nav-link">
                                <i class="fa fa-braille nav-icon"></i>
                                <p>لیست شهر ناوگان ها</p>
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
                            <a href="{{route('ProductIndex')}}" class="nav-link ">
                                <i class="fa fa-product-hunt nav-icon"></i>
                                <p> لیست محصولات </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{route('ProductCreate')}}" class="nav-link">
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
                            مدیریت اسلایدها
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('ُSliderIndex')}}" class="nav-link ">
                                <i class="fa fa-product-hunt nav-icon"></i>
                                <p> لیست اسلایدها </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{route('SliderCreate')}}" class="nav-link">
                                <i class="fa fa-product-hunt nav-icon"></i>
                                <p>ایجاد اسلاید</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a style="background-color: #548d69" href="#" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            مدیریت بنرها
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('ُBannerIndex')}}" class="nav-link ">
                                <i class="fa fa-product-hunt nav-icon"></i>
                                <p> لیست بنرها </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{route('ُBannerCreate')}}" class="nav-link">
                                <i class="fa fa-product-hunt nav-icon"></i>
                                <p>ایجاد بنر</p>
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
                            مدیریت فروشنده ها
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('AdminVendorINActive')}}" class="nav-link ">
                                <i class="fa fa-user-circle nav-icon"></i>
                                <p>  فروشنده فعال  </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{route('AdminVendorINActive')}}" class="nav-link">
                                <i class="fa fa-user-circle nav-icon"></i>
                                <p>فروشنده غیر فعال  </p>
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
                            <a href="{{route('AdminCategoryIndex')}}" class="nav-link ">

                                <i class="fa fa-th-list  nav-icon"></i>
                                <p> لیست دسته بندی </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{route('AdminCategoryCreate')}}" class="nav-link">
                                <i class="fa fa-th nav-icon"></i>
                                <p>ایجاد دسته بندی</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('AdminSubCategoryIndex')}}" class="nav-link ">

                                <i class="fa fa-th-list  nav-icon"></i>
                                <p> لیست زیر دسته بندی </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{route('AdminSubCategoryCreate')}}" class="nav-link">
                                <i class="fa fa-th nav-icon"></i>
                                <p>ایجاد زیر دسته بندی</p>
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item has-treeview menu-open">
                    <a style="background-color: #548d69" href="#" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            مدیریت کامنت ها
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('Publish')}}" class="nav-link ">
                                <i class="fa fa-braille nav-icon"></i>
                                <p> کامنت های فعال </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{route('Pending')}}" class="nav-link">
                                <i class="fa fa-braille nav-icon"></i>
                                <p> کامنت های غیر فعال </p>
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
                            <a href="{{route('ُCategoryBlogIndex')}}" class="nav-link ">
                                <i class="fa fa-braille nav-icon"></i>
                                <p> لیست دسته بندی بلاگ ها </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{route('ُCategoryBlogCreate')}}" class="nav-link">
                                <i class="fa fa-braille nav-icon"></i>
                                <p> افزودن دسته بندی بلاگ ها </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('ُBlogIndex')}}" class="nav-link ">
                                <i class="fa fa-braille nav-icon"></i>
                                <p> لیست بلاگ ها </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{route('ُBlogCreate')}}" class="nav-link">
                                <i class="fa fa-braille nav-icon"></i>
                                <p> افزودن بلاگ ها </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a style="background-color: #548d69" href="#" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            تنظیمات سایت
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('StingSeo')}}" class="nav-link ">
                                <i class="fa fa-braille nav-icon"></i>
                                <p> مشخصات سئو </p>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('StingSite')}}" class="nav-link ">
                                <i class="fa fa-braille nav-icon"></i>
                                <p> مشخصات سایت </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a  href="{{route('adminLogout')}}" class="nav-link">
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


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{ asset('admin/dist/js/code.js') }}"></script>
