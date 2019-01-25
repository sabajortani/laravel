@extends('layouts.main')

@section('title')

   create employee
@endsection

@section('body')
    <section class="container">

        <h1 style="text-align:center; font-style: italic;">ثبت کارمند</h1>




        <div class="col-6 m-auto">
            <form action="/employee" method="post">
                @csrf


                <div class="form-group">
                    <lable>نام کاربری</lable>
                    <input class="form-control" type="text" name="user_name">
                </div>


                <br/>

                <div class="form-group">
                    <lable>شماره نوع سمت</lable>
                    <input class="form-control" type="text" name="no_of_position_type">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره ملی</lable>
                    <input class="form-control" type="text" name="id_number">
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