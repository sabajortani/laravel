@extends('layouts.main')

@section('title')

    create bol
@endsection

@section('body')
    <section class="container">

        <h1 style="text-align:center; font-style: italic;">ویرایش بارنامه</h1>




        <div class="col-6 m-auto">
            <form action="{{route('bol.update', ['id'=> $bol->no_of_bol])}}" method="post">
                @csrf


                          <div class="form-group">
                               <lable>شماره بارنامه</lable>
                               <input class="form-control" type="text" name="no_of_bol">
                                </div>


                <div class="form-group">
                    <lable>تاریخ</lable>
                    <input class="form-control" type="date" name="date" value="{{$bol->date}}">
                </div>
                </odiv>
                <br/>





                <div class="form-group">

                    <div>
                        <lable> نوع بیمه</lable>
                        <select name="???" data-placeholder="no_type_insource"=width:520px;" tabindex="1">
                        <option value="in1">باربری وراداتی</option>
                        <option value="in2"> باربری صادراتی</option>
                        <option value="in3"> باربری ترانزیت</option>
                        <option value="in3"> باربری داخلی</option>


                        </select>

                    </div>
                </div>





                <div class="form-group">
                    <lable>مبدا</lable>
                    <input class="form-control" type="text" name="source" value="{{$bol->source}}">
                </div>

                <br/>

                <div class="form-group">
                    <lable>مقصد</lable>
                    <input class="form-control" type="text" name="destination" value="{{$bol->destination}}">
                </div>

                <br/>

                <div class="form-group">
                    <lable>هزینه حمل بار</lable>
                    <input class="form-control" type="text" name="fee_of_carry" value="{{$bol->fee_of_carry}}">
                </div>

                <br/>

                <div class="form-group">
                    <lable>نام کالا</lable>
                    <input class="form-control" type="text" name="name_of_good" value="{{$bol->name_of_good}}">
                </div>

                <br/>

                <div class="form-group">
                    <lable>مقدار کالا</lable>
                    <input class="form-control" type="text" name="quantity" value="{{$bol->quantity}}">
                </div>

                <br/>




                <div class="form-group">

                    <div>
                        <lable> نوع واحد کالا</lable>
                        <select data-placeholder="no_of_unit_type style"=width:520px;" tabindex="1">
                        <option value="ton">تن</option>
                        <option value="ton">کیلوگرم</option>
                        <option value="cartoon">کارتن</option>

                        </select>

                    </div>
                </div>



                <br/>  <br/>

                <div class="form-group">
                    <lable>کد کالا</lable>
                    <input class="form-control" type="text" name="good_code" value="{{$bol->good_code}}">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره کارمندی مسئول ثبت</lable>
                    <input class="form-control" type="text" name="id_no_employee" value="{{$bol->id_no_employee}}">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره ملی گیرنده</lable>
                    <input class="form-control" type="text" name="id_no_reseaver" value="{{$bol->id_no_reseaver}}">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره ملی فرستنده</lable>
                    <input class="form-control" type="text" name="id_no_sender" value="{{$bol->id_no_sender}}">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره ملی راننده</lable>
                    <input class="form-control" type="text" name="id_no_driver" value="{{$bol->id_no_driver}}">
                </div>

                <br/>

                <div class="form-group">
                    <lable>شماره ملی مشتری</lable>
                    <input class="form-control" type="text" name="id_no_customer" value="{{$bol->id_no_customer}}">
                </div>

                <br/>

                <button class="btn btn-primary btn-block" type="submit">ذخیره اطلاعات</button>
                <br/>   <br/>   <br/>   <br/>
            </form>
        </div>
    </section>
@endsection