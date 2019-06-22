@extends('admin.layout.auth1')

@section('content')

        <section id="main-content">
            <section class="wrapper">
                <div class="row" style="margin-right:10px;">
                    @include('includes.messages')
                     <h1 class="page-header">
                       همه محصولات
                    
                    </h1>
                    <a href="{{route('products.create')}}" class="btn btn-success">
                        افزودن محصول جدید
                    </a>
                    
                   <div class="container">
                       <br>
                        <div class="input-group">
                            <span class="input-group-addon" style="    border-radius: 0px; border: solid 1px #CCCCCC;">
                                انتخاب دسته بندی
                            </span>
                            <select id="active_discount" name="active_discount"  class="form-control" onchange="location = this.value;">
                                 
                                  <option value="{{route('products.index')}}">
                                  همه محصولات
                                </option>
                                @foreach($categories as $category)
                                    <option value="{{route('products.category',$category->id)}}" {{request()->route('id')==$category->id?"selected":""}}>
                                      {{$category->title}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                    </div>
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon" style="    border-radius: 0px; border: solid 1px #CCCCCC;">
                            عبارت جستجو
                            </span>
                            <input id="product_search" type="text" class="form-control" name="msg" placeholder="نام کالای مورد نظر خود را وارد نمایید.">
                        </div>
                    </div>
 
                    <hr>
                        <div class="text-center">
 
                             @if(method_exists($products,'links' ))
                            <div class="pull-left" style="margin-left:20px;">
                            {{ $products->links()}}
                            </div>
                            @endif
                        </div>
                   
                    <table class="table table-hover">
                        <thead>
                          <tr>
                               <th>
                                   شماره
                                </th>
                               <th>
                                   عنوان
                                 </th>
                               <th>
                                   دسته بندی
                                </th>
                               <th>
                                  قیمت
                                </th>
                                <th>
                                    اضافه کردن عکس
                                </th>
                                <th>
                                    ویرایش
                                </th>
                                <th>
                                    حذف
                                </th>
                          </tr>
                        </thead>
                        <tbody>
                           
                            @include('admin.product.search')
                      </tbody>
                    </table>  
                    @if(method_exists($products,'links' ))
                    <div class="text-center">
                      {{ $products->links()}}
                    </div>
                    @endif
                    
                </div>
            </section>
        </section>
@endsection

@section('js')
<script>
    var typingTimer;                //timer identifier
    var doneTypingInterval = 500;  //time in ms, 5 second for example
    var $input = $('#product_search');
    
    //on keyup, start the countdown
    $input.on('keyup', function () {
        clearTimeout(typingTimer);
      typingTimer = setTimeout(doneTyping, doneTypingInterval);
      
    //   console.log('hi');
    });
    
    //on keydown, clear the countdown 
    $input.on('keydown', function () {
      clearTimeout(typingTimer);
    });
    
    //user is "finished typing," do something
    function doneTyping () {
        // console.log('hi');
        
        $.ajax({
              url: "{{route('admin.product.search')}}",
              method: 'post',
              data:{
                term: $('#product_search').val(),
                
                _token: "{{csrf_token()}}"
              },
              success: function(response){
                  console.log(response);
                  $('tbody').html(response);
                  $('form').append('{{csrf_field()}}');
   
              },
              error: function(xhr){
                  $('body').html(xhr.responseText);
              }
            });
       
        
    }
    $('form').append('{{csrf_field()}}');
</script>
@endsection