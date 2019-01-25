@extends('layouts.main')

@section('title')

    Enter Tell
@endsection

@section('body')
    <section class="container">

        <h1 style="text-align:center; font-style: italic;">افزودن شماره تلفن</h1>




        <div class="col-6 m-auto">
            <form action="/tell" method="post">
                @csrf


                <div class="form-group">
                    <lable>شماره</lable>
                    <input class="form-control" type="text" name="name">
                </div>


                <br/>

                <div class="form-group">
                    <lable>تلفن</lable>
                    <input class="form-control" type="text" name="code_of_store">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره ملی گیرنده</lable>
                    <input class="form-control" type="text" name="address">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره ملی راننده</lable>
                    <input class="form-control" type="text" name="capacity">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره ملی فرستنده</lable>
                    <input class="form-control" type="text" name="state_of_store">
                </div>

                <br/>

                <div class="form-group">
                    <lable>نام</lable>
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