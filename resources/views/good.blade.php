@extends('layouts.main')

@section('title')

    define good
@endsection

@section('body')
    <section class="container">

        <h1 style="text-align:center; font-style: italic;">ایجاد کالا</h1>




        <div class="col-6 m-auto">
            <form action="/good" method="post">
                @csrf


                <div class="form-group ">
                    <lable>نام مشتری</lable>
                    <input class="form-control" type="text" name="owner_name">
                </div>


                <br/>

                <div class="form-group">
                    <lable>نام کالا</lable>
                    <input class="form-control" type="text" name="name_of_good">
                </div>

                <br/>

                <div class="form-group">
                    <lable>کد کالا</lable>
                    <input class="form-control" type="text" name="good_code_auto">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره کاربری مسئول ثبت</lable>
                    <input class="form-control" type="text" name="id_no_of_employee">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره نوع واحد کالا</lable>
                    <input class="form-control" type="text" name="no_of_unit_type">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شرایط نگهداری</lable>
                    <input class="form-control" type="text" name="strong_condition">
                </div>

                <br/>

                <div class="form-group">
                    <lable>تاریخ انقضا</lable>
                    <input class="form-control" type="text" name="expire_date">
                </div>

                <br/>

                <div class="form-group">
                    <lable>مقدار کالا</lable>
                    <input class="form-control" type="text" name="quantity">
                </div>

                <br/>

                <div class="form-group">
                    <lable>نوع بسته بندی</lable>
                    <input class="form-control" type="text" name="no_packing_type">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره بارنامه</lable>
                    <input class="form-control" type="text" name="no_of_bol">
                </div>

                <br/>

                <div class="form-group">
                    <lable>تاریخ ورود کالا</lable>
                    <input class="form-control" type="text" name="entry_date">
                </div>

                <br/>




                <button class="form-control btn btn-outline-info" type="submit">ذخیره اطلاعات</button>
                <br/> <br/> <br/> <br/>
            </form>
        </div>
    </section>
@endsection