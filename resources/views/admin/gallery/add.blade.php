@extends('admin.layout.auth1')


@section('content')
        <section id="main-content">
            <section class="wrapper">
                <div class="row">
                   <div class="col-md-12">
                         <div class="row">
                              @include('includes.messages')
                        <h1 class="page-header" style="margin-right:10px;">
                           اضافه کردن دسته بندی گالری
                        </h1>
                        </div>
                        <form action="{{route('galleries.store')}}" method="post" enctype="multipart/form-data" style="color:black;">
                        
                        @include('admin.gallery.form')
                   </div>
                  
                </div>
            </section>
        </section>
@endsection

@section('js')
    

@endsection
