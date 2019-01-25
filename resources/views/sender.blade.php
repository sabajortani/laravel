@extends('layouts.main')

@section('title')

  create sender account
@endsection

@section('body')
    <section class="container">

        <h1 style="text-align:center; font-style: italic;">ایجاد فرستنده</h1>




        <div class="col-6 m-auto">
            <form action="/sender" method="post">
                @csrf


                <div class="form-group">
                    <lable>آدرس فرستنده</lable>
                    <input class="form-control" type="text" name="address_of_sender">
                </div>


                <br/>

                <div class="form-group">
                    <lable>نام فرستنده</lable>
                    <input class="form-control" type="text" name="name_of_sender">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره ملی فرستنده</lable>
                    <input class="form-control" type="text" name="id_of_sender">
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