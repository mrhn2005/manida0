@extends('admin.layout.auth1')


@section('content')
        <section id="main-content">
            <section class="wrapper">
                <div class="row">
                   <div class="col-md-12">
                         <div class="row">
                              @include('includes.messages')
                        <h1 class="page-header" style="margin-right:10px;">
                           اضافه کردن محصول جدید
                        </h1>
                        </div>
                    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data" style="color:black;">
                        
                        @include('admin.product.form')
                   </div>
                  
                </div>
            </section>
        </section>
@endsection

@section('js')
    

@endsection
