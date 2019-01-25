@extends('layouts.main')

@section('title')

    create bol
@endsection

@section('body')
    <section class="container">

        <h1 style="text-align:center; font-style: italic;">ایجاد بارنامه</h1>




        <div class="col-6 m-auto">
            <form action="/bol" method="post">
                @csrf


                <div class="form-group">
                    <lable>شماره بارنامه</lable>
                    <input class="form-control" type="text" name="no_of_bol">
                </div>

                <br/>

                <div class="form-group">
                    <lable>تاریخ</lable>
                    <input class="form-control" type="date" name="date">
                </div>

                <br/>



                <div class="form-group">
                    <lable>شماره نوع بیمه</lable>
                    <input class="form-control" type="text" name="no_type_insource">
                </div>

                <br/>

                <div class="form-group">
                    <lable>مبدا</lable>
                    <input class="form-control" type="text" name="source">
                </div>

                <br/>

                <div class="form-group">
                    <lable>مقصد</lable>
                    <input class="form-control" type="text" name="destination">
                </div>

                <br/>

                <div class="form-group">
                    <lable>هزینه حمل بار</lable>
                    <input class="form-control" type="text" name="fee_of_carry">
                </div>

                <br/>

                <div class="form-group">
                    <lable>نام کالا</lable>
                    <input class="form-control" type="text" name="name_of_good">
                </div>

                <br/>

                <div class="form-group">
                    <lable>مقدار کالا</lable>
                    <input class="form-control" type="text" name="quantity">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره نوع واحد کالا</lable>
                    <input class="form-control" type="text" name="no_of_unit_type">
                </div>

                <br/>

                <div class="form-group">
                    <lable>کد کالا</lable>
                    <input class="form-control" type="text" name="good_code">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره کارمندی مسئول ثبت</lable>
                    <input class="form-control" type="text" name="id_no_employee">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره ملی گیرنده</lable>
                    <input class="form-control" type="text" name="id_no_reseaver">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره ملی فرستنده</lable>
                    <input class="form-control" type="text" name="id_no_sender">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره ملی راننده</lable>
                    <input class="form-control" type="text" name="id_no_driver">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره ملی مشتری</lable>
                    <input class="form-control" type="text" name="id_no_customer">
                </div>

                <br/>

                <button class="btn btn-primary btn-block" type="button">ذخیره اطلاعات</button>
            </form>
        </div>
    </section>
@endsection