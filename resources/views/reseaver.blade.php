@extends('layouts.main')

@section('title')

   add receiver
@endsection

@section('body')
    <section class="container">

        <h1 style="text-align:center; font-style: italic;">ایجاد گیرنده بار</h1>




        <div class="col-6 m-auto">
            <form action="/receaver" method="post">
                @csrf


                <div class="form-group">
                    <lable>آدرس گیرنده</lable>
                    <input class="form-control" type="text" name="address_of_receaver">
                </div>


                <br/>

                <div class="form-group">
                    <lable>نام گیرنده</lable>
                    <input class="form-control" type="text" name="name_of_receaver">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره ملی گیرنده</lable>
                    <input class="form-control" type="text" name="id_of_receaver">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره بارنامه</lable>
                    <input class="form-control" type="text" name="no_of_bol">
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