@extends('admin.layout.auth1')

@section('content')

        <section id="main-content">
            <section class="wrapper">
                <div class="row" style="margin-right:10px;">
                    @include('includes.messages')
                     <h1 class="page-header">
                       همه محصولات
                    
                    </h1>
                    <a href="{{route('categories.create')}}" class="btn btn-success">
                        افزودن دسته بندی جدید
                    </a>
                    
 
                    <hr>
                       
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
                                    ویرایش
                                </th>
                                <th>
                                    حذف
                                </th>
                          </tr>
                        </thead>
                        <?php $i=0; ?>
                            @foreach($categories as $category)
                        <tbody>
                            
                            
                            <?php $i++; ?>
                            <form method="post" class="confirm-form" action="{{route('categories.destroy',$category)}}" id="delete{{$category->id}}"> </form>
                            
                            
                            <input type="hidden" name="_method" value="DELETE" form="delete{{$category->id}}" >

                            <td>{{$i}}</td>
                            <td>{{$category->title}}</td>
                            <td>
                              <a class="btn btn-info" href="{{route('categories.edit',$category)}}">
                                  <i class="fa fa-edit"></i> </a> 
                            </td>
                            <td>
                                 <button class="btn btn-danger" type="submit" form="delete{{$category->id}}">
                                   <span class="glyphicon glyphicon-remove"></span>
                                </button> 
                            </td>
                            
                        </tbody>
                        @endforeach
                    </table>  

                    
                </div>
            </section>
        </section>
@endsection

@section('js')
<script>

    $('form').append('{{csrf_field()}}');
</script>
@endsection