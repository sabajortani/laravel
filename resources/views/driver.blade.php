@extends('layouts.main')

@section('title')

    Add Driver
@endsection

@section('body')
    <section class="container">

        <h1 style="text-align:center; font-style: italic;">ثبت راننده</h1>




        <div class="col-6 m-auto">
            <form action="/driver" method="post">
                @csrf


                <div class="form-group">
                    <lable>آدرس راننده</lable>
                    <input class="form-control" type="text" name="address_of_driver">
                </div>


                <br/>

                <div class="form-group">
                    <lable>نام راننده</lable>
                    <input class="form-control" type="text" name="name_of_driver">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره ملی راننده</lable>
                    <input class="form-control" type="text" name="id_of_bol">
                </div>

                <br/>

                <div class="form-group">
                    <lable>پلاک ماشین</lable>
                    <input class="form-control" type="text" name="plaques_of_car">
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