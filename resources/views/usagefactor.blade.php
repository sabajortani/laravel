@extends('layouts.main')

@section('title')

    create usage factor
@endsection

@section('body')
    <section class="container">

        <h1 style="text-align:center; font-style: italic;">ایجاد فاکتور خرید</h1>




        <div class="col-6 m-auto">
            <form action="/usagefactor" method="post">
                @csrf


                <div class="form-group">
                    <lable>شماره سند</lable>
                    <input class="form-control" type="text" name="doc_no_auto">
                </div>


                <br/>

                <div class="form-group">
                    <lable>تاریخ</lable>
                    <input class="form-control" type="date" name="date">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره بارنامه</lable>
                    <input class="form-control" type="text" name="no_of_bol">
                </div>

                <br/>

                <div class="form-group">
                    <lable>کد انبار</lable>
                    <input class="form-control" type="text" name="code_of_store">
                </div>

                <br/>

                <div class="form-group">
                    <lable>مقدار کالا</lable>
                    <input class="form-control" type="text" name="quantity">
                </div>

                <br/>

                <div class="form-group">
                    <lable>نام مسئول خرید</lable>
                    <input class="form-control" type="text" name="owner_name">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره کارمندی مسئول خرید</lable>
                    <input class="form-control" type="text" name="employee_id">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره نوع سند</lable>
                    <input class="form-control" type="text" name="no_of_doc_type">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره نوع واحد</lable>
                    <input class="form-control" type="text" name="no_of_unit_type">
                </div>

                <br/>

                <div class="form-group">
                    <lable>نام کالا</lable>
                    <input class="form-control" type="text" name="name_of_good">
                </div>

                <br/>

                <div class="form-group">
                    <lable>تاریخ خرید</lable>
                    <input class="form-control" type="date" name="date_of_shopping">
                </div>

                <br/>

                <div class="form-group">
                    <lable>قیمت</lable>
                    <input class="form-control" type="text" name="fee">
                </div>

                <br/>

                <div class="form-group">
                    <lable>علت خرید</lable>
                    <input class="form-control" type="text" name="reason">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره فاکتور</lable>
                    <input class="form-control" type="text" name="no_of_factor">
                </div>

                <br/>


                <button class="btn btn-primary btn-block" type="button">ذخیره اطلاعات</button>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>

            </form>
        </div>


    </section>
@endsection