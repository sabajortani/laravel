@extends('layouts.main')

@section('title')

   define new store
@endsection

@section('body')
    <section class="container">

        <h1 style="text-align:center; font-style: italic;">ایجاد انبار</h1>




        <div class="col-6 m-auto">
            <form action="/store" method="post">
                @csrf


                <div class="form-group">
                    <lable>نام انبار</lable>
                    <input class="form-control" type="text" name="name">
                </div>


                <br/>

                <div class="form-group">
                    <lable>کد انبار</lable>
                    <input class="form-control" type="text" name="code_of_store">
                </div>

                <br/>

                <div class="form-group">
                    <lable>آدرس انبار</lable>
                    <input class="form-control" type="text" name="address">
                </div>

                <br/>

                <div class="form-group">
                    <lable>ظرفیت انبار</lable>
                    <input class="form-control" type="text" name="capacity">
                </div>

                <br/>

                <div class="form-group">
                    <lable>وضعیت انبار</lable>
                    <input class="form-control" type="text" name="state_of_store">
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