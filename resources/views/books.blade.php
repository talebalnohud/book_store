@extends('layout.app')

@section('content')



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            الكتب
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li><a href="#">الكتب</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                                  <div class="box">
                <div class="box-header">
                  <h3 class="box-title">كل الكتب</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tr>
                      <th style="width: 10px">#</th>
                      <th class="text-center">عنوان</th>
                      <th class="text-center">الكاتب</th>
                      <th class="text-center">صورة</th>
                      <th class="text-center">سعر</th>
                    </tr>

                    @foreach ($books as $book)

                    <tr>
                        <td class="text-center">{{$book->id}}</td>
                        <td class="text-center">{{$book->title}}</td>
                        <td class="text-center">{{$book->author}}</td>
                        <td class="text-center">
                            <img src="{{$book->image}}" width="50">
                        </td>
                        <td class="text-center">{{$book->price}}</td>
                    @endforeach
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
                </div>
            </div>

        </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
@endsection
