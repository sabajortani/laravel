
@extends('layouts.main')

@section('title')

    create customer
@endsection

@section('body')
    <section class="container">

        <h1 style="text-align:center; font-style: italic;">ایجاد مشتری</h1>




        <div class="col-6 m-auto">
            <form action="/customer" method="post">
                @csrf


                <div class="form-group">
                    <lable>نام کاربری</lable>
                    <input class="form-control" type="text" name="user_name">
                </div>

                <br/>

                <lable>تاریخ</lable>
                <input class="form-control" type="date" name="date">




        <br/>

        <div class="form-group">
            <lable>شماره ملی</lable>
            <input class="form-control" type="text" name="id_no">
        </div>

        <br/>

        <div class="form-group">
            <lable>نام</lable>
            <input class="form-control" type="text" name="first_name">
        </div>

        <br/>

        <div class="form-group">
            <lable>نام خانوادگی</lable>
            <input class="form-control" type="text" name="last_name">
        </div>

        <br/>

        <div class="form-group">
            <lable>ایمیل</lable>
            <input class="form-control" type="text" name="email">
        </div>

        <br/>

        <div class="form-group">
            <lable>تاریخ پایان قرارداد</lable>
            <input class="form-control" type="text" name="date_of_contract_end">
        </div>


        <br/>

        <button class="form-control btn btn-outline-info" type="submit">ذخیره اطلاعات</button>
        <br/>
        <br/><br/>
        </form>
        </div>
    </section>
@endsection